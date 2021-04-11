<?php
class sprachkenntnisse
{
public $id;
public $id_candidat;
public $language;
public $level;

function __construct($id="",$id_candidat="",$language="",$level="")
{
$this->id=$id;
$this->id_candidat=$id_candidat;
$this->language=$language;
$this->level = $level;
}

function add($cnx)
{
	$req = "insert into sprachkenntnisse values (NULL, \"$this->id_candidat\", \"$this->language\",\"$this->level\")";
	$cnx->query($req);
}

function delete($cnx){
	$req = "delete from sprachkenntnisse where id=\"$this->id\"";
	$cnx->query($req);
}


function update($cnx)
{
	$req="update sprachkenntnisse set  level=\"$this->level\", language=\"$this->language\" where id=\"$this->id\"" ;
	$exc = $cnx->prepare($req);
	$exc->execute();
}
function consult($cnx,$num_categorie,$condition)
{
$req = "select * from sprachkenntnisse $condition LIMIT $num_categorie,1";
$infos = $cnx->query($req);
$row = $infos->fetch(PDO::FETCH_ASSOC);
$this->id = $row["id"];
$this->id_candidat = $row["id_candidat"];
$this->language = $row["language"];
$this->level = $row["level"];
}
}
?>