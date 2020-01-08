//Syntax Error example 
function btn1(){
                document.getElementById('myImage').src='Images/AMAZING.svg';
                document.getElementByID('demo').innerHTML="This is to test code";
        }
 function btn2(){
                document.getElementById('myImage').src='Images/WOW.svg';
                document.getElementById('demo').innerHTML="Oh look, it works!";
        }
//Logic Error Examples 
//Not adding
var numbers = [1,4,7,9,12];
var i;
var numSum= 0;
for(i=0;i<numbers.length;i++)
{
    numSum = numbers[i];
} 
document.getElementById('logicError1').innerHTML=numSum;
//Off By One Error
var numSum;
for(i=0;i<numbers.length;i++)
{
    numSum += numbers[i];
} 
document.getElementById('logicError2').innerHTML=numSum;
//numSum still not properly initialized
var numSum;
for(i=0;i<(numbers.length-1);i++)
{
    numSum += numbers[i];
} 
document.getElementById('logicError3').innerHTML=numSum;
// proper Initialization of Num Sum
var numSum= 0;
for(i=0;i<numbers.length;i++)
{
    numSum += numbers[i];
} 
document.getElementById('logicError4').innerHTML=numSum;
//Run-time Errors

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
        while((i < totalCircles)&&(divIterator<15))
    {
                var circle = document.createElement('DIV');
                var node = document.createTextNode("circle "+ (divIterator+1));
                circle.appendChild(node);
                var element = document.getElementById("circleBox");
                element.appendChild(circle);
                document.getElementsByTagName('DIV')[13+divIterator].className = "circle";
		divIterator++;
		document.getElementById('divIterator').value = divIterator;		
                i++ ;
		if (divIterator==14)
		{
			document.getElementById('warningText').innerHTML = "The number of circles cannot be greater than 14";		
		}
    }
		
}


function convertToInteger(divIterator)
{
	var numberLength = divIterator.length;
	var tensPlace = divIterator.length;
	var value = 1;
	var num;
	var trueNum=0;
	var i = 0;
	var j = 0;
	if(((divIterator+1)%10)==0)
	{
		tensPlace--;
	}
	//Iterates through divIterator Value  until = to number length
	while(i<numberLength)
	{
		var numChar = divIterator.charAt(i);
		value = 1;
		switch(numChar)
		{
		case "0":
		 	num = 0;       	
			break;
		case "1":
		 	num = 1;       	
			break;
		case "2":
		 	num = 2;       	
			break;
		case "3":
		 	num = 3;       	
			break;
		case "4":
		 	num = 4;       	
			break;
		case "5":
		 	num = 5;       	
			break;
		case "6":
		 	num = 6;       	
			break;
		case "7":
		 	num = 7;       	
			break;
		case "8":
		 	num = 8;       	
			break;
		case "9":
		 	num = 9;       	
			break;
		}
		while ((j+i)<(tensPlace-1-i))
		{
			value = value *10;
			j++;
			tensPlace--;
		}
		trueNum+= value * num;
		i++;		
	}
	return trueNum;
}

