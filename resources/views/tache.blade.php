@extends("./resource/index")
@section("content")
<div>

    <div>
        <form class="form-inline">
            <div class="row p-0  d-flex justify-content-between">
                <div class="col-6 row  d-flex justify-content-between" >
                    <div class="col-4 ">
                        <a href="/ajouterUser" class="btn w-100 col-3" style="background: gold">Ajouter</a>
                    </div>
                    <div class="col col-8 row">
                        <div class="col-6">
                            <input type="date" class="form-control"  value="date debut " >
                        </div>
                        <div class="col-6">
                            <input type="date" class="form-control"  value="date fin " >
                        </div>
                    </div>
                </div>
                <div class="col-6 ">

                    <div class="input-group d-flex justify-content-end">

                        <div class="form-outline border-primary">
                            <input class="form-control w-100" type="search" name="search" id="search" placeholder="Recherche..." />
                        </div>
                        <button type="button" class="btn"style="background: gold">
                            <img src="images/icon/56936.png" alt="search" style="width: 20px">
                        </button>
                    </div>

                </div>
            </div>
        </form>
    </div>
    <div class="mt-4 d-flex justify-content-between">
        <table class="table " style="background:#7A6C21; border: 2px #EED758 solid   ">
            <thead style=" border: 2px #EED758 solid">
            <tr>
                <th scope="col">CODE</th>
                <th scope="col">Titre</th>
                <th scope="col">Description</th>
                <th scope="col">Date de tache</th>

                <th scope="col">SUPRIMER</th>


            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>plalalala</td>
                <td>divorce</td>
                <td>20/03/2023</td>

                <td><img  style="width: 20px;height: 20px" src="./icon/1345874.png"/></td>

            </tr>
            <tr>
                <th scope="row">1</th>
                <td>plalalala</td>
                <td>divorce</td>
                <td>20/03/2023</td>

                <td><img  style="width: 20px;height: 20px" src="./icon/1345874.png"/></td>

            </tr>
            <tr>
                <th scope="row">1</th>
                <td>plalalala</td>
                <td>divorce</td>
                <td>20/03/2023</td>

                <td><img  style="width: 20px;height: 20px" src="./icon/1345874.png"/></td>

            </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
@section("titre","Cabinets D’avocat")
@section("Taches","text-white border-bottom ")

