				<div class='leftinfo' style='padding:0px;' align=left >
					<form method=post  enctype="multipart/form-data" onsubmit="return submitForm(this);" action="" >
 						<?php
							Disp::takeinp_v2(array('ph'=>'Title of product','style'=>'margin-bottom:-20px;','name'=>'title' ));
						?>
						<table class='table' ><tr>
							<td style='' >
								<?php form_input(array('ph'=>'Price of product',"name"=>"price",'dc'=>"pnumber" )); ?>
							</td>
							<td style='' >
								<?php 
								form_input(array('ph'=>'Sale % of product',"name"=>"sale",'dc'=>"bound100"));
								 ?>
							</td>
						</tr></table>
						<?php
							form_textarea(array("class"=>"form-control status","ph"=>"Details of your product","rows"=>3,"data-maxrows"=>10,"onkeydown"=>"textarea.resizeorg(this);","onkeyup"=>"checkValid(this,event);textarea.resizeorg(this);", "name"=>"abouttext", "divs"=>"margin-top:-15px;" ));
							form_textarea(array("class"=>"form-control status","ph"=>"Additional Remarks","rows"=>3,"data-maxrows"=>10,"onkeydown"=>"textarea.resizeorg(this);","onkeyup"=>"textarea.resizeorg(this);", "name"=>"addinfo","dc"=>"idel","divs"=>"margin-top:-15px;" ));
						?>
						<table style="margin-bottom:15px;" >
							<tbody id="venderuploadpics"  >
								<tr>
									<th>Main Pic</th>
									<th><input type=file name='uploadpics[]' style='margin-top:5px;margin-left:5px;' /></th>
								</tr>
							</tbody>
						</table>
						<button type="button" onclick="button.addmore(this,'venderuploadpics','tr',funcs.f1,5);" class="btn btn-default" >
 							Add
 						</button>
						<button type="button" onclick="button.remadded(this,'venderuploadpics','tr',1);" class="btn btn-default" >
							Remove
						</button>
						<div style='padding:5px;' >
							<button type=submit class='btn btn-default' style='margin:4px;' >Post</button>
						</div>
					</form>
				</div>
