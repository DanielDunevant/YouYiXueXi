
 /*
      JavaScript 6th Edition
      Chapter 9
      Chapter case

      Eating Well in Season results page
      Author: daniel j dunevant
      Date:   7/14/16

      Filename: script2.js
  */


"use strict";

var queryArray = [];

function populateInfo()
{
	if(location.search)
	{
		
		var queryData = location.search;
		var hiddenInputs = document.querySelectorAll("input[type=hidden]");
		queryData = queryData.substring(1,queryData.length);
		queryArray = queryData.split("&");
		for (var  i = 0 ; i < queryArray.length; i++)
		{
			hiddenInputs[i].value = queryArray[i].substring(queryArray[i].lastIndexOf("=") + 1);
		}
	}
}

// Create cookeies funciton

function createCookies()
{
	console.log("Creating Cookies...");
	var formFields = document.querySelectorAll("input[type=hidden],input[type=radio],textarea");
	var expiresDate = new Date();
	expiresDate.setDate (expiresDate.getDate() +7);
	for(var i = 0 ; i < formFields.length; i++)
	{
		console.log("     Making individual cookie  info...");
		var currentValue = decodeURIComponent(formFields[i].value);
		currentValue = currentValue.replace(/\+/g, " ");
		document.cookie= formFields[i].name + "=" + currentValue+ "; expires=" + expiresDate.toUTCString();
	}
}

// Handle Sumbit Function (note: I  may need to  have  two  funciton declarations: one that  declares the  funciton and  on that defines it  as  an  event)
//function handleSubmit()
//{
	function handleSubmit(evt)
	{
		console.log("handling submission...");
		if(evt.preventDefault)
		{
			evt.preventDefault();
		}
		else 
		{
			evt.returnValue = false;
		}
		createCookies();
		document.getElementsByTagName("form")[0].submit();
	}
//}

//eventlisteners
function createEventListeners()
{
	console.log("creating event Listeners...")
	var form = document.getElementsByTagName("form")[0];

	if (form.addEventListener)
	{
		form.addEventListener("submit", handleSubmit, false);
	}
	else if (form.attachEvent)
	{
		form.attachEvent("onsubmit", handleSubmit);
	}
}

function setUpPage()
{
	console.log("setting up page...")
	createEventListeners();
	populateInfo();
}
//When page loads the setuppage function is called
if (window.addEventListener)
{
	window.addEventListener("load", setUpPage,false);
}
else if (window.attachEvent)
{
	window.attachEvent("onload", setUpPage);
}