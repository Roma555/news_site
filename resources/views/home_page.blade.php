@extends('layouts.site')
{{-- цей файл розширбє файл layouts->site.blade.php --}}
@section('content')
<!-- ======================================= Slider/BigImagine =================================================== -->


<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2000">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <!-- ======================================================================================================= -->
        <div class="carousel-inner">

            <div class="carousel-item active">
                <!-- *********************************************************************************************** -->
                <div class="row">
                    <div class="col-md-8">
                        <div class="big-imagine">
                            <a href="http://www.google.com">
                                <img class="d-block-bg w-100" src="img/1.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block carousel_caption_bgimg">
                                    <div class="cat_of_news_bgimg" id="background_1">
                                        <h6>Політика</h6>
                                    </div>
                                    <div class="name_of_news_bgimg">
                                        <h4>На переговорах в Минске снова подняли вопрос...</h4>
                                    </div>
                                    <span class="data_of_news_bgimg">
					    					<h7>by Roma iliushyk-11,Now,2017</h7>
					    				</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 no-margin">
                        <div class="row">
                            <div class="col-md-12 no-margin">
                                <div class="small-imagine">
                                    <a href="http://www.google.com">
                                        <img class="d-block-sm w-100" src="img/2.jpg" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block carousel_caption_smimg">
                                            <div class="cat_of_news_smimg" id="background_1">
                                                <h6>Політика</h6>
                                            </div>
                                            <div class="name_of_news_smimg">
                                                <h6>На переговорах в Минске снова подняли вопрос...</h6>
                                            </div>
                                            <span class="data_of_news_smimg">
							    					<h7>by Roma iliushyk-11,Now,2017</h7>
							    				</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 no-margin">
                                <div class="small-imagine">
                                    <a href="http://www.google.com">
                                        <img class="d-block-sm w-100" src="img/3.jpg" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block carousel_caption_smimg">
                                            <div class="cat_of_news_smimg" id="background_1">
                                                <h6>Політика</h6>
                                            </div>
                                            <div class="name_of_news_smimg">
                                                <h6>На переговорах в Минске снова подняли вопрос...</h6>
                                            </div>
                                            <span class="data_of_news_smimg">
							    					<h7>by Roma iliushyk-11,Now,2017</h7>
							    				</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- *********************************************************************************************** -->
            </div>

            <div class="carousel-item">
                <!-- *********************************************************************************************** -->
                <div class="row">
                    <div class="col-md-8">
                        <div class="big-imagine">
                            <a href="http://www.google.com">
                                <img class="d-block-bg w-100" src="img/1.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block carousel_caption_bgimg">
                                    <div class="cat_of_news_bgimg" id="background_1">
                                        <h6>Політика</h6>
                                    </div>
                                    <div class="name_of_news_bgimg">
                                        <h4>На переговорах в Минске снова подняли вопрос...</h4>
                                    </div>
                                    <span class="data_of_news_bgimg">
					    					<h7>by Roma iliushyk-11,Now,2017</h7>
					    				</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 no-margin">
                        <div class="row">
                            <div class="col-md-12 no-margin">
                                <div class="small-imagine">
                                    <a href="http://www.google.com">
                                        <img class="d-block-sm w-100" src="img/2.jpg" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block carousel_caption_smimg">
                                            <div class="cat_of_news_smimg" id="background_1">
                                                <h6>Політика</h6>
                                            </div>
                                            <div class="name_of_news_smimg">
                                                <h6>На переговорах в Минске снова подняли вопрос...</h6>
                                            </div>
                                            <span class="data_of_news_smimg">
							    					<h7>by Roma iliushyk-11,Now,2017</h7>
							    				</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 no-margin">
                                <div class="small-imagine">
                                    <a href="http://www.google.com">
                                        <img class="d-block-sm w-100" src="img/3.jpg" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block carousel_caption_smimg">
                                            <div class="cat_of_news_smimg" id="background_1">
                                                <h6>Політика</h6>
                                            </div>
                                            <div class="name_of_news_smimg">
                                                <h6>На переговорах в Минске снова подняли вопрос...</h6>
                                            </div>
                                            <span class="data_of_news_smimg">
							    					<h7>by Roma iliushyk-11,Now,2017</h7>
							    				</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- *********************************************************************************************** -->
            </div>
            <div class="carousel-item">
                <!-- *********************************************************************************************** -->
                <div class="row">
                    <div class="col-md-8">
                        <div class="big-imagine">
                            <a href="http://www.google.com">
                                <img class="d-block-bg w-100" src="img/1.jpg" alt="First slide">
                                <div class="carousel-caption d-none d-md-block carousel_caption_bgimg">
                                    <div class="cat_of_news_bgimg" id="background_1">
                                        <h6>Політика</h6>
                                    </div>
                                    <div class="name_of_news_bgimg">
                                        <h4>На переговорах в Минске снова подняли вопрос...</h4>
                                    </div>
                                    <span class="data_of_news_bgimg">
					    					<h7>by Roma iliushyk-11,Now,2017</h7>
					    				</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 no-margin">
                        <div class="row">
                            <div class="col-md-12 no-margin">
                                <div class="small-imagine">
                                    <a href="http://www.google.com">
                                        <img class="d-block-sm w-100" src="img/2.jpg" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block carousel_caption_smimg">
                                            <div class="cat_of_news_smimg" id="background_1">
                                                <h6>Політика</h6>
                                            </div>
                                            <div class="name_of_news_smimg">
                                                <h6>На переговорах в Минске снова подняли вопрос...</h6>
                                            </div>
                                            <span class="data_of_news_smimg">
							    					<h7>by Roma iliushyk-11,Now,2017</h7>
							    				</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 no-margin">
                                <div class="small-imagine">
                                    <a href="http://www.google.com">
                                        <img class="d-block-sm w-100" src="img/3.jpg" alt="First slide">
                                        <div class="carousel-caption d-none d-md-block carousel_caption_smimg">
                                            <div class="cat_of_news_smimg" id="background_1">
                                                <h6>Політика</h6>
                                            </div>
                                            <div class="name_of_news_smimg">
                                                <h6>На переговорах в Минске снова подняли вопрос...</h6>
                                            </div>
                                            <span class="data_of_news_smimg">
							    					<h7>by Roma iliushyk-11,Now,2017</h7>
							    				</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- *********************************************************************************************** -->
            </div>
        </div>
        <!-- ======================================================================================================= -->
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<br>
<!-- ==================================== END Slider/BigImagine ================================================== -->

