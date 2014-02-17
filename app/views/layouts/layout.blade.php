<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gestio de material i factures</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
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
</html>