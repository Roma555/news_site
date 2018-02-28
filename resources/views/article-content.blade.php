@extends('layouts.site')
{{-- цей файл розширбє файл layouts->site.blade.php --}}
@section('content')
    <!-- ======================================= Slider/BigImagine =================================================== -->
    <div class="container">
        <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
            {{--<div class="BigImagineOnArticle">--}}
                {{--<img src="{{asset('img/1.jpg')}}">--}}
            {{--</div>--}}
            <div class="col-md-6 px-0">
        @if($article)
                <h1 class="display-4 font-italic">{!! $article->title !!}</h1>   {{--отримуєм доступ до ячейки title таблиці article--}}
            </div>
        </div>
        <!-- ==================================== END Slider/BigImagine ================================================== -->
        <div><img src="{{asset('img/small') .'/'. $article->news_imagine}}"></div>
        <div><img src="{{asset('img/big') .'/'. $article->news_imagine}}"></div>
        <!-- ============================================= Content ======================================================= -->

        <div class="mb-1 text-muted">Дата публікації: {!! $article->created_at !!}</div>
        <div class="col-10 pt-1">
        <p>Категорія(-ї) новини:
            @foreach($category_of_news as $category_of_new)
                <a class="btn btn-sm btn-outline-secondary" href="{{route('categoryFilter', ['id_cat'=>$category_of_new->id,'slug_cat' =>str_slug($category_of_new->title)])}}">{{ $category_of_new->title}}</a>
            @endforeach
        </p>
        </div>
        <p class="card-text mb-auto">{!! $article->full_description !!}</p> <br><br> {{--те саме що й зверху тыльки !! знымають екранування з тексту--}}
            <div class="col-10 pt-1">

                <p>Тег(-и):
                    <strong class="d-inline-block mb-2 text-primary">
                        @foreach( $tag_of_news as $tag_of_new)
                            <a class="btn btn-danger btn-sm" href="{{route('categoryFilter', ['id_cat'=>$category_of_new->id,'slug_cat' =>str_slug($category_of_new->title)])}}">{{$tag_of_new->title}}</a>
                        @endforeach
                    </strong>
                </p>
            </div>
        @endif
    </div>


    <!-- ========================================== END Content ===================================================== -->
@endsection