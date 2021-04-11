<?php
class Administrateur {
public $id;
public $user;
public $pass;
public $nom;
public $email;
public $telephone;

function __construct($user="",$pass="",$nom="",$email="",$telephone="")
{
$this->user =$user;
$this->pass = $pass;
$this->nom=$nom;
$this->email=$email;
$this->telephone=$telephone;
}

function getInfos($cnx,$num_enrg_admin,$clause,$user)
{

if(empty($user))
// La clause LIMIT x,y retourne tous les enregistrement à partir de l\"enregistrement numéro x et afficher y enregistrements
$sql = "select * from administrateur $clause LIMIT $num_enrg_admin,1";
else
$sql = "select * from administrateur where user='".$user."'";
$infos = $cnx->query($sql);
$row = $infos->fetch(PDO::FETCH_ASSOC);
$this->id = $row["id"];
$this->user = $row["user"];
$this->pass=$row["pass"]; 
$this->nom = $row["nom"];
$this->email =$row["email"];
$this->telephone =$row["telephone"];
}
}
?>