<?php
  if(!$islogin){
?>
  <nav class="navbar navbar-default navbar-inverse navbar-fixed-top ">
   <div class="container-fluid" style='background-color:black;' >
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" style="" >
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">
       Toggle navigation
      </span>
      <span class="icon-bar">
      </span>
      <span class="icon-bar">
      </span>
      <span class="icon-bar">
      </span>
     </button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     <ul class="nav navbar-nav navbar-left" style='color:white;' >
     </ul>
     <ul class="nav navbar-nav navbar-right" style='color:white;' >
      <li style="padding-top:15px; color:white; ">
       Call us: 123456789
      </li>
      <li style='color:white;' >
       <a style='color:white;' >
        Live Chat
       </a>
      </li>
      <li style='color:white;' >
       <a onclick='mohit.popup_id("login");' style='color:white;' >
        Login
       </a>
      </li>
     </ul>
    </div>
   </div>
   <div class="container-fluid" style='background-color:white;' >
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     <ul class="nav navbar-nav navbar-left" style='color:white;' >
       <div style='height:auto;background-color:white;' >
        <div style="padding:5px;padding-top:14px;" >
        <a href="<?php echo HOST; ?>" ><img src="images/highresalpha.png" class="img-responsive" ></a>
        </div>
       </div>
     </ul>
     <ul class="nav navbar-nav navbar-right" style='color:white;' >
      <li style="color:green; ">
       <button type="button" class="navbar-toggle" style='display:block;color:gray;background-color:green;border:solid gray 0px;' >
        <span class="sr-only" style='color:gray;' >
         Toggle navigation
        </span>
        <span class="icon-bar"  >
        </span>
        <span class="icon-bar">
        </span>
        <span class="icon-bar">
        </span>
       </button>
      </li>
     </ul>
    </div>
   </div>




  </nav>
<?php
  }
  else if($islogin=='s'){
?>
  <nav class="navbar navbar-default navbar-inverse navbar-fixed-top ">
   <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header" style="" >
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">
       Toggle navigation
      </span>
      <span class="icon-bar">
      </span>
      <span class="icon-bar">
      </span>
      <span class="icon-bar">
      </span>
     </button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     <form class="navbar-form navbar-left" role="search" action="search.php" >
      <div class="form-group">
       <div class="input-group">
        <input type="text" class="form-control" name="search" placeholder="Search Whatever you want" <?php echo ($page=="index"?"":"autofocus"); ?> />
        <span class="input-group-btn">
         <button class="btn btn-default" type="button">
          <span class="glyphicon glyphicon-search">
          </span>
         </button>
        </span>
       </div>
      </div>
     </form>
     <ul class="nav navbar-nav navbar-right">
      <li style="padding-top:15px; color:#9d9d9d; ">
       Call us: 123456789
      </li>
      <li>
       <a onclick="mohit.popup_id('uploadproduct');" >
        Upload
       </a>
      </li>
      <li>
       <a href="<?php echo HOST."?logout"; ?>" >
        Logout
       </a>
      </li>
     </ul>
    </div>
   </div>
  </nav>
<?php
  }
?>