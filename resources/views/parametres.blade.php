@extends('layouts.app')

@section('content')
    <div class="p-5"  style="color: {{\App\Models\Color::getColors()->textMain}};background: {{\App\Models\Color::getColors()->bgMain}} ;position: relative">

            <div class="row w-50 d-flex justify-content-start">
                <label class="form-label col-4 text-end p-1 fw-bold">launges  :</label>
                <div class="col-lg-5">
                <select class="form-control">
                    <option>Français</option>
                    <option>عربي</option>
                </select>
                </div>
            </div>
        <div class="row d-flex justify-content-between mt-5 p-5">
            <div class="col-3 m-4 border" style="background: black">
                <a href="{{route("color.store",1)}}">
                <img class="w-100 mt-2" style="height: 70%" src="{{url("./images/backgourndmain.png")}}" alt="photo">
                <span class="h5 fw-bold" style="color: gold"> Or </span>
                </a>
            </div>
            <div class="col-3 m-4 border" style="background: #313131">
                <a href="{{route("color.store",2)}}">
                <img class="w-100 mt-2" style="height: 70% " src="{{url("./images/113239-popular-light-gray-background-2560x1600.jpg")}}" alt="">
                    <span class="h5 fw-bold" style="color: white"> Gris </span>
                </a>
            </div>
            <div class="col-3 m-4 border" style="background: #1b6535">
                <a href="{{route("color.store",3)}}">
                <img class="w-100 mt-2" style="height: 70%" src="{{url("./images/backgroundGrinBody.jpg")}}" alt="">
                <span class="h5 fw-bold" style="color: white"> Vert </span>
                </a>
            </div>
            <div class="col-3 m-4  border" style="background: black">
                <a href="{{route("color.store",4)}}">
                    <img class="w-100 mt-2" style="height: 70%" src="{{url("./images/imagesblack.jpg")}}" alt="">
                    <span class="h5 fw-bold" style="color: white"> Noir </span>
                </a>
            </div>
            <div class="col-3 m-4  border" style="background: #e75874">
                <a href="{{route("color.store",5)}}">
                    <img class="w-100 mt-2" style="height: 70%" src="{{url("./images/images.jpg")}}" alt="">
                    <span class="h5 fw-bold" style="color: white"> Rose </span>
                </a>
            </div>

        </div>

    </div>
@endsection
@section("titre","parametres")


