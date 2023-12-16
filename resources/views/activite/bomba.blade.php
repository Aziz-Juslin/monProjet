<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="/img/dlog.svg" rel="icon">
    <link href="/img/dlog.svg" rel="apple-touch-icon">
    <title>{{ isset($title) ? $title  . ' | ' : '' }} dgrace</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('ble/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('ble/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body style="background-image: url('img/34.jpg');" class="">

    <div  class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center mt-5">

            <div class="col-xl-10 col-lg-12 col-md-9 my-5">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            @if(! Route::is('register'))
                            <div class="col-lg-6">
                             
                                <div class="p-5">
                                <h1 class="text-center"><img width="300" src="/img/2.png" alt=""></h1>
                                
                            </div>
                            </div>
                            
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4  mb-4 bold">Se connecter</h1>
                                    </div>
                                    @include('activite.mabe')
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="number" name="telephone" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Numéro de téléphone" required="">
                                              
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Mot de passe" required="">
                                               
                                        </div>
                                      

                                       <button type="submit" id="button" class="btn btn-primary btn-user btn-block" name="submit">CONNEXION</button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="{{route('mot_passe')}}">Mot de passe oublié ?</a>
                                    </div>
                                    <div class="text-center mt-3">
                                        <a class="small btn btn-success" href="{{route('register')}}">Créer un compte</a>
                                        
                                    </div>
                                </div>
                            </div>
                            @else
                            <div class="col-lg-12">
                            <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4  mb-4">Créer un compte</h1>
                            </div>
                            <form method="POST" action="{{ route('register') }}">
                            @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="name" class="form-control" id="exampleFirstName"
                                            placeholder="Nom d'administrateur" required="">
                                            @error('name')
                                            <span class="text-left text-muted">
                                            <span style="color: darkred;" ><small>{{ $message }}</small></span>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" value="" name="ecole" class="form-control" id="exampleLastName"
                                            placeholder="Nom de l'école" required="">
                                            @error('ecole')
                                            <span class="text-left text-muted">
                                            <span style="color: darkred;" ><small>{{ $message }}</small></span>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="number" name="telephone" class="form-control" id="exampleInputEmail"
                                        placeholder="Téléphone" required="">
                                        @error('telephone')
                                            <span class="text-left text-muted">
                                            <span style="color: darkred;" ><small>{{ $message }}</small></span>
                                            </span>
                                        @enderror
                                </div>
                                <div class="form-group">
                                <select class="form-control" name="province" id="exampleInputEmail" placeholder="Ville" required="">
                                    <option value="Kinshasa">Kinshasa</option>
                                    <option value="Matadi">Matadi</option>
                                    <option value="Lubumbashi">Lubumbashi</option>
                                    <option value="Maniema">Maniema</option>
                                    <option value="Kisantu">Kisantu</option>
                                    <option value="Luwozi">Luwozi</option>
                                    <option value="Mbanza-Ngungu">Mbanza-Ngungu</option>
                                    <option value="Kolwezi">Kolwezi</option>
                                    <option value="Goma">Goma</option>
                                    <option value="Mbuji-mayi">Mbuji-mayi</option>
                                    <option value="Kenge">Kenge</option>
                                    <option value="Kikwiti">Kikwiti</option>
                                    <option value="Nord-Kivu">Nord-Kivu</option>
                                    <option value="Sud-Kivu">Sud-Kivu</option>
                                    <option value="Boma">Boma</option>
                                    <option value="Popo">Popo</option>
                                    <option value="Muanda">Muanda</option>
                                </select>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" name="password" class="form-control "
                                            id="exampleInputPassword" placeholder="Mot de passe" required="">
                                           @error('password')
                                            <span class="text-left text-muted">
                                            <span style="color: darkred;" ><small>{{ $message }}</small></span>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="password_confirmation" class="form-control "
                                            id="exampleRepeatPassword" placeholder="Confirmer mot de passe" required="password_confirmation">
                                           @error('')
                                            <span class="text-left text-muted">
                                            <span style="color: darkred;" ><small>{{ $message }}</small></span>
                                            </span>
                                        @enderror
                                        </div>
                                </div>
                                <button type="submit" id="button" class="btn btn-primary btn-user btn-block" >CONFIRMER</button>

                            </form>
                            <hr>

                            <div class="text-center">
                                <a class="small btn btn-default" href="{{route('login')}}">Se connecter</a>
                            </div>
                        </div>
                    </div>
                    @endif
                        </div>
                        @include('activite.kitoko')
                    </div>
                </div>
                <div class="text-center">
                    <hr>
                    <small >&copy; 2022  <a>Dgrace</a></small><br>
                    <small >by  <a>Aziz-K</a></small>
                </div>
            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('ble/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('ble/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('ble/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('ble/js/sb-admin-2.min.js')}}"></script>

</body>

</html>




@extends('layouts.master2')
@section('content')
 <!--================= back wrapper Start Here =================-->
        <div class="back-wrapper">
            <div class="back-wrapper-inner">
                <!--================= Slider Section Start =================-->
                <div class="back-slider-part">
                    <div class="home-slider-part home2 owl-carousel">
                        <div class="single-slide">
                            <div class="slider-img">
                                <img class="desktop" src="web/assets/images/slider/1.jpg" alt="Slider Image 1">
                                <img class="mobile" src="web/assets/images/slider/11.jpg" alt="Slider Image 1">
                            </div>
                            <div class="container">
                                <div class="slider-content">
                                    <div class="content-part">
                                        <span class="slider-pretitle">Bienvenu sur Dgrace</span>
                                        <h2 class="slider-title">
                                            Gérer votre  <br>Ecole Autrement.
                                        </h2>
                                        <p class="slider-desc">
                                            The right mentoring relationship can be a powerful  professional <br>growth. Bark up the right tree.
                                        </p>
                                        <div class="slider-btn">
                                            <a href="{{route('login')}}" class="back-btn-border">Gérer Maintenant</a>
                                        </div>
                                    </div>
                                </div>
                            </div>                        
                        </div>
                        <div class="single-slide">
                            <div class="slider-img">
                                <img class="desktop" src="web/assets/images/slider/2.jpg" alt="Slider Image 3">
                                <img class="mobile" src="web/assets/images/slider/22.jpg" alt="Slider Image 3">
                            </div>
                            <div class="container">
                                <div class="slider-content">
                                    <div class="content-part">
                                        <span class="slider-pretitle">Bienvenu sur Dgrace</span>
                                        <h2 class="slider-title">
                                            Gérer votre  <br>Ecole Autrement.
                                        </h2>
                                        <p class="slider-desc">
                                            The right mentoring relationship can be a powerful  professional <br>growth. Bark up the right tree.
                                        </p>
                                          <div class="slider-btn">
                                            <a href="{{route('login')}}" class="back-btn-border">Gérer Maintenant</a>
                                        </div>
                                    </div>
                                </div>
                            </div>       
                        </div>
                        <div class="single-slide">
                            <div class="slider-img">
                                <img class="desktop" src="web/assets/images/slider/3.jpg" alt="Slider Image 3">
                                <img class="mobile" src="web/assets/images/slider/33.jpg" alt="Slider Image 3">
                            </div>
                            <div class="container">
                                <div class="slider-content">
                                    <div class="content-part">
                                        <span class="slider-pretitle">Bienvenu sur Dgrace</span>
                                        <h2 class="slider-title">
                                            Gérer votre  <br>Ecole Autrement.
                                        </h2>
                                        <p class="slider-desc">
                                           Vous avez pleinement la possibilité de gérer votre école de près ou de loin <br>avec fiabilité et sécurité.
                                        </p>
                                          <div class="slider-btn">
                                            <a href="{{route('login')}}" class="back-btn-border">Gérer Maintenant</a>
                                        </div>
                                    </div>
                                </div>
                            </div>      
                        </div>
                    </div>

             <!--================= Slider Section Start =================-->       
                    <div class="slider__btm__part">
                        <div class="container">
                            <div class="row">
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 g-0">
                                    <div class="hero2__nav-content hero2__nav-content-1">
                                        <h4>School Life</h4>
                                        
                                        <i class="arrow_right"></i>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 g-0">
                                    <div class="hero2__nav-content hero2__nav-content-2">
                                        <h4>Academics</h4>
                                        <p>Thousands of students are already <br> University for all ages!</p>
                                        <i class="arrow_right"></i>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 g-0">
                                    <div class="hero2__nav-content hero2__nav-content-3">
                                        <h4>Afordability</h4>
                                        <p>Thousands of students are already <br> University for all ages!</p>
                                        <i class="arrow_right"></i>
                                    </div>
                                </div>
                                <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 g-0">
                                    <div class="hero2__nav-content hero2__nav-content-4">
                                        <h4>Certification</h4>
                                        <p>Thousands of students are already <br> University for all ages!</p>
                                        <i class="arrow_right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

 <!--================= Slider Section Start =================-->
        <div class="brand__area back-logo-area">
                    <div class="container brand__width">
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="brand__content text-center">
                                    <img src="assets/images/logo-carousel/icon/01.png" alt="">
                                    <h3 class="brand__title">Trusted by Teams at</h3>
                                    <img src="assets/images/logo-carousel/icon/02.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="brand__slider">                            
                            <div class="brand__item">
                                <img src="web/assets/images/logo-carousel/01.png" alt="Brand icon">
                            </div>
                            <div class="brand__item">
                                <img src="web/assets/images/logo-carousel/02.png" alt="Brand icon">
                            </div>
                            <div class="brand__item">
                                <img src="web/assets/images/logo-carousel/03.png" alt="Brand icon">
                            </div>
                            <div class="brand__item">
                                <img src="web/assets/images/logo-carousel/04.png" alt="Brand icon">
                            </div>
                            <div class="brand__item">
                                <img src="web/assets/images/logo-carousel/05.png" alt="Brand icon">
                            </div>                           
                        </div>
                    </div>
                </div>
       
                <!--=================  About Section Start Here ================= -->
                <div class="about__area about2__area p-relative mb-115">
                    <div class="container about__area-width">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="about__image">
                                    <img class="back__shape__1" src="web/assets/images/about/dots2.png" alt="Shape Image">
                                    <img src="img/01.png" alt="About">
                                    <img class="back__shape__2" src="web/assets/images/about/dots1.png" alt="Shape Image">
                                </div>
                            </div>
                            <div class="col-lg-7 pl-70 sm-pl-15">
                                <div class="about__content">
                                    <h6>Everything In Dlear</h6>
                                    <h2 class="about__title">Our Impressive Courses <br>Audio, Video, & Live Classess</h2>
                                    <p class="about__paragraph">Spend some time to visit our website or head office <br>and discover our current courses.</p>
                                    <ul>
                                        <li><i class="icon_check"></i> Best teaching</li>
                                        <li><i class="icon_check"></i> Flexible</li>
                                        <li><i class="icon_check"></i> Expert tutor</li>
                                        <li><i class="icon_check"></i> Affordable</li>
                                    </ul>
                                    <div class="about__btn pt-30">
                                        <a href="about.html" class="back-btn-border"> University Overview </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--================= About Section End Here ================= -->

                  <!--================= Course Filter Section Start Here =================-->
                <div class="back-course-filter pb-100 pt-120">
                    <div class="container">                                                    
                        <div class="row d-flex align-items-end">
                            <div class="col-lg-5">
                                <div class="back__title__section text-left">
                                    <h6 class="back__subtitle">Ecole en ligne</h6>
                                    <h2 class="back__tittle"> Trouver Meilleur <br>Ecoles pour vous.</h2>
                                </div>
                            </div>
                            <div class="col-lg-7 text-right">
                                <div class="back-filter">
                                    <button class="active" data-filter="*">Voir Toutes</button>
                                    <button data-filter=".filter1">Trending</button>
                                    <button data-filter=".filter2">Featured</button>
                                    <button data-filter=".filter3">Popularity</button>
                                </div>
                            </div>
                        </div>                       

                        <div class="row back-grid">                            
                            <div class="single-studies col-lg-6 grid-item filter2 filter1">
                                <div class="inner-course">
                                    <div class="case-img">
                                        <img src="web/assets/images/course-filter/1.jpg" alt="Course Image">
                                    </div>
                                    <div class="case-content">
                                        <ul class="meta-course">
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> 500k +</li>
                                            <li class="back-book"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg> Lessones</li>
                                        </ul>
                                        <h4 class="case-title"> <a href="coureses-single.html">Learning to Write as <br>a professional.</a></h4>
                                        <div class="back__user">
                                            <img src="web/assets/images/course/small-image/1.png" alt="user"> Eleanor Fant
                                        </div>
                                        <ul class="back-ratings">
                                            <li>$34.00</li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> 4.9</li>
                                        </ul>
                                    </div>
                                </div>
                            </div> 
                            <div class="single-studies col-lg-6 grid-item filter3 filter1">
                                <div class="inner-course">
                                    <div class="case-img">
                                        <img src="web/assets/images/course-filter/2.jpg" alt="Course Image">
                                    </div>
                                    <div class="case-content">
                                        <ul class="meta-course">
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> 500k +</li>
                                            <li class="back-book"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg> Lessones</li>
                                        </ul>
                                        <h4 class="case-title"> <a href="coureses-single.html">Customer-centric Info <br> Tech Strategies.</a></h4>
                                        <div class="back__user">
                                            <img src="web/assets/images/course/small-image/2.png" alt="user"> Hans Down
                                        </div>
                                        <ul class="back-ratings">
                                            <li>$34.00</li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> 4.9</li>
                                        </ul>
                                    </div>
                                </div>
                            </div> 
                            <div class="single-studies col-lg-6 grid-item filter3 filter2">
                                <div class="inner-course">
                                    <div class="case-img">
                                        <img src="web/assets/images/course-filter/3.jpg" alt="Course Image">
                                    </div>
                                    <div class="case-content">
                                        <ul class="meta-course">
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> 500k +</li>
                                            <li class="back-book"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg> Lessones</li>
                                        </ul>
                                        <h4 class="case-title"> <a href="coureses-single.html">Open Programming <br> Courses for Everyone.</a></h4>
                                        <div class="back__user">
                                            <img src="web/assets/images/course/small-image/2.png" alt="user"> Fig Nelson
                                        </div>
                                        <ul class="back-ratings">
                                            <li>$34.00</li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> 4.9</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-studies col-lg-6 grid-item filter2 filter1">
                                <div class="inner-course">
                                    <div class="case-img">
                                        <img src="web/assets/images/course-filter/4.jpg" alt="Course Image">
                                    </div>
                                    <div class="case-content">
                                        <ul class="meta-course">
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> 500k +</li>
                                            <li class="back-book"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"></path><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"></path></svg> Lessones</li>
                                        </ul>
                                        <h4 class="case-title"> <a href="coureses-single.html">Academic Listening and <br> Note-taking</a></h4>
                                        <div class="back__user">
                                            <img src="web/assets/images/course/small-image/4.png" alt="user"> Eric Widget
                                        </div>
                                        <ul class="back-ratings">
                                            <li>$45.00</li>
                                            <li><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon></svg> 4.9</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>                                                  
                        </div>
                    </div>
                </div>
                <!--================= Course Filter Section End Here =================--> 

@include('layouts.footer2')
@endsection

<header id="back-header" class="back-header">
            <div class="menu-part">
                <div class="container">
                    <!--================= Start Back Menu =================-->
                    <div class="back-main-menu">
                        <nav>
                            <!--================= Menu Toggle btn =================-->
                             <div class="menu-toggle">
                                <div class="logo"><a href="{{route('dgrace')}}" class="logo-text"> <img width="150" src="/img/dlog.svg" alt="logo"> </a></div>
                                <button type="button" id="menu-btn">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <!--================= Menu Structure =================--> 
                            <div class="back-inner-menus">
                               <ul id="backmenu" class="back-menus back-sub-shadow">
                                    <li> <a href="{{route('dgrace')}}">Accueil</a>
                                        
                                    </li>
                                    <li> <a href="#">Ecoles</a>
                                        <ul>
                                            <li> <a href="instructor.html">Catholiques</a></li> 
                                            <li> <a href="profile.html">Isalamiques</a></li> 
                                            <li> <a href="profile.html">Kimbanguistes</a></li> 
                                            <li> <a href="login.html">Protestantes</a></li> 
                                            <li> <a href="login.html">Privées</a></li> 
                                            <li> <a href="signup.html">Public</a></li> 
                                            <li> <a href="signup.html">Salitistes</a></li> 
                                        </ul>
                                    </li>                                                                   
                                    <li> <a href="coureses-grid.html">Evénement</a>
                                        <ul>
                                            <li><a href="coureses-grid.html">Courses</a>
                                                <ul>
                                                    <li><a href="coureses-grid.html">Classic</a></li>
                                                    <li><a href="coureses-left-sidebar.html">Left Sidebar</a></li>
                                                    <li><a href="coureses-right-sidebar.html">Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="coureses-list.html">Courses List</a></li>
                                            <li><a href="coureses-single.html">Courses Single</a>
                                                <ul>
                                                    <li><a href="coureses-single.html">Classic</a></li>
                                                    <li><a href="coureses-single-left.html">Left Sidebar</a></li>
                                                    <li><a href="coureses-single-right.html">Right Sidebar</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li> <a href="blog.html">Blog</a>
                                        <ul>
                                            <li><a href="blog.html">Blog</a>
                                                <ul>
                                                    <li><a href="blog.html">Classic</a></li>
                                                    <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                                                    <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                                                    <li><a href="blog-fullwidth.html">Full Width</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="blog-details.html">Blog Single</a>
                                                <ul>
                                                    <li><a href="blog-details.html">Classic</a></li>
                                                    <li><a href="blog-details-left.html">Left Sidebar</a></li>
                                                    <li><a href="blog-details-right.html">Right Sidebar</a></li>
                                                    <li><a href="blog-details-full.html">Full Width</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li> <a href="contact.html">Contact</a></li>
                                </ul>                                
                                 <div class="searchbar-part">
                                
                                <div class="searchbar-part">
                                    <ul class="back-category-menu">
                                        <li><a href="#">Gérer <i class="arrow_carrot-down"></i></a> 
                                            <ul>
                                                <li><a href="{{route('login')}}">Connexion</a></li>
                                                <li><a href="{{route('register')}}"> Créer compte</a></li>
                                            </ul>
                                        </li>
                                    </ul>                                    
                                    <form class="search-form">
                                        <input type="text" class="form-input" placeholder="Recherche">
                                        <button type="submit" class="form-button">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <!--================= End Back Menu =================-->
                </div>
            </div>
        </header>












        <div class="admin-dashone-data-table-area mg-b-15">
                
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline8-list shadow-reset">
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <h1><i class="fa fa-arrow-circle-down"></i></h1>
                                        <div class="sparkline8-outline-icon">
                                            <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline8-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>   
                                                <tr>  
                                                    <th data-field="status">Nom, Post-nom & Prénom</th>
                                                    <th data-field="name" data-editable="true">Classe</th>
                                                    <th data-field="company" data-editable="true">Année scolaire</th>
                                                    <th data-field="complete">Montant soldé</th>
                                                    <th data-field="date" data-editable="true">Date</th>
                                                    <th data-field="support">Photo</th>  
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($soldes as $frais)
                                                <tr><a href="">

                                                     <td>
                                                    {{ucfirst($frais->nom)}} {{ucfirst($frais->post_nom)}} {{ucfirst($frais->prenom)}}
                                                    </td>
                                                    <td>{{$frais->classe}} {{$frais->cycle}}</td>
                                                    <td>{{$frais->annee_solde}}</td>
                                                    <td>{{$frais->solde_cdf == null ? $frais->solde_dollar : $frais->solde_cdf}} {{$frais->solde_cdf == null ? '$' : 'CDF'}}
                                                    </td>
                                                    <td>{{(new DateTime($frais->created_at))->format('d/m/Y')}}</td>
                                                    <td>
                                                        <div class="support-list-img">
                                                        
                                                            <a href="{{route('voir_eleve', [$frais->id, $frais->nom, $frais->post_nom, $frais->prenom])}}"><img style="height:50px; width:50px" src="/uploads/base/{{$frais->image}}" alt=""/>
                                                            </a>
                                                        </div>
                                                    </td>
                                               
                                                </tr></a>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
        








 <div class="admin-dashone-data-table-area mg-b-15">
                
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="sparkline8-list shadow-reset">
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <h1><i class="fa fa-arrow-circle-down"></i></h1>
                                        <div class="sparkline8-outline-icon">
                                            <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline8-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>   
                                                <tr>  
                                                    
                                                    <th data-field="name" data-editable="true">Nom, Post-nom & Prénom</th>
                                                    <th data-field="company" data-editable="true">Année scolaire</th>
                                                    <th data-field="complete">Montant payé</th>
                                                    <th data-field="date" data-editable="true">Date</th>
                                                    <th data-field="support">Photo</th>  
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($fraisFranc as $frais)
                                                <tr>
                                                  
                                                    <td>{{ucfirst($frais->nom)}} {{ucfirst($frais->post_nom)}} {{ucfirst($frais->prenom)}}</td>
                                                    <td>{{$frais->annee_frais}}</td>
                                                    <td>{{$frais->franc == null ? $frais->dollar : $frais->franc}} {{$frais->franc == null ? '$' : 'CDF'}}
                                                    </td>
                                                    <td>{{(new DateTime($frais->created_at))->format('d/m/Y')}} </td>
                                                    <td>
                                                        <div class="support-list-img">
                                                        
                                                            <a href="{{route('voir_eleve', [$frais->id, $frais->nom, $frais->post_nom, $frais->prenom])}}"><img style="height:50px; width:50px" src="/uploads/base/{{$frais->image}}" alt=""/>
                                                            </a>
                                                        </div>
                                                    </td>
                                               
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




















    <div class="row">
                    
                    @if(! $eleves->isEmpty())
                      @foreach($eleves as $eleve)
                    <div class="col-md-6 col-lg-6 col-xlg-4">
                        <div class="card card-body">
                            <div class="row align-items-center">
                                <div class="col-md-4 col-lg-3 text-center">
                                    <a href="{{route('voir_perso', [$eleve->id, $eleve->matricule_per, $eleve->emplacement])}}"><img style="width: 100px; height: 100px" src="/uploads/base_personnel/{{$eleve->image_per}}" alt="user" class="img-circle img-fluid"></a>
                                </div>
                                <div class="col-md-8 col-lg-9">
                                    <h3 class="box-title m-b-0">{{ucfirst($eleve->nom)}} {{ucfirst($eleve->post_nom)}}</h3> <small>Web Designer</small>
                                    <address>
                                        {{$eleve->fonction}}
                                        <br/>
                                        <br/>
                                        <abbr title="Phone">Téléphone:</abbr> {{$eleve->phone_per}}
                                    </address>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <!-- .col -->
                @endforeach
                @else
                    <!-- /.col -->
                    <div class="text-center">
                      <span class="text-muted "><i style="font-size: 50px; color: darkgray;" class="fa fa-exclamation-triangle"></i>  <br><b>{Auth::user()->ecole}}</b> n'a aucun personnel, Cliquer sur <b>Personnel</b> épuis <b>Ajouter.</b> 
                       </span>
                        </div>
                     @endif
                     </div>
                     <div class="text-center">
                    <p>@include('cycles.pagenate')</p>
                </div>









$(document).on('click', '.button', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    var nom = $(this).data('name');
    swal({
            title: `Voulez-vous effacer ${nom} ?`,
            type: "warning",
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Oui!",
            showCancelButton: true,
        }).then((willDelete) => {

        if (willDelete) {
          window.location = `/${id}001`  
        }
        
       });
    });















$(document).on('click', '.button', function (e) {
    e.preventDefault();
    var id = $(this).data('id');
    swal({
            title: "Are you sure!",
            type: "error",
            confirmButtonClass: "btn-danger",
            confirmButtonText: "Yes!",
            showCancelButton: true,
        },
        function() {
            $.ajax({
                type: "POST",
                url: "{{url('/destroy')}}",
                data: {id:id},
                success: function (data) {
                              //
                    }         
            });
    });
});
<a href="" class="button" data-id="{{$user->id}}">Delete</a>
<form action="{{ route('destroy', [$pupil->id]) }}" method="post">
                                                 @csrf
                                                <button class="btn btn-danger btn-sm delete-confirm" data-name="{{ $pupil->nom }}" type="submit">Delete</button>






@extends('Admin.master')

@section('content')
    <div class="col-md-10 p-5 pt-2">
        <h3><i class="fas fa-tachometer-alt ml-2"></i>Catefories</h3><hr>
        <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">
            <i class="fas fa-plus-square"></i>
    Add  new a category
        </a>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->created_at }}</td>
                        <td>
                            <div class="btn-group btn-group-sm">
                                <a href="{{ route('categories.edit', $category->id) }}"  class="btn btn-primary">ویرایش</a>
                                <button type="button" class="btn btn-danger" data-category="{{ $category->id }}" data-toggle="modal" data-target="#deleteCategory">Effacer</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="deleteCategory" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="deleteCategory" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <form action="{{ route('categories.destroy', $category->id) }}">
                @csrf
                @method('DELETE')
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">This action is not reversible.</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete {{ $categories[0]->name }} ?
                        <input type="hidden" id="category" name="category_id">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn bg-white" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $('#delete').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var category = button.data('category');
            var modal = $(this);
            modal.find('.modal-body #categoey').val(category);
        });
    </script>
