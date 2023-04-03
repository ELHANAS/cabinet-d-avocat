@extends('layouts.app')
@section("content")
<div  class="p-5 " style="background: {{\App\Models\Color::getColors()->bgMain}};color: {{\App\Models\Color::getColors()->textMain}} ">
    <div class="text-start">
        <p>{{$affaire->type}}</p>
        <p>{{$affaire->name}}</p>
        <p>{{$affaire->nomber}}</p>
        <p>{{$affaire->prix}}</p>
        <p>{{$affaire->adveersaire}}</p>
        <p>{{$affaire->jugement}}</p>
        <p>{{$affaire->jugementDate}}</p>

    </div>

    <div class="row">
@foreach($documents as $document)
    <div class="col-3" style="position: relative">
        <iframe src="{{url("./documentaffaires/$document")}}" width="200" height="100" >TEST</iframe>
        <a style="color: {{\App\Models\Color::getColors()->textMain}}" href="{{url("./documentaffaires/$document")}}"  download="{{url("./documentaffaires/$document")}}">Télecharger</a>
        <a href="{{route("document-delete",["doc" => $document , "id" => $affaire->id])}}" style="border-radius:50%;position: absolute;top: -10px;left: 14px;color: red">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
            </svg>
        </a>
    </div>
@endforeach
        <div class="col-3  ">
        <form action="{{route("document-store-affaire")}}" enctype="multipart/form-data" method="post">
            {{csrf_field()}}
            <input hidden name="id" value="{{$affaire->id}}" >
            <label for="document"> <div  class="text-center px-5 p-3 border fw-bold fs-1" style="color: {{\App\Models\Color::getColors()->textMain}}" >
                    +
                </div>

            </label>
            <input hidden type="file" onchange="submit()"  multiple name="document[]" id="document">
        </form>

        </div>

    </div>

</div>
@endsection
@section("titre","Détail Affaire")
@section("affaires")
    background:{{\App\Models\Color::getColors()->textHeader}};
    color: {{\App\Models\Color::getColors()->bgHeader}};
@endsection
