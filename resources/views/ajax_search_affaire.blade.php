<table class="table " style="background:#7A6C21; border: 2px #EED758 solid   ">
    <thead style=" border: 2px #EED758 solid">
    <tr>
        <th scope="col">Numero d'affaire</th>
        <th scope="col">Nom</th>
        <th scope="col">id-Client </th>
        <th scope="col">Etat</th>
        <th scope="col">Type</th>
        <th scope="col">les actions</th>


    </tr>
    </thead>
    <tbody>
    @if(!@empty($Affaires))
    @foreach($Affaires as $info)
    <tr>
        <th scope="row">{{$info->nomber}}</th>
        <td>{{$info->name}}</td>
        <td>{{$info->id_client}}</td>
        <td>{{$info->etat}}</td>
        <td>{{$info->type}}</td>
        <td>
            <a href="" class="btn " style="background: gold">
                <img  style="width: 20px;height: 20px" src="{{url("./images/icon/1159633.png")}}"/></a>
            <a href="" onclick="return confirm('are you sur you want delete this client')" class=" btn" style="background: gold">
                <img  style="width: 20px;height: 20px" src="{{url("./images/icon/1345874.png")}}"/></a>
            <a href=""  class=" btn" style="background: gold">
                <img  style="width: 20px;height: 20px" src="{{url("./images/icon/user-profile-icon.webp")}}"/></a>
        </td>

    </tr>

    @endforeach
    @endif
    </tbody>
</table>
