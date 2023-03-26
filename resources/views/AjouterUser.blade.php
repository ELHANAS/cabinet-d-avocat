@extends('layouts.app')

@section('content')
    <div class="p-5" style="height:100%;background: #7A6C21">
    <form class="row" enctype="multipart/form-data" method="post" action="{{ route('user.store') }}">
        {{ csrf_field() }}
        <div class="col-6">
            <div class="form-group py-3 row">
                <label class="col" for="nom">Nom :</label>
                <input  type="text" class="form-control  col col" id="nom" aria-describedby="emailHelp" name="name" value="{{old("nom")}}" placeholder="Nom">
                @error("name")
                <small  class="ms-3 form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group py-3 row">
                <label class="col" for="userName">email: </label>
                <input type="email" name="email" class="form-control col col" id="userName" value="{{old("email")}}" placeholder="entrer your user Name ...">
                @error("email")
                <small  class="ms-3 form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group py-3 row">
                <label class="col" class="form-label" for="exampleCheck1">Mot de passe :</label>
                <input type="password" class="form-control col col" id="password"  placeholder="entrer your password..." name="password">
                @error("password")
                <small  class="ms-3 form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group py-3 row">
                <label class="form-label col" for="photo">photo :</label>
                <label for="image" class="col" ><img style="width: 40px" src="{{url("./images/icon/211092.png")}}" alt="photo"></label>
                <span id="strImage"></span>
                <input type="file" hidden   id="image" name="image">
                @error("image")
                <small  class="ms-3 form-text text-danger">{{$message}}</small>
                @enderror
            </div>
        </div>


        <div class="col-6">

            <div class="form-group py-3 ">
                <div class="row">


                <label for="Telephone" class="col">Telephone : </label>
                <input type="tel" class="form-control col" name="tel" id="Telephone" value="{{old("tel")}}" placeholder="entrer your tel ...">
                </div>
                @error("tel")
                <small  class="ms-3 form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group py-3 row">
                <label  class="col">Fonction :</label>
                <div class="col">
                <input type="radio" class="form-check-input col-2" id="role1" value="Avocat" @if(old("role") == "Avocat" ) checked  @endif name="role"> Avocat
                <input type="radio" class="form-check-input ms-5 col-2" id="role2"value="secrétaire" @if(old("role") == "secrétaire") checked  @endif  name="role"> secrétaire

                </div>
                @error("role")
                <small  class="ms-3 form-text text-danger">{{$message}}</small>
                @enderror
            </div>


        </div>
        <button type="submit" class="btn mt-5 m-auto  " style="width: 100px;background: black;color:gold;border-radius: 30px;border: 1px solid gold">Ajouter</button>
    </form>
    </div>
@endsection

@section("user","text-white border-bottom ")

@section("titre","Ajouter user")
