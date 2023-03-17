<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./bootstrap.min.css">

    <title>@yield("titre")</title>
    <style>
        root{
            padding: 0;
            margin: 0;
        }
        main{
            height: 84%;
            background: url("./images/backgourndmain.png") no-repeat ;
            background-size:cover ;
            position: relative;
            top:0;
            border: 4px solid gold;

        }
        ul{
            list-style: none;
            color: gold;
            padding: 0;

        }
        li{
            background-color: black ;
            padding: 10px;
            border-bottom: 2px inset gold;

        }
        #logo{
            margin: 50px;
        }
        li:last-child{
            border-bottom: none;
        }
        header{
            background-color: black;
            height: 16%;
            position: relative;
            margin-bottom: 0;


        }

        a{
            text-decoration: none;
            color: gold;
        }
        h1{
            color: gold;
        }
        #iconProfil,#params{
            width: 20px;
            height: 20px;
            border-radius: 50%;
            border:2px solid white;
            position: absolute;
            top:10px;
            right: 10px;
        }
        #params{
            right: 40px;
            border: none;
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
        #vide{
            height: 30%;
        }
    </style>
</head>
<body>
<div class="container-fluid ">
    <div class="row">
        <div id="menu" class="col-2 text-center p-3" style="background-color:black;border: 5px solid gold" >
            <a href="" id="logo"><img class="w-50" src="./images/icon/63cdbfa23e25840b060311e1eba64ae0.png"></a>
            <ul class="mt-5 w-100"  >
                <li ><a href="/acceuil">Accueil</a></li>
                <li ><a href="/users">Users</a></li>
                <li ><a href="/clients">Clients</a></li>
                <li ><a href="">Affairs</a></li>
                <li ><a href="">Tâches</a></li>
            </ul>
            <div id="vide">
            </div>
            <ul class="w-75 m-auto " >
                <li><a href="">Rendez-vous</a></li>
                <li><a href="">Log out</a></li>
            </ul>
        </div>
        <div id="content" class="col border-dark bg-dark p-0">
            <header class="w-100">
                <h1 class="h1 text-center pt-3 ">@yield("titre")</h1>
                <div>
                        <a><img id="params" src="./images/icon/images.png" alt="paramètre"></a>
                    <div id="iconProfil">
                        <a><img src="" alt=""></a>
                    </div>
                </div>
            </header>
            <main class="bg-danger p-5 text-center">
                @yield("content")
            </main>
        </div>
    </div>
</div>
</body>
</html>
