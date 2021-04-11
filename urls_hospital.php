<?php
if(isset($_GET['p']))
{
    $page = $_GET['p'];
    switch($page)
	{
		case "category": include("views/category.php"); break;
		case "consult_domain": include("views/domain.php"); break;
		case "candidat": include("views/candidat.php"); break;
        default: include("views/home.php");
    }
} 
else include("views/home.php");   
?>