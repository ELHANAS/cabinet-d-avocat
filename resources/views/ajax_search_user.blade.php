<table style="background: #7A6C21" id="table1" class="table mt-4">
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
                <a class="btn  " style="width: 40px;background: gold"   href="{{route("user.edit",["id"=>$user->id])}}"><img class="w-100" src="{{url("./images/icon/1159633.png")}}"></a>
                <a class="btn  " style="width: 40px;background: gold"  onclick="return confirm('Are you sure, you want to delete it?')" href="{{route("user.destroy",["id"=>$user->id])}}"><img class="w-100" src="{{url("./images/icon/1345874.png")}}"></a>
                <a class="btn  " style="width: 40px;background: gold"  href="{{route("user.show",["id"=>$user->id])}}"><img class="w-100" src="{{url("./images/icon/user-profile-icon.webp")}}"></a>
            </td>

        </tr>
    @endforeach

</table>
