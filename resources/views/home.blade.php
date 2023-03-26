@extends('layouts.app')

@section('content')
    <div class="container-fluid" style="padding-top: 100px">
        <div class="row d-flex justify-content-between  m-5 " id="rowHome">

                <div class=" col-lg-3 p-3 border bg-light text-center fw-bold" style=" height: 200px  ;box-shadow: 3px 3px 10px  black;background-image: linear-gradient(to top right,black,gold)">
                    <div class=" fs-1" style=" height: 50px ; ">
                        <span>{{$NClients}}</span>
                    </div>
                    <div  style=" height: 50px ; margin-top: 40px">
                        <span>Clients active </span>
                    </div>
                </div>

                <div class="p-3 col-lg-3  border bg-light text-center fw-bold" style=" height: 200px  ;box-shadow: 3px 3px 10px  black; background-image: linear-gradient(to top right,black,gold)">
                    <div class=" fs-1" style=" height: 50px ; ">
                        <span>0</span>
                    </div>
                    <div  class=" " style=" height: 50px ; margin-top: 40px">
                        <span>Affair encour</span>
                    </div>
                </div>

                <div class="p-3 col-lg-3  border bg-light text-center fw-bold" style=" height: 200px  ;box-shadow: 3px 3px 10px  black; background-image: linear-gradient(to top right,black,gold)">
                    <div class=" fs-1" style=" height: 50px ; ">
                        <span>10</span>
                    </div>
                    <div  class=" " style=" height: 50px ; margin-top: 40px">
                        <span>les taches </span>
                    </div>
                </div>


        </div>
    </div>

    </div>
@endsection

@section("titre","Cabinets D’avocat")
@section("acceuil","text-white border-bottom ")

