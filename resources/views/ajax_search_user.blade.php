<table  id="table1" style="color:{{\App\Models\Color::getColors()->textMain}};" class="table mt-4">
    <tr>
        <th>Code</th>
        <th>name</th>

        <th>Rôle</th>
        <th></th>
    </tr>

    @foreach($data as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->fonction}}</td>
            <td>
                <a class="btn  " style="width: 40px;background: {{\App\Models\Color::getColors()->bgBtn}};"   href="{{route("user.edit",["id"=>$user->id])}}"><img class="w-100" src="{{url("./images/icon/1159633.png")}}"></a>
                <a class="btn  " style="width: 40px;background: {{\App\Models\Color::getColors()->bgBtn}};"  onclick="return confirm('Are you sure, you want to delete it?')" href="{{route("user.destroy",["id"=>$user->id])}}"><img class="w-100" src="{{url("./images/icon/1345874.png")}}"></a>
                <a class="btn  " style="width: 40px;background: {{\App\Models\Color::getColors()->bgBtn}};"  href="{{route("user.show",["id"=>$user->id])}}"><img class="w-100" src="{{url("./images/icon/user-profile-icon.webp")}}"></a>
            </td>

        </tr>
    @endforeach

</table>