@endsection



























<a href="{{$pupil->id}}" 
                                                class="btn btn-danger delete" 
                                                data-toggle="modal" 
                                                data-target="#deleteModal">Delete</a>                       
<div>
    @include('modal')

    <table class="table table-bordered table-striped table-hover category-table" data-toggle="dataTable" data-form="deleteForm">
        <tête>
        <tr>
            <th>Nom</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categoryList as $category)
            <tr>
                <td>{{ $category->category_name }}</td>
                <dt>
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-info btn-xs">{{ trans('categories.edit') }}</ un>

                    {!! Form ::model($category, ['method' => 'delete', 'route' => ['categories.destroy', $category->id], 'class' =>'form-inline form-delete' ]) !!}
                    {!! Form ::hidden('id', $category->id) !!}
                    {!! Form ::submit(trans('categories.delete'), ['class' => 'btn btn-xs btn-danger delete', 'name' => 'delete_modal']) !!}
                    {!! Formulaire :: close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>



<div class="modal" id="confirmer">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="en-tête-modal">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Supprimer la confirmation</h4>
            </div>
            <div class="corps-modal">
                <p>Êtes-vous sûr de vouloir supprimer ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-primary" id="delete-btn">Supprimer</button>
                <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Fermer</button>
            </div>
        </div>
    </div>
</div>

$ ( 'table[data-form="deleteForm"]' ) . on ( 'click' ,  '.form-delete' ,  function ( e ) {
    e . preventDefault ( ) ;
    var  $form = $ ( ceci ) ;
    $ ( '#confirmer' ) . modal ( { toile de  fond : 'statique' ,  clavier : faux  } )
        . on ( 'click' ,  '#delete-btn' ,  function ( ) {
            $form . soumettre ( ) ;
        } ) ;
} ) ;

 <!-- Delete Warning Modal --
<div class="modal modal-danger fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="Delete" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Contact</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="{{ route('contacts.destroy', 'id') }}" method="post">
                @csrf
                @method('DELETE')
                <input id="id" name="id")>
                <h5 class="text-center">Are you sure you want to delete this contact?</h5>
                <input id="firstName" name="firstName"><input id="lastName" name="lastName">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-sm btn-danger">Yes, Delete Contact</button>
            </div>
            </form>
        </div>
    </div>
</div>
        End Delete Modal -->


<a  onclick="return Confirmation()"  href="{{route('destroy', $pupil->id)}}">
                                                    <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Supprimer"><i class="ti-close" aria-hidden="true"></i></button></a>























                       <div class="basic-form-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                            <div class="sparkline8-list basic-res-b-30 shadow-reset">
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <h1><i class="fas fa-cart-plus"></i>  Paiement de frais</h1>
                                        <div class="sparkline8-outline-icon">
                                            <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline8-graph">
                                    <div class="basic-login-form-ad">
                                        <div class="row">
                                        <div class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
                                        <div class="basic-login-inner">   
                                               <div class="modal-body text-center">
                                                <img  style="border-radius: 50%; width: 90px; height: 90px; border: 3px solid silver;" class="img img-fluid"
                                                   src="/uploads/base/{{$show->image}}"
                                                   alt="User profile picture">
                                            <h4 class="text-center text-muted">{{$show->nom}} {{$show->post_nom}}</h4>
                                            @if(! $show->active == '1')
                                            @foreach($modalites as $modalite)
                                            @if(! $modalite->montant_cdf == null)
                                            <form action="{{route('slide_frais', [$show->id, $show->classe])}}" method="post">
                                            @csrf  
                                            
                                   
                                            <div class="form-group">
                                            <label for="exampleInputEmail1">Montant à payé</label>
                                            <input type="number" name="franc" class="form-control" id="exampleInputEmail1" placeholder="Enter montant ">
                                                </div>
                                                @else
                                                @endif
                                                 @endforeach
                                                @foreach($modalites as $modalite)
                                                @if(! $modalite->montant_dollar == null)
                                               <form action="{{route('dola_frais', [$show->id, $show->classe])}}" method="post">
                                                @csrf 
                                                 
                                            <div class="form-group">
                                            <label for="exampleInputEmail1">Montant à payé</label>
                                            <input type="number" name="dollar" class="form-control" id="exampleInputEmail1" placeholder="Enter montant ">
                                                </div>
                                                
                                                @else
                                                @endif
                                                @endforeach
                                                 <div class="form-group-inner">
                                                    <select class="form-control basic-ele-mg-b-10" name="tranche">
                                                        <option>Tranche</option>
                                                        <option value="1èr Tranche">1<sub>èr</sub> Tranche</option>
                                                         <option value="2ème Tranche">2<sub>ème</sub> Tranche</option>
                                                        </select> 
                                                  </div>
                                                
                                                   <div class="form-group-inner">
                                                    
                                                    <select name="trimestre" class="form-control basic-ele-mg-b-10" >
                                                        <option>Trimestre</option>
                                                        <option value="1èr Trimestre">1<sub>èr</sub> Trimestre</option>
                                                        <option value="2ème Trimestre">2<sub>ème</sub> Trimestre</option>
                                                        <option value="3ème Trimestre">3<sub>ème</sub> Trimestre</option>
                                                       
                                                      </select>   
                                                    </div>
                                                
                                                <div class="form-group-inner">
                                                
                                                    <input type="number" name="annee" value="{{date('Y')}}" class="form-control basic-ele-mg-b-10" placeholder="Tapez l'année scolaire" >
                                                </div>
                                                <div class="form-group-inner">
                                                 <button type="submit" class="btn btn-info waves-effect text-left" ><i class="fa fa-cart-plus"></i> Confirmer</button>
                                              </div>
                                              </div>  
                                              </form>
                                              @else
                                               <div>
                                                <hr>
                                                <h3 class="text-center text-muted mt-3">L'élève est désactivé</h3>
                                              
                                                <p class="text-center mt-3"><i style="font-size: 95px; color: wheat;" class="fas fa-exclamation-triangle"></i></p>
                                                
                                              </div>
                                              @endif


                                            </div>
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>  






















      <div class="row">
     <div class="col-lg-12">

                       <div class="sparkline8-hd">
                           <div class="main-sparkline8-hd">
                               <h1><i class="fa fa-dedent (alias)"></i></h1>
                               <div class="sparkline8-outline-icon">
                                   <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                   <span><i class="fa fa-wrench"></i></span>
                                   <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
                               </div>
                           </div>
                       </div>
                      <div class="sparkline8-graph dashone-comment messages-scrollbar dashtwo-messages">
    <!----------------------------------------------------------------------------
    | Affichage de frais du premier trimestre de l'élève
    |--------------------------------------------------------------------------
     -->


                     @if(! $fraisFranc == null or ! $fraisDollar == null )
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                            <div class="income-dashone-total shadow-reset nt-mg-b-30 res-mg-t-30">
                                <div class="income-title">
                                    @foreach($modalites as $modalite)
                                    <div class="main-income-head">
                                        <h4 class="btn bg-info bg-white"><b>1<sup>èr</sup> Trimestre</b></h4>
                                        <div class="main-income-phara">
                                            <p>{{$modalite->annee}}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><b>
                                            @foreach($modalites as $modalite)
                                            @if(! $modalite->montant_cdf == null)
                                            <span>CDF</span> {{sprintf('%.2f', $fraisFranc)}}
                                            @else
                                            <span>$</span>  {{sprintf('%.2f', $fraisDollar)}}
                                            @endif
                                            @endforeach</b>
                                            </h3>
                                        </div>
                                        <div class="price-graph">
                                            <span id="sparkline1"></span>
                                        </div>
                                    </div>
                                    <div class="income-range">
                                        @if($fraisFranc > $modalite->montant_cdf or $fraisDollar > $modalite->montant_dollar)
                                        <p style="color: red;" ><i style="font-size: 25px; color: red;" class="fa fa-exclamation-triangle"></i><small> Erreur! Ce montant dépasse le montant fixé pour le premier trimestre.</small></p>
                                        @else
                                        @if($fraisFranc == $modalite->montant_cdf AND $fraisDollar == $modalite->montant_dollar)
                                        <p><a>Trimestre soldé</a></p>
                                        <span class="income-percentange"><i style="color:#3C3; font-size: 25px;" class="fa fa-check-square-o"></i></span>

                                        @else
                                        <p>En cours de paiement...</p>
                                        <span class="income-percentange"><i style="color:#F10; font-size: 25px" class="fa fa-cloud-download"></i></span>
                                        @endif
                                        @endif

                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                         </div>
                         @else
                        <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                        <div class="income-dashone-total shadow-reset nt-mg-b-30 res-mg-t-30">
                                <div class="income-title">
                                    @foreach($Dmodalites as $modalite)
                                    <div class="main-income-head">
                                        <h4 class="btn bg-info bg-white"><b>1<sup>èr</sup> Trimestre</b></h4>
                                        <div class="main-income-phara">
                                            <p>{{$modalite->annee}}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="income-dashone-pro">
                         <p class="text-center">
                        <i style="font-size: 50px; color: silver;" class="fa fa-exclamation-circle"></i><br> L'élève n'a encore rien payé pour ce trimestre !</p>
                    </div>
                    </div>
                       </div>
                        </div>
                         @endif

    <!----------------------------------------------------------------------------
    | Affichage de frais de Deuxième trimestre de l'élève
    |--------------------------------------------------------------------------
     -->
                     @if(! $DfraisFranc == null or ! $DfraisDollar == null )
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                            <div class="income-dashone-total shadow-reset nt-mg-b-30 res-mg-t-30">
                                <div class="income-title">
                                    @foreach($Dmodalites as $modalite)
                                    <div class="main-income-head">
                                        <h4 class="btn bg-info bg-white"><b>2<sup>ème</sup> Trimestre</b></h4>
                                        <div class="main-income-phara">
                                            <p>{{$modalite->annee}}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><b>
                                            @foreach($Dmodalites as $modalite)
                                            @if(! $modalite->montant_cdf == null)
                                            <span>CDF</span>  {{sprintf('%.2f', $DfraisFranc)}}
                                            @else
                                            <span>$</span>  {{sprintf('%.2f', $DfraisDollar)}}
                                            @endif
                                            @endforeach</b>
                                            </h3>
                                        </div>
                                        <div class="price-graph">
                                            <span id="sparkline1"></span>
                                        </div>
                                    </div>
                                        <div class="income-range">
                                        @foreach($Dmodalites as $modalite)
                                        @if($DfraisFranc > $modalite->montant_cdf or $DfraisDollar > $modalite->montant_dollar)
                                        <p style="color: red;" ><i style="font-size: 25px; color: red;" class="fa fa-exclamation-triangle"></i><small> Erreur! Ce montant dépasse le montant fixé pour le deuxième trimestre.</small></p>
                                        @else
                                        @if($DfraisFranc == $modalite->montant_cdf AND $DfraisDollar == $modalite->montant_dollar)
                                        <p><a>Trimestre soldé</a></p>
                                        <span class="income-percentange"><i style="color:#3C3; font-size: 25px;" class="fa fa-check-square-o"></i></span>
                                        @else
                                        <p>En cours de paiement...</p>
                                        <span class="income-percentange"><i style="color:#F10; font-size: 25px" class="fa fa-cloud-download"></i></span>
                                        @endif
                                        @endif
                                     @endforeach
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                         </div>
                         @else
                        <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                            <div class="income-dashone-total shadow-reset nt-mg-b-30 res-mg-t-30">
                                <div class="income-title">
                                    @foreach($Dmodalites as $modalite)
                                    <div class="main-income-head">
                                        <h4 class="btn bg-info bg-white"><b>2<sup>ème</sup> Trimestre</b></h4>
                                        <div class="main-income-phara">
                                            <p>{{$modalite->annee}}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="income-dashone-pro">
                         <p class="text-center">
                        <i style="font-size: 50px; color: silver;" class="fa fa-exclamation-circle"></i><br> L'élève n'a encore rien payé pour ce trimestre !</p>
                    </div>
                    </div>
                       </div>
                        </div>
                         @endif
    <!----------------------------------------------------------------------------
    | Affichage de frais de Troisième  trimestre de l'élève
    |--------------------------------------------------------------------------
     -->
                    @if(! $TfraisFranc == null or ! $TfraisDollar == null )
                    <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                            <div class="income-dashone-total shadow-reset nt-mg-b-30 res-mg-t-30">
                                <div class="income-title">
                                    @foreach($Tmodalites as $modalite)
                                    <div class="main-income-head">
                                        <h4 class="btn bg-info bg-white"><b>3<sup>ème</sup> Trimestre</b></h4>
                                        <div class="main-income-phara">
                                            <p>{{$modalite->annee}}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="income-dashone-pro">
                                    <div class="income-rate-total">
                                        <div class="price-adminpro-rate">
                                            <h3><b>
                                            @foreach($Tmodalites as $modalite)
                                            @if(! $modalite->montant_cdf == null)
                                            <span>CDF</span>  {{sprintf('%.2f', $TfraisFranc)}}
                                            @else
                                            <span>$</span>  {{sprintf('%.2f', $TfraisDollar)}}
                                            @endif
                                            @endforeach</b>
                                            </h3>
                                        </div>
                                        <div class="price-graph">
                                            <span id="sparkline1"></span>
                                        </div>
                                    </div>
                                        <div class="income-range">
                                        @if($TfraisFranc > $modalite->montant_cdf AND $TfraisDollar > $modalite->montant_dollar)
                                        <<p style="color: red;" ><i style="font-size: 25px; color: red;" class="fa fa-exclamation-triangle"></i><small> Erreur! Ce montant dépasse le montant fixé pour le troisième trimestre.</small></p>
                                        @else
                                        @if($TfraisFranc == $modalite->montant_cdf AND $TfraisDollar == $modalite->montant_dollar)
                                        <p><a>Trimestre soldé</a></p>
                                        <span class="income-percentange"><i style="color:#3C3; font-size: 25px;" class="fa fa-check-square-o"></i></span>

                                        @else
                                        <p>En cours de paiement...</p>
                                        <span class="income-percentange"><i style="color:#F10; font-size: 25px" class="fa fa-cloud-download"></i></span>
                                        @endif
                                        @endif

                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                         </div>
                         @else
                        <div class="row">
                        <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                            <div class="income-dashone-total shadow-reset nt-mg-b-30 res-mg-t-30">
                                <div class="income-title">
                                    @foreach($Tmodalites as $modalite)
                                    <div class="main-income-head">
                                        <h4 class="btn bg-info bg-white"><b>3<sup>ème</sup> Trimestre</b></h4>
                                        <div class="main-income-phara">
                                            <p>{{$modalite->annee}}</p>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <div class="income-dashone-pro">
                         <p class="text-center">
                        <i style="font-size: 50px; color: silver;" class="fa fa-exclamation-circle"></i><br> L'élève n'a encore rien payé pour ce trimestre !</p>
                    </div>
                    </div>
                       </div>
                        </div>
                         @endif
             












                <div class="row">
                        <div class="col-lg-12">
                            
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <h1><i class="fa fa-dedent (alias)"></i></h1>
                                        <div class="sparkline8-outline-icon">
                                            <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline8-graph dashone-comment messages-scrollbar dashtwo-messages">
                                @foreach($tables as $table)
                                @if($table->franc || $table->dollar)
                                <div class="comment-phara">
                                <div class="row">        
                                <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                                <div class="basic-login-inner">
                                <h3 class="btn bg-info bg-white"><b>{{strtoupper($show->nom)}} {{strtoupper($show->post_nom)}}</b></h3>
                                <p>Vient de payer <b>
                                {{$table->franc != '' ? 'CDF'  : '$' }} {{$table->franc}} {{$table->dollar}}</b> frais scolaire du <b>{{$table->trimestre}}</b> pour l'année scolaire {{AnneeSco()}}</p>
                                <p class="comment-clock"><i class="fa fa-clock-o"></i> {{$table->created_at->diffForhumans()}}  | <span class="text-center">Date: {{(new DateTime($table->created_at))->format('d/m/Y')}}</span></p>
                                <form action="{{route('modFrais', $table->id)}}" method="post" class="">
                                 @csrf
                                <div class="form-group-inner">
                                <label>Modifier le montant</label>
                                @if($table->franc)
                                <div class="row">
                                    <div class="col-lg-6">
                                    <input type="text" name="franc"  class="form-control" placeholder="Enter le montant en CDF" required=""/>
                                        </div>
                                        <div class="col-lg-6">
                                    <select name="trimestre" class="form-control" required="">
                                     <option>{{$table->trimestre}}</option>
                                        <option value="1èr Trimestre">1<sub>èr</sub> Trimestre</option>
                                            <option value="2ème Trimestre">2<sub>ème</sub> Trimestre</option>
                                                <option value="3ème Trimestre">3<sub>ème</sub> Trimestre</option>
                                                </select>
                                                 </div>
                                                    </div>   
                                                @else 
                                        <div class="row">
                                            <div class="col-lg-6">
                                            <input type="text" name="dollar"  class="form-control" placeholder="Enter le montant en $" required=""/>
                                            </div>
                                            <div class="col-lg-6">
                                        <select name="trimestre" class="form-control" required="" >
                                            <option>{{$table->trimestre}}</option>
                                            <option value="1èr Trimestre">1<sub>èr</sub> Trimestre</option>
                                            <option value="2ème Trimestre">2<sub>ème</sub> Trimestre</option>
                                            <option value="3ème Trimestre">3<sub>ème</sub> Trimestre</option>
                                                       
                                                </select> 
                                                    </div>
                                                    </div>  
                                                            @endif
                                                            
                                                            </div>  
                                                        
                                                        <div class="login-btn-inner">
                                                            <div class="inline-remember-me">
                                                                <button class="btn btn-sm btn-primary pull-right login-submit-cs" type="submit"> Confirmer</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                <div class="basic-login-inner basic-ele-mg-t-20">
                                                    <h3><b>{{$table->franc}} {{$table->dollar}} <span class="">{{$table->franc != '' ? 'CDF'  : '$' }}</span></b></h3>
                                                    <p>Montant payé</p>
                                                    <div class="create-account-sign">
                                                        <a onclick="return Confirmation()" href="{{route('supFrais', [$table->id, Auth::user()->ecole])}}"><i style="font-size: 30px;" class="fa fa-trash"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @else    
                                    <div>
                                    <a class="dashtwo-messsage-title" href="#">{{strtoupper($show->nom)}} {{strtoupper($show->post_nom)}}</a>
                                    <p class="comment-content">N'a rien payé.</p>
                                    </div>
                                    @endif
                                @endforeach
                                </div>
                                </div>
                                </div>

















             @foreach($Tmodalites as $modalite)
            @if(! $modalite->montant_cdf == null or ! $modalite->montant_dollar == null )
            @if($TfraisFranc > $modalite->montant_cdf or $TfraisDollar > $modalite->montant_dollar)
               <p class="text-center">
            <i style="font-size: 85px; color: silver;" class="fa fa-exclamation-circle"></i><br> La procédre de paiement pour l'élève est bloqué!<br>Vous venez de payer encore pour le troisième trimestre qui est déjà soldé,<br> nous vous prions d'aller sur le tableau de paiement pour modifier ce montant <br>pour un autre trimestre ou supprimer avant de continuer la procédure de paiement !</p>
                @else
                <div class="basic-login-form-ad">
                        <div class="row">
                            <div class="col-lg-12">
                                                <div class="login-social-inner">
                                                    <a  class="button btn-social linkedin span-left form-control"> <span><sup>3ème</sup></span> <b> Trimestre ({{AnneeSco()}})</b> </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 ">
                                                <div class="basic-login-inner btn btn-default text-center">
                                                    <h1><b>@foreach($Tmodalites as $modalite)
                                                    @if(! $modalite->montant_cdf == null)
                                                        CDF {{sprintf('%.2f', $modalite->montant_cdf)}}
                                                    @else
                                                        USD {{sprintf('%.2f', $modalite->montant_dollar)}}
                                                    @endif 
                                                   @endforeach</b>
                                                   </h1>
                                                    <p class="btn btn-info form-control">Montant fixé</p>
                                                    <p>Trimestre</p>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                <div class="basic-login-inner basic-ele-mg-t-20 btn btn-default text-center">
                                                    <h1><b>
                                                    @foreach($Tmodalites as $modalite)
                                                    @if(! $modalite->montant_cdf == null)
                                                    CDF {{sprintf('%.2f', $TfraisFranc)}} 
                                                    @else
                                                    USD {{sprintf('%.2f', $TfraisDollar)}} 
                                                    @endif
                                                    @endforeach</b>
                                                   </h1>
                                                    <p class="btn btn-success form-control">Montant payé</p>
                                                    <div data-toggle="modal" data-target=".bs-example-modal-cr" class="create-account-sign">
                                                        <a href="#"><i style="font-size: 70px;" class="fa  fa-cart-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                <div class="basic-login-inner basic-ele-mg-t-20 btn btn-default text-center">
                                                    <h1><b>
                                                    @foreach($Tmodalites as $modalite)
                                                    @if($modalite->montant_cdf)
                                                        CDF {{sprintf('%.2f', $modalite->montant_cdf - $TfraisFranc)}}
                                                     @else
                                                        USD {{sprintf('%.2f', $modalite->montant_dollar - $TfraisDollar)}}
                                                     @endif
                                                    @endforeach
                                                     </b>
                                                   </h1>
                                                    <p class="btn btn-danger form-control">Reste a payé</p>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                         <br>
                                       
                                        @foreach($Tmodalites as $modalite)
                                        @if($modalite->montant_cdf)
                                        @if($modalite->montant_cdf == $TfraisFranc)
                                        <p class="text-center
                                        "><i style="font-size: 55px; color: seagreen;" class="fa fa-check-square-o"></i> <br>L'élève a soldé tous le trimestre</p>
                                        @else
                                          <p class="text-center
                                        "><i style="font-size: 35px; color: silver;" class="fa fa-exclamation-circle"></i> <br>Ce trimeste n'est pas encore soldé</p>
                                        @endif
                                        @else
                                        @if($modalite->montant_dollar == $TfraisDollar)
                                        <p class="text-center
                                        "><i style="font-size: 55px; color: seagreen;" class="fa fa-check-square-o"></i> <br>L'élève a soldé tous le trimestre</p>
                                        @else
                                          <p class="text-center
                                        "><i style="font-size: 35px; color: silver;" class="fa fa-exclamation-circle"></i> <br>Ce trimeste n'est pas encore soldé</p>
                                        @endif
                                        @endif
                                    @endforeach
                                    </div>
                                    @endif
                                    @else
                                    <p class="text-center
                                        "><i style="font-size: 85px; color: silver;" class="fa fa-exclamation-circle"></i><br> Le frais scolaires n'est pas  encore fixé pour ce trimestre</p>
                                      
                                    @endif
                                    @endforeach



 @foreach($modalites as $modalite)
            @if(! $modalite->montant_cdf == null or ! $modalite->montant_dollar == null )
            @if($fraisFranc > $modalite->montant_cdf or $fraisDollar > $modalite->montant_dollar)
            <p class="text-center">
            <i style="font-size: 85px; color: silver;" class="fa fa-exclamation-circle"></i><br> La procédre de paiement pour l'élève est bloqué!<br>Vous venez de payer encore pour le premier trimestre qui est déjà soldé,<br> nous vous prions d'aller sur le tableau de paiement pour modifier ce montant <br>pour un autre trimestre ou supprimer avant de continuer la procédure de paiement !</p>
            @else
                    <div class="basic-login-form-ad">
                        <div class="row">
                            <div class="col-lg-12">
                                                <div class="login-social-inner">
                                                    <a  class="button btn-social linkedin span-left form-control"> <span><sup><b>1èr</b></sup></span> <b> Trimestre ({{AnneeSco()}})</b> </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 ">
                                                <div class="basic-login-inner btn btn-default text-center">
                                                    <h2><b>@foreach($modalites as $modalite)
                                                    @if(! $modalite->montant_cdf == null)
                                                        CDF {{sprintf('%.2f', $modalite->montant_cdf)}}
                                                    @else
                                                        USD {{sprintf('%.2f', $modalite->montant_dollar)}}
                                                    @endif 
                                                   @endforeach</b>
                                                   </h2>
                                                    <p class="btn btn-info form-control">Montant fixé</p>
                                                    <p>Trimestre</p>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                <div class="basic-login-inner basic-ele-mg-t-20 btn btn-default text-center">
                                                    <h2><b>
                                                    @foreach($modalites as $modalite)
                                                    @if(! $modalite->montant_cdf == null)
                                                    CDF {{sprintf('%.2f', $fraisFranc)}} 
                                                    @else
                                                    USD {{sprintf('%.2f', $fraisDollar)}} 
                                                    @endif
                                                    @endforeach</b>
                                                   </h2>
                                                    <p class="btn btn-success form-control">Montant payé</p>
                                                    <div data-toggle="modal" data-target=".bs-example-modal-cr" class="create-account-sign">
                                                        <a href="#"><i style="font-size: 70px;" class="fa  fa-cart-plus"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                                                <div class="basic-login-inner basic-ele-mg-t-20 btn btn-default text-center">
                                                    <h2><b>
                                                    @foreach($modalites as $modalite)
                                                    @if($modalite->montant_cdf)
                                                        CDF {{sprintf('%.2f', $modalite->montant_cdf - $fraisFranc)}}
                                                     @else
                                                        USD {{sprintf('%.2f', $modalite->montant_dollar - $fraisDollar)}}
                                                     @endif
                                                    @endforeach
                                                     </b>
                                                   </h2>
                                                    <p class="btn btn-danger form-control">Reste a payé</p>     
                                                </div>
                                            </div>

                                        </div>
                                        <br>
                                       
                                        @if($fraisFranc or $fraisDollar)
                                        <p class="form-control bg-l basic-login-form-ad  text-center
                                        "><i style="font-size: 25px; color: silver;" class="fa fa-exclamation-circle"></i> Ce trimeste n'est pas encore soldé</p>
                                        @else
                                        <p class=" bg-l basic-login-form-ad  text-center
                                        "><i style="font-size: 25px; color: silver;" class="fa fa-exclamation-circle"></i> L'élève n'a encore rien payé pour ce trimestre</p>
                                        @endif
                                    </div>
                                    @endif
                                    @else
                                    <p class="text-center
                                        "><i style="font-size: 85px; color: silver;" class="fa fa-exclamation-circle"></i><br> Le frais scolaires n'est pas  encore fixé pour ce trimestre</p>
                                    @endif
                                    @endforeach       







