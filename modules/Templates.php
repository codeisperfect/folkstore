<?php
class Templates{

	function input2($inp){
		foreach($inp as $key=>$val)
			$$key=$val;
		$inpattr=Fun::mergeifunset($inpattr,array("name"=>$name,"type"=>$type,"class"=>"form-control myinput","dc"=>$dc, "ph"=>$ph, "id"=>$id));
		mergeifunset($divattr,array("class"=>"form-group has-feedback", "style"=>"border:solid red 0px;margin-top:-10px;margin-bottom:0px;"));
?>
		<div <?php echo param2str($divattr); ?> >
			<label class="control-label"><?php echo $label; ?></label>
			<input <?php echo param2str($inpattr); ?> />
			<i class="form-control-feedback glyphicon <?php echo $icon; ?>" style='<?php pit("margin-top:-5px;", $ph!=''); ?>' ></i>
		</div>
<?php
	}

	function input1($inp){
		foreach($inp as $key=>$val)
			$$key=$val;
		$inpattr=Fun::mergeifunset($inpattr,array("name"=>$name,"type"=>$type,"class"=>"form-control","dc"=>$dc,"onkeyup"=>"checkValid(this,event);"));
		mergeifunset($divattr,array("class"=>"form-group"));
?>
							<div <?php echo param2str($divattr); ?> >
							 <label class="col-md-2 control-label">
								<?php echo $label; ?>
							 </label>
							 <div class="col-md-10">
								<input <?php echo param2str($inpattr); ?> />
							 </div>
							</div>
<?php
	}
	function headerdd($inp){
		foreach($inp as $key=>$val)
			$$key=$val;
		foreach($links as $link=>$text){
		?>
			 <li>
				<a href="<?php echo $link; ?>">
				 <?php echo $text; ?>
				</a>
			 </li>
		<?php
		}
?>
<?php
	}
	function check1($inp){
		foreach($inp as $key=>$val)
			$$key=$val;
		mergeifunset($inpattr,array("class"=>$class,"id"=>$id==''?'':"check_".$id,"onchange"=>$onchange,"type"=>"checkbox" ));
		if($checked!==null)
			$inpattr["checked"]="";
		if($indiv)
			opent("div", $divattr);
?><input <?php echo param2str($inpattr); ?> /><label for="<?php echo $inpattr["id"]; ?>" style='padding-left:0px;font-weight:600;'  ><?php echo $label; ?></label>
<?php
		if($indiv)
			closet("div");
	}
}
?>