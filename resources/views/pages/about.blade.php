
@extends('app')

@section('content')

<h1> People I like</h1>
<ul>
@foreach ($people as $person)
	<li>{{ $person }}</li>
@endforeach
</ul>
@stop
