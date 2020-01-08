

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

function dropDown() {
    document.getElementById("dDownCont1").classList.toggle("show");
    document.getElementById("dDownCont2").classList.toggle("show");
    document.getElementById("dDownCont3").classList.toggle("show");
    document.getElementById("dDownCont4").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
