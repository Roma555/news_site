@extends('layouts.account')
{{-- цей файл розширбє файл layouts->account.blade.php --}}
@section('content')

<h2> Ласкаво просимо, {{\Auth::user()->email}}</h2>
<br>
@if(\Auth::user()->isAdmin ==1)
    <a class="btn btn-sm btn-outline-secondary" href="{{ route('admin') }}"> Зайти в адмін панель</a><br>
@endif
    <a class="btn btn-sm btn-outline-secondary" href="{{ route('logout') }}"> Вийти з кабінету</a>
@endsection