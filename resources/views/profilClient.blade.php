@extends('layouts.app')
@section("content")
    <div class="container-fluid " style='background-image: url("{{url("./images/icon/istockphoto-1143525474-170667a.jpg")}}");background-repeat: no-repeat;
background-size: cover ; height: 700px ; width: 700px ; border: 3px #FFD700 solid '>
        @if(!@empty($data))

            <div class="row d-flex justify-content-around">
                <div class="col-auto" style="margin-top: 30px">
                    <img src="{{url("./images/icon/360_F_503577073_y4ZwKcQttFbUut0A7InyK8LhS3ObKL2t.jpg")}}" style="width: 150px;height: 150px;border-radius: 50%;"/>
                    <h3 style="color:#FFD700;">{{$data->nom}} {{$data->prenom}}</h3>
                </div>
                <div class="col-auto" style="margin-top: 50px ; color:#FFD700">
                    <p>{{$data->nom}} {{$data->prenom}} </p>
                    <p> <img src="{{url("./images/icon/stock-vector-black-telephone-auricular-gold-plated.jpg")}}" style="width: 30px;height: 30px"/>{{$data->tel}}</p>
                    <p>Ville : {{$data->ville}}</p>
                    <p>date de naissance: {{$data->datenaissance}} </p>
                    <p>CIN : {{$data->cin}}</p>
                </div>


            </div>
            <div class="row  m-5  " id="row" style="color:#FFD700; ">
                <div class="col d-flex justify-content-center "  >
                    <div class="  p-3   text-center fw-bold" style=" height: 120px ;border:2px #FFD700 solid; width: 100px ;background:black">
                        <div class=" fs-3" >
                            <span>20</span>
                        </div>
                        <span>les-affaires </span>
                    </div>
                </div>


            </div>



            <div class="row d-flex justify-content-between" style="margin-top: 100px">
                <div class="col-4">
                    <a href="{{route('edit-clients', $data->id)}}"> <button type="button" class="btn " style="background:black; width: 150px; color:#FFD700; border:2px #FFD700 solid;
            border-radius:20px; ">Modifier</button></a>
                </div>
                <div class="col-4">
                    <a href="{{route('delet-clients', $data->id)}}" onclick="return confirm('are you sur you want delete this client')"> <button type="button" class="btn " style="background:black; width: 150px;color:#FFD700; border:2px #FFD700 solid;
            border-radius:20px; ">suprimer</button></a>
                </div>
                <div class="col-4">
                    <P style="background:black; width: 150px;height:45px;color:#6EAC1F; border:2px #6EAC1F solid;
            border-radius:50%;padding:10px ">@if($data->active==1) Active @else not active @endif</P>
                </div>
            </div>
        @endif
    </div>

    </div>


@endsection
@section("titre","profil user")
@section("clients","text-white border-bottom ")

