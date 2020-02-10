@extends('layouts.master')

@section('content')

    <!-- CARORSEL STARTS -->
    <div id="carousel-banner" class="carousel slide">

        <!-- Indicators -->
        <!--  <ul class="carousel-indicators">
           <li data-target="#carousel-banner" data-slide-to="0" class="active"></li>
           <li data-target="#carousel-banner" data-slide-to="1"></li>
           <li data-target="#carousel-banner" data-slide-to="2"></li>
         </ul> -->
        <!-- The slideshow -->
        <div class="carousel-inner">
        @foreach( $carousels as $carousel)
            <div class="carousel-item {{ $loop->first ? 'active' : ''}}" >
                <img src="{{ $carousel->image}}" alt="{{ $carousel->title  }}" class="img-fluid">
                <div class="carousel-caption">
                    <h1>{{ $carousel->title }}</h1>
                    <p>{{  $carousel->description  }}</p>
                    <a href="#"><button type="button" class="btn btn-warning">READ MORE</button></a>
                </div>
            </div>
        @endforeach    
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#carousel-banner" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a> 
        <a class="carousel-control-next" href="#carousel-banner" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
    </div>
    <!-- CAROUSEL ENDS HERE -->


    <!-- section parts starts -->

    <div class="container">
        <div class="row our-links">
            <div class="col-md-4 table1">
                <div class="row">
                    <div class="col-md-3">
                        <img src="http://josephschool.edu.np/images/apply-online-ico.png">
                    </div>
                    <div class="col-md-9">
                        <h3>APPLY ONLINE</h3><p>Click the button to apply online!</p>
                        <button type="button" class="btn btn-warning">APPLY</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 table2">
                <div class="row">
                    <div class="col-md-3">
                        <img src="http://josephschool.edu.np/images/prospects-ico.png">
                    </div>
                    <div class="col-md-9">
                        <h3>PROSPECTS</h3><p>Click the button to apply online!</p>
                        <button type="button" class="btn btn-primary">DOWNLOAD</button>
                    </div>
                </div>
            </div>

            <div class="col-md-4 table3">
                <div class="row">
                    <div class="col-md-3">
                        <img src="http://josephschool.edu.np/images/calendar.png">
                    </div>
                    <div class="col-md-9">
                        <h3>APPLY ONLINE</h3><p>Click the button to apply online!</p>
                        <button type="button" class="btn btn-warning">APPLY</button>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!-- section parts ends here -->

    <!-- message section starts here -->

    <div class="container">
        <div class="row message-sec">
            <div class="col-lg-5">
                <img src="http://josephschool.edu.np/images/about-video.jpg" width="100%">
            </div>
            <div class="col-lg-7">
                <h6>MESSAGE FROM THE PRINCIPAL'S DESK</h6>
                <h1>SURYA BAHAHUR ADHIKARI</h1>
                <p>Our successful period of more than one decade has proved our slogan "Be Good, Do Good" and it is a subject of pride, glory and gratification.Joseph High School & I. Joseph Public School has been launched with a revelation to convey quality education to a multicultural group of students in pluralism.It predominantly focuses on education, enthusiasm, devotion and discipline. The hallmark is iteself the learning experience we provide which has consequently rendered an honor throughout the nation. Joseph High School has been awarded with National prize of 2066-67 as a renowned educational institution in Nepal by the Ministry of Education and Sports.</p>

            </div>
        </div>

        <div class="row message-section">
            <div class="col-lg-12">
                <p>Our successful period of more than one decade has proved our slogan "Be Good, Do Good" and it is a subject of pride, glory and gratification.Joseph High School & I. Joseph Public School has been launched with a revelation to convey quality education to a multicultural group of students in pluralism.It predominantly focuses on education, enthusiasm, devotion and discipline. The hallmark is iteself the learning experience we provide which has consequently rendered an honor throughout the nation. Joseph High School has been awarded with National prize of 2066-67 as a renowned educational institution in Nepal by the Ministry of Education and Sports.</p>
            </div>
        </div>

        <button type="button" class="btn">KNOW MORE</button><i class="fa fa-arrow-right"></i>
    </div>
    <!-- message section ends here -->



    <!-- our courses starts here -->


    <div class="courses">
        <div class="container">
            <p class="text-secondary mb-0">UNIQUE FEATURES OF OUR PROGRAMS</p>
            <h1 class="text-light">WHAT DO YOU WANT TO STUDY?</h1>
        </div>
    </div>

    <!-- our courses ends here -->

    <!-- our importance starts here -->

    <div class="container our-importance">
        <div class="row">
        @foreach($facalities as $facility)
            <div class="col-md-4 box">
                <img src="{{$facility->image}}" alt="{{$facility->title}}">
                <h4>{{$facility->name}}</h4>
                <p>{{$facility->description}}</p>
            </div>
            @endforeach
        </div>
    </div>
    <!-- our importance ends here -->




    <!-- How to Study starts here -->
    <div class="study-section">
        <div class="container">
            <p class="text-secondary mb-0">THERE ARE MORE WAYS TO EDUCATE</p>
            <h1 class="text">HOW DO YOU WANT TO PROCEED?</h1>
            <ul class="row study-images">

                <li class="col-md-4 my-2">
                    <img src="http://josephschool.edu.np/images/how-study-img1.jpg" class="img-fluid">
                    <div class="overly">
                        <div class="comment">
                            <h3>Extra Coaching Classes</h3>
                            <p>Extra Coaching Classes as per your choice of subject</p>
                        </div>
                    </div>
                </li>

                <li class="col-md-4 my-2">
                    <img src="http://josephschool.edu.np/images/how-study-img1.jpg" class="img-fluid">
                    <div class="overly">
                        <div class="comment">
                            <h3>Extra Coaching Classes</h3>
                            <p>Extra Coaching Classes as per your choice of subject</p>
                        </div>
                    </div>
                </li>

                <li class="col-md-4 my-2">
                    <img src="http://josephschool.edu.np/images/how-study-img1.jpg" class="img-fluid">
                    <div class="overly">
                        <div class="comment">
                            <h3>Extra Coaching Classes</h3>
                            <p>Extra Coaching Classes as per your choice of subject</p>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
    </div>


    <!-- How to Study Section ends here-->



    <!-- why choose starts here -->

    <section class="why-choose">
        <div class="container">
            <p class="mb-0">THE NUMBERS SAY IT ALL</p>
            <h1>WHY CHOOSE US</h1>
            <div class="row">
                <div class="col-md-3 icons-box">
                    <img src="https://flaticons.net/gd/makefg.php?i=icons/Application/Agreement-01.png&r=255&g=255&b=255">
                    <h2>100%</h2>
                    <p>CERTIFIED COURSES</p>
                </div>

                <div class="col-md-3 icons-box">
                    <img src="https://flaticons.net/gd/makefg.php?i=icons/Application/Agreement-01.png&r=255&g=255&b=255">
                    <h2>100%</h2>
                    <p>CERTIFIED COURSES</p>
                </div>

                <div class="col-md-3 icons-box">
                    <img src="https://flaticons.net/gd/makefg.php?i=icons/Application/Agreement-01.png&r=255&g=255&b=255">
                    <h2>100%</h2>
                    <p>CERTIFIED COURSES</p>
                </div>

                <div class="col-md-3 icons-box">
                    <img src="https://flaticons.net/gd/makefg.php?i=icons/Application/Agreement-01.png&r=255&g=255&b=255">
                    <h2>100%</h2>
                    <p>CERTIFIED COURSES</p>
                </div>

            </div>

        </div>
    </section>


    <!-- why choose ends here -->

    <!-- news and events starts here -->

    <div class="container">
        <div class="news-events">

            <div class="row">
                <div class="col-md-4">
                    <div class="thumbnail">
                        <a href="/w3images/lights.jpg" target="_blank">
                            <img src="http://josephschool.edu.np/images/new-event-img5.jpg" class="img-fluid" >
                            <div class="caption">
                                <h2>एसकेजी र कक्षा आठका विद्यार्थीहरु भए दीक्षित</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>11 Chaitra 2075</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Graduation News</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <a href="/w3images/nature.jpg" target="_blank">
                            <img src="http://josephschool.edu.np/images/new-event-img5.jpg" class="img-fluid" >
                            <div class="caption">
                                <h2>एसकेजी र कक्षा आठका विद्यार्थीहरु भए दीक्षित</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>11 Chaitra 2075</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Graduation News</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="thumbnail">
                        <a href="/w3images/fjords.jpg" target="_blank">
                            <img src="http://josephschool.edu.np/images/new-event-img5.jpg" class="img-fluid" >
                            <div class="caption">
                                <h2>एसकेजी र कक्षा आठका विद्यार्थीहरु भए दीक्षित</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p>11 Chaitra 2075</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Graduation News</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>



        </div>


    </div>

    </div>


    <!-- news and events ends here -->

    <!-- school tours starts here -->


    <div class="container-fluid school-tours">
        <p class="mb-0">OUR SCHOOL HAVE A LOT TO OFFER FOR OUR STUDENTS</p>
        <h1>TAKE A SCHOOL TOUR</h1>

        <div class="row mt-40">
            <div class="col-md-3 col-sm-6 pic">
                <div class="box1">
                    <img src="http://josephschool.edu.np/images/tour-lg1.jpg" alt="" class="img-fluid" width="100%">
                    <h3 class="title">BUS FACILITY</h3>
                    <ul class="icon">
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 pic">
                <div class="box1">
                    <img src="http://josephschool.edu.np/images/tour-lg1.jpg" alt="" class="img-fluid" width="100%">
                    <h3 class="title">BUS FACILITY</h3>
                    <ul class="icon">
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 pic">
                <div class="box1">
                    <img src="http://josephschool.edu.np/images/tour-lg1.jpg" alt="" class="img-fluid" width="100%">
                    <h3 class="title">BUS FACILITY</h3>
                    <ul class="icon">
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 pic">
                <div class="box1">
                    <img src="http://josephschool.edu.np/images/tour-lg1.jpg" alt="" class="img-fluid" width="100%">
                    <h3 class="title">BUS FACILITY</h3>
                    <ul class="icon">
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row mt-40">
            <div class="col-md-3 col-sm-6 pic">
                <div class="box1">
                    <img src="http://josephschool.edu.np/images/tour-lg1.jpg" alt="" class="img-fluid" width="100%">
                    <h3 class="title">BUS FACILITY</h3>
                    <ul class="icon">
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 pic">
                <div class="box1">
                    <img src="http://josephschool.edu.np/images/tour-lg1.jpg" alt="" class="img-fluid" width="100%">
                    <h3 class="title">BUS FACILITY</h3>
                    <ul class="icon">
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 pic">
                <div class="box1">
                    <img src="http://josephschool.edu.np/images/tour-lg1.jpg" alt="" class="img-fluid" width="100%">
                    <h3 class="title">BUS FACILITY</h3>
                    <ul class="icon">
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 pic">
                <div class="box1">
                    <img src="http://josephschool.edu.np/images/tour-lg1.jpg" alt="" class="img-fluid" width="100%">
                    <h3 class="title">BUS FACILITY</h3>
                    <ul class="icon">
                        <li><a href="#"><i class="fa fa-search"></i></a></li>
                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row logo">

        <div class="col-md-2">
            <img src="http://josephschool.edu.np/images/logo1.jpg" class="img-fluid" >
        </div>
        <div class="col-md-2">
            <img src="http://josephschool.edu.np/images/logo2.jpg" class="img-fluid" >
        </div>
        <div class="col-md-2">
            <img src="http://josephschool.edu.np/images/logo3.jpg" class="img-fluid" >
        </div>
        <div class="col-md-2">
            <img src="http://josephschool.edu.np/images/logo4.jpg" class="img-fluid" >
        </div>
        <div class="col-md-2">
            <img src="http://josephschool.edu.np/images/logo1.jpg" class="img-fluid" >
        </div>
        <div class="col-md-2">
            <img src="http://josephschool.edu.np/images/logo2.jpg" class="img-fluid" >
        </div>

    </div>

    <!-- school tour ends here -->


    <!-- testimonials starts here -->

    <div class="card col-md-6 mt-5 mb-5">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="100000">
            <div class="w-100 carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="carousel-caption">
                        <div class="row">
                        @foreach($testimonials as $testimonial)
                            <div class="col-sm-3">
                                <img src="{{$testimonial->image}}" width="200px" height="200px" alt="{{$testimonial->name}}" class="rounded-circle img-fluid"/>
                            </div>
                            <div class="col-sm-9">
                                <h3>{{$testimonial->name}}</h3>
                                <small>{{$testimonial->message}}</small>
                                <small class="smallest mute">- {{$testimonial->name}}</small>
                            </div>
                        @endforeach
                        </div>
                    </div>
                </div>
                <!-- <div class="carousel-item">
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="http://josephschool.edu.np/images/testimonial-thumb1.jpg" width="200px" height="200px" alt="" class="rounded-circle img-fluid">
                            </div>
                            <div class="col-sm-9">
                                <h3>You will love it.</h3>
                                <small>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</small>
                                <small class="smallest mute">- Yayo Dudemous</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-caption">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="http://josephschool.edu.np/images/testimonial-thumb1.jpg" width="200px" height="200px" alt="" class="rounded-circle img-fluid">
                            </div>
                            <div class="col-sm-9">
                                <h3>Velvet pouch!</h3>
                                <small>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</small>
                                <small class="smallest mute">- Yayo Dudemous</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="float-right navi">
                <a class="" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon ico" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon ico" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!-- testimonial ends here -->



@endsection
