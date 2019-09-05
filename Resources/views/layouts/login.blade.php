<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>{{env('APP_NAME')}}</title>
    <!-- Bootstrap core CSS -->
{{--    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">--}}
    <link rel="stylesheet" href="http://estoque.siscompra.xyz/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://estoque.siscompra.xyz/css/style.css">
    <!-- Custom styles for this template -->
    <link href="http://estoque.siscompra.xyz/css/signin.css" rel="stylesheet">


</head>
<body class="text-center">
    <div class="container">
        <img class="mb-1" src="http://estoque.siscompra.xyz/img/logo.png" alt="" width="72" height="72">
        <div style="font-size: 43px">{{env('APP_NAME')}}</div>
        @yield('content')
        <p class="mt-3 mb-1 text-muted">
            &copy; Todos os Direitos Reservados
            {{date('Y')}}
        </p>
        <a href="http://jos3duardo.xyz" target="_blank">Siscompra || Jos3duardo</a>
    </div>

</body>
</html>


