<?php
class Candidat
{
public $id;
public $nationality;
public $first_name;
public $last_name;
public $email;
public $password;
public $picture;
public $job_type;
public $phone;
public $details;
public $certificate;

function __construct($id="",$nationality="",$first_name="",$last_name="",$email="",$password="",$picture="",$job_type="",$phone="",$details="",$certificate="")
{
$this->id=$id;
$this->nationality=$nationality;
$this->first_name=$first_name;
$this->last_name = $last_name;
$this->email = $email;
$this->password = $password;
$this->picture = $picture;
$this->job_type = $job_type;
$this->phone = $phone;
$this->details = $details;
$this->certificate = $certificate;
}

function add($cnx)
{
	$req = "insert into candidat values (NULL, \"$this->nationality\",\"$this->first_name\",\"$this->last_name\",\"$this->email\",\"$this->password\",\"$this->picture\",\"$this->job_type\",\"$this->phone\",\"$this->details\",\"$this->certificate\")";
	$cnx->query($req);
}

function delete($cnx){
	$req = "delete from candidat where id=\"$this->id\"";
	$cnx->query($req);
}

function update($cnx)
{
	$details=$cnx->quote($this->details);
	$req="update candidat set  nationality=\"$this->nationality\",password=\"$this->password\",picture=\"$this->picture\",job_type=\"$this->job_type\",details=\"$details\",phone=\"$this->phone\",email=\"$this->email\" ,last_name=\"$this->last_name\" ,first_name=\"$this->first_name\" where id=\"$this->id\"" ;
	$exc = $cnx->prepare($req);
	$exc->execute();
}
function consult($cnx,$num_candidat,$condition)
{
$req = "select * from candidat $condition LIMIT $num_candidat,1";
$infos = $cnx->query($req);
$row = $infos->fetch(PDO::FETCH_ASSOC);
$this->id = $row["id"];
$this->nationality = $row["nationality"];
$this->first_name =$row["first_name"];
$this->last_name = $row["last_name"];
$this->password = $row["password"];
$this->email = $row["email"];
$this->picture = $row["picture"];
$this->job_type = $row["job_type"];
$this->phone = $row["phone"];
$this->details = $row["details"];
$this->certificate = $row["certificate"];
}
}
?>