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
        $( ".accordion" ).accordion({
            heightStyle: "content"
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
                        Daftar KKP Pembimbing
                    </span>
                </div>
                <article class="static-page">
                     <h2>Daftar KKP Pembimbing</h2>
  <div class="my-table-responsive-sm"> 
    <button class="btn btn-success">Tombol</button>
  <table class="my-table my-table-hover my-table-info my-table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Age</th>
        <th>City</th>
        <th>Country</th>
        <th>Sex</th>
        <th>Example</th>
        <th>Example</th>
        <th>Example</th>
        <th>Example</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>35</td>
        <td>New York</td>
        <td>USA</td>
        <td>Female</td>
        <td>Yes</td>
        <td>Yes</td>
        <td>Yes</td>
        <td>Yes</td>
      </tr>
      <tr>
        <td>1</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>35</td>
        <td>New York</td>
        <td>USA</td>
        <td>Female</td>
        <td>Yes</td>
        <td>Yes</td>
        <td>Yes</td>
        <td>Yes</td>
      </tr>
      <tr>
        <td>1</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>35</td>
        <td>New York</td>
        <td>USA</td>
        <td>Female</td>
        <td>Yes</td>
        <td>Yes</td>
        <td>Yes</td>
        <td>Yes</td>
      </tr>
    </tbody>
  </table>
  </div>
                </article>
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
                        <script type="text/javascript">
                        jQuery(document).ready(function($){
                            $('#tabs-widget').tabs({ show: { effect: "fade", duration: 200 }, hide: { effect: "fade", duration: 500 } });
                        });
                        </script>
                        <div id="tabs-widget">
                            <ul class="tabs-widget">
                                <li class="first-tabs"><a href="#panel1">Teacher</a></li>
                                <li class="last-tabs"><a href="#panel2">Flickr</a></li>
                            </ul>
                            <div class="ui-tabs-panel" id="panel1">
                                <ul class="menu team-sidebar"> 
                                    <li class="clearfix">
                                        <img src="http://kepelaminan.com/template/schoolfun/maroon/images/img-38.jpg" data-retina="images/img-38-retina.jpg" alt="John Doe" class="imgframe alignleft" >
                                        <div class="team-sidebar-content">
                                            <h4><a href="#">John Doe</a></h4>
                                            <h5>Architect Lecturer</h5>
                                            <p class="team-sidebar-social">
                                                <a href="http://www.facebook.com/" class="icon-facebook-team">Facebook</a> <a href="http://www.twitter.com/" class="icon-twitter-team">Twitter</a>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <img src="http://kepelaminan.com/template/schoolfun/maroon/images/img-39.jpg" data-retina="images/img-39-retina.jpg" alt="John Doe" class="imgframe alignleft" >
                                        <div class="team-sidebar-content">
                                            <h4><a href="#">Jane Applegate</a></h4>
                                            <h5>Editor in Chief</h5>
                                            <p class="team-sidebar-social">
                                                <a href="http://www.twitter.com/" class="icon-twitter-team">Twitter</a> <a href="http://plus.google.com/" class="icon-gplus-team">Gplus</a> <a href="http://linkedin.com/" class="icon-linkedin-team">Linkedin</a>
                                            </p>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <img src="http://kepelaminan.com/template/schoolfun/maroon/images/img-38.jpg" data-retina="images/img-38-retina.jpg" alt="John Doe" class="imgframe alignleft" >
                                        <div class="team-sidebar-content">
                                            <h4><a href="#">John Doe</a></h4>
                                            <h5>Architect Lecturer</h5>
                                            <p class="team-sidebar-social">
                                                <a href="http://www.facebook.com/" class="icon-facebook-team">Facebook</a> <a href="http://www.twitter.com/" class="icon-twitter-team">Twitter</a> <a href="http://plus.google.com/" class="icon-gplus-team">Gplus</a> <a href="http://linkedin.com/" class="icon-linkedin-team">Linkedin</a>
                                            </p>
                                        </div>
                                    </li>
                                </ul>       
                            </div>
                            <div class="ui-tabs-panel" id="panel2">
                                <div class="flickr">
                                <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=6&amp;display=latest&amp;&amp;layout=h&amp;source=user&amp;user=71168470@N08&amp;size=t"></script> 
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>

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
                                        </div>
                                    </li>
                                </ul>
                            <a href="#" class="button-more">More Event</a>
                        </div>
                    </aside>
            </div>
        </div>
    </div>

@endsection
