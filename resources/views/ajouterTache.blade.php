@extends("./resource/index")
@section("content")
    <div class="p-5" style="height:100%;background: #7A6C21">
        <form class="row">
            <div class="col-6 p-5">
                <div class="form-group row">
                    <label class="col" for="titre">Titre :</label>
                    <input  type="text" class="form-control  col col" id="titre" aria-describedby="emailHelp" name="titre" placeholder="titre">
                    <small  class="ms-3 form-text text-danger">error.</small>
                </div>

                <div class="form- row">
                    <label class="col" class="form-label" for="DTache">date de tâche :</label>
                    <input type="date" class="form-control col" id="DTache" placeholder="entrer your password..." name="password">
                    <small  class="ms-3 form-text text-danger">error.</small>
                </div>
                <div class="form-group row">
                    <label class="form-label col" for="affaire">affaire :</label>
                    <select class="form-select col">
                        <option>les affaire</option>
                    </select>
                    <small  class="ms-3 form-text text-danger">error.</small>
                </div>
            </div>


            <div class="col-6 p-5">
                <div class="form-group  row">
                    <textarea style="height: 200px" >ecrire un description ...

                    </textarea>
                    <small  class="ms-3 form-text text-danger">error.</small>
                </div>
            </div>

            <button type="submit" class="btn mt-2 m-auto " style="background: black;color:gold;border-radius: 30px;border: 1px solid gold;width: 100px">Ajouter</button>
        </form>
    </div>
@endsection
@section("taches","text-white border-bottom ")

@section("titre","Ajouter Tâche")
