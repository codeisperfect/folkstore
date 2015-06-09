<div style='width:250px;' >
	<div style='color:red;' ><?php echo $msg; ?></div>
	<form  method=post onsubmit='return submitForm(this);' >
		<?php
			form_input(array("ph"=>"Username","name"=>"email","type"=>"text","dc"=>"email","lname"=>"Username/Email"),$defval);
			form_input(array("ph"=>"Password","name"=>"password","type"=>"password","lname"=>"Password"));
		?>
		<button type="submit" class="btn btn-default" name=login >Login</button>
	</form>
</div>
