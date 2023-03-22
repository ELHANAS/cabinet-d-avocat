@extends("./resource/index")
@section("content")
<body>
<div class="p-5" style="background: #7A6C21">
    <form class="row">
        <div class="col-6">
            <div class="form-group row"> <label class="col" for="nom">Code :</label> <input type="text"
                                                                                            class="form-control  col col" id="nom" aria-describedby="emailHelp" name="nom" placeholder="Nom">
                <small class="form-text text-muted">error.</small> </div>
            <div class="form-group  row"> <label class="col" for="userName">Name : </label> <input type="text"
                                                                                                   class="form-control col col" id="userName" placeholder="entrer your user Name ..."> <small
                    class="form-text text-muted">error.</small> </div>
            <div class="form- row"> <label class="col" class="form-label" for="exampleCheck1">Prenom :</label>
                <input type="password" class="form-control col col" id="password" name="password"> <small
                    class="form-text text-muted">error.</small> </div>
            <div class="form-group row"> <label class="form-label col" for="photo">Telephone :</label> <input type="file"
                                                                                                              class="form-control col" id="photo" name="photo"> <small class="form-text text-muted">error.</small>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group row"> <label for="prenom" class="col">Adress:</label> <input type="text"
                                                                                                class="form-control col" id="prenom" name="prenom" placeholder="entrer your prénom"> <small
                    class="form-text text-muted">error.</small> </div>
            <div class="form-group row"> <label for="Telephone" class="col">Ville : </label> <input type="tel"
                                                                                                    class="form-control col" id="Telephone" placeholder="entrer your user Name ..."> <small
                    class="form-text text-muted">error.</small> </div>

            <div class="col">
                <div class="form-group row"> <label for="prenom" class="col">CIN:</label> <input type="text"
                                                                                                 class="form-control col" id="prenom" name="prenom" placeholder="entrer your prénom"> <small
                        class="form-text text-muted">error.</small> </div>
                <div class="form-group row"> <label for="prenom" class="col">Date de Naissance :</label> <input type="text"
                                                                                                                class="form-control col" id="prenom" name="prenom" placeholder="entrer your prénom"> <small
                        class="form-text text-muted">error.</small> </div>
                <label for="V">Ville :</label>
                <select name="" id="">
                    <option value="Berkane">Berkane</option>
                    <option value="Oujda">Oujda</option>
                    <option value="Nador">Nador</option>
                </select><br>
            </div>
        </div> <button type="submit" class="btn mt-5 m-auto w-25"
                       style="background: white;border-radius: 30px;border: 1px solid gold">Submit</button>
    </form>
</div>
</body>
</html>

@endsection
@section("titre","Ajouter client")
@section("clients","text-white border-bottom ")
