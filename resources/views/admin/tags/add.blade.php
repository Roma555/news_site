@extends('layouts.admin')
{{-- цей файл розширбє файл layouts->admin.blade.php --}}
{{-- шаблон контенту админки (кабінету адміністратора)--}}
{{-- Головний шаблон адмінки view->layouts->admin.blade.php--}}
@section('content')
<!-- ============================================= Content ======================================================= -->
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
   <h1>Додати Тег</h1>
    <br>
    <form method="post">
        {!! csrf_field() !!}
        <p> Введіть назву тегу: <br><input type="text" name="title" class="form-control" required></p>
        <p> Опис тегу: <br><textarea name="description" class="form-control"></textarea></p>
    <button type="submit" class="btn btn-success" style="cursor: pointer; float: right;">Додати</button>
    </form>
</main>
<!-- ========================================== END Content ===================================================== -->
@endsection