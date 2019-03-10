from navigate import load
from classes import *
from miner import mine

def send(fr,to,sub,msg):
	fr=str(fr)
	to=str(to)
	d=load()
	e=Email(sub,msg)
	if to not in d["user"]:
		d["user"][to]=0
	t=Transaction(fr,d["user"][fr]-1,to,d["user"][to]+1,e,d["last"])
	hs,n=mine(t)
	#print("send",d,d["last"].id)
	h=Header((d["last"].id)+1,hs,n)
	return ((d["last"].id)+1,Record_serialize(h,t))
