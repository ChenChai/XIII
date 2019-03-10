import requests

def getLast():
	return requests.post('https://httpbin.org/post', data = {'key':'value'}).text

def get(id):
	return requests.post('https://httpbin.org/post', data = {'id':id}).text
	
def insert(id,block):
	requests.post('https://httpbin.org/post', data = {'id':id,'block':block})
