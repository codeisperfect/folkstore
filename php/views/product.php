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
    </div>
    <?php
      clear();
    ?>
  </div>



  <div id="test1" >Need to remove it</div>
  <div align=center style="padding:20px;margin-top:5px;" >
    <div class="container" >
      <div class="row" align=center style="padding:0px;margin:0px;" >
        <div class="col-md-6" style="padding:0px;margin:0px;" >
          <div align="left" style="position:relative;"   >
            <?php
            //
              resimg($pinfo["dispimg"],array("class"=>"img-responsive  img-thumbnail img-rounded dispproductimg","style"=>'',"id"=>"dispproductimg","onmouseenter"=>"imagezoom.mousein(this,event);", "onmouseout"=>"imagezoom.mouseout(this,event);","onmousemove"=>"imagezoom.mousemove(this,event);" ));
//              resimg($pinfo["dispimg"],array("class"=>"","style"=>"max-width:100%;max-height:100%;position:relative;top:0px;margin-top:-500px;","id"=>"dispproductimg"));
            ?>
            <div style="position:absolute;width:100px;height:100px;background-color:rgba(255,255,255,0.5);top:100px;left:100px;border:solid #bbbbbb 1px;display:none;" onmousemove="imagezoom.zoomermove(this,event);"  id="zoomer" ></div>
          </div>
          <div align="left" >
            <table class='p5px' ><tr>
              <?php
                for($i=0;$i<count($pinfo["simages"]);$i++){
                  opent("td");
                  resimg($pinfo["simages"][$i],array("class"=>"productimgothers","data-toopen"=>$pinfo["mimages"][$i],"onclick"=>"openproductimg(this);" ));
                  closet("td");
                }
              ?>
            </tr></table>
          </div>
        </div>

        <div class="col-md-6" style="padding:0px;margin:0px;position:relative;"  >
          <div style="position:absolute;display:none;" id="showzoomimg" >
            <div align="left" >
              <?php
                resimg($pinfo["dispimg"]);
              ?>
            </div>
          </div>
          <div style="margin:20px;" >
            <div align="left" style="" >
              <span style="text-transform: uppercase;font-size:20px;font-weight:600;color:#555555;" ><?php echo $pinfo["title"]; ?></span><br><br>
              <span style='color:#666666;' ><?php echo $pinfo["abouttext_short"]; ?>action against him for tarnishing Bihar's image by obtaining fake degrees, hurled eggs and sandals at him. They also tried to blacken his face.

The students accosted the Delhi Police team accompanying Tomar when it was entering the TMBU campus on Friday evening.

Bhagalpur SP Vivek Singh said some students tried to raise a ruckus near the university on Friday evening but police dispersed them. No arrest was made, the SP added.

Earlier on Friday morning, Tomar was brought to Munger by the Delhi Police team in connection with the fake degree case. </span><br>
              <?php
                opent("table",array("class"=>"table-hover p10px "));
                foreach($dispinfo as $i=>$info){
                  opent("tr");
                  ocloset("th",$i,array());
                  ocloset("td",$info,array());
                  closet("tr");
                }
                closet("table");
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


