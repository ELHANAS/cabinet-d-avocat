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
                        <div class="col-4">
                            <a href="/ajouterUser" class="btn w-100 " style="color: {{\App\Models\Color::getColors()->textBtn}}; background:  {{\App\Models\Color::getColors()->bgBtn}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
                                    <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7Zm.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0Zm-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                                    <path d="M8.256 14a4.474 4.474 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10c.26 0 .507.009.74.025.226-.341.496-.65.804-.918C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4s1 1 1 1h5.256Z"/>
                                </svg>
                            </a>
                        </div>
                        <div class="col col-8">
                            <select class="form-select  col-6" onchange="submit()" name="filtreRole"
                                    id="filtreRole" style="background:{{\App\Models\Color::getColors()->bgBtn}};color: {{\App\Models\Color::getColors()->textBtn}}">
                                <option hidden  selected>filtrer par le Fonction</option>
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
                            <button type="button" class="btn"style="background: {{\App\Models\Color::getColors()->bgBtn}}">
                                <img src="images/icon/56936.png" alt="search" style="width: 20px">
                            </button>
                        </div>

                    </div>
                </div>
            </form>
        </div>
        <div id="ajax_search_result_user">
            <table  class="table mt-4" style="color:{{\App\Models\Color::getColors()->textMain}};">
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
                            <a class="btn  " style="background: {{\App\Models\Color::getColors()->bgBtn}};color: {{\App\Models\Color::getColors()->textBtn}}"   href="{{route("user.edit",["id"=>$user->id])}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
                                    <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm-9 8c0 1 1 1 1 1h5.256A4.493 4.493 0 0 1 8 12.5a4.49 4.49 0 0 1 1.544-3.393C9.077 9.038 8.564 9 8 9c-5 0-6 3-6 4Zm9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382l.045-.148ZM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0Z"/>
                                </svg>
                            </a>
                            <a class="btn  " style="background: {{\App\Models\Color::getColors()->bgBtn}};color: {{\App\Models\Color::getColors()->textBtn}} "  onclick="return confirm('Are you sure, you want to delete it?')" href="{{route("user.destroy",["id"=>$user->id])}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                </svg>
                            </a>
                            <a class="btn  " style="background: {{\App\Models\Color::getColors()->bgBtn}};color: {{\App\Models\Color::getColors()->textBtn}}"  href="{{route("user.show",["id"=>$user->id])}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-vcard-fill" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm9 1.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4a.5.5 0 0 0-.5.5ZM9 8a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 0-1h-4A.5.5 0 0 0 9 8Zm1 2.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 0-1h-3a.5.5 0 0 0-.5.5Zm-1 2C9 10.567 7.21 9 5 9c-2.086 0-3.8 1.398-3.984 3.181A1 1 0 0 0 2 13h6.96c.026-.163.04-.33.04-.5ZM7 6a2 2 0 1 0-4 0 2 2 0 0 0 4 0Z"/>
                                </svg>
                            </a>
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
@section("users")
    background:{{\App\Models\Color::getColors()->textHeader}};
    color: {{\App\Models\Color::getColors()->bgHeader}};
@endsection
