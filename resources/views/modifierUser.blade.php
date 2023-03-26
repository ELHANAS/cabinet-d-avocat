@extends('layouts.app')

@section('content')
    <div class="p-5" style="height:100%;background: #7A6C21">
        <form class="row"  action="{{route("user.modifier",["id"=>$user->id])}}">
            <div class="col-6">
                <div class="form-group row p-3">
                    <input type="hidden" name="id" value="{{$user->id}}">
                    <label class="col" for="nom">Nom :</label>
                    <input  type="text" class="form-control  col col" id="name" aria-describedby="emailHelp" name="name" value="{{$user->name}}" placeholder="Nom">
                    @error("name")
                    <small  class="ms-3 form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group  row  p-3">
                    <label class="col" for="email">email : </label>
                    <input type="text" name="email" class="form-control col col" id="email" value="{{$user->email}}" placeholder="entrer your user Name ...">
                    @error("userName")
                    <small  class="ms-3 form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                @if(Auth::user()->role == 1)
                    <div class="form- row  p-3">
                        <label  class="col">Fonction :</label>
                        <select class="form-select col" name="admin" id="admin">
                            <option selected hidden>is_admin</option>
                            <option @if($user->role == 1)selected @endif value="admin">Admin</option>
                            <option @if($user->role == 0)selected @endif value="user">User</option>
                        </select>
                        @error("admin")
                        <small  class="ms-3 form-text text-danger">{{$message}}</small>
                        @enderror
                    </div>
                @endif


            </div>


            <div class="col-6 ">
                <div class="form-group ">
                    <div class="row form-group   p-3">


                        <label for="Telephone" class="col">Telephone : </label>
                        <input type="tel" class="form-control col" name="tel" id="Telephone" value="{{$user->tel}}" placeholder="entrer your tel ...">
                    </div>
                    @error("tel")
                    <small  class="ms-3 form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group row p-3">
                    <label  class="col">Rôle :</label>
                    <div class="col">
                        <input type="radio" class="form-check-input col-2" id="role1" value="Avocat" @if($user->fonction == "Avocat" ) checked  @endif name="role"> Avocat
                        <input type="radio" class="form-check-input ms-5 col-2" id="role2"value="sec" @if($user->fonction  == "sec") checked  @endif  name="role"> sec

                    </div>
                    @error("role")
                    <small  class="ms-3 form-text text-danger">{{$message}}</small>
                    @enderror
                </div>

            </div>
            <button type="submit" class="btn mt-5 m-auto  " style="width: 100px;background: black;color:gold;border-radius: 30px;border: 1px solid gold">Modifier</button>
        </form>
    </div>
@endsection
@section("user","text-white border-bottom ")

@section("titre","Modifier user")

