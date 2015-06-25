<div style=''  >
	<div align='center' >
		<div class='titleline mb10'  >Login or Create A Free account! </div>
		<div>Store can come and create your free account here.</div>
	</div>
	<hr>
	<div class="row" >
		<div class="col-md-6" >
			<div class='pr10' align='left' >
				<?php disperror($signupmsg); ?>
				<form method="post" onsubmit="return form.valid.action1(this);" >
					<div class='titleline1' >New Account</div>
					<?php
					load_view("input2", array("dc"=>"simple", "label"=>"", "ph"=>"Your Name", "name"=>"name"));
					load_view("input2", array("dc"=>"email", "label"=>"", "ph"=>"Email", "name"=>"email"));
					load_view("input2", array("dc"=>"phone", "label"=>"", "ph"=>"Mobile Number", "name"=>"phone"));
					load_view("input2", array("dc"=>"simple", "label"=>"", "ph"=>"Password", "id"=>"password", "type"=>"password", "name"=>"password"));
					load_view("input2", array("dc"=>"password", "label"=>"", "ph"=>"Confirm Password", "type"=>"password"));
					load_view("check1", array("label"=>"Inform me for upcoming offers", "id"=>"newsletter", "divattr"=>array("style"=>"margin-top:20px;margin-bottom:20px;"), "checked"=>null, "inpattr" => array( "name" => "informme", "value"=>"yes")));
					?>
					<button type="submit" name="signup" class="btn btn-success mybtn" style='' >CREATE ACCOUNT</button>
				</form>
			</div>
		</div>
		<div class="col-md-6" >
			<div class='pl10' align="left" >
				<div id="login_form" >
					<?php disperror($loginmsg); ?>
					<form method="post" onsubmit='return form.valid.action1(this);' >
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
					<form method="post" onsubmit="return form.valid.action1(this);" >
						<div class='titleline1' >Resting Password</div>
						<?php
						load_view("input2", array("dc"=>"email", "label"=>"", "ph"=>"Email Id"));
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
		<div class="col-md-6" >
			<div class='pr10' align='right' >
				<img src='photo/icons/googlelogin.png' class='pointer' />
			</div>
		</div>
		<div class="col-md-6" >
			<div class='pl10' align="left" >
				<img src='photo/icons/fblogin.png' class='pointer' />
			</div>
		</div>
	</div>

</div>


