<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gestio de material i factures</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <script src="{{ asset('js/jquery-2.1.0.min.js') }}"></script>
    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>-->
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <a href="{{ action('ArticlesController@index') }}" class="navbar-brand">Gestió de material i factures</a>
            </div>
        </nav>
        <div class="panel panel-default">
            <div class="panel-body">
                <a href="{{ action('ArticlesController@index') }}">Llista material</a> |
                <a href="{{ action('FacturesController@index') }}">Llista factures</a> |
                <a href="{{ action('ProveidorsController@index') }}">Llista proveïdors</a>
            </div>
        </div>
        @yield('content')
    </div>
</body>

<!-- Jquery Checking -->
<script type='text/javascript'>
    $('form').submit(function()
    {
        if( $('input.required').val().length == 0 ) {
            var currentInput = $("input.required",this);
            alert('Has deixat camps buits');
            currentInput.addClass('highlight');
            return false;
        }
    }); 
</script>
</html>