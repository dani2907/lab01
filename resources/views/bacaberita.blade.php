@extends('layouts.app')

@section('script')
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
                    <div itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                        <a href="#" itemprop="url">
                            <span itemprop="title">News Update</span>
                        </a> <span class="arrow">&gt;</span>
                    </div>  
                    <span class="last-breadcrumbs">
                        {{$data->judul_berita}}
                    </span>
                </div>
                <article class="static-page news">
                    <header class="clearfix">
                        <figure>
                            <img src="{{Storage::url($data->gambar)}}" data-retina="{{Storage::url($data->gambar)}}" alt="This is News title sample dude go check it out" />
                        </figure>
                        <aside>
                            <h1 id="news-title">{{$data->judul_berita}}</h1>
                            <p id="link-category">
                                @if($data->kategori_top == 1)
                                <a href="#">Top News</a>
                                @endif
                                @if($data->kategori_populer == 1)
                                <a href="#">Populer News</a>
                                @endif
                            <?php
                            $date=date_create($data->created_at);
                            $newdate = date_format($date,"F   j, Y");
                            ?>
                            </p>
                            <p id="blog-time" class="clearfix">{{$newdate}}</p>
                            <ul id="social-link" class="clearfix">
                                <li><div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:like href="http://cubicthemes.com/" send="false" layout="button_count" width="40" show_faces="false" font=""></fb:like></li>
                                <li>
                                      <a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
                                </li>
                                <li class="last">
                                    <div class="g-plusone" data-size="medium"></div>
                                    <script type="text/javascript">
                                      (function() {
                                        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                                        po.src = 'https://apis.google.com/js/plusone.js';
                                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                                      })();
                                    </script>
                                </li>
                            </ul>

                        </aside>
                    </header>
                    <?php echo $data->isi_berita; ?>
                </article>
                <div id="comments">
                    <h2 class="title-comment">23 Comments on <span>This is News title sample dude go check it out</span></h2>
                    <ul id="list-comments">
                    <li class="comment clearfix">
                        <img alt="Dhimas" src="http://1.gravatar.com/avatar/b697e725e617360f842bdecdf9e2d57a?s=160&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D160&amp;r=G" class="avatar avatar-160 photo" height="160" width="160" /> 
                        <article class="comment odd alt thread-odd thread-alt depth-1 clearfix">
                            <header class="clearfix">
                                <h3><a href="http://cubicthemes.com/">Dhimas</a> -</h3>
                                <time datetime="2013-09-13">September 13, 2013 4:15 am</time>
                            </header>
                            <div class="comment-wrapper">
                                <p>Hey, I just post this to test the comment system, I hope this work perfectly</p>
                            </div>
                            <a class="comment-reply-link" href="#">Reply</a>    
                        </article><!-- #comment-##  -->
                        <ul class="children">
                            <li class="comment clearfix">
                                <img alt="secureadmin" src="http://0.gravatar.com/avatar/027242e2e52717b2ae33b1bebaaa7ba7?s=160&amp;d=http%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D160&amp;r=G" class="avatar avatar-160 photo" height="160" width="160" />
                                <article class="comment clearfix">
                                    <header class="clearfix">
                                        <h3>secureadmin -</h3>
                                        <time datetime="2013-09-13">September 13, 2013 4:15 am</time>
                                    </header>
                                    <div class="comment-wrapper">
                                        <p>Cool, I'm the admin dude</p>
                                    </div>
                                    <a class="comment-reply-link" href="#">Reply</a>
                                </article><!-- #comment-##  -->
                            </li><!-- #comment-## -->
                        </ul><!-- .children -->
                    </li><!-- #comment-## -->
                    <li class="comment clearfix">
                        <img alt="secureadmin" src="http://0.gravatar.com/avatar/027242e2e52717b2ae33b1bebaaa7ba7?s=160&amp;d=http%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D160&amp;r=G" class="avatar avatar-160 photo" height="160" width="160" />    
                        <article class="comment clearfix">
                            <header class="clearfix">
                                <h3>John Doe</h3>
                                <time datetime="2013-09-13">September 13, 2013 4:15 am</time>
                            </header>
                            <div class="comment-wrapper">
                                <p>Yay, it's work, woohoo, not bad. The comments layout looks very cool. I hope all of you like it.</p>
                            </div>
                            <a class="comment-reply-link" href="#">Reply</a>    
                        </article><!-- #comment-##  -->
                    </li><!-- #comment-## -->
                    <li class="comment clearfix">
                        <img alt="secureadmin" src="http://0.gravatar.com/avatar/027242e2e52717b2ae33b1bebaaa7ba7?s=160&amp;d=http%3A%2F%2F0.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D160&amp;r=G" class="avatar avatar-160 photo" height="160" width="160" />    
                        <article class="comment clearfix">
                            <header class="clearfix">
                                <h3>John Doe</h3>
                                <time datetime="2013-09-13">September 13, 2013 4:15 am</time>
                            </header>
                            <div class="comment-wrapper">
                                <p>Sed quis lacinia lacus, eget hendrerit erat. Curabitur posuere nunc vel malesuada semper. Duis ut lectus sit amet massa volutpat fringilla sit amet a lectus. Phasellus tempor nibh non nisl aliquam, et congue tortor condimentum. Vivamus dapibus vehicula erat id laoreet. Nam aliquet massa eu convallis fringilla. Nullam convallis vulputate sapien quis bibendum. Nulla facilisi.</p>
                            </div>
                            <a class="comment-reply-link" href="#">Reply</a>    
                        </article><!-- #comment-##  -->
                    </li><!-- #comment-## -->
                </ul>
                <div id="respond" class="clearfix">
                    <h2 id="reply-title" class="title-comment"><strong>Leave a Reply</strong></h2>
                    <div class="clear"></div>
                    <form action="http://cubicthemes.com/develop/veteranfood/wp-comments-post.php" method="post" id="form-comment" class="clearfix">
                        <div>
                            <p class="comment-notes">Your email address will not be published. Required fields are marked <span class="required">*</span></p>                           
                            <label for="author">Name <span>*</span></label>
                            <input id="author" name="author" type="text" class="input required error" value="John Doe" size="30" />
                            <label for="email">Email <span>*</span></label>
                            <input id="email" name="email" type="text" class="input required email" value="" size="30" />
                            <label for="url">Website</label>
                            <input id="url" name="url" type="text" class="input url" value="" size="30" />
                            <label for="comment">Comment <span>*</span></label>
                            <textarea id="comment" name="comment" cols="45" rows="8" class="input textarea required"></textarea><br/>
                            <input name="submit" type="submit" id="submit" value="Post Comment" class="button" />
                        </div>
                        </form>
                    </div><!-- #respond -->
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
            <div id="tabs-content-bottom">
                <ul id="nav-content-bottom" class="clearfix">
                    <li><a href="#panel-1">Student Center</a></li>
                    <li><a href="#panel-2">Quick Navigation</a></li>
                    <li><a href="#panel-3">Sample Text Content</a></li>
                    <li><a href="#panel-4">Partners</a></li>
                </ul>
                <div class="ui-tabs-panel clearfix" id="panel-1">
                    <ul id="nav-sidebar-bottom" class="clearfix">
                        <li><a href="#" class="clearfix">
                            <figure><img src="images/icon-sidebar-1.png" alt="Contact Us" /></figure>
                            <strong class="title-nav-sidebar">Contact Us Now</strong>
                            <strong>Phone:</strong> +62 384856, +62 5456789 <strong>Fax:</strong> +62 45677896
                            </a></li>
                        <li><a href="#" class="clearfix">
                            <figure><img src="images/icon-sidebar-2.png" alt="Location" /></figure>
                            <strong class="title-nav-sidebar">Location</strong>
                            Click here to get direction to our campus location by bus or train
                            </a></li>
                        <li><a href="#" class="clearfix">
                            <figure><img src="images/icon-sidebar-3.png" alt="Location" /></figure>
                            <strong class="title-nav-sidebar">Live Chat</strong>
                            Talk with our Customer Service or our student and alumni
                            </a></li>
                        <li><a href="#" class="clearfix">
                            <figure><img src="images/icon-sidebar-4.png" alt="Library and Research" /></figure>
                            <strong class="title-nav-sidebar">Library &amp; Research</strong>
                            Talk with our Customer Service or our student and alumni
                            </a></li>
                         <li><a href="#" class="clearfix">
                            <figure><img src="images/icon-sidebar-5.png" alt="Library and Research" /></figure>
                            <strong class="title-nav-sidebar">Faculty Department</strong>
                            From Politic, Nuclear and Graphic Design, we have everything.
                            </a></li>
                    </ul>
                </div>
                <div class="ui-tabs-panel clearfix" id="panel-2">
                    <ul class="nav-tabs-bottom">
                        <li><a href="#">Curicculum &amp; Campus</a></li>
                        <li><a href="#">Research Center</a></li>
                        <li><a href="#">Greeting from Principal</a></li>
                        <li><a href="#">E-Learning</a></li>
                        <li><a href="#">Laboratorium</a></li>
                        <li><a href="#">Campus Location</a></li>
                        <li><a href="#">Asked Alumni</a></li>
                        <li><a href="#">Registration</a></li>
                        <li><a href="#">Upcoming Event</a></li>
                        <li><a href="#">Campus Achivement</a></li>
                        <li><a href="#">Magazine</a></li>
                        <li><a href="#">Live in Campus</a></li>
                        <li><a href="#">Library</a></li>
                        <li><a href="#">Student Webmail</a></li>
                        <li><a href="#">News &amp; Blog</a></li>
                        <li><a href="#">Future Student</a></li>
                        <li><a href="#">Night Class</a></li>
                        <li><a href="#">Study on Field</a></li>
                    </ul>
                </div>
                <div class="ui-tabs-panel clearfix" id="panel-3">
                    <article>
                        <p><strong>Lorem ipsum dolor sit amet</strong>, consectetur adipiscing elit. Nunc euismod felis sem, ac sodales justo viverra eu. Phasellus dui eros, dictum sed arcu id, adipiscing lobortis orci. Phasellus porta lectus id varius fermentum. <a href="#">Nulla facilisi</a>. Sed viverra felis eu lacinia portal</p>
                        <p>Morbi tincidunt lacus eu vehicula consectetur. Nulla facilisi.</p>
                    </article>
                </div>
                <div class="ui-tabs-panel clearfix" id="panel-4">
                    <div class="flexslider slider-partners">
                        <ul class="slides">
                            <li><a href="#"><img src="http://kepelaminan.com/template/schoolfun/maroon/images/img-13.png" data-retina="images/img-13-retina.png" alt="Hawlett Package" /></a></li>
                            <li><a href="#"><img src="http://kepelaminan.com/template/schoolfun/maroon/images/img-14.png" data-retina="images/img-14-retina.png" alt="Google Play" /></a></li>
                            <li><a href="#"><img src="http://kepelaminan.com/template/schoolfun/maroon/images/img-15.png" data-retina="images/img-15-retina.png" alt="Linkedin" /></a></li>
                            <li><a href="#"><img src="http://kepelaminan.com/template/schoolfun/maroon/images/img-16.png" data-retina="images/img-16-retina.png" alt="Google" /></a></li>
                            <li><a href="#"><img src="http://kepelaminan.com/template/schoolfun/maroon/images/img-17.png" data-retina="images/img-17-retina.png" alt="Ebay" /></a></li>
                            <li><a href="#"><img src="http://kepelaminan.com/template/schoolfun/maroon/images/img-13.png" data-retina="images/img-13-retina.png" alt="Hawlett Package" /></a></li>
                            <li><a href="#"><img src="http://kepelaminan.com/template/schoolfun/maroon/images/img-14.png" data-retina="images/img-14-retina.png" alt="Google Play" /></a></li>
                            <li><a href="#"><img src="http://kepelaminan.com/template/schoolfun/maroon/images/img-15.png" data-retina="images/img-15-retina.png" alt="Linkedin" /></a></li>
                            <li><a href="#"><img src="http://kepelaminan.com/template/schoolfun/maroon/images/img-16.png" data-retina="images/img-16-retina.png" alt="Google" /></a></li>
                            <li><a href="#"><img src="http://kepelaminan.com/template/schoolfun/maroon/images/img-17.png" data-retina="images/img-17-retina.png" alt="Ebay" /></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
