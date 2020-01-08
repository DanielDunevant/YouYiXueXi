
var app = angular.module('hide-Unhide',[]);

app.controller('lessonCtrl',function($scope){
	$scope.lessons = [
		{name:'Verification',description:'Learn how to verify the page has loaded.',link:'verify',hideStatus:'none' },
		{name:'Debugging',description:'Learn about various debugging techniques and how to use them.',link:'debugging',hideStatus:'none' },
		{name:'Working with DOM',description:'Learn how to manipulate DOM objects in various ways.',link:'domManipulation',hideStatus:'none' },
		{name:'Forms',description:'Learn how to  work with forms as well as how to verify information within them.',link:'forms',hideStatus:'none' },
		{name:'Form Game',description:'Learn about what  fun things forms  can be  used for.',link:'formGame',hideStatus:'none' },
		{name:'Gallery',description:'Learn about  how to make a photo gallery.',link:'gallery',hideStatus:'none' },
		{name:'Classes and Objects',description:'Learn about classes.',link:'objects',hideStatus:'none' },
		{name:'Timing',description:'Learn  how to use time in your webpages for  various things.',link:'timing',hideStatus:'none' },
		{name:'Living Webpage',description:'Learn how to make a very interactive page.',link:'livingWebpage',hideStatus:'none' }
	];
	$scope.hideUnhide = function(index){
		if($scope.lessons[index].hideStatus== 'none'){
			$scope.lessons[index].hideStatus= 'block';
		}else
		{
			$scope.lessons[index].hideStatus= 'none';
		}
		
	}
	
});
