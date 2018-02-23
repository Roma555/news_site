<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <title>Registration</title>

    <!-- Alertify core CSS -->
    {{--<link href="{{ asset('css/alertify.css') }}" rel="stylesheet">--}}

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/signin.css') }}" rel="stylesheet">
</head>

<body class="text-center">
<div class="row">
{{--================================================================================================================--}}
<form class="form-signin" method="POST">
    {!! csrf_field() !!}
    <img class="mb-4" src="{{ asset('img/logo_register_or_login.jpg') }}" alt="" width="120" height="120">

    <h1 class="h3 mb-3 font-weight-normal">Реєстрація</h1>

    <label for="inputEmail" class="sr-only">Введіть e-mail</label>
    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Введіть e-mail" required autofocus>

    <label for="inputPassword" class="sr-only">Введіть пароль</label>
    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Введіть пароль" required>

    <label for="inputPassword" class="sr-only">Підтвердіть пароль</label>
    <input type="password" id="inputPassword" name="password_confirmation" class="form-control" placeholder="Підтвердіть пароль" required>

    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" name="remember" value="1"> Одразу ввійти у профіль
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Зареєструватися</button>
</form>
{{--================================================================================================================--}}
<div class="form-signin">
    <form  method="LINK" action="{{ 'login'}}">Ви вже зареєстровані?
        {{--<input type="submit" value="Увійти" class="btn btn-sm btn-outline-secondary">--}}
        <a class="text-primary"  href="{{ 'login'}}">Увійти</a>
    </form>
</div>
{{--================================================================================================================--}}
</div>
{{--<script src="{{ asset('js/alertify.js') }}"></script>--}}
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/alertify.min.js"></script>
@include('inc.messages')
</body>
</html>