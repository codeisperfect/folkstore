<div style=''  >
	<div align='center' >
		<div class='titleline mb10'  >Login or Create A Free account! </div>
		<div>Store can come and create your free account here.</div>
	</div>
	<hr>
	<div class="row" >
		<div class="col-md-6" >
			<div class='pr10' align='left' >
				<div class='titleline1' >New Account</div>
				<?php
				load_view("input2", array("dc"=>"simple", "label"=>"", "ph"=>"Your Name"));
				load_view("input2", array("dc"=>"email", "label"=>"", "ph"=>"Email"));
				load_view("input2", array("dc"=>"phone", "label"=>"", "ph"=>"Mobile Number"));
				load_view("input2", array("dc"=>"simple", "label"=>"", "ph"=>"Password", "id"=>"password", "type"=>"password"));
				load_view("input2", array("dc"=>"password", "label"=>"", "ph"=>"Confirm Password", "type"=>"password"));
				load_view("check1", array("label"=>"Inform Us for upcoming offers", "id"=>"newsletter", "divattr"=>array("style"=>"margin-top:20px;margin-bottom:20px;"), "checked"=>null));
				?>
				<button class="btn btn-success mybtn" style='' >CREATE ACCOUNT</button>
			</div>
		</div>
		<div class="col-md-6" >
			<div class='pl10' align="left" >
				<div id="login_form" >
					<div class='error' >
						<?php echo $msg."11"; ?>
					</div>
					<form method="post" >
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
					<div class='titleline1' >Resting Password</div>
					<?php
					load_view("input2", array("dc"=>"email", "label"=>"", "ph"=>"Email Id"));
					?>
					<div style='height:3px;' ></div>
					<a class='open_login_form' >Back</a><br>
					<button class="btn btn-success mybtn" style='margin-top:10px;' >Reset</button>
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


