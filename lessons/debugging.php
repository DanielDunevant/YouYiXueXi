<h1>一Basic Javascripting + Debug </h1>
<h2>An intro to debugging</h2>
<p> Basically things go wrong  in your code sometimes. There are a
few ways to describe this: 
	<ul>
	<li>Logic - These occur when the code you write executes, but doesn't accomplish what you would have hoped it to accomplish.</li>
	<li>Syntax - This is basically a mispelling of a word within the programming language you are using.</li>
	<li>Runtime - These errors occur while your program is running due to some unforeseen interaction in your code.</li>  
	</ul>
I hardly need to tell you that these types of things happen in your code if you have been
 working with any programming language for any period of time. In other words we all run into errors. However  the way in which  we go about  fixing these errors is important. 
 </p>
<h2>I have errors! How do I fix them?</h2>
<p>Okay so you have some errors and you want to know how you should fix them. Let's take 
this code as an example.</p>
<img src='' />


<h2>Basic Javascripting</h2>
<p>As you can  see there are  many types of errors. The context of which you may not 
fully understand within the context of  JavaScript programming. Before we get into that
"context" I think it is important  for you to understand  where  JavaScript fits into
the  larger scheme  of  programming languages. 
 </p>
<p>What is  JavaScript?. JavaScript is a <strong>client-side</strong> processed language which  means it runs locally on your browser. Meaning once the page  is loaded all of its code will function 
properly. PHP is a counter example as a <strong>server-side</strong> processed lanaguage and would not
 function properly without connection. If, for example a call to a database is made, then it
would not be able to fufill that request. </p>
<p>So now you know that  this JavaScript runs locally in your browser. How does it achieve
 this? The best way to understand how it does this is to just jump into the code. </p>
<h3>HTML code</h3>
<pre>
<xmp>
 <p id="demo">Look at how it switches the images when you press the buttons!</p>
        <button onclick="btn1()">Mystery Button # 1</button>
        <img id="myImage" src="Images/Meh.svg" style="width:100px">

        <button onclick="btn2()">Mystery Button # 2</button>

        <script src="javaScript/basicJavascripts.js">
        </script>
</xmp>
</pre>
<h3>JavaScript code</h3>
<pre><xmp>
 function btn1(){
                document.getElementById('myImage').src='Images/AMAZING.svg';
                document.getElementByID('demo').innerHTML="This is to test code";
        }
 function btn2(){
                document.getElementById('myImage').src='Images/WOW.svg';
                document.getElementById('demo').innerHTML="Oh look, it works!";
        }

</xmp></pre>
<h3>What it looks like!</h3>
 <p id="demo">Look at how it switches the images when you press the buttons!</p>
        <button onclick="btn1()">Mystery Button # 1</button>
        <img id="myImage" src="Images/Meh.svg" style="width:100px">

        <button onclick="btn2()">Mystery Button # 2</button>

        <script src="javaScript/basicJavaScripts.js">
        </script>
<h3>Post Analysis</h3>
<p>Did you happen to notice anything unexpected in the results of the code? You may have 
noticed a small difference in the first function btn1. When I use the getElementById I
 instead use ...ID this causes what is called a <strong>syntax error</strong>. As stated previously, this
is basically a spelling error in the programming language. Let's look at another example...   </p>

<p>For this next exampleI want to  take a look at logic errors. A  logic  error yields 
a result that you don't  explect. A  common  logic error is the  off  by one error  
cause  by a for loop. In the  following example the code is  supposed to cause the 
program to  output the sum of all numbers in an array.</p>

<pre><xmp>
var numbers = [1,4,7,9,12];
var i;
var numSum;
for(i=0;i<numbers.length;i++)
{
    numSum = numbers[i];
} 
document.getElementById("logicError1").innerHTML=numSum;
</xmp></pre>
<p>Should see output right below here...</p>
<p id = "logicError1"></p>

<p>Wow! That was not the result I was expecting! Looking at the output  obviously I did 
something  wrong. Instead of adding all the  numbers in the  array I merely reset the value 
of sumNum to the element in the array at each iteration. Since the last  value in the array
is 12 then 12 is outputted. </p>

<pre><xmp>
var numbers = [1,4,7,9,12];
var i;
var numSum;
for(i=0;i<numbers.length;i++)
{
    numSum += numbers[i];
} 
document.getElementById("logicError2").innerHTML=numSum;
</xmp></pre>
<p>Should see output right below here...</p>
<p id = "logicError2"></p>

