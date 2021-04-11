<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
			<div style="width:100%;">
				<?php
				if(isset($_POST['confirm']))
				{
					if(isset($_FILES['certificate']))
					{
					if(is_uploaded_file($_FILES['certificate']['tmp_name'])){
					$ext=substr($_FILES["certificate"]["name"],-3);
					$path="assets/img/candidats/".md5($_FILES['certificate']['name']).rand(150,9999).".$ext";
					move_uploaded_file($_FILES['certificate']['tmp_name'],$path);
					}
					}					
					$candidat=new Candidat();
					$candidat->id=$_SESSION['id'];
					$candidat->job_type=$_POST['job_type'];
					$candidat->phone=$_POST['phone'];
					$candidat->details=$_POST['details'];
					$candidat->certificate=$path;
					$candidat->update($conn);
					msg("success","Your account is confirmed ");
					echo"<a class='btn btn-primary' href='index.php?p=step1#vues'>
					<i class='fa fa-file-pdf-o fa-lg'></i>introduce your curriculum vitae</a>";
				}
				?>
				</div>				
				<div class="login100-pic js-tilt" data-tilt>
					<img src="assets/img/Doctors.gif" alt="IMG" />
				</div>
				<?php
					$candidat=new Candidat();
					$candidat->consult($conn,0,"where id='".$_SESSION['id']."'");				
				?>
				<form class="login100-form " enctype="multipart/form-data" method="post" action="?p=confirm&id=<?php echo $_SESSION['id']; ?>#vues">
					<span class="login100-form-title">
                         Confirm your account
					</span>

                    <table>
                        <tr>
                        <td>
                            <div class="wrap-input100 validate-input" data-validate = "Valid first name is required">
                                <input class="input100" type="text" value="<?php echo $candidat->first_name; ?>" name="first_name" placeholder="First name">
                                <span class="focus-input100"></span>
                                <span class="symbol-input100">
                                    <i class="fa fa-user text-info" aria-hidden="true"></i>
                                </span>
                            </div>
                        </td>
                        <td>
                                <div class="wrap-input100 validate-input" data-validate = "Valid last name is required: ex@abc.xyz">
                                    <input class="input100" type="text" value="<?php echo $candidat->last_name; ?>" name="last_name" placeholder="Last name">
                                    <span class="focus-input100"></span>
                                    <span class="symbol-input100">
                                        <i class="fa fa-user text-primary" aria-hidden="true"></i>
                                    </span>
                                </div>
                        </td>
                        </tr>
                    </table>
					<div class="wrap-input100 validate-input" data-validate = "Job type is required">
                        <select class="input100" name="job_type">
                        <option>Job Type</option>
                        <?php
                        $i=0;
                        $cat=new Categorie();
                        while($i<compteurTable($conn,"categorie",""))
                        {
                            $cat->consult($conn,$i,"");
							if($cat->id==$candidat->id)
                            echo"<option selected value='".$cat->id."'>".$cat->libelle."</option>";
                            else
							echo"<option value='".$cat->id."'>".$cat->libelle."</option>";
                            $i++;
                        }
                        ?>
                        </select>
                        <span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-cog text-danger" aria-hidden="true"></i>
						</span>

					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Valid Email is required: ex@abc.xyz">
						<input class="input100" type="text" value="<?php echo $candidat->email; ?>" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope text-primary" aria-hidden="true"></i>
						</span>
					</div>
                    <div class="wrap-input100 validate-input" data-validate = "Valid phone is required">
						<input class="input100" type="text" name="phone" required placeholder="Phone">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-phone text-danger" aria-hidden="true"></i>
						</span>
					</div> 
                    <div class="wrap-input100 validate-input" data-validate = "Valid details is required">
						<textarea class="input100" name="details" placeholder="Details"></textarea>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-comment text-danger" aria-hidden="true"></i>
						</span>
					</div>                                                            
				  <div class="custom-file">
					<input type="file" name="certificate" class="custom-file-input" required id="customFile">
					<label placeholder="certificate" class="custom-file-label" for="customFile">Choose Certificate</label>
				  </div>
					
                <div class="container-login100-form-btn">
                    <button name="confirm" type="submit" class="login100-form-btn">
                        Confirm
                    </button>
                </div>

				</form>
			</div>
		</div>
	</div>