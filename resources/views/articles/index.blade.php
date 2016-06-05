@extends('app', ['title' => 'Articole publicate'])


@section('content')

<h1>Aticles</h1>

@foreach($articles as $article)
<article>
    <h2><a href="{{ url ('/articles', $article->id)}}"> {{$article->title}} </a></h2>
    <div class="body">{{$article->body}}</div>
    @if($article->user_id == Auth::user()->id)
    <div class="row">
        <div class="col-md-2">
            <a href="articles/{{$article->id}}/edit"><?php echo Form::submit('Edit', ['class' => 'btn btn-primary']); ?></a>
        </div>


        <div class="col-md-2">
            <a href="articles/{{$article->id}}/destroy"><?php echo Form::submit('Delete', ['class' => 'btn btn-primary']); ?></a>
        </div>  

    </div> 
    @endif


</article>
@endforeach
@stop