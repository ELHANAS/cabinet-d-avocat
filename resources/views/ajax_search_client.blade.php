<table class="table mt-4"  style="background-color: rgb(122, 108, 33);">
    <thead>
    <tr>
        <th scope="col">Code</th>
        <th scope="col">name</th>
        <th scope="col">Active</th>
        <th scope="col">Ville</th>
        <th scope="col"> actions</th>
    </tr>
    </thead>
    <tbody>
    @if(!@empty($data))
        @foreach($data as $info)
            <tr>

                <td>{{$info->id}}</td>
                <td>{{$info->name}}</td>
                <td>@if($info->active==1) Active @else not active @endif</td>
                <td>{{$info->ville}}</td>
                <td>
                    <a href="{{route('edit-clients', $info->id)}}" class="btn " style="background: gold">
                        <img  style="width: 20px;height: 20px" src="{{url("./images/icon/1159633.png")}}"/></a>
                    <a href="{{route('delet-clients', $info->id)}}" onclick="return confirm('are you sur you want delete this client')" class=" btn" style="background: gold">
                        <img  style="width: 20px;height: 20px" src="{{url("./images/icon/1345874.png")}}"/></a>
                    <a href="{{route('show-client', $info->id)}}"  class=" btn" style="background: gold">
                        <img  style="width: 20px;height: 20px" src="{{url("./images/icon/user-profile-icon.webp")}}"/></a>

                </td>

            </tr>
        @endforeach
    @endif
    </tbody>
</table>
