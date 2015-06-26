				<div class='leftinfo' style='padding:0px;' align=left >
					<form method=post  enctype="multipart/form-data" onsubmit="return submitForm(this);" action="" id="uploadproductform" >
 						<?php
							load_view("input2", array('ph'=>'Title of product','style'=>'margin-bottom:0px;','name'=>'title' ));
//							Disp::takeinp_v2(array('ph'=>'Title of product','style'=>'margin-bottom:0px;','name'=>'title' ));
						?>
						<div class="row" style="padding:0px;margin:0px;" >
							<div class='col-md-6' style="padding:0px;margin:0px;padding-right:10px;" >
								<?php 
//							form_input(array('ph'=>'Price of product',"name"=>"price",'dc'=>"pnumber","divs"=>"margin-right:10px;" )); 
							load_view("input2", array('ph'=>'Price of product',"name"=>"price",'dc'=>"pnumber", "style"=>"margin-bottom:0px;"));
								?>
							</div>
							<div class="col-md-6" style="padding:0px;margin:0px;padding-left:10px;" >
								<?php 
//								form_input(array('ph'=>'Sale % of product',"name"=>"sale",'dc'=>"bound100","divs"=>"margin-left:10px;"));
								load_view("input2", array('ph'=>'Sale % of product',"name"=>"sale",'dc'=>"bound100"));
								 ?>
							</div>
						</div>
						<?php
							form_textarea(array("class"=>"form-control status ","ph"=>"Details of your product","rows"=>3,"data-maxrows"=>10,"onkeydown"=>"textarea.resizeorg(this);","onkeyup"=>"checkValid(this,event);textarea.resizeorg(this);", "name"=>"abouttext", "divs"=>"margin-top:-15px;" ));
							form_textarea(array("class"=>"form-control status","ph"=>"Additional Remarks","rows"=>3,"data-maxrows"=>10,"onkeydown"=>"textarea.resizeorg(this);","onkeyup"=>"textarea.resizeorg(this);", "name"=>"addinfo","dc"=>"idel","divs"=>"margin-top:-15px;" ));
						?>
						<table style="margin-bottom:15px;" >
							<tbody id="venderuploadpics"  >
								<tr>
									<th>Main Pic</th>
									<th><input type=file name='uploadpics[]' style='margin-top:5px;margin-left:5px;' /></th>
								</tr>
								<?php
								for($i=2;$i<=5;$i++){
								?>
								<tr>
									<th>Pic <?php echo $i; ?></th>
									<th><input type=file name='uploadpics[]' style='margin-top:5px;margin-left:5px;' /></th>
								</tr>
								<?php
								}
								?>
							</tbody>
						</table>

<!-- 						<button type="button" onclick="button.addmore(this,'venderuploadpics','tr',funcs.f1,5);" class="btn btn-default" >
 							Add
 						</button>
						<button type="button" onclick="button.remadded(this,'venderuploadpics','tr',1);" class="btn btn-default" >
							Remove
						</button>
 -->
 						<button style='display:none;' type="submit" ></button>
					</form>
				</div>
