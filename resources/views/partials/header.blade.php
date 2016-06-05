<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Blog</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo url('/'); ?>">Home</a></li>
                <li><a href="<?php echo url('articles'); ?>">Articles</a></li>
                <li><a href="<?php echo url('auth/login'); ?>">Login</a></li>
                <li><a href="<?php echo url('auth/logout'); ?>">Logout</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                
                    @if(Auth::check())


                    <li style='color:white;'>You are logged in as:<strong><?php echo Auth::user()->username; ?> </strong> </li> 
                    <li>

                        <a href="auth/logout"><?php echo Form::submit('Logout', ['class' => 'btn btn-primary']); ?></a>
                    </li>


                    @else 
                    <li style='color:white;'>
                        You are not logged in.
                    </li>
                    <li>
                        <a href="auth/login"><?php echo Form::submit('Login', ['class' => 'btn btn-primary']); ?></a>
                    </li>
                    <li>
                        <a href="auth/register"><?php echo Form::submit('Register', ['class' => 'btn btn-primary']); ?></a>
                    </li>
                            
                       

                    @endif
             
            </ul>
        </div>
    </div>
</nav>  


<!--
<div class="container-fluid">

    <div class="col-md-4">
        <h3>My Project</h3>
    </div>  

    <div class="col-md-4">
        <h4>Detailes of project</h4>
    </div>  

    <div class="col-md-4">
        @if(Auth::check())


        You are logged in as:<strong><?php echo Auth::user()->username; ?> </strong> <br/>
        <div class="col-md-4 col-md-offset-2">

            <a href="auth/logout"><?php echo Form::submit('Logout', ['class' => 'btn btn-primary']); ?></a>
        </div>


        @else 
        <div class="container">
            You are not logged in.<br/>
        </div>
        <div class="row">
            <div class="col-md-2">
                <a href="auth/login"><?php echo Form::submit('Login', ['class' => 'btn btn-primary']); ?></a>
            </div>


            <div class="col-md-2">
                <a href="auth/register"><?php echo Form::submit('Register', ['class' => 'btn btn-primary']); ?></a>
            </div>  

        </div>   

        @endif
    </div>  

</div>
-->
