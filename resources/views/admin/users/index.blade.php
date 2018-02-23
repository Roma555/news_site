@extends('layouts.admin')
{{-- цей файл розширбє файл layouts->admin.blade.php --}}
{{-- шаблон контенту админки (кабінету адміністратора)--}}
{{-- Головний шаблон адмінки view->layouts->admin.blade.php--}}
@section('content')
    <!-- ============================================= Content ======================================================= -->
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <h1>Список Користувачів</h1>
        <br>
        {{--<a href="{!! route('users.add') !!}" class="btn btn-info">Додати новину</a>--}}
        {{--<br><br>--}}
        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>E-mail:</th>
                <th>Посада:</th>
                <th>Дата реєстрації:</th>
                {{--<th>Дія</th>--}}
            </tr>

            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->email}}</td>
                    <td>@if($user->isAdmin) Адміністратор @else Користувач @endif</td>
                    <td>{{$user->created_at->format('d-m-Y H:i')}}</td>
                    {{--<td><a href="{!! route('users.edit',['id' => $user->id]) !!}">Редагувати</a>/--}}
                        {{--<a href="javascript:;" class="delete" rel="{{$user->id}}">Видалити</a></td>--}}
                </tr>
            @endforeach

        </table>
    </main>
    <!-- ========================================== END Content ===================================================== -->
@endsection
{{--@section('js')--}}
    {{--<script>--}}
        {{--$(function(){--}}
            {{--$(".delete").on('click', function () {--}}
                {{--if(confirm("Ви впевнені що хочете видалити запис?")) {--}}
                    {{--let id = $(this).attr("rel");--}}
                    {{--$.ajax({--}}
                        {{--type: "DELETE",--}}
                        {{--url: "{!! route('articles.delete') !!}",--}}
                        {{--data: {_token:"{{csrf_token()}}", id:id},--}}
                        {{--complete: function() {--}}
                            {{--alert("Новина видалена!");--}}
                            {{--location.reload();--}}
                        {{--}--}}
                    {{--});--}}
                {{--}else{--}}
                    {{--alertify.error("Подія відмінена користувачем");--}}
                {{--}--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}
{{--@endsection--}}
