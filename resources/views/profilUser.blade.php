@extends('layouts.app')

@section('content')
    <div class="container-fluid p-5 " style='background-image: url({{url("./images/icon/".\App\Models\Color::getColors()->imageProfil)}});background-repeat: no-repeat;
background-size: cover;border-radius: 20px ;overflow: hidden ;position: relative ; width: 700px ; border: 3px {{\App\Models\Color::getColors()->textHeader}} solid;color: {{\App\Models\Color::getColors()->textHeader}} '>
        <div class="row d-flex justify-content-around">
            <div class="col-auto" style="position: relative">

                <img src="{{url("./imageUsers/$user->photo")}}" style="width: 150px;height: 150px;border-radius: 50%;border: 3px solid {{\App\Models\Color::getColors()->textHeader}}"/>

                @if( Auth::User()->id == $user->id)
                    <form method="post" enctype="multipart/form-data"  action="{{route("updatePhotoUser")}}">
                        {{csrf_field()}}
                        <label for="image">
                            <svg style="position: absolute;bottom: 30px;color:{{\App\Models\Color::getColors()->bgHeader}};border-radius: 5px ;background: {{\App\Models\Color::getColors()->textHeader}}; right: 28px;border: 2px solid {{\App\Models\Color::getColors()->textHeader}}" xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-camera-fill" viewBox="0 0 16 16">
                                <path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z"/>
                            </svg>
                        </label>
                        <input onchange="submit()" hidden type="file" name="image" id="image"  placeholder="holder">
                    </form>
                @endif
            </div>
            <div class="col-auto" style="margin-top: 50px ">
                <p>{{$user->name}}</p>
                <p>{{$user->email}}</p>

                <p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                    </svg>
                    {{$user->tel}}</p>
            </div>
        </div>

            <div  style="width: 150px; margin-left: 60px">
                <h3>{{$user->fonction}}</h3>
                <P>@if($user->role) Admin @endif</P>

            </div>
@if($user->fonction == "Avocat")
        <div class="row  m-2 mt-5 d-flex justify-content-between  " id="rowHome" >

                <div class=" col-3  p-3  text-center fw-bold" style=" height: 120px;border:2px {{\App\Models\Color::getColors()->textHeader}} solid ;background:{{\App\Models\Color::getColors()->bgHeader}}">
                    <div class=" fs-3" >
                        <span>7</span>
                    </div>
                    <span>les-affaires </span>
                </div>

                <div class="  p-3  col-3  text-center fw-bold" style=" height: 120px ;border:2px {{\App\Models\Color::getColors()->textHeader}} solid ;background:{{\App\Models\Color::getColors()->bgHeader}}">
                    <div class=" fs-3" >
                        <span>20</span>
                    </div>
                    <span>les-clients </span>
                </div>

                <div class="  p-3 col-3   text-center fw-bold" style=" height: 120px ; border:2px {{\App\Models\Color::getColors()->textHeader}} solid ;background:{{\App\Models\Color::getColors()->bgHeader}}">
                    <div class=" fs-3" >
                        <span>17</span>
                    </div>
                    <span>les-taches </span>
                </div>

        </div>
        @endif
        <div class="row d-flex justify-content-end" style="position: absolute;top:0;right: 15px">
            <div class="col-4">
                <a href="{{route("user.edit",["id"=>$user->id])}}"> <button  type="button"  style="border:none;border-bottom-left-radius:10px;background:{{\App\Models\Color::getColors()->bgBtn}}; color:{{\App\Models\Color::getColors()->textBtn}}; ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
                            <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Zm9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z"/>
                        </svg>
                    </button> </a>
            </div>
            <div class="col-4">
                <a onclick="return confirm('Are you sure, you want to delete it?')" href="{{route("user.destroy",["id"=>$user->id])}}">
                    <button type="button"   style="border:none;background:{{\App\Models\Color::getColors()->bgBtn}};color:{{\App\Models\Color::getColors()->textBtn}}; ">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                        </svg>
                    </button>
                </a>
            </div>
        </div>
    </div>

    </div>
@endsection
@section("titre","$user->name")
@section("users")
    background:{{\App\Models\Color::getColors()->textHeader}};
    color: {{\App\Models\Color::getColors()->bgHeader}};
@endsection
