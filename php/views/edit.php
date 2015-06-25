	<div class="jumbotron text-center" id="title" style="background-image:none;" >
		<div style="background: url(image_edit/shutterstockFC00020.png) no-repeat center center ;background-size:100% auto;padding-top:300px;background-color:rgba(0,25,0,0.4);"  >
		 <div style="min-height:300px;" align="center" >
			<div style="position:relative;border:solid rgba(0,0,0,0) 1px;margin:auto;"  >
				<div style='margin-top:-130px;' >
					<img src='image_edit/VendorRegistration.png' style='' />
				</div>
			</div>
		 </div>
		</div>
	</div>
	<div style='margin-top:-300px;background-color:white;min-height:300px;margin-bottom:-300px;' ></div>



	<div class="container text-center">
	 <div >
		<div align="center" style="" >
			<?php
				dummyheight(30);
			?>
		 <img src='image_edit/generalinformation.png' class="img-responsive" />
		</div>
		 <div style="margin-top:20px;margin-bottom:20px;" >
			<img  src="image_edit/layer_5.png"  />
		 </div>
	 </div>
	</div>

	<div class="container text-center">

	 	<?php
	 		$info_text = array("Vendor Name", "Address");
	 		$info_name = array("name", "address");
	 		for($i=0; $i<2; $i++){
	 	?>
		<div style='' >
			<div class="col-xs-12 col-sm-2" align="left" >
				<div class='mt25' style="" >
					<div class="row" >
						<div class="col-md-2" style="margin:0px;padding:0px;height:0px;" ></div>
						<div class="col-md-10" ><?php echo $info_text[$i]; ?>:</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-9" >
				<?php
				load_view("input2", array("ph"=>$info_text[$i], "divattr"=>array("style"=>""), "name"=>$info_name[$i] ) );
				?>
			</div>
			<?php
			clear();
			?>
		</div>
		<?php
			}
		?>
		<div style='' >
			<div class="col-xs-12 col-sm-2" align="left" >
				<div class='mt25' style="" >
					<div class="row" >
						<div class="col-md-2" style="margin:0px;padding:0px;height:0px;" ></div>
						<div class="col-md-10" >City:</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4" >
				<?php
				load_view("input2", array("ph"=>"&nbsp;", "divattr"=>array("style"=>""), "name"=>"city" ) );
				?>
			</div>
			<div class="col-xs-12 col-sm-1" align="left" >
				<div class='mt25' style="" >
					<div class="row" >
						<div class="col-md-2" style="margin:0px;padding:0px;height:0px;" ></div>
						<div class="col-md-10" >State:</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4" >
				<?php
				load_view("input2", array("ph"=>"&nbsp;", "divattr"=>array("style"=>""), "name"=>"state" ) );
				?>
			</div>
			<?php
			clear();
			?>
		</div>
		<div style='' >
			<div class="col-xs-12 col-sm-2" align="left" >
				<div class='mt25' style="" >
					<div class="row" >
						<div class="col-md-2" style="margin:0px;padding:0px;height:0px;" ></div>
						<div class="col-md-10" >Pincode:</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4" >
				<div class="row" >
					<div class="col-md-5" style="margin-right:0px;" >
						<?php
						load_view("input2", array("ph"=>"&nbsp;", "divattr"=>array("style"=>""), "name"=>"city" ) );
						?>
					</div>
					<div class="col-md-2" align="left" style="padding:0px;" >
						<div class='mt25' style="" >
							Landmark:
						</div>
					</div>
					<div class="col-md-5" >
						<?php
						load_view("input2", array("ph"=>"&nbsp;", "divattr"=>array("style"=>""), "name"=>"city" ) );
						?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-1" align="left" >
				<div class='mt25' style="" >
					<div class="row" >
						<div class="col-md-2" style="margin:0px;padding:0px;height:0px;" ></div>
						<div class="col-md-10" >Country:</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4" >
				<?php
				load_view("input2", array("ph"=>"&nbsp;", "divattr"=>array("style"=>""), "name"=>"state" ) );
				?>
			</div>
			<?php
			clear();
			?>
		</div>

		<div style='' >
			<div class="col-xs-12 col-sm-2" align="left" >
				<div class='mt25' style="" >
					<div class="row" >
						<div class="col-md-2" style="margin:0px;padding:0px;height:0px;" ></div>
						<div class="col-md-10" >Latitude:</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4" >
				<div class="row" >
					<div class="col-md-5" >
						<?php
						load_view("input2", array("ph"=>"&nbsp;", "divattr"=>array("style"=>""), "name"=>"city" ) );
						?>
					</div>
					<div class="col-md-2" align="left" style="padding:0px;" >
						<div class='mt25' style="" >
							Longitute:
						</div>
					</div>
					<div class="col-md-5" >
						<?php
						load_view("input2", array("ph"=>"&nbsp;", "divattr"=>array("style"=>""), "name"=>"city" ) );
						?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-1" align="left" >
				<div class='mt25' style="" >
					<div class="row" >
						<div class="col-md-2" style="margin:0px;padding:0px;height:0px;" ></div>
						<div class="col-md-10" >Email:</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4" >
				<?php
				load_view("input2", array("ph"=>"&nbsp;", "divattr"=>array("style"=>""), "name"=>"state" ) );
				?>
			</div>
			<?php
			clear();
			?>
		</div>

		<div style='' >
			<div class="col-xs-12 col-sm-2" align="left" >
				<div class='mt25' style="" >
					<div class="row" >
						<div class="col-md-2" style="margin:0px;padding:0px;height:0px;" ></div>
						<div class="col-md-10" >Mobile:</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-2" style="padding-right:3px;" >
				<?php
				load_view("input2", array("ph"=>"+91", "divattr"=>array("style"=>""), "name"=>"city" ) );
				?>
			</div>
			<div class="col-xs-12 col-sm-2" style="padding-left:3px;" >
				<?php
				load_view("input2", array("ph"=>"+91", "divattr"=>array("style"=>""), "name"=>"city" ) );
				?>
			</div>
			<div class="col-xs-12 col-sm-1" align="left" >
				<div class='mt25' style="" >
					<div class="row" >
						<div class="col-md-2" style="margin:0px;padding:0px;height:0px;" ></div>
						<div class="col-md-10" >Whatsapp:</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4" >
				<?php
				load_view("input2", array("ph"=>"+91", "divattr"=>array("style"=>""), "name"=>"state" ) );
				?>
			</div>
			<?php
			clear();
			?>
		</div>
		<div >
			<div align="center" style="" >
				<?php
				dummyheight(60);
				?>
				<img src='image_edit/aboutvendor.png' class="img-responsive" />
			</div>
			<div style="margin-top:20px;margin-bottom:20px;" >
				<img  src="image_edit/layer_5.png"  />
			</div>
		</div>
		<div class="row" style="" >
			<?php
				$ctypes=array("Public Ltd.", "Private Ltd.", "Partnership", "Propeieter");
				for($i=0; $i<4; $i++){
			?>
				<div class="col-md-3" style="" >
				<?php
					load_view("check1", array("id"=>"ctype".$i, "label"=>"&nbsp;&nbsp;".$ctypes[$i], "value" => $i, "class"=>"mycheckbox tickone", "inpattr"=>array( "data-gid" => "companytype" ) ));
				?>
				</div>
			<?php
				}
			?>
		</div>
		<div style='' >
			<div class="col-xs-12 col-sm-2" align="left" >
				<div class='mt25' style="" >
					<div class="row" >
						<div class="col-md-2" style="margin:0px;padding:0px;height:0px;" ></div>
						<div class="col-md-10" >Owner's Name:</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4" style=""  >
				<?php
				load_view("input2", array("ph"=>"&nbsp;", "divattr"=>array("style"=>""), "name"=>"city" ) );
				?>
			</div>
			<div class="col-xs-12 col-sm-1" align="left"  style="padding:0px;" >
				<div class='mt25' style="" >
					<div class="row" >
						<div class="col-md-2" style="margin:0px;padding:0px;height:0px;" ></div>
						<div class="col-md-10" >Your Estd:</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4" >
				<?php
				load_view("input2", array("ph"=>"+91", "divattr"=>array("style"=>""), "name"=>"state" ) );
				?>
			</div>
			<?php
			clear();
			?>
		</div>
		<div style='' >
			<div class="col-xs-12 col-sm-2" align="left" >
				<div class="mt10" >
					<div class="row" >
						<div class="col-md-2" style="margin:0px;padding:0px;height:0px;" ></div>
						<div class="col-md-10" >Industory type</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4" style="" >
				<div class='form-group has-feedback'  >
					<select class='form-control myinput' data-condition='simple' >
						<?php
							disp_olist($shopcatgs, array("addtext"=>"Select Industory"));
						?>
					</select>
				</div>
			</div>
			<?php
			clear();
			?>
		</div>


		<div >
			<div align="center" style="" >
				<?php
				dummyheight(60);
				?>
				<img src='image_edit/StatutoryDetails.png' class="img-responsive" />
			</div>
			<div style="margin-top:20px;margin-bottom:20px;" >
				<img  src="image_edit/layer_5.png"  />
			</div>
		</div>

		<?php
			$info_text=array("PAN No.", "TIN No. ", "Service Tex No.", "Service Type", "CST No.", "VAT No.");
			for($i=0, $count=0; $i<3; $i++, $count+=2){
		?>
		<div style='' >
			<div class="col-xs-12 col-sm-2" align="left" >
				<div class='mt25' style="" >
					<div class="row" >
						<div class="col-md-2" style="margin:0px;padding:0px;height:0px;" ></div>
						<div class="col-md-10" ><?php echo $info_text[$count]; ?>:</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4" style=""  >
				<?php
				load_view("input2", array("ph"=>"&nbsp;", "divattr"=>array("style"=>""), "name"=>"city" ) );
				?>
			</div>
			<div class="col-xs-12 col-sm-1" align="left"  style="padding:0px;" >
				<div class='mt25' style="" >
					<div class="row" >
						<div class="col-md-2" style="margin:0px;padding:0px;height:0px;" ></div>
						<div class="col-md-10" ><?php echo $info_text[$count+1]; ?>:</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4" >
				<?php
				load_view("input2", array("ph"=>"+91", "divattr"=>array("style"=>""), "name"=>"state" ) );
				?>
			</div>
			<?php
			clear();
			?>
		</div>
		<?php
			}
		?>



		<div style='' >
			<div class="col-xs-12 col-sm-2" align="left" >
				<div class='mt25' style="" >
					<div class="row" >
						<div class="col-md-2" style="margin:0px;padding:0px;height:0px;" ></div>
						<div class="col-md-10" >Excise reg No:</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-9" >
				<?php
				load_view("input2", array("ph"=>"&nbsp;", "divattr"=>array("style"=>""), "name"=>"" ) );
				?>
			</div>
			<?php
			clear();
			?>
		</div>




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
					load_view("check1", array("id"=>"doctype".$i, "label"=>"&nbsp;&nbsp;".$ctypes[$i], "value" => $i ));
				?>
				</div>
			<?php
				}
			?>
		</div>
	</div>

	<?php
		dummyheight(100);
	?>
