from send import send
from netblock import insert
from navigate import load


print load()

i,b=send(1,5,"aa","bb")
insert(i,b)
i,b=send(1,5,"aa","bb")
insert(i,b)
i,b=send(1,5,"aa","bb")
insert(i,b)
i,b=send(1,5,"aa","bb")
insert(i,b)

print load()
