<?php
load_view("template/top.php");
load_view("template/navbarnew.php");
?>



	<div class="parallax-container valign-wrapper" style="" >
		<div class="section no-pad-bot" style='' >
			<div class="container">
				<div class="row center">
					<div style='' >
						<div class='row' style='width:100%;' >
							<div class='col s10  offset-s1 l12 m12' >
								<img src='image_edit/VendorRegistration.png' style='max-width:100%;' />
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="parallax"  >
			<img src="image_home/homepic.png" alt="Unsplashed background img 2">
		</div>
	</div>






	<div class="container text-center">
	 <div >
		<div align="center" style="" >
			<?php
				dummyheight(30);
			?>
			<div>
				<img src='image_edit/generalinformation.png' class="img-responsive" style='max-width:100%;' />
			</div>
			<div style="margin-top:20px;margin-bottom:20px;"  >
				<img src="image_edit/layer_5.png" style='max-width:100%;' />
			</div>
		</div>
	 </div>
	</div>

	<div class="container-fluid text-center">
		<div class='row' >
			<div class='col s12 l10 offset-l1 m12' >
				<form method="post" action="<?php echo HOST."store.php"; ?>" >

			 	<?php
			 		$info_text = array("Vendor Name", "Address");
			 		$info_name = array("name", "address");
			 		for($i=0; $i<2; $i++){
			 	?>
				<div class='row' >
					<div class="col s12 m2 l2" align="left" >
						<div ><?php echo $info_text[$i]; ?>:</div>
					</div>
					<div class="col s12 m9 l9" align='left' >
						<?php
						input_v2(array("ph"=>$info_text[$i], "name"=>$info_name[$i], "data" => $sinfo, "class" => "definput myinput" ));
		//				load_view("input2", array("ph"=>$info_text[$i], "divattr"=>array("style"=>"margin-top:-20px;"), "name"=>$info_name[$i], "data" => $sinfo ) );
						?>
					</div>
				</div>
				<?php
					}
				?>
				<div class='row' >
					<div class="col s12 m2 l2" align="left" >
						City:
					</div>
					<div class="col s12 m4 l4" align="left" >
						<?php
						input_v2(array("name"=>"city", "data" => $sinfo, "class" => "definput myinput" ) );
						?>
					</div>
					<div class="col s12 m1 l1" align="left" >
						State:
					</div>
					<div class="col s12 m4 l4" align="left" >
						<?php
						input_v2(array("name"=>"state", "data" => $sinfo, "class" => "definput myinput" ) );
						?>
					</div>
				</div>

				<div class='row' >
					<div class="col s12 m2 l2 mt5" align="left" >
						Pincode:
					</div>
					<div class="col s12 m4 l2 mt5 " style='' >
						<?php
							input_v2(array("name"=>"zipcode", "data" => $sinfo, "class" => "definput myinput"  ) );
						?>
					</div>
					<div class="col s12 m1 l1 mt5 " align="left" style='' >
						Landmark:
					</div>
					<div class="col s12 m4 l2 mt5" >
						<?php
							input_v2(array("name"=>"landmark", "data" => $sinfo, "class" => "definput myinput" ) );
						?>
					</div>
					<div class="col s12 m2 l1 mt5" align="left" >
						Country:
					</div>
					<div class="col s12 m9 l3 mt5" >
						<?php
							input_v2(array("name"=>"country", "data" => $sinfo, "class" => "definput myinput") );
						?>
					</div>
				</div>

				<div class='row' >
					<div class="col s12 m2 l2 mt5" align="left" >
						Latitude:
					</div>
					<div class="col s12 m4 l2 mt5 " style='' >
						<?php
							input_v2(array("name"=>"lat", "data" => $sinfo, "class" => "definput myinput"  ) );
						?>
					</div>
					<div class="col s12 m1 l1 mt5 " align="left" style='' >
						Longitute:
					</div>
					<div class="col s12 m4 l2 mt5" >
						<?php
							input_v2(array("name"=>"lan", "data" => $sinfo, "class" => "definput myinput" ) );
						?>
					</div>
					<div class="col s12 m2 l1 mt5" align="left" >
						Email:
					</div>
					<div class="col s12 m9 l3 mt5" >
						<?php
							input_v2(array("name"=>"email", "data" => $sinfo, "class" => "definput myinput", "disabled" => "true") );
						?>
					</div>
				</div>


				<div class='row' >
					<div class="col s12 m2 l2 mt5" align="left" >
						Mobile:
					</div>
					<div class="col s12 m4 l2 mt5 " style='' >
						<?php
							input_v2(array("name"=>"mobile", "data" => $sinfo, "class" => "definput myinput"  ) );
						?>
					</div>
					<div class="col s12 m4 l3 mt5" >
						<?php
							input_v2(array("name"=>"mobile2", "data" => $sinfo, "class" => "definput myinput" ) );
						?>
					</div>
					<div class="col s12 m2 l1 mt5" align="left" >
						Whatsapp:
					</div>
					<div class="col s12 m9 l3 mt5" >
						<?php
							input_v2(array("name"=>"whatsapp", "data" => $sinfo, "class" => "definput myinput") );
						?>
					</div>
				</div>


				<div class='pt25' align="center"  >
						<div class=''  >
							<img src='image_edit/aboutvendor.png' class="img-responsive" style='max-width:100%;' />
						</div>
				</div>
				<div class='row' align="center"  >
						<div style="margin-top:20px;margin-bottom:20px;" >
							<img  src="image_edit/layer_5.png"  />
						</div>
				</div>
				<div class="row" style="" >
					<?php
						$ctypes=array("Public Ltd.", "Private Ltd.", "Partnership", "Propeieter");
						for($i=0; $i<4; $i++){
					?>
						<div class="col s6 m3 l3" style="" >
						<?php
							load_view("check2", array("id"=>"ctype".$i, "label"=>"&nbsp;&nbsp;".$ctypes[$i], "value" => $i+1, "class"=>"filled-in tickone", "inpattr"=>array( "data-gid" => "comptype"  ), "data" => $sinfo ));
						?>
						</div>
					<?php
						}
					?>
				</div>
				<div class='row' >
					<div class="col s12 m2 l2" align="left" >
						Owner's Name:
					</div>
					<div class="col s12 m4 l4" style=""  >
						<?php
						input_v2(array("name"=>"ownername", "data" => $sinfo, "class" => "definput myinput"  ) );
						?>
					</div>
					<div class="col s12 m1 l1" align="left"  >
						Your Estd:
					</div>
					<div class="col s12 m4 l4" align="left" >
						<?php
						input_v2(array("name"=>"estd", "data" => $sinfo, "class" => "definput myinput") );
						?>
					</div>
				</div>
				<div class='row' >
					<div class="col s12 l2 m2" align="left" >
						Industory type
					</div>
					<div class="col s12 l4 m4" style="" >
						<select class='browser-default myinput' data-condition='simple' name="shopcatg" >
							<?php
								disp_olist($shopcatgs, array("addtext"=>"Select Industory", "selected" => $sinfo["shopcatg"] ));
							?>
						</select>
					</div>
				</div>



				<div class='pt25' align="center"  >
						<div class=''  >
							<img src='image_edit/StatutoryDetails.png' class="img-responsive" style='max-width:100%;' />
						</div>
				</div>
				<div class='row' align="center"  >
						<div style="margin-top:20px;margin-bottom:20px;" >
							<img  src="image_edit/layer_5.png"  />
						</div>
				</div>


				<?php
					$info_text = array("PAN No.", "TIN No. ", "Service Tex No.", "Service Type", "CST No.", "VAT No.");
					$info_name = array("pan", "tin", "stex", "stype", "cstno", "vatno");
					for($i=0, $count=0; $i<3; $i++, $count+=2){
				?>
				<div class='row' >
					<div class="col s12 l2 m2" align="left" >
						<?php echo $info_text[$count]; ?>:
					</div>
					<div class="col s12 l4 m4" style=""  >
						<?php
							input_v2(array("name"=>$info_name[$count], "data" => $sinfo, "class" => "definput myinput" ) );
						?>
					</div>
					<div class="col s12 l1 m1" align="left" >
						<?php echo $info_text[$count+1]; ?>:
					</div>
					<div class="col s12 l4 m4" >
						<?php
							input_v2(array("name"=>$info_name[$count+1], "data" => $sinfo, "class" => "definput myinput" ) );
						?>
					</div>
				</div>
				<?php
					}
				?>



				<div class='row' >
					<div class="col s12 l2 m2" align="left" >
						Excise reg No:
					</div>
					<div class="col s12 l9 m9" >
						<?php
							input_v2(array("name"=>"excisereg", "data" => $sinfo, "class" => "definput myinput"));
						?>
					</div>
				</div>

				<?php
					if(false){
				?>

				<div >
					<div align="center" style="" >
						<?php
						dummyheight(60);
						?>
						<img src='image_edit/Documents.png' class="img-responsive" />
					</div>
					<div style="margin-top:20px;margin-bottom:20px;" >
						<img  src="image_edit/layer_5.png"  />
					</div>
				</div>
				<div class="row" style="" >
					<?php
						$ctypes=array("Aadhar Card", "Licence", "Pan Card", "Photo");
						for($i=0; $i<4; $i++){
					?>
						<div class="col-md-3" style="" >
						<?php
							load_view("check1", array("id"=>"doctype".$i, "label"=>"&nbsp;&nbsp;".$ctypes[$i], "value" => $i, "data" => $sinfo ));
						?>
						</div>
					<?php
						}
					?>
				</div>
				<?php
					}
				?>

				<div class='row' >
					<div class="col s12 l2 m2" align="left" >
						About Store:
					</div>
					<div class="col s12 l9 m9" >
						<textarea name="aboutstore" class='materialize-textarea' placeholder='Breif About your store' ><?php echo convchars($sinfo["aboutstore"]); ?></textarea>
					</div>
				</div>

				<div class='row' >
					<div class="col s12 l2 m2" align="left" >
						Service Area:
					</div>
					<div class="col s12 l9 m9" >
						<textarea name="industorytext" class='materialize-textarea' placeholder='Breif About your store' ><?php echo convchars($sinfo["industorytext"]); ?></textarea>
					</div>
				</div>
				<button type="submit" name="savedetails" class="btn btn-success mybtn" style='' >SAVE DETAILS</button>

				</form>
			</div>
		</div>
	</div>

	<?php
		dummyheight(100);
	?>

<?php
load_view("template/footer.php");
load_view("template/bottom.php");
?>