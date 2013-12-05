@extends('master')
@section('content')
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
@stop