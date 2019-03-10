from hashlib import md5
import struct
"""
print "O = "+str([0]*16)
print "S = "+str(range(256))
def KSA(k,keylength):
    #S=list(S)
    print "j = 0"
    for i in range(256):
        print "j = j + S[%i]"% (i,)
        print "j = j + %s[%i]"% (k,i % keylength,)
        print "j = j % 256"
        print "S[%i] = S[%i] ^ S[j]"%(i,i)
        print "S[j] = S[%i] ^ S[j]"%(i,)
        print "S[%i] = S[%i] ^ S[j]"%(i,i)
    #return S
KSA("A",8)
KSA("B",16)
def PRGA(L):
    #out=[]
    print "j = 0"
    for i in range(L):
        i = (i + 1) % 256
        print "j = j + S[%i]"%(i,) 
        print "j = j % 256"
        print "S[%i] = S[%i] ^ S[j]"%(i,i)
        print "S[j] = S[%i] ^ S[j]"%(i,)
        print "S[%i] = S[%i] ^ S[j]"%(i,i)
        i = i - 1
        print "O[%i] = S[%i] + S[j]"%(i,i)
        print "O[%i] = O[%i] %% 256"%(i,i)
        print "O[%i] = S[O[%i]]"%(i,i)
    #return out
PRGA(16)
print "return O"
"""
def hash(ser,nounce):
	return magic(list(map(ord,struct.pack("Q",int(nounce)))),list(map(ord,md5(ser).digest())))