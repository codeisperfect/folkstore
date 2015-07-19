					<?php
//					print_r($inp);
						if(true){
						$pnum=0;
						for($i=0;true && $pnum<count($sresults) ;$i++){
							for($j=0;$j<3 && $pnum<count($sresults) ;$j++){
								$row=$sresults[$pnum];
						?>
						<div class="col s12 l4 m6" style="" >
							<?php
								load_view("template/dispproduct.php", array("row" => $row));
							?>
						</div>
						<?php
								$pnum++;
							}
						}
					}
					?>
