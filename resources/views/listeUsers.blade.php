@extends('layouts.app')

@section('content')
    <div >
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
            <form class="form-inline" action="/filtreUser">
                <div class="row p-0  d-flex justify-content-between">
                    <div class="col-4 row  d-flex justify-content-between" >
                        <div class="col-5">
                            <a href="/ajouterUser" class="btn w-100 col-3" style="background: gold">Ajouter</a>
                        </div>
                        <div class="col col-7">
                            <select class="form-select text-white col-6" onchange="submit()" name="filtreRole" id="filtreRole" style="background: goldenrod">
                                <option hidden  selected>filtrer par le rôle</option>
                                <option @if(old("filtreRole") == "Avocat") selected @endif value="Avocat">Avocat</option>
                                <option @if(old("filtreRole") == "secrétaire") selected @endif value="secrétaire">secrétaire</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-7 ">

                        <div class="input-group d-flex justify-content-end">

                            <div class="form-outline border-primary">
                                <input class="form-control w-100" type="text" name="searchClient" id="searchClient" placeholder="Recherche..." />
                            </div>
                            <button type="button" class="btn"style="background: gold">
                                <img src="images/icon/56936.png" alt="search" style="width: 20px">
                            </button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
        <div id="ajax_search_result_user">
            <table style="background: #7A6C21"  class="table mt-4">
                <tr>
                    <th>Code</th>
                    <th>name</th>
                    <th>Fonction</th>
                    <th></th>
                    <th></th>
                </tr>

                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->fonction}}</td>
                        <td>@if($user->role == 1) Admin @endif</td>
                        <td>
                            <a class="btn  " style="width: 40px;background: gold"   href="{{route("user.edit",["id"=>$user->id])}}"><img class="w-100" src="{{url("./images/icon/1159633.png")}}"></a>
                            <a class="btn  " style="width: 40px;background: gold"  onclick="return confirm('Are you sure, you want to delete it?')" href="{{route("user.destroy",["id"=>$user->id])}}"><img class="w-100" src="{{url("./images/icon/1345874.png")}}"></a>
                            <a class="btn  " style="width: 40px;background: gold"  href="{{route("user.show",["id"=>$user->id])}}"><img class="w-100" src="{{url("./images/icon/user-profile-icon.webp")}}"></a>
                        </td>

                    </tr>
                @endforeach

            </table>
        </div>
    </div>

@endsection
@section('script')
    <script>

        $(document).ready(function(){
            $(document).on('input',"#searchClient",function(){
                var searchClient=$(this).val();
                jQuery.ajax({ url:"{{route('ajax_user')}}",
                    type:'post',
                    datatype: 'html',
                    cache:false,
                    data:{searchClient:searchClient,'_token':"{{csrf_token()}}"},
                    success:function(data){
                        $("#ajax_search_result_user").html(data);
                    },
                    error:function(){

                    }
                })
            })

        })
    </script>

@endsection


@section("titre","Users")
@section("users","text-white border-bottom ")
