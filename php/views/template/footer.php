  <div id="footer" style="background-color:#0B0B0B;padding-top:45px;padding-bottom:45px;" >
    <div class="row-fluid"  >
      <?php
        for($i=0;$i<6;$i++){
       ?>
      <div class="col-md-2" align="center" style="padding:0px;margin:0px;" >
        <a class="default" ><?php echo "Name".$i; ?></a>
      </div>
       <?php
        }
      ?>
    </div>
  </div>
  <div id="bottom-footer">
   <p class="text-muted text-center bottom">
    <span class="glyphicon glyphicon-copyright-mark">
    </span>
    <b>FOLKSTORE</b>
   </p>
  </div>
<?php
  if(isset($inp["login"])){
    load_view("template/popup.php",array("name"=>"login","body"=>"template/login.php","title"=>"Store Login","bodyinfo"=>array("defval"=>$_POST,"msg"=>($login["ec"]<0?$_ginfo["error"][$login["ec"]]:"")  ),"defaultfooter"=>false, "stylemain"=>"min-width:600px;"));
    load_view("template/popup.php",array("name"=>"tnc","body"=>"template/tnc.php","title"=>"Terms&Conditions","defaultfooter"=>false));
  }
  if($islogin=='s'){
    load_view("template/popup.php",array("name"=>"uploadproduct","body"=>"template/uploadproduct.php","title"=>"Upload Product","footer"=>"template/uploadproductfooter.php" ));
  }
?>
