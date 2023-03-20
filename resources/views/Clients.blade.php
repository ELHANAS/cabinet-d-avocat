@extends("./resource/index")
@section("content")
<body>
<div>
    <form class="form-inline">
        <div class="row p-0  d-flex justify-content-between">
            <div class="col-4  text-start" >
                <a href="/ajouterClient" class="btn mx-3 w-50" style="background: gold">Ajouter</a>
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
        <form>
</div>
  <div>
    <table class="table mt-4"  style="background-color: rgb(122, 108, 33);">
      <thead>
        <tr>
          <th scope="col">Code</th>
          <th scope="col">Nom</th>
          <th scope="col">Prenom</th>
          <th scope="col">CIN</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Hajji</td>
          <td>Mohamed</td>
          <td>FA174035</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Dahmani</td>
          <td>Rabie</td>
          <td>FA190546</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Zerouki</td>
          <td>Nafissa</td>
          <td>FA2347385</td>
        </tr>
      </tbody>
    </table>
  </div>
@endsection
@section("titre","Clients")
@section("clients","text-white border-bottom ")