<!-- ============================================= Content ======================================================= -->
{{--<div class="container">--}}

<div class="container">
    <h3 class="pb-3 mb-4 font-italic border-bottom"> </h3>
    <div class="row mb-2 ">
    @foreach($articles as $article)                {{--директива--}}
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">
                        @foreach( $article->categories as $category_of_new)
                            <a class="btn btn-sm btn-outline-secondary" href="{{route('categoryFilter', ['id_cat'=>$category_of_new->id,'slug_cat' =>str_slug($category_of_new->title)])}}">{{ $category_of_new->title}}</a>
                        @endforeach
                    </strong>
                    <strong class="d-inline-block mb-2 text-primary">

                    @foreach( $article->tags as $tag_of_news)
                        <a class="btn btn-danger btn-sm" href="{{route('categoryFilter', ['id_cat'=>$category_of_new->id,'slug_cat' =>str_slug($category_of_new->title)])}}">{{ $tag_of_news->title}}</a>
                    @endforeach
                    </strong>
                    <div class="mb-1 text-muted">{{ str_limit($article->author,35) }}</div>
                    <h5 class="mb-0">
                        <a class="text-dark" href="{{ route('articleShow',['id'=>$article->id,'slug' =>str_slug($article->title)]) }}">{{ str_limit($article->title,40) }}</a>  {{--отримуєм доступ до ячейки title таблиці article--}}
                    </h5>
                    <div class="mb-1 text-muted">{{ $article->created_at->format('d-m-Y H:i') }}</div>
                    <p class="card-text mb-auto">{!! str_limit($article->short_description ,32) !!}</p>  {{--те саме що й зверху тыльки !! знымають екранування з тексту--}}
                    <a href="{{ route('articleShow',['id'=>$article->id,'slug' =>str_slug($article->title)]) }}">Продовжити читати...</a>
                </div>
                <div class="card-imagine">
                    <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" src="img/1234.jpg" alt="Card image cap">
                </div>
            </div>
        </div>
    @endforeach
    </div>
    <div class="text-center">
        <span style="align-content: center">
            {{--пагинция для кількостс татей--}}
            {{ $articles->links() }}
        </span>
    </div>
</div>



<main role="main" class="container">
    <div class="row">
        <div class="col-md-12 blog-main" >
            <h3 class="pb-3 mb-4 font-italic border-bottom">
                <p align="center">Тут буде ше шось!!!</p>
            </h3>
        </div>
    </div>


</main><!-- /.container -->
<!-- ========================================== END Content ===================================================== -->
@endsection