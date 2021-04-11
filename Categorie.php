<?php
class Categorie
{
public $id;
public $id_domain;
public $libelle;
public $icon;

function __construct($id="",$id_domain="",$libelle="",$icon="")
{
$this->id=$id;
$this->id_domain=$id_domain;
$this->libelle=$libelle;
$this->icon = $icon;
}

function add($cnx)
{
	$req = "insert into categorie values (NULL, \"$this->id_domain\", \"$this->libelle\",\"$this->icon\")";
	$cnx->query($req);
}

function delete($cnx){
	$req = "delete from categorie where id=\"$this->id\"";
	$cnx->query($req);
}


function update($cnx)
{
	$req="update categorie set  icon=\"$this->icon\", libelle=\"$this->libelle\" where id=\"$this->id\"" ;
	$exc = $cnx->prepare($req);
	$exc->execute();
}
function consult($cnx,$num_categorie,$condition)
{
$req = "select * from categorie $condition LIMIT $num_categorie,1";
$infos = $cnx->query($req);
$row = $infos->fetch(PDO::FETCH_ASSOC);
$this->id = $row["id"];
$this->id_domain = $row["id_domain"];
$this->libelle = $row["libelle"];
$this->icon = $row["icon"];
}
}
?>