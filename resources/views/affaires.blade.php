@extends('layouts.app')

@section('content')
<div  >
    <div>
        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif
        @if(Session::has('error'))
            <div class="alert alert-danger" role="alert">
                {{ Session::get('error ') }}
            </div>
        @endif
        <form action="{{route('affaire.filtrer')}}" class="form-inline">
            <div class="row p-0 ms-3  d-flex justify-content-between">
                <div class="col-6 row  p-0  d-flex justify-content-around" style="" >

                        <a href="{{route('create-affaires')}}" class="btn col-2  " style="color: {{\App\Models\Color::getColors()->textBtn}};background: {{\App\Models\Color::getColors()->bgBtn}};">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                        </a>

                    <div class=" col-5">
                        <select class="form-select  "  onchange="submit()" name="type" style="color: {{\App\Models\Color::getColors()->textBtn}};background: {{\App\Models\Color::getColors()->bgBtn}}">
                            <option hidden value="" selected>filtrer par type</option>
                            <option value="Problèmes administratifs">Problèmes administratifs</option>
                            <option value="Problèmes commerciaux">Problèmes commerciaux</option>
                            <option value="Affaires civiles">Affaires civiles</option>
                            <option value="Délits, procès-verbaux et plaintes"> Délits, procès-verbaux et plaintes</option>
                            <option value="Affaires civiles">Affaires civiles</option>
                        </select>
                    </div>
                    <div class="col col-5">
                        <select class="form-select  " onchange="submit()" name="etat" style="color: {{\App\Models\Color::getColors()->textBtn}};background: {{\App\Models\Color::getColors()->bgBtn}}">
                            <option hidden value=""  selected>filtrer par etat </option>
                            <option value="0">En cours</option>
                            <option value="1">Terminé</option>
                        </select>
                    </div>
                </div>
                <div class="col-6 ">

                    <div class="input-group d-flex justify-content-end">

                        <div class="form-outline border-primary">
                            <input class="form-control w-100" type="text" name="searchAffaire" id="searchAffaire" placeholder="Recherche..." />
                        </div>
                        <button type="button" class="btn"style="background: {{\App\Models\Color::getColors()->bgBtn}};color: {{\App\Models\Color::getColors()->textBtn}} ">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </button>
                    </div>

                </div>
            </div>
        </form>
    </div>
    <div  class="mt-4 " id="devAffaires">
        <table class="table " style="color:{{\App\Models\Color::getColors()->textMain}};font-size: 15px   ">
            <thead style=" border-bottom: 2px #EED758 solid">
            <tr>
                <th scope="col">N°</th>
                <th scope="col">name</th>
                <th scope="col">Client </th>
                <th scope="col">Avocat </th>
                <th scope="col">Type</th>
                <th  scope="col"></th>


            </tr>
            </thead>
            <tbody>
            @if(!@empty($Affaires))
                @foreach($Affaires as $info)
            <tr>
                <th scope="row">{{$info->nomber}}</th>
                <td>{{$info->name}}</td>
                <td>{{$info->nameClient}}</td>
                <td>{{$info->nameUser}}</td>
                <td>{{$info->type}}</td>
                <td  >
                    <a href="{{route("Affaires.modifier",$info->id)}}" class="btn  " style="background: {{\App\Models\Color::getColors()->bgBtn}};color: {{\App\Models\Color::getColors()->textBtn}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z"/>
                        </svg> </a>
                    <a href="{{route("affaire.destory",$info->id)}}" onclick="return confirm('are you sur you want delete this Affaire')" class=" btn" style="background: {{\App\Models\Color::getColors()->bgBtn}};;color: {{\App\Models\Color::getColors()->textBtn}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                        </svg>
                    </a>

                    <a class="btn  " style="background: {{\App\Models\Color::getColors()->bgBtn}};color: {{\App\Models\Color::getColors()->textBtn}}" href="{{route("show.affaire",$info->id)}}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
                            <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                            <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                            <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                        </svg></a>
                    <a   href="{{route("affaire.update.etat",["affaire"=>$info->id])}}"  style="background: {{\App\Models\Color::getColors()->bgBtn}};color: {{\App\Models\Color::getColors()->textBtn}}" class="    btn @if($info->etat == 1) text-success @else  text-danger @endif  " >@if($info->etat == 1)
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                            </svg>
                        @else
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-triangle-fill" viewBox="0 0 16 16">
                                <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                        @endif        </a>

                </td>

            </tr>

                @endforeach
            @endif
            </tbody>
        </table>
    </div>
</div>

@endsection
@section('script')
    <script>

        $(document).ready(function(){
            $(document).on('input',"#searchAffaire",function(){
                var searchAffaire=$(this).val();
                jQuery.ajax({ url:"{{route('ajax_Affaire')}}",
                    type:'post',
                    datatype: 'html',
                    cache:false,
                    data:{searchAffaire:searchAffaire,'_token':"{{csrf_token()}}"},
                    success:function(data){
                        $("#devAffaires").html(data);
                    },
                    error:function(){

                    }
                })
            })

        })
    </script>

@endsection
@section("titre","Affaires")
@section("Affairs")
    background:{{\App\Models\Color::getColors()->textHeader}};
    color: {{\App\Models\Color::getColors()->bgHeader}};
@endsection
