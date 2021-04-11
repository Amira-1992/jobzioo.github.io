<?php

msg("info","list of favoris");
?>
<table id="mytable">
<tr><th>Hospital</th><th>Candidate</th><th>Date</th></tr>
<?php
$hospital = new Hospital();
$fav = new Favoris();
$cand = new Candidat();
$condition="where learn='0' ORDER BY id DESC";
$i=0;
while($i<compteurTable($conn,"favoris",$condition))
{
    $fav->consult($conn,$i,$condition);
    $cand->consult($conn,0,"where id='".$fav->id_candidat."'");
    $hospital->consult($conn,0,"where id='".$fav->id_hospital."'");
    echo "<tr>";
    echo "<td><img src='$hospital->logo' width='120' height='100'></td>";
    echo "<td><img src='../".$cand->picture."' width='90' height='90'></td>";
    echo "<td>".$fav->date."</td>";
    echo"</tr>";
$i++;
}
?>
</table>