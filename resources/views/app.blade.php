<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        {!! Html::style('public/css/all.css') !!}
        {!! Html::script('public/js/all.js') !!}

        



        <title>{!! $title !!}</title>
    </head>

    <body>
        <div class="container">

            @include('partials/header') 

        </div>
        <div class="container">
            @include('flash::message')

            @yield('content')
        </div>

        <div class="container">    
            @include('partials/footer')
        </div>
        <script>
            $('#flash-overlay-modal').modal();
            //$('div.alert').not('.alert-important').delay(3000).slideUp(300);
        </script>
    </body>
</html>