import sys
import json
from navigate import load
id=sys.argv[1]

d=load()
out={}
out["token"]=d["user"][id]
out["msg"]=list(map(lambda x:x.toDict(),d["eto"][id]))
print json.dumps(out)