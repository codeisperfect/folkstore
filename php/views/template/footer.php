	<div id="bottom-footer" style='' align="center" >
		<div style="margin-top:25px;"  >
			<b>&copy;FOLKSTORE</b>
		</div>
	</div>


<!-- <div class='hide-on-small-only' >1</div>
<div class='hide-on-small-and-down' >2</div>
<div class='hide-on-med-and-down' >3</div>
<div class='hide-on-med-and-up' >4</div>
<div class='hide-on-med-only' >5</div>
<div class='hide-on-large-only' >6</div>
<div class='show-on-large' >7</div>
<div class='show-on-medium' >8</div>
<div class='show-on-small' >9</div>
<div class='show-on-medium-and-up' >11</div>
<div class='show-on-medium-and-down' >22</div>
 -->


<div class='hide-on-small-only' ></div>
<div class='hide-on-small-and-down' ></div>
<div class='hide-on-med-and-down' ></div>
<div class='hide-on-med-and-up' ></div>
<div class='hide-on-med-only' ></div>
<div class='hide-on-large-only' ></div>
<div class='show-on-large' ></div>
<div class='show-on-medium' ></div>
<div class='show-on-small' ></div>
<div class='show-on-medium-and-up' ></div>
<div class='show-on-medium-and-down' ></div>


<?php
	if(isset($inp["login"])) {
//		load_view("popup.php", array("name"=>"login", "body"=>"template/login.php", "title"=>"Store Login", "bodyinfo" => array("defval" => $_POST, "loginmsg" => errormsg($login["loginec"]), "defaultfooter"=>false, "stylemain"=>"min-width:600px;", "signupmsg"=>errormsg($login["signupec"]) )));
		load_view("template/popup.php",array("name"=>"tnc","body"=>"template/tnc.php","title"=>"Terms&Conditions","defaultfooter"=>false));
	}
	if($islogin == 's') {
		load_view("popup.php",array("name"=>"uploadproduct","body"=>"template/uploadproduct.php","title"=>"Upload Product","footer"=>"template/uploadproductfooter.php" ));
	}
?>
