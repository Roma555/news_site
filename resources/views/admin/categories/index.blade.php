@extends('layouts.admin')
{{-- цей файл розширбє файл layouts->admin.blade.php --}}
{{-- шаблон контенту админки (кабінету адміністратора)--}}
{{-- Головний шаблон адмінки view->layouts->admin.blade.php--}}
@section('content')
    <!-- ============================================= Content ======================================================= -->
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <h1>Список категорій</h1>
        <br>
        <a href="{!! route('categories.add') !!}" class="btn btn-info">Додати категорію новин</a>
        <br><br>
        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>Назва категорії:</th>
                <th>Опис категорії:</th>
                <th>Дата публікації:</th>
                <th>Дія</th>
            </tr>

            @foreach($categories as $category)
                <td>{{$category->id}}</td>
                <td>{{$category->title}}</td>
                <td>{!! $category->description !!}</td>
                <td>{{$category->created_at->format('d-m-Y H:i')}}</td>
                <td><a href="#">Редагувати</a> || <a href="#">Видалити</a></td>
            @endforeach

        </table>
    </main>
    <!-- ========================================== END Content ===================================================== -->
@endsection