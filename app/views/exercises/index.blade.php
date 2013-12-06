@extends('master')
@section('content')
<div class="ten wide column">
    <h1>Current Exercises</h1>
    <h3>These are all the exercises in the database, click to edit!</h3>
</div>
<div class="sixteen wide column">
    <a href="{{URL::action('ExercisesController@create')}}" class="ui green button float right">New text exercise</a>
    <table class="ui teal table segment">
        <thead>
            <tr><th>Title</th>
                <th>Statement</th>
                <th class="two wide">Variable Count</th>
                <th class="four wide right floated">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($exercises as $exercise)

            <tr>
                <td>{{ $exercise->title }}</td>
                <td>{{ $exercise->statement }}</td>
                <td>{{ count($exercise->variables) }}</td>
                <td>
                    <div class="ui small buttons">
                        <a href="{{URL::action('ExercisesController@show', $exercise->id);}}"><div class="ui button"><i class="icon pencil"></i> EDIT</div></a>
                        <div class="or"></div>
                        <div class="ui negative button">DELETE <i class="icon trash"></i></div>
                    </div>
                </td>
            </tr>

            @endforeach


        </tbody>
    </table>
</div>
@stop