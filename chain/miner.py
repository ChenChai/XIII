from classes import *

from hashlib import md5

DIFF=5

def hash(ser,nounce):
	return md5(nounce+ser).hexdigest()
	
def mine(trans):
	s=trans.serialize()
	n=0
	while True:
		h=hash(s,str(n))
		if h[0:DIFF]=="0"*DIFF:
			return (h,str(n))
		n=n+1