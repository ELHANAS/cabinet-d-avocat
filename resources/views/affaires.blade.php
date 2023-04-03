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
        <form class="form-inline">
            <div class="row p-0 ms-3  d-flex justify-content-between">
                <div class="col-6 row  p-0  d-flex justify-content-around" style="" >

                        <a href="{{route('create-affaires')}}" class="btn col-2  " style="color: {{\App\Models\Color::getColors()->textBtn}};background: {{\App\Models\Color::getColors()->bgBtn}};">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                        </a>

                    <div class=" col-5">
                        <select class="form-select  " style="color: {{\App\Models\Color::getColors()->textBtn}};background: {{\App\Models\Color::getColors()->bgBtn}}">
                            <option hidden  selected>filtrer par type</option>
                            <option>option 1</option>
                            <option>option 2</option>
                        </select>
                    </div>
                    <div class="col col-5">
                        <select class="form-select  " style="color: {{\App\Models\Color::getColors()->textBtn}};background: {{\App\Models\Color::getColors()->bgBtn}}">
                            <option hidden  selected>filtrer par etat </option>
                            <option>option 1</option>
                            <option>option 2</option>
                        </select>
                    </div>
                </div>
                <div class="col-6 ">

                    <div class="input-group d-flex justify-content-end">

                        <div class="form-outline border-primary">
                            <input class="form-control w-100" type="text" name="searchAffaire" id="searchAffaire" placeholder="Recherche..." />
                        </div>
                        <button type="button" class="btn"style="background: {{\App\Models\Color::getColors()->bgBtn}}">
                            <img src="images/icon/56936.png" alt="search" style="width: 20px">
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
                <td>{{$info->nameAffaire}}</td>
                <td>{{$info->nameClient}}</td>
                <td>{{$info->nameUser}}</td>
                <td>{{$info->type}}</td>
                <td  >
                    <a href="{{route("Affaires.modifier",$info->id)}}" class="btn  " style="background: {{\App\Models\Color::getColors()->bgBtn}}">
                        <img  style="width: 20px;height: 20px" src="{{url("./images/icon/1159633.png")}}"/></a>
                    <a href="{{route("affaire.destory",$info->id)}}" onclick="return confirm('are you sur you want delete this Affaire')" class=" btn" style="background: {{\App\Models\Color::getColors()->bgBtn}}">
                        <img  style="width: 20px;height: 20px" src="{{url("./images/icon/1345874.png")}}"/></a>


                    <a style="width: 40px;height: 40px "  href="{{route("affaire.update.etat",["affaire"=>$info->id])}}"  style="background: gold" class="    btn @if($info->etat == 1) bg-danger @else  bg-success @endif  " >@if($info->etat == 1) T @else  C @endif        </a>
                    <a href="{{route("show.affaire",$info->id)}}">detail</a>
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
