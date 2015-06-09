<?php
include "includes/app.php";
$pageinfo=array("login"=>array("ec"=>1));
if(ispost("login")){
	$pageinfo["login"]=handle_request("login",$_POST);
	echo $pageinfo["login"]["ec"];
}

load_view("template/top.php");

load_view("template/navbar.php");

load_view("search.php");

?>



<?php


load_view("template/footer.php");


load_view("template/bottom.php",array("dispbody"=>false));



closedb();
?>

<script type="text/javascript">
</script>
</body>
</html>
