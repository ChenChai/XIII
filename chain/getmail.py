import sys
import json
from navigate import load
id=sys.argv[1]

if id not in d["user"]:
	d["user"][id]=0
	d["eto"][id]=[]

d=load()
out={}
out["token"]=d["user"][id]
out["msg"]=list(map(lambda x:x.toDict(),d["eto"][id]))
print json.dumps(out)