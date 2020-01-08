<?php
$pageValue = $_GET['page'];
switch($pageValue)
{
case "Homepage":
case "contact":
case "lessons":
            echo   " <section class='Header' >";
 	    echo   "<style>.Header
{
	background-image: url(\"Images/Backgrounds/ChinaTownEntrance.png\");
}
 </style> ";

	break;
case "verify":
            echo   " <section class='Header'  >";
 	    echo   "<style>.Header
{
	background-image: url(\"Images/Backgrounds/ChineseCircleEntrance.jpg\");
}
 </style> ";
	break;
	
case "debugging":
            echo   " <section class='Header'  >";
 	    echo   "<style>.Header
{
	background-image: url(\"Images/Backgrounds/ChineseGate.jpg\");
}
 </style> ";
	break;

case "domManipulation":
            echo   " <section class='Header'  >";
 	    echo   "<style>.Header
{
	background-image: url(\"Images/Backgrounds/MountainView.jpg\");
}
 </style> ";
	break;

case "forms":
            echo   " <section class='Header'  >";
 	    echo   "<style>.Header
{
	background-image: url(\"Images/Backgrounds/Night.jpg\");
}
 </style> ";
	break;
case "formGame":
            echo   " <section class='Header'  >";
 	    echo   "<style>.Header
{
	background-image: url(\"Images/Backgrounds/ChinaTownEntrance.jpg\");
}
 </style> ";
	break;
case "gallery":
            echo   " <section class='Header'  >";
 	    echo   "<style>.Header
{
	background-image: url(\"Images/Backgrounds/ChinaTownEntrance.jpg\");
}
 </style> ";
	break;
case "objects":
            echo   " <section class='Header'  >";
	break;
default:
	
            echo   " <section class='Header'>"; 
}
