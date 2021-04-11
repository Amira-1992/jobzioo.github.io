<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog" style="width:800px;">

    <!-- Modal content-->
    <div class="modal-content" style="width:500px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"></h4>
      </div>
        <div class="modal-body" >
				<?php
				if(isset($_POST['login']))
				{
					$condition="where email='".$_POST['email']."' AND password='".$_POST['password']."'";

					if(compteurTable($conn,"candidat",$condition)==1)
					{
                        $candidat=new Candidat();
                        $candidat->consult($conn,0,$condition);
						$_SESSION['id']=$candidat->id;
						header("Location: index.php?p=profil&id=".$_SESSION['id']."#vues");
					}
					else
					echo'<script>alert("Account not found")</script>';
				}
				else
				msg("info","<b> Identify</b> yourself to enter in your profile");
				?>
				<form style="margin-left:auto;margin-right:auto;" class="login100-form validate-form" method="post"  action="#myModal">
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
						<input type="submit" name="login" class="login100-form-btn" value="Login" />
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
</div>