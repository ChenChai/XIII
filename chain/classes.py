import base64 as b64

class Email():
	def __init__(self,subject,message):
		self.subject=subject
		self.message=message
	def serialize(self):
		return b64.b64encode(self.subject)+"@"+b64.b64encode(self.message)
	@staticmethod
	def deserialize(ser):
		s,n=map(b64.b64decode,ser.split("@"))
		return Email(s,n)
	def __repr__(self):
		return "sub:"+self.subject+"@msg:"+self.message

class Header():
	def __init__(self,id,nounce,hash):
		self.id=id
		self.nounce=nounce
		self.hash=hash
	def serialize(self):
		return b64.b64encode(str(self.id))+"@"+b64.b64encode(self.nounce)+"@"+b64.b64encode(self.hash)
	@staticmethod
	def deserialize(ser):
		i,n,h=map(b64.b64decode,ser.split("@"))
		return Header(int(i),n,h)
		
	def __repr__(self):
		return "header:"+str(self.id)


class Transaction():
	def __init__(self,fr,frt,to,tot,em,head):
		self.fr=fr
		self.frt=frt
		self.to=to
		self.tot=tot
		self.email=em
		self.prevhead=head
	def serialize(self):
		return b64.b64encode(self.fr)+"@"+b64.b64encode(str(self.frt))+"@"+b64.b64encode(self.to)+"@"+b64.b64encode(str(self.tot))+"@"+b64.b64encode(self.email.serialize())+"@"+b64.b64encode(self.prevhead.serialize())
	@staticmethod
	def deserialize(ser):
		f,ft,t,tt,e,h=map(b64.b64decode,ser.split("@"))
		return Transaction(f,int(ft),t,int(tt),Email.deserialize(e),Header.deserialize(h))

def Record_serialize(head,trans):
	return b64.b64encode(head.serialize())+"|"+b64.b64encode(trans.serialize())
def Record_deserialize(ser):
	a,b=map(b64.b64decode,ser.split("|"))
	return (Header.deserialize(a),Transaction.deserialize(b))