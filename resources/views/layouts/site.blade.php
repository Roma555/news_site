<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Roma Iliushyk">
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <title>News Site</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
</head>

<body>
<!-- ======================================== Header ============================================================ -->
<div class="container">
    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            {{--<div class="col-4 pt-1">--}}
                {{--<a class="text-muted" href="#">Підписатися</a>                        <!-- підписатися -->--}}
            {{--</div>--}}
            <div class="col-4 pt-1">
                @if(Auth::check())
                    <a class="btn btn-sm btn-outline-secondary" href="{{asset('/my/account')}}">Перейти в кабінет</a>
                @else
                <a class="btn btn-sm btn-outline-secondary" href="#">Підписатися</a>      <!-- підписатися -->
                @endif
            </div>
            <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="#">RomaNews</a>               <!-- Name of News Portall -->
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <a class="text-muted" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
                </a>

                @if(Auth::check())
                    <a class="btn btn-sm btn-outline-secondary" href="{{asset('logout')}}">Вийти</a>
                    {{--<h2> Ласкаво просимо ,{{\Auth::user()->email}}</h2>--}}
                @else
                    <a class="btn btn-sm btn-outline-secondary" href="{{asset('login')}}">Ввійти</a>
                @endif
            </div>
        </div>
    </header>
</div>
<!-- ===================================== END Header ============================================================ -->

<!-- ========================================= Navbar ============================================================ -->
<div class="container">
    <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-between">
            <a class="p-2 text-muted" href="#">Політика</a>
            <a class="p-2 text-muted" href="#">Економіка</a>
            <a class="p-2 text-muted" href="#">Мистецтво</a>
            <a class="p-2 text-muted" href="#">Спорт</a>
            <a class="p-2 text-muted" href="#">Культура</a>
            <a class="p-2 text-muted" href="#">Бізнес</a>
            <a class="p-2 text-muted" href="#">Наука</a>
            <a class="p-2 text-muted" href="#">Здоров'я</a>
            <a class="p-2 text-muted" href="#">Відпочинок</a>
            <a class="p-2 text-muted" href="#">Комп'ютер</a>
            <a class="p-2 text-muted" href="#">Злочини</a>
            <a class="p-2 text-muted" href="#">Погода</a>
        </nav>
    </div>
</div>
<!-- ======================================= END Navbar ========================================================== -->

@yield('content')


<!-- ============================================= Footer ======================================================= -->
<footer class="blog-footer">
    <p>Це новиний сайт,що містить дуже багато цінної інформації </p>
    <p>Розробленик: <a class="text-primary" href="https://www.google.com/">Ілюшик Рома</a>
    <br>Контактнй телефон: <cite class="text-primary" >+380 (665) 1555 32</cite></p>
    <p>
        <a class="text-danger" href="{{asset('/')}}">Back to top</a>
    </p>
</footer>
<!-- =========================================== END Foter ====================================================== -->


<!-- ============================================================================================================ -->
<!-- -------------------------                Bootstrap core JavaScript               --------------------------- -->
<!-- ============================================================================================================ -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/holder.min.js') }}"></script>

<script>
    Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
    });
</script>
</body>
</html>