<div class="inbox-mailbox-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="inbox-email-menu-list compose-b-mg-30 shadow-reset">
                                           <div class="inbox-email-menu-list compose-b-mg-30 shadow-reset">
                                        <div class="card"> <img style="border-radius: 10px;" class="card-img" src="/uploads/base/{{$show->image}}" height="456" alt="Card image">
                            <div class="card-img-overlay card-inverse text-white social-profile d-flex justify-content-center">
                                <div class="align-self-center"><br> 
                                </div>
                            </div>
                        </div>
                        <div class="card"> 
                                  <div  class="compose">           
                            </div>
                           <h3 class="text-center"><b>{{ucfirst($show->nom)}} {{ucfirst($show->post_nom)}} {{ucfirst($show->prenom)}}
                            </b></h3>
                            <hr>
                            <div class="card-body"> <small class="text-muted">Frais </small>
                                <h6>{{$fraisFranc != null ? "CDF  $fraisFranc" :  "USD $fraisDollar"}}</h6> <small class="text-muted p-t-30 db">Téléphone</small>
                                <h6>{{$show->phone}}</h6> <small class="text-muted p-t-30 db">Addresse</small>
                                <h6>{{$show->adresse}}</h6>
                            </div>
                                </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="col-lg-9">
                                    <div class="tab-content">
                                        <div id="inbox" class="tab-pane fade in animated zoomInDown custom-inbox-message shadow-reset active">
                                            <div class="mail-title inbox-bt-mg">
                                                <h4> 
                                                <div class="user-profile-comment-img"><a href="#"><img style="height:50px; width:50px; border-radius: 50%" src="/uploads/base/{{$show->image}}" alt="" />
                                                </a>  <span class="btn bg-default bg-white">Elève de {{$show->classe}} {{$show->cycle}}</span></div> </h4>
                                                @include('Eleves.aside_imp')
                                                
                                                @include('Eleves.voir_aside')
                                                


                                         </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


























        

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="/img/dlog.svg" rel="icon">
    <link href="/img/dlog.svg" rel="apple-touch-icon">
    <title>{{ isset($title) ? $title  . ' | ' : '' }} dgrace</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- page css -->
  <link href="{{asset('../diste/css/pages/stylish-tooltip.css')}}" rel="stylesheet">
  <link href="{{asset('diste/css/pages/user-card.css')}}" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->

<link rel="stylesheet" type="text/css" href="{{asset('acc/style.css')}}">
<link href="{{asset('cc/css/pages/dashboard.css')}}" rel="stylesheet">
<link href="{{asset('cc/css/pages/reports.css')}}" rel="stylesheet">
<link href="{{asset('cc/css/font-awesome.css')}}" rel="stylesheet">
<link href="{{asset('cc/css/style.css')}}" rel="stylesheet">
<link href="{{asset('cc/css/pages/dashboard.css')}}" rel="stylesheet">
 <link href="{{asset('css/pages/faq.css')}}" rel="stylesheet"> 

  <link rel="stylesheet" href="{{asset('mat/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('mat/css/font-awesome.min.css')}}">
    <!-- adminpro icon CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('mat/css/adminpro-custon-icon.css')}}">
    <!-- meanmenu icon CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('mat/css/meanmenu.min.css')}}">
    <!-- mCustomScrollbar CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('mat/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- animate CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('mat/css/animate.css')}}">
    <!-- jvectormap CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('mat/css/jvectormap/jquery-jvectormap-2.0.3.css')}}">
    <!-- normalize CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('mat/css/data-table/bootstrap-table.css')}}">
    <link rel="stylesheet" href="{{asset('mat/css/data-table/bootstrap-editable.css')}}">
    <!-- normalize CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('mat/css/normalize.css')}}">
    <!-- charts CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('mat/css/c3.min.css')}}">
    <!-- style CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('mat/style.css')}}">
    <!-- responsive CSS
    ============================================ -->
    <link rel="stylesheet" href="{{asset('mat/css/responsive.css')}}">
    <!-- modernizr JS
    ============================================  -->
    <script src="{{asset('mat/js/vendor/modernizr-2.8.3.min.js')}}"></script>
   
</head>
<body class="materialdesign">
<div class="wrapper-pro">
    <div id="back__preloader">
            <div id="back__circle_loader"></div>
            <div class="back__loader_logo"><img src="/img/dlog.svg" alt="Preload"></div>
        </div>
        
        <div  class="left-sidebar-pro ">
            <nav style="background: none; background-attachment: none; border: none; box-shadow: none;" id="sidebar">
                <div style="background: none; background-attachment: none; border: none; box-shadow: none;" class="sidebar-header">

                   <a href="">
                    @if(! $ecoles->isEmpty())
                    @foreach($ecoles as $ecole)
                    <img style="width: 90px; height: 90px" src="/uploads/admin/{{$ecole->image}}"  alt="" />
                    @endforeach
                    @else
                    <img style="width: 90px; height: 90px" src="/img/user.png" alt="user-img" class="img-circle">
                      @endif
                      </a>
                    <h3><a href="{{route('profil')}}" class="d-block">{{Auth::user()->name}} <i style="font-size:10px; color: #3C3;" class="nav-icon fas fa-circle"></i></a></h3>
                    <p>Administrateur</p>
                    <strong>DG+</strong>
                </div>
                 @if(! $ecoles->isEmpty())
                <div  class="left-custom-menu-adp-wrap ">
                    <ul  class="nav navbar-nav left-sidebar-menu-pro">
                        <li  class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i style="color: #3366cc;" class="fa big-icon fa-table"></i> <span class="mini-dn">Cycles</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                   @foreach($cycles as $cycle)
                                   @if($cycle->maternelle == null)
                                    @else
                                    <a href="{{route('maternelle')}}" class="dropdown-item">
                                      {{$cycle->maternelle}}</a>
                                    @endif 
                                    @if($cycle->primaire == null)
                                     @else
                                      <a href="{{route('primaire')}}" class="dropdown-item">
                                       {{$cycle->primaire}}</a>
                                     @endif  
                                     @if($cycle->secondaire == null)
                                     @else
                                    <a href="{{route('secondaire')}}" class="dropdown-item">
                                       {{$cycle->secondaire}}</a>
                                    @endif  
                                   @if($cycle->humanite == null)
                                  @else
                                  <a href="{{route('humanite')}}" class="dropdown-item">
                                  {{$cycle->humanite}}</a> 
                                  @endif 
                                 @endforeach
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i style="color:#F30" class="fa big-icon fa-dedent (alias)"></i> <span class="mini-dn">Options</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="{{route('option', Auth::user()->ecole)}}" class="dropdown-item">Voir</a>
                              
                            </div>
                        </li>
                      
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-graduation-cap"></i> <span class="mini-dn">Elève</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown chart-left-menu-std animated flipInX">
                                <a href="{{route('inscrit', Auth::user()->ecole)}}" class="dropdown-item">Ajouter</a>
                                <a href="{{route('gestion_eleve', Auth::user()->ecole)}}" class="dropdown-item">Elève</a>
                                <a href="{{route('tous_eleve')}}" class="dropdown-item">Tous</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i style="color:#3C3" class="fa big-icon fa-user"></i> <span class="mini-dn">Personnel</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="{{route('ajout_perso')}}" class="dropdown-item">Ajouter</a>
                                <a href="{{route('personnels.index')}}" class="dropdown-item">Personnel</a>
                                <a href="{{route('tout_perso', Auth::user()->ecole)}}" class="dropdown-item">Tous</a>
                            </div>
                          </li>
                          <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-eur"></i> <span class="mini-dn">Finance</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                            <a href="{{route('finance')}}" class="dropdown-item">Frais Scolaires</a>
                            <a href="contact-client.html" class="dropdown-item">Autres Frais</a>
                            <a href="contact-client-v.1.html" class="dropdown-item">Dépenses</a> 
                            <a href="project-details.html" class="dropdown-item">Journal de caisse</a>
                            <a href="project-details.html" class="dropdown-item">E-Caisse</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i style="color:#3366cc" class="fa big-icon fa-pencil-square"></i> <span class="mini-dn">Rapports</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown form-left-menu-std animated flipInX">
                                <a href="basic-form-element.html" class="dropdown-item">Nouveau</a>
                                <a href="advance-form-element.html" class="dropdown-item">Journalier</a>
                                <a href="password-meter.html" class="dropdown-item">Mansuel</a>
                                <a href="multi-upload.html" class="dropdown-item">Annuel</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-folder-open"></i> <span class="mini-dn">Mes documents</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                        <div role="menu" class="dropdown-menu left-menu-dropdown apps-left-menu-std animated flipInX">
                                <a href="notifications.html" class="dropdown-item">Nouveau</a>
                                <a href="alerts.html" class="dropdown-item">Documents</a>
                         
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i style="color:#3C3" class="fa big-icon fa-files-o"></i> <span class="mini-dn">Evenements</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown pages-left-menu-std animated flipInX">
                                <a href="login.html" class="dropdown-item">Créer</a>
                                <a href="register.html" class="dropdown-item">Voir</a>
                            </div>
                        </li>
                        
                        <br>
                        <br>
                        <br>
                        <li  class="nav-item text-center"> <span class="mini-dn text-muted"><small>Confidatialité |<br> Conditions générales |<br> Publicités | Publicitaires | Plus.</small></span>
                        <br> <span class="mini-dn text-muted"><small> &#169; 2022 Dgrace | by Aziz-K.</small></span>
                        </li>
                        @else
                        <li style="padding: 5px;" class="text-center"><i style="color:silver; font-size:70px" class="fa big-icon fa-lock"></i> <span class="mini-dn text-muted"><br>Menu bloqué,<br> ajouter les informations<br> exacte concernant<br> votre école avant de<br> pouvoir le débloqué. <br><br><i style="color:silver; font-size:40px" class="fa fa-arrow-circle-right"></i></span> <span class="indicator-right-menu mini-dn">
                        </li>
                         @endif 
                         
                    </ul>
                </div>
                
            </nav>
            
        </div>
  
