from hashlib import md5
import struct

def KSA(S,key):
    S=list(S)
    keylength = len(key)
    j = 0
    for i in range(256):
        j = (j + S[i] + key[i % keylength]) % 256
        S[i], S[j] = S[j], S[i]  # swap
    return S


def PRGA(S,L):
    i = 0
    j = 0
    out=[]
    for i in range(L):
        i = (i + 1) % 256
        j = (j + S[i]) % 256
        S[i], S[j] = S[j], S[i]  # swap
        K = S[(S[i] + S[j]) % 256]
        out.append(K)
    return out
       
def hash(ser,nounce):
	a=KSA(range(256),list(map(ord,struct.pack("Q",int(nounce)))))#8
	b=KSA(a,list(map(ord,md5(ser).digest())))#16
	return PRGA(b,16)#16