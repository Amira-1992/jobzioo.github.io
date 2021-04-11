<?php
class Favoris
{
public $id;
public $id_candidat;
public $id_hospital;
public $date;
public $learn;

function __construct($id="",$id_candidat="",$id_hospital="",$date="",$learn="")
{
$this->id=$id;
$this->id_candidat=$id_candidat;
$this->id_hospital=$id_hospital;
$this->date = $date;
$this->learn = $learn;
}

function add($cnx)
{
	$req = "insert into favoris values (NULL, \"$this->id_candidat\", \"$this->id_hospital\",\"$this->date\",\"$this->learn\")";
	$cnx->query($req);
}

function delete($cnx){
	$req = "delete from favoris where id=\"$this->id\"";
	$cnx->query($req);
}


function update($cnx)
{
	$req="update favoris set  date=\"$this->date\", id_hospital=\"$this->id_hospital\" where id=\"$this->id\"" ;
	$exc = $cnx->prepare($req);
	$exc->execute();
}
function consult($cnx,$num,$condition)
{
$req = "select * from favoris $condition LIMIT $num,1";
$infos = $cnx->query($req);
$row = $infos->fetch(PDO::FETCH_ASSOC);
$this->id = $row["id"];
$this->id_candidat = $row["id_candidat"];
$this->id_hospital = $row["id_hospital"];
$this->date = $row["date"];
$this->learn = $row["learn"];
}
}
?>