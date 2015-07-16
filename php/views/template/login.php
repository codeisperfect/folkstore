<br>&nbsp;<br>
<br>&nbsp;<br>


	<div class="container text-center">
		<div align='center' >
			<div class='titleline mb10'  >Login or Create A Free account! </div>
			<div>Store can come and create your free account here.</div>
		</div>
		<div class='divider' ></div>
		<div class="row " >
			<div class="col s12 m6 l5 offset-l1" >
				<div class='' align='left' >
					<?php disperror($login["signupmsg"]); ?>
					<form method="post" onsubmit="return form.valid.action(this);" id="temp" >
						<div class='titleline1' >New Account</div>
						<?php
						load_view("input2", array("dc"=>"simple", "label"=>"", "ph"=>"Your Name", "name"=>"name"));
						load_view("input2", array("dc"=>"email", "label"=>"", "ph"=>"Email", "name"=>"email1"));
						load_view("input2", array("dc"=>"phone", "label"=>"", "ph"=>"Mobile Number", "name"=>"phone"));
						load_view("input2", array("dc"=>"simple", "label"=>"", "ph"=>"Password", "id"=>"password", "type"=>"password", "name"=>"password1"));
						load_view("input2", array("dc"=>"password", "label"=>"", "ph"=>"Confirm Password", "type"=>"password"));
						?>
						<br>
						<?php
	//						load_view("check2", array("id" => "informme", "label" => "Inform me for offers"));
						?>

	<!-- 					<div class="">
							<input id="" type="checkbox" name="timeslot" class="filled-in" value="<?php echo $val1[1]; ?>" checked/>
							<label style="padding-left:23px;" for="timesearch<?php echo $i."-".$j; ?>"><?php echo $val1[0]; ?></label>
						</div>
	 -->					
						<button type="submit" name="signup" class="btn btn-success mybtn waves-effect waves-light" style='' >CREATE ACCOUNT</button>
					</form>
				</div>
			</div>
			<div class="col s12 m6 l5" >
				<div class='' align="left" >
					<div id="login_form" >
						<?php disperror($login["loginmsg"]); ?>
						<form method="post" onsubmit='return form.valid.action(this);' >
							<div class='titleline1' >Login</div>
							<?php
							load_view("input2", array("dc"=>"email", "label"=>"", "ph"=>"Email Id", "name"=>"email"));
							load_view("input2", array("dc"=>"simple", "label"=>"", "ph"=>"Password", "type"=>"password", "name"=>"password"));
							?>
							<div style='height:3px;' ></div>
							<a class='open_forget_form' >I forgot password!</a><br>
							<button type="submit" class="btn btn-success mybtn" style='margin-top:10px;' name="login" >Login</button>
						</form>
					</div>
					<div id="forget_form" style='display:none;' >
						<form method="post" onsubmit="if(form.valid.action(this)){form.req(this);};" data-action='forgotpass' >
							<div class='titleline1' >Resting Password</div>
							<?php
							load_view("input2", array("dc"=>"email", "label"=>"", "ph"=>"Email Id", "name"=>"email2"));
							?>
							<div style='height:3px;' ></div>
							<a class='open_login_form' >Back</a><br>
							<button class="btn btn-success mybtn" style='margin-top:10px;' >Reset</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<br>
		<div align="center" style='border-top:solid #dddddd 1px;' >
			<div style='margin-top:-25px;padding:10px;' ><span style='background-color:white;margin:10px;padding:10px;font-size:18px;' >or</span></div>
		</div>

		<div class="row" >
			<div class="col s12 l6 m6" >
				<div class="row">
					<div class="col s12 l7 offset-l5 m10 offset-m2" align='left' >
						<a href="<?php echo HOST.'fb2.php'; ?>" class="btn-large waves-effect waves-light blue darken-3" style="width:100%;">
							<img src="images/facebook-login-icon.png" width="30" height="35" class="left" style="margin-top:9px;">&nbsp;&nbsp;&nbsp;Sign Up with facebook
						</a>
					</div>
				</div>
			</div>
			<div class="col s12 l6 m6" >
				<div class="row">
					<div class="col s12 m10 l7" align='left' >
						<a href="<?php echo HOST.'gplus.php'; ?>" class="btn-large waves-effect waves-light red darken-1" style="width:100%;">
							<img src="images/googleplus-login-icon.png" width="35" height="40" class="left" style="margin-top:9px;">Sign Up with google+
						</a>
					</div>
				</div>
			</div>
		</div>

	</div>
