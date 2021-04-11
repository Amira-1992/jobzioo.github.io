<?php
//connexion à la BD
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "medica_recruit";
// Create connection
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
// Check connection
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$req="SET NAMES 'utf8'";
$results=$conn->query($req);	

function compteurTable($cnx,$table,$condition)
{
$sql = "SELECT * FROM $table $condition";
$result = $cnx->query($sql);
$rows = $result->fetchAll();
return count($rows); 	
}

function msg($type,$msg){
echo "<div class='alert alert-".$type."'>".$msg."</div>";
}


function stars($nbr_star)
{
	$j=0;
	while($j<5)
	{
		if($j<$nbr_star) echo'<i class="fa fa-star"></i>';
		else echo'<i class="fa fa-star-o"></i>';
		$j++;
	}
}
?>

