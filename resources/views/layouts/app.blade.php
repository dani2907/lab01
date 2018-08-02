<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- Mirrored from kepelaminan.com/template/schoolfun/maroon/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Jul 2018 01:43:05 GMT -->
<head>
  <meta charset="utf-8" />
  <title>dSchool - Study and Fun</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />  
  <meta name="description" content="Website Description" />
  <meta name="keywords" content="Website Keywords" />
  <link rel="stylesheet" type="text/css" media="all" href="{{asset('university/style/style.css')}}" />
  <link rel="stylesheet" type="text/css" media="all" href="{{asset('university/style/prettyPhoto.css')}}" />
  <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,300,900' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Nunito:400,300,700' rel='stylesheet' type='text/css' />
  <link rel="stylesheet" type="text/css" media="all" href="{{asset('university/style/stylemobile.css')}}" />
<!--     <link rel="stylesheet" type="text/css" media="all" href="bootstrap/css/bootstrap.min.css" />
 -->  <!-- <link rel="stylesheet" type="text/css" media="all" href="style/mobilenavigation.css" /> -->
  <script src="{{asset('university/script/modernizr.js')}}" type="text/javascript"></script>
  <script src="{{asset('university/script/jquery.js')}}" type="text/javascript"></script>
    <script src="{{asset('university/script/jquery-ui.js')}}" type="text/javascript"></script>
  <script src="{{asset('university/script/jquery.flexslider.js')}}" type="text/javascript"></script>
  <script src="{{asset('university/script/jquery.prettyPhoto.js')}}" type="text/javascript"></script>
  <script src="{{asset('university/script/jquery.retina.js')}}" type="text/javascript"></script>
<!--     <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
 -->  

 @yield('script')

  <header id="main-header" class="clearfix">
        <div id="header-full" class="clearfix">
            <div id="header" class="clearfix">
                <a href="#nav" class="open-menu">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
                <a href="#" id="logo"><img src="{{asset('university/images/logo.png')}}" data-retina="{{asset('university/images/logo-retina.png')}}" alt="School Fun - WordPress Theme" /></a>
                <aside id="header-content">
                    <form method="post" action="#" id="searchform">
                        <div>
                            <input type="text" name="search" class="input" />
                            <input type="submit" name="submitsearch" class="button" value="Search" />
                        </div>
                    </form>
                    <ul id="nav-header">
                        @guest
                        <li>
                            <a href="{{url('/login')}}">Login</a>
                        </li>
                        <li><a href="#">Webmail</a></li>
                        <li><a href="#">Student</a></li>
                        @else
                        <li>
                            <a href="#">{{ Auth::user()->name }}</a>                            
                        </li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                            </form>
                        </li>
                        @endguest
                    </ul>
                    <h3 id="slogan">"Fun. Study. Research. Innovate. Play"</h3>
                </aside>
            </div>
        </div>
        <nav id="nav" class="clearfix">
                    <a href="#" class="close-menu-big">Close</a>
                    <div id="nav-container">
                        <a href="#" class="close-menu">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <ul id="nav-main">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('/berita') }}">Berita</a></li>
                            <li><a href="{{ url('/penguman') }}">Penguman</a></li>
                            <li><a href="{{ url('/agenda') }}">Agenda</a></li>
                            <li><a href="{{ url('/kkp') }}">KKP</a></li>
                            <li><a href="{{ url('/skripsi') }}">Skripsi</a></li>
                            @auth
                            <li>
                                @if (Auth::user()->status == 1)
                                <a href="#" data-toggle="dropdown"> Dosen </a>
                                <ul>
                                    <li><a href="{{ url('/pembimbingkkp') }}">Daftar KKP Pembimbing</a></li>
                                    <li><a href="{{ url('/pengujikkp') }}">Daftar KKP Penguji</a></li>
                                    <li><a href="{{ url('/pembimbingskripsi') }}">Daftar Skripsi Pembimbing</a></li>
                                    <li><a href="{{ url('/pengujiskripsi') }}">Daftar Skripsi Penguji</a></li>
                                </ul>
                                @elseif (Auth::user()->status == 2)
                                <a href="#" data-toggle="dropdown"> Mahasiswa </a>
                                <ul>
                                    <li><a href="{{ url('/registrasikkp') }}/{{Auth::user()->id}}">Registrasi KKP</a></li>
                                    <li><a href="{{ url('/kegiatankkp') }}">Kegiatan KKP</a></li>
                                    <li><a href="{{ url('/registrasiskripsi') }}">Registrasi Skripsi</a></li>
                                    <li><a href="{{ url('/detailskripsi') }}">Detail Skripsi</a></li>
                                </ul>
                                @elseif (Auth::user()->status == 3)
                                <a href="{{ url('/homeadmin') }}"> Admin </a>
                                @endif
                            </li>
                            @endauth                
                        </ul>
                    </div>
                </nav>
    </header>
