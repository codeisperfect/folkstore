  <div class="jumbotron text-center" id="title" style="background-image:none;" >
    <div style="background: url(image_search/shutterstockFC00016.jpg) no-repeat center center ;background-size:100% auto;"  >
     <div style="min-height:480px;background-color:rgba(0,25,0,0.7);" >
        <div align="left" style="margin-left:30px;">
         <div style="padding-top:25px;" >
          <a href="<?php echo HOST; ?>" ><img src="images/highresalpha.png" class="img-responsive" ></a>
          </div>
        </div>
     </div>
    </div>
  </div>
  <div style="border-bottom:solid black 3px;margin-top:-10px;padding-bottom:10px;padding-right:5px;" align="right" >
    <div style="float:right;width:230px;" >
      <select class='form-control' >
      <?php
        disp_olist(arr2option(array_keys($_ginfo["sorting"])));
      ?>
      </select>
    </div>
    <?php
      clear();
    ?>
  </div>



  <div align=center style="padding:20px;margin-top:5px;" >
    <div class="container" >
    <div class="row-fluid" align="center" style="padding:0px;margin:0px;" >
      <div class="col-md-4"  >
        <div  style="width:300px;margin:20px;float:left;" align="left" >
          <span style="text-transform:uppercase;font-weight:600;font-size:20px;" >Products</span>
        </div>
      </div>
      <?php
        clear();
      ?>
    </div>
    <?php
      $pnum=0;
      for($i=0;true && $pnum<count($sresults) ;$i++){
    ?>
    <div class="row-fluid" align=center style="padding:0px;margin:0px;" >
      <?php
        for($j=0;$j<3 && $pnum<count($sresults) ;$j++){
          $row=$sresults[$pnum];
      ?>
      <div class="col-md-4" style="padding:0px;margin:0px;" >
        <a href="<?php echo HOST."product.php?pid=".$row["id"]; ?>" ><div class="oneproduct" >
          <div align="center" >
            <div style="height:280px;width:280px;overflow-y:hidden;margin-top:15px;" >
            <?php
              resimg($row["dispimg"],array("class"=>"","style"=>"max-width:100%;max-height:100%;"));
            ?>
            </div>
            <div align="center" style='color:#333;' >
              <span style="text-transform: uppercase;font-size:20px;font-weight:600;color:#555555;" ><?php echo $row["title"]; ?></span><br>
              <span><?php echo $row["abouttext_short"]; ?></span><br>
              <div>
                <span style='font-weight:600;' >Rs. <?php echo ceil($row['price']*(100-$row['sale'])/100.0); ?></span>
                <span style='text-decoration:line-through;' >Rs. <?php echo $row['price'] ?></span>  
                Flat <span style='color:green;font-weight:600;' ><?php echo  $row['sale'] ; ?></span> % Off
              </div>
            </div>
          </div>
        </div></a>
      </div>
      <?php
          $pnum++;
        }
      ?>
    </div>
    <?php
      }
    ?>
    </div>
  </div>


