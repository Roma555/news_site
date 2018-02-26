@extends('layouts.site')
{{-- цей файл розширбє файл layouts->site.blade.php --}}
@section('content')

<!-- ============================================= Content ======================================================= -->
{{--<div class="container">--}}
<div class="container">
    <div class="row mb-2 ">
    @foreach($articles_cat as $article1_cat)
            {{--{{$article1_cat}}--}}
            @foreach($article1_cat->articles as $article_cat)
            {{--{{$article_cat->articles}}--}}




        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">
                        <a class="btn btn-sm btn-outline-secondary" href="{{route('categoryFilter', ['id_cat'=>$article1_cat->id,'slug_cat' =>str_slug($article1_cat->title)])}}">{{$article1_cat->title}}</a>
                        {{--{{$article1_cat->title}}World--}}
                    </strong>
                    <div class="mb-1 text-muted">{{ $article_cat->author }}</div>
                    <h5 class="mb-0">
                        <a class="text-dark" href="#">{{ $article_cat->title }}</a>
                    </h5>
                    <div class="mb-1 text-muted">{{ $article_cat->created_at->format('d-m-Y H:i') }}</div>
                    <p class="card-text mb-auto">{!! $article_cat->short_description !!}</p>
                    <a href="{{ route('articleShow',['id'=>$article_cat->id,'slug' =>str_slug($article_cat->title)]) }}">Продовжити читати...</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
            </div>
        </div>
            @endforeach
    @endforeach
    </div>
    {{--<div class="text-center">--}}
        {{--<div >--}}
            {{--пагинция для кількостс татей--}}
            {{--{{ $articles_cat->links() }}--}}
        {{--</div>--}}
    </div>
</div>
<!-- ========================================== END Content ===================================================== -->
@endsection