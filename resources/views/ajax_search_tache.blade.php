<table class="table " style="color:{{\App\Models\Color::getColors()->textMain}};">
    <thead style=" border: 2px #EED758 solid">
    <tr>
        <th scope="col">N°</th>
        <th scope="col">affaire</th>
        <th scope="col">titre</th>
        <th scope="col">Date de tache</th>

        <th scope="col"></th>


    </tr>
    </thead>
    <tbody>
    @foreach( $taches as $tache)
        <tr>
            <th scope="row">{{$tache->id}}</th>
            <td>{{$tache->name}}</td>
            <td>{{$tache->titre}}</td>
            <td>{{$tache->DTache}}</td>
            <td>
                <a href="" class="btn  " style="background: {{\App\Models\Color::getColors()->bgBtn}}">
                    <img  style="width: 20px;height: 20px" src="{{url("./images/icon/1159633.png")}}"/></a>
                <a href="" onclick="return confirm('are you sur you want delete this Affaire')" class=" btn" style="background: {{\App\Models\Color::getColors()->bgBtn}}">
                    <img  style="width: 20px;height: 20px" src="{{url("./images/icon/1345874.png")}}"/></a>
                <a style="width: 40px;height: 40px "  href=""  style="background: {{\App\Models\Color::getColors()->bgBtn}}" class="    btn  " >t      </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
