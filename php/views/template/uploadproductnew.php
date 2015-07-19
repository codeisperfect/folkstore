				<form method=post  enctype="multipart/form-data" onsubmit="return submitForm(this);" action="" id="uploadproductform" >
					<div class="row" >
						<div class="col s12 l12 m12" >
	 						<?php
								load_view("input2", array('ph'=>'Title of product','style'=>'margin-bottom:0px;','name'=>'title' ));
							?>
						</div>
						<div class='col s12 l6 m6' >
							<?php 
						load_view("input2", array('ph'=>'Price of product',"name"=>"price",'dc'=>"pnumber", "style"=>"margin-bottom:0px;"));
							?>
						</div>
						<div class="col s12 l6 m6" >
							<?php 
							load_view("input2", array('ph'=>'Sale % of product',"name"=>"sale",'dc'=>"bound100"));
							 ?>
						</div>
						<div class="col s12 l12 m12" >
						<?php
							form_textarea(array("class"=>"definput status ","ph"=>"Details of your product","rows"=>6,"data-maxrows"=>10,"onkeydown"=>"textarea.resizeorg(this);","onkeyup"=>"checkValid(this,event);textarea.resizeorg(this);", "name"=>"abouttext", "divs"=>"" ));
						?>
						</div>
						<div class="col s12 l12 m12" >
						<?php
							form_textarea(array("class"=>"definput status","ph"=>"Additional Remarks","rows"=>3,"data-maxrows"=>10,"onkeydown"=>"textarea.resizeorg(this);","onkeyup"=>"textarea.resizeorg(this);", "name"=>"addinfo","dc"=>"idel","divs"=>"" ));
						?>
						</div>
					</div>
					<div id="venderuploadpics"  >
						<div class="row" >
							<div class="col s12 l1 m3" >
								Main Pic
							</div>
							<div class="col s12 l11 m9" >
								<input type=file name='uploadpics[]' style='' />
							</div>
						</div>
						<?php
							for($i=2;$i<=5;$i++){
							?>
							<div class="row">
								<div class="col s12 l1 m3" >Pic <?php echo $i; ?></div>
								<div class="col s12 l11 m9" >
									<input type=file name='uploadpics[]' style='' />
								</div>
							</div>
							<?php
							}
						?>
					</div>
					<button type="submit" class='btn green waves-effect waves-light' >Upload</button>
				</form>

<?php
if(false) {
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
<?php
}
?>