@extends("./resource/index")
@section("content")
<div >
    <div>
        <form class="form-inline">
            <div class="row p-0  d-flex justify-content-between">
                <div class="col-4 row  d-flex justify-content-between" >
                    <div class="col-6 ">
                         <a href="/ajouterUser" class="btn w-100 col-3" style="background: gold">Ajouter</a>
                    </div>
                    <div class="col col-6">
                        <select class="form-select text-white col-6" style="background: goldenrod">
                            <option hidden  selected>filtrer par le rôle</option>
                            <option>option 1</option>
                            <option>option 2</option>
                        </select>
                    </div>
                </div>
                <div class="col-7 ">

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
    <table style="background: #7A6C21" class="table mt-4">
        <tr>
            <th>Code</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Rôle</th>
            <th></th>
        </tr>
        <tr>
            <td>1</td>
            <td>test</td>
            <td>test</td>
            <td>test</td>
            <td>supp</td>
        </tr>
    </table>
</div>

@endsection


@section("titre","Users")
@section("users","text-white border-bottom ")
