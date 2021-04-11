<?php
class fuhrerschein
{
public $id;
public $id_candidat;
public $libelle;

function __construct($id="",$id_candidat="",$libelle="")
{
$this->id=$id;
$this->id_candidat=$id_candidat;
$this->libelle=$libelle;
}

function add($cnx)
{
	$req = "insert into fuhrerschein values (NULL, \"$this->id_candidat\", \"$this->libelle\")";
	$cnx->query($req);
}

function delete($cnx){
	$req = "delete from fuhrerschein where id=\"$this->id\"";
	$cnx->query($req);
}


function update($cnx)
{
	$req="update fuhrerschein set libelle=\"$this->libelle\" where id=\"$this->id\"" ;
	$exc = $cnx->prepare($req);
	$exc->execute();
}
function consult($cnx,$num_categorie,$condition)
{
$req = "select * from fuhrerschein $condition LIMIT $num_categorie,1";
$infos = $cnx->query($req);
$row = $infos->fetch(PDO::FETCH_ASSOC);
$this->id = $row["id"];
$this->id_candidat = $row["id_candidat"];
$this->libelle = $row["libelle"];
}
}
?>