
var loggedOn= false;

// Function 1
//Page is Loaded Event listener

if (window.addEventListener)
{
	window.addEventListener("load", setUpPage, false);
}
else if(window.attachEvent)
{
	window.attachEvent("onload", setUpPage);
}

//Function 2
//Set up page funciton

function setUpPage()
{
	document.getElementById("test").innerHTML = "This page has loaded!";
	dropDown();
}

function setUpEventListeners()
{
	()
}