<?php

$pageValue = $_GET['page'];
switch($pageValue)
{
case "Homepage":
	$characterArray =array("性","相","近","也","习","相","远","也");
	break;
case "verify":
	$characterArray =array("真","正","的","智","慧","是","知","道","你","不","知","道","什","么");
	break;
	
case "debugging":
	$characterArray =array("真","正","的","智","慧","是","知","道","你","不","知","道","什","么");
	break;

case "dropDown":
	$characterArray =array("真","正","的","智","慧","是","知","道","你","不","知","道","什","么");
	break;

case "forms":
	$characterArray = array("我","们","最","大","的","荣","耀","不","在","于","从","不","跌","道");
	break;
case "formGame":
	$characterArray = array("我","们","最","大","的","荣","耀","不","在","于","从","不","跌","道");
	break;
case "gallery":
	$characterArray = array("我","们","最","大","的","荣","耀","不","在","于","从","不","跌","道");
	break;
case "objects":
	$characterArray = array("生","活","真","的","很","间","单","但","我","们","间","持","是","它","复","杂" );
	break;
case "timing":
	$characterArray = array("生","活","真","的","很","间","单","但","我","们","间","持","是","它","复","杂" );
	break;
case "LivingWebpage":
	$characterArray = array("生","活","真","的","很","间","单","但","我","们","间","持","是","它","复","杂" );
	break;
default:
	$characterArray =array("性","相","近","也","习","相","远","也");
	break;
}
$i=1;
//Iterative loop spits out character for specific page.
foreach($characterArray as $character)
{
	// determines whether image is png or jpg
	/*$file = "Images/Characters/$character.png";
	if(file_exists($file))
	{
		$file = "Images/Characters/$character.png";
	}
	else
	{
		$file = "Images/Characters/$character.jpg";
	}*/

	switch($i%2){
	case 0:
	
	   echo "<p class='character col-md-1' >$character</p>";
	   break;
	case 1:
	   echo "<p class='character col-md-1' >$character</p>";
	   break;
	}
	$i++;
}
echo <<<HEREDOC

HEREDOC;
?>
