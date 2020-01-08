
 /*
      JavaScript 6th Edition
      Chapter 9
      Chapter case

      Eating Well in Season results page
      Author: daniel j dunevant
      Date:   7/15/16

      Filename: script3.js
  */
  
"use strict";
// commented out for reasons unknown at this time
/*function parseData()	
{  
	console.log("Parsing Data...");
	var formData = decodeURIComponent(location.search);
	var formArray = [];
	var list = document.querySelector("div.results ul");
	formData = formData.substring(1, formData.length);
	while (formData.indexOf("+") !== -1)
	{
		formData = formData.replace("+"," ");
	}
	formData = decodeURIComponent(formData);
	formArray = formData.split("&");
	for (var i = 0 ; i < formArray.length; i++)
	{
		var newItem = document.createElement("li");
		newItem.innerHTML = formArray[i];
		list.appendChild(newItem);
	}
}*/

//  this  new  parse  data function  takes into  account the  cookies that  are  made in script 3  in the  create cookies  function
function parseData()
{
	console.log("Parsing Data" + document.cookie);
	var formData = document.cookie;
	var formArray = [];
	var list = document.querySelector("div.results ul");
	formArray = formData.split("; ");
	for (var i = 0 ; i < formArray.length; i++)
	{
		console.log(formArray[i]);
		var newItem = document.createElement("li");
		newItem.innerHTML = formArray[i];
		list.appendChild(newItem);
	}
	
}


// Event Listeners

if (window.addEventListener)
{
	window.addEventListener("load", parseData, false);
}
else if (window.attachEvent)
{
	window.attachEvent("onload", parseData);
}

