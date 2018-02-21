<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <title>Login</title>

    <!-- Alertify core CSS -->
    {{--<link href="{{ asset('css/alertify.css') }}" rel="stylesheet">--}}

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/signin.css') }}" rel="stylesheet">
</head>

<body class="text-center">

<form class="form-signin" method="POST">
    {!! csrf_field() !!}
    <img class="mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">

    <h1 class="h3 mb-3 font-weight-normal">Please Login</h1>

    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>

    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>

    <div class="checkbox mb-3">
        <label>
            <input type="checkbox" name="remember" value="1"> Remember me
        </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">LogIn</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
</form>


{{--<script src="{{ asset('js/alertify.js') }}"></script>--}}
<script src="https://cdn.rawgit.com/alertifyjs/alertify.js/v1.0.10/dist/js/alertify.js"></script>
@include('inc.messages')
</body>
</html>