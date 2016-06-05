@extends('app', ['title' => $article->title])


@section('content')

<h1>{{ $article->title }}</h1>

<article>
    
    <div class="body">{{ $article->body }}</div>
    
</article>
@unless($article->tags->isEmpty())
    <h5>Tags</h5>
    @foreach($article->tags as $tag)
        <ul>
            <li>
                {{$tag->name}}
            </li>
        </ul>
    @endforeach
@endunless
<div class="container">
    @if(Auth::check()&& (Auth::user()->id == $article->user_id))
    <a href="{{ $article->id }}/edit">Edit</a>
    @endif
</div>


@stop
