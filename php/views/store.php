<?php
load_view("template/top.php");
load_view("template/navbarnew.php");
?>



	<div class="parallax-container valign-wrapper mainprlx" style='height:650px;' >
		<div class="section no-pad-bot" style='' >
			<div class="container">
				<div class="row center">
					<div id="prlxstore" style='margin-top:-30px;' >
						<div class='row' style='width:100%;' >
							<div class='col s10  offset-s1 l12 m12' >
								<img src='images/VectorSmartObject_14.png' style='max-width:100%;' />
							</div>
						</div>
						<div style='font-size:70px;line-height:70px;font-wight:900;color:white;margin-top:-10px;' >
							VENDOR
						</div>
						<div style="color:white;font-size:18px;font-weight:700;line-height:25px;" >
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
						<div style='padding-top:20px;' >
							<button class='btn green waves-effect waves-light' >Know More</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="parallax"  >
			<img src="images/Image_6.png" alt="Unsplashed background img 2" style='background-color:rgba(0, 0, 0, 1);' >
		</div>
	</div>


	<div class="container text-center">
		<div class='pt25' align="center"  >
				<div class=''  >
					<img src='images/ABOUTVENDOR.png' class="img-responsive" style='max-width:100%;' />
				</div>
		</div>
		<div class='row' align="center"  >
				<div style="margin-top:20px;margin-bottom:20px;" >
					<img  src="image_edit/layer_5.png"  />
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
		<?php
			dummyheight(100);
		?>

		<div class="row" >
			<div class="col s12 s4 m4" align="center" >
				<div class='rightborder' >
					<img class="img-circle" src="images/VectorSmartObject_9.png" />
				</div>
				<p>
				 <div class='iconfonts' >
					Public Limited Company
				 </div>
				</p>
				<p>
				 We deals in <?php echo implode(", ",explode("\n",$sinfo["dealsin"])); ?>
				</p>
			</div>
			<div class="col s12 s4 m4"  align="center">
			 	<div class='rightborder' >
					<img class="img-circle" src="images/VectorSmartObject_11.png" />
				</div>
				<div class='iconfonts' >
				<?php echo $sinfo["year"]; ?>
				</div>
				<p>
				 Text goes here
				</p>
			</div>
			<div class="col s12 s4 m4" align="center" >
				<img class="img-circle" src="images/VectorSmartObject_13.png" />
				<div class='iconfonts' >
				<?php echo $sinfo["shopcatgname"]; ?>
				</div>
				<p>
				 Text goes here
				</p>
			</div>
		</div>
	</div>


	<div class="container-fluid" style="margin-top:100px;" >
		<div class="row" style="background-color: #f0f0e8;margin-bottom:0px;" >
		 <div class="col s12 l6 m12" style="" align="left" >
			<div style="padding:5%;padding-bottom:0px;" >
				<div align="left" >
					<img src="images/StatutoryDetail.png" class="img-responsive" style='max-width:100%;' >
				</div>
				<div align="left" style="margin-top:15px;margin-bottom:15px;" >
					<img src="images/layer_42.png" class="img-responsive" style='max-width:100%;' > 
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
					<div class="col s12 m6 l6"  style="margin-top:20px;margin-bottom:5px;" >
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
		 <div class="col s12 l6 m12" style="" align="right" >
			<img src="res/image1.png" class="img-responsive" style='width:100%;' />
		 </div>
		</div>
	</div>


	<div class="container text-center">
		<div class='pt25' align="center"  >
				<div class=''  >
					<img src='images/VectorSmartObject_0.png' class="img-responsive" style='max-width:100%;' />
				</div>
		</div>
		<div class='row' align="center"  >
				<div style="margin-top:20px;margin-bottom:20px;" >
					<img  src="images/Industry.png"  />
				</div>
		</div>
		<div class='row' align="center"  >
				<div style="margin-top:10px;margin-bottom:20px;" >
					<img  src="images/seprator.png"  />
				</div>
		</div>
		<div style="margin-bottom:30px;" >
		 Modi on Sunday received on behalf of Atal Bihari Vajpayee Bangladesh's prestigious Liberation War Honour for his "active role" in the country's freedom struggle, saying the BJP veteran was an "inspiration" to him and other political workers.

President Abdul Hamid handed over the Bangladesh Liberation War Honour to Modi at a glittering ceremony at Bangabhaban, the President's house, as 90-year-old Vajpayee is ailing and unable to travel.

The function was attended by Premier Sheikh Hasina, her Cabinet colleagues, eminent citizens, diplomats and top Bangladeshi officials.
		</div>

	 <?php
		for($j=0;$j<2;$j++){
	 ?>
		<div class="row" style='padding:0px;margin:0px;' >
		 <?php
		 $img_list=array("Image_2.png","Image_3.png","Image_4.png","Image_5.png","Layer9.png","Image.png","Image_0.png","Image_1.png");
		 for($i=0;$i<4;$i++){
		 ?>
		 <div class="col s6 l3 m3" style="padding:0px;margin:0px;" >
			<?php
				resimg("images/newimg".($i+4*$j).".png",array("class"=>"img-responsive", "style" => "width:100%;padding:0px;margin:0px;"));
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

	


<?php
load_view("template/footer.php");
load_view("template/bottom.php");
?>