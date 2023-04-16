<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LabSIV Demo</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/css2.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/css2.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <!-- CodePen animations -->
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:200,400,800" />
    <link rel="stylesheet" href="https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/css/demo.css" />
    <script src="https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/EasePack.min.js"></script>
    <script src="https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/rAF.js"></script> 
    <script src="https://www.marcoguglie.it/Codepen/AnimatedHeaderBg/demo-1/js/TweenLite.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.22/vue.min.js"></script>

    
    <style type="text/css">
        @media only screen and (min-width: 760px){
            .nav-item:hover .dropdown-menu{
                display: block;
            }
        }
        * {
            margin: 0;
            padding: 0;
            font-family: candara;
        }
        .dropdown-menu{
            width: 20%;
            border-radius: 2%;
        }
        .modal-dialog {
            width: 380%;
            height: 480%;
            position: relative;
            margin: 6% auto;
            padding: 5px;
        }
        .btn-box {
            width: 220px;
            margin: 35px auto;
            position: relative;
            box-shadow: 0 0 10px 5px #43cff1;
            border-radius: 20px;
        }
        .tabbed{
            padding: 10px 30px;
            cursor: pointer;
            color: black;
            padding-left: 33px;
            background: transparent;
            border: 0;
            outline: none;
            position: relative;
        }
        #botona {
            top: 0;
            left: 0;
            position: absolute;
            width: 110px;
            height: 100%;
            border-radius: 20px;
            background: linear-gradient(to right, #43cff1, #00a0d1);
            transition: .5s;
        }
        .input-group {
            top: 180px;
            position: absolute;
            width: 280px;
            transition: .5s;
        }

        .btns {
            width: 50%;
            padding: 10px 30px;
            cursor: pointer;
            display: block;
            margin: auto;
            background: linear-gradient(to right, #43cff1, #00a0d1);
            border: 0;
            outline: none;
            border-radius: 20px;
        }
        .check {
            margin: 30px 10px 30px 0;
        }
        .spaan{
            color: #777;
            font-size: 13px;
            bottom: 126px;
            position: absolute;
        }
        #login{left: 50px;}
        #apply{left: 450px;}

        .social{
            margin-left: 150px;
        }
        .social-icon{
            padding: 5px;
        }
        .arrow{
            padding-top: 22px;
        }
        .credits{
            margin-left: 550px;
        }
        .menu{
            font-weight: 900;
            font-size: 20;
        }
        .account1{
            position: relative;
            margin-left: 115px;
        }
        .account2{
            position: relative;
            margin-left: 126px;
        }
        .modal-dialog {
            max-height: 80vh;
        }
        .modal-body {
            overflow-y: auto;
        }
        .modal{
            overflow: hidden;
        }
        .contact{
            text-shadow: 0px 1px 3px white;
            margin-left: 130px;
            border-radius: 30px;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 50px;
            padding-right: 50px;
            font-size: x-large;
            font-weight: 1000;
            background: transparent;
            border-color: whitesmoke;
        }
        .top-right {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            height: 50px;
            background-color: #333;
            color: #fff;
            padding: 0 20px;
        }
        .links a {
            color: #fff;
            text-decoration: none;
            margin-right: 10px;
            font-size: 16px;
        }
        .contact:hover{
            background-color: #F9F6F5;
            text-shadow: 0px 1px 3px black;
        }
        .links a:hover {
            color: cyan;
        }

        /* .home_bg{
            background-image: url("/public/img/univ.jpg");
            background-size: cover;
            background-position: center ;
            height: 600px;
            transition: transform 0.5 ease;
        }
        .home_bg:hover{
            transform: translateX(50px) translateY(50px);
        } */

        /* publications section */
        #app {
            margin-top: 50px;
            margin-right: 50px;
        }
        .pubs_sec {
            align-items: center;
            height: 520px;
        }
        .pt-1 {
            padding-top: 5%;
        }
        #slider {
            position: relative;
            height: 25vw;
            perspective: 1000px;
            transform-style: preserve-3d;
        }
        #slider [type="radio"] {
            display: none;
        }
        #slider label {
            margin: auto;
            width: 20%;
            border-radius: 4px;
            position: absolute;
            left: 0;
            right: 0;
            cursor: pointer;
            transition: transform 0.4s ease;
        }
        #slider label img {
            width: 100%;
        }
        #s1:checked ~ #slide4, #s2:checked ~ #slide5,
        #s3:checked ~ #slide1, #s4:checked ~ #slide2,
        #s5:checked ~ #slide3 {
            transform: translate3d(-120%, 0, -200px) rotateY(45deg);
        }
        #s1:checked ~ #slide5, #s2:checked ~ #slide1,
        #s3:checked ~ #slide2, #s4:checked ~ #slide3,
        #s5:checked ~ #slide4 {
            transform: translate3d(-65%, 0, -100px) rotateY(45deg);
        }
        #s1:checked ~ #slide1, #s2:checked ~ #slide2,
        #s3:checked ~ #slide3, #s4:checked ~ #slide4,
        #s5:checked ~ #slide5 {
            transform: translate3d(0, 0, 0);
        }
        #s1:checked ~ #slide2, #s2:checked ~ #slide3,
        #s3:checked ~ #slide4, #s4:checked ~ #slide5,
        #s5:checked ~ #slide1 {
            transform: translate3d(65%, 0, -100px) rotateY(-45deg);
        }
        #s1:checked ~ #slide3, #s2:checked ~ #slide4,
        #s3:checked ~ #slide5, #s4:checked ~ #slide1,
        #s5:checked ~ #slide2 {
            transform: translate3d(120%, 0, -200px) rotateY(-45deg);
        }
        #slider [type="radio"]:checked + label img {
            box-shadow: -6px 1px 69px -14px rgba(0, 0, 0, 0.75);
        }
        #slider [type="radio"]:checked + label:nth-child(3) img {
            box-shadow: 0px 1px 94px 0px rgba(0, 0, 0, 0.75);
        }
    </style>
