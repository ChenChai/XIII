from send import send
from memblock import insert,blockxs
from navigate import load


print load()

i,b=send(1,5,"aa","bb")
insert(2,b)
i,b=send(1,5,"aa","bb")
insert(3,b)
i,b=send(1,5,"aa","bb")
insert(4,b)
i,b=send(1,5,"aa","bb")
insert(5,b)
print blockxs
print load()