@include('layouts.nav')
@include('layouts.mobile')
@yield('content') 
@include('activite.mbeba')














  <div class="row mt-4">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="adresse" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Avenue, n° de l'école" required="">
                                           @error('adresse')
                                            <span class="invalid-feedback" role="alert">
                                            <span style="color: darkred;" class="spa">{{ $message }}</span>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="commine" class="form-control" placeholder="Commune de l'école" required="">
                                        @error('commine')
                                            <span class="invalid-feedback" role="alert">
                                            <span style="color: darkred;" class="spa">{{ $message }}</span>
                                            </span>
                                        @enderror
                                    </div> 
                                     
                                </div>
                                <div class="col-md-6"> 
                                <div class="form-group">
                                <div class="btn-group images-cropper-pro">
                                <label title="Upload image file" for="inputImage" class="btn btn-primary img-cropper-cp">
                                <input type="file" accept="image/*" name="avatar" id="inputImage" class="hide"> Photo de l'école
                                </label>
                                <label title="Donload image" id="download" class="btn btn-primary">Cliquer ici</label>
                                </div>
                                     @error('avatar')
                                    <span class="invalid-feedback" role="alert">
                                    <span style="color: darkred;">{{ $message }}</span>
                                    </span>
                                    @enderror
                                </div>
                                
                                    <div class="form-group">
                                    <select class="form-control" name="regime" id="exampleSelect1">
                                    <option value="" style="background: black">Regime de l'école</option>
                                    <option value="Publique">Publique</option>
                                    <option value="Privée">Privée</option>
                                    <option value="Protéstante">Conventionée Protéstante</option>
                                    <option value="Chatolique">Conventionée Chatolique</option>
                                    <option value="Kimbanguiste">Conventionée Kimbanguiste</option>
                                    <option value="Salitiste">Salitiste</option>
                                    <option value="Islamique">Islamique</option>
                                        </select>
                                        @error('regime')
                                            <span class="invalid-feedback" role="alert">
                                            <span style="color: darkred;" class="spa">{{ $message }}</span>
                                            </span>
                                        @enderror
                                    </div>  
                                </div>
                                <div class="col-md-6">  
                                <div class="form-group has-success">
                                        <label for="description">Devise de l'école</label>
                                        <textarea name="apropo" class="form-control" id="description" cols="30" rows="4" required=""></textarea> 
                                        <div class="valid-feedback">
                                        </div>
                                    </div>
                                    
                                <div class="form-group">
                                <div class="btn-group images-cropper-pro">
                                <label title="Upload image file" for="inputImage" class="btn btn-primary img-cropper-cp">
                                <input type="file" accept="image/*" name="image" id="inputImage" class="hide">Cliquer ici
                                </label>
                                <label title="Donload image" id="download" class="btn btn-primary">Photo d'administrateur</label>
                                </div>
                                </div>
                                
                                </div>
                                </div>
                            </div> 
                     <br>











<a onclick="return Confirmation()" href="{{route('supFrais', [$table->id, Auth::user()->ecole])}}"><i style="font-size: 30px;" class="fa fa-trash"></i></a>






<div class="feed-mesage-project-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            
                                <div class="sparkline8-hd">
                                    <div class="main-sparkline8-hd">
                                        <h1>Messages</h1>
                                        <div class="sparkline8-outline-icon">
                                            <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span><i class="fa fa-wrench"></i></span>
                                            <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline8-graph dashone-comment messages-scrollbar dashtwo-messages">
                                    @foreach($tables as $table)
                                    @if(! $table == '')
                                    <div class="comment-phara">
                                        <div class="comment-adminpr">
                                            <a class="dashtwo-messsage-title" href="#">{{strtoupper($show->nom)}} {{strtoupper($show->post_nom)}}</a>
                                            <p class="comment-content"> Vient de payer <b>
                                            {{$table->franc != '' ? 'CDF'  : '$' }} {{$table->franc}} {{$table->dollar}}</b> frais scolaire du <b>{{$table->trimestre}}</b> pour l'année scolaire {{AnneeSco()}}</p>
                                        </div>
                                        <div class="admin-comment-month">
                                            <p class="comment-clock"><i class="fa fa-clock-o"></i> {{$table->created_at->diffForhumans()}}</p>
                                            <button class="comment-setting" data-toggle="collapse" data-target="{{route('supFrais', [$table->id, Auth::user()->ecole])}}">...</button>
                                            <ul id="{{route('supFrais', [$table->id, Auth::user()->ecole])}}" class="comment-action-st collapse">
                                                <li><a onclick="return Confirmation()" href="{{route('supFrais', [$table->id, Auth::user()->ecole])}}">Supprimer</a>
                                                </li>
                                                <li><a href="#">Modifier</a></li>
                                                <li><a href="#">Imprimer</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    @else
                                    <div class="comment-phara">
                                    <div class="comment-adminpr">
                                            <a class="dashtwo-messsage-title" href="#">{{strtoupper($show->nom)}} {{strtoupper($show->post_nom)}}</a>
                                            <p class="comment-content">N'a rien payé.</p>
                                        </div>
                                     </div>
                                    @endif
                                    @endforeach
                                </div>
                                </div>
                                </div>
                               </div>
                           </div>
  @extends('layouts.master2', ['title' => 'login'])
  @section('content')
    <!--================= back wrapper Start Here =================-->
   @include('activite.mbeba')
          <div id="back__preloader">
              <div id="back__circle_loader"></div>
              <div class="back__loader_logo"><img src="/img/dlog.svg" alt="Preload"></div>
          </div>
          <!--================= Preloader Section End Here =================-->
          <div class="back-wrapper">
              <div class="back-wrapper-inner">
                  <div style="background: "  class="back-login-page  pt-100 pb-10 ">
                      <div class="container">
                          <div class="row">
                              <h1 class=""><img src="/img/dlog.svg" alt=""></h1>
                              <hr>
                              @if(! Route::is('register'))
                              <div class="col-md-3">
                              @else
                              <div class="col-md-3">
                              @endif
                                  <div class="login-left-content">

                                      <h3 class="">Gérer votre Ecole <br><small>Autrement</small>.</h3>
                                      <p>Vous avez pleinement la possibilité de gérer votre école de près ou de loin avec fiabilité et sécurité.</p>
                                      @if(! Route::is('register'))
                                      <p ><a class="text-center btn btn-info form-control text-white" href="{{route('register')}}">Créer un compte</a></p>
                                      @else
                                      <p ><a class="text-center btn btn-info form-control text-white" href="{{route('login')}}">Se connecter</a></p>
                                      @endif

                                      <img src="acc/assets/images/login/2.png" alt="login">
                                  </div>
                              </div>
                              @if(! Route::is('register'))
                              <div class="col-md-3"></div>
                              @else
                              <div class="col-md-1"></div>
                              @endif
                              @if(! Route::is('register'))
                              <div  class="col-md-6">
                                  <div style="border-radius: 10px;" class="login-right-form">
                                       <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                          <ul class="social-links">
                                              <i class="feather feather-user text-muted"></i><h4 class="text-muted"><b>Se Connecter</b></h4>
                                              <hr>
                                          </ul>
                                          <p>
                                              <input  type="text" name="telephone" class="form-control mb-2" placeholder="Téléphone" required="" autocomplete="telephone">
                                          </p>
                                          <p>
                                              <input type="password" name="password" class="form-control mb-2" placeholder="Mot de passe" required="" />
                                          </p>
                                          <div class="back-check-box">
                                              <input type="checkbox" id="box-1"> Garde ma session
                                              <p><a href=""></rect><path d="M7 11V7a5 5 0 0 1 9.9-1"></path> Mot de passe oublié ? </a></p>
                                          </div>
                                          <button type="submit" id="button" name="submit">CONNEXION</button>
                                      </form>
                                  </div>
                              </div>
                              @else
                              <div  class="col-md-8">
                                  <div style="border-radius: 10px;" class="login-right-form">
                                       <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                          <ul class="social-links">
                                              <i class="feather feather-user"></i><h4 class="text-muted"><b>Créer un compte</b></h4>
                                              <hr>
                                          </ul>
                                          <div class="row">
                                          <div class="col-md-6">
                                          <p>
                                              <input   name="name" type="text" class="form-control " placeholder="Nom d'administrateur" required="" />
                                             @error('name')
                                            <span class="invalid-feedback" role="alert">
                                            <span style="color: red;" class="spa ">{{ $message }}</span>
                                            </span>
                                            @enderror
                                          </p>
                                          </div>
                                          <div class="col-md-6">
                                          <p>
                                            <input   type="text"  name="ecole" class="form-control  " placeholder="Nom de l'école" required="" />
                                             @error('ecole')
                                            <span class="invalid-feedback" role="alert">
                                            <span style="color: red;" class="spa ">{{ $message }}</span>
                                            </span>
                                            @enderror
                                          </p>
                                          </div>
                                          <div class="col-md-6">
                                             <p>
                                              <input  type="number"   name="telephone" class="form-control " placeholder="Téléphone" required="" />
                                             @error('telephone')
                                            <span class="invalid-feedback" role="alert">
                                            <span style="color: red;" class="spa ">{{ $message }}</span>
                                            </span>
                                            @enderror
                                          </p>
                                          </div>
                                          <div class="col-md-6">
                                          <p>
                                             <select class="form-control mt-2" name="province">
                                             <option value="Kinshasa">Kinshasa</option>
                                              <option value="Matadi">Matadi</option>
                                              <option value="Lubumbashi">Lubumbashi</option>
                                              <option value="Maniema">Maniema</option>
                                              <option value="Kisantu">Kisantu</option>
                                              <option value="Luwozi">Luwozi</option>
                                              <option value="Mbanza-Ngungu">Mbanza-Ngungu</option>
                                              <option value="Kolwezi">Kolwezi</option>
                                              <option value="Goma">Goma</option>
                                              <option value="Mbuji-mayi">Mbuji-mayi</option>
                                              <option value="Kenge">Kenge</option>
                                              <option value="Kikwiti">Kikwiti</option>
                                              <option value="Nord-Kivu">Nord-Kivu</option>
                                              <option value="Sud-Kivu">Sud-Kivu</option>
                                              <option value="Boma">Boma</option>
                                              <option value="Popo">Popo</option>
                                              <option value="Muanda">Muanda</option>
                                              </select>
                                          </p>
                                          </div>
                                          <div class="col-md-6">
                                          <p>
                                             <input   type="password" name="password" class="form-control  mb-2" placeholder="Mot de passe" required="">
                                            @error('password')
                                            <span>
                                            <span style="color: red;" class="spa ">{{ $message }}</span>
                                            </span>
                                            @enderror
                                          </p>
                                          </div>
                                          <div class="col-md-6">
                                          <p>
                                              <input  type="password" name="password_confirmation" class="form-control  mb-2" placeholder="Confirmer mot de passe" required="">
                                              @error('password_confirmation')
                                              <span >
                                              <span style="color: red;" class="spa ">{{ $message }}</span>
                                              </span>
                                              @enderror
                                          </p>
                                          </div>
                                      </div>
                                          <button type="submit" id="button" name="submit">CONFIRMER</button>
                                      </form>
                                  </div>
                              </div>
                              @endif
                          </div>
                      </div>
                  </div>
              </div>
          </div>
    <!-- course section end -->
  @include('layouts.footer2')
  @endsection

















  @include('Eleves.voir_aside')
            <!-- /.card-header -->

<div class="mail-title inbox-bt-mg">
 <h2><i class="fa fa-graduation-cap"></i>  Elève</h2>
    @include('Eleves.aside_imp')
    </div>

            <!-- tabs End-->
        </div>
    </div>

            </div>
                </div>

                    </div>
                    </div>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>













           <div class="inbox-mailbox-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-3">
                                @foreach($shows as $show)
                                <div class="inbox-email-menu-list compose-b-mg-30 shadow-reset">
                                        <div class="card"> <img style="border-radius: 10px;" class="card-img" src="/uploads/base/{{$show->image}}" height="456" alt="Card image">
                            <div class="card-img-overlay card-inverse text-white social-profile d-flex justify-content-center">
                                <div class="align-self-center"><br>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                                  <div  class="compose">
                            </div>
                           <h3 class="text-center"><b>{{$show->nom}} {{$show->post_nom}} {{$show->prenom}}
                            </b></h3>
                            <hr>
                            <div class="card-body"> <small class="text-muted">Frais </small>
                                <h6>cdf {{sprintf('%.2f', $fraisFranc)}}</h6> <small class="text-muted p-t-30 db">Téléphone</small>
                                <h6>{{$show->phone}}</h6> <small class="text-muted p-t-30 db">Addresse</small>
                                <h6>{{$show->adresse}}</h6>
                            </div>
                                </div>
                                    </div>
                                    @endforeach
                                </div>
                                 @include('Eleves.bloc')
                                 @include('finance.slide_frais')
                                <div  class="col-lg-9">
























 <div class="row">
            <div class="col-12 col-sm-12">
           <div class="admintab-area">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="admintab-wrap mg-b-40">
                                <ul class="nav nav-tabs custom-menu-wrap custon-tab-menu-style1">
                                    <li class="active"><a data-toggle="tab" href="#TabProject"><span class="adminpro-icon adminpro-analytics tab-custon-ic"></span>  À propos</a>
                                    </li>
                                    <li><a data-toggle="tab" href="#TabDetails"><span class="adminpro-icon adminpro-analytics-arrow tab-custon-ic"></span>  Frais scolaire</a>
                                    </li>
                                    <li><a data-toggle="tab" href="#TabPlan"><span class="adminpro-icon adminpro-analytics-bridge tab-custon-ic"></span>   Profile</a>
                                    </li>
                                    <li><a data-toggle="tab" href="#TabPlan1"><span class="adminpro-icon adminpro-analytics-bridge tab-custon-ic"></span>   Infos</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="TabProject" class="tab-pane in active animated flipInX custon-tab-style1">

                                    <div class="row">
                                    <div class="col-lg-12">
                                        <div class="sparkline8-list basic-res-b-30 shadow-reset">
                                            <div class="sparkline8-hd">
                                                <div class="main-sparkline8-hd">
                                                    <h2>À propos</h2>
                                                    <div class="sparkline8-outline-icon">
                                                        <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                                        <span><i class="fa fa-wrench"></i></span>
                                                        <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="sparkline8-graph">
                                                <div class="basic-login-form-ad">

                                     <strong><i class="fas fa-book mr-1"></i> Classe</strong>
                                            <p class="text-muted">
                                              {{$show->classe}} {{$show->cycle}}, ({{$show->option}})
                                            </p>
                                            <hr>
                                            @if($show->sexe == 'M')
                                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Né à</strong>
                                            <p class="text-muted">{{$show->lieu}}, {{(new DateTime($show->date_ne))->format('d/m/Y')}}</p>
                                            @else
                                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Née à</strong>
                                            <p class="text-muted">{{$show->lieu}}, le {{(new DateTime($show->date_ne))->format('d/m/Y')}}</p>
                                            @endif
                                            <hr>
                                            <strong><i class="fas fa-phone mr-1"></i> Contact</strong>
                                            <p class="text-muted">
                                              <span class="tag tag-danger">{{$show->phone}}</span>
                                            </p>
                                            <hr>
                                            <strong><i class="far fa-calendar mr-1"></i> Année</strong>
                                            <p class="text-muted">Local : {{$show->local}}</p>
                                            <p class="text-muted">Année d'inscription <b>({{$show->annee_sco}})</b>.</p>
                                            <hr>
                                           <strong><i class="fas fa-user mr-1"></i> Papa</strong>
                                            <p class="text-muted">
                                              {{$show->pere}}
                                            </p>

                                            <hr>
                                            <strong><i class="fas fa-user mr-1"></i> Maman</strong>
                                            <p class="text-muted">
                                              <span class="tag tag-danger">{{$show->mere}}</span>
                                            </p>
                                            <hr>
                                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Adresse</strong>
                                            <p class="text-muted">{{$show->adresse}}</p>
                                            <hr>
                                             <strong><i class="fas fa-male mr-1"></i> Genre</strong>
                                            <p class="text-muted">{{$show->sexe}}</p>

                                            <hr>
                                            <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
                                            @if($show->active == 0)
                                            <p class="text-muted mr-1">Aucun message</p>
                                            @else
                                            <p class="text-muted mt-3"> <i style="font-size: 25px; color: darkred;" class="fa  fa-exclamation-triangle"></i> L'élève n'a pas d'acces, son identifiant est désactivé !</p>
                                            @endif

                                              </div>

                                            </div>
                                        </div>
                                    </div>

                                    </div>


                                    </div>
                                    <div id="TabDetails" class="tab-pane animated flipInX custon-tab-style1">
                                <div class="row">
                                <div class="col-lg-12">
                                    <div class="sparkline8-list basic-res-b-30 shadow-reset">
                                        <div class="sparkline8-hd">
                                            <div class="main-sparkline8-hd">
                                                <h2>Frais scolaires</h2>
                                                <div class="sparkline8-outline-icon">
                                                    <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                                    <span><i class="fa fa-wrench"></i></span>
                                                    <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sparkline8-graph">
                                            <div class="basic-login-form-ad">
                                        @include('finance.middle_fiche_eleve')

                                        </div>
                                            </div>
                                        </div>
                                    </div>

                                    </div>
                                    </div>
                                    <div id="TabPlan" class="tab-pane animated flipInX custon-tab-style1">
                                        <div class="row">
                                    <div style="background: black;" class="col-lg-12">
                                    <div class="sparkline8-list basic-res-b-30 shadow-reset">
                                        <div class="sparkline8-hd">
                                            <div class="main-sparkline8-hd">
                                                <h2>Profile</h2>
                                                <div class="sparkline8-outline-icon">
                                                    <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                                    <span><i class="fa fa-wrench"></i></span>
                                                    <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sparkline8-graph">
                                        <div class="basic-login-form-ad">
                                        @include('mosali.edit.edit_eleve')

                                        </div>
                                            </div>
                                        </div>
                                    </div>

                                    </div>

                                    </div>
                                     <div id="TabPlan1" class="tab-pane animated flipInX custon-tab-style1">
                                    <div class="row">
                                    <div class="col-lg-12">
                                    <div class="sparkline8-list basic-res-b-30 shadow-reset">
                                        <div class="sparkline8-hd">
                                            <div class="main-sparkline8-hd">
                                                <h2>Infos</h2>
                                                <div class="sparkline8-outline-icon">
                                                    <span class="sparkline8-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                                    <span><i class="fa fa-wrench"></i></span>
                                                    <span class="sparkline8-collapse-close"><i class="fa fa-times"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="sparkline8-graph">
                                            <div class="basic-login-form-ad">
                                        @include('mosali.edit.edit_info')

                                        </div>
                                            </div>
                                        </div>
                                    </div>

                                    </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- tabs End-->
        </div>
    </div>



























             <h4 class="bg bg-secondary text-muted text-bold text-center p-2">2<sup>ème</sup> Trimestre</h4>
              <div class="row">
              <div class="col-md-12">

                        <div class="card">
                                <div class="progress m-t-20">
                                   @foreach($Dmodalites as $modalite)
                                    @if(! $modalite->montant_cdf == null)
                                        @if($modalite->montant_cdf == $DfraisFranc)
                                        <div class="progress-bar bg-success" style="width: 100%; height:15px;" role="progressbar">100%</div>
                                        @endif
                                    @else
                                        @if($modalite->montant_dollar == $DfraisDollar)
                                        <div class="progress-bar bg-success" style="width: 100%; height:15px;" role="progressbar">100%</div>
                                        @endif
                                    @endif
                                   @endforeach
                            </div>
                        </div>
              </div>
            </div>
              <h4 class="mt-1">Montant <small>fixé pour ce trimestre</small></h4>
              <div class="bg-secondary text-muted py-2 px-3 mt-1">
                <h2 class="mb-0">
                  @foreach($Dmodalites as $modalite)
                  @if(! $modalite->montant_cdf == null)
                      CDF {{sprintf('%.2f', $modalite->montant_cdf)}}
                  @else
                      $ {{sprintf('%.2f', $modalite->montant_dollar)}}
                  @endif
                 @endforeach
                </h2>
              </div>
              <h4 class="mt-1">Montant <small>payé</small></h4>
              <div class="bg-gray py-2 px-3 mt-2">
                <h2 class="mb-0">
                  @foreach($Dmodalites as $modalite)
                  @if(! $modalite->montant_cdf == null)
                  CDF {{sprintf('%.2f', $DfraisFranc)}}
                  @else
                  $ {{sprintf('%.2f', $DfraisDollar)}}
                  @endif
                  @endforeach
                </h2>
                <h4 class="mt-0">
                  <small>

                     <!-- Default box
                    *
                    // On mentionne le solde de frais scolaire de l'élève
                    *
                   -->
                  @foreach($Dmodalites as $modalite)
                  @if($modalite->montant_cdf)
                      @if($modalite->montant_cdf == $DfraisFranc)
                        L'élève a soldé ce trimestre
                      @else
                      Reste à payer :
                      @endif
                   @else
                      @if($modalite->montant_dollar == $DfraisDollar)
                       L'élève a soldé
                      @else
                      Reste à payer :
                      @endif
                   @endif
                  @endforeach

                   <!--
                    *
                    // On mentionne le reste de frais scolaire de l'élève
                    *
                   -->
                  @foreach($Dmodalites as $modalite)
                  @if($modalite->montant_cdf)
                      CDF {{sprintf('%.2f', $modalite->montant_cdf - $DfraisFranc)}}
                   @else
                      $ {{sprintf('%.2f', $modalite->montant_dollar - $DfraisDollar)}}
                   @endif
                  @endforeach


                </small>
                </h4>
              </div>

              <div data-toggle="modal" data-target="#myModal" class="mt-2">
                <div class="btn btn-default btn-lg btn-flat">
                  <i class="fas fa-cart-plus fa-lg mr-2"></i>
                  Payer
                </div>
              </div>

            </div>
          </div>





























