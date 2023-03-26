@extends('layouts.app')

@section('content')
    <div class="container-fluid p-5 " style='background-image: url({{url("./images/icon/istockphoto-1143525474-170667a.jpg")}});background-repeat: no-repeat;
background-size: cover;border-radius: 20px  ; width: 700px ; border: 3px #FFD700 solid '>
        <div class="row d-flex justify-content-around">
            <div class="col-auto" style="position: relative">
                <img src="{{url("./imageUsers/$user->photo")}}" style="width: 150px;height: 150px;border-radius: 50%;border: 3px solid gold"/>
                @if( Auth::User()->id == $user->id)
                    <form method="post" enctype="multipart/form-data"  action="{{route("updatePhotoUser")}}">
                        {{csrf_field()}}
                        <label for="image"><img style="width: 30px;position: absolute;bottom: 30px;right: 30px;border: 2px solid gold ;border-radius: 10px" src="{{url("./images/icon/iphone-camera-icon-png-1.png")}}"  alt="icon" /> </label>
                        <input onchange="submit()" hidden type="file" name="image" id="image"  placeholder="holder">
                    </form>
                @endif
            </div>
            <div class="col-auto" style="margin-top: 50px ; color:#FFD700">
                <p>{{$user->name}}</p>
                <p>{{$user->email}}</p>

                <p> <img src="{{url("./images/icon/stock-vector-black-telephone-auricular-gold-plated.jpg")}}" style="width: 30px;height: 30px"/>{{$user->tel}}</p>
            </div>
        </div>

            <div  style="width: 150px; color:#FFD700; margin-left: 60px">
                <h3>{{$user->fonction}}</h3>
                <P>@if($user->role) Admin @endif</P>

            </div>
@if($user->fonction == "Avocat")
        <div class="row  m-2 mt-5 d-flex justify-content-between  " id="rowHome" style="color:#FFD700; ">

                <div class=" col-3  p-3  text-center fw-bold" style=" height: 120px;border:2px #FFD700 solid ;background:black">
                    <div class=" fs-3" >
                        <span>7</span>
                    </div>
                    <span>les-affaires </span>
                </div>

                <div class="  p-3  col-3  text-center fw-bold" style=" height: 120px ;border:2px #FFD700 solid ;background:black">
                    <div class=" fs-3" >
                        <span>20</span>
                    </div>
                    <span>les-clients </span>
                </div>

                <div class="  p-3 col-3   text-center fw-bold" style=" height: 120px ; border:2px #FFD700 solid ;background:black">
                    <div class=" fs-3" >
                        <span>17</span>
                    </div>
                    <span>les-taches </span>
                </div>

        </div>
        @endif
        <div class="row d-flex justify-content-end" style="margin-top: 100px">
            <div class="col-4">
                <a href="{{route("user.edit",["id"=>$user->id])}}"> <button type="button" class="btn " style="background:black; width: 150px; color:#FFD700; border:2px #FFD700 solid;
            border-radius:20px; ">Modifier</button> </a>
            </div>
            <div class="col-4">
                <a onclick="return confirm('Are you sure, you want to delete it?')" href="{{route("user.destroy",["id"=>$user->id])}}">
                    <button type="button" class="btn " style="background:black; width: 150px;color:#FFD700; border:2px #FFD700 solid;
            border-radius:20px; ">suprimer</button>
                </a>
            </div>
        </div>
    </div>

    </div>
@endsection
@section("titre","$user->name")
@section("users","text-white border-bottom ")