<!-- ------------------------------------------------- -->
    @yield('content')
<!-- ------------------------------------------------- -->
    <footer id="main-footer" style="background:url({{asset('university/images/img-8.jpg')}}) no-repeat 50% 0;">
        <div id="blur-top">
            <a href="#" id="link-back-top">Back to Top</a>
        </div>
        <div id="slogan-footer">
            <h4>Leading Together <span>for</span> Brighter Future</h4>
        </div>
        <div id="footer-content" class="clearfix">
            <div id="footer-container">
                <div id="sidebar-footer-left" class="sidebar-footer">
                    <aside class="widget-container">
                        <div class="widget-wrapper clearfix">
                            <h3 class="widget-title">Quick Navigation</h3>
                            <ul>
                                <li><a href="#">Research, Library and Publication</a></li>
                                <li><a href="#">Alumni Center</a></li>
                                <li><a href="#">Academic Community</a></li>
                                <li><a href="#">Extra Curricullum and Student Event</a></li>
                                <li><a href="#">Newsroom, Article and Event</a></li>
                            </ul>
                        </div>
                    </aside>
                </div>
                <div id="sidebar-footer-middle" class="sidebar-footer">
                    <aside class="widget-container">
                        <div class="widget-wrapper clearfix">
                            <h3 class="widget-title">Campus Location</h3>   
                            <article class="text-widget ">
                     <iframe class="map-area" src="http://maps.google.com/?ie=UTF8&amp;ll=37.055177,-95.668945&amp;spn=11.79095,12.150879&amp;t=m&amp;z=6&amp;output=embed"></iframe><br />                                   </article>
                        </div>
                    </aside>
                </div>
                <article id="footer-address" class="clearfix">
                    <h3 id="title-footer-address"><span>Contact School Fun</span></h3>
                    <p><strong>You can contact us via our hotline phone +62 4567 88987 and the Medical Campus is +62 4567 5446</strong></p>
                    <p>Vivamus enim massa, egestas quis viverra ut, adipiscing eget metus. Etiam neque orci, cursus vitae sem in, rhoncus vestibulum dolor.</p>
                    <ul id="list-social" class="clearfix">
                        <li id="icon-facebook"><a href="#">Facebook</a></li>
                        <li id="icon-twitter"><a href="#">Twitter</a></li>
                        <li id="icon-gplus"><a href="#">Google Plus</a></li>
                        <li id="icon-linkedin"><a href="#">Linkedin</a></li>
                        <li id="icon-youtube"><a href="#">Youtube</a></li>
                        <li id="icon-flickr" class="last"><a href="#">Flickr</a></li>
                    </ul>
                </article>
            </div>
        </div>
        <div id="footer-copyright">
            <div id="footer-copyright-content" class="clearfix">
                <a href="#" id="logo-footer"><img src="{{asset('university/images/logo-footer.png')}}" data-retina="{{asset('university/images/logo-footer-retina.png')}}" alt="School Fun - University" /></a>
                <p id="text-address">P Sherman, 42 Wallaby Way, Australia</p>
                <ul id="nav-footer" class="clearfix">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Terms</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
                <p id="text-copyright">Copyright &copy; 2013. All rights reserved</p>
            </div>
        </div>
    </footer>
</body>

<!-- Mirrored from kepelaminan.com/template/schoolfun/maroon/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 24 Jul 2018 01:43:27 GMT -->
</html>