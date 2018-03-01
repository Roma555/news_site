@extends('layouts.admin')
{{-- цей файл розширбє файл layouts->admin.blade.php --}}
{{-- шаблон контенту админки (кабінету адміністратора)--}}
{{-- Головний шаблон адмінки view->layouts->admin.blade.php--}}
@section('content')
    <!-- ============================================= Content ======================================================= -->

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
        <h1>Редагувати Новину</h1>
        <br>
        <form method="post" enctype="multipart/form-data">
            {!! csrf_field() !!}
            <p> Вибір категорії(-ій): <br><select name="categories[]" class="form-control" multiple >
                    @foreach($categories as $category)
                        <option value="{{$category->id}}" @if(in_array($category->id, $arrCategories)) selected @endif>{{$category->title}}</option>
                    @endforeach
                </select></p>
            <p> Введіть назву новини: <br><input type="text" name="title" value="{{$article->title}}" class="form-control" required></p>
            <p> Введіть ім'я авторв: <br><input type="text" name="author" value="{{$article->author}}" class="form-control" required></p>

            <p> Короткий опис новини:
                <br><textarea name="short_description" id="editor1" class="form-control">{!! $article->short_description !!}</textarea></p>
            <p> Повний опис новини:
                <br><textarea name="full_description"  id="editor2" class="form-control">{!! $article->full_description !!}</textarea></p>

            <p> Виберіть забраження новини: <br><input type="file" name="news_imagine" value="{{$article->news_imagine}}" class="form-control" ></p>
            <p><input type="hidden" name="news_imagine" value="Оберіть картинку" class="form-control"></p>

            <p> Введіть ключові слова: <br><input type="text" name="keywords" value="{{$article->keywords}}" class="form-control" required></p>
            <button type="submit" class="btn btn-success" style="cursor: pointer; float: right;">Редагувати</button>


            <p> Вибір тегу(-ів): <br><select name="tags[]" class="form-control" multiple >
                    @foreach($tags as $tag)
                        <option value="{{$tag->id}}" @if(in_array($tag->id, $arrTags)) selected @endif>{{$tag->title}}</option>
                    @endforeach
                </select></p>
            <br><br><br>
        </form>
    </main>
    <!-- ========================================== END Content ===================================================== -->
@endsection