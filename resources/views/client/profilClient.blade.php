@extends('layouts.app')
@section("content")
    <div class="container-fluid " style='background-image: url({{url("./images/icon/".\App\Models\Color::getColors()->imageProfil)}});background-repeat: no-repeat;
background-size: cover;border-radius: 20px ;overflow: hidden ;position: relative ; width: 700px ; border: 3px {{\App\Models\Color::getColors()->textHeader}} solid;color: {{\App\Models\Color::getColors()->textHeader}} '>
        @if(!@empty($data))

            <div class="row d-flex justify-content-around">
                <div class="col-auto" style="margin-top: 30px">
                    <img src="{{url("./images/icon/360_F_503577073_y4ZwKcQttFbUut0A7InyK8LhS3ObKL2t.jpg")}}" style="width: 150px;height: 150px;border-radius: 50%;"/>
                    <h3 >{{$data->name}} </h3>
                    <P class="text-center bold @if($data->active==1) text-success @else text-danger @endif ">@if($data->active==1)  actif @else pas actif @endif</P>
                </div>
                <div class="col-auto" style="margin-top: 50px ;>
                    <p> <img src="{{url("./images/icon/stock-vector-black-telephone-auricular-gold-plated.jpg")}}" style="width: 30px;height: 30px"/>{{$data->tel}}</p>
                    <p>Ville : {{$data->ville}}</p>
                    <p>date de naissance: {{$data->datenaissance}} </p>
                    <p>CIN : {{$data->cin}}</p>
                </div>


            </div>
            <div class="row  m-5  "  >
                <div class="col d-flex justify-content-center "  id="rowHome" >
                    <div class="  p-3   text-center fw-bold" style=" height: 100px ;border:2px {{\App\Models\Color::getColors()->textHeader}} solid; width: 200px ;background:{{\App\Models\Color::getColors()->bgHeader}}">
                        <div class=" fs-3" >
                            <span>20</span>
                        </div>
                        <span>les-affaires </span>
                    </div>
                </div>


            </div>



            <div class="row d-flex justify-content-end" style="position: absolute;top:0;right: 15px">
                <div class="col-4">
                    <a href="{{route('edit-clients', $data->id)}}"> <button type="button"  style="border:none;background:{{\App\Models\Color::getColors()->bgBtn}};color:{{\App\Models\Color::getColors()->textBtn}}; ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
                                <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Zm9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z"/>
                            </svg>
                        </button></a>
                </div>
                <div class="col-4">
                    <a href="{{route('delet-clients', $data->id)}}" onclick="return confirm('are you sur you want delete this client')"> <button type="button"  style="border:none;background:{{\App\Models\Color::getColors()->bgBtn}};color:{{\App\Models\Color::getColors()->textBtn}}; ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                            </svg>
                        </button></a>
                </div>

            </div>
    <div class="col-4">

    </div>
        @endif
    </div>

    </div>


@endsection
@section("titre","profil user")
@section("clients")
    background:{{\App\Models\Color::getColors()->textHeader}};
    color: {{\App\Models\Color::getColors()->bgHeader}};
@endsection

