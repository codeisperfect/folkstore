function isNum(n){
	return (isFinite(n) && n!="");
}

var checkValidInput={
	'idel':function (obj){
		return true;
	},
	'simple':function (obj){
		return obj.value!="";
	},
	'email':function (obj){
		return (obj.value.match("^[a-zA-Z0-9\._%+-]+@[a-zA-Z0-9\.-]+[\.][a-zA-Z]{2,4}$")!=null);
	},
	'password':function (obj){
		return (obj.value!="" && obj.value == $("#password").val()  );
	},
	'phone':function (obj){
		var pn=obj.value;
		return (isFinite(pn) && pn.length==10 && pn[0]!='+' && pn[0]!='-');
	},
	'otp':function (obj){
		var pn=obj.value;
		return (isFinite(pn) && pn.length==7 && pn[0]!='+' && pn[0]!='-');
	},
	'pnumber':function (obj){
		return isNum(obj.value) ;
	},
	'int':function(obj){
		return isNum(obj.value);
	},
	'pint':function(obj){
		return (checkValidInput.int(obj) && obj.value[0]!='-');//remember obj.value.length is >=1 in second term.
	},
	'bound100':function (obj){
		return (checkValidInput.pnumber(obj) && parseInt(obj.value)<=100);
	},
	'isChecked':function (obj){
		return (obj.getAttribute('data-condition')==null || this[ obj.getAttribute('data-condition') ](obj)) ;
	}
};



function checkValid(obj,e){
	if(e.keyCode!=9){
		signObj=$(obj).parent().children("span.tick");
		var classes=["glyphicon-remove","glyphicon-ok","glyphicon-warning-sign"];
		function removeSign(){
			for(i=0;i<classes.length;i++){
				$(signObj).removeClass(classes[i]);
			}
		}
		removeSign();
		if( obj.getAttribute('data-condition')!=null &&  checkValidInput[ obj.getAttribute('data-condition') ](obj) ){
			signObj.addClass(classes[1]);
			$(obj).parent().removeClass("has-error");
		}
		else
			signObj.addClass(classes[0]);
	}
}


function submitForm(obj){
	$(obj).find(".text-danger").html("");
	$(obj).find(".text-success").html("");
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
				if(!problem)
					$(ilist[j]).focus();
				problem=true;
			}
		}
	}
	return !(problem);
}

function getFormInputs(obj,add){
	var inputs=['INPUT','TEXTAREA','SELECT'];
	outp={};
	for(i=0;i<inputs.length;i++){
		var ilist=$(obj).find(inputs[i]);
		for(j=0;j<ilist.length;j++){
			if(ilist[j].getAttribute('name')!=null){
				var fn=ilist[j].getAttribute('name');
				var fv=(ilist[j].value);
				if(ilist[j].type=="checkbox")
					fv=ilist[j].checked;
				outp[fn]=fv;
			}
		}
	}
	outp[add]="";
	return outp;
}

function form_request(obj,data){//data is dict with keys => instruction,changedtext,errordict,successfunc,
	$(obj).find(".text-danger").html("");
	$(obj).find(".text-success").html("");
	$(obj).children("button")[0].disabled=true;
	var prvval=$(obj).children("button")[0].innerHTML;
	$(obj).children("button")[0].innerHTML=data.changedtext;
	$.post("action.php",getFormInputs(obj,data.instruction),
		function(d,status){
			if(status=='success'){
				if(isNum(d)){
					var em="";
					for(ec in data.errordict){
						if(d==ec)
							em=data.errordict[ec];
					}
					if(em!="")
						$(obj).find(".text-danger").html(em);
					else{
						if(obj.getAttribute("data-resetAfterSubmit")!=null){
							if(obj.getAttribute("data-resetAfterSubmit")=='true')
								obj.reset();
						}
						else
							obj.reset();
						data.successfunc(obj,d);
					}
				}
				$(obj).children("button")[0].disabled=false;
				$(obj).children("button")[0].innerHTML=prvval;
			}
		}
	);
}

var activate_my_lib=true;


if(false && "Tumse na ho paega Munna"){
	$(document).ready(function(){
		$(".img-onhoverup").mouseover(function(){
			var h=$(this).height();
			var w=$(this).width();
			$(this).css("width",w+"px");
			$(this).css("height",h+"px");
			$(this).css("z-index","500000");
			$(this).css("max-width","10000px");
			$(this).css("max-height","10000px");
			var css_names=["padding-top","padding-right","padding-left","padding-bottom","height","width"];
			var paddinga=10;
			var anim_array={};
			for(var i=0;i<6;i++){
				var curval=parseInt($(this).css(css_names[i]).replace("px",""));
				if(i<4){
					var afterval=(curval-paddinga)+"px";
				}
				else{
					var afterval=(curval+paddinga*0)+"px";
				}
				anim_array[css_names[i]]=afterval;
			}
			$(this).animate(anim_array);
		});
	});
}
