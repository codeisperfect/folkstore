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


<br>&nbsp;<br>
	<div style="border-bottom:solid black 3px;margin-top:-10px;padding-bottom:10px;padding-right:5px;" align="right" >
		<div style="float:right;width:230px;" >
			<select class='browser-default' >
			<?php
				disp_olist(arr2option(array_keys($_ginfo["sorting"])));
			?>
			</select>
		</div>
	</div>

	<div class='container-fluid' >
		<div class='row'>
			<div class='col s12 l3 m4 ' style='padding:0px;margin:0px;' >
				<div class='card' >
					<?php
						load_view("template/searchfilter.php", $inp);
					?>
				</div>
			</div>
			<div class='col s12 l9 m8' style='padding:0px;margin:0px;' >
				<div class='row' >

					<?php
						if(true){
						$pnum=0;
						for($i=0;true && $pnum<count($sresults) ;$i++){
							for($j=0;$j<3 && $pnum<count($sresults) ;$j++){
								$row=$sresults[$pnum];
						?>
						<div class="col s12 l4 m6" style="" >
							<a href="<?php echo HOST."product.php?pid=".$row["id"]; ?>" ><div class='card' >
								<div  >
									<div style="padding:5px;" >
									<?php
										resimg($row["dispimg"],array("class"=>"","style"=>"max-width:100%;max-height:100%;"));
									?>
									</div>
									<div align="center" style='color:#333;' >
										<span style="text-transform: uppercase;font-size:15px;font-weight:600;color:#555555;" ><?php echo $row["title_short"]; ?></span><br>
										<span style='color:#666666;font-size:14px;' ><?php echo $row["abouttext_short"]; ?></span><br>
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
						}
					}
					?>


				</div>
			</div>
		</div>
	</div>




<?php
load_view("template/footer.php", $inp);
load_view("template/bottom.php");
?>