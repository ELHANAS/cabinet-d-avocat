@extends("./resource/index")
@section("content")
    <div class="p-5" style="height:100%;background: #7A6C21">
        <form class="row">
            <div class="col-6">
                <div class="form-group row">
                    <label class="col" for="nom">Numero d'affaires</label>
                    <input  type="Number" class="form-control  col col" id="number" aria-describedby="emailHelp" name="number" placeholder="numero d'affaire">
                    <small  class="ms-3 form-text text-danger">error.</small>
                </div>
                <div class="form-group  row">
                    <label class="col" for="userName"> Name : </label>
                    <input type="text" class="form-control col col" name="affair" id="affireName" placeholder="entrer your affaire Name ...">
                    <small  class="ms-3 form-text text-danger">error.</small>
                </div>
                <div class="form- row">
                    <label class="col" class="form-label" for="exampleCheck1">TYPE :</label>
                    <div class="col">
                        <select class="form-control " style="width: 280px">
                            <option value="">choisir un  type </option>
                            <option value="type1">type1</option>
                            <option value="type2">type2</option>
                        </select>
                    </div>

                    <small  class="ms-3 form-text text-danger">error.</small>
                </div>
                <div class="form-group row">
                    <label class="col" class="form-label" for="exampleCheck1">CLIENT :</label>
                    <div class="col">
                        <select class="form-control " style="width: 280px">
                            <option value="">choisir un  CLIENT </option>
                            <option value="CLIENT1">CLIENT1</option>
                            <option value="CLIENT2">CLIENT2</option>
                        </select>
                    </div>


                    <small  class="ms-3 form-text text-danger">error.</small>
                </div>
                <div class="form-group row">
                    <label class="form-label col" for="photo">document :</label>
                    <input type="file" class="form-control col" id="document" name="document">
                    <small  class="ms-3 form-text text-danger">error.</small>
                </div>
            </div>


            <div class="col-6">
                <div class="form-group row">
                    <label for="prenom"  class="col">Adverssaires:</label>
                    <input type="text" class="form-control col" id="adverssaire"  name="adverssaire" placeholder="entrer adverssaire ..">
                    <small  class="ms-3 form-text text-danger">error.</small>
                </div>
                <div class="form-group row">
                    <label for="Telephone" class="col">jugement : </label>
                    <input type="text" class="form-control col" id="jugement" name="jugement" placeholder="jugement ...">
                    <small  class="ms-3 form-text text-danger">error.</small>
                </div>
                <div class="form-group row">
                    <label  class="col">Date de jugement :</label>
                    <div class="col">
                        <input type="date"  style="width: 270px; height: 35px" class="form-contro col " id="jugement_date" name="jugement_date"/>
                         </div>
                </div>
                <div class="form-group row" style="margin-top: 20px">
                    <label class="col" class="form-label" for="exampleCheck1">etat :</label>
                    <div class="col">
                        <select class="form-control " style="width: 280px">
                            <option value="">choisir un  etat </option>
                            <option value="eta">etat</option>
                        </select>
                    </div>


                    <small  class="ms-3 form-text text-danger">error.</small>

                </div>
                <div class="form-group row">
                    <label class="col" class="form-label" for="exampleCheck1"> avocat  :</label>
                    <div class="col">
                        <select class="form-control " style="width: 280px">
                            <option value="">choisir un  avocat </option>
                            <option value="anas elhandouz">anas elhandouz</option>
                        </select>
                    </div>


                    <small  class="ms-3 form-text text-danger">error.</small>

                </div>

            </div>
            <button type="submit" class="btn mt-5 m-auto w-25 " style="background: black;color:gold;border-radius: 30px;border: 1px solid gold">Ajouter affaire</button>
        </form>
    </div>
@endsection
@section("user","text-white border-bottom ")

@section("titre","Ajouter Affaire")
