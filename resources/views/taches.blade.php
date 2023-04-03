@extends('layouts.app')

@section('content')
<div>

    <div>
        <form class="form-inline">
            <div class="row p-0  d-flex justify-content-between">
                <div class="col-6 row  d-flex justify-content-between" >
                    <div class="col-4 ">
                        <a href="/ajouterTache" class="btn w-100 col-3" style="background: gold">Ajouter</a>
                    </div>
                    <div class="col col-8 row">
                        <div class="col-6">
                            <input type="date" class="form-control"  value="date debut " >
                        </div>
                        <div class="col-6">
                            <input type="date" class="form-control"  value="date fin " >
                        </div>
                    </div>
                </div>
                <div class="col-6 ">

                    <div class="input-group d-flex justify-content-end">

                        <div class="form-outline border-primary">
                            <input class="form-control w-100" type="text" name="searchTache" id="searchTache" placeholder="Recherche..." />
                        </div>
                        <button type="button" class="btn"style="background: gold">
                            <img src="images/icon/56936.png" alt="search" style="width: 20px">
                        </button>
                    </div>

                </div>
            </div>
        </form>
    </div>
    <div class="mt-4 d-flex justify-content-between" id="search_tache_resulta">
        <table class="table " style="color:{{\App\Models\Color::getColors()->textMain}};">
            <thead style=" border: 2px #EED758 solid">
            <tr>
                <th scope="col">N°</th>
                <th scope="col">affaire</th>
                <th scope="col">titre</th>
                <th scope="col">Date de tache</th>

                <th scope="col"></th>


            </tr>
            </thead>
            <tbody>
            @foreach( $taches as $tache)
            <tr>
                <th scope="row">{{$tache->id_tache}}</th>
                <td>{{$tache->name}}</td>
                <td>{{$tache->titre}}</td>
                <td>{{$tache->DTache}}</td>
                <td>
                    <a href="" class="btn  " style="background: {{\App\Models\Color::getColors()->bgBtn}}">
                        <img  style="width: 20px;height: 20px" src="{{url("./images/icon/1159633.png")}}"/></a>
                    <a href="" onclick="return confirm('are you sur you want delete this Affaire')" class=" btn" style="background: {{\App\Models\Color::getColors()->bgBtn}}">
                        <img  style="width: 20px;height: 20px" src="{{url("./images/icon/1345874.png")}}"/></a>
                    <a style="width: 40px;height: 40px "  href=""  style="background: {{\App\Models\Color::getColors()->bgBtn}}" class="    btn  " >t      </a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
@section("titre","Taches")
@section("Taches")
    background:{{\App\Models\Color::getColors()->textHeader}};
    color: {{\App\Models\Color::getColors()->bgHeader}};
@endsection



@section('script')
    <script>

        $(document).ready(function(){
            $(document).on('input',"#searchTache",function(){

                var searchTache=$(this).val();
                jQuery.ajax({ url:"{{route('ajax_Tache')}}",
                    type:'post',
                    datatype: 'html',
                    cache:false,
                    data:{searchTache:searchTache,'_token':"{{csrf_token()}}"},
                    success:function(data){
                        $("#search_tache_resulta").html(data);
                    },
                    error:function(){

                    }
                })
            })

        })
    </script>

@endsection

