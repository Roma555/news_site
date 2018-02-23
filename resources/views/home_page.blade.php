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
<br><br>
{{--<div class="container">--}}
    {{--<div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">--}}
        {{--<div class="col-md-6 px-0">--}}
            {{--<h1 class="display-4 font-italic">Title of a longer featured blog post</h1>--}}
            {{--<p class="lead my-3">Multiple lines of text that form the lede, informing new readers--}}
                {{--quickly and efficiently about what's most interesting in this post's contents.</p>--}}
            {{--<p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<!-- ==================================== END Slider/BigImagine ================================================== -->

<!-- ============================================= Content ======================================================= -->
{{--<div class="container">--}}
<div class="container">
    <div class="row mb-2 ">
    @foreach($articles as $article)                {{--директива--}}
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">World</strong>
                    <div class="mb-1 text-muted">{{ $article->author }}</div>
                    <h5 class="mb-0">
                        <a class="text-dark" href="#">{{ $article->title }}</a>  {{--отримуєм доступ до ячейки title таблиці article--}}
                    </h5>
                    <div class="mb-1 text-muted">{{ $article->created_at->format('d-m-Y H:i') }}</div>
                    <p class="card-text mb-auto">{!! $article->short_description !!}</p>  {{--те саме що й зверху тыльки !! знымають екранування з тексту--}}
                    <a href="{{ route('articleShow',['id'=>$article->id,'slug' =>str_slug($article->title)]) }}">Продовжити читати...</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap">
            </div>
        </div>
    @endforeach
    </div>
    <div class="text-center">
    <div >
        {{--пагинция для кількостс татей--}}
        {{ $articles->links() }}
    </div>
    </div>
</div>



<main role="main" class="container">
    <div class="row">
        <div class="col-md-8 blog-main">
            <h3 class="pb-3 mb-4 font-italic border-bottom">
                From the Firehose
            </h3>

            <div class="blog-post">
                <h2 class="blog-post-title">Sample blog post</h2>
                <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

                <p>This blog post shows a few different types of content that's supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>
                <hr>
                <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                <blockquote>
                    <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </blockquote>
                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                <h2>Heading</h2>
                <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
                <h3>Sub-heading</h3>
                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                <pre><code>Example code block</code></pre>
                <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
                <h3>Sub-heading</h3>
                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <ul>
                    <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                    <li>Donec id elit non mi porta gravida at eget metus.</li>
                    <li>Nulla vitae elit libero, a pharetra augue.</li>
                </ul>
                <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
                <ol>
                    <li>Vestibulum id ligula porta felis euismod semper.</li>
                    <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>
                    <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>
                </ol>
                <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>
            </div><!-- /.blog-post -->

            <div class="blog-post">
                <h2 class="blog-post-title">Another blog post</h2>
                <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>

                <p>Cum sociis natoque penatibus et magnis <a href="#">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>
                <blockquote>
                    <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </blockquote>
                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
            </div><!-- /.blog-post -->

            <div class="blog-post">
                <h2 class="blog-post-title">New feature</h2>
                <p class="blog-post-meta">December 14, 2013 by <a href="#">Chris</a></p>

                <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <ul>
                    <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
                    <li>Donec id elit non mi porta gravida at eget metus.</li>
                    <li>Nulla vitae elit libero, a pharetra augue.</li>
                </ul>
                <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
                <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>
            </div><!-- /.blog-post -->

            <nav class="blog-pagination">
                <a class="btn btn-outline-primary" href="#">Older</a>
                <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
            </nav>

        </div><!-- /.blog-main -->

        <aside class="col-md-4 blog-sidebar">
            <div class="p-3 mb-3 bg-light rounded">
                <h4 class="font-italic">About</h4>
                <p class="mb-0">Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
            </div>

            <div class="p-3">
                <h4 class="font-italic">Archives</h4>
                <ol class="list-unstyled mb-0">
                    <li><a href="#">March 2014</a></li>
                    <li><a href="#">February 2014</a></li>
                    <li><a href="#">January 2014</a></li>
                    <li><a href="#">December 2013</a></li>
                    <li><a href="#">November 2013</a></li>
                    <li><a href="#">October 2013</a></li>
                    <li><a href="#">September 2013</a></li>
                    <li><a href="#">August 2013</a></li>
                    <li><a href="#">July 2013</a></li>
                    <li><a href="#">June 2013</a></li>
                    <li><a href="#">May 2013</a></li>
                    <li><a href="#">April 2013</a></li>
                </ol>
            </div>

            <div class="p-3">
                <h4 class="font-italic">Elsewhere</h4>
                <ol class="list-unstyled">
                    <li><a href="#">GitHub</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                </ol>
            </div>
        </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->

</main><!-- /.container -->
<!-- ========================================== END Content ===================================================== -->
@endsection