<?php
//delete hospital
if(isset($_GET['delete']))
{
$hospital = new Hospital($_GET['ref']);
$hospital->delete($conn);
}
msg("info","list of hospitals");
?>
<table id="mytable">
<tr><th>Logo</th><th>Title</th><th>Email</th><th>Adress</th><th>Website</th><th></th></tr>
<?php
$hospital = new Hospital();
$condition="ORDER BY id DESC";
$i=0;
while($i<compteurTable($conn,"hospital",$condition))
{
$hospital->consult($conn,$i,$condition);
echo "<tr>";
echo "<td><img src='$hospital->logo' width='120' height='100'></td>";
echo "<td>".$hospital->title."</td>";
echo "<td>".$hospital->email."</td>";
echo "<td>".$hospital->adress."</td>";
echo "<td>".$hospital->website."</td>";
echo "<td><a style='width:100px;' onclick='javascript:return confirm(\"do you really want to delete\");' href='index.php?p=consult_hospital&delete&ref=$hospital->id' class='btn btn-info' >
<i class='fa fa-trash'></i>&nbsp;&nbsp;Delete</a>
<a style='width:100px;' href='index.php?p=update_hospital&ref=$hospital->id' class='btn btn-primary' >
<i class='fa fa-pencil'></i>&nbsp;&nbsp;Update</a>
</td></tr>";
$i++;
}
?>
</table>