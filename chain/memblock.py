import rootblock

last = "1"
blockxs = {}

blockxs["1"]=rootblock.root

def getLast():
	return last

def get(id):
	return blockxs[str(id)]
	
def insert(id,block):
	global blockxs
	global last
	blockxs[str(id)]=block
	last=str(id)
	#print blockxs