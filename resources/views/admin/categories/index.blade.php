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
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->title}}</td>
                    <td>{!! $category->description !!}</td>
                    <td>{{$category->created_at->format('d-m-Y H:i')}}</td>
                    <td><a href="{!! route('categories.edit',['id' => $category->id]) !!}">Редагувати</a>/
                        <a href="javascript:;" class="delete" rel="{{$category->id}}">Видалити</a></td>
                </tr>
            @endforeach

        </table>
    </main>
    <!-- ========================================== END Content ===================================================== -->
@endsection
@section('js')
    <script>
        $(function(){
            $(".delete").on('click', function () {
                if(confirm("Ви впевнені що хочете видалити запис?")) {
                    let id = $(this).attr("rel");
                    $.ajax({
                        type: "DELETE",
                        url: "{!! route('categories.delete') !!}",
                        data: {_token:"{{csrf_token()}}", id:id},
                        complete: function() {
                            alert("Категорія новин видалена!");
                            location.reload();
                        }
                    });
                }else{
                    alertify.error("Подія відмінена користувачем");
                }
            });
        });
    </script>
@endsection
