@extends('master')
@section('content')
<table class="ui teal table segment">
    <thead>
        <tr><th>Title</th>
            <th>Statement</th>
            <th class="two wide">Variable Count</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($exercises as $exercise)
        <tr>
            <td>{{ $exercise->title }}</td>
            <td>{{ $exercise->statement }}</td>
            <td>{{ count($exercise->variables) }}</td>
        </tr>
        @endforeach
        

    </tbody>
</table>
@stop