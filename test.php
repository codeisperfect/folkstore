<?php
include "includes/app.php";
load_view("template/top.php");



?>
<div align=center  >
	<div style='padding:40px;margin:10px;' class="shadowbox" >

<?php
load_view("input2", array("dc"=>"email"));
?>



<form role="form" class="">
  <div class="form-group has-feedback" >
    <label class="control-label">Username</label>
    <input type="text" class="form-control myform" placeholder="Username" />
    <i class="form-control-feedback glyphicon "></i>
  </div>
</form>



	</div>
</div>
<?php
load_view("template/bottom.php");
closedb();
?>