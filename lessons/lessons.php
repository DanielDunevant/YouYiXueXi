<div   ng-app="hide-Unhide" ng-controller ="lessonCtrl" >
	<div class = "row" ng-repeat = "x in lessons">
				<h2 ng-click ="hideUnhide($index)">{{x.name}}</h2>
			<div class = "col-md-6 " >
				<p style ="display:{{x.hideStatus}}" class="description">
				{{x.description}}
				</p>
			</div>
			<div class = "col-md-4" style ="display:{{x.hideStatus}}">
				<a ng-href="index.php?page={{x.link}}"><button  >开始！</button></a>
			</div>
	</div>
</div>
<script src="javaScript/lessonShow.js" >
</script>
