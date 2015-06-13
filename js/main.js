$( document ).ready(function(){
	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	});
	$('.dropdown-menu').click(function(e) {
		if(!(this.getAttribute("data-closeonclick")=="true")){
			e.stopPropagation();
		}
	});
	if(typeof(runonload)!='undefined')
		runonload();
});



function hideshow(h,s){
	$("#"+h).hide();
	$("#"+s).show();
}

function hideshowdown(h,s){
	$("#"+h).slideUp();
	$("#"+s).slideDown();
}

function login_redirect_url(){
	if(redurl!="")
		return redurl;
	else
		return profile_page_url;
}

function uploadfile(name,disptagJ,formtagJ,disptag_max_length){
	if(!(formtagJ.find("input[name="+name+"]").length>0)){
		var elm=document.createElement("input");
		elm.setAttribute("type","file");
		elm.setAttribute("name",name);
		elm.setAttribute("style","display:none;");
		elm.onchange=function (){
			disptagJ.html(elm.value.bound(disptag_max_length));
		}
		formtagJ[0].appendChild(elm);
	}
	else{
		var elm=formtagJ.find("input[name="+name+"]")[0];
	}
	elm.click();
}


function selectallmatched(obj,sel){
	for(var i=0;i<sel.length;i++){
		sel[i].checked=obj.checked;
	}
}

var customform={
	formelms:{},
	formid:0,
	dive:{"select":"customform_options","mselect":"customform_options","select_bool":"customform_options_bool"},
	f1:function(cliste,i){
		$(cliste).find("input").attr("placeholder","Option "+(i+1) );
	},
	f2:function (obj){
		var curfetype=obj.value;
		var dive=customform.dive;
		for(var i in dive){
			$("#"+dive[i]).hide();
		}
		if(typeof(dive[curfetype])!='undefined')
			$("#"+dive[curfetype]).show();
	},
	add_input:function(obj){
		temp=obj;
		var elminfo={};
		var sinput=$(obj).parent().find("select[name=selectformtype]");
		var sinput_options=sinput.children();
		var sinput_data={};
		for(var i=0;i<sinput_options.length;i++){
			sinput_data[sinput_options[i].value]=sinput_options[i].innerHTML;
		}

		

		elminfophp={};
		elminfophp["type"]=sinput.val();
		elminfophp["name"]=$(obj).parent().find("input[name=inputname]").val();

		elminfo["Input Type"]=sinput_data[sinput.val()];
		elminfo["Input Name"]=elminfophp["name"];

		if(sinput.val()=="select" || sinput.val()=='mselect' || sinput.val()=='select_bool' ){
			var optiondivs=$("#"+customform.dive[sinput.val()]).children('.optionslist').find("input[type=text]");
			var optionlist=[];
			for(var i=0;i<optiondivs.length;i++){
				optionlist.push(optiondivs[i].value);
			}
			elminfophp["options"]=optionlist;
			elminfo["Options"]=optionlist.join(" | ");
		}
		if($("#makeform").css("display")=="none")
			$("#makeform").show();
		else{
			$("#makeform").append($("#makeform").children()[0].outerHTML);
		}
		var numc=$("#makeform").children().length;
		formtext="Input <span class='inputnum' >"+numc+"</span><br>";
		for(i in elminfo){
			formtext+=i+" : "+elminfo[i]+"<br>";
		}
		$($("#makeform").children()[numc-1]).children()[0].innerHTML=formtext;
		var frmid="formelm_id_"+customform.formid;
		$($("#makeform").children()[numc-1]).attr("id",frmid);
		customform.formid++;
		customform.formelms[frmid]=elminfophp;
	},
	correct_inputnum:function(){
		var inputlist=$("#makeform").children();
		for(var i=0;i<inputlist.length;i++){
			$(inputlist[i]).find(".inputnum").html(i+1);
		}
	},
	delete_input:function(obj){
		var inputlist=$("#makeform").children();
		delete customform[$(obj).parent().parent().attr("id")];
		if(inputlist.length>1){
			$(obj).parent().parent().remove();
		}
		else{
			$("#makeform").hide();
		}
		customform.correct_inputnum();
	},
	move_totop:function(obj){
		var myhtml=$(obj).parent().parent();
		$("#makeform").prepend(myhtml[0].outerHTML);
		myhtml.remove();
		customform.correct_inputnum();
	}
};

var funcs={
	f1:function(obj,n){
		if(n>0){
			$(obj).children("th")[0].innerHTML=("Pic "+(n+1));
		}
	}

};


function openproductimg(obj){
	$("#"+"dispproductimg").attr("src", $(obj).attr("data-toopen")  );
}

var imagezoom={
	zoomer:$("#zoomer"),
	img:$("#dispproductimg"),
	zimg:$("#showzoomimg"),
	zoomerinat:0,
	showzimg:function(){
		imagezoom.zoomer.show();
		imagezoom.zimg.show();
	},
	mousein:function(obj,e){
		imagezoom.showzimg();
		imagezoom.mousemove( imagezoom.img[0], e );
	},
	mouseout:function(obj,e){
		var delay=500;//ms
		setTimeout(function(){
			if(time("m")-imagezoom.zoomerinat>2*delay){
				imagezoom.zoomer.hide();
				imagezoom.zimg.hide();
			}
		},delay);
	},
	mousemove:function(obj,e,fromshow){
		imagezoom.showzimg();
		var leftd=(e.pageX-$(obj).offset().left);
		var topd=(e.pageY-$(obj).offset().top);
		var etop=topd-imagezoom.zoomer.height()/2;
		var eleft=leftd-imagezoom.zoomer.width()/2;
		etop=Math.min(Math.max(0,etop),imagezoom.img.height()-imagezoom.zoomer.height());
		eleft=Math.min(Math.max(0,eleft),imagezoom.img.width()-imagezoom.zoomer.width());
		imagezoom.zoomer.css({"top":etop,"left":eleft});

	},
	zoomerin:function(obj){
		imagezoom.zoomerinat=time("m");
	},
	zoomermove:function(obj,e){
		imagezoom.mousemove( imagezoom.img[0], e );
	},
};


if(true){
	var imagezoom={
		img:$("#dispproductimg"),
		zimg:$("#showzoomimg"),
		zoomerinat:0,
		showzimg:function(){
			imagezoom.zimg.show();
		},
		mousein:function(obj,e){
		},
		mouseout:function(obj,e){
		},
		mousemove:function(obj,e,fromshow){
			return;
			if(fromshow!=null)
				imagezoom.showzimg();
			var leftd=(e.pageX-$(obj).offset().left);
			var topd=(e.pageY-$(obj).offset().top);
			var etop=topd-imagezoom.zoomer.height()/2;
			var eleft=leftd-imagezoom.zoomer.width()/2;
			etop=Math.min(Math.max(0,etop),imagezoom.img.height()-imagezoom.zoomer.height());
			eleft=Math.min(Math.max(0,eleft),imagezoom.img.width()-imagezoom.zoomer.width());
			imagezoom.zoomer.css({"top":etop,"left":eleft});

		},
	};

}