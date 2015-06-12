import xlrd,json

def writefd(fd,data):
	fd.write(data);
	fd.close();


if(1):
	wb=xlrd.open_workbook("vender.xlsx");
	ws=wb.sheet_by_index(0);

data=[];
city={};
state={};
country={};
companyname={};
shopcatgs={}
brands={};

def dict2list(d):
	outp=[];
	for i in d:
		outp.append([d[i],str(i)]);
	return outp;


def setifunset(data,key,val):
	if(not(data.has_key(key))):
		data[key]=val;

for i in range(1,ws.nrows):
	row=[];
	for j in range(ws.ncols):
		row.append(ws.cell(i,j).value)
	data.append(row);

for ii in range(len(data)):
	i=data[ii];
	setifunset(city,i[5].title(),len(city)+1)
	setifunset(state,i[6].title(),len(state)+1)
	setifunset(country,i[8].title(),len(country)+1)
	setifunset(companyname,i[15].title(),len(companyname)+1)
	setifunset(shopcatgs,i[20].title(),len(shopcatgs)+1)

	brand_list_list=[23,24,25];
	for jjn in brand_list_list:
		jj=i[jjn].split("\n");
		brandid_list=[];
		for j in jj:
			setifunset(brands,j.title(),len(brands)+1)
			brandid_list.append(str(brands[j.title()]));
		data[ii][jjn]=','.join(brandid_list);


	(y,m,d,h,mint,sec)=xlrd.xldate_as_tuple(i[0],0)
	subtime=("%d-%d-%d %d:%d:%d"%(y,m,d,h,mint,sec));
	data[ii][0]=subtime
	data[ii][5]=city[i[5].title()];
	data[ii][6]=state[i[6].title()];
	data[ii][8]=country[i[8].title()];
	data[ii][15]=companyname[i[15].title()];
	data[ii][20]=shopcatgs[i[20].title()];
	row=data[ii];
	rowc=[row[1]+" "+row[2]]+[row[13]]+[row[0]]+row[3:13]+row[14:17]+[row[17]+" "+row[18]]+row[19:]
	data[ii]=rowc;






outp={"stores":data,"city":dict2list(city),"state":dict2list(state),"country":dict2list(country),"companytype":dict2list(companyname),"shopcatgs":dict2list(shopcatgs),"brands":dict2list(brands)};

writefd( open("json_data.json",'w'), json.dumps(outp) );

