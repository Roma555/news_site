@extends('layouts.admin')
{{-- цей файл розширбє файл layouts->admin.blade.php --}}
{{-- шаблон контенту админки (кабінету адміністратора)--}}
{{-- Головний шаблон адмінки view->layouts->admin.blade.php--}}
@section('content')
    <!-- ============================================= Content ======================================================= -->
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <h1>Список Новин</h1>
        <br>
        <a href="{!! route('articles.add') !!}" class="btn btn-info">Додати новину</a>
        <br><br>
        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>Назва новини:</th>
                <th>Автор новини:</th>
                <th>Дата публікації:</th>
                <th>Дія</th>
            </tr>

            @foreach($articles as $article)
                <tr>
                    <td>{{$article->id}}</td>
                    <td>{{$article->title}}</td>
                    <td>{!! $article->author !!}</td>
                    <td>{{$article->created_at->format('d-m-Y H:i')}}</td>
                    <td><a href="{!! route('articles.edit',['id' => $article->id]) !!}">Редагувати</a>/
                        <a href="javascript:;" class="delete" rel="{{$article->id}}">Видалити</a></td>
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
                        url: "{!! route('articles.delete') !!}",
                        data: {_token:"{{csrf_token()}}", id:id},
                        complete: function() {
                            alert("Новина видалена!");
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
