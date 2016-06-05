@extends('app', ['title' => 'Creare articol nou'])

@section('content')

<h1>Write a new article</h1>

<hr />

{!! Form::open(['url' => 'articles'])!!}

@include('articles._form', ['submitBtnText' => 'Add article'])

{!! Form::close()!!}

@include('errors.list')

@stop
