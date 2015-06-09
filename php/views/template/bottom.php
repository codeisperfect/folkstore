
<?php
if($needpopup){
	popupalert(null);
	popupconfirm(null);
}
addall_js(array("bootstrap/js/jquery.js", "bootstrap/js/bootstrap.js"));
addmyjs();
?>
<script>
  var post_data=<?php echo getepm(array("login"=>null)); ?>;
  $(document).ready(function(){
  	if(post_data['login']!=null){
  		mohit.popup_id("login");
  	}
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
