<?php
class ausbildung
{
public $id;
public $id_candidat;
public $start_date;
public $end_date;
public $description;

function __construct($id="",$id_candidat="",$start_date="",$end_date="",$description="")
{
$this->id=$id;
$this->id_candidat=$id_candidat;
$this->start_date=$start_date;
$this->end_date = $end_date;
$this->description = $description;
}

function add($cnx)
{
	$req = "insert into ausbildung values (NULL, \"$this->id_candidat\", \"$this->start_date\",\"$this->end_date\",\"$this->description\")";
	$cnx->query($req);
}

function delete($cnx){
	$req = "delete from ausbildung where id=\"$this->id\"";
	$cnx->query($req);
}


function update($cnx)
{
	$req="update ausbildung set  end_date=\"$this->end_date\", start_date=\"$this->start_date\" where id=\"$this->id\"" ;
	$exc = $cnx->prepare($req);
	$exc->execute();
}
function consult($cnx,$num_categorie,$condition)
{
$req = "select * from ausbildung $condition LIMIT $num_categorie,1";
$infos = $cnx->query($req);
$row = $infos->fetch(PDO::FETCH_ASSOC);
$this->id = $row["id"];
$this->id_candidat = $row["id_candidat"];
$this->start_date = $row["start_date"];
$this->end_date = $row["end_date"];
$this->description = $row["description"];
}
}
?>