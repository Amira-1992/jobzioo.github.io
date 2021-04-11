<div class="limiter">
		<div class="container-login100">

			<div class="wrap-login100">
			<div style="width:100%;">
				<?php
				if(isset($_POST['login']))
				{
					$candidat=new Candidat();
					$candidat->consult($conn,0,"where id='".$_GET['id']."'");
					$condition="where email='".$_POST['email']."' AND password='".$_POST['password']."'";
					if($_POST['email']!=$candidat->email)
					msg("danger","It's not your account");
					elseif(compteurTable($conn,"candidat",$condition)==1)
					{
						$_SESSION['id']=$_GET['id'];
						header("Location: index.php?p=confirm&id=".$_SESSION['id']."#vues");
					}
					else
					msg("danger","Account not found");
				}
				else
				msg("success","Candidate has been added successfully, <b> Identify</b> yourself to <b>confirm</b> your account");
				?>
				</div>
				<div class="login100-pic js-tilt" data-tilt>
					<img src="assets/img/_g.gif" alt="IMG">
				</div>

				<form class="login100-form " method="post" action="index.php?p=login&id=<?php echo $_GET['id']; ?>#vues">
					<span class="login100-form-title">
                        Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope text-primary" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock text-danger" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" name="login" class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="index.php?p=candidat#vues">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>