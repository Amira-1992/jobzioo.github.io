<div class="account-box">
<?php
if(isset($_POST['add']))
{
	$erreurs = "";
	
		if(isset($_FILES['logo'])){
		if(is_uploaded_file($_FILES['logo']['tmp_name'])){
		$ext=substr($_FILES["logo"]["name"],-3);
		$path="../assets/img/hospitals/".md5($_FILES['logo']['name']).rand(150,9999).".$ext";
		move_uploaded_file($_FILES['logo']['tmp_name'],$path);
		}
		else $erreurs="file not found";
		}

		//Add hospital
		$hospital = new Hospital(NULL,$_POST['title'],$_POST['description'],$_POST['adress'],$_POST['website'],$_POST['email'],$_POST['password'],$path);
		$hospital->add($conn);
		$success="hospital has been added successfully";
}
// si le variabl tableau $erreurs est défini et non vide alors on l'affiche
if(!empty($erreurs)) msg("danger",$erreurs);
elseif(!empty($success)) msg("success",$success);
else msg("info","Add Hospital");
?>
<form method="post" class="form" enctype="multipart/form-data" >
<div class="col-md-12">
				<div class="form-group">
					<label>Title</label>
					<input name="title" type="text" class="form-control" required />
				</div>
</div>
<div class="col-md-12">
	 <div class="form-group">
		<label>Description</label>
		<textarea name="description" class="form-control" required rows="3"></textarea>
	</div>
</div>
<div class="col-md-12">
				<div class="form-group">
					<label>Adress</label>
					<input name="adress" type="text" class="form-control" required />
				</div>
</div>
<div class="col-md-12">
				<div class="form-group">
					<label>Website</label>
					<input name="website" type="text" class="form-control" required />
				</div>
</div>
<div class="col-md-12">
				<div class="form-group">
					<label>Email</label>
					<input name="email" type="email" class="form-control" required />
				</div>
</div>
<div class="col-md-12">
				<div class="form-group">
					<label>Password</label>
					<input name="password" type="password" class="form-control" required />
				</div>
</div>
<div class="col-md-12">
				<div class="form-group">
					<label>Logo</label>
					<input name="logo" type="file" class="form-control" required />
				</div>
</div>	   
    <div class="form-group text-center">
        <button class="btn btn-primary account-btn" name="add" type="submit">Add</button>
    </div>
    
</form>
</div>