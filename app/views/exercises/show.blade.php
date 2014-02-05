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
					<div class="ui three fields">
						<div class="field">
							<label>First name</label>
							<input type="text" placeholder="First Name">
						</div>
						<div class="field">
							<label>Middle name</label>
							<input type="text" placeholder="Middle Name">
						</div>
						<div class="field">
							<label>Last name</label>
							<input type="text" placeholder="Last Name">
						</div>
					</div>

				</div>
			</div>

		</div>
	</div> <!-- This is where the form ends -->
</div>

@stop
