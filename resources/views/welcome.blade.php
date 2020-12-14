@extends('layouts.plantilla')

@section('contenido')
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr 1fr;
            grid-template-rows: 1fr 1fr 1fr;
            gap: 10px 10px;
            grid-template-areas:
                "pepe pepe pepe2 pepe3"
                "pepe6 pepe4 pepe4 pepe3"
                "pepe8 pepe7 pepe5 pepe5";
        }

        .pepe { grid-area: pepe;
        background-image: url("./assets/img/slider/bg3.jpg");
        }

        .pepe2 { grid-area: pepe2;        background-image: url("./assets/img/slider/bg3.jpg");
        }

        .pepe3 { grid-area: pepe3;        background-image: url("./assets/img/slider/bg3.jpg");
        }

        .pepe4 { grid-area: pepe4;         background-image: url("./assets/img/slider/bg3.jpg");
        }

        .pepe5 { grid-area: pepe5;         background-image: url("./assets/img/slider/bg3.jpg");
        }

        .pepe6 { grid-area: pepe6;         background-image: url("./assets/img/slider/bg3.jpg");
        }

        .pepe7 { grid-area: pepe7;         background-image: url("./assets/img/slider/bg3.jpg");
        }

        .pepe8 { grid-area: pepe8;         background-image: url("./assets/img/slider/bg3.jpg");
        }

    </style>
    <section style="position: relative;margin: auto;">
        <div class="section" id="carousel" style="padding: 0; margin: 0">
            <div class="principal">
                <div class="row" style="margin: 0">

                    <!-- Carousel Card -->
                    <div class="card card-raised card-carousel pplc" style="margin: 0;padding: 0;border-radius: 0;">
                        <div id="carouselExampleIndicators" class="carousel slide pplc" data-ride="carousel"
                             data-interval="3000">
                            {{--                            <ol class="carousel-indicators">--}}
                            {{--                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>--}}
                            {{--                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>--}}
                            {{--                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>--}}
                            {{--                            </ol>--}}
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="./assets/img/slider/bg.jpg" alt="First slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h4>
                                            <i class="material-icons">location_on</i>
                                            Yellowstone National Park, United States
                                        </h4>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="./assets/img/slider/bg2.jpg" alt="Second slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h4>
                                            <i class="material-icons">location_on</i>
                                            Somewhere Beyond, United States
                                        </h4>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="./assets/img/slider/bg3.jpg" alt="Third slide">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h4>
                                            <i class="material-icons">location_on</i>
                                            Yellowstone National Park, United States
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            {{--                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">--}}
                            {{--                                <i class="material-icons">keyboard_arrow_left</i>--}}
                            {{--                                <span class="sr-only">Previous</span>--}}
                            {{--                            </a>--}}
                            {{--                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">--}}
                            {{--                                <i class="material-icons">keyboard_arrow_right</i>--}}
                            {{--                                <span class="sr-only">Next</span>--}}
                            {{--                            </a>--}}
                        </div>
                    </div>
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
                                                <a class="nav-link active" href="#dashboard-1" role="tab" data-toggle="tab">
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
                                                <div class="pepe"><i style="font-size: 50px" class="material-icons">fastfoot</i><p>pepe</p></div>
                                                <div class="pepe2"><i style="font-size: 50px" class="material-icons">dashboard</i><p>pepe</p></div>
                                                <div class="pepe3"><i style="font-size: 50px" class="material-icons">dashboard</i><p>pepe</p></div>
                                                <div class="pepe4"><i style="font-size: 50px" class="material-icons">dashboard</i><p>pepe</p></div>
                                                <div class="pepe5"><i style="font-size: 50px" class="material-icons">dashboard</i><p>pepe</p></div>
                                                <div class="pepe6"><i style="font-size: 50px" class="material-icons">dashboard</i><p>pepe</p></div>
                                                <div class="pepe7"><i style="font-size: 50px" class="material-icons">dashboard</i><p>pepe</p></div>
                                                <div class="pepe8"><i style="font-size: 50px" class="material-icons">dashboard</i><p>pepe</p></div>
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
                      <span class="input-group-text"> <i class="material-icons">lock_outline</i> </span>
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
