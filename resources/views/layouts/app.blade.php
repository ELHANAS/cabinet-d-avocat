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
            height: 100%;

            position: relative;
            top:0;
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
            height:50px;
            position: relative;
            top: 0;
            right: 0;
            width: 100%;
            margin-bottom: 0;
            box-shadow: 5px 5px 10px #1f1f1f;

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
            font-size: 25px;
            padding: 10px 15px;
        }
       #params,#back{
            width:    40px;
            height: 40px;
display: inline-block;
           border-radius: 50%;
            position: absolute;
           background: gold;
            top:5px;
           border: 2px solid gold;
           box-shadow: -3px 3px 3px #363636;
        }
        #params{
            right: 10px;
        }
    #back{
       right: 70px;
        display: block;
    }
        #menu{
            position: fixed;
            height: 100%;
            width: 15%;
            left: 0;
            box-shadow: 5px 5px 10px #1f1f1f;
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
        #rowHome div{
           border-radius: 20px;
        }
        #rowHome div:hover{
            transform: scale(1.2, 1.2);

        }
        #app{
            position: fixed;
            width: 100%;
            height: 100%;
            background: url({{url("./images/backgourndmain.png")}}) no-repeat ;
            background-size:cover ;
        }
    </style>

</head>
<body>
    <div id="app" class="container-fluid ">

            <div class="row">
                <div id="menu" class="col-lg-3 px-0 text-center pt-3" style="background-color:black;" >
                    <a href="/home" id="logo"><img class="w-50" src="{{url('./images/icon/63cdbfa23e25840b060311e1eba64ae0.png')}}"></a>
                    <ul class=" mt-5 w-100"  >
                        <li class="text-start"><a class='@yield("acceuil")'  href="/home">
                                <img class="icon" src="{{url("./images/icon/Favicon.png")}}" alt="">
                                Accueil</a></li>
                        @if(Auth::User())
                    @if(Auth::User()->role == 1)
                        <li class="text-start"><a class='@yield("users")' href="/users">
                                <img class="icon" src="{{url("./images/icon/person-icon-png.png")}}" alt="">
                                Users</a></li>
                        @endif
                        @endif
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
                <div id="content" class="col-lg-9  p-0">
                    <header class="w-100">
                        <h1 class=" text-start  ">@yield("titre")</h1>
                        <div>

                                <div class="row text-center" >
                                    @if(Auth::User())

                                        <a  style="color: gold;" class=" fw-bold "   href="{{route("user.show",["id"=>Auth::user()->id])}}"  >
                                           <img id="params"  src="{{url("./imageUsers/".Auth::user()->photo)}}" />
                                        </a>
                                    @endif
                                    <div class="col-3 text-end" >
                                        <a id="back" href="{{ url()->previous() }}"><img class="w-100" style="width: 40px" src="{{url("./images/icon/R.png")}}"></a>
                                    </div>
                                </div>

                        </div>
                    </header>
                    <main  class=" p-5 text-white text-center">

                        <div>
                            @yield("content")
                        </div>

                    </main>
                </div>
            </div>
        </div>

    <script src="./jquery-3.6.4.min.js"></script>
    <script src="./bootstrap.min.js"></script>
    @yield("script")
</body>
</html>