<p>Here ladies and gentlemen is the error that I accidently invoked in trying to make it 
work. This error is the so called off by one error. How can you tell? When add the array
numbers by hand(or calculator) one finds that the  result is 33 not 45. What is 33 then? From
what I can tell it appears to be going to the end of the array and then adding an extra
12. Below you can see the code when properly written. By the way, It isn't necessary to
initialize these  variable every time if they are  in the  same  file. I simply do this
for  clarity. All except for the numSum variable. If that isn't reinitialized then
it is adding from where it was previously set. Which in this case  would have been 
45. </p>


<pre><xmp>
var numbers = [1,4,7,9,12];
var i;
var numSum;
for(i=0;i<(numbers.length-1);i++)
{
    numSum += numbers[i];
} 
document.getElementById("logicError3").innerHTML=numSum;
</xmp></pre>
<p>Should see output right below here...</p>
<p id = "logicError3"></p>
<p>AHHHhh this whole time that was causing the off by one error. This is why I had to
adjust the numbers.length function to subtract 1! This is where the 12 comes from... 
This is also where the extra 33 comes from in this example. Hopefully through this lesson
you are learning something. I know I am!  
  </p>

<pre><xmp>
var numbers = [1,4,7,9,12];
var i;
var numSum = 0;
for(i=0;i<numbers.length;i++)
{
    numSum += numbers[i];
} 
document.getElementById("logicError4").innerHTML=numSum;
</xmp></pre>
<p>Should see output right below here...</p>
<p id = "logicError4"></p>

<p>Now that we have thoroughly explored logic errors let's take a look at  runtime 
errors. These are really an offshoot of logic errors that simply occur when a process
is executed. A very common example of a runtime error is an infinite loop. This 
occurs when a condition in a control statement is never met. </p>
<p>Enter the number of circles you would like to add and then press the "More Circles" 
button.</p>
<input id ="input1" type="number"/> 
<button onclick = "makeFunction()">More Circles</button>
<div class ="circle invisible">circle 1</div>
<input type = "number" class="invisible" id = "divIterator" value = "0" />
<h2>Circle Box!</h2>
<p id ="warningText"></p>
<div id ="circleBox"></div>
<pre><xmp>
	//HTML Code
	<input id ="input1"/> 
	<button onclick = "makeFunction()">More Circles</button>
	<p id ="warningText"></p>
	<div id ="circleBox"></div>
	//JavaScript Code
function makeFunction()
{
        var totalCircles= document.getElementById('input1').value;
        var divIterator = document.getElementById('divIterator').value;
        console.log("MakeFunction() value of divIterator" + divIterator);
        var i  = 0;
        if (divIterator!="0" )
        {
        divIterator = convertToInteger(divIterator);
        }else
        {
        divIterator = 0;
        }
        while((i < totalCircles)&&(divIterator<14))
    {
                var circle = document.createElement('DIV');
                var node = document.createTextNode("circle "+ (divIterator+1));
                circle.appendChild(node);
                var element = document.getElementById("circleBox");
                element.appendChild(circle);
                document.getElementsByTagName('DIV')[8+divIterator].className = "circle";
                divIterator++;
                document.getElementById('divIterator').value = divIterator;
                i++ ;
                if (divIterator==14)
                {
                        document.getElementById('warningText').value = "The number of circlescannot be greater than 14";
                }
    }

}
 
</xmp></pre>
<p>Now this particular javascript is something that  one can run into a great deal of
 runtime errors with.  It must manage a great deal of information. First it takes in
input from input1. After this a sort of global variable is set called divIterator. 
I make this variable by tossing its value to an invisible input and then referencing it 
when I need it for the next function call. Why do I need something called the 
divIterator? Well since we are generating these elements completely from javascript
in order to set the class of a particular blank element we must target it in
order of appearance given the element type. For example I wanted to change the  class
of the eigth div. At the next iteration I would want to not change the same div! 
This is the necessity of the  divIterator. The iteration of divIterator is within
a while statement. If I were to change the  condition to while ((2+2)==4) then it would 
iterate forever. One last thing that I had to take into account was that when taking 
from inputs (even if they are of the number type) one still must convert them to an integer
value. This is why you see the if statement before the while statement that leads to the 
function convertToInteger(divIterator). I noticed a runtime error while  working with this.
When return value for the function was higher than it should be it caused the class to 
not be properly applied. The reason for this is that there are no divs that follow the circle
divs. Therefore it is attempting to reference an element that doesn't exsist. Hopefully 
these lessons you can learn from. Next lesson we take a look at dropdown and selection 
structures. From here on I will be using AngularJS as a comparison in my examples. </p>
<script src="javaScript/debuggingScripts.js">
</script>
