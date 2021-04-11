<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
			<div style="width:100%;">
				<?php
				if(isset($_POST['confirm']))
				{					
					$candidat=new Candidat(NULL,$_SESSION['id'],$_POST['start_date'],$_POST['end_date'],$_POST['details']);
					$candidat->add($conn);
					header("Location:index.php?p=step2#vues");
					echo"<a href='index.php?p=step1#vues'>introduce your curriculum vitae</a>";
				}
				?>
				</div>				
				<div class="login100-pic js-tilt" data-tilt>
					<img src="assets/img/8782744a5fd83167418618c8437e714e.gif" alt="IMG" />
				</div>
				<?php
					$candidat=new Candidat();
					$candidat->consult($conn,0,"where id='".$_SESSION['id']."'");				
				?>
				<form class="login100-form validate-form" enctype="multipart/form-data" method="post" action="?p=step1#vues">
					<span class="login100-form-title">
                         BERUFSERFAHRUNG UND PRAKTIKA
					</span>
                                <label>Start date</label>
                            <div class="wrap-input100 validate-input" data-validate = "Valid Start date is required">
								<input class="input100" type="date" name="start_date" placeholder="Start date">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-calendar text-success" aria-hidden="true"></i>
                                </span>
                            </div>
                                    <label>End date</label>
                            <div class="wrap-input100 validate-input" data-validate = "Valid End date is required: ex@abc.xyz">
									<input class="input100" type="date" name="end_date" placeholder="End Date">
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="fa fa-calendar text-danger" aria-hidden="true"></i>
                                    </span>
                                </div>
                    <label>Details</label> 
                    <div class="wrap-input100 validate-input" data-validate = "Valid details is required">
						<textarea class="input100" name="details" ></textarea>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-comment text-danger" aria-hidden="true"></i>
						</span>
					</div>                                                            
					
                <div class="container-login100-form-btn">
                    <button name="confirm" type="submit" class="login100-form-btn">
                        Next
                    </button>
                </div>

				</form>
			</div>
		</div>
	</div>