@extends('layouts.app')
@section("content")
    <body>
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
            <div class="row p-0  d-flex justify-content-between">
                <div class="col-4  text-start" >
                    <a href="{{route('create-clients')}}" class="btn mx-3 w-50" style="background: gold">Ajouter</a>
                </div>
                <div class="col-4 ">

                    <div class="input-group d-flex justify-content-end">

                        <div class="form-outline border-primary">
                            <input class="form-control w-100" type="text" name="filtrerClient" id="filtrerClient" placeholder="filtrer.." />
                        </div>
                        <button type="button" class="btn"style="background: gold">
                            <img src="{{url("./images/icon/107799.png")}}" alt="search" style="width: 20px">
                        </button>
                    </div>

                </div>

                <div class="col-4 ">

                    <div class="input-group d-flex justify-content-end">

                        <div class="form-outline border-primary">
                            <input class="form-control w-100" type="text" name="searchClient" id="searchClient" placeholder="Recherche..." />
                        </div>
                        <button type="button" class="btn"style="background: gold">
                            <img src="{{url("./images/icon/56936.png")}}" alt="search" style="width: 20px">
                        </button>
                    </div>

                </div>
            </div>
            <form>

                <div>
                    <div id="ajax_search_result">
                        <table class="table mt-4"  style="background-color: rgb(122, 108, 33);">
                            <thead>
                            <tr>
                                <th scope="col">Code</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Prenom</th>
                                <th scope="col">ACTIVE</th>
                                <th scope="col"> actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!@empty($data))
                                @foreach($data as $info)
                                    <tr>

                                        <td>{{$info->id}}</td>
                                        <td>{{$info->nom}}</td>
                                        <td>{{$info->prenom}}</td>
                                        <td>@if($info->active==1) Active @else not active @endif</td>

                                        <td>
                                            <a href="{{route('edit-clients', $info->id)}}" class="btn " style="background: gold">
                                                <img  style="width: 20px;height: 20px" src="{{url("./images/icon/1159633.png")}}"/></a>
                                            <a href="{{route('delet-clients', $info->id)}}" onclick="return confirm('are you sur you want delete this client')" class=" btn" style="background: gold">
                                                <img  style="width: 20px;height: 20px" src="{{url("./images/icon/1345874.png")}}"/></a>
                                            <a href="{{route('show-client', $info->id)}}"  class=" btn" style="background: gold">
                                                <img  style="width: 20px;height: 20px" src="{{url("./images/icon/user-profile-icon.webp")}}"/></a>

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
                            $(document).on('input',"#searchClient",function(){

                                var searchClient=$(this).val();
                                jQuery.ajax({
                                    url:"{{route('ajax_search_client')}}",
                                    type:'post',
                                    datatype: 'html',
                                    cache:false,
                                    data:{searchClient:searchClient,'_token':"{{csrf_token()}}"},
                                    success:function(data){
                                        $("#ajax_search_result").html(data);
                                    },
                                    error:function(){

                                    }



                                })
                            })


                        })
                    </script>
@endsection
@section("titre","Clients")
@section("clients","text-white border-bottom ")
