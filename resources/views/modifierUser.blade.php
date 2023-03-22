@extends("./resource/index")
@section("content")
    <div class="p-5" style="height:100%;background: #7A6C21">
        <form class="row"  action="{{route("user.modifier",["id"=>$user->id])}}">
            <div class="col-6">
                <div class="form-group row p-3">
                    <input type="hidden" name="id" value="{{$user->id}}">
                    <label class="col" for="nom">Nom :</label>
                    <input  type="text" class="form-control  col col" id="nom" aria-describedby="emailHelp" name="nom" value="{{$user->nom}}" placeholder="Nom">
                    @error("nom")
                    <small  class="ms-3 form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form-group  row  p-3">
                    <label class="col" for="userName">User Name : </label>
                    <input type="text" name="userName" class="form-control col col" id="userName" value="{{$user->userName}}" placeholder="entrer your user Name ...">
                    @error("userName")
                    <small  class="ms-3 form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="form- row  p-3">
                    <label class="col" class="form-label" for="exampleCheck1">Mot de passe :</label>
                    <input type="password" class="form-control col col" id="password" value="{{$user->password}}" placeholder="entrer your password..." name="password">
                    @error("password")
                    <small  class="ms-3 form-text text-danger">{{$message}}</small>
                    @enderror
                </div>

            </div>


            <div class="col-6 ">
                <div class="form-group row  p-3">
                    <label for="prenom"  class="col">Prénom :</label>
                    <input type="text" class="form-control col" id="prenom"  name="prenom" value="{{$user->prenom}}" placeholder="entrer your prénom ..">
                    @error("prenom")
                    <small  class="ms-3 form-text text-danger">{{$message}}</small>
                    @enderror
                </div>
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
                        <input type="radio" class="form-check-input col-2" id="role1" value="Avocat" @if($user->role == "Avocat" ) checked  @endif name="role"> Avocat
                        <input type="radio" class="form-check-input ms-5 col-2" id="role2"value="sec" @if($user->role  == "sec") checked  @endif  name="role"> sec

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

