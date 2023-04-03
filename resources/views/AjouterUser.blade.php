@extends('layouts.app')

@section('content')
    <div class="p-5" style="height:100%;background: {{\App\Models\Color::getColors()->bgMain}};color: {{\App\Models\Color::getColors()->textMain}}">
    <form class="row" enctype="multipart/form-data" method="post" action="{{ route('user.store') }}">
        {{ csrf_field() }}
        <div class="col-6">
            <div class="form-group py-3 row">
                <label class="col" for="nom">Nom :</label>
                <input  type="text" class="form-control  col col" id="nom" aria-describedby="emailHelp" name="name" value="{{old("name")}}" placeholder="Nom">
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
                <label class="form-label col" for="exampleCheck1">Mot de passe :</label>
                <input type="password" class="form-control  col" id="password"  placeholder="entrer your password..." name="password">
                @error("password")
                <small  class="ms-3 form-text text-danger">{{$message}}</small>
                @enderror
            </div>
            <div class="form-group py-3 row">
                <label class="form-label col" for="photo">photo :</label>
                <input type="file" class="form-control col"    id="image" name="image">
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
                <input type="radio" class="form-check-input col-2" id="role1" value="Avocat" @if(old("Fonction") == "Avocat" ) checked  @endif name="Fonction"> Avocat
                <input type="radio" class="form-check-input ms-5 col-2" id="role2"value="secrétaire" @if(old("Fonction") == "secrétaire") checked  @endif  name="Fonction"> secrétaire

                </div>
                @error("Fonction")
                <small  class="ms-3 form-text text-danger">{{$message}}</small>
                @enderror
            </div>


        </div>
        <button type="submit" class="btn mt-5 m-auto  " style="width: 200px;background: {{\App\Models\Color::getColors()->textBtn}};color:{{\App\Models\Color::getColors()->bgBtn}};border-radius: 30px;
        border: 1px solid     {{\App\Models\Color::getColors()->bgBtn}}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z"/>
            </svg>
            Enregistrer</button>
    </form>
    </div>
@endsection

@section("user")
    background:{{\App\Models\Color::getColors()->textHeader}};
    color: {{\App\Models\Color::getColors()->bgHeader}};
@endsection

@section("titre","Ajouter user")
