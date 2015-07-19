							<a href="<?php echo HOST."product.php?pid=".$row["id"]; ?>" ><div class='card' >
								<div  >
									<div style="padding:5px;" >
									<?php
										resimg($row["dispimg"],array("class"=>"","style"=>"max-width:100%;max-height:100%;"));
									?>
									</div>
									<div align="center" style='color:#333;display:none;' >
										<span style="text-transform: uppercase;font-size:20px;font-weight:600;color:#555555;" ><?php echo $row["title"]; ?></span><br>
										<span><?php echo $row["abouttext_short"]; ?></span><br>
										<div>
											<span style='font-weight:600;' >Rs. <?php echo ceil($row['price']*(100-$row['sale'])/100.0); ?></span>
											<span style='text-decoration:line-through;' >Rs. <?php echo $row['price'] ?></span>  
											Flat <span style='color:green;font-weight:600;' ><?php echo  $row['sale'] ; ?></span> % Off
										</div>
									</div>
								</div>
							</div></a>
