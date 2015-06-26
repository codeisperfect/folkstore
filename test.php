<?php
include "includes/app.php";
load_view("template/top.php");


//$a=User::fglogin(array("type" => "fblogin", "id"=>112, "name" => "Mohit.Saini" ));
$b=User::fglogin(array("type" => "gpluslogin", "id"=>1162, "name" => "Mohit Saini" ));

print_r($b);


?>
<div align=center  >
	<div style='padding:25px;margin:10px;width:650px;' class="shadowbox" >

<!-- 
<div class='glyphicon-search' >mohit</div>

<span class="glyphicon glyphicon-search" aria-hidden="true"></span>

<input type="checkbox" id="mohit" class='mycheckbox' />
<label for="mohit"  >
<span class='glyphicon-correct myicon ' ></span>Mohit Saini...
</label>

<br>

<input type="checkbox" id="mohit1" class='mycheckbox' checked />
<label for="mohit1"  >Mohit Saini...</label>



<input type="checkbox" class="mscheckbox" id="point-1"/><label for="point-1">Choice 1</label>
 -->

<?php

//load_view("template/login.php");


?>




	</div>
</div>
<?php
load_view("template/bottom.php");
closedb();
?>