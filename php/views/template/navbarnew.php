
<div style='position:relative;z-index: 998;height:40px;' class='' >
	<div class='white' style='position:fixed;line-height:normal;width:100%;' >
		<div class="black" >
			<div class='left hide-on-small-and-down' style="display:non;" >
				<div class="" style='margin:2px;'  >
				<?php
					if($page != 'index'){
				?>
					<form action="<?php echo BASE."search.php"; ?>" >
						<input name="search" class='definput' style='' placeholder='Search' >
						<button style="display:none;" type="submit" >Search</button>
					</form>
				<?php
					}
				?>
				</div>
			</div>
			<div class='right hide-on-small-and-down' style='color:white;margin-right:20px;padding-top:10px;padding-bottom:10px;font-size:14px;' >
				<?php
					if(User::isloginas("s")) {
				?>
				<a class='pointer whitelink' href='<?php echo BASE."store.php"; ?>' >Profile</a> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
				<a class='pointer whitelink' href='<?php echo BASE."edit.php"; ?>' >Edit</a> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
				<a class='pointer whitelink' href='<?php echo BASE."?logout"; ?>' >Logout</a>
				<?php
					} else if(!User::islogin()) {
				?>
				<span class='pointer whitelink' >Call Us: 01234 525 525</span> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
				<a class='pointer whitelink' href='<?php echo BASE."chat.php"; ?>' >Live Chat</a> &nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
				<a class='pointer whitelink' href='<?php echo BASE."login.php"; ?>' >Login/Register</a>
				<?php
					}
				?>
			</div>
			<div class='clear' ></div>
		</div>
		<div class='white hide-on-small-and-down' style='border-bottom:solid #ccc 1px;' >
			<div style='margin:9px;margin-left:20px;' >
				<a href="<?php echo BASE; ?>" ><img src='images/highresalpha.png' class='img-responsive' /></a>
			</div>
		</div>
		<div class='white hide-on-med-and-up' style='border-bottom:solid #ccc 1px;' >
			<div class='row center pointer' style='margin:9px;' >
				<div class='col s2' >
					<a data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
					<ul id="nav-mobile" class="side-nav">
						<br><br>

						<?php
							if(User::isloginas("s")) {
						?>
								<li  ><a href='<?php echo BASE."store.php"; ?>'  >Profile</a></li>
								<li  ><a href='<?php echo BASE."edit.php"; ?>' >Edit</a></li>
								<li  ><a href='<?php echo BASE."?logout"; ?>' >Logout</a></li>
						<?php
							} else if(!User::islogin()) {
						?>
								<span class='pointer' >Call Us: 01234 525 525</span>
								<li  ><a href='<?php echo BASE."chat.php"; ?>'  >Live Chat</a></li>
								<li  ><a href='<?php echo BASE."login.php"; ?>' >Login</a></li>
								<li  ><a href='<?php echo BASE."login.php"; ?>' >Register</a></li>
						<?php
							}
						?>

					</ul>
				</div>
				<div class='col s8' >
					<a href="<?php echo BASE; ?>" ><img src='images/highresalpha.png' class='img-responsive' style='max-width:100%;' /></a>
				</div>
			</div>
		</div>
	</div>
</div>




