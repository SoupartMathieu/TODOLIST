<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('titre')</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    {!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css') !!}
		{!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css') !!}

    <style> textarea { resize: none; }
        .PAlert
        {
            background: none;
        }

    </style>

</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Menu</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li> <!--class="active" --> <a href={{URL::to('/')}}>Ajouter <span class="sr-only">(current)</span></a></li>
                <li><a href={{URL::to('/list')}}>Voir mes taches</a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Sign in</a></li>

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
@if(Session::has('flash_message'))
    <div class="alert alert-success" role="alert">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        {{Session::get('flash_message')}}
    </div>
@endif
@yield('contenu')
</body>
</html>