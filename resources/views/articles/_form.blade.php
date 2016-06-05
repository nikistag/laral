
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}

    {!! Form::text('title', null, ['class' => 'form-control']) !!}
    
</div>



<div class="form-group">
    {!! Form::label('body', 'Body:') !!}

    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<!-- Form input -->

<div class="form-group">
    {!! Form::label('published_at', 'Published On:') !!}

    {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
</div> 

<div class="form-group">
    {!! Form::label('tags', 'Tags:') !!}
    @if(isset($ownTags))
    {!! Form::select('tags[]', $allTags, $ownTags, ['id' => 'tags', 'class' => 'form-control', 'multiple' => 'multiple']) !!}
    @else
    {!! Form::select('tags[]', $allTags, null, ['id' => 'tags', 'class' => 'form-control', 'multiple' => 'multiple']) !!}
    @endif
</div>
<!-- Submit form -->

<div class="form-group">

    {!!Form::submit($submitBtnText, ['class' => 'btn btn-primary form-control'])!!}

</div>

@section('footer')
<script>
$('#tags').select2({
    placeholder : 'Choose a tag!'
});
</script>
    

@endsection