<?php
include "includes/app.php";
$pageinfo=array("login"=>array("ec"=>1));
if(ispost("login")){
	$pageinfo["login"]=handle_request("login",$_POST);
}


$pageinfo["dispbody"]=false;


load_view("template/top.php");


print_r($pageinfo["login"]);


load_view("template/navbar.php");

load_view("search.php");

?>



<?php


load_view("template/footer.php",$pageinfo);


load_view("template/bottom.php",$pageinfo);



closedb();
?>

<script type="text/javascript">
</script>
</body>
</html>
