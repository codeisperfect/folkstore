<?php
class Templates{

	function input2($inp){
		foreach($inp as $key=>$val)
			$$key=$val;
		$inpattr=Fun::mergeifunset($inpattr,array("name"=>$name,"type"=>$type,"class"=>"form-control myinput","dc"=>$dc));
		mergeifunset($divattr,array("class"=>"form-group has-feedback"));
?>
		<div <?php echo param2str($divattr); ?> >
			<label class="control-label"><?php echo $label; ?></label>
			<input <?php echo param2str($inpattr); ?> />
			<i class="form-control-feedback glyphicon <?php echo $icon; ?>"></i>
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
}
?>