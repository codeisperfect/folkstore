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
											<div class="collapsible-header">Topics</div>
											<div class="collapsible-body" id="selecttopic" style="padding:10px;">
												<div style="padding:5px;">Select Class and Subject first.</div>
												<input type='checkbox' style='display:none' name='topic' value=''/>
											</div>
										</li>
										<li>
											<div class="collapsible-header">Time</div>
											<div class="collapsible-body" style="padding:6px;">
												<div class="row">
												<?php
													foreach($allts as $i=>$val) {
														foreach($val as $j=>$val1) {
												?>
													<div class="col s6">
														<input id="timesearch<?php echo $i."-".$j; ?>" type="checkbox" name="timeslot" class="filled-in" value="<?php echo $val1[1]; ?>" checked/>
														<label style="padding-left:23px;" for="timesearch<?php echo $i."-".$j; ?>"><?php echo $val1[0]; ?></label>
													</div>
												<?php
														}
													}
												?>
												</div>
											</div>
										</li>
										<li>
											<div class="collapsible-header">Languages</div>
											<div class="collapsible-body" style="padding:6px;">
												<div class="row">
												<?php
													$count=1;
													foreach($lang as $i=>$val1) {
														foreach($val1 as $j=>$val2) {
												?>
													<div class="col s6">
														<input id="lang<?php echo $count; ?>" type="checkbox" class="filled-in" name="lang" value='<?php echo $count; ?>' checked />
														<label style="padding-left:23px;" for="lang<?php echo $count; ?>" >
															<?php echo $val2; ?>
														</label>
													</div>
												<?php
															$count++;
														}
													}
												?>
												</div>
											</div>
										</li>
										<li>
											<div class="collapsible-header">Fees per hour</div>
											<div class="collapsible-body" style="padding:10px;">
												<?php
													$count=1;
													foreach($price as $val) {
														foreach($val as $val1) {
															load_view("Template/check1.php",array('label'=>htmlspecialchars($val1[0]), 'value'=>$count,"id"=>"price".$count, "name"=>"price"));
															$count++;
														}
													}
												?>
											</div>
										</li>
										<li>
											<div class="collapsible-header">Duration</div>
											<div class="collapsible-body" style="padding:10px;">
												<?php
													$count=1;
													foreach($timer as $val) {
														foreach($val as $val1) {
															load_view("Template/check1.php",array('label'=>htmlspecialchars($val1[0]), 'value'=>$count,"id"=>"timer".$count, "name"=>"timer"));
															$count++;
														}
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
