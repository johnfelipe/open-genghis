@extends('master')
@section('content')
<div class="sixteen wide column">
	<h1>Exercise {{$exercise->id}} @{{ngExerciseTitle}}</h1>
	<div class="ten wide ui teal inverted segment">
		<p>Remember everything will autosave every few seconds.</p>
	</div>
	<div class="ui form">
		<div class="ui grid">

			<div class="eight wide column">
				<div class="ui segment">
					<div class="field">
						<label>Title</label>
						<input type="text" ng-model="ngExerciseTitle" ng-init="ngExerciseTitle='{{$exercise->title}}'" name="title" placeholder="Write a new title for your exercise!" value="{{$exercise->title}}">
					</div>

					<div class="field">
						<label>Statement</label>
						<textarea class="tinymce">{{$exercise->statement}}</textarea>
					</div>

					<div class="field">
						<label>Solution</label>
						<textarea class="tinymce_solution">{{$exercise->solution}}</textarea>
					</div>
				</div>
			</div>

			<div class="eight wide column">
				<div class="ui segment">
					<h2>Variables</h2>
					@foreach ($exercise->Variables as $variable)
						<div ng-controller="VariableController" ng-hide="hiddenElements[{{$exercise->id}}]" class="ui five fields">
							<div class="field">
								<input type="text" placeholder="Name" value="{{$variable->name}}">
							</div>
							<div class="field">
								<input type="number" placeholder="Minimun" value="{{$variable->min}}">
							</div>
							<div class="field">
								<input type="number" placeholder="Maximun" value="{{$variable->max}}">
							</div>
							<div class="field">
								<input type="number" placeholder="Step" value="{{$variable->step}}">
							</div>
							<div class="ui negative " id="{{$exercise->id}}"  ng-hide="hiddenElements[{{$exercise->id}}]" ng-click="myData.doClick({{$exercise->id}}, $event)"><i class="icon trash"></i></div>
						</div>
					@endforeach
				</div>
			</div>

		</div>
	</div> <!-- This is where the form ends -->
	<script>
		angular.module("myapp", [])
       			 .controller("VariableController", function($scope, $http) {
       			 	$scope.hiddenElements = {};
		            	$scope.myData = {};
		            	$scope.myData.doClick = function(item, event) {
			                	var responsePromise = $http.post(item, $.param({
			                		'_method':'put',
			                		'test':'item'
			                	})
			                	,{headers : { 'Content-Type': 'application/x-www-form-urlencoded' }}
			                	);

			                	responsePromise.success(function(data, status, headers, config) {
			                    		$scope.myData.fromServer = "Queried to update variables to id "+item;
			                    		$scope.hiddenElements[item] = true;
			                    		console.log($scope.hiddenElements);
			                	});
			                	responsePromise.error(function(data, status, headers, config) {
			                    		console.log("Couldn't query exercise "+ item);
			                	});
			            }
			} );
	</script>
</div>

@stop
