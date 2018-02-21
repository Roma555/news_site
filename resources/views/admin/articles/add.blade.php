@extends('layouts.admin')
{{-- цей файл розширбє файл layouts->admin.blade.php --}}
{{-- шаблон контенту админки (кабінету адміністратора)--}}
{{-- Головний шаблон адмінки view->layouts->admin.blade.php--}}
@section('content')
    <!-- ============================================= Content ======================================================= -->

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <h1>Додати Новину</h1>
        <br>
        <form method="post">
            {!! csrf_field() !!}
            <p> Вибір категорії(ій): <br><select name="categories[]" class="form-control" multiple >
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select></p>
            <p> Введіть назву новини: <br><input type="text" name="title" class="form-control" required></p>
            <p> Введіть ім'я авторв: <br><input type="text" name="author" class="form-control" required></p>
            <p> Короткий опис новини: <br><textarea name="short_description" class="form-control"></textarea></p>
            <p> Повний опис новини: <br><textarea name="full_description" class="form-control"></textarea></p>
            <p> Введіть ключові слова: <br><input type="text" name="keywords" class="form-control" required></p>
            <button type="submit" class="btn btn-success" style="cursor: pointer; float: right;">Додати</button>
            <br><br><br>
        </form>
    </main>
    <!-- ========================================== END Content ===================================================== -->
@endsection