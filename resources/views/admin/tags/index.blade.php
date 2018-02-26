@extends('layouts.admin')
{{-- цей файл розширбє файл layouts->admin.blade.php --}}
{{-- шаблон контенту админки (кабінету адміністратора)--}}
{{-- Головний шаблон адмінки view->layouts->admin.blade.php--}}
@section('content')
    <!-- ============================================= Content ======================================================= -->
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <h1>Список Тегів</h1>
        <br>
        <a href="{!! route('tags.add') !!}" class="btn btn-info">Додати тег</a>
        <br><br>
        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>Назва тегу:</th>
                <th>Опис тегу:</th>
                <th>Дата публікації:</th>
                <th>Дія</th>
            </tr>

            @foreach($tags as $tag)
                <tr>
                    <td>{{$tag->id}}</td>
                    <td>{{$tag->title}}</td>
                    <td>{!! $tag->description !!}</td>
                    <td>{{$tag->created_at->format('d-m-Y H:i')}}</td>
                    <td><a href="{!! route('tags.edit',['id' => $tag->id]) !!}">Редагувати</a>/
                        <a href="javascript:;" class="delete" rel="{{$tag->id}}">Видалити</a></td>
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
                if(confirm("Ви впевнені що хочете видалити тег?")) {
                    let id = $(this).attr("rel");
                    $.ajax({
                        type: "DELETE",
                        url: "{!! route('tags.delete') !!}",
                        data: {_token:"{{csrf_token()}}", id:id},
                        complete: function() {
                            alert("Тег видалено!");
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
