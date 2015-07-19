<?php
include "includes/app.php";


$search = get("search");
$locsearch = get("locsearch");

$pageinfo["sresults"] = Funs::dispproductinfo(Sqle::getA("select * from products "));


$pageinfo["search"] = $search;
$pageinfo["catgs"] = Fun::idtovalarr(Sqle::getA("select * from shopcatgs"), "id", "name");
load_view("search.php",$pageinfo);



closedb();
?>

<script type="text/javascript">
</script>
</body>
</html>
