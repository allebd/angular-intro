<!DOCTYPE html>
<html>
	<script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
	<body>

	<div ng-app="">
	 
	<p>Input something in the input box:</p>
	<p>Name : <input type="text" ng-model="name" placeholder="Enter name here"></p>
	<h1>Hello {{name}}</h1>

	</div>

	</body>
</html>