<div class="sparkline10-graph">
<div class="basic-login-form-ad">
<div class="row">
    <div class="col-lg-12">
        <div class="basic-login-inner inline-basic-form">
            @forelse($maters as $mat)
              <form action="{{route('update_finance', $mat->id)}}" method="post" class="">
                      @csrf
            <div class="form-group-inner">
                <div class="row">

                    <div class="col-lg-2">
                        <select class="form-control basic-ele-mg-b-10" name="classe" placeholder="Classe"  required="">
                       <option>{{$mat->classe}}</option>
                       <option value="1èr">1èr</option>
                       <option value="2ème">2ème</option>
                       <option value="3ème">3ème</option>
                       <option value="4ème">4ème</option>
                       <option value="5ème">5ème</option>
                       <option value="6ème">6ème</option>
                       <option value="7ème">7ème</option>
                       <option value="8ème">8ème</option>
                      </select>
                        </div>

                        <div class="col-lg-2">
                          <select class="form-control basic-ele-mg-b-10" name="trimestre"  placeholder="Local"  required="">
                          <option>{{$mat->trimestre}}</option>
                           <option value="1èr Trimestre">1<sub>èr</sub> Trimestre</option>
                           <option value="2ème Trimestre">2<sub>ème</sub> Trimestre</option>
                           <option value="3ème Trimestre">3<sub>ème</sub> Trimestre</option>
                           <option value="1èr Tranche">1<sub>èr</sub> Tranche</option>
                           <option value="2ème Tranche">2<sub>ème</sub> Tranche</option>
                            </select>
                            </div>

                          <div class="col-lg-4">
                            <input style="border: none" name="franc" type="text" value="{{! $mat->montant_cdf == null ? $mat->montant_cdf : $mat->montant_dollar}}" class=" form-control text-center">
                              <span class="">{{! $mat->montant_cdf == null ? 'CDF' : '$'}}</span>
                              </div>

                          <div class="col-lg-2">
                          <input type="number" class="form-control basic-ele-mg-b-10" name="annee"    value="{{date('Y')}}">
                            </div>

                             <div class="col-lg-1">
                                  <a   href="{{route('update_finance', [$mat->id, $mat->trimestre, Auth::user()->ecole])}}">
                                <button  name="annee" type="submit" class="form-control text-center btn-default"><i class="far fa-edit (alias)"></i></button></a>
                                </div>
                                </form>
                                    <div class="col-lg-1">
                                    <a onclick="return Confirmation()"  href="{{route('destroy_fi', $mat->id)}}"><button  name="annee" type="submit" class="form-control text-center "><i class="far fa-trash-alt"></i></button></a>
                                    </div>
                                    @empty
                                    <div class="unread">
                                        <td class="inbox-small-cells"><i class="fa fa-bell-o"></i></td>
                                        <td class="view-message dont-show text-muted">Aucune enregistrement de frais</td>
                                        <td class="view-message dont-show"><i style="font-size: 50px; color: silver" class="fa fa-exclamation-triangle"></i></td>
                                    </div>
                                    @endforelse
                                      </div>
                                          </div>
                                        </div>
                                    </div>
                                </div>



           <div class="admintab-area">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="admintab-wrap mg-b-40">
                                <ul class="nav nav-tabs custom-menu-wrap custon-tab-menu-style1">
                                    <li class="active"><a data-toggle="tab" href="#TabProject"><span class="adminpro-icon adminpro-analytics tab-custon-ic"></span>  Maternelle</a>
                                    </li>
                                    <li><a data-toggle="tab" href="#TabDetails"><span class="adminpro-icon adminpro-analytics-arrow tab-custon-ic"></span>  Primaire</a>
                                    </li>
                                    <li><a data-toggle="tab" href="#TabPlan"><span class="adminpro-icon adminpro-analytics-bridge tab-custon-ic"></span>   Secondaire</a>
                                    </li>
                                    <li><a data-toggle="tab" href="#TabPlan1"><span class="adminpro-icon adminpro-analytics-bridge tab-custon-ic"></span>   Humanité</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="TabProject" class="tab-pane in active animated flipInX custon-tab-style1">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    </div>
                                    <div id="TabDetails" class="tab-pane animated flipInX custon-tab-style1">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                                        <p>when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    </div>
                                    <div id="TabPlan" class="tab-pane animated flipInX custon-tab-style1">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>

                                    </div>
                                     <div id="TabPlan1" class="tab-pane animated flipInX custon-tab-style1">
                                        <p>HumaniLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- tabs End-->
        </div>
    </div>




























  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Tout élève </h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)"><b>{{Auth::user()->ecole}}</b></a></li>
                                <li class="breadcrumb-item active">{{date('Y')}}</li>
                            </ol>
                            <a href="">
                            <button data-toggle="modal" data-target=".bs-example-modal-lg" class="btn btn-info d-none d-lg-block m-l-15"><i style="" class="fa fa-arrow-circle-left"></i></button></a>
                        </div>
                    </div>
                </div>

    <div class="card-header">
              <div class="row">

                <div class="col-md-12">
              <div class="card-tools">
                <form action="#" method="get">
                <div class="input-group ">
                  <input type="text" name="luka" class="form-control" placeholder="Tapez le nom de l'élève">
                  <div class="input-group-append">
                    <div >
                      <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
                </form>
              </div>
            </div>

          </div>
        </div>

    <!-- Main content -->
    <section class="content mt-3">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row">
            @if(! $eleves->isEmpty())
            @foreach($eleves as $eleve)
            <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
              <div class="card bg-default d-flex flex-fill">
                <div class="card-header text-muted border-bottom-0">
                  {{(new DateTime($eleve->created_at))->format('d/m/Y')}}
                </div>
                <div class="card-body pt-0">
                  <div class="row">
                    <div class="col-7">
                      <h5 class="lead h5"><b>{{strtoupper($eleve->nom)}} {{strtoupper($eleve->post_nom)}}</b></h5>

                      <ul class="ml-4 mb-0 fa-ul text-muted">
                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Adresse: {{$eleve->adresse}}</li>
                        <li class="small"><span class="fa-li"></span> Téléphone : {{strtoupper($eleve->phone)}}</li>
                      </ul>
                    </div>
                    <div class="col-5 text-center">
                      <img  style="width:120px; height:120px; border: 3px solid silver;" src="/uploads/base/{{$eleve->image}}"  alt="user-avatar" class="img-circle img-fluid">
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="text-right">
                    <a href="{{route('voir_eleve', [$eleve->id, $eleve->nom, $eleve->post_nom, $eleve->prenom])}}" class="btn btn-sm btn-primary">
                      <i class="fas fa-user"></i> Voir Profile
                    </a>
                  </div>
                </div>
              </div>
            </div>
           @endforeach
                        <!-- Second Member -->
                       @else
                    <!-- /.col -->
                      <p class="text-muted  col-md-12 text-center"><i style="font-size: 120px; color: darkgray;" class="fa fa-exclamation-triangle"></i>  <br><b>{{Auth::user()->ecole}}</b> n'a aucune inscription, pour inscrire les élèves, Cliquer sur <b>Elève</b> épuis <b>Ajouter élève.</b>
                       </p>
                        <br>
                     @endif
                </div>




          </div>
        </div>
        <!-- /.card-body -->
        @include('cycles.pagenate')
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>

























 <div class="datatable-dashv1-list custom-datatable-overright">
          <div class="">
                <div class="container-fluid">
                    <div class="row">

                           <div class="col-lg-12">
                            <div class="admintab-wrap mg-b-40">
                                <ul class="nav nav-tabs custom-menu-wrap custon-tab-menu-style1">
                                    <li class="active"><a data-toggle="tab" href="#TabProject"><span class="adminpro-icon adminpro-analytics tab-custon-ic"></span> A propos</a>
                                    </li>
                                    <li><a data-toggle="tab" href="#TabDetails"><span class="adminpro-icon adminpro-analytics-arrow tab-custon-ic"></span> Frais Scolaire</a>
                                    </li>
                                    <li><a data-toggle="tab" href="#TabPlan"><span class="adminpro-icon adminpro-analytics-bridge tab-custon-ic"></span> Profil</a>
                                    </li>
                                     <li><a data-toggle="tab" href="#TabPlan1"><span class="adminpro-icon adminpro-analytics-bridge tab-custon-ic"></span> Infos</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="TabProject" class="tab-pane in active animated flipInX custon-tab-style1">

                                        <div class="">
                                <div class="row">
                                  <div class="col-md-12">

                                     <strong><i class="fas fa-book mr-1"></i> Classe</strong>
                                            <p class="text-muted">
                                              {{$show->classe}} {{$show->cycle}}, ({{$show->option}})
                                            </p>
                                            <hr>
                                            @if($show->sexe == 'M')
                                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Né à</strong>
                                            <p class="text-muted">{{$show->lieu}}, {{(new DateTime($show->date_ne))->format('d/m/Y')}}</p>
                                            @else
                                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Née à</strong>
                                            <p class="text-muted">{{$show->lieu}}, le {{(new DateTime($show->date_ne))->format('d/m/Y')}}</p>
                                            @endif
                                            <hr>
                                            <strong><i class="fas fa-phone mr-1"></i> Contact</strong>
                                            <p class="text-muted">
                                              <span class="tag tag-danger">{{$show->phone}}</span>
                                            </p>
                                            <hr>
                                            <strong><i class="far fa-calendar mr-1"></i> Année</strong>
                                            <p class="text-muted">Local : {{$show->local}}</p>
                                            <p class="text-muted">Année d'inscription <b>({{$show->annee_sco}})</b>.</p>
                                            <hr>
                                           <strong><i class="fas fa-user mr-1"></i> Papa</strong>
                                            <p class="text-muted">
                                              {{$show->pere}}
                                            </p>

                                            <hr>
                                            <strong><i class="fas fa-user mr-1"></i> Maman</strong>
                                            <p class="text-muted">
                                              <span class="tag tag-danger">{{$show->mere}}</span>
                                            </p>
                                            <hr>
                                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Adresse</strong>
                                            <p class="text-muted">{{$show->adresse}}</p>
                                            <hr>
                                             <strong><i class="fas fa-male mr-1"></i> Genre</strong>
                                            <p class="text-muted">{{$show->sexe}}</p>

                                            <hr>
                                            <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
                                            @if($show->active == 0)
                                            <p class="text-muted mr-1">Aucun message</p>
                                            @else
                                            <p class="text-muted mt-3"> <i style="font-size: 25px; color: darkred;" class="fa  fa-exclamation-triangle"></i> L'élève n'a pas d'acces, son identifiant est désactivé !</p>
                                            @endif

                                    </div>

                                  </div>

                                  </div>
                                    </div>
                                    <div id="TabDetails" class="tab-pane animated flipInX custon-tab-style1">
                                       @include('finance.middle_fiche_eleve')
                                    </div>
                                    <div id="TabPlan" class="tab-pane animated flipInX custon-tab-style1">
                                     @include('mosali.edit.edit_eleve')
                                    </div>
                                      <div id="TabPlan1" class="tab-pane animated flipInX custon-tab-style1">
                                       @include('mosali.edit.edit_info')

                                    </div>
                                </div>
                            </div>
                        </div>
                       </div>
                       </div>
                       </div>
                     </div>













 <div class="">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">A propos</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Frais scolaires</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Profile</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#info" role="tab">Info</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                 <div class="card-secondary">
                                  <br>
                                  <!-- /.card-header -->
                                <div class="">
                                <div class="row">
                                  <div class="col-md-12">

                                     <strong><i class="fas fa-book mr-1"></i> Classe</strong>

                                            <p class="text-muted">
                                              {{$show->classe}} {{$show->cycle}}, ({{$show->option}})
                                            </p>

                                            <hr>
                                            @if($show->sexe == 'M')
                                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Né à</strong>

                                            <p class="text-muted">{{$show->lieu}}, {{(new DateTime($show->date_ne))->format('d/m/Y')}}</p>
                                            @else
                                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Née à</strong>
                                            <p class="text-muted">{{$show->lieu}}, le {{(new DateTime($show->date_ne))->format('d/m/Y')}}</p>
                                            @endif
                                            <hr>

                                            <strong><i class="fas fa-phone mr-1"></i> Contact</strong>

                                            <p class="text-muted">
                                              <span class="tag tag-danger">{{$show->phone}}</span>

                                            </p>

                                            <hr>

                                            <strong><i class="far fa-calendar mr-1"></i> Année</strong>
                                            <p class="text-muted">Local : {{$show->local}}</p>
                                            <p class="text-muted">Année d'inscription <b>({{$show->annee_sco}})</b>.</p>
                                            <hr>

                                           <strong><i class="fas fa-user mr-1"></i> Papa</strong>

                                            <p class="text-muted">
                                              {{$show->pere}}
                                            </p>

                                            <hr>

                                            <strong><i class="fas fa-user mr-1"></i> Maman</strong>

                                            <p class="text-muted">
                                              <span class="tag tag-danger">{{$show->mere}}</span>

                                            </p>

                                            <hr>

                                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Adresse</strong>
                                            <p class="text-muted">{{$show->adresse}}</p>

                                            <hr>

                                             <strong><i class="fas fa-male mr-1"></i> Genre</strong>
                                            <p class="text-muted">{{$show->sexe}}</p>

                                            <hr>


                                            <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                                            @if($show->active == 0)
                                            <p class="text-muted mr-1">Aucun message</p>
                                            @else
                                            <p class="text-muted mt-3"> <i style="font-size: 25px; color: darkred;" class="fa  fa-exclamation-triangle"></i> L'élève n'a pas d'acces, son identifiant est désactivé !</p>
                                            @endif

                                    </div>

                                  </div>

                                  </div>
                                  <!-- /.card-body -->
                                </div>
                                </div>
                                <!--second tab-->
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="card-body">
                                        @include('finance.middle_fiche_eleve')
                                    </div>
                                </div>
                                <div class="tab-pane" id="settings" role="tabpanel">
                                    @include('mosali.edit.edit_eleve')

                                </div>
                                  <div class="tab-pane" id="info" role="tabpanel">
                                    @include('mosali.edit.edit_info')

                                </div>
                            </div>
                        </div>


































<!-- Content Wrapper. Contains page content -->
 <div  class="content-wrapper">

         <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">{{Auth::user()->ecole}}</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Accueil</a></li>
                                <li class="breadcrumb-item active">{{AnneeScolaire()}}</li>
                            </ol>
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
                        </div>
                    </div>
                </div>

    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->

       <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-default">
              <div class="inner">
                <h3>{{$eleves->count()}}</h3>

                <p>Elèves</p>
              </div>
              <div class="icon">
                <i class="fas fa-graduation-cap"></i>
              </div>
              <a href="{{route('gestion_eleve')}}" class="small-box-footer bg-primary">
                Plus info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-default">
              <div class="inner">
                <h3>{{$personnel->count()}}<sup style="font-size: 20px"></sup></h3>

                <p>Personnel</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{route('personnels.index')}}" class="small-box-footer bg-primary">
                Plus info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-default">
              <div class="inner">
                <h3>44</h3>

                <p>Frais Scolaires</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <a href="#" class="small-box-footer bg-primary">
                Plus info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-default">
              <div class="inner">
                <h3>{{$cycles->count()}}</h3>

                <p>Cycles</p>
              </div>
              <div class="icon">
                <i class="fas fa-chart-pie"></i>
              </div>
              <a href="#" class="small-box-footer bg-primary">
                Plus info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
        </div>
         @include('mosali.calendrier')
      </div>
    </section>
        <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">

       <div class="col-md-4">
        <div class="row">

          <div class="col-12">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">CPU Traffic</span>
                <span class="info-box-number">
                  10
                  <small>%</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12">
            <div  class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Likes</span>
                <span class="info-box-number">41,410</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-6"></div>
          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Nombre de payé</span>
                <span class="info-box-number">{{$payes->count()}}</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12">
            <div  class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">New Members</span>
                <span class="info-box-number">2,000</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        </div>

      <div class="col-md-8">
       @include('Eleves.eleve_recent')

        </div>

      </div>
    </section>

  </div>




 <!-- Main Sidebar Container -->
  <aside  class="main-sidebar sidebar-light-primary elevation-3">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="/img/dlog.svg" width="150" alt="homepage" class="dark-logo img-fluid" />
      <span class="brand-text font-weight-light"> </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
           @if(! $ecoles->isEmpty())
            @foreach($ecoles as $ecole)
            <img src="/uploads/admin/{{$ecole->image}}" alt="user-img" class="img-circle">
            @endforeach
            @else
            <img src="/img/user.png" alt="user-img" class="img-circle">
              @endif
        </div>
        <div class="info">
          <a href="{{route('profil')}}" class="d-block">{{Auth::user()->name}} <i style="font-size:10px; color: seagreen;" class="nav-icon fas fa-circle"></i></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
        <nav   id="sidebar">
                <div class="sidebar-header">
                    </a>
                    <h3>Aziz Kiala</h3>
                    <p>Administrateur</p>
                    <strong>DG+</strong>
                </div>
                <div class="left-custom-menu-adp-wrap">
                    <ul  class="nav navbar-nav left-sidebar-menu-pro">
                        <li class="nav-item">
                            <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i style="color: #3366cc;" class="fa big-icon fa-table"></i> <span class="mini-dn">Cycles</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="dashboard.html" class="dropdown-item">Maternelle</a>
                                <a href="dashboard-2.html" class="dropdown-item">Primaire</a>
                                <a href="analytics.html" class="dropdown-item">Secondaire</a>
                                <a href="widgets.html" class="dropdown-item">Humanité</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i style="color:#F30" class="fa big-icon fa-dedent (alias)"></i> <span class="mini-dn">Options</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="option.php" class="dropdown-item">Ajouter</a>

                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i style="color:#D20" class="fa big-icon fa-flask"></i> <span class="mini-dn">Classes</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="google-map.html" class="dropdown-item">Google Map</a>
                                <a href="data-maps.html" class="dropdown-item">Data Maps</a>
                                <a href="pdf-viewer.html" class="dropdown-item">Pdf Viewer</a>
                                <a href="x-editable.html" class="dropdown-item">X-Editable</a>
                                <a href="code-editor.html" class="dropdown-item">Code Editor</a>
                                <a href="tree-view.html" class="dropdown-item">Tree View</a>
                                <a href="preloader.html" class="dropdown-item">Preloader</a>
                                <a href="images-cropper.html" class="dropdown-item">Images Cropper</a>
                            </div>
                        </li>

                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-users"></i> <span class="mini-dn">Elève</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown chart-left-menu-std animated flipInX">
                                <a href="inscrit_eleve.php" class="dropdown-item">Ajouter</a>
                                <a href="line-charts.html" class="dropdown-item">Liste par classe</a>
                                <a href="line-charts.html" class="dropdown-item">Grille d'élèves</a>
                                <a href="eleve.php" class="dropdown-item">Tous</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i style="color:#3C3" class="fa big-icon fa-user"></i> <span class="mini-dn">Personnel</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="static-table.html" class="dropdown-item">Ajouter</a>
                                <a href="data-table.html" class="dropdown-item">Grille du Personnel</a>
                                <a href="data-table.html" class="dropdown-item">Tous</a>
                            </div>
                          </li>
                          <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-eur"></i> <span class="mini-dn">Finance</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown animated flipInX">
                                <a href="profile.html" class="dropdown-item">Frais Scolaires</a>
                                <a href="contact-client.html" class="dropdown-item">Autres Frais</a>
                                <a href="contact-client-v.1.html" class="dropdown-item">Listes</a>
                                <a href="project-list.html" class="dropdown-item">Modalités de Frais Sco</a>
                                <a href="project-details.html" class="dropdown-item">Journal de caisse</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i style="color:#3366cc" class="fa big-icon fa-pencil-square"></i> <span class="mini-dn">Rapports</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown form-left-menu-std animated flipInX">
                                <a href="basic-form-element.html" class="dropdown-item">Rediger un rapport</a>
                                <a href="advance-form-element.html" class="dropdown-item">Journalier</a>
                                <a href="password-meter.html" class="dropdown-item">Mansuel</a>
                                <a href="multi-upload.html" class="dropdown-item">Annuel</a>
                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="fa big-icon fa-folder-open"></i> <span class="mini-dn">Mes documents</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                        <div role="menu" class="dropdown-menu left-menu-dropdown apps-left-menu-std animated flipInX">
                                <a href="notifications.html" class="dropdown-item">Mes documents</a>
                                <a href="alerts.html" class="dropdown-item">Créer un dossier</a>

                            </div>
                        </li>
                        <li class="nav-item"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i style="color:#3C3" class="fa big-icon fa-files-o"></i> <span class="mini-dn">Pages</span> <span class="indicator-right-menu mini-dn"><i class="fa indicator-mn fa-angle-left"></i></span></a>
                            <div role="menu" class="dropdown-menu left-menu-dropdown pages-left-menu-std animated flipInX">
                                <a href="login.html" class="dropdown-item">Login</a>
                                <a href="register.html" class="dropdown-item">Register</a>
                                <a href="captcha.html" class="dropdown-item">Captcha</a>
                                <a href="checkout.html" class="dropdown-item">Checkout</a>
                                <a href="contact.html" class="dropdown-item">Contacts</a>
                                <a href="review.html" class="dropdown-item">Review</a>
                                <a href="order.html" class="dropdown-item">Order</a>
                                <a href="comment.html" class="dropdown-item">Comment</a>
                            </div>
                        </li>
                    </ul>
                </div>

            </nav>
      <!-- /.sidebar-menu -->
    </div>
  </aside>
