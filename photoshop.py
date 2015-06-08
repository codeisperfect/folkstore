import os,sys,Image

def readfd(fd):
	data=fd.read();
	fd.close();
	return data;

def writefd(fd,data):
	fd.write(data);
	fd.close();

def read_file(fn):
	return readfd(open(fn));



def write_file(fn,data):
	writefd(open(fn,'w'),data);



def remf(inp,outp):
	im=Image.open(inp);
	p=im.load();
	im1=Image.new("RGBA",(im.size[0],im.size[1]));
	p1=im1.load();
	for i in range(im.size[0]):
		for j in range(im.size[1]):
			(r,g,a)=p[i,j][:3]
			if(g!=0):
				p1[i,j]=(255,255,255,255)
			else:
				p1[i,j]=(0,0,0,0);
	im1.save(outp);

#remf(inp,outp);

if(1):
	cmd=sys.argv[1];
	if(cmd=="totrans"):
		inp=sys.argv[2];
		outp=sys.argv[3];
		remf(inp,outp);
	elif(0):
		pass
