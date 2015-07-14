var button={
	attrs:function(obj){
		var alla=obj.attributes;
		var attrso={};
		for(var i=0;i<alla.length;i++)
			attrso[alla[i].name]=alla[i].value;
		return attrso;
	},
	tosendattrs:function(obj,allattrs){
		var dontneed=["data-restext","data-waittext","data-res","data-wait","data-error","data-params","data-eparams"];
		var sendparams={};
		for(var i in allattrs){
			if(i.substr(0,5)=="data-" && dontneed.indexOf(i)==-1 )
				sendparams[i.substr(5)]=allattrs[i];
		}
		return sendparams;
	},
	parse:function (d){
		try{
			return JSON.parse(d);
		}catch(e){
			mohit.alert("Unexpected error! ");
			return null;
		}
	},
	hasattr:function (allattrs,a){
		return (typeof(allattrs[a])!='undefined');
	},
	objhasattr:function (obj,a){
		return button.hasattr(button.attrs(obj),a);
	},
	sendreq:function(obj){
		var allattrs=this.attrs(obj);
		if(!button.hasattr(allattrs,"data-params"))
			var params=this.tosendattrs(obj,allattrs);
		else{
			eval("var params="+allattrs["data-params"]);
		}
		params['action']=allattrs["data-action"];
		obj.disabled=true;
		var prvvalue=obj.innerHTML;
		obj.innerHTML=(!button.hasattr(allattrs,"data-waittext"))?' ... ':(allattrs["data-waittext"]==''?prvvalue:allattrs["data-waittext"]);
		$.post(HOST+"actionv2.php",params,function(d,s){if(s=='success'){
			obj.disabled=false;
			var respo=button.parse(d);
			obj.innerHTML=prvvalue;
			if(respo){
				if(respo.ec<0){
					if(button.hasattr(allattrs,"data-error")){
						var ec=respo.ec;
						eval(allattrs["data-error"]);
					}
					else
						mohit.alert(ecn[respo.ec]);
				}
				else{
					obj.innerHTML=(typeof(allattrs["data-restext"])=='undefined')?prvvalue:allattrs["data-restext"];
					if(button.hasattr(allattrs,"data-res")){
						var data=respo.data;
						eval(allattrs["data-res"]);
					}
				}
			}
			
		}});
	},
	sendreq_v2:function(obj){
		var allattrs=this.attrs(obj);
		if(!button.hasattr(allattrs,"data-params"))
			var params=this.tosendattrs(obj,allattrs);
		else{
			eval("var params="+allattrs["data-params"]);
		}
		if(button.hasattr(allattrs,"data-eparams")){
			eval("var eparams="+allattrs["data-eparams"]);
			params=others.mergeifunset(params,eparams);
		}
		params['action']=allattrs["data-action"];
		obj.disabled=true;
		var prvvalue=obj.innerHTML;
		obj.innerHTML=(!button.hasattr(allattrs,"data-waittext"))?' ... ':(allattrs["data-waittext"]==''?prvvalue:allattrs["data-waittext"]);
		$.post(HOST+"actionv2.php",params,function(d,s){if(s=='success'){
			obj.disabled=false;
			var respo=button.parse(d);
			obj.innerHTML=prvvalue;
			if(respo){
				if(respo.ec<0){
					if(button.hasattr(allattrs,"data-error")){
						var ec=respo.ec;
						eval(allattrs["data-error"]);
					}
					else
						mohit.alert(ecn[respo.ec]);
				}
				else{
					obj.innerHTML=(typeof(allattrs["data-restext"])=='undefined')?prvvalue:allattrs["data-restext"];
					if(button.hasattr(allattrs,"data-res")){
						var data=respo.data;
						eval(allattrs["data-res"]);
					}
				}
			}
			
		}});
	},
	sendreq_v2_t2:function(obj){
		var allattrs=this.attrs(obj);
		if(!button.hasattr(allattrs,"data-params"))
			var params=this.tosendattrs(obj,allattrs);
		else{
			eval("var params="+allattrs["data-params"]);
		}
		if(button.hasattr(allattrs,"data-eparams")){
			eval("var eparams="+allattrs["data-eparams"]);
			params=others.mergeifunset(params,eparams);
		}
		params['action']=allattrs["data-action"];
		obj.disabled=true;
		var prvvalue=obj.innerHTML;
		obj.innerHTML=(!button.hasattr(allattrs,"data-waittext"))?' ... ':(allattrs["data-waittext"]==''?prvvalue:allattrs["data-waittext"]);
		$.post(HOST+"actionv2.php",params,function(d,s){if(s=='success'){
			obj.disabled=false;
			var respo=button.parse(d.split("\n")[0]);
			obj.innerHTML=prvvalue;
			if(respo){
				if(respo.ec<0){
					if(button.hasattr(allattrs,"data-error")){
						var ec=respo.ec;
						eval(allattrs["data-error"]);
					}
					else
						mohit.alert(ecn[respo.ec]);
				}
				else{
					obj.innerHTML=(typeof(allattrs["data-restext"])=='undefined')?prvvalue:allattrs["data-restext"];
					if(button.hasattr(allattrs,"data-res")){
						var data=respo.data;
						eval(allattrs["data-res"]);
					}
					if(button.hasattr(allattrs,"data-reshtml")){
						var data=d.substring(d.indexOf('\n')+1);
						eval(allattrs["data-reshtml"]);
					}
				}
			}
			
		}});
	},
	sendreq_v2_t3:function(params,call_back_data,call_back_html,adata){
		$.post(HOST+"actiondisp.php",params,function(d,s){if(s=='success'){
			var respo=button.parse(d.split("\n")[0]);
			if(respo){
				if(respo.ec<0){
					if(typeof(adata)!='undefined'){
						if(button.hasattr(adata,"data-error")){
							var ec=respo.ec;
							eval(allattrs["data-error"]);
						}
						else
							mohit.alert(ecn[respo.ec]);
					}
					else
						mohit.alert(ecn[respo.ec]);
				}
				else{
					if(call_back_data!=null)
						call_back_data(respo.data);
					if(call_back_html!=null){
						var data=d.substring(d.indexOf('\n')+1);
						call_back_html(data);
					}
				}
			}
		}});
	},
	sendreq1:function (params,call_back,adata){
		$.post("actionv2.php",params,function(d,s){if(s=='success'){
			var respo=button.parse(d);
			if(respo){
				if(respo.ec<0){
					if(button.hasattr(adata,"data-error")) {
						var ec=respo.ec;
						eval(adata["data-error"]);
					}
					else
						mohit.alert(ecn[respo.ec]);
				}
				else if(call_back!=null)
					call_back(respo.data);
			}
			else
				mohit.alert("Unexpected Error");
		}});
	},
	selectme:function (obj){
		$(obj).repClass("btn-default","btn-primary");
		$(obj).siblings().repClass("btn-primary","btn-default");
		$(obj).parent().children("input[type=hidden]").val($(obj).attr("data-val"));
	},
	addmore:function(obj,id,selector,call_each,maxlimit){
		if(maxlimit==null || $("#"+id).find(selector).length<maxlimit ){
			$("#"+id).append( $("#"+id).find(selector)[0].outerHTML );
			var allmatch=$("#"+id).find(selector);
			if(call_each!=null){
				for(var i=0;i<allmatch.length;i++){
					call_each(allmatch[i],i);
				}
			}
		}
	},
	remadded:function(obj,id,selector,minlimit,call_each){
		if($("#"+id).find(selector).length>minlimit && minlimit>0){
			var allm=$("#"+id).find(selector);
			var lastchild=allm[allm.length-1];
			$(lastchild).remove();
		}
	}
};


