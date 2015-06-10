<?php
include "includes/app.php";
$pageinfo=array();

$pageinfo["login"]=Funs::loginaction();

$pageinfo["dispbody"]=false;


load_view("template/top.php");


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
