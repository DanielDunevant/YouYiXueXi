<?php
	$lessons = array("lessons","LivingWebpage","verify","arrays","debugging","domManipulation","formGame","forms","gallery","objects","offers","timing");
	$login= array ("SignIn","SignInsVerify"); 	
	$logout= array ("SignOut","SignOutVerify"); 	
	$contact= array ("ContactVerify","contact"); 	
	$forms= array ("ProfessorForm2","ProfessorForm","professorFormResults","Professor","StudentForm2","StudentForm","Student","studentFormResults"); 	
$pageValue = $_GET['page'];
$pageValueArray = explode('?',$pageValue);
$filteredPageValue = str_replace("?",null,$pageValueArray[0]);


                if(in_array($_GET['page'],$lessons))
                {
			if ($pageValue != "lessons"){
			print "<div class ='row'>";
			print "	<div class='col-xs-12 col-sm-7 col-md-7'>";
                        require_once("lessons/".$_GET['page'].".php");
			print "</div>\n<div class='col-xs-12 col-sm-3 col-md-3 characters'>";
			require_once("getCharacters.php");
			print "</div></div>\n";
			print "<div class='row'>";
			print "<div class ='col-md-12 col-sm-12 col-xs-12 lessonNav'>";
			require('navigation.php');
			print "</div></div>";
			}
			else{
			print "<div class ='row'>";
			print "	<div class='col-xs-12 col-sm-12 col-md-12'>";
                        require_once("lessons/".$_GET['page'].".php");
			print "</div></div>";
			}	
                }
                elseif(in_array($_GET['page'],$login))
                {
                        require_once("siteFunctions/login/".$_GET['page'].".php");
                }
                elseif(in_array($_GET['page'],$logout))
                {
                        require_once("siteFunctions/logout/".$_GET['page'].".php");
                }
                elseif(in_array($_GET['page'],$contact))
                {
                        require_once("siteFunctions/contact/".$_GET['page'].".php");
                }
                elseif(in_array($_GET['page'],$forms))
                {
                        require_once("siteFunctions/forms/".$_GET['page'].".php");
                }else
		{
			print "<div class ='row'>";
			print "<div class='col-md-8'>";
			require_once("Homepage.html");
			print "</div>\n<div class='col-md-3 characters'>";
			require_once("getCharacters.php");
			print "</div>\n</div>";
		}
?>
