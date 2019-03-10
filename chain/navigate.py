from classes import *

from memblock import *
default={
	"last":Header(0,"",""),
	"user":{},
	"efrom":{},
	"eto":{}
}

def load():
	data={
	"last":Header(0,"",""),
	"user":{},
	"efrom":{},
	"eto":{}
}	
	
	newid,_=Record_deserialize(get(getLast()))
	id=newid.id
	new={
		"user":{},
		"efrom":{},
		"eto":{}
	}
	while id!=data["last"].id:
		
		_,t=Record_deserialize(get(id))
		if t.fr not in new["user"]:
			new["user"][t.fr]=t.frt
		if t.to not in new["user"]:
			new["user"][t.to]=t.tot
		if t.fr not in new["efrom"]:
			new["efrom"][t.fr]=[]
		if t.to not in new["eto"]:
			new["eto"][t.to]=[]
		new["efrom"][t.fr].append(t.email)
		new["eto"][t.to].append(t.email)
		id=t.prevhead.id
	
	data["user"].update(new["user"])
	for i in new["efrom"]:
		if i not in data["efrom"]:
			data["efrom"][i]=new["efrom"][i]
		else:
			data["efrom"][i]=new["efrom"][i]+data["efrom"][i]
	for i in new["eto"]:
		if i not in data["eto"]:
			data["eto"][i]=new["eto"][i]
		else:
			data["eto"][i]=new["eto"][i]+data["eto"][i]
	data["last"]=newid
	
	return data