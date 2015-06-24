<?php
?>

<?php
load_view("input2", array("dc"=>"email"));
?>


<?php
if(false){

?>
<div style='width:400px;' align="left" >
	<div style="display:none;" >
		<div style='color:red;' ><?php echo $msg; ?></div>
		<form  method=post onsubmit='return submitForm(this);' >
			<?php
				form_input(array("ph"=>"Username","name"=>"email","type"=>"text","dc"=>"email","lname"=>"Username/Email"),$defval);
				form_input(array("ph"=>"Password","name"=>"password","type"=>"password","lname"=>"Password"));
			?>
			<button type="submit" class="btn btn-default" name=login >Login</button>
		</form>
	</div>
	<div class="login_container">
	<form id="login_form"  method="post" onsubmit='return submitForm(this);' action="profile.php" style="<?php echo ($defopen=="login"?"":"display:none;"); ?>" >
	<h3 class="login_heading">
	 Login
	 <span>
	  /
	  <a href="#" class="open_register_form">
	   register
	  </a>
	 </span>
	</h3>
	<?php
	load_view("template/input.php",array("name"=>"email","label"=>"Username","inpattr"=>array("dc"=>"email")));
	load_view("template/input.php",array("name"=>"password","label"=>"Password","type"=>"password","closediv"=>false));
	?>
	 <span class="help-block" >
	  <a href="#" class="open_forget_form" >
	   Forgot password?
	  </a>
	 </span>
	</div>

	 <div class="submit_section">
	 <button class="btn btn-lg btn-success btn-block">
	  Continue
	 </button>
	</div>
	</form>
	<form id="forget_form" method="post" onsubmit='submitForm(this);return false;' style="<?php echo ($defopen=="forget"?"":"display:none;"); ?>" >
	<h3 class="login_heading" style='margin-bottom:10px;' >
	 Forget password ?
	</h3>
	<span>Don't worry! we knew you will do so. that's why we made this option.</span>
	<br><br>
	<?php
	load_view("template/input.php",array("name"=>"fpemail","label"=>"Email Id","inpattr"=>array("dc"=>"email")));
	?>
	<div class="form-group">
	 <span class="help-block">
	  <a href="#" class="open_login_form" >
	   Oh, you remembered password ?
	  </a>
	 </span>
	</div>
	<div class="submit_section">
	 <button class="btn btn-lg btn-success btn-block">
	  Reset
	 </button>
	</div>
	</form>
	<form id="register_form"  action="profile.php" style="<?php echo $defopen=="signup"?"":"display:none;"; ?>" >
	<h3 class="login_heading">
	 Register
	 <span>
	  /
	  <a href="#" class="open_login_form">
	   login
	  </a>
	 </span>
	</h3>
<?php
	load_view("template/input.php",array("name"=>"signup_name","label"=>"Full Name"));
	load_view("template/input.php",array("name"=>"signup_email","label"=>"Email ID","dc"=>"email"));
	load_view("template/input.php",array("name"=>"signup_password","label"=>"Choose password","dc"=>"email","type"=>"password"));
?>
	<div class="form-group">
	 <label class="checkbox-inline">
	  <input type="checkbox" name="register_terms" id="register_terms" />
	  Agree to
	  <a data-toggle="modal" data-target="#terms_modal">
	   terms&conitions;
	  </a>
	 </label>
	</div>
	<div class="submit_section">
	 <button type="button" class="btn btn-lg btn-success btn-block">
	  Continue
	 </button>
	</div>
	</form>
	</div>
	<div class="modal fade" id="terms_modal">
	<div class="modal-dialog">
	<div class="modal-content">
	 <div class="modal-header">
	  <button type="button" class="close" data-dismiss="modal">
	   &times;
	  </button>
	  <h4 class="modal-title">
	   Terms & Conditions
	  </h4>
	 </div>
	 <div class="modal-body">
	 	<img src='photo/tnc.jpg' />
	 	<br>
	  1. You are not allowed to copy the code of our website.
	  <br>
	  2. 
	 </div>
	</div>
	</div>
  </div>
</div>

<?php
}
?>