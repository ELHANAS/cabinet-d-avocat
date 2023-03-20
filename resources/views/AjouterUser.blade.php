@extends("./resource/index")
@section("content")
    <div class="p-5" style="height:100%;background: #7A6C21">
    <form class="row">
        <div class="col-6">
            <div class="form-group row">
                <label class="col" for="nom">Nom :</label>
                <input  type="text" class="form-control  col col" id="nom" aria-describedby="emailHelp" name="nom" placeholder="Nom">
                <small  class="ms-3 form-text text-danger">error.</small>
            </div>
            <div class="form-group  row">
                <label class="col" for="userName">User Name : </label>
                <input type="text" class="form-control col col" id="userName" placeholder="entrer your user Name ...">
                <small  class="ms-3 form-text text-danger">error.</small>
            </div>
            <div class="form- row">
                <label class="col" class="form-label" for="exampleCheck1">Mot de passe :</label>
                <input type="password" class="form-control col col" id="password" placeholder="entrer your password..." name="password">
                <small  class="ms-3 form-text text-danger">error.</small>
            </div>
            <div class="form-group row">
                <label class="form-label col" for="photo">photo :</label>
                <input type="file" class="form-control col" id="photo" name="photo">
                <small  class="ms-3 form-text text-danger">error.</small>
            </div>
        </div>


        <div class="col-6">
            <div class="form-group row">
                <label for="prenom"  class="col">Nom :</label>
                <input type="text" class="form-control col" id="prenom"  name="prenom" placeholder="entrer your prénom ..">
                <small  class="ms-3 form-text text-danger">error.</small>
            </div>
            <div class="form-group row">
                <label for="Telephone" class="col">Telephone : </label>
                <input type="tel" class="form-control col" id="Telephone" placeholder="entrer your tel ...">
                <small  class="ms-3 form-text text-danger">error.</small>
            </div>
            <div class="form-group row">
                <label  class="col">Rôle :</label>
                <div class="col">
                <input type="radio" class="form-check-input col-2" id="role1" value="Avocat" name="role"> Avocat
                <input type="radio" class="form-check-input ms-5 col-2" id="role2"value="sec" name="role"> sec
                </div>
            </div>

        </div>
        <button type="submit" class="btn mt-5 m-auto  " style="width: 100px;background: black;color:gold;border-radius: 30px;border: 1px solid gold">Ajouter</button>
    </form>
    </div>
@endsection
@section("user","text-white border-bottom ")

@section("titre","Ajouter user")
