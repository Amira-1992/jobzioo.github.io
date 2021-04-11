<?php
class Hospital
{
public $id;
public $title;
public $description;
public $adress;
public $website;
public $email;
public $password;
public $logo;

function __construct($id="",$title="",$description="",$adress="",$website="",$email="",$password="",$logo="")
{
$this->id=$id;
$this->title=$title;
$this->description=$description;
$this->adress = $adress;
$this->website = $website;
$this->email = $email;
$this->password = $password;
$this->logo = $logo;
}

function add($cnx)
{
	$req = "insert into hospital values (NULL, \"$this->title\",\"$this->description\",\"$this->adress\",\"$this->website\",\"$this->email\",\"$this->password\",\"$this->logo\")";
	$cnx->query($req);
}

function delete($cnx){
	$req = "delete from hospital where id=\"$this->id\"";
	$cnx->query($req);
}


function update($cnx)
{
	$description=$cnx->quote($this->description);
	$req="update hospital set  website=\"$this->website\",email=\"$this->email\",logo=\"$this->logo\", title=\"$this->title\", description=\"$description\", adress=\"$this->adress\" where id=\"$this->id\"" ;
	$exc = $cnx->prepare($req);
	$exc->execute();
}
function consult($cnx,$num_hospital,$condition)
{
$req = "select * from hospital $condition LIMIT $num_hospital,1";
$infos = $cnx->query($req);
$row = $infos->fetch(PDO::FETCH_ASSOC);
$this->id = $row["id"];
$this->title = $row["title"];
$this->description =$row["description"];
$this->adress = $row["adress"];
$this->email = $row["email"];
$this->website = $row["website"];
$this->password = $row["password"];
$this->logo = $row["logo"];
}
}
?>