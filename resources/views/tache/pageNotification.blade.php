@extends('layouts.app')

@section('content')
    <div class="p-5"  style="color: {{\App\Models\Color::getColors()->textMain}};background: {{\App\Models\Color::getColors()->bgMain}} ;position: relative;height: 500px">

            @foreach($taches as $tache)
                <p class="p-2 border-bottom">vous avez la tâche {{$tache->titre}} dans la date {{$tache->DTache}}</p>

            @endforeach

    </div>

@endsection


@section("titre","Notification")