var form={
	sendreq:function(obj,bobj){
		if(bobj.disabled)
			return;
		var allattrs=button.attrs(obj);
		var allattrsb=button.attrs(bobj);

		var params=getFormInputs(obj,'action');
		params['action']=allattrs["data-action"];
		bobj.disabled=true;
		var prvvalue=bobj.innerHTML;
		bobj.innerHTML=(!button.hasattr(allattrsb,"data-waittext"))?' ... ':(allattrsb["data-waittext"]==''?prvvalue:allattrsb["data-waittext"]);
		$.post(HOST+"actionv2.php",params,function(d,s){if(s=='success'){
			bobj.disabled=false;
			var respo=button.parse(d);
			bobj.innerHTML=prvvalue;
			if(respo){
				if(respo.ec<0){
					if(button.hasattr(allattrs,"data-error")){
						var ec=respo.ec;
						eval(allattrs["data-error"]);
					}
					else
						mohit.alert(ecn[respo.ec]);
				}
				else{
					bobj.innerHTML=(typeof(allattrsb["data-restext"])=='undefined')?prvvalue:allattrsb["data-restext"];
					if(button.hasattr(allattrs,"data-res")){
						var data=respo.data;
						eval(allattrs["data-res"]);
					}
				}
			}
			
		}});
	},
	sendreq1:function(obj,bobj){
		if(bobj.disabled)
			return;
		var allattrs=button.attrs(obj);
		var allattrsb=button.attrs(bobj);

		var params=getFormInputs(obj,'action');
		if(button.hasattr(allattrs,'data-param')){
			eval("var addparam="+allattrs['data-param']);
			others.mergeifunset(params,addparam);
		}

		params['action']=allattrs["data-action"];
		bobj.disabled=true;
		var prvvalue=bobj.innerHTML;
		bobj.innerHTML=(!button.hasattr(allattrsb,"data-waittext"))?' ... ':(allattrsb["data-waittext"]==''?prvvalue:allattrsb["data-waittext"]);
		$.post(HOST+"actionv2.php",params,function(d,s){if(s=='success'){
			bobj.disabled=false;
			var respo=button.parse(d);
			bobj.innerHTML=prvvalue;
			if(respo){
				if(respo.ec<0){
					if(button.hasattr(allattrs,"data-error")){
						var ec=respo.ec;
						eval(allattrs["data-error"]);
					}
					else
						mohit.alert(ecn[respo.ec]);
				}
				else{
					bobj.innerHTML=(typeof(allattrsb["data-restext"])=='undefined')?prvvalue:allattrsb["data-restext"];
					if(button.hasattr(allattrs,"data-res")){
						var data=respo.data;
						eval(allattrs["data-res"]);
					}
				}
			}
			
		}});
	},
	valid:{
		is:function (obj){
			var errorlist=[];
			var inputs=['INPUT','TEXTAREA','SELECT'];
			var problem=false;
			for(i=0;i<inputs.length;i++){
				var ilist=$(obj).find(inputs[i]);
				for(j=0;j<ilist.length;j++){
					if(checkValidInput.isChecked( ilist[j]  ) ){
						$(ilist[j]).parent().removeClass("has-error");
					}
					else{
						$(ilist[j]).parent().addClass("has-error");
						var errormsg=$(ilist[j]).attr("data-unfilled") || $(ilist[j]).attr("name") || null;
						errorlist.push(errormsg);
						if(!problem)
							$(ilist[j]).focus();
						problem=true;
					}
				}
			}
			return errorlist;
		},
		action:function(obj){
			var errors=form.valid.is(obj);
			if(errors.length>0){
				for(var i=0;i<errors.length;i++){
					errors[i]=(i+1)+". "+errors[i];
				}
				var dispmsg="You have to fill:<br>"+errors.join("<br>");
				success.push(dispmsg,true);
			}
			return !(errors.length>0);
		},
		action1:function(obj){
			return !(form.valid.is(obj).length>0);
		}
	}
};



