from classes import *
from miner import mine

e=Email("HONK!","honk honk")

ph=Header(0,"","")

t=Transaction("0",0,"1",1000,e,ph)

h,n=mine(t)

h=Header(1,h,n)

root=Record_serialize(h,t)