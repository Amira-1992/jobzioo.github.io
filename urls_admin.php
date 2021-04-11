<?php
if(isset($_GET['p']))
{
    $page = $_GET['p'];
    switch($page)
	{
        case "add_hospital": include("views/add_hospital.php"); break;
		case "consult_hospital": include("views/consult_hospital.php"); break;
		case "update_hospital": include("views/update_hospital.php"); break;
		case "favoris": include("views/favoris.php"); break;
        default: include("views/home.php");
    }
} 
else include("views/home.php");   
?>