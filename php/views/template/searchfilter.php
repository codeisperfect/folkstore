				<div  > <!-- Don't add a class -->
					<div class="row">
						<form method="post" id="searchform" class="col s12">
							<?php
							hidinp("search",htmlspecialchars($search));
							?>
							<div class="row">
								<div class="col s12">
									<h5 class="blue-grey-text text-darken-1">Filter<i class="material-icons right">filter_list</i></h5>
									<ul class="collapsible" data-collapsible="accordion">
										<li>
											<div class="collapsible-header">Price</div>
											<div class="collapsible-body" style="padding:10px;">
												<?php
													$count = 1;
													foreach(gi("pricefilter") as $val1) {
														load_view("check2",array('label'=>htmlspecialchars($val1[0]), 'value'=>$count,"id"=>"price".$count, "name"=>"price", 'inpattr' => array("data-gid" => "pricefilter", "data-onchange" => "searchrefine()") ));
														$count++;
													}
												?>
											</div>
										</li>
										<li>
											<div class="collapsible-header">Sale%</div>
											<div class="collapsible-body" style="padding:10px;">
												<?php
													$count = 1;
													foreach(gi("salefilter") as $val1) {
														load_view("check2",array('label'=>htmlspecialchars($val1[0]), 'value'=>$count,"id"=>"sale".$count, "name"=>"sale", "inpattr" => array("data-gid" => "salefilter", "data-onchange" => "searchrefine()") ));
														$count++;
													}
												?>
											</div>
										</li>
										<li>
											<div class="collapsible-header">Category</div>
											<div class="collapsible-body" style="padding:10px;">
												<?php
													foreach($catgs as $i => $val1) {
														load_view("check2",array('label'=>htmlspecialchars($val1), 'value'=>$i, "id"=>"catg".$i, "name"=>"sale", "inpattr" => array("data-gid" => "catgfilter", "data-onchange" => "searchrefine()" )));
													}
												?>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</form>
					</div>
				</div>
