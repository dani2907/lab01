@extends('layouts.app')

@section('content')
<div class="box col-md-9">

    <ul class="breadcrumb">
        <li>
            <a href="{{ url('/') }}">Home</a>
        </li>
    </ul>        

    <div style="background-color: #eee;" class="box-inner">
       <div class="box-content">
            <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel1" data-slide-to="1"></li>
                    <li data-target="#myCarousel1" data-slide-to="2"></li>       
                </ol>

                <!-- deklarasi carousel -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <a href="#1">
                            <div class="col-md-4">
                                <img style="width: 100%;height: 200px;" src="https://raw.githubusercontent.com/usmanhalalit/charisma/1.x/img/gallery/thumbs/4.jpg" alt="www.malasngoding.com">
                            </div>
                            <div class="col-md-8">
                                <h3>POPULER NEWS 1</h3>

                                <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis
                                    dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut
                                    id elit.</p>

                                <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non
                                    commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio
                                    dui.</p>                                
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#2">                                
                            <div class="col-md-4">
                                <img style="width: 100%;height: 200px;" src="https://raw.githubusercontent.com/usmanhalalit/charisma/1.x/img/gallery/thumbs/4.jpg" alt="www.malasngoding.com">
                            </div>
                            <div class="col-md-8">
                                    <h3>POPULER NEWS 2</h3>

                                    <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis
                                        dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut
                                        id elit.</p>

                                    <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non
                                        commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio
                                        dui.</p>
                            </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="#3">                                
                            <div class="col-md-4">
                                <img style="width: 100%;height: 200px;" src="https://raw.githubusercontent.com/usmanhalalit/charisma/1.x/img/gallery/thumbs/5.jpg" alt="www.malasngoding.com">
                            </div>
                            <div class="col-md-8">
                                    <h3>POPULER NEWS 3</h3>

                                    <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis
                                        dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut
                                        id elit.</p>

                                    <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non
                                        commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio
                                        dui.</p>
                            </div>
                        </a>
                    </div>              
                </div>

                <!-- membuat panah next dan previous -->
                <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <br>
    <div class="box-inner">
       <div class="box-content">
 
            <div class="page-header">
                <h1>TOP NEWS
                    <small>Headings, paragraphs, lists, and other inline type elements</small>
                </h1>
            </div>
            <div class="row ">
                <div class="col-md-4">
                    <h3>Example body text</h3>

                    <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis
                        dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut
                        id elit.</p>

                    <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non
                        commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio
                        dui.</p>
                </div>
                <div class="col-md-4">
                    <h3>Example body text</h3>

                    <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis
                        dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut
                        id elit.</p>

                    <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non
                        commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio
                        dui.</p>
                </div>
                <div class="col-md-4">
                    <h3>Example body text</h3>

                    <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis
                        dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula ut
                        id elit.</p>

                    <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non
                        commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec sed odio
                        dui.</p>
                </div>
            </div>
            <!--/row -->

        </div>
    </div>
    <br>

    <div class="box-inner">
        <div class="box-content">
            <div class="row">
                <div class="col-md-12">
                    <h3>NEW NEWS</h3>

                    <div class="row">
                        <div class="col-md-6">
                            <p>Default blockquotes are styled as such:</p>
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a
                                    ante venenatis.</p>
                                <small>Someone famous in <cite title="">Body of work</cite></small>
                            </blockquote>
                        </div>
                        <div class="col-md-6">
                            <p>Default blockquotes are styled as such:</p>
                            <blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a
                                    ante venenatis.</p>
                                <small>Someone famous in <cite title="">Body of work</cite></small>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>

</div>

@endsection
