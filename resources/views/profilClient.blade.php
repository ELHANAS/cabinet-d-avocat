@extends("./resource/index")
@section("content")
    <div class="container-fluid " style='background-image: url("./icon/istockphoto-1143525474-170667a.jpg");background-repeat: no-repeat;
background-size: cover ; height: 700px ; width: 700px ; border: 3px #FFD700 solid '>
        <div class="row d-flex justify-content-around">
            <div class="col-auto" style="margin-top: 30px">
                <img src="./icon/360_F_503577073_y4ZwKcQttFbUut0A7InyK8LhS3ObKL2t.jpg" style="width: 150px;height: 150px;border-radius: 50%;"/>
                <h3 style="color:#FFD700;">Dahmani Rabie</h3>
            </div>
            <div class="col-auto" style="margin-top: 50px ; color:#FFD700">
                <p>Rabie Dahmani </p>
                <p> <img src="./icon/stock-vector-black-telephone-auricular-gold-plated.jpg" style="width: 30px;height: 30px"/>0974829438092</p>
                <p>Ville : Berkane</p>
                <p>date de naissance: 23/06/1990 </p>
                <p>CIN : FA12345</p>
            </div>
        </div>
        <div class="row  m-5  " id="row" style="color:#FFD700; ">
            <div class="col d-flex justify-content-center "  >
                <div class="  p-3   text-center fw-bold" style=" height: 120px ;border:2px #FFD700 solid; width: 100px ;background:black">
                    <div class=" fs-3" >
                        <span>20</span>
                    </div>
                    <span>les-affaires </span>
                </div>
            </div>


        </div>



        <div class="row d-flex justify-content-between" style="margin-top: 100px">
            <div class="col-4">
                <button type="button" class="btn " style="background:black; width: 150px; color:#FFD700; border:2px #FFD700 solid;
            border-radius:20px; ">Modifier</button>
            </div>
            <div class="col-4">
                <button type="button" class="btn " style="background:black; width: 150px;color:#FFD700; border:2px #FFD700 solid;
            border-radius:20px; ">suprimer</button>
            </div>
            <div class="col-4">
                <P style="background:black; width: 150px;height:45px;color:#6EAC1F; border:2px #6EAC1F solid;
            border-radius:50%;padding:10px ">ACTIVE</P>
            </div>
        </div>
    </div>

    </div>


@endsection
@section("titre","profil user")
@section("clients","text-white border-bottom ")

