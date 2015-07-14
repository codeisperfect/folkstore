
<?php
if($needpopup){
	popupalert(null);
	popupconfirm(null);
}
//addall_js(array("bootstrap/js/jquery.js", "bootstrap/js/bootstrap.js"));
?>




  <script src="js/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.min.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.raty.js"></script>

<?php

addmyjs();
?>
<script>
  var post_data=<?php echo getepm(array("login"=>null, "signup"=>null)); ?>;
  $(document).ready(function(){
  	if(post_data['login']!=null || post_data["signup"] != null ){
  		mohit.popup_id("login");
  	}
    runmypagecode("<?php echo $page; ?>");
  });
</script>

<?php
if($dispbody){
?>
	</body>
	</html>
<?php
}

?>
