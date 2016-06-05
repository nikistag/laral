@extends('app', ['title' => 'Pagina de autehtificare'])

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Autentificare</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                    @include('errors.list')

                    @endif
                    {!! Form::open(['url' => '/auth/login', 'class' => 'form-horizontal']) !!}
                    {!! csrf_field() !!}

                    <div class="form-group">
                        {!! Form::label('email', 'E-mail Address:', ['class' => 'col-md-4 control-label']) !!}

                        <div class="col-md-6">
                            {!! Form::text('email', null, ['class' => 'form-control'])!!}

                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('password', 'Password:', ['class' => 'col-md-4 control-label']) !!}

                        <div class="col-md-6">
                            {!! Form::password('password', ['class' => 'form-control'])!!}

                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                                Login
                            </button>
                        </div>

                    </div>
                    {!! Form::close()!!}
                </div>
            </div>
        </div>

    </div>
</div>

@stop