  <div class="jumbotron text-center" id="title" >
    <div style="background: url(image_home/shutterstockFC00020.png) no-repeat center center ;background-size:100% auto;"  >
     <div style='min-height:650px;' class="" >

       <div class="container" style="height:auto;" align="center" >
        <div style='color:white;margin-top:200px;max-width:800px;'  >
          <div class="row-fluid"  >
            <div style="color:white;font-weight:900;font-size:45px;margin-bottom:50px;" >Create your online store.<br>It is free.</div>
            <form action="search.php" >
              <div class="col-md-5" style="margin:0px;padding:0px;" >
               <div class="input-group"  >
                <input type="text" class="form-control " placeholder="Search Localoty" style='padding:5px;height:41px;padding-left:14px;' id="localitysearch" name="locsearch" >
                <div class="input-group-btn" style='' >
                  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" style='height:41px;' ><span class="caret"></span></button>
                  <ul class="dropdown-menu pull-right" role="menu" data-closeonclick="true" >
                    <?php
                    foreach($topcity as $name){
                      lia($name,array("onclick"=>'$("#localitysearch").val(this.innerHTML);'));
                    }
                    ?>
                  </ul>
                </div>
               </div>
              </div>
              <div class="col-md-5" style="margin:0px;padding:0px;"  >
                <input  class='form-control  ' placeholder="Search Product" name="prosearch" style='padding:5px;height:41px;padding-left:14px;' />
              </div>
              <div class="col-md-2" align=left style="margin:0px;padding:0px;" >
                <button class='btn btn-success indexsearchbutton' style="width:100%;" type="submit" >Search</button>
              </div>
            </form>
          </div>
        </div>
       </div>
     </div>
    </div>
  </div>




  <div class="container text-center">
   <div class="col-xs-12">
    <div align="center" style="" >
     <img src='image_home/ABOUTUS.png' class="img-responsive" />
    </div>
     <div style="margin-top:20px;margin-bottom:20px;" >
      <img  src="images/seprator.png"  />
     </div>
   </div>
   <div align="center" >
     Folkstore is unique idea, we can add some more text here. store is unique idea, we can add some more text here. store is unique idea, we can add some more text here. store is unique idea, we can add some more text here. store is unique idea, we can add some more text here. store is unique idea, we can add some more text here. store is unique idea, we can add some more text here. 
   </div>
   <div style="height:100px;" ></div>
   <div class="col-xs-12">
   </div>
   <div class="col-xs-12 col-sm-6" style="border-right: 1px solid #dddddd">
    <img class="img-circle" src="image_home/VectorSmartObject_3.png" />
    <p>
     <div class='iconfonts' style='text-transform:uppercase;' >
      Digital Helpline
     </div>
    </p>
    <p>
     Our company is very Stud  ed over the Bangladesh Liberation War Honour to Modi at a glittering ceremony at Bangabhaban, the President's house, as 90-year-old Vajpayee is ailing and unable to travel.

  The function was attended by Premier Sheikh Hasi
    </p>
   </div>
   <div class="col-xs-12 col-sm-6" style="">
    <img class="img-circle" src="image_home/VectorSmartObject_6.png" />
    <p>
     <div class='iconfonts' style='text-transform:uppercase;' >
      Online Market Place
     </div>
    </p>
    <p>
      ed over the Bangladesh Liber esh Liberation War Honour to Modi at a glittering ceremony at Bangabhaban, the President's house, as 90-year-old Vajpayee i ation War Honour
    </p>
   </div>
  </div>

  <div class="container text-center" style="margin-top:90px;" >
   <div align="center" >
       over the Bangladesh Liber esh Liberation War Honour to Modi at a glittering ceremony at Bangabhaban, the President's house, as 90-year-old Vajpayee i ation War Hon  assured early resolution of Delhi's garbage crisis. Jung met three mayors and commissioners of municipal corporations and informed them that the government of Delhi will release Rs 493 crore to pay salaries of striking sanitation workers.
   </div>
  </div>
  <div class="container-fluid" style="margin-top:100px;padding:3%;" >
    <div class="row" style="background-color:#f0f0e8;border-radius:5px;" >
       <div align="center" style='padding-top:20px;' >
          <div class="titlebn" >FEATURES</div>
          <?php
            resimg("image_home/layer_28.png",array("style"=>"margin-top:15px;margin-bottom:15px;"));
          ?>
       </div>
    </div>
  </div>


  <div class="container-fluid" style="margin-top:100px;padding:3%;" >
    <div class="row" style="background-color:#f0f0e8;" >
     <div align="center" style='padding-top:20px;' >
      <?php
       resimg("image_home/VectorSmartObject_1.png",array("style"=>"margin-top:20px;margin-bottom:20px;"));
       resimg("image_home/HowWeWork.png",array("style"=>"margin-top:30px;margin-bottom:30px;"));
       resimg("image_home/layer_28.png",array("style"=>"margin-top:15px;margin-bottom:15px;"));
      ?>
     </div>
     <div class="col-xs-12" style="padding:20px;background-color:#4b8eb4;" >
      <img src="image_home/Inforgraphic.png" class="img-responsive" />
     </div>
    </div>
  </div>


  <div class="jumbotron text-center">

   <div class="container-fluid" style="padding:3%;" >
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
