import requests



def getLast():
	k=requests.post('https://terrible.chench.ai/email/lastblock.php').text
	#print ("last",k)
	return k

cache={}
def get(id):
	#print ("get",id)
	if id in cache:
		return cache[id]
	k = requests.post('https://terrible.chench.ai/email/reademail.php', data = {'id':id}).text
	#print("get",id,k)
	cache[id]=k
	return k
	
def insert(id,block):
	#print("ins",id)
	requests.post('https://terrible.chench.ai/email/sendemail.php', data = {'id':id,'block':block})
