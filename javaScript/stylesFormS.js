
 /*
      JavaScript 6th Edition
      Chapter 9
      Chapter case

      Eating Well in Season results page
      Author: daniel j dunevant
      Date:   7/15/16

      Filename: script.js
  */


function clearCookies()
{
	console.log("Clearing Cookies...")
	cookieString = document.cookie;
	var cookieArray = cookieString.split("; ");
	var  expiresDate = new Date();
	expiresDate.setDate(expiresDate.getDate() - 7);
	for(var i = 0 ; i <cookieArray.length; i++)
	{
		 document.cookie = cookieArray[i] + "; expires =" + expiresDate.toUTCString();
	}	

}
// Event Listeners


if (window.addEventListener)
{
	window.addEventListener("load", clearCookies, false);
}
else if (window.attachEvent)
{
	window.attachEvent("onload", clearCookies);
}