var selects={
	arraytooptionlist:function(arr,text){
		var outp="";
		outp+="<option value='' >"+text+"</option>";
		for(var i=0;i<arr.length;i++)
			outp+="<option>"+arr[i]+"</option>";
		return outp;
	}
};


var textarea={
	resize:function(obj){
		var battrs=button.attrs(obj);
		// if(!button.hasattr(battrs,"data-minrows"))
		// 	battrs["data-minrows"]=3;
		// if(!button.hasattr(battrs,"data-maxrows"))
		// 	battrs["data-maxrows"]=10;
		// if(27+20*(obj.rows)<obj.scrollHeight && battrs["data-maxrows"] > obj.rows  ){
		// 	obj.rows++;
		// }
	},
	resizeorg:function(obj){
		var battrs=button.attrs(obj);
		if(!button.hasattr(battrs,"data-minrows"))
			battrs["data-minrows"]=3;
		if(!button.hasattr(battrs,"data-maxrows"))
			battrs["data-maxrows"]=10;
		if(27+20*(obj.rows)<obj.scrollHeight && battrs["data-maxrows"] > obj.rows  ){
			obj.rows++;
		}
	}
};



var validation={
	"isnull":function (st){
		for(var i=0;i<st.length;i++){
			if(!(st[i]==' ' || st[i]=='\n' || st[i]=='\t'))
				return false;
		}
		return true;
	}
};





