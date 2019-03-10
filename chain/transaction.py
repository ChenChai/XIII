from classes import *

from netblock import *
default={
	"last":Header(0,"",""),
	"user":{},
	"efrom":{},
	"eto":{}
}

def dump():
	id=getLast()
	while id!=0:
		h,t=Record_deserialize(get(id))
		print "="*10
		print "Block Id:"+str(h.id)
		print "Block Hash:"+h.nounce
		print "Block Nounce:"+h.hash
		print "-"*10
		print "To:"+str(t.to)+" ("+str(t.tot)+")"
		print "From:"+str(t.fr)+" ("+str(t.frt)+")"
		print "Previous Block Id:"+str(t.prevhead.id)
		print "Previous Block Hash:"+t.prevhead.nounce
		print "-"*10
		print "Subject:" +t.email.subject
		print "Message:"+t.email.message
		
		id=t.prevhead.id

dump()