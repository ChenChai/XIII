from classes import *

from hashlib import md5
#from miner2 import hash
from magic import magic
import struct
DIFF=2

def hash(ser,nounce):
	return magic(list(map(ord,struct.pack("Q",int(nounce)))),list(map(ord,md5(ser).digest())))
	
def mine(trans):
	s=trans.serialize()
	n=0
	while True:
		h=hash(s,str(n))
		#print h
		if h[0:DIFF]==[0]*DIFF:
			return (''.join(format(x, '02x') for x in h),str(n))
		n=n+1