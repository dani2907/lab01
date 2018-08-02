@extends('layouts.app')

@section('script')
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <script type="text/javascript">
    $(document).ready(function (){
        $(window).scroll(function () {
            if ($(document).scrollTop() <= 40) {
                $('#header-full').removeClass('small');
                $('.tabs-blur').removeClass('no-blur');
                $('#main-header').removeClass('small');
            } else {
                $('#header-full').addClass('small');
                $('.tabs-blur').addClass('no-blur');
                $('#main-header').addClass('small');
            }
        });
        
        $("a[data-rel^='prettyPhoto']").prettyPhoto({
            default_width: 600,
            default_height: 420,
            social_tools: false
        });
        $('#slideshow-tabs').tabs({ show: { effect: "fade", duration: 200 }, hide: { effect: "fade", duration: 300 } });
        $('#tabs-content-bottom').tabs({ show: { effect: "fade", duration: 200 }, hide: { effect: "fade", duration: 300 } });
        $('.slider-tabs.flexslider').flexslider({
            animation: "slide",
            pauseOnAction: true
        });
        $('.slider-partners.flexslider').flexslider({
            animation: "slide",
            pauseOnAction: true,
            itemWidth: 163,
            itemMargin: 0
        });
        $('#slider-news.flexslider').flexslider({
            animation: "slide",
            pauseOnAction: true
        });
        $('a[data-rel]').each(function() {
            $(this).attr('rel', $(this).data('rel'));
        });
        $('img[data-retina]').retina({checkIfImageExists: true});
        $(".open-menu").click(function(){
            $("body").addClass("no-move");
        });
        $(".close-menu, .close-menu-big").click(function(){
            $("body").removeClass("no-move");
        });
    });
    </script>

</head>
<body>
@endsection

@section('content')
    <div id="content-container">
        <div id="content" class="clearfix">
            <div id="main-content">
                <div id="breadcrumbs" class="clearfix">
                    <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="index.html" itemprop="url" class="icon-home">
                            <span itemprop="title">Home</span>
                        </a> <span class="arrow">&gt;</span>
                    </div>  
                    <span class="last-breadcrumbs">
                        News Update
                    </span>
                </div>
                <div id="slider-news" class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="slider-news-content">
                                <img src="http://kepelaminan.com/template/schoolfun/maroon/images/img-20.jpg" alt="News Title" />
                                <div class="panel-slider-news">
                                    <ul class="category-slider clearfix">
                                        <li><a href="#">Science &amp; Health</a></li>
                                        <li><a href="#">Student Achievement</a></li>
                                    </ul>
                                    <h2><a href="#">John Doe found Bicycle that can hike Mountain</a></h2>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="slider-news-content">
                                <img src="http://kepelaminan.com/template/schoolfun/maroon/images/img-21.jpg" alt="News Title" />
                                <div class="panel-slider-news">
                                    <ul class="category-slider clearfix">
                                        <li><a href="#">Breaking News</a></li>
                                    </ul>
                                    <h2><a href="#">Suspendisse lobortis blandit aliquet</a></h2>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="slider-news-content">
                                <img src="http://kepelaminan.com/template/schoolfun/maroon/images/img-22.jpg" alt="News Title" />
                                <div class="panel-slider-news">
                                    <ul class="category-slider clearfix">
                                        <li><a href="#">Breaking Bad</a></li>
                                    </ul>
                                    <h2><a href="#">Integer eleifend elit vitae libero euismod, ullamcorper euismod mauris pharetra</a></h2>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="my-news">
                    <ul>
                        
                    @foreach ($datas as $data)
                        <li>     
                            <a href="{{('/berita')}}/{{$data->id}}">
                                <div class="news-group clearfix">
                                  <img src="{{Storage::url($data->gambar)}}" />
                                  <h3>{{$data->judul_berita}}</h3>
                                  <h5>{{$data->created_at}}</h5>
                                  <?php echo substr($data->isi_berita,0,150);?>
                                </div>                                
                            </a>                   
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                            </form>
                        </li>
                    @endforeach

                    </ul>
                </div>
            </div>
            <div id="sidebar">
                <aside class="widget-container">
                    <div class="widget-wrapper clearfix">
                        <h3 class="widget-title">News Category</h3>
                        <ul>
                            <li><a href="#">Breaking News</a></li>
                            <li><a href="#">Science</a></li>
                            <li><a href="#">Student Story</a></li>
                            <li><a href="#">Campus Magazine</a></li>
                            <li><a href="#">Note from Principal</a></li>
                            <li><a href="#">Faculty News</a></li>
                        </ul>
                    </div>
                </aside>
                <aside class="widget-container">
                    <div class="widget-wrapper clearfix">
                        <h3 class="widget-title">About School Fun</h3>
                            <article class="text-widget ">
                                <img src="http://kepelaminan.com/template/schoolfun/maroon/images/img-27.jpg" alt="About Us" class="imgframe" />
                                <p>We make amazing design &amp; application with our professional team.</p>
                                <p>Integer adipiscing, elit vel malesuada pharetra, nunc sem placerat erat, sed consequat lectus diam vel nunc. Sed pulvinar est non neque porttitor mollis. Aenean placerat, dui laoreet posuere accumsan</p>
                                <ul>
                                    <li><strong>Address:</strong> P Sherman, 42 Wallaby Way, Sydney, Australia</li>
                                    <li><strong>Email:</strong> hello@cubicthemes.com</li>
                                    <li><strong>Phone:</strong> +62 8 45 6868</li>
                                </ul>   
                                <iframe class="map-area" src="http://maps.google.com/?ie=UTF8&amp;ll=37.055177,-95.668945&amp;spn=11.79095,12.150879&amp;t=m&amp;z=6&amp;output=embed"></iframe><br />      
                            </article>
                            <a href="#" class="button-more">More About Us</a>

                    </div>
                </aside>
                <aside class="widget-container">
                    <div class="widget-wrapper clearfix">
                        <h3 class="widget-title">Testimonial</h3>
                        <article class="text-widget">
                            <img src="http://kepelaminan.com/template/schoolfun/maroon/images/img-28.jpg" data-retina="images/img-28-retina.jpg" alt="Jane Cross" class="imgframe alignleft testimonial" />             
                            <div class="testimonial-header">
                                <h4>Jane Cross</h4>
                                <h5>Management Economy Student</h5>
                            </div>
                            <blockquote><p>Cras pharetra hendrerit mollis. Suspendisse aliquet in metus nec sollicitudin. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer tellus elit, cursus quis ante eget, molestie euismod tellus. Vestibulum ultricies neque urna, in adipiscing enim aliquet sit amet. Vivamus ullamcorper, diam id pharetra venenatis, erat risus euismod dui, sit amet ullamcorper libero est consequat libero. Ut augue nisl, varius et cursus in, faucibus at neque.</p>
                            </blockquote>
                        </article>
                        <a href="#" class="button-more">Testimonial</a>
                    </div>
                </aside>
            </div>
        </div>
    </div>

@endsection
