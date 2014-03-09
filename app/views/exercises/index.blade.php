@extends('master')
@section('banner')
  <div class="ui inverted page grid masthead segment">
	<div class="column">
	  <div class="ui hidden transition information">
		<h1 class="ui inverted header">
		  Open Genghis
		</h1>
		<p>A Laravel/AngularJS/Semantic UI open source version of Genghis.</p>

	  </div>
	</div>
  </div>
	@stop
@section('content')
<div class="ten wide column">
	<h1>Current Exercises</h1>
	<h3>These are all the exercises in the database, click to edit!</h3>
</div>
<div class="sixteen wide column">

	<a href="{{URL::action('ExercisesController@create')}}" class="ui green button float right">New text exercise</a>
	<table ng-controller="TestController" class="ui teal table segment">
		<thead>
			<tr><th>Title</th>
				<th>Statement</th>
				<th class="two wide">Variable Count</th>
				<th class="four wide right floated">Actions</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($exercises as $exercise)

			<tr ng-hide="hiddenElements[{{$exercise->id}}]">
				<td>{{ $exercise->title }}</td>
				<td>{{ $exercise->statement }}</td>
				<td>{{ count($exercise->variables) }}</td>
				<td>
					<div class="ui small buttons">
						<a href="{{URL::action('ExercisesController@show', $exercise->id);}}"><div class="ui button"><i class="icon pencil"></i> EDIT</div></a>
						<div class="or"></div>
						<div class="ui negative button" id="{{$exercise->id}}"  ng-hide="hiddenElements[{{$exercise->id}}]" ng-click="myData.doClick({{$exercise->id}}, $event)">DELETE <i class="icon trash"></i></div>
					</div>
				</td>
			</tr>

			@endforeach


		</tbody>
	</table>

	<script>
		angular.module("myapp", [])
       			 .controller("TestController", function($scope, $http) {
       			 	$scope.hiddenElements = {};
		            	$scope.myData = {};
		            	$scope.myData.doClick = function(item, event) {
			                	var responsePromise = $http.delete("exercises/"+item);

			                	responsePromise.success(function(data, status, headers, config) {
			                    		$scope.myData.fromServer = "Deleted exercise with id "+item;
			                    		$scope.hiddenElements[item] = true;
			                    		console.log($scope.hiddenElements);
			                	});
			                	responsePromise.error(function(data, status, headers, config) {
			                    		console.log("Couldn't delete exercise "+ item);
			                	});
			            }
			} );
	</script>
</div>
@stop
