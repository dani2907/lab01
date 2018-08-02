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
        $('.slider-tabs.flexslider').flexslider({
            animation: "slide",
            pauseOnAction: true,
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
<body class="home">
@endsection

@section('content')
    <div id="slideshow-tabs">
        <div id="panel-tabs" class="clearfix">
            <ul class="nav-tabs-slideshow">
                <li><a href="#panel-1"><strong>Study with Fun</strong><br />
                    <span>Study Hard. Play Hard</span>
                    </a>
                </li>
                <li>
                    <a href="#panel-2"><strong>Career Development</strong><br />
                    <span>We prepare you to wild world</span>
                    </a>
                </li>
                <li>
                    <a href="#panel-3"><strong>Research Center</strong><br />
                    <span>Discovery &amp; Innovation</span>
                    </a>
                </li>
                <li>
                    <a href="#panel-4"><strong>Newsroom</strong><br />
                    <span>Latest campus news update</span>
                    </a>
                </li>
                <li>
                    <a href="#panel-5"><strong>Events</strong><br />
                    <span>Schedule of our activity</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="ui-tabs-panel" id="panel-1" style="background:url({{asset('university/images/slide-1.jpg')}}) no-repeat 50% 0">
            <div class="tabs-blur" style="background:url({{asset('university/images/slide-1.jpg')}}) no-repeat 50% 0">
            </div>
            <div class="tabs-container">
                <article>
                    <h2>Reach your Next Lavel Career</h2>
                    <p>Phasellus nec magna et eros pretium tincidunt eget nec nulla. Integer pulvinar felis vel arcu elementum dignissim. In consequat volutpat tristique.</p>
                    <a href="#" class="button-more-slide">Learn More</a>
                </article>
            </div>
        </div>
        <div class="ui-tabs-panel" id="panel-2" style="background:url({{asset('university/images/slide-2.jpg')}}) no-repeat 50% 0">
            <div class="tabs-blur" style="background:url({{asset('university/images/slide-2.jpg')}}) no-repeat 50% 0">
            </div>
            <div class="tabs-container">
                <article>
                    <ul class="nav-slider-left">
                        <li><a href="#">Student Life</a></li>
                        <li><a href="#">Accomodation</a></li>
                        <li><a href="#">Academic Calendar</a></li>
                        <li><a href="#">Alumni</a></li>
                        <li><a href="#">Blackboard</a></li>
                        <li><a href="#">Postgraduate</a></li>
                        <li><a href="#">Domestic Graduate</a></li>
                    </ul>
                    <ul class="nav-slider-right">
                        <li><a href="#">Human Resources</a></li>
                        <li><a href="#">Teaching Gateway</a></li>
                        <li><a href="#">Jobs</a></li>
                        <li><a href="#">IT Services</a></li>
                        <li><a href="#">Award</a></li>
                        <li><a href="#">Student Connection</a></li>
                        <li><a href="#">Research</a></li>
                    </ul>
                </article>
            </div>
        </div>
        <div class="ui-tabs-panel" id="panel-3" style="background:url({{asset('university/images/slide-3.jpg')}}) no-repeat 50% 0">
            <div class="tabs-blur" style="background:url({{asset('university/images/slide-3.jpg')}}) no-repeat 50% 0">
            </div>
            <div class="tabs-container">
                <article>
                    <h2>Never Ending Innovation</h2>
                    <p>Cras erat augue, congue sed egestas in, tincidunt sed odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer pulvinar felis vel arcu elementum dignissim.</p>
                    <a href="#" class="button-more-slide">Labs &amp; Library</a>
                </article>
            </div>
        </div>
        <div class="ui-tabs-panel" id="panel-4" style="background:url({{asset('university/images/slide-4.jpg')}}) no-repeat 50% 0">
            <div class="tabs-blur" style="background:url({{asset('university/images/slide-4.jpg')}}) no-repeat 50% 0">
            </div>
            <div class="tabs-container">
                <div class="slider-tabs flexslider">
                    <ul class="slides">
                        <li>
                            <div class="slider-tabs-content">
                                <h3><a href="#">Alumni launch our brand new website today</a></h3>
                                <time datetime="2013-11-30">November 30, 3013</time>
                                <p>Phasellus nec magna et eros pretium tincidunt eget nec nulla. Integer pulvinar felis vel arcu elementum dignissim. In consequat volutpat tristique. Lorem ipsum dolor sit amet pallentesque</p>
                            </div>
                        </li>
                        <li>
                            <div class="slider-tabs-content">
                                <h3><a href="#">We are Opening WordPress new Faculty</a></h3>
                                <time datetime="2013-11-18">November 18, 3013</time>
                                <p>Morbi orci mauris, laoreet vel mollis consectetur, lobortis et tellus. Cras erat augue, congue sed egestas in, tincidunt sed odio. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </li>
                        <li>
                             <div class="slider-tabs-content">
                                <h3><a href="#">Alumni launch our brand new website today</a></h3>
                                 <time datetime="2013-11-18">November 18, 3013</time>
                                 <p>Phasellus nec magna et eros pretium tincidunt eget nec nulla. Integer pulvinar felis vel arcu elementum dignissim. In consequat volutpat tristique. Lorem ipsum dolor sit amet pallentesque</p>
                            </div>
                        </li>
                        <li>
                            <div class="slider-tabs-content">
                                <h3><a href="#">Alumni launch our brand new website today</a></h3>
                                <time datetime="2013-11-30">November 30, 3013</time>
                                <p>Phasellus nec magna et eros pretium tincidunt eget nec nulla. Integer pulvinar felis vel arcu elementum dignissim. In consequat volutpat tristique. Lorem ipsum dolor sit amet pallentesque</p>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <div class="ui-tabs-panel" id="panel-5" style="background:url({{asset('university/images/slide-5.jpg')}}) no-repeat 50% 0">
            <div class="tabs-blur" style="background:url({{asset('university/images/slide-5.jpg')}}) no-repeat 50% 0">
            </div>
            <div class="tabs-container">
                <div class="slider-tabs event flexslider">
                    <ul class="slides">
                        <li>
                            <div class="slider-tabs-content">
                                <img src="images/img-1.jpg" data-retina="images/img-1-retina.jpg" alt="Beer Party new Student and New Year Eve" />
                                <h3><a href="#">Beer Party new Student and New Year Eve</a></h3>
                                <ul class="list-event-slider">
                                    <li class="time-slider">October 23, 2013 - October 30, 2013</li>
                                    <li class="hour-slider">9:00 AM - 10:00 PM</li>
                                    <li class="location-slider"><em>Campus Auditorium</em></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="slider-tabs-content">
                                <img src="images/img-1.jpg" data-retina="images/img-1-retina.jpg" alt="Beer Party new Student and New Year Eve" />
                                <h3><a href="#">Beer Party new Student and New Year Eve</a></h3>
                                <ul class="list-event-slider">
                                    <li class="time-slider">October 23, 2013 - October 30, 2013</li>
                                    <li class="hour-slider">9:00 AM - 10:00 PM</li>
                                    <li class="location-slider"><em>Campus Auditorium</em></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="slider-tabs-content">
                                <img src="images/img-1.jpg" data-retina="images/img-1-retina.jpg" alt="Beer Party new Student and New Year Eve" />
                                <h3><a href="#">Beer Party new Student and New Year Eve</a></h3>
                                <ul class="list-event-slider">
                                    <li class="time-slider">October 23, 2013 - October 30, 2013</li>
                                    <li class="hour-slider">9:00 AM - 10:00 PM</li>
                                    <li class="location-slider"><em>Campus Auditorium</em></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="slider-tabs-content">
                                <img src="images/img-1.jpg" data-retina="images/img-1-retina.jpg" alt="Beer Party new Student and New Year Eve" />
                                <h3><a href="#">Beer Party new Student and New Year Eve</a></h3>
                                <ul class="list-event-slider">
                                    <li class="time-slider">October 23, 2013 - October 30, 2013</li>
                                    <li class="hour-slider">9:00 AM - 10:00 PM</li>
                                    <li class="location-slider"><em>Campus Auditorium</em></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="content-container">
        <div id="content" class="clearfix">
            <div id="main-content">
                <article id="intro">
                    <h1>Welcome to Student Fun University</h1>
                    <figure><img src="{{asset('university/images/img-3.jpg')}}" alt="Welcome to Student Fun University" /></figure>
                    <p>Morbi fringilla mauris est, ac cursus tellus tristique eget. Maecenas rhoncus lacus quis mollis euismod. Pellentesque mollis molestie sapien, eget sodales dui porta at. Aenean augue massa, facilisis ac semper vel, tristique in nulla. Suspendisse potenti.</p>
                    <a href="#" class="more-intro">- Learn More</a>
                </article>
                <div id="sidebar-homepage-left" class="sidebar-homepage">
                    <aside class="widget-container">
                        <div class="widget-wrapper clearfix">
                            <h3 class="widget-title">Latest Blog</h3>
                                <ul class="menu news-sidebar">          
                                    <li class="clearfix">
                                        <img src="{{asset('university/images/img-4.jpg')}}" data-retina="{{asset('university/images/img-4-retina.jpg')}}" alt="We Sent our Student to Himalaya to Study and Hiking" class="imgframe alignleft" />
                                        <h4><a href="#">We Sent our Student to Himalaya to Study and Hiking</a></h4>
                                        <span class="date-news">October 5, 2013</span>
                                    </li>
                                    <li class="clearfix">
                                        <img src="{{asset('university/images/img-5.jpg')}}" data-retina="{{asset('university/images/img-5-retina.jpg')}}" alt="We are opening Modelling Night Course" class="imgframe alignleft" />
                                        <h4><a href="#">We are opening Modelling Night Course</a></h4>
                                        <span class="date-news">October 2, 2013</span>
                                    </li>
                                    <li class="clearfix">
                                        <img src="{{asset('university/images/img-6.jpg')}}" data-retina="{{asset('university/images/img-6-retina.jpg')}}" alt="Photography Club 120 Year Birthday Beach Party" class="imgframe alignleft" />
                                        <h4><a href="#">Photography Club 120 Year Birthday Beach Party</a></h4>
                                        <span class="date-news">September 30, 2013</span>
                                    </li>
                                    <li class="clearfix">
                                        <img src="{{asset('university/images/img-7.jpg')}}" data-retina="{{asset('university/images/img-7-retina.jpg')}}" alt="Photography Club 120 Year Birthday Beach Party" class="imgframe alignleft" />
                                        <h4><a href="#">We are opening Medical Faculty in our new Campus</a></h4>
                                        <span class="date-news">September 30, 2013</span>
                                    </li>
                                </ul>
                                <a href="newslist.html" class="button-more">Read More Blog Post</a>
                        </div>
                    </aside>
                </div>
                <div id="sidebar-homepage-middle" class="sidebar-homepage">
                    <aside class="widget-container">
                        <div class="widget-wrapper clearfix">
                            <h3 class="widget-title">Latest Event</h3>
                                <ul class="menu event-sidebar">         
                                    <li class="clearfix">
                                        <div class="event-date-widget">
                                            <strong>28</strong>
                                            <span>Nov</span>
                                        </div>
                                        <div class="event-content-widget">
                                            <article>
                                                <h4><a href="#">Musicfest 2013</a></h4>
                                                <p>November 28, 2013 - November 30, 2013<br />
                                                    9:00 AM - 10:00 AM
                                                </p>
                                                <em>Campus Auditorium</em>
                                            </article>
                                            <article>
                                                <h4><a href="#">HTML5 &amp; CSS3 Workshop</a></h4>
                                                <p>November 28, 2013<br />
                                                    11:00 AM - 1:00 PM
                                                </p>
                                                <em>IT Center Building E</em>
                                            </article>
                                            <article>
                                                <h4><a href="#">Free TOEFL &amp; IBT Test</a></h4>
                                                <p>November 28, 2013<br />
                                                    2:00 PM - 2:00 PM
                                                </p>
                                                <em>Main English Classroom</em>
                                            </article>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <div class="event-date-widget">
                                            <strong>25</strong>
                                            <span>Nov</span>
                                        </div>
                                        <div class="event-content-widget">
                                            <article>
                                                <h4><a href="#">Foodfest 2013</a></h4>
                                                <p>November 25, 2013 - November 27, 2013<br />
                                                    9:00 AM - 10:00 AM
                                                </p>
                                                <em>Campus Canteen</em>
                                            </article>
                                            <article>
                                                <h4><a href="#">Student Festival</a></h4>
                                                <p>November 25, 2013 - November 26, 2013<br />
                                                    8:00 AM - 9:00 AM
                                                </p>
                                                <em>Basketball Court</em>
                                            </article>
                                             <article>
                                                <h4><a href="#">Free TOEFL &amp; IBT Test</a></h4>
                                                <p>November 28, 2013<br />
                                                    2:00 PM - 2:00 PM
                                                </p>
                                                <em>Main English Classroom</em>
                                            </article>
                                        </div>
                                    </li>
                                </ul>
                        </div>
                    </aside>
                </div>
            </div>
            <div id="sidebar-homepage-right" class="sidebar-homepage">
                <ul id="nav-sidebar" class="clearfix">
                    <li><a href="#" class="clearfix">
                        <figure><img src="{{asset('university/images/icon-sidebar-1.png')}}" alt="Contact Us" /></figure>
                        <strong class="title-nav-sidebar">Contact Us Now</strong>
                        <strong>Phone:</strong> +62 384856, +62 5456789 <strong>Fax:</strong> +62 45677896
                        </a></li>
                    <li><a href="#" class="clearfix">
                        <figure><img src="{{asset('university/images/icon-sidebar-2.png')}}" alt="Location" /></figure>
                        <strong class="title-nav-sidebar">Location</strong>
                        Click here to get direction to our campus location by bus or train
                        </a></li>
                    <li><a href="#" class="clearfix">
                        <figure><img src="{{asset('university/images/icon-sidebar-3.png')}}" alt="Location" /></figure>
                        <strong class="title-nav-sidebar">Live Chat</strong>
                        Talk with our Customer Service or our student and alumni
                        </a></li>
                    <li><a href="#" class="clearfix">
                        <figure><img src="{{asset('university/images/icon-sidebar-4.png')}}" alt="Library and Research" /></figure>
                        <strong class="title-nav-sidebar">Library and Research</strong>
                        Talk with our Customer Service or our student and alumni
                        </a></li>
                     <li><a href="#" class="clearfix">
                        <figure><img src="{{asset('university/images/icon-sidebar-5.png')}}" alt="Library and Research" /></figure>
                        <strong class="title-nav-sidebar">Faculty Department</strong>
                        From Politic, Nuclear and Graphic Design, we have everything.
                        </a></li>
                </ul>
                <aside id="gw_gallery-5" class="widget-container widget_gw_gallery">
                <div class="widget-wrapper clearfix">
                    <h3 class="widget-title">Photo Gallery</h3>  
                    <script type="text/javascript">
                        jQuery(document).ready(function($){
                            $("#gw_gallery-5-slide").flexslider({
                                animation: "slide",
                                animationLoop: false,
                                pauseOnAction: true
                            });
                        });
                    </script>
                    <div id="gw_gallery-5-slide" class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="slides-image">
                                    <a href="images/img-9-retina.jpg" data-rel="prettyPhoto[pp-gw_gallery-5]"><img src="images/img-9.jpg" alt="Beauty in Green"  data-retina="images/img-9-retina.jpg" /></a>
                                </div>
                                <h4><a href="images/img-9-retina.jpg" data-rel="prettyPhoto[pp-gw_gallery-5-slide]">Things you can bring on Library</a></h4>
                            </li>
                            <li>
                                <div class="slides-image">
                                    <a href="images/img-10-retina.jpg" data-rel="prettyPhoto[pp-gw_gallery-5]"><img src="images/img-10.jpg" alt="Choose your future jobs correctly"  data-retina="images/img-10-retina.jpg" /></a>
                                </div>
                                <h4><a href="images/img-10-retina.jpg" data-rel="prettyPhoto[pp-gw_gallery-5-slide]">Choose your future jobs correctly</a></h4>
                            </li>
                            <li>
                                <div class="slides-image">
                                    <a href="images/img-11-retina.jpg" data-rel="prettyPhoto[pp-gw_gallery-5]"><img src="images/img-11.jpg" alt="Choose your future jobs correctly"  data-retina="images/img-11-retina.jpg" /></a>
                                </div>
                                <h4><a href="images/img-11-retina.jpg" data-rel="prettyPhoto[pp-gw_gallery-5-slide]">Battle of code in the midnight to get King of Code</a></h4>
                            </li>
                        </ul>
                    </div>
                </div>
            </aside>
            </div>
        </div>
    </div>

@endsection