var others={
	keys:function(arr){
		outp=[];
		for(i in arr){
			outp.push(i);
		}
		return outp;
	},
	timeleft:function(t){
		var seconds=Math.floor(t)%60;
		var minutes=Math.floor(t/60)%60;
		var hours=Math.floor(t/3600)%24;
		var days=Math.floor(t/(3600*24));
		return {days:days,hours:hours,minutes:minutes,seconds:seconds};
	},
	timelefttext:function(tl){
		var outp="";
		var keys=others.keys(tl);
		for(var i=0;i<4;i++){
			if(tl[keys[i]]!=0)
				outp+=tl[keys[i]]+" "+keys[i]+(i==3?"":",");
		}
		outp+="";
		return outp;
	},
	setifunset:function(data,key,val){
		if(typeof(data[key])=='undefined')
			data[key]=val;
	},
	mergeifunset:function(dict1,dict2){
		for(i in dict2){
			if(typeof(dict1[i]=='undefined'))
				dict1[i]=dict2[i];
		}
		return dict1;
	},
	mergeforce:function (dict1,dict2){
		for(i in dict2){
			dict1[i]=dict2[i];
		}
		return dict1;
	},
};

function timenow(){
	return Math.floor(new Date().getTime()/1000);
}

function time(ms){
	var tms=new Date().getTime();
	if(ms==null)
		return Math.floor(tms/1000.0);
	else
		return tms;
}


var inpmultiple={
	setvalue:function(obj){
		var superparent=$(obj).parent().parent().parent();
        var allcbox=superparent.find('input[type=checkbox]');
        var outp=[];
        for(i=1;i<allcbox.length;i++){
			if(allcbox[i].checked)
				outp.push(i);
        }
        superparent.find("input[type=hidden]").val(outp.join("-"));
	}
};


function selectAll(obj){
	allcbox=$(obj).parent().parent().parent().find('input[type=checkbox]');
	for(i=0;i<allcbox.length;i++){
		if($(allcbox[i]).parent().parent()[0].style.display!="none")
			allcbox[i].checked=obj.checked;
		else
			allcbox[i].checked=false;
	}
}



String.prototype.bound = function (n) {
	if(this.length<=n)
		return this;
	else
		return this.substr(0,n-2)+".."
};

$.prototype.repClass=function(oldc,newc){
	this.removeClass(oldc);
	this.addClass(newc);
};


function extend(jobj,cfunc){
	var clist=jobj.children();
	if(clist.length>0){
		jobj.append(clist[0].outerHTML);
		clist=jobj.children();
		for(var i=0;i<clist.length;i++){
			if(cfunc!=null){
				cfunc(clist[i],i);
			}
//			$(clist[i]).find("input").attr("placeholder","Option "+(i+1) );
		}
	}
}


setifunset=function(data,key,val){
	if(typeof(data[key])=='undefined')
		data[key]=val;
}

mergeifunset=function(dict1,dict2){
	for(i in dict2){
		setifunset(dict1,i,dict2[i]);
	}
	return dict1;
}


function setifn(inp, val) {
	if(inp == null) 
		inp = val;
	return inp;
}


function remove(list1,e,fsatis){
	var outp=[];
	for(var i=0;i<list1.length;i++){
		if( (fsatis==null && list1[i]!=e) || (fsatis!=null && fsatis(list1[i],e))  ){
			outp.push(list1[i]);
		}
	}
	return outp;
}


function doforall(list1,f){
	for(var i=0;i<list1.length;i++){
		f(list1[i]);
	}
}

function haskey(arr, key){
	return (typeof(arr[key])!='undefined');
}

function listjoin(l1, l2){
	var outp=[];
	for(var i=0; i<l1.length+l2.length; i++){
		outp.push( i<l1.length ? l1[i]:l2[i-l1.length]);
	}
	return outp;
}


