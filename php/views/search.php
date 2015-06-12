  <div align=center style="padding:20px;margin-top:100px;" >
    <div class="container" >
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
        <div class='oneproduct'  >
          <div align="center" >
            <div style="height:280px;width:280px;overflow-y:hidden;margin-top:15px;" >
            <?php
              resimg($row["simages"][0],array("class"=>"","style"=>"max-width:100%;max-height:100%;"));
            ?>
            </div>
            <div align="center" >
              <span style="text-transform: uppercase;font-size:20px;font-weight:600;color:#555555;" ><?php echo $row["title"]; ?></span><br>
              <span><?php echo $row["abouttext_short"]; ?></span><br>
              <div>
                <span style='font-weight:600;' >Rs. <?php echo ceil($row['price']*(100-$row['sale'])/100.0); ?></span>
                <span style='text-decoration:line-through;' >Rs. <?php echo $row['price'] ?></span>  
                Flat <span style='color:green;font-weight:600;' ><?php echo  $row['sale'] ; ?></span> % Off
              </div>
            </div>
          </div>
        </div>
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


  <div class="container text-center">
   <div class="col-xs-12">
    <div align="center" style="" >
     <img src='images/ABOUTVENDOR.png' class="img-responsive" />
    </div>
     <div style="margin-top:20px;margin-bottom:20px;" >
      <img  src="images/seprator.png"  />
     </div>
   </div>
   <div align="center" >
     Dhaka: Prime Minister Narendra Modi on Sunday received on behalf of Atal Bihari Vajpayee Bangladesh's prestigious Liberation War Honour for his "active role" in the country's freedom struggle, saying the BJP veteran was an "inspiration" to him and other political workers.

President Abdul Hamid handed over the Bangladesh Liberation War Honour to Modi at a glittering ceremony at Bangabhaban, the President's house, as 90-year-old Vajpayee is ailing and unable to travel.

The function was attended by Premier Sheikh Hasina, her Cabinet colleagues, eminent citizens, diplomats and top Bangladeshi officials.

Modi, while receiving the honour, hailed Vajpayee's leadership, saying the "great leader" was a source of inspiration for political workers including him.

"This day is a matter of great pride for all Indians that a great leader like Atal Bihari Vajpayee is being honoured. He dedicated his entire life to the service of the country and he fought for the rights of the common man and from a political point of view he was an inspiration for political workers like myself," Modi said after receiving the award.

Recalling Vajpayee's support to Bangladesh's freedom struggle, Modi said Bharatiya Jana Sangh, under Vajpayee's leadership had organised a Satyagraha supporting the Liberation War and as a "young volunteer" he had come from his village to attend i
   </div>
   <div style="height:100px;" ></div>
   <div class="col-xs-12">
   </div>
   <div class="col-xs-12 col-sm-4" style="border-right: 1px solid #dddddd">
    <img class="img-circle" src="images/VectorSmartObject_9.png" />
    <p>
     <div class='iconfonts' >
      Public Limited Company
     </div>
    </p>
    <p>
     Our company is very Stud
    </p>
   </div>
   <div class="col-xs-12 col-sm-4" style="border-right: 1px solid #dddddd">
    <img class="img-circle" src="images/VectorSmartObject_11.png" />
    <p>
     <div class='iconfonts' >
      1975
     </div>
    </p>
    <p>
     Text goes here
    </p>
   </div>
   <div class="col-xs-12 col-sm-4">
    <img class="img-circle" src="images/VectorSmartObject_13.png" />
    <p>
     <div class='iconfonts' >
      Automobile
     </div>
    </p>
    <p>
     Text goes here
    </p>
   </div>
  </div>


  <div class="container-fluid" style="margin-top:100px;" >
    <div class="row" style="background-color: #f0f0e8;" >
     <div class="col-xs-6" style="padding:20px;padding-right:0px;" >
      <div style="padding:5%;" >
        <div align="left" >
          <img src="images/StatutoryDetail.png" class="img-responsive"  >
        </div>
        <div align="left" style="margin-top:15px;margin-bottom:15px;" >
          <img src="images/layer_42.png" class="img-responsive" > 
        </div>
        <div style="margin-bottom:30px;" >
          This is some text ed over the Bangladesh Liberation War Honour to Modi at a glittering ceremony at Bangabhaban, the President's house, as 90-year-old Vajpayee is ailing and unable to travel.

  The function was attended by Premier Sheikh Hasina,
        </div>
        <?php
        for($j=0;$j<4;$j++){
        ?>
        <div class="row" style="margin:10px;" >
        <?php
          for($i=0;$i<2;$i++){
        ?>
          <div class="col-sm-6"  style="margin-top:20px;margin-bottom:20px;" >
            <b>Pan Details</b><br>
            rtyuiop erty 5678 
          </div>
        <?php
          }
        ?>
        </div>
        <?php
        }
        ?>
      </div>
     </div>
     <div class="col-xs-6" style="padding-left:0px;" >
      <img src="res/image1.png" class="img-responsive" />
     </div>
    </div>
  </div>


  <div class="jumbotron text-center">
   <div class="container">
    <div align="center" >
    <?php
      resimg("images/VectorSmartObject_0.png",array("style"=>"margin-top:10px;margin-bottom:20px;"));
      resimg("images/Industry.png");
      resimg("images/seprator.png",array("style"=>"margin-top:15px;margin-bottom:15px;"));
    ?>
    </div>
    <div style="margin-bottom:30px;" >
     Modi on Sunday received on behalf of Atal Bihari Vajpayee Bangladesh's prestigious Liberation War Honour for his "active role" in the country's freedom struggle, saying the BJP veteran was an "inspiration" to him and other political workers.

President Abdul Hamid handed over the Bangladesh Liberation War Honour to Modi at a glittering ceremony at Bangabhaban, the President's house, as 90-year-old Vajpayee is ailing and unable to travel.

The function was attended by Premier Sheikh Hasina, her Cabinet colleagues, eminent citizens, diplomats and top Bangladeshi officials.
    </div>
   </div>



   <div class="container">
   <?php
    for($j=0;$j<2;$j++){
   ?>
    <div class="row">
     <?php
     $img_list=array("Image_2.png","Image_3.png","Image_4.png","Image_5.png","Layer9.png","Image.png","Image_0.png","Image_1.png");
     for($i=0;$i<4;$i++){
     ?>
     <div class="col-md-3" style="padding:0px;" >
      <?php
        resimg("images/newimg".($i+4*$j).".png",array("class"=>"img-responsive img-onhoverup"));
      ?>
     </div>
     <?php
     }
     ?>
    </div>
    <?php
    }
    ?>
   </div>
  </div>
  <div class="jumbotron text-center">
   <div class="container"  >
    <?php
      opent("div",array("align"=>"center"));
      resimg("images/VectorSmartObject.png",array("style"=>"margin-bottom:30px;"));
      resimg("images/serviceAreas.png");
      resimg("images/seprator.png",array("style"=>"margin-top:20px;margin-bottom:20px;"));
      closet("div");
    ?>
    <div>
     
The function was attended by Premier Sheikh Hasina, her Cabinet colleagues, eminent citizens, diplomats and top Bangladeshi officials.

Modi, while receiving the honour, hailed Vajpayee's leadership, saying the "great leader" was a source of inspiration for political workers including him.

"This day is a matter of great pride for all Indians that a great leader like Atal Bihari Vajpayee is being honoured. He dedicated his entire life to the service of the country and he fought for the rights of the common man and from a poli
    </div>
   </div>
  </div>
