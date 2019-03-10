from send import send
from netblock import insert
import base64 as b64
import sys

fr=int(sys.argv[1])
to=int(sys.argv[2])
sub=b64.b64decode(sys.argv[3])
msg=b64.b64decode(sys.argv[4])

i,m=send(fr,to,sub,msg)

insert(i,m)