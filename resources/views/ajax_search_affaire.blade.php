<table class="table " style="color:{{\App\Models\Color::getColors()->textMain}};font-size: 15px   ">
    <thead style=" border-bottom: 2px #EED758 solid">
    <tr>
        <th scope="col">N°</th>
        <th scope="col">name</th>
        <th scope="col">Client </th>
        <th scope="col">Avocat </th>
        <th scope="col">Type</th>
        <th  scope="col"></th>


    </tr>
    </thead>
    <tbody>
    @if(!@empty($Affaires))
        @foreach($Affaires as $info)
            <tr>
                <th scope="row">{{$info->nomber}}</th>
                <td>{{$info->name}}</td>
                <td>{{$info->nameClient}}</td>
                <td>{{$info->nameUser}}</td>
                <td>{{$info->type}}</td>
                <td  >
                    <a href="" class="btn  " style="background: {{\App\Models\Color::getColors()->bgBtn}}">
                        <img  style="width: 20px;height: 20px" src="{{url("./images/icon/1159633.png")}}"/></a>
                    <a href="" onclick="return confirm('are you sur you want delete this Affaire')" class=" btn" style="background: {{\App\Models\Color::getColors()->bgBtn}}">
                        <img  style="width: 20px;height: 20px" src="{{url("./images/icon/1345874.png")}}"/></a>


                    <a style="width: 40px;height: 40px "  href="{{route("affaire.update.etat",["affaire"=>$info->id])}}"  style="background: gold" class="    btn @if($info->etat == 1) bg-danger @else  bg-success @endif  " >@if($info->etat == 1) T @else  C @endif        </a>
                    <a href="{{route("show.affaire",$info->id)}}">detail</a>
                </td>

            </tr>

        @endforeach
    @endif
    </tbody>
</table>
