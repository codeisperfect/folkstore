
outp=[];
a={'m':'margin', 'p':'padding'};
b={'b':'bottom', 'l':'left', 'r':'right', 't':'top', '':''};
c={'h':'height', 'w':'width'};

for i in a:
	for j in b:
		for k in range(0, 30, 5):
			outp.append("."+i+j+str(k)+"{"+a[i]+ ("-" if b[j]!='' else '')  +b[j]+":"+str(k)+"px;}");

for i in c:
	for j in range(0, 30, 5):
		outp.append('.' + i + str(j) + "{" + c[i] + ":" + str(j) + "px;}" );

print "\n".join(outp);