</head>
<body>
    <header>
        <!-- <div class="top-nav d-none d-md-block bg-dark justify-content-center">
            <div class="text-end">
                <button class="btn btn-outline-none text-white text-decoration-none" type="button" data-bs-toggle="modal" data-bs-target="#loginModal" onclick="login()">Login</button>
                <button class="btn btn-outline-none text-white text-decoration-none" id="applyBtn" type="button" data-bs-toggle="modal" data-bs-target="#loginModal" onclick="apply()">Apply</button>
            </div>
            < tabbed modal -->
           <!-- <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-body">
                            < Nav tabs -->
                           <!-- <div class="btn-box">
                                <div id="botona"></div>
                                <ul class="nav" id="loginTabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active tabbed" id="loginTab" data-bs-toggle="tab" data-bs-target="#signIn" role="tab" type="button" aria-controls="signIn" aria-selected="true" onclick="login()">Login</button>
                                    </li>
                                    <li class="nav-item mx-2" role="presentation">
                                        <button class="nav-link tabbed" id="applyTab" data-bs-toggle="tab" data-bs-target="#signUp" role="tab" type="button" aria-controls="signUp" aria-selected="false" onclick="apply()">Apply</button>
                                    </li>
                                </ul>
                            </div>
                
                            < Tab panes -->
                           <!-- <div class="tab-content">
                                <!- login pane -->
                               <!-- <div class="tab-pane fade show active" id="signIn" role="tabpanel" aria-labelledby="loginTab">
                                    <form id="login">
                                        <div class="mb-3">
                                            <label for="signInEmail" class="form-label fw-semibold" required>Email address</label>
                                            <input type="email" class="form-control" id="signInEmail" placeholder="Enter email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="signInPassword" class="form-label fw-semibold" required>Password</label>
                                            <input type="password" class="form-control" id="signInPassword" placeholder="Enter password">
                                            <input type="checkbox" class="check"><span class="spaan">Remember me</span>
                                        </div>
                                        <button type="submit" class="btn btns">Login</button>
                                        <span class="text-center account1">You don't have an account?<a class="text-decoration-none text-primary" href="#" onclick="apply()"> Apply</a></span>
                                    </form>
                                </div>
                                <!- apply pane -->
                              <!--  <div class="tab-pane fade" id="signUp" role="tabpanel" aria-labelledby="applyTab">
                                    <form id="apply">
                                        <div class="mb-3">
                                            <label for="firstName" class="form-label flex-semibold" required>First Name</label>
                                            <input type="text" class="form-control" id="firstName" placeholder="Enter first name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="lastName" class="form-label flex-semibold" required>Last Name</label>
                                            <input type="text" class="form-control" id="lastName" placeholder="Enter last name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="bday" class="form-label flex-semibold" required>Date Of Birth</label>
                                            <input type="datetime" class="form-control" id="bday" placeholder="Enter birth date">
                                        </div>
                                        <div class="row">
                                            <div class=" col-6">
                                                <label for="supervisor" class="form-label flex-semibold" required>Supervisor</label>
                                                <select id="encadrants" class="form-select" placeholder="Choose">
                                                    <option value="1" selected>option 1</option>
                                                    <option value="2">option 2</option>
                                                    <option value="3">option 3</option>
                                                    <option value="4">option 4</option>
                                                    <option value="5">option 5</option>
                                                </select>
                                            </div>
                                            <div class="col-6 mb-3">
                                                <label for="co-supervisor" class="form-label flex-semibold" required>Co-supervisor(optional)</label>
                                                <select id="co-encadrants" class="form-select" >
                                                    <option value="1" selected>option 1</option>
                                                    <option value="2">option 2</option>
                                                    <option value="3">option 3</option>
                                                    <option value="4">option 4</option>
                                                    <option value="5">option 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="applyEmail" class="form-label fw-semibold" required>Email address</label>
                                            <input type="email" class="form-control" id="applyEmail" placeholder="Enter email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="applyPassword" class="form-label fw-semibold" required>Password</label>
                                            <input type="password" class="form-control" id="applyPassword" placeholder="Enter password">
                                        </div>
                                        <div class="mb-3">
                                            <label for="applyPassword" class="form-label fw-semibold" required>Confirm Password</label>
                                            <input type="password" class="form-control" id="applyPassword" placeholder="Confirm password">
                                        </div>
                                        <button type="submit" class="btn btns">Apply</button>                                        
                                        <span class="text-center account2">Already got an account?<a class="text-decoration-none text-primary" href="#" onclick="apply()"> Login</a></span>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div> -->
        @if (Route::has('login') && Auth::check())
                <div class="top-right links">
                    <a href="{{ url('/home') }}">{{Auth::user()->name}}</a>
                </div>
            @elseif (Route::has('login') && !Auth::check())
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif
        <div class="navbar navbar-expand-md bg-light navbar-light text-dark">
            <div class="container">
                <img src="img/lab4.png" alt="logoLab" style ="background: transparent; width: 90px; height: 90px;">
                <a href="" class="navbar-brand fw-bold fs-1">LabSIV</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">
                    <i class="bi bi-list"></i>
                    <!-- <span class="navbar-toggler-icon"></span> -->
                </button>
                <div class="collapse navbar-collapse" id="mainmenu">
                    <ul class="navbar-nav ms-auto menu">
                        <li class="nav-item"><a href="#" class="nav-link ">Home</a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/Recherche') }}" data-bs-toggle="collapse" data-bs-target="#menu1" aria-expanded="false" aria-controls="menu1">Recherche</a>
                            <ul class="dropdown-menu" id="menu1">
                                <li><a href="{{ url('/Recherche') }}" class="dropdown-item" id="ai">Intelligence Artificielle</a></li>
                                <li><a href="{{ url('/Recherche') }}" class="dropdown-item">Sécurité Informatique</a></li>
                                <li><a href="{{ url('/Recherche') }}" class="dropdown-item">Traitement d'images</a></li>
                                <li><a href="{{ url('/Recherche') }}" class="dropdown-item">Systemes Embarqués</a></li>
                                <li><a href="{{ url('/Recherche') }}" class="dropdown-item">Analyse De Données</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#menu2" aria-expanded="false" aria-controls="menu2">Equipes</a>
                            <ul class="dropdown-menu" id="menu2">
                                <li><a href="/" class="dropdown-item">Intelligence Artificielle</a></li>
                                <li><a href="/" class="dropdown-item">Sécurité Informatique</a></li>
                                <li><a href="/" class="dropdown-item">Traitement d'images</a></li>
                                <li><a href="/" class="dropdown-item">Systemes Embarqués</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#menu5" aria-expanded="false" aria-controls="menu5">Projets</a>
                            <ul class="dropdown-menu" id="menu5">
                                <li><a href="/" class="dropdown-item">Apprentissage En Profondeur</a></li>
                                <li><a href="/" class="dropdown-item">Analyse d'images Medicales</a></li>
                                <li><a href="/" class="dropdown-item">Collaboration Avec L'industrie</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#menu4" aria-expanded="false" aria-controls="menu4">Publications</a>
                            <ul class="dropdown-menu" id="menu4">
                                <li><a href="/" class="dropdown-item">Articles Scientifiques</a></li>
                                <li><a href="/" class="dropdown-item">Actes De Conferences</a></li>
                                <li><a href="/" class="dropdown-item">Brevets Et Logiciels</a></li>
                                <li><a href="/" class="dropdown-item">Prototypes De Systemes</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-bs-toggle="collapse" data-bs-target="#menu3" aria-expanded="false" aria-controls="menu3">Collaborations</a>
                            <ul class="dropdown-menu" id="menu3">
                                <li><a href="/" class="dropdown-item">Universités</a></li>
                                <li><a href="/" class="dropdown-item">Centres De Recherche</a></li>
                                <li><a href="/" class="dropdown-item">Entreprises</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a href="#bottom" class="nav-link ">About Us</a></li>
                    </ul>
                </div> 
            </div>
        </div>
    </header>

    <!-- WHAT IS LabSIV -->
    
    <section id="lab" class="bg-dark text-light text-center text-sm-start py-5">
        <div class="container">
            <div class="d-sm-flex align-items-center">
                <div class="py-3">
                    <h1><span class="text-info">LabSIV</span></h1>
                    <p>Le Laboratoire des Systemes Informatiques & Vision (LabSIV) est une unité de recherche de la Faculté
                    des Sciences d'Agadir de l'Université Ibn Zohr. Il est spécialisé dans les domaines de la recherche
                    en systemes informatiques et regroupe des enseignants-chercheurs, des doctorants et des ingénieurs
                    de recherche.
                    Le LabSIV a pour mission de contribuer au developpement de la recherche scientifique et technologique 
                    dans les domaines de l'informatique, en s'appuyant sur une expertise de pointe et des
                    equipements de laboratoire. Les recherches menées au sein du laboratoire visent á répondre aux défis
                    actuels et futurs dans ces domaines, en proposant des solutions innovantes et efficaces.
                    Dans cet aperçu genéral, nous présenterons les objectifs de recherche du laboratoire, les équipes de
                    recherche et leurs travaux, les axes de recherche et leurs applications, l'infrastructure et les equipements
                    du laboratoire, ainsi que les partenariats et collaborations en cours. Nous aborderons egalement les
                    publications, brevets et realisations du laboratoire, ainsi que les perspectives et projets futurs.
                    </p>
                </div>
                <!-- <img src="img/firmware.svg" class="img-fluid w-50" alt="" > -->
            </div>
        </div>
    </section>
    <section id="articles" class="pubs_sec">
        <h1></h1>
        <div id="app">
            <div class="pusher pt-1">
                <div class="ui center aligned vertical grid container">
                    <section id="slider" class="row four column">
                        <input type="radio" name="slider" v-for="(n, index) in 5" :id="'s' + n" :checked="n === 3">
                        @if(isset($posts))
                            @foreach($posts as $post)
                            <label class="column" v-for="(n, index) in 5" :for="'s' + n" :id="'slide' + n">
                            <div class="card" style="width: 21rem; height:30rem;">
                                <img src="img/logo4.jpeg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{$post->titre}}</h5>
                                    <p class="card-text">{{$post->contenu}}</p>
                                    <a href="/Publications" class="btn btn-primary">Read more</a>
                                </div>
                            </div>
                            </label>
                            @endforeach
                        @endif
                    </section>
                </div>
            </div>
        </div>
    </section>
    <footer id="about us" class="bg-dark text-light text-center text-sm-start py-1">
        <a id="bottom"></a>
             <!-- <div class="footer align-items-center"> -->
                <nav class="navbar">
                <!-- <span class=" mx-4 mb-1"><p>About us :</p></span> -->
                    <div class="container mx-auto text-center">
                        <div style="font-size:xx-large;">
                            <a href="#top" class="nav-link arrow"><i class="bi bi-arrow-up-circle"></i></a>
                        </div>
                        <div class="container text-center col-lg-6 ">
                            <!-- Button trigger modal -->
                            <button class="nav-item mb-6 contact" type="button" data-bs-toggle="modal" data-bs-target="#contactModal">Contact Us</button>
                            <!-- Modal -->
                            <div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable">
                                    <div class="modal-content">
                                            <h1>Contact Us</h1>
                                        <form class="contactModal">
                                            <div class="mb-3">
                                                <label for="fullName" class="form-label fw-semibold text-black" required>Full Name</label>
                                                <input type="text" class="form-control" id="firstName" placeholder="Enter your full name" required>
                                            </div>
                                            <div class="mb-3">
                                                <label for="number" class="form-label fw-semibold text-black text-start" required>Phone Number</label>
                                                <input type="text" class="form-control" id="lastName" placeholder="Enter your phone number">
                                            </div>
                                            <div class="mb-3">
                                                <label for="contactEmail" class="form-label fw-semibold text-black text-start" required>Email address</label>
                                                <input type="email" class="form-control" id="applyEmail" placeholder="Enter email">
                                            </div>
                                            <div class="mb-3">
                                                <label for="contactEmail" class="form-label fw-semibold text-black text-start" required>Email address</label>
                                                <input type="email" class="form-control" id="applyEmail" placeholder="Enter email">
                                            </div>
                                           
                                            <div class="">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="row social">
                                <ul class=" nav list-unstyled ms-auto" style="font-size:xx-large;">
                                    <li class="nav-item mx-4 mb-2 social-icon"><a class="bi bi-facebook text-decoration-none text-white" href="/"></a></li>
                                    <li class="nav-item mx-4 mb-2 social-icon"><a class="bi bi-geo-alt-fill text-decoration-none text-white" href="https://www.google.com/maps/place/Faculty+of+Science,+Ibn+Zohr/@30.4060235,-9.5543585,15z/data=!4m10!1m2!2m1!1sfaculte+de+sciences!3m6!1s0xdb3c82aa3d6fe31:0x8ef661d2ccb5a617!8m2!3d30.4060231!4d-9.5444022!15sChNmYWN1bHRlIGRlIHNjaWVuY2VzkgERcHVibGljX3VuaXZlcnNpdHngAQA!16s%2Fg%2F12156n8y" target="_blank"></a></li>
                                    <li class="nav-item mx-4 mb-2 social-icon"><a class="bi bi-envelope-fill text-decoration-none text-white" href="/"></a></li>
                                    <li class="nav-item mx-4 mb-2 social-icon"><a class="bi bi-linkedin text-decoration-none text-white" href="/"></a></li>                           
                                </ul>
                            </div>
                        </div>
                        <div class="navbar-brand">
                            <a href="http://www.fsa.ac.ma/" target="_blank"><img src="img/logo11.png" alt="logo" style="background: transparent;  width: 300px; height: 160px;"></a>
                            <img src="img/lab4.png" alt="logoLab " style ="background: transparent; width: 150px; height: 150px;">
                        </div>
                    </div>
                </nav>
            <!-- </div> -->
            <span class="credits">Created by F&H. &copy; 2023</span>
    </footer>
    
    <!-- bootstrap JS -->
    <script src="js/bootstrap.js"></script>
    <!-- flatpickr JS -->
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        //for the login/apply tabs transition
        // var x = document.getElementById("login");
        // var y = document.getElementById("apply");
        // var z = document.getElementById("botona");

        // function apply(){
        //     x.style.left = "-400px";
        //     y.style.left = "50px";
        //     z.style.left = "110px";
        // }
        // function login(){
        //     x.style.left = "50px";
        //     y.style.left = "450px";
        //     z.style.left = "0px";
        // }

        // //for accessing the apply tab
        // document.addEventListener("DOMContentLoaded", function() {
        //     // Get the Apply button
        //     var applyBtn = document.getElementById("applyBtn");
          
        //     // Add click event listener to the Apply button
        //     applyBtn.addEventListener("click", function() {
        //       // Get the Apply tab
        //       var applyTab = document.getElementById("applyTab");
          
        //       // Activate the Apply tab
        //       var tabTrigger = new bootstrap.Tab(applyTab);
        //       tabTrigger.show();
          
        //       // Show the modal
        //       var loginModal = document.getElementById("loginModal");
        //       var loginModalInstance = new bootstrap.Modal(loginModal);
        //       loginModalInstance.show();
        //     });
        // });

        // //for the date of birth input
        // config = {
        //     altInput: true,
        //     altFormat: "F j, Y",
        //     dateFormat: "d-m-Y",
        // }
        // flatpickr("input[type=datetime]", config); 

        //publications transition
        
        var vm = new Vue({
            el: '#app'
        });
    </script>

</body>
</html>