function mylib(){
	function textareainc(obj){
		var allattrs=button.attrs(obj);
		mergeifunset(allattrs,{'data-maxrows':5});
		if($(obj).outerHeight() < obj.scrollHeight + parseFloat($(obj).css("borderTopWidth")) + parseFloat($(obj).css("borderBottomWidth"))) {
			if($(obj).attr("rows")<allattrs["data-maxrows"])
				$(obj).attr("rows",1+parseInt($(obj).attr("rows")));
		};
	}
	$("textarea.autoinc").on("keyup keydown",function(){
		textareainc(this);
	});
	var valid={
		setautotick:function(selector, correct, incorrect){
			var keyaction=function(obj, e){
				var inpobj=$(obj);
				if(e.keyCode!=9 ){
					var signobj=inpobj.parent().find(".glyphicon");
					var isvalid=-1;
					if(inpobj.attr("data-condition")!=null && haskey(checkValidInput, inpobj.attr("data-condition")) ){
						isvalid=checkValidInput[inpobj.attr("data-condition")](inpobj[0]);
					}
					if(signobj.length>0){
						doforall([correct, incorrect], function(cname){
							signobj.removeClass(cname);
						});
						if(isvalid>=0)
							signobj.addClass(isvalid ? correct:incorrect );
					}
					signobj.parent().removeClass("has-error");
				}
			};
			var inpobj=$(selector);
			doforall(["keyup", "change", "keypress", "keydown"], function(i){
				inpobj.on(i, function(e){keyaction(this,e);}  ) ;
			});
		},
		resetinp:function (){
			$("input").on("kepup keydown", function(e){
				if(e.keyCode!=9 && e.keyCode!=13 ){
					this.setCustomValidity("");
				}
			});
		}
	};
	var awesome={
		awesomelabel:function(){
			var icons=["glyphicon-untick", "glyphicon-correct"];
			var tickone=function(obj){
				var groupid=$(obj).attr("data-gid");
				if(groupid!=null){
					var otherelms=$('.tickone[data-gid="'+groupid+'"]');
					for(var i=0; i<otherelms.length; i++){
						if(otherelms[i] != obj){
							otherelms[i].checked=false;
						}
						labelchangehandle(otherelms[i]);
					}
				}
			};
			var createhiddeninp=function(obj){
				var groupid=$(obj).attr("data-gid");
				if(groupid!=null && $("input[name="+groupid+"]").length == 0){
					$(obj).parent().append('<input type="hidden" value="" name="'+groupid+'" />');
				}
			};
			var findlabel=function(obj){
				if( $(obj).attr("id")!=null){
					var label=$('label[for="'+$(obj).attr("id")+'"]');
					if(label.length>0){
						return label;//Jquery selector for it.
					}
				}
				return null;
			};
			var labelchangehandle=function(obj, e){
				var label=findlabel(obj);
				var gid=$(obj).attr("data-gid");
				if(gid!=null){
					var otherelms=$('input.mycheckbox[data-gid="'+gid+'"]');
					var values=[];
					doforall(otherelms, function(elm){
						if(elm.checked)
							values.push(elm.value);
					});
					$("input[name="+gid+"]").val(values.join("-"));
				}
				if(label!=null){
					var iconobj=label.find("span.myicon");
					doforall(icons, function(d){
						iconobj.removeClass(d);
					});
					iconobj.addClass(icons[0+obj.checked]);
				}
			};
			$(".mycheckbox").on("change", function(e){
				labelchangehandle(this,e);
			});
			$(".tickone").on("change", function(e){
				tickone(this);
			});
			doforall($(".mycheckbox"), function(elm){
				var label=findlabel(elm);
				if(label!=null && label.find("span.myicon").length==0){
					label.prepend("<span class='myicon' ></span> &nbsp;");
				}
				labelchangehandle(elm);
				createhiddeninp(elm);
			});
		},
		imagehoverbig:function(){
			var hw = ["height", "width"];
			var mlist = ["padding-left", "padding-right", "padding-top", "padding-bottom"];
			var calledonce=function(obj){
				var backup = listjoin(hw, mlist);
				doforall(backup, function(x){
					$(obj).attr("data-"+x, parseInt($(obj).css(x)));
				});
			};
			var animate=function(obj, shift){
				doforall(hw, function(x){
					//$(obj).css(x, ($(obj).attr("data-"+x)-shift)+"px");
				});
				doforall(mlist, function(x){
					$(obj).css(x, ($(obj).attr("data-"+x)+1*shift)+"px");
				});
			}
			var shift=2;
			$(".imganimate").on("mouseenter", function(){
				animate(this, shift);
			});
			$(".imganimate").on("mouseout", function(){
				animate(this, 0);
			});
			doforall($(".imganimate"), function(x){
				calledonce(x);
			});
		}
	};
	valid.resetinp();
	valid.setautotick("input.myinput", "glyphicon-correct", "glyphicon-incorrect");
	awesome.awesomelabel();
	awesome.imagehoverbig();
}



