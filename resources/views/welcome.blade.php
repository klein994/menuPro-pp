@extends('layouts.plantilla')

@section('contenido')
    <style>
        /****************slider**************/
        #myCarousel .carousel-item .mask {
            padding: 30px;
            height: 100%;
            width: 100%;
            background-attachment: fixed;

        }

        #myCarousel h4 {
            font-size: 50px;
            margin-bottom: 15px;
            color: #FFF;
            line-height: 100%;
            letter-spacing: 0.5px;
            font-weight: 600;
        }
        @media (max-width: 767px) {
            #myCarousel h4{
                font-size: 30px;
            }

        }

        #myCarousel p {
            font-size: 18px;
            margin-bottom: 15px;
            color: #d5d5d5;
        }

        #myCarousel .carousel-item a {
            background: #F47735;
            font-size: 14px;
            color: #FFF;
            padding: 13px 32px;
            display: inline-block;
        }

        #myCarousel .carousel-item a:hover {
            background: #394fa2;
            text-decoration: none;
        }

        #myCarousel .carousel-item h4 {
            -webkit-animation-name: fadeInLeft;
            animation-name: fadeInLeft;
        }

        #myCarousel .carousel-item p {
            -webkit-animation-name: slideInRight;
            animation-name: slideInRight;
        }

        #myCarousel .carousel-item a {
            -webkit-animation-name: fadeInUp;
            animation-name: fadeInUp;
        }

        #myCarousel .carousel-item .mask img {
            -webkit-animation-name: slideInRight;
            animation-name: slideInRight;
            display: block;
            height: auto;
            max-width: 100%;
        }

        #myCarousel h4, #myCarousel p, #myCarousel a, #myCarousel .carousel-item .mask img {
            -webkit-animation-duration: 1s;
            animation-duration: 1.2s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both;
        }

        #myCarousel .container {
            max-width: 100%;
        }

        #myCarousel .carousel-item {
            height: 100%;
            height: 500px;
            top: 110px;
        }

        #myCarousel {
            position: relative;
            z-index: 0;
            background: rgb(255, 255, 255);
            background: radial-gradient(circle, rgba(255, 255, 255, 1) 0%, rgba(156, 39, 176, 1) 51%) center center no-repeat;
            background-size: cover;
        }


        .carousel-fade .carousel-item {
            opacity: 0;
            -webkit-transition-duration: .6s;
            transition-duration: .6s;
            -webkit-transition-property: opacity;
            transition-property: opacity
        }

        .carousel-fade .carousel-item-next.carousel-item-left, .carousel-fade .carousel-item-prev.carousel-item-right, .carousel-fade .carousel-item.active {
            opacity: 1
        }

        .carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-right.active {
            opacity: 0
        }

        .carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-next, .carousel-fade .carousel-item-prev, .carousel-fade .carousel-item-prev.active, .carousel-fade .carousel-item.active {
            -webkit-transform: translateX(0);
            -ms-transform: translateX(0);
            transform: translateX(0)
        }

        @supports (transform-style:preserve-3d) {
            .carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-next, .carousel-fade .carousel-item-prev, .carousel-fade .carousel-item-prev.active, .carousel-fade .carousel-item.active {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
        }

        .carousel-fade .carousel-item-left.active, .carousel-fade .carousel-item-next, .carousel-fade .carousel-item-prev, .carousel-fade .carousel-item-prev.active, .carousel-fade .carousel-item.active {
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }


        @-webkit-keyframes fadeInLeft {
            from {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
            }

            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
            }

            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @-webkit-keyframes fadeInUp {
            from {
                opacity: 0;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
            }

            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
            }

            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @-webkit-keyframes slideInRight {
            from {
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0);
                visibility: visible;
            }

            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes slideInRight {
            from {
                -webkit-transform: translate3d(100%, 0, 0);
                transform: translate3d(100%, 0, 0);
                visibility: visible;
            }

            to {
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }



        /********************fin de slider************************/
        .grid-container {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            grid-template-rows: 1fr 1fr 1fr;
            gap: 10px 10px;
            grid-template-areas: "pepe pepe pepe2 pepe3" "pepe6 pepe4 pepe4 pepe3" "pepe8 pepe7 pepe5 pepe5";
        }

        .pepe {
            grid-area: pepe;
            background-image: url("./assets/img/slider/bg3.jpg");
        }

        .pepe2 {
            grid-area: pepe2;
            background-image: url("./assets/img/slider/bg3.jpg");
        }

        .pepe3 {
            grid-area: pepe3;
            background-image: url("./assets/img/slider/bg3.jpg");
        }

        .pepe4 {
            grid-area: pepe4;
            background-image: url("./assets/img/slider/bg3.jpg");
        }

        .pepe5 {
            grid-area: pepe5;
            background-image: url("./assets/img/slider/bg3.jpg");
        }

        .pepe6 {
            grid-area: pepe6;
            background-image: url("./assets/img/slider/bg3.jpg");
        }

        .pepe7 {
            grid-area: pepe7;
            background-image: url("./assets/img/slider/bg3.jpg");
        }

        .pepe8 {
            grid-area: pepe8;
            background-image: url("./assets/img/slider/bg3.jpg");
        }

    </style>
    <section style="position: relative;margin: auto;">
        <div class="section" id="carousel" style="padding: 0; margin: 0">
            <div class="principal">
                <div class="row" style="margin: 0">

                    <!-- Carousel Card -->
                    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="mask flex-center">

                                    <div class="row align-items-center">
                                        <div class="col-md-6 col-12 order-md-1 order-2">
                                            <h4>Present your <br>
                                                awesome product</h4>
                                            <p></p>
                                            <a href="#">BUY NOW</a></div>
                                        <div class="col-md-6 col-12 order-md-2 order-1"><img style=""
                                                src="./assets/img/slider/bg.jpg" class="mx-auto rounded" alt="slide"></div>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="mask flex-center">

                                    <div class="row align-items-center">
                                        <div class="col-md-6 col-12 order-md-1 order-2">
                                            <h4>Present your <br>
                                                awesome product</h4>
                                            <p></p>
                                            <a href="#">BUY NOW</a></div>
                                        <div class="col-md-6 col-12 order-md-2 order-1"><img
                                                src="./assets/img/slider/bg2.jpg" class="mx-auto rounded" alt="slide"></div>
                                    </div>

                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="mask flex-center">

                                    <div class="row align-items-center">
                                        <div class="col-md-6 col-12 order-md-1 order-2">
                                            <h4>Present your <br>
                                                awesome product</h4>
                                            <p></p>
                                            <a href="#">BUY NOW</a></div>
                                        <div class="col-md-6 col-12 order-md-2 order-1"><img
                                                src="./assets/img/slider/bg3.jpg" class="mx-auto rounded" alt="slide"></div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    {{--                        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a> </div>--}}
                    <!--slide end-->
                    </div>
                </div>
            </div>
    </section>
    <main class="container bg-white">

        <div class="section " style="padding: 0">
            <div class="container">
                <!--                nav tabs	             -->
                <div id="nav-tabs">

                    <div class="row">
                        <div class="col-md-12">

                            <div class="card card-nav-tabs" style="margin-top: -20px">

                                <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                                <div class="nav-tabs-navigation" style="top: -20px;position: relative;">
                                    <div class="nav-tabs-wrapper">
                                        <ul class="nav nav-pills nav-pills-icons" role="tablist">
                                            <!--
                                                            color-classes: "nav-pills-primary", "nav-pills-info", "nav-pills-success", "nav-pills-warning","nav-pills-danger"
                                                        -->
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#dashboard-1" role="tab"
                                                   data-toggle="tab">
                                                    <i class="material-icons">dashboard</i>
                                                    Categorías
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link " href="#schedule-1" role="tab"
                                                   data-toggle="tab">
                                                    <i class="material-icons">schedule</i>
                                                    Promos
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#tasks-1" role="tab" data-toggle="tab">
                                                    <i class="material-icons">list</i>
                                                    Especialidad
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="card-body ">
                                    <div class="tab-content text-center">
                                        <div class="tab-pane active" id="dashboard-1">
                                            <div class="grid-container" style="color: white">
                                                <div class="pepe"><i style="font-size: 50px" class="material-icons">grade</i>
                                                    <p>pepe</p></div>
                                                <div class="pepe2"><i style="font-size: 50px" class="material-icons">local_bar</i>
                                                    <p>pepe</p></div>
                                                <div class="pepe3"><i style="font-size: 50px" class="material-icons">local_dining</i>
                                                    <p>pepe</p></div>
                                                <div class="pepe4"><i style="font-size: 50px" class="material-icons">room_service</i>
                                                    <p>pepe</p></div>
                                                <div class="pepe5"><i style="font-size: 50px" class="material-icons">restaurant</i>
                                                    <p>pepe</p></div>
                                                <div class="pepe6"><i style="font-size: 50px" class="material-icons">ramen_dining</i>
                                                    <p>pepe</p></div>
                                                <div class="pepe7"><i style="font-size: 50px" class="material-icons">fastfood</i>
                                                    <p>pepe</p></div>
                                                <div class="pepe8"><i style="font-size: 50px" class="material-icons">dinner_dining</i>
                                                    <p>pepe</p></div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="schedule-1">
                                            <p> I think that&#x2019;s a responsibility that I have, to push
                                                possibilities, to show people, this is the level that things could be
                                                at. I will be the leader of a company that ends up being worth billions
                                                of dollars, because I got the answers. I understand culture. I am the
                                                nucleus. I think that&#x2019;s a responsibility that I have, to push
                                                possibilities, to show people, this is the level that things could be
                                                at.</p>
                                        </div>
                                        <div class="tab-pane" id="tasks-1">
                                            <p>I think that&#x2019;s a responsibility that I have, to push
                                                possibilities, to show people, this is the level that things could be
                                                at. So when you get something that has the name Kanye West on it, it&#x2019;s
                                                supposed to be pushing the furthest possibilities. I will be the leader
                                                of a company that ends up being worth billions of dollars, because I got
                                                the answers. I understand culture. I am the nucleus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Tabs with icons on Card -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="section " style="padding: 0">
            <div class="container">

                <div class="card " style="margin-top:0">
                    <div class="col-md-12">
                        <h1>hola</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="section " style="padding: 0">
            <div class="container">

                <div class="card " style="margin-top:0">
                    <div class="col-md-12">
                        <h1>hola</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="section " style="padding: 0">
            <div class="container">

                <div class="card " style="margin-top:0">
                    <div class="col-md-12">
                        <h1>hola</h1>
                    </div>
                </div>
            </div>
        </div>

        <!-- Classic Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="card card-login m-0">
                        <form class="form">
                            <div class="card-header card-header-primary text-center">
                                <h4 class="card-title">Login</h4>
                                <div class="social-line">
                                    <a href="javascript:;" class="btn btn-just-icon btn-link">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                    <a href="javascript:;" class="btn btn-just-icon btn-link">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="javascript:;" class="btn btn-just-icon btn-link">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <p class="description text-center">Or Be Classical</p>
                            <div class="card-body">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">face</i>
                      </span>
                                    </div>
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">mail</i>
                      </span>
                                    </div>
                                    <input type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"> <i
                                                class="material-icons">lock_outline</i> </span>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Password"
                                           autocomplete="">
                                </div>
                            </div>
                            <div class="footer text-center">
                                <a href="javascript:;" class="btn btn-primary btn-link btn-wd btn-lg">Get
                                    Started</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </main>


@endsection