@include('activite.mbeba')














<style type="text/css">
  .pe{
     z-index: 99999999999999;
  }
</style>
<body class="hold-transition light-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label"><img src="/img/dlog.svg"></p>
        </div>
    </div>
<div  class="wrapper">

  <!-- Preloader -->

  <!-- Navbar -->
  <nav  style="background: #00BBCC;" class="main-header navbar navbar-expand navbar-dark navbar-dark text-white">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('home')}}" class=" nav-link">Accueil</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">|</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block text-muted">
        <a href="{{route('profil')}}" class="nav-link">Profile</a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Recherche" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <!-- Messages Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-cogs"></i>
        </a>
      </li>
    </ul>
  </nav>
























<div class="container hero3__width">
                        <div class="row">
                            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                <div class="hero3__content pt-140 sm-pt-0">
                                    <span>Bienvenue sur Dgrace</span>
                                    <h1 class="hero3__title h2">Gérer votre Ecole <br><small>Autrement</small>.</h1>
                                    <p class="hero3__paragraph">Vous avez pleinement la possibilité de gérer votre école de près ou de loin avec fiabilité et sécurité.</p>
                                    <a href="about.html" class="hero3-btn">Discover More</a>
                                </div>
                            </div>
<div class="row">
                    <div class="col-md- "> <strong>Frais</strong>
                     <br>
                      <p class="text-muted">(123) 456 7890</p>
                       </div>
                      <div class="col-md-12 "> <strong>Montant payé</strong>
                           <br>

                          <p class="text-muted">{{sprintf('%.2f', $frais)}} FC</p>

                      </div>
                      <div class="col-md-12 "> <strong>Reste a payé</strong>
                          <br>
                          <p class="text-muted">(123) 456 7890</p>
                      </div>
                      <div class="col-md-12"> <strong>Solde</strong>
                          <br>
                          <p class="text-muted">(123) 456 7890</p>
                      </div>
                  </div>





@extends('layouts.master', ['title' => 'Elève'])
@section('content')
<!-- ============================================================== -->
  <div  class="content-wrapper">
    <!-- Content Header (Page header) -->
     @foreach($shows as $show)
     <div class="container-fluid">
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Elève </h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item h6"><a href="javascript:void(0)"><b>{{$show->nom}} {{$show->post_nom}}</b></a></li>
                                <li class="breadcrumb-item active h6">{{AnneeScolaire()}}</li>
                            </ol>
                            <button data-toggle="modal" data-target="#myModal" class="btn btn-primary d-none d-lg-block m-l-15"><i style="" class="fa fa-shopping-cart"></i> Frais</button>
                        </div>
                    </div>
                </div>
    <!-- Main content -->


                        <h6 class="text-center text-muted mt-2"> Modifier Informations</h6>
                        <hr>
                        <form action="{{route('update_eleve', $show->id)}}" method="post" role="form" class="form-horizontal">
                        {{csrf_field()}}
                          @foreach($cycles as $cycle)
                          <div class="row">
                                 <div class="form-group">
                                <div class="col-md-12">
                                <input  type="text" name="nom" required="" class="form-control form-control-line @error('nom') is-invalid @enderror" name="nom" value="{{strtoupper($show->nom)}}" required autocomplete="nom" placeholder="Nom"  autofocus="autofocus">
                                </div>
                                </div>
                                </div>
                                  <div class="form-group">
                                <div class="col-md-12">
                                <input  type="text" name="post" class="form-control form-control-line @error('post') is-invalid @enderror" name="post" value="{{strtoupper($show->post_nom)}}" required autocomplete="post" required="" placeholder="Post-nom">
                                </div>
                                </div>
                                </div>
                                 <div class="form-group">
                                <div class="col-md-12">
                                <input  type="text" name="prenom" class="form-control form-control-line @error('prenom') is-invalid @enderror" name="prenom" value="{{strtoupper($show->prenom)}}" required autocomplete="prenom" required="" placeholder="Prènom">
                                </div>
                                </div>
                                </div>
                                <div class="col-lg-6">
                                <label class="">
                                <input type="checkbox" name="sexe" value="{{$show->sexe}}" class="">
                                <span class="custom-control-indicator"></span>
                                <span  class="custom-control-description">Garçon</span>
                                </label>
                                <label class="col-lg-6">
                                <input type="checkbox" name="sexe" value="{{$show->sexe}}" class="" readonly="">
                                <span class="custom-control-indicator"></span>
                                <span  class="custom-control-description">Fille</span>
                                </label>
                                </div>

                                 <div class="form-group">
                                <div class="col-md-12">
                                <input type="text" class="form-control form-control-line @error('dat') is-invalid @enderror" name="dat" value="{{$show->date_ne}}" required autocomplete="dat" required="" name="dat" required="" placeholder="Date de naissance">
                                </div>
                                </div>
                                </div>

                                <div class="form-group">
                                <div class="col-md-12">
                                <input type="text" class="form-control form-control-line @error('dat') is-invalid @enderror" name="pere" value="{{$show->pere}}" required autocomplete="dat" required="" name="dat" required="" placeholder="Nom du père">
                                </div>
                                </div>
                                </div>

                                <div class="form-group">
                                <div class="col-md-12">
                                <input  type="text" class="form-control form-control-line @error('dat') is-invalid @enderror" name="mere" value="{{$show->mere}}" required autocomplete="dat" required="" name="dat" required="" placeholder="Nom de mère">
                                </div>
                                </div>
                                </div>

                                 <div class="form-group">
                                <div class="col-md-12">
                                <input  type="text" class="form-control form-control-line @error('dat') is-invalid @enderror" name="adresse" value="{{$show->adresse}}" required autocomplete="dat" required="" name="dat" required="" placeholder="Adresse complète de l'élève">
                                </div>
                                </div>
                                </div>

                                 <div class="form-group">
                                <div class="col-md-12">
                                <select  name="lieu" class="form-control form-control-line @error('lieu') is-invalid @enderror" name="lieu" value="{{ old('lieu') }}" required autocomplete="lieu">
                                <option selected>{{$show->lieu}}</option>
                                <option value="Kinshasa">Kinshasa</option>
                                <option value="Matadi">Matadi</option>
                                <option value="Lubumbashi">Lubumbashi</option>
                                <option value="Maniema">Maniema</option>
                                <option value="Kisantu">Kisantu</option>
                                <option value="Luwozi">Luwozi</option>
                                <option value="Mbanza-Ngungu">Mbanza-Ngungu</option>
                                <option value="Kolwezi">Kolwezi</option>
                                <option value="Goma">Goma</option>
                                <option value="Mbuji-mayi">Mbuji-mayi</option>
                                <option value="Kenge">Kenge</option>
                                <option value="Kikwiti">Kikwiti</option>
                                <option value="Nord-Kivu">Nord-Kivu</option>
                                <option value="Sud-Kivu">Sud-Kivu</option>
                                <option value="Boma">Boma</option>
                                <option value="Popo">Popo</option>
                                <option value="Muanda">Muanda</option>
                                <option value="Kinshasa">Kinshasa</option>
                                <option value="Kinshasa">Kinshasa</option>
                                <option value="Kinshasa">Kinshasa</option>
                                <option value="Kinshasa">Kinshasa</option>
                                <option value="Kinshasa">Kinshasa</option>
                                <option value="Kinshasa">Kinshasa</option>
                                <option value="Kinshasa">Kinshasa</option>
                                </select>
                                </div>
                               </div>
                              </div>

                               <div class="form-group">
                                <div class="col-md-12">
                                <div class="input-group ">
                                <input  type="text" name="phone" class="form-control form-control-line @error('phone') is-invalid @enderror"  value="{{strtoupper($show->phone)}}" required autocomplete="phone" placeholder="Téléphone" >
                                </div>
                            </div>

                                </div>
                                 <div class="form-group">

                                <div class="col-md-12">

                                    <select  name="classe" class="form-control form-control-line @error('classe') is-invalid @enderror" name="classe" value="{{ old('classe') }}" required autocomplete="classe">
                                    <option>{{$show->classe}}</option>
                                    <option value="1èr">1èr</option>
                                    <option value="2ème">2ème</option>
                                    <option value="3ème">3ème</option>
                                    <option value="4ème">4ème</option>
                                    <option value="5ème">5ème</option>
                                    <option value="6ème">6ème</option>
                                    <option value="7ème">7ème</option>
                                    <option value="8ème">8ème</option>
                                    </select>

                                </div>
                                </div>
                                </div>

                                <div class="form-group">

                                <div class="col-md-12">

                                    <select  name="cycle" class="form-control form-control-line @error('cycle') is-invalid @enderror" name="cycle" value="{{ old('cycle') }}" required autocomplete="cycle">
                                      <option>{{$show->cycle}}</option>
                                    @if(! $cycle->maternelle == null)
                                    <option value="Maternelle">Maternelle</option>
                                    @else
                                    @endif
                                    @if(! $cycle->primaire == null)
                                    <option value="Primaire">Primaire</option>
                                    @else
                                    @endif
                                    @if(! $cycle->secondaire == null)
                                    <option value="ETB">Etude de Base</option>
                                    @else
                                    @endif
                                    @if(! $cycle->humanite == null)
                                    <option value="Humanité">Humanité</option>
                                    @else
                                    @endif
                                    </select>
                                </div>
                                </div>
                                </div>


                                @if(! $show->option == null)
                                @if(! $cycle->humanite == null)
                                 <div class="form-group">
                                <div class="col-md-12">

                                   <select  name="option" class="form-control form-control-line @error('option') is-invalid @enderror" name="option" value="{{ old('option') }}" required autocomplete="option">
                                   <option selected>{{$show->option}}</option>
                                   <option>Aucune</option>
                                   @foreach($options as $option)
                                   @if(! $option->Biologie == null)
                                   <option value="Biologie-chimie">Biologie-chimie</option>
                                   @else
                                   @endif
                                   @if(! $option->Commerciale == null)
                                   <option value="Commerciale">Commerciale</option>
                                   @else
                                   @endif
                                   @if(! $option->Coupe_couture == null)
                                   <option value="Coupe-couture">Coupe-couture</option>
                                   @else
                                   @endif
                                   @if(! $option->Electricite == null)
                                   <option value="Eléctricité">Eléctricité</option>
                                   @else
                                   @endif
                                    @if(! $option->Electronique == null)
                                   <option value="Eléctronique">Eléctronique</option>
                                   @else
                                   @endif
                                    @if(! $option->Hotellerie == null)
                                   <option value="Hôtellerie">Hôtellerie</option>
                                   @else
                                   @endif
                                    @if(! $option->Hotesse == null)
                                   <option value="Hôtesse">Hôtesse</option>
                                   @else
                                   @endif
                                    @if(! $option->Latin_philo == null)
                                   <option value="Latin-philo">Latin-philo</option>
                                   @else
                                   @endif
                                    @if(! $option->Math_physique == null)
                                   <option value="Math-physique">Math-physique</option>
                                   @else
                                   @endif
                                    @if(! $option->Mecanique == null)
                                   <option value="Mécanique">Mécanique</option>
                                   @else
                                   @endif
                                    @if(! $option->Maconnerie == null)
                                   <option value="Maçonnerie">Maçonnerie</option>
                                   @else
                                   @endif
                                    @if(! $option->Pedagogie == null)
                                   <option value="Pédagogie">Pédagogie</option>
                                   @else
                                   @endif
                                    @if(! $option->Sociale == null)
                                   <option value="Sociale">Sociale</option>
                                   @else
                                   @endif
                                   @endforeach
                                  </select>
                                </div>
                                </div>
                                </div>
                                @else
                                @endif
                                @else
                                @endif

                                 <div class="form-group">
                                <div class="col-md-12">

                                    <select name="local" class="form-control form-control-line @error('local') is-invalid @enderror" name="local" value="{{ old('local') }}" required autocomplete="local">
                                      <option selected>{{$show->local}}</option>
                                      <option value="A">A</option>
                                      <option value="B">B</option>
                                      <option value="C">C</option>
                                      <option value="D">D</option>
                                      <option value="E">E</option>
                                      <option value="E">F</option>
                                      <option value="E">G</option>
                                      <option value="1">1</option>
                                      <option value="2">2</option>
                                      <option value="3">3</option>
                                      <option value="4">4</option>
                                      <option value="5">5</option>
                                      <option value="6">6</option>
                                      <option value="7">7</option>
                                      <option value="8">8</option>
                                      <option value="9">9</option>
                                      <option value="10">10</option>
                                      <option value="11">11</option>
                                      <option value="12">12</option>
                                      <option value="13">13</option>
                                      <option value="14">14</option>
                                      <option value="15">15</option>
                                      <option value="16">16</option>
                                      <option value="17">17</option>
                                      <option value="18">18</option>
                                      <option value="19">19</option>
                                      <option value="20">20</option>
                                    </select>

                                </div>
                                </div>
                                </div>
                                <div class="">

                                </div>
                                </div>
                                @endforeach
                          <div class="form-group">
                            <div class="col-lg-12">
                              <button class="btn btn-default form-control" type="submit"> Confirmer</button>

                            </div>
                          </div>
                        </form>































    <section class="content">
      <div class="container-fluid">
        @include('activite.mbeba')
        <div class="row">
          <div class="col-md-12">

            <!-- Profile Image -->
            <div style="background: rgba(55, 55, 55, 5.0); color: whitesmoke;" class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img width="400" height="400" style="border-radius: 5px" class="img-fluid"
                       src="/uploads/base/{{$show->image}}"
                       alt="User profile picture">

                </div>
                <h3 class="profile-username text-center"><b>{{strtoupper($show->nom)}} {{strtoupper($show->post_nom)}}</b> </h3>
                <p class="text-center">{{strtoupper($show->prenom)}}</p>
                <hr>
                <a href="#" class="{{$show->active == 0 ? 'btn btn-success btn-block' : 'btn btn-danger btn-block' }}"><b>{{$show->active == 0 ? 'Active' : 'Désactivé'}}</b></a>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
          <div class="row">
          <div class="col-md-12">
            <div  class="">
               <div style="background: none;" class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab"><i style="font-size: 25px" class="fas fa-desktop"></i></a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab"><i style="font-size: 25px" class="fas fa-users"></i></a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab"><i style="font-size: 25px" class="fas fa-edit"></i></a></li>
                  <li class="nav-item"><a class="nav-link" href="#setting" data-toggle="tab"><i style="font-size: 25px" class="fas fa-shopping-cart"></i></a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">

                     <!-- About Me Box -->
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Apropos de l'élève <b>{{strtoupper($show->nom)}} {{strtoupper($show->post_nom)}}</b> </h3>
              </div>
              <!-- /.card-header -->
            @include('Eleves.voir_aside')
              <!-- /.card-body -->
            </div>
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-danger">
                          10 Feb. 2014
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-envelope bg-primary"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 12:05</span>

                          <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                          <div class="timeline-body">
                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                            weebly ning heekya handango imeem plugg dopplr jibjab, movity
                            jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                            quora plaxo ideeli hulu weebly balihoo...
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-primary btn-sm">Read more</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-user bg-info"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                          <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
                          </h3>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-comments bg-warning"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                          <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                          <div class="timeline-body">
                            Take me to your leader!
                            Switzerland is small and neutral!
                            We are more like Germany, ambitious and misunderstood!
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-success">
                          3 Jan. 2014
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-camera bg-purple"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                          <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                          <div class="timeline-body">
                            <img src="https://placehold.it/150x100" alt="...">
                            <img src="https://placehold.it/150x100" alt="...">
                            <img src="https://placehold.it/150x100" alt="...">
                            <img src="https://placehold.it/150x100" alt="...">
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <div>
                        <i class="far fa-clock bg-gray"></i>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                   @include('mosali.edit.edit_eleve')
                  </div>

                  <div class="tab-pane" id="setting">

                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
      @include('finance.slide_frais')
      @endforeach
    </section>
    <!-- /.content -->
  </div>
@include('layouts.footer')
@endsection






@include('activite.mbeba')
        <div id="back__preloader">
            <div id="back__circle_loader"></div>
            <div class="back__loader_logo"><img src="/img/dlog.svg" alt="Preload"></div>
        </div>

        <!--================= Preloader Section End Here =================-->
        <div  class="back-wrapper">
            <div class="back-wrapper-inner">
                <div  class="back-login-page  pt-165 pb-0">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="login-left-content">
                                   <h1 class=""><img width="300" src="/img/dlog.svg"></h1>
                                    <h2>Gérer votre Ecole <br><small>Autrement</small>.</h2>
                                    <p>Vous avez pleinement la possibilité de gérer votre école de près ou de loin avec fiabilité et sécurité.</p>

                                    <p ><a class="text-center btn btn-info text-white" href="{{route('ecole')}}">Ecoles disponibles</a></p>

                                    <img src="acc/assets/images/login/2.png" alt="login">
                                </div>
                            </div>
                            @if(! Route::is('register'))
                            <div  class="col-md-6">
                                <div style="border-radius: 10px;" class="login-right-form">
                                     <form method="POST" action="{{ route('login') }}">
                                      @csrf
                                        <ul class="social-links">
                                            <i class="feather feather-user"></i><h4 class="text-muted">Se Connecter</h4>
                                            <hr>
                                        </ul>
                                        <p>
                                            <input  type="text" name="telephone" class="form-control mb-2" placeholder="Téléphone" required="" autocomplete="telephone">
                                        </p>
                                        <p>
                                            <input type="password" name="password" class="form-control mb-2" placeholder="Mot de passe" required="" />
                                        </p>
                                        <div class="back-check-box">
                                            <p><a href=""></rect><path d="M7 11V7a5 5 0 0 1 9.9-1"></path> Mot de passe oublié ? </a></p>
                                        </div>
                                        <button type="submit" id="button" name="submit">CONNEXION</button>

                                        <div class="pb-12"><a class="text-center btn btn-success text-white form-control" href="{{route('register')}}">Créer un compte</a></div>
                                    </form>
                                </div>
                            </div>
                            @else
                            <div  class="col-md-6">
                                <div style="border-radius: 10px;" class="login-right-form">
                                     <form method="POST" action="{{ route('register') }}">
                                      @csrf
                                        <ul class="social-links">
                                            <i class="feather feather-user"></i><h4 class="text-muted">Créer un compte</h4>
                                            <hr>
                                        </ul>
                                        <p>
                                            <input   name="name" type="text" class="form-control " placeholder="Nom d'administrateur" required="" />
                                           @error('name')
                                          <span class="invalid-feedback" role="alert">
                                          <span style="color: red;" class="spa ">{{ $message }}</span>
                                          </span>
                                          @enderror
                                        </p>
                                        <p>
                                          <input   type="text"  name="ecole" class="form-control  " placeholder="Nom de l'école" required="" />
                                           @error('ecole')
                                          <span class="invalid-feedback" role="alert">
                                          <span style="color: red;" class="spa ">{{ $message }}</span>
                                          </span>
                                          @enderror
                                        </p>
                                           <p>
                                            <input  type="number"   name="telephone" class="form-control " placeholder="Téléphone" required="" />
                                           @error('telephone')
                                          <span class="invalid-feedback" role="alert">
                                          <span style="color: red;" class="spa ">{{ $message }}</span>
                                          </span>
                                          @enderror
                                        </p>
                                        <p>
                                           <select class="form-control mt-2" name="province">
                                           <option value="Kinshasa">Kinshasa</option>
                                            <option value="Matadi">Matadi</option>
                                            <option value="Lubumbashi">Lubumbashi</option>
                                            <option value="Maniema">Maniema</option>
                                            <option value="Kisantu">Kisantu</option>
                                            <option value="Luwozi">Luwozi</option>
                                            <option value="Mbanza-Ngungu">Mbanza-Ngungu</option>
                                            <option value="Kolwezi">Kolwezi</option>
                                            <option value="Goma">Goma</option>
                                            <option value="Mbuji-mayi">Mbuji-mayi</option>
                                            <option value="Kenge">Kenge</option>
                                            <option value="Kikwiti">Kikwiti</option>
                                            <option value="Nord-Kivu">Nord-Kivu</option>
                                            <option value="Sud-Kivu">Sud-Kivu</option>
                                            <option value="Boma">Boma</option>
                                            <option value="Popo">Popo</option>
                                            <option value="Muanda">Muanda</option>
                                            </select>
                                        </p>
                                        <p>
                                           <input   type="password" name="password" class="form-control  mb-2" placeholder="Mot de passe" required="">
                                          @error('password')
                                          <span>
                                          <span style="color: red;" class="spa ">{{ $message }}</span>
                                          </span>
                                          @enderror
                                        </p>
                                        <p>
                                            <input  type="password" name="password_confirmation" class="form-control  mb-2" placeholder="Confirmer mot de passe" required="">
                                            @error('password_confirmation')
                                            <span >
                                            <span style="color: red;" class="spa ">{{ $message }}</span>
                                            </span>
                                            @enderror
                                        </p>

                                        <button type="submit" id="button" name="submit">CONFIRMER</button>
                                        <p ><a class="btn btn-success text-white" href="{{route('login')}}">Se connecter</a></p>
                                    </form>
                                </div>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>














































