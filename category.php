            <div class="row">
                <?php
                $i=0;
                $cat=new Categorie();
                $condition="where id_domain='".$_GET['domain']."'";
                while($i<compteurTable($conn,"categorie",$condition))
                {
                    $cat->consult($conn,$i,$condition);
                ?>
						<div class="col-lg-4 col-md-6 col-12 col-sm-6"> 
							<div class="blogThumb">
                               
								<div class="thumb-center"><img class="img-responsive" style="height:230px;" src="<?php echo $cat->icon ?>"></div>
	                        	<div class="vehicle-name cyan-bgcolor">
									<div class="user-name"><?php echo $cat->libelle; ?></div>
								</div>
	                        	<div class="vehicle-box">
                                            <div class="cart1">
												<a class="btn btn-primary btn-block" style="border-radius:10px;" href="index.php?p=candidat&cat=<?php echo $cat->id; ?>&domain=<?php echo $_GET['domain']; ?>">Meet our candidates</a>
											</div>
	                        	</div>
	                        </div>	
                    	</div>
                <?php
                $i++;
                }
                ?>
			 </div>

