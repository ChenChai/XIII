from classes import *
from miner import mine

e=Email("sub","msg")

ph=Header(0,"","")

t=Transaction("0",249,"1",1,e,ph)

h,n=mine(t)

print h,n

h=Header(1,h,n)

print Record_serialize(h,t)