<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="/img/dlog.svg" rel="icon">
    <link href="/img/dlog.svg" rel="apple-touch-icon">
    <title>{{ isset($title) ? $title  . ' | ' : '' }} Dgrace</title>

  <!-- Google Font: Source Sans Pro -->

     <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('../../plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('../../dist/css/adminlte.min.css')}}">
</head>
<style type="text/css">
  a, p, h2, h4{
    color: whitesmoke;
  }
</style>
<body style="background-image: url(./img/bg.jpg);" class="hold-transition layout-top-nav content">
<div class="wrapper">


@include('activite.mbeba')
    <div class="content">
      <div class="container">

        <div style="margin: 20% 0% 0%;" class="row">
          <div class="col-lg-5 mt-3">

            <div class="">
              <div  class="">
                <h1 style="" class="m-0 h1"></h1>
                <p class="text-center">
                  <img  width="320" src="./img/dlog.svg">
                </p>
              </div>
              <h2  class="mb-2 "> Gérer votre Ecole <small>Autrement</small></h2>

                <p class="card-text">Vous avez pleinement la possibilité de gérer votre école de près ou de loin avec fiabilité et sécurité.</p>
                <a href="#" class="btn btn-default mt-2">Provinces</a>
                <a href="{{route('ecole')}}" class="btn btn-default mt-2">Ecoles Disponibles</a>

                @if(! Route::is('register'))
                <a href="{{route('register')}}" class="btn btn-default mt-2">Créer compte</a>
                @else
                <a href="{{route('login')}}" class="btn btn-default mt-2">Se Connecter</a>
              @endif

            </div>



          </div>
          <div class="col-lg-2"><br></div>
          <!-- /.col-md-6 -->
          <div class="col-lg-5 mt-0">
              <div  class="">
              <div class="text-center">
                <br>
                @if(! Route::is('register'))
                <i style="font-size: 40px; color: silver;" class="fa fa-users"></i>
                <h4 class="m-2">Se Connecter</h4>
                @else
                <i style="font-size: 40px; color: silver;" class="fa fa-user"></i>
                <h4 class="m-2">Créer un Compte</h4>
                @endif
              </div>
              <div class="card-body">
               @if(! Route::is('register'))
              <form method="POST" action="{{ route('login') }}">
              @csrf

                <div>
                  <input style="padding: 20px" type="text" name="telephone" class="form-control mb-2" placeholder="Téléphone" required="" autocomplete="telephone">
                </div>
                <div>
                  <input style="padding: 20px" type="password" name="password" class="form-control mb-2" placeholder="Mot de passe" required="" />
                </div>
                <div>
                  <a><input class="btn btn-danger form-control mt-2" type="submit" value="CONNEXION"> </a>
                </div>
                <br>
                <div class="text-center">
                  <a  class="reset_pass text-center" href="#"><i class="fa fa-lock"></i>   Mot de passe oublié ?</a>
                </div>

                <div class="clearfix"></div>

              </form>
              @else
               <form method="POST" action="{{route('register')}}">
                 @csrf

              <div>
                <input   name="name" type="text" class="form-control  mb-2" placeholder="Nom d'administrateur" required="" />
                 @error('name')
                <span class="invalid-feedback" role="alert">
                <span style="color: red;" class="spa ">{{ $message }}</span>
                </span>
                @enderror
              </div>
               <div>
                <input   type="text"  name="ecole" class="form-control  mb-2" placeholder="Nom de l'école" required="" />
                 @error('ecole')
                <span class="invalid-feedback" role="alert">
                <span style="color: red;" class="spa ">{{ $message }}</span>
                </span>
                @enderror
              </div>
               <div>
                <input  type="number"   name="telephone" class="form-control  mb-2" placeholder="Téléphone" required="" />
                 @error('telephone')
                <span class="invalid-feedback" role="alert">
                <span style="color: red;" class="spa ">{{ $message }}</span>
                </span>
                @enderror
              </div>

               <div class="mb-2">
                 <select class="form-control mt-2" name="province">
                         <option value="Kinshasa">Kinshasa</option>
                          <option value="Matadi">Matadi</option>
                          <option value="Lubumbashi">Lubumbashi</option>
                          <option value="Maniema">Maniema</option>
                          <option value="Kisantu">Kisantu</option>
                          <option value="Luwozi">Luwozi</option>
                          <option value="Mbanza-Ngungu">Mbanza-Ngungu</option>
                          <option value="Kolwezi">Kolwezi</option>
                          <option value="Goma">Goma</option>
                          <option value="Mbuji-mayi">Mbuji-mayi</option>
                          <option value="Kenge">Kenge</option>
                          <option value="Kikwiti">Kikwiti</option>
                          <option value="Nord-Kivu">Nord-Kivu</option>
                          <option value="Sud-Kivu">Sud-Kivu</option>
                          <option value="Boma">Boma</option>
                          <option value="Popo">Popo</option>
                          <option value="Muanda">Muanda</option>
                          </select>
                        </div>

                        <div>
                          <input   type="password" name="password" class="form-control  mb-2" placeholder="Mot de passe" required="">
                          @error('password')
                          <span>
                          <span style="color: red;" class="spa ">{{ $message }}</span>
                          </span>
                          @enderror
                        </div>
                        <div>
                          <input  type="password" name="password_confirmation" class="form-control  mb-2" placeholder="Confirmer mot de passe" required="">
                          @error('password_confirmation')
                          <span >
                          <span style="color: red;" class="spa ">{{ $message }}</span>
                          </span>
                          @enderror
                        </div>
                        <div>
                           <a><input class="btn btn-danger form-control" type="submit"  value="CONFIRMER" name=""> </a>
                        </div>
                  </form>

                  @endif
                  </div>
                </div>


          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->


<section class="hero-section set-bg" data-setbg="img/bg.jpg">
    <div class="container">
      <div class="hero-text text-white">
        <h2>Gérer votre Ecole <small>Autrement</small></h2>
        <p>Vous avez pleinement la possibilité de gérer votre école de près ou de loin avec fiabilité et sécurité.</p>
      </div>
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <form class="intro-newslatter">
            <input type="text" placeholder="Ecole">
            <input type="text" class="last-s" placeholder="Province">
            <button class="site-btn">Recherche</button>
          </form>
        </div>
      </div>
    </div>
  </section>


  <!-- categories section -->
  <section class="categories-section spad">
    <div class="container">
      <div class="section-title">
        <h2>Ecoles Disponibles</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus.</p>
      </div>
      <div class="row">
        <!-- categorie -->
        @foreach($ecoles as $ecole)
        <div class="col-lg-4 col-md-6">
          <div class="categorie-item">
            <div class="ci-thumb set-bg" data-setbg="/photo_ecole/base/{{$ecole->avatar}}"></div>
            <div class="ci-text">
              <h5>{{$ecole->ecole}}</h5>
              <p>{{$ecole->apropo}}</p>
              <span>{{$ecole->province}}</span>
            </div>
          </div>
        </div>
        <!-- categorie -->
        @endforeach
        <!-- categorie -->
      </div>
    </div>


  <!-- /.content-wrapper -->

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('../../plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('../../plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('../../dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('../../dist/js/demo.js')}}"></script>
</body>
</html>

























 <div class="col-md-9">
          <div class="card card-primary card-outline">
            <div  class="card-header">
              <div class="row">
                 <div class="col-md-6">
                  <!-- /.card-tools -->
                  @if(Route::is('maternelle') OR
                  Route::is('primaire') OR
                  Route::is('humanite') OR
                  Route::is('secondaire'))
                  <h5 class="text-muted"><i class="fas fa-chart-pie"></i> {{$cicle}}</h5>
                  @else
                   <h5 class="text-muted"><i class="fas fa-circle"></i> {{$cicle}}</h5>
                  @endif
                </div>
                @if(Route::is('maternelle') OR
                Route::is('primaire') OR
                Route::is('humanite') OR
                Route::is('secondaire'))
                <div class="col-md-6">
                 <div class="card-tools">

                <form action="{{Route::is($cicle)}}" method="get">
                @csrf
                <div class="input-group ">
                  <input type="text" name="q" class="form-control" placeholder="Nom de l'élève">
                  <div class="input-group-append">
                    <div >
                      <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
                </form>
              </div>
            </div>
            @else
           @endif
          </div>
        </div>
          <div class="card-body">
              <div class="mailbox-controls">

                <div class="float-right">

                  <div class="btn-group">
                    @include('cycles.pagenate')
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.float-right -->
              </div>

               @include('Eleves.ifram')
                <!-- /.table -->

            </div>
            <div class="card-footer p-0">
              <div class="mailbox-controls text-center">
                <div class="text-center">

                  <div class="btn-group">
                    @include('cycles.pagenate')
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.float-right -->
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>



<div class="card-body">
              <div class="mailbox-controls">

                <div class="float-right">

                  <div class="btn-group">
                    @include('cycles.pagenate')
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.float-right -->
              </div>

               @include('Eleves.ifram')
                <!-- /.table -->

            </div>
            <div class="card-footer p-0">
              <div class="mailbox-controls text-center">
                <div class="text-center">

                  <div class="btn-group">
                    @include('cycles.pagenate')
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.float-right -->
              </div>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Image;

class ImageController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function resizeImage()
    {
        return view('resizeImage');

         $image = Input::file('image');
        $destinationPath = '/products';
        $img = time().'.'.$image->getClientOriginalExtension();
        $watermark = Image::make('images/watermark.png');
        $img = Image::make($image->getRealPath());
        $img->resize(300, 365, function ($constraint) {
            $constraint->aspectRatio();
        })->insert($watermark, 'center');
        File::exists($destinationPath) or File::makeDirectory($destinationPath);
        $img->save($destinationPath.'/'.$img);
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function resizeImagePost(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('image');

        if($imagefile!=NULL){

          $image = $request->file('photo');
          $filename = time().'.'.$request->photo->extension();
          $imeage_resize = Image::make($image->getRealPath());
          $imeage_resize->fit(250);
          $imeage_resize->save(public_path($filename));
          echo "$filename";
        }

        $input['imagename'] = time().'.'.$image->extension();

        $destinationPath = public_path('/thumbnail');
        $img = Image::make($image->path());
        $img->resize(100, 100, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['imagename']);

        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['imagename']);

        return back()
            ->with('success','Image Upload successful')
            ->with('imageName',$input['imagename']);
    }

}

 $file = $request->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time()  . '.'. $extension;
                $file->move('uploads/base/', $filename);
                $base->image = $filename;

@extends('layouts.master3')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container mt-5">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Ecoles <small>Connectées</small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Layout</a></li>
              <li class="breadcrumb-item active">Top Navigation</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            @foreach($ecoles as $ecole)
           <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title m-0"><b>{{$ecole->ecole}}</b></h5>
              </div>
              <div class="card-body">
                <div class="text-center">
                  <img class="img fluid" style="border-radius: 5px;" class="img" src="/photo_ecole/base/{{$ecole->avatar}}" width="410px" height="200px" align="">
                  <p class="text-muted mt-2"><a href=""><i class="fa fa-thumbs-up"></i> 01 J'aime</a> | <a href="#"><i class="fa fa-comments"></i> 03 Comments</a> | {{$ecole->province}}</p>
                  <p class="card-text">{{$ecole->apropo}}</p>
                </div>


                <a href="#" class="btn btn-default form-control">Voir</a>
              </div>
            </div>
            @endforeach

            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>

                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title m-0">Featured</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title m-0">Featured</h5>
              </div>
              <div class="card-body">
                <h6 class="card-title">Special title treatment</h6>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
@include('layouts.footer2')
@endsection




@extends('layouts.master', ['title' => 'Elève'])
@section('content')
<!-- ============================================================== -->
  <div  class="content-wrapper">
    <!-- Content Header (Page header) -->
     @foreach($shows as $show)
    <br>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @include('activite.mbeba')
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img style="border-radius: 5px" class="img-fluid"
                       src="/uploads/base/{{$show->image}}"
                       alt="User profile picture">
                </div>
                <h3 class="profile-username text-center"><b>{{strtoupper($show->nom)}} {{strtoupper($show->post_nom)}}</b> </h3>
                <p class="text-muted text-center">{{strtoupper($show->prenom)}}</p>
                <hr>
                <a href="#" class="{{$show->active == 0 ? 'btn btn-success btn-block' : 'btn btn-danger btn-block' }}"><b>{{$show->active == 0 ? 'Active' : 'Désactivé'}}</b></a>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div  class="">
               <div style="background: none;" class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab"><i style="font-size: 25px" class="fas fa-desktop"></i></a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab"><i style="font-size: 25px" class="fas fa-users"></i></a></li>
                  <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab"><i style="font-size: 25px" class="fas fa-edit"></i></a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">

                     <!-- About Me Box -->
            <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title">Apropos de l'élève <b>{{strtoupper($show->nom)}} {{strtoupper($show->post_nom)}}</b> </h3>
              </div>
              <!-- /.card-header -->
            @include('Eleves.voir_aside')
              <!-- /.card-body -->
            </div>
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-danger">
                          10 Feb. 2014
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-envelope bg-primary"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 12:05</span>

                          <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                          <div class="timeline-body">
                            Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                            weebly ning heekya handango imeem plugg dopplr jibjab, movity
                            jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                            quora plaxo ideeli hulu weebly balihoo...
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-primary btn-sm">Read more</a>
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-user bg-info"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                          <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
                          </h3>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-comments bg-warning"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                          <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                          <div class="timeline-body">
                            Take me to your leader!
                            Switzerland is small and neutral!
                            We are more like Germany, ambitious and misunderstood!
                          </div>
                          <div class="timeline-footer">
                            <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-success">
                          3 Jan. 2014
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-camera bg-purple"></i>

                        <div class="timeline-item">
                          <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                          <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                          <div class="timeline-body">
                            <img src="https://placehold.it/150x100" alt="...">
                            <img src="https://placehold.it/150x100" alt="...">
                            <img src="https://placehold.it/150x100" alt="...">
                            <img src="https://placehold.it/150x100" alt="...">
                          </div>
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <div>
                        <i class="far fa-clock bg-gray"></i>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                   @include('mosali.edit.edit_eleve')
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
      @endforeach
    </section>
    <!-- /.content -->
  </div>
@include('layouts.footer')
@endsection























@extends('layouts.master3')
@section('content')
  <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <div class="content">
      <div class="container">
        <br>
        <br>
        <br>
        <br>
        <div class="row">
          <div class="col-lg-6 mt-5">

            <div class="">
              <div style="background: none;" class="">
                <h1 style="" class="m-0 h1"></h1>
                <p class="card-text">
                  <img width="400" src="/img/log.jpeg">
                </p>

                <a href="#" class="card-link">Province</a>
                <a href="#" class="card-link">Ecoles connectées</a>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6 mt-5">
            <br>
              <div  class="card card-primary card-outline">
              <div class="card-header">
                @if(! Route::is('register'))
                <h3 class="card-title m-2 text-center"><b>Se Connecter</b></h3>
                @else
                <h3 class="card-title m-2 text-center"><b>Créer un Compte</b></h3>
                @endif
              </div>
              <div class="card-body">
               @if(! Route::is('register'))
              <form method="POST" action="{{ route('login') }}">
              @csrf

                <div>
                  <input style="padding: 20px" type="text" name="telephone" class="form-control mb-2" placeholder="Téléphone" required="" autocomplete="telephone">
                </div>
                <div>
                  <input style="padding: 20px" type="password" name="password" class="form-control mb-2" placeholder="Mot de passe" required="" />
                </div>
                <div>
                  <a><input class="btn btn-primary form-control" type="submit" value="CONNEXION"> </a>
                </div>
                <br>
                <div class="text-center">
                  <a  class="reset_pass text-center" href="#"><i class="fa fa-lock"></i>   Mot de passe oublié ?</a>
                </div>

                <div class="clearfix"></div>

              </form>
              @else
               <form method="POST" action="{{route('register')}}">
                 @csrf

              <div>
                <input   name="name" type="text" class="form-control  mb-2" placeholder="Nom d'administrateur" required="" />
                 @error('name')
                <span class="invalid-feedback" role="alert">
                <span class="spa text-muted">{{ $message }}</span>
                </span>
                @enderror
              </div>
               <div>
                <input  name="ecole" type="text" class="form-control  mb-2" placeholder="Nom de l'école" required="" />
                 @error('ecole')
                <span class="invalid-feedback" role="alert">
                <span class="spa text-muted">{{ $message }}</span>
                </span>
                @enderror
              </div>
               <div>
                <input  name="telephone" type="number" class="form-control  mb-2" placeholder="Téléphone" required="" />
                 @error('telephone')
                <span class="invalid-feedback" role="alert">
                <span class="spa text-muted">{{ $message }}</span>
                </span>
                @enderror
              </div>

               <div>
                 <select class="form-control mt-2" name="province">
                         <option value="Kinshasa">Kinshasa</option>
                          <option value="Matadi">Matadi</option>
                          <option value="Lubumbashi">Lubumbashi</option>
                          <option value="Maniema">Maniema</option>
                          <option value="Kisantu">Kisantu</option>
                          <option value="Luwozi">Luwozi</option>
                          <option value="Mbanza-Ngungu">Mbanza-Ngungu</option>
                          <option value="Kolwezi">Kolwezi</option>
                          <option value="Goma">Goma</option>
                          <option value="Mbuji-mayi">Mbuji-mayi</option>
                          <option value="Kenge">Kenge</option>
                          <option value="Kikwiti">Kikwiti</option>
                          <option value="Nord-Kivu">Nord-Kivu</option>
                          <option value="Sud-Kivu">Sud-Kivu</option>
                          <option value="Boma">Boma</option>
                          <option value="Popo">Popo</option>
                          <option value="Muanda">Muanda</option>
                          </select>
                        </div>
                       <br>
                        <div>
                          <input   type="password" name="password" class="form-control  mb-2" placeholder="Mot de passe" required="">
                          @error('password')
                          <span>
                          <span class="spa text-muted">{{ $message }}</span>
                          </span>
                          @enderror
                        </div>
                        <div>
                          <input  type="password" name="password_confirmation" class="form-control  mb-2" placeholder="Confirmer mot de passe" required="">
                          @error('password_confirmation')
                          <span >
                          <span class="spa text-muted">{{ $message }}</span>
                          </span>
                          @enderror
                        </div>
                        <div>
                           <a><input class="btn btn-primary form-control" type="submit"  value="CONFIRMER" name=""> </a>
                        </div>
                  </form>

                  @endif
                  </div>
                </div>

            <div  class="card  card-outline">
              <div class="card-body">
                <h1 style="" class="m-0 h1"> Gérer votre Ecole <small>Autrement</small></h1>

                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                @if(! Route::is('register'))
                <a href="{{route('register')}}" class="btn btn-success">Créer compte de gestion</a>
                @else
                <a href="{{route('login')}}" class="btn btn-info">Se Connecter</a>
              @endif
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
@endsection




























<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="/img/dlog.svg" rel="icon">
    <link href="/img/dlog.svg" rel="apple-touch-icon">

    <title>{{ isset($title) ? $title  . ' | ' : '' }} Dgrace</title>

    <!-- Bootstrap -->
    <link href="{{asset('../di/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('../di/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('../di/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('../di/vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('../di/build/css/custom.min.css')}}" rel="stylesheet">
  </head>
<style type="text/css">
body{background:whitesmoke; repeat 0 0; }
</style>
<body>
    <div>

      @include('activite.mbeba')
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section  class="login_content">
            <form method="POST" action="{{ route('login') }}">
            @csrf
              <h1><img width="200" src="/img/dlog.svg" alt="Home" /></h1>
              <div>
                <input style="padding: 20px" type="text" name="telephone" class="form-control" placeholder="Téléphone" required="" autocomplete="telephone">
              </div>
              <div>
                <input style="padding: 20px" type="password" name="password" class="form-control" placeholder="Mot de passe" required="" />
              </div>
              <div>
                <a><input class="btn btn-primary submit" type="submit" value="CONNEXION"> </a>
                <a  class="reset_pass" href="#">Mot de passe oublié ?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Accueil
                  <a href="{{route('register')}}" class="to_register form-control h4 btn btn-success"> <i class="fa fa-user"></i> Créer Compte </a>
                </p>

                <div class="clearfix"></div>
                <br />
                <div>
                  <h1><i class="fa fa-paw"></i> Gérer votre Ecole Autrement !</h1>

                  <p style="">© 2021 Dgrace Tous droit reserver | <m><i>by Aziz-K</i></m></p>
                  <br>
                  <br>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>




















public function recherche(Request $request){
        $huma = 'Humanité';
        $prima = 'Primaire';
        $mat = 'Maternelle';
        $seco = 'ETB';
        $sexe_fille = 'F';
        $sexe = 'M';
        $active = '0;';
        $cicle = 'Résultat';
        $luka = $request->input('q');
        return view('cycles.humanite', [
            'ecoles' => $this->r->getEcole($this->auth->user()->id),
            'cycles' => $this->r->getCycle($this->auth->user()->id),
            'eleves' => $this->r->LukaEleve($this->auth->user()->id, $active, $luka)->paginate(1),
            'elevese' => $this->r->getEleveCycle($this->auth->user()->id, $huma),
            'humas' => $this->r->getEleveCycle($this->auth->user()->id, $huma)->paginate(7),
            'mats' => $this->r->getEleveCycle($this->auth->user()->id, $mat)->paginate(7),
            'primas' => $this->r->getEleveCycle($this->auth->user()->id, $prima)->paginate(7),
            'secos' => $this->r->getEleveCycle($this->auth->user()->id, $seco)->paginate(7),
            'options' => $this->r->getOption($this->auth->user()->id),
            'quitte' => $this->r->getQuitter($this->auth->user()->id),
            'eleve_fille' => $this->r->getGenre($this->auth->user()->id, $huma, $sexe_fille),
            'eleve_mobali' => $this->r->getGenre($this->auth->user()->id, $huma, $sexe),
            'elevesi' => $this->r->getEleveAll($this->auth->user()->id),
            'eleve_fill' => $this->r->getSexe($this->auth->user()->id, $sexe_fille),
            'eleve_mobal' => $this->r->getSexe($this->auth->user()->id, $sexe),
            'cicle' => $cicle,

        ]);
    }




<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="/img/dlog.svg" rel="icon">
    <link href="/img/dlog.svg" rel="apple-touch-icon">

    <title>{{ isset($title) ? $title  . ' | ' : '' }} Dgrace</title>

    <!-- Bootstrap -->
    <link href="{{asset('../di/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('../di/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('../di/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('../di/vendors/animate.css/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('../di/build/css/custom.min.css')}}" rel="stylesheet">
  </head>

<body style="background-image:url({{asset('/img/log.jpg')}}); background-repeat: no-repeat; background-position: left;" class="login">
  @include('activite.mbeba')
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
           <form method="POST" action="{{route('login')}}">
            @csrf
              <h1><img src="/img/dlog.svg" alt="Home" /></h1>
              <div>
                <input  type="text" name="telephone" class="form-control" placeholder="Téléphone" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="" />
              </div>
              <div>
                <a><input class="btn btn-primary" type="submit" value="CONNEXION" name=""> </a>
                <a  class="reset_pass" href="#">Mot de passe oublié ?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Accueil ?
                 <a href="#signup" class="to_register"> <i class="fa fa-user"></i> Créer Compte </a>
                </p>

                <div class="clearfix"></div>
                <br />
                <div>
                  <h1><i class="fa fa-paw"></i> Gérer votre Ecole Autrement !</h1>

                  <p style="">© 2021 Dgrace Tous droit reserver | <m><i>by Aziz-K</i></m></p>
                  <br>
                  <br>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form method="POST" action="{{route('register')}}">
              @csrf
              <h1><img src="/img/dlog.svg" alt="Home" /></h1>
              <div>
                <input name="name" type="text" class="form-control" placeholder="Nom d'administrateur" required="" />
                 @error('name')
                <span class="invalid-feedback" role="alert">
                <span>{{ $message }}</span>
                </span>
                @enderror
              </div>
               <div>
                <input name="ecole" type="text" class="form-control" placeholder="Nom de l'école" required="" />
                 @error('ecole')
                <span class="invalid-feedback" role="alert">
                <span>{{ $message }}</span>
                </span>
                @enderror
              </div>
               <div>
                <input name="telephone" type="number" class="form-control" placeholder="Téléphone" required="" />
                 @error('telephone')
                <span class="invalid-feedback" role="alert">
                <span>{{ $message }}</span>
                </span>
                @enderror
              </div>
              <br>
               <div>
                <div>
                 <select  class="form-control mt-3" name="province">
                         <option value="Kinshasa">Kinshasa</option>
                          <option value="Matadi">Matadi</option>
                          <option value="Lubumbashi">Lubumbashi</option>
                          <option value="Maniema">Maniema</option>
                          <option value="Kisantu">Kisantu</option>
                          <option value="Luwozi">Luwozi</option>
                          <option value="Mbanza-Ngungu">Mbanza-Ngungu</option>
                          <option value="Kolwezi">Kolwezi</option>
                          <option value="Goma">Goma</option>
                          <option value="Mbuji-mayi">Mbuji-mayi</option>
                          <option value="Kenge">Kenge</option>
                          <option value="Kikwiti">Kikwiti</option>
                          <option value="Nord-Kivu">Nord-Kivu</option>
                          <option value="Sud-Kivu">Sud-Kivu</option>
                          <option value="Boma">Boma</option>
                          <option value="Popo">Popo</option>
                          <option value="Muanda">Muanda</option>
                          </select>
                </div>
              </div>
              <br>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="">
                @error('password')
                <span>
                <span>{{ $message }}</span>
                </span>
                @enderror
              </div>
              <div>
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirmer mot de passe" required="">
                @error('password_confirmation')
                <span >
                <span>{{ $message }}</span>
                </span>
                @enderror
              </div>
              <div>
                 <a><input class="btn btn-primary submit" type="submit" value="CONFIRMER" name=""> </a>
              </div>
              <div class="clearfix"></div>
              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register">  Se connecter </a>
                </p>
                 <div class="clearfix"></div>
                <div>
                  <h1><i class="fa fa-paw"></i> Gérer votre Ecole Autrement !</h1>
                  <p style="">©2021 Dgrace Tous droit reserver. <m>by Aziz-K</m></p>
                  <br>
                  <br>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>

















































<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img style="background: whitesmoke; padding: 10px; border-radius: 10px;" class="animation__wobble" src="/img/dlog.svg" alt="AdminLTELogo">
  </div>
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('home')}}" class="nav-link">Accueil</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link" rel="nofollow" href="{{ route('logout') }}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Se deconnecté
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
        </form>
        </a>
      </li>
      <li class="nav-item d-none d-sm-inline-block text-muted">
        <a href="{{route('home')}}" class="nav-link"><b>{{strtoupper(Auth::user()->ecole)}}</b></a>
      </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Recherche" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      <!-- Messages Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-cogs"></i>
        </a>
      </li>
    </ul>
  </nav>

       <div class="blog_left_sidebar">
                      @foreach($ecols as $ecol)
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img style="border-radius: 10px" height="350" width="400" class="card-img rounded-0" src="/photo/base1/{{$ecol->avatar}}" alt="">
                                <a href="{{route('voir_ecole', [$ecol->matricule_user, $ecol->slug])}}" class="blog_item_date">
                                    <h3>{{$ecol->ecole}}</h3>
                                    <p>{{$ecol->province}} | {{$ecol->commune}}</p>
                                </a>
                            </div>
                            <div class="blog_details">
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i> Travel, Lifestyle</a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> 03 Comments</a></li>
                                </ul>
                            </div>
                        </article>
                       @endforeach
