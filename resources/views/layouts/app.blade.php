<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield("titre")</title>
    <link rel="stylesheet" href="{{url("./bootstrap.min.css")}}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <title>@yield("titre")</title>
    <style>
        root{
            padding: 0;
            margin: 0;
        }
        main{
            height: 84%;
            background: url({{url("./images/backgourndmain.png")}}) no-repeat ;
            background-size:cover ;
            position: relative;
            top:0;
            border: 4px solid gold;
            overflow:auto;
        }
        ul{
            list-style: none;
            color: gold;
            padding: 0;

        }
        li{
            background-color: black ;


        }
        li:hover , li:hover a{
            background: #6e5d11;
            color: #ffffff;

        }

        #logo{
            margin: 50px;
        }
        li:last-child a{
            border-bottom: none;
        }
        header{
            background-color: black;
            height: 16%;
            position: relative;
            margin-bottom: 0;


        }

        li a{
            padding: 10px 0;
            display: block;
            width: 90%;
            border-bottom: 2px inset gold;


            margin: auto;
            color: gold;
        }
        a{
            text-decoration: none;
        }
        h1{
            color: gold;
        }
       #params{
            width:    300px;
            height: 40px;


            position: absolute;
           color: gold;
            top:10px;
            right: 10px;

        }

    #back{
        width: 40px;
        height: 40px;
        border-radius: 50%;
        background: gold;
        display: block;
    }
        #menu{
            position: fixed;
            height: 100%;
            width: 15%;
            left: 0;
        }
        #content{
            position: fixed;
            height: 100%;
            width: 85%;
            right: 0;
        }

        ul:last-child{
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
        }
        .icon{
            width: 20px;
            margin-right: 5px;
        }
    </style>

</head>
<body>
    <div id="app" class="container-fluid ">

            <div class="row">
                <div id="menu" class="col-2 px-0 text-center pt-3" style="background-color:black;border: 5px solid gold" >
                    <a href="/home" id="logo"><img class="w-50" src="{{url('./images/icon/63cdbfa23e25840b060311e1eba64ae0.png')}}"></a>
                    <ul class=" mt-5 w-100"  >
                        <li class="text-start"><a class='@yield("acceuil")'  href="/home">
                                <img class="icon" src="{{url("./images/icon/Favicon.png")}}" alt="">
                                Accueil</a></li>

                        <li class="text-start"><a class='@yield("users")' href="/users">
                                <img class="icon" src="{{url("./images/icon/person-icon-png.png")}}" alt="">
                                Users</a></li>
                        <li class="text-start"><a class='@yield("clients")' href="/clients">
                                <img class="icon" src="{{url("./images/icon/user_anonymous_yellow_hot.png")}}" alt="">
                                Clients</a></li>
                        <li class="text-start"><a class="@yield("Affairs")"  href="/affaires">
                                <img class="icon" src="{{url("./images/icon/balance-2858897_128033.png")}}" alt="">
                                Affaires</a></li>
                        <li class="text-start"><a class="@yield("Taches")"  href="/taches">
                                <img class="icon" style="color:gold" src="{{url("./images/icon/pngimg.com - gavel_PNG29.png")}}" alt="">
                                Tâches</a></li>
                    </ul>

                    <ul  >
                        <li class="text-start"><a href="/parametres">
                                <img class="icon" src="{{url("./images/icon/prametre2342.png")}}" alt="">
                                parametres</a></li>
                        <li class="text-start"><a href="">
                                <img class="icon" src="{{url("./images/icon/stock-vector-bank-symbol-gold-plated-metalic.jpg")}}" alt="">
                                Rendez-vous</a></li>
                        <li class="text-start">
                            <a  href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <img class="icon" src="{{url("./images/icon/825105_arrows_512x512.png")}}" alt="">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
                <div id="content" class="col border-dark bg-dark p-0">
                    <header class="w-100">
                        <h1 class="h1 text-center pt-3 ">@yield("titre")</h1>
                        <div>
                            @guest
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                <div class="row text-center" id="params">

                                    <div class="col-9 p-1 ps-3 fw-bold text-end ">
                                        <a  style="color: gold;"   href="{{route("user.show",["id"=>Auth::user()->id])}}"  >
                                            {{ Auth::user()->name }}
                                        </a>
                                    </div>
                                    <div class="col-3 text-end" >
                                        <a id="back" href="{{ url()->previous() }}"><img class="w-100" style="width: 40px" src="{{url("./images/icon/R.png")}}"></a>
                                    </div>
                                </div>
                            @endguest
                        </div>
                    </header>
                    <main  class=" p-5 text-white text-center">
                        @yield("content")
                    </main>
                </div>
            </div>
        </div>

    <script src="./jquery-3.6.4.min.js"></script>
    <script src="./bootstrap.min.js"></script>
    @yield("script")
</body>
</html>
