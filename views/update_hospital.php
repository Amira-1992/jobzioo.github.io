<div class="account-box">
<?php
// update hospital
$hospital = new hospital();
$hospital->consult($conn,0,"where id='".$_GET['ref']."'");

if(isset($_POST['update']))
{
	$erreurs = "";
	if(isset($_FILES['logo']))
	{
		if(is_uploaded_file($_FILES['logo']['tmp_name']))
		{
		$ext=substr($_FILES["logo"]["name"],-3);
		$path="../logos/hospitals/".md5($_FILES['logo']['name']).rand(150,9999).".$ext";
		move_uploaded_file($_FILES['logo']['tmp_name'],$path);
		}
	}

	//update hospital
	$hospital = new Hospital($_GET['ref'],$_POST['title'],$_POST['description'],$_POST['adress'],$_POST['website'],$_POST['email'],$_POST['password'],$hospital->logo);
	if(isset($path)) $hospital->logo=$path;
	$hospital->update($conn);
	$success="hospital has been successfully modified";
}
// si le variabl tableau $erreurs est défini et non vide alors on l'affiche
if(!empty($erreurs)) msg("danger",$erreurs);
elseif(!empty($success)) msg("success",$success);
else msg("info","Update hospital");
?>
<form method="post" class="form" enctype="multipart/form-data" >
<div class="col-md-12">
				<div class="form-group">
					<label>Title</label>
					<input value="<?php echo $hospital->title; ?>" name="title" type="text" class="form-control" required />
				</div>
</div>

<div class="col-md-12">
	 <div class="form-group">
		<label>Description</label>
		<textarea name="description" class="form-control" required rows="3"><?php echo $hospital->description; ?></textarea>
	</div>
</div>
<div class="col-md-12">
				<div class="form-group">
					<label>Adress</label>
					<input value="<?php echo $hospital->adress; ?>" name="adress" type="text" class="form-control" required />
				</div>
</div>
<div class="col-md-12">
				<div class="form-group">
					<label>Website</label>
					<input value="<?php echo $hospital->website; ?>" name="website" type="text" class="form-control" required />
				</div>
</div>
<div class="col-md-12">
				<div class="form-group">
					<label>Email</label>
					<input value="<?php echo $hospital->email; ?>" name="email" type="email" class="form-control" required />
				</div>
</div>
<div class="col-md-12">
				<div class="form-group">
					<label>Password</label>
					<input value="<?php echo $hospital->password; ?>" name="password" type="text" class="form-control" required />
				</div>
</div>

<div class="col-md-12">
				<div class="form-group">
					<label>logo</label>
					<input name="logo" type="file" class="form-control" />
				</div>
</div>
    <div class="form-group text-center">
        <button class="btn btn-secondary account-btn" name="update" type="submit">update</button>
    </div>
    
</form>
</div>