<header>
    <!-- Header Start -->
    <div  class="header-area">
        <div  class="main-header ">
            <div class="header-mid gray-bg">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-3 col-lg-3 col-md-3 d-none d-md-block">
                            <div class="logo">
                                <a href="{{route('login')}}"><img src="/img/dlog.svg" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="header-banner f-right ">
                                 <div class="header-info-right">
                                <ul>
                                    <li class="title"><span class="fa fa-user-plus"></span></li>

                                </ul>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="background-image:url(../img/bg.jpg); background-repeat: no-repeat;background-position: center;" class="header-bottom header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-8 col-lg-8 col-md-12 header-flex">
                            <!-- sticky -->
                            <div class="sticky-logo">
                                <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-md-block">
                                <nav>
                                    <ul style="color: silver;" id="navigation">
                                        <li><a style="color: silver;" href="{{route('login')}}">Accueil</a></li>
                                        <li><a style="color: silver;" href="about.html">Ecole</a></li>
                                        <li><a style="color: silver;" href="categori.html">Elève</a></li>
                                        <li><a style="color: silver;" href="latest_news.html">Professeur</a></li>
                                        <li><a style="color: silver;" href="#">Evenements</a>
                                            <ul class="submenu">
                                                <li><a  href="blog.html">Blog</a></li>
                                                <li><a  href="blog_details.html">Blog Details</a></li>
                                                <li><a  href="elements.html">Element</a></li>
                                            </ul>
                                        </li>
                                        <li><a style="color: silver;" href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4">
                            <div class="header-right f-right d-none d-lg-block">
                                <!-- Heder social -->

                                <div class="nav-search search-switch">
                                    <i style="color: silver;" class="fa fa-search"></i>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>


















    <div class="trending-area fix pt-25 gray-bg">
        <div class="container">
            <div class="trending-main">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Top -->
                        <div class="slider-active">
                            <!-- Single -->
                            <div class="single-slider">
                                <div class="trending-top mb-30">
                                    <div class="trend-top-img">
                                        <img src="assets/img/trending/trending_top2.jpg" alt="">
                                        <div class="trend-top-cap">
                                            <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms">Business</span>
                                            <h2><a href="latest_news.html" data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms">Anna Lora Stuns In White At Her Australian Premiere</a></h2>
                                            <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">by Alice cloe   -   Jun 19, 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single -->
                            <div class="single-slider">
                                <div class="trending-top mb-30">
                                    <div class="trend-top-img">
                                        <img src="assets/img/trending/trending_top02.jpg" alt="">
                                        <div class="trend-top-cap">
                                            <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms">Business</span>
                                            <h2><a href="latest_news.html" data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms">Anna Lora Stuns In White At Her Australian Premiere</a></h2>
                                            <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">by Alice cloe   -   Jun 19, 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Single -->
                            <div class="single-slider">
                                <div class="trending-top mb-30">
                                    <div class="trend-top-img">
                                        <img src="assets/img/trending/trending_top03.jpg" alt="">
                                        <div class="trend-top-cap">
                                            <span class="bgr" data-animation="fadeInUp" data-delay=".2s" data-duration="1000ms">Business</span>
                                            <h2><a href="latest_news.html" data-animation="fadeInUp" data-delay=".4s" data-duration="1000ms">Anna Lora Stuns In White At Her Australian Premiere</a></h2>
                                            <p data-animation="fadeInUp" data-delay=".6s" data-duration="1000ms">by Alice cloe   -   Jun 19, 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Right content -->
                    <div class="col-lg-4">
                            <!-- Trending Top -->
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-sm-6">
                                <div class="trending-top mb-30">
                                    <div class="trend-top-img">
                                        <img src="assets/img/trending/trending_top3.jpg" alt="">
                                        <div class="trend-top-cap trend-top-cap2">
                                            <span class="bgb">FASHION</span>
                                            <h2><a href="latest_news.html">Secretart for Economic Air
                                                plane that looks like</a></h2>
                                            <p>by Alice cloe   -   Jun 19, 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-6">
                                <div class="trending-top mb-30">
                                    <div class="trend-top-img">
                                        <img src="assets/img/trending/trending_top4.jpg" alt="">
                                        <div class="trend-top-cap trend-top-cap2">
                                            <span class="bgg">TECH </span>
                                            <h2><a href="latest_news.html">Secretart for Economic Air plane that looks like</a></h2>
                                            <p>by Alice cloe   -   Jun 19, 2020</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>












namespace App\Models;

use App\Models\Eleve;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'cycle',
        'local',
        'classe',
        'option',
        'annee',
        'create_classe'
    ];


    public $timestamps = false;


   public static function getDate(){
        $dat = date('Y');
        if(static::whereAnnee($dat)->first()){
            return static::getDate();
        }
        return $dat;
    }

    public function eleve(){

        return $this->hasMany(Eleve::class);
    }

}




public function up()
    {
        Schema::create('moyekolis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('post_nom');
            $table->string('prenom');
            $table->string('sexe');
            $table->string('date_ne');
            $table->string('lieu');
            $table->string('phone');
            $table->string('image');
            $table->string('classe');
            $table->string('cycle');
            $table->string('option')->nullable();
            $table->string('local');
            $table->string('annee_sco');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }





<section id="main-content">
      <section class="wrapper">
        <h3 class="activity-panel"><i class="fa fa-bar-chart"></i><b> Cycle Secondaire</b></h3>
        <div class="row mt">
        @include('cycles.aside_huma')
          <div class="col-lg-9">
            <section class="panel">
              <header class="panel-heading wht-bg">
                <h5 class="gen-case">
                  <span class="activity-panel"><i class="fa fa-bar-chart-o (alias)"></i> Cycle Secondaire</span>
                  <span class="activity-panel"><i class="fa fa-download"></i> ({{$elevese->count()}}) {{count_number('élève', $elevese->count())}}</span>
                  <span class=" activity-panel"><i class="fa fa-calendar"></i> Année Scolaire 2020 - {{date('Y')}} </span>
                  </h5>
                  <h5 class="gen-case">
                    <form action="#" class="activity-panel">
                      <div class="input-append">
                        <input type="text" class="form-control " placeholder="Recherche">
                      </div>
                    </form>
                  </h5>
              </header>
              <div class="panel-body minimal">
                <div class="mail-option">
                  <div class="chk-all">
                    <div class="pull-left mail-checkbox">
                      <input type="checkbox" class="">
                    </div>
                  </div>
                  <div class="btn-group">
                    <a data-original-title="Choisissez" data-placement="top" data-toggle="" href="#" class="btn mini tooltips">
                      <i class=" fa fa-refresh"></i>
                      </a>
                  </div>
                  @include('classes.aside_classe_huma')
                </div>
                @include('cycles.statistique')
            </section>

          </div>
        </div>
      </section>
    </section>

     <div class="col-sm-3">
            <section class="panel">
              <div class="panel-body">
                @foreach($cycles as $cycle)
                <a href="{{route('inscription', [$cycle->id, $cycle->humanite])}}" class="btn btn-compose">
                  <i class="fa fa-edit"></i>  Inscription
                  </a>
                  @endforeach
                <ul class="nav nav-pills nav-stacked mail-nav">
                  <li class="{{col_active('humanite')}}"><a href="{{route('humanite')}}"> <i class="fa fa-inbox"></i> Humanité  <span class="label label-info pull-right inbox-notification">{{$elevese->count()}} {{count_number('inscrit', $elevese->count())}}</span></a></li>
                   <li class="{{col_active('listeEleve')}}"><a href="{{route('listeEleve')}}"> <i class="fa fa-list"></i> Liste</a></li>
                  <li><a href="#"> <i class="fa fa-users"></i> Professeur</a></li>
                  <li><a href="#"> <i class="fa fa-print"></i> Imprimer</a></li>
                  <li><a href="#"> <i class="fa fa-archive"></i> Archive</a></li>
                </ul>
              </div>
            </section>
            <section class="panel">
              <div class="panel-body">
                <ul class="nav nav-pills nav-stacked labels-info ">
                  <li>
                     <h5 class="activity-panel"> Les élèves recents</h5>
                  </li>
                  </li>
                  <li>
                    <a href="">
                      @if($elero)
                        <img src="/uploads/base/{{$elero->image}}" class="img-circle" width="30" height="30">{{strtoupper($elero->nom)}}
                        <p><span class="label label-success">Available</span></p>
                      </a>
                      @endif
                  </li>
                </ul>
                <div class="inbox-body text-center inbox-action">
                  @include('activite.mbeba')
                  <div class="btn-group">
                    <a class="btn mini btn-default" href="javascript:;">
                      <i class="fa fa-power-off"></i>
                      </a>
                  </div>
                  <div class="btn-group">
                    <a class="btn mini btn-default" href="javascript:;">
                      <i class="fa fa-cog"></i>
                      </a>
                  </div>
                </div>
              </div>
            </section>
          </div>

          @extends('layouts.master2')
@section('content')
    <div class="wrapper vh-100">
      <div class="row align-items-center h-100">
        <div class="container">
        <div class="row">
          <div class="col-md-6">
        <div class="col-lg-8 text-muted ">
          <img class=" text-center" width="330" src="img/eleve.jpg">
            <h1 class="h3">Gérer votre école Autrement</h1>
            <p>Vous avez pleinement la possibilité de gérer votre école autrement de près ou de loin avec fiabilité et clairité.</p>
            <a href="{{route('register')}}"> <p style="color: white" class="btn btn-success">Créer compte de gestion</p></a>
        </div>
      </div>
      <div class="col-md-6">
        <form style="background: white;  border-radius: 10px" class="col-lg-10   text-center" method="POST" action="{{ route('login') }}">
        @csrf
          <br>
          <h1 class="h3 mb-3"><i style="font-size: 25px" class="fe fe-users fe-16"></i> Se connecter</h1>
          <div class="form-group">
            <label for="inputEmail" class="sr-only">Votre mobile</label>
            <input type="text" id="inputEmail" name="telephone" class="form-control form-control-lg  @error('telephone') is-invalid @enderror" placeholder="Votre numéro mobile" required="" autofocus="">
            @error('telephone')
            <span class="invalid-feedback" role="alert">
           <small style="color: red">{{ $message }}</small>
           </span>
          @enderror
          </div>
          <div class="form-group">
            <label for="inputPassword" class="sr-only">Mot de passe</label>
            <input type="password" name="password" id="inputPassword" class="form-control form-control-lg" placeholder="Mot de passe" required="">
          </div>
          <div class="checkbox mb-3">
            <label>
              <a href="{{route('register')}}"><i class="fe fe-lock fe-16"></i> Mot de passe oublié </a> </label>
          </div>
          <button class="btn btn-lg btn-info btn-block" type="submit">Connexion</button>
          <p class="mt-5 mb-3 text-muted">&copy; Dgrace 2021</p>
          <br>
        </form>
      </div>
    </div>
  </div>
  </div>
      <br>

    </div>
@include('layouts.footer2')
@endsection


@extends('layouts.master2')
@section('content')
    <div class="wrapper vh-100">
       @include('activite.mbeba')
      <div class="row align-items-center h-100">

        <form class="col-lg-8 col-md-8 col-10 mx-auto" method="POST" action="{{ route('register') }}">
        @csrf
          <div class="mx-auto text-center my-4">
            <h3 class="my-3"><i style="font-size: 25px" class="fe fe-user fe-16"></i> Créer compte de gestion</h3>
          </div>
          <div class="form-group">
            <label for="inputEmail4">Nom d'administrateur</label>
            <input type="text" name="name" class="form-control" id="inputEmail4" required="">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="firstname">Nom de l'école</label>
              <input type="text" name="ecole" id="firstname" class="form-control" required="">
            </div>
            <div class="form-group col-md-6">
              <label for="lastname">Téléphone</label>
              <input type="number" name="telephone" id="lastname" class="form-control" required="">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail4">Ville</label>
            <select class="form-control" id="inputEmail4" name="province">
                         <option value="Kinshasa">Kinshasa</option>
                          <option value="Matadi">Matadi</option>
                          <option value="Lubumbashi">Lubumbashi</option>
                          <option value="Maniema">Maniema</option>
                          <option value="Kisantu">Kisantu</option>
                          <option value="Luwozi">Luwozi</option>
                          <option value="Mbanza-Ngungu">Mbanza-Ngungu</option>
                          <option value="Kolwezi">Kolwezi</option>
                          <option value="Goma">Goma</option>
                          <option value="Mbuji-mayi">Mbuji-mayi</option>
                          <option value="Kenge">Kenge</option>
                          <option value="Kikwiti">Kikwiti</option>
                          <option value="Nord-Kivu">Nord-Kivu</option>
                          <option value="Sud-Kivu">Sud-Kivu</option>
                          <option value="Boma">Boma</option>
                          <option value="Popo">Popo</option>
                          <option value="Muanda">Muanda</option>
                          </select>
          </div>
          <hr class="my-4">
          <div class="row mb-4">
            <div class="col-md-6">
              <div class="form-group">
                <label for="inputPassword5">Mot de passe</label>
                <input type="password" name="password" class="form-control" id="inputPassword5" required="">
              </div>
              <div class="form-group">
                <label for="inputPassword6">Confirmer mot de passe</label>
                <input type="password" name="password_confirmation" class="form-control" id="inputPassword6" required="">
              </div>
            </div>
            <div class="col-md-6">
              <p class="mb-2">instructions</p>
              <p class="small text-muted mb-2"> Veillez saisir les informations sûr et voici: </p>
              <ul class="small text-muted pl-4 mb-0">
                <li> Mot de passe doit avoir 8 caractères </li>
                <li> Le numéro de téléphone est unique</li>
                <li>Can’t be the same as a previous password </li>
              </ul>
            </div>
          </div>
          <button class="btn btn-lg btn-info btn-block" type="submit">Créer Maintenant</button>
            <p class="mt-5 mb-3 text-muted text-center">&copy; Dgrace 2021</p>
        </form>
      </div>

    </div>
@include('layouts.footer2')
@endsection
