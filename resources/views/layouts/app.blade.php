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
            color:   lightgoldenrodyellow;
            padding: 0;

        }
        li{
            background-color: transparent ;


        }
        li:hover , li:hover a{
            background: {{\App\Models\Color::getColors()->textHeader}};
            color:   {{\App\Models\Color::getColors()->bgHeader}};

        }

        #logo{
            margin: 50px;
        }
        li:last-child a{
            border-bottom: none;
        }
        header{
            background-color: {{\App\Models\Color::getColors()->bgHeader}};
            height:50px;
            position: relative;
            top: 0;
            right: 0;
            width: 100%;
            margin-bottom: 0;
            box-shadow: 10px 5px 10px #1f1f1f;

        }

        li a{
            padding: 10px 0;
            display: block;
            width: 90%;
            border-bottom: 2px inset {{\App\Models\Color::getColors()->textHeader}};


            margin: auto;
            color: {{\App\Models\Color::getColors()->textHeader}};
        }
        a{
            text-decoration: none;
        }
        h1{
            color: {{\App\Models\Color::getColors()->textHeader}};
            font-size: 25px;
            padding: 10px 15px;
        }
        main table{
            background: {{\App\Models\Color::getColors()->bgMain}};

        }
       #params,#back,#notif{
            width:    40px;
            height: 40px;
            display: inline-block;
           color: {{\App\Models\Color::getColors()->textBtn}};
           border-radius: 50%;
            position: absolute;
           background: {{\App\Models\Color::getColors()->bgBtn}};
            top:5px;
           border: 2px solid {{\App\Models\Color::getColors()->textBtn}};
           box-shadow: -3px 3px 3px #363636;
        }
       #notif{
           right: 130px;
           border: none;
           box-shadow: none;
           padding: 5px;
           background: transparent;
           color:{{\App\Models\Color::getColors()->textHeader}} ;
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
            background: {{\App\Models\Color::getColors()->bgHeader}};
            color:   {{\App\Models\Color::getColors()->textHeader}};
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

        #rowHome div{
           border-radius: 20px;
        }
        #rowHome div:hover{
            transform: scale(1.2, 1.2);

        }
        #notN{

            display: inline-block;
            position: absolute;
            top: 0px;
            right: 0px;
            width: 12px;
            font-weight: bold;
            font-size: 10px;
    padding-right: 2px;
            height: 12px;
            border-radius: 50%;
        }
        #app{
            position: fixed;
            width: 100%;
            height: 100%;
            font-size: 16px;
            background: url({{url("./images/".\App\Models\Color::getColors()->imageBody)}}) no-repeat ;
            background-size:cover ;
        }

    </style>

</head>
<body>
@if(Auth::user())
    <div id="app" class="container-fluid ">

            <div class="row">
                <div id="menu" class="col-lg-3 px-0 text-center pt-3"  >
                    <a href="/home" id="logo"><img class="w-50" src="{{url('./images/icon/logo-caroline-alix-avocat-guadeloupe-400.png')}}"></a>
                    <ul class=" mt-5 w-100"  >
                        <li class="text-start" style='@yield("acceuil")'><a style='@yield("acceuil")'  href="/home">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-fill"  viewBox="0 0 16 16">
                                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L8 2.207l6.646 6.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5Z"/>
                                    <path d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6Z"/>
                                </svg>
                            <span class="ms-3">Accueil</span>     </a></li>
                        @if(Auth::User())
                    @if(Auth::User()->role == 1)
                        <li class="text-start" style='@yield("users")'><a style='@yield("users")' href="/users">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                </svg>
                                <span class="ms-3">     Users </span></a></li>
                        @endif
                        @endif
                        <li class="text-start" style='@yield("clients")'><a style='@yield("clients")' href="/clients">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                </svg>
                                <span class="ms-3">   Clients </span></a></li>
                        <li class="text-start" style="@yield("Affairs")"><a style="@yield("Affairs")"  href="/affaires">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bank" viewBox="0 0 16 16">
                                    <path d="m8 0 6.61 3h.89a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v7a.5.5 0 0 1 .485.38l.5 2a.498.498 0 0 1-.485.62H.5a.498.498 0 0 1-.485-.62l.5-2A.501.501 0 0 1 1 13V6H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 3h.89L8 0ZM3.777 3h8.447L8 1 3.777 3ZM2 6v7h1V6H2Zm2 0v7h2.5V6H4Zm3.5 0v7h1V6h-1Zm2 0v7H12V6H9.5ZM13 6v7h1V6h-1Zm2-1V4H1v1h14Zm-.39 9H1.39l-.25 1h13.72l-.25-1Z"/>
                                </svg>
                                <span class="ms-3">   Affaires </span></a></li>
                        <li class="text-start" style="@yield("Taches")"><a style="@yield("Taches")"  href="/Taches">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-border-style" viewBox="0 0 16 16">
                                    <path d="M1 3.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-1zm0 4a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-1zm0 4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm8 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-4 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm8 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-4-4a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-1z"/>
                                </svg>
                                <span class="ms-3">     Tâches </span></a></li>
                        <li class="text-start" style="@yield("Facture")"><a style="@yield("Facture")"  href="/Taches">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                                    <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                                    <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                                    <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                                </svg>
                                <span class="ms-3">     Facture </span></a></li>
                    </ul>

                    <ul  >
                        <li class="text-start"><a href="/parametres">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
                                    <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                                </svg>
                                <span class="ms-3">   parametres </span></a></li>
                        <li class="text-start"><a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar-week" viewBox="0 0 16 16">
                                    <path d="M11 6.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-5 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                                </svg>
                                <span class="ms-3">      Rendez-vous </span></a></li>
                        <li class="text-start">
                            <a  href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                                    <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                                </svg>
                                <span class="ms-3">   {{ __('Logout') }} </span>
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
                                        <a  href="{{ url()->previous() }}">
                                            <svg id="back" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                                            </svg></a>
                                        <a href="{{route("tache.notification")}}">
                                            <div id="notif" >
                                                <div style="position:relative;">

                                                <svg  xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                                                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                                                </svg>
                                                    @if(count(\App\Models\Tache::getTacheArm()) >0)
                                             <span id="notN" class="bg-danger">{{count(\App\Models\Tache::getTacheArm())}}</span>
                                                    @endif
                                                </div>
                                            </div>

                                        </a>
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
@else
    {{redirect(route("login"))}}
@endif
</body>
</html>
