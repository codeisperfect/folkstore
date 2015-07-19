<?php
load_view("template/top.php");
load_view("template/navbarnew.php");
?>


	<div class="parallax-container valign-wrapper mainprlx" style='' >
		<div class="section no-pad-bot" style='' >
			<div class="container">
				<div class="row center">
				</div>
			</div>
		</div>
		<div class="parallax"  >
			<img src="photo/searchpic.png" alt="Unsplashed background img 2" >
		</div>
	</div>

	<div class="container" style="margin-top:20px;" >
		<div class="row"   >
			<div class="col s12 m6 l6" style="" align="left"  >
				<div class="row">
					<div class="col s12 l12 m12 " style="padding:0px;margin:0px;" >
						<?php
							resimg($pinfo["dispimg"], array("style"=>'max-width:100%;',"id"=>"dispproductimg"));
						?>
					</div>
					<?php
						for($i=0;$i<count($pinfo["simages"]);$i++){
							opent("div", array("class" => "col s2 l2 m2", "style" => "margin:2px;padding:0px;" ));
								resimg($pinfo["simages"][$i],array("class"=>"img-responsive","data-toopen"=>$pinfo["mimages"][$i],"onclick"=>"openproductimg(this);", "style" => "max-width:100%;cursor:pointer;" ));
							closet("div");
						}
					?>
				</div>
			</div>
			<div class="col s12 m6 l6" style="" align="left" >
				<div style="" >
					<div >
						<span style="text-transform: uppercase;font-size:20px;font-weight:600;color:#555555;" ><?php echo $pinfo["title"]; ?></span><br><br>
						<span style='color:#666666;' ><?php echo $pinfo["abouttext"]; ?></span><br>
						<?php
							opent("table",array("class"=>"table-hover p10px" ));
							foreach($dispinfo as $i=>$info){
								opent("tr");
								ocloset("th",$i,array());
								ocloset("td",$info,array("align" => "left"));
								closet("tr");
							}
							closet("table");
						?>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php
load_view("template/footer.php", $inp);
load_view("template/bottom.php");
?>