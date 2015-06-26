  <div class="jumbotron text-center" id="title">
    <div style="background: url(images/Image_6.png) no-repeat center center ;background-size:100% auto;"  >
     <div>

        <div align="left" style="margin-left:30px;">
          <div style="padding-top:25px;" >
          <a href="<?php echo HOST; ?>" ><img src="images/highresalpha.png" class="img-responsive" ></a>
          </div>
        </div>

       <div class="container" style="height:auto;" >
        <div style="margin-top:100px;" >
          <img src="images/VectorSmartObject_14.png" />
        </div>
        <div style="margin-top:14px;" >
          <img src='photo/vendername.png' />
        </div>
        <div style="color:white;font-size:20px;font-weight:550;" >
          <?php
            echo $sinfo["address"];
          ?>
          <br>
          <?php echo rquery("{landmark}, {cityname} - {zipcode}, {statename}, {countryname} ",$sinfo); ?>
          <br>
          <?php echo rquery("Latittude {lat} | Langitude {lan}",$sinfo); ?>
          <br>
          <?php
            echo rquery("Landline {mobile} | Whatapp: {whatsapp} | Mobile: {mobile}",$sinfo);
          ?>
          <br>
          Email: <?php echo $sinfo["email"]; ?>
        </div>
        <p style="" >
         <span class="starRating">
          <input id="rating5" type="radio" name="rating" value="5" />
          <label for="rating5">
           5
          </label>
          <input id="rating4" type="radio" name="rating" value="4" />
          <label for="rating4">
           4
          </label>
          <input id="rating3" type="radio" name="rating" value="3"  />
          <label for="rating3">
           3
          </label>
          <input id="rating2" type="radio" name="rating" value="2" />
          <label for="rating2">
           2
          </label>
          <input id="rating1" type="radio" name="rating" value="1" />
          <label for="rating1">
           1
          </label>
         </span>
        </p>
        <div>
          <div class="btn"  style="border-radius:0px;outline:0;border:0;background:url(images/layer_86.png) center center no-repeat;background-color:#bbbb00;color:black;font-size:20px;font-weight:600;padding:15px;padding-left:30px;padding-right:30px;" >Know More</div>
        </div>
        <div style="height:100px;" ></div>
       </div>
     </div>
    </div>
  </div>




  <div class="container text-center">
   <div class="col-xs-12">
    <div align="center" style="" >
      <?php
      ?>
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
     We deals in <?php echo implode(", ",explode("\n",$sinfo["dealsin"])); ?>
    </p>
   </div>
   <div class="col-xs-12 col-sm-4" style="border-right: 1px solid #dddddd">
    <img class="img-circle" src="images/VectorSmartObject_11.png" />
    <p>
     <div class='iconfonts' >
      <?php echo $sinfo["year"]; ?>
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
      <?php echo $sinfo["shopcatgname"]; ?>
     </div>
    </p>
    <p>
     Text goes here
    </p>
   </div>
  </div>


  <div class="container-fluid" style="margin-top:100px;" >
    <div class="row" style="background-color: #f0f0e8;" >
     <div class="col-xs-6" style="padding:20px;padding-right:0px;padding-bottom:0px;" >
      <div style="padding:5%;padding-bottom:0px;" >
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
        $sdetails=$sinfo["pan_details"];
        $ind=0;
        for($j=0;$j<5;$j++){
        ?>
        <div class="row" style="margin:10px;margin-bottom:0px;" >
        <?php
          for($i=0;$i<2 && $ind<count($sdetails); $i++){
        ?>
          <div class="col-sm-6"  style="margin-top:20px;margin-bottom:5px;" >
            <b><?php echo $sdetails[$ind]["key"]; ?></b><br>
            <?php 
              echo $sdetails[$ind]["val"];
              $ind++;
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
     <div class="col-xs-6" style="padding-left:0px;" align="right" >
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
