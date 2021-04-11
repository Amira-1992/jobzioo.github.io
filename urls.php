<?php
if(isset($_GET['p']))
{
    $page = $_GET['p'];
    switch($page)
	{
        case "candidat": include("vues/candidat.php"); break;
		case "services": include("vues/services.php"); break;
        case "login": include("vues/login.php"); break;
        case "profil": include("vues/profil.php"); break;
        case "about": include("vues/about.html"); break;
        case "confirm": include("vues/confirm.php"); break;
        case "contact": include("vues/contact.php"); break;
        case "step1": include("vues/step1.php"); break;
        case "step2": include("vues/step2.php"); break;
        case "step3": include("vues/step3.php"); break;
        case "step4": include("vues/step4.php"); break;
        case "step5": include("vues/step5.php"); break;
        default: include("vues/home.php");
    }
} 
else include("vues/home.php");   
?>