<h2> Ласкаво просимо ,{{\Auth::user()->email}}</h2>
<br>
@if(\Auth::user()->isAdmin ==1)
    <a href="{{ route('admin') }}"> Зайти в адмін панель</a><br>
@endif
    <a href="{{ route('logout') }}"> Вийти з кабінету</a>