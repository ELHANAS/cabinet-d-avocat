@extends("./resource/index")
@section("content")
    <body>
    <div class="p-5" style="background: #7A6C21">
        <form class="row" method="post" action="{{route('updatclient',$data['id'])}}">
            @csrf
            <div class="col-6">
                <div class="form-group  row">
                    <label class="col" for="userName">Name : </label>
                    <input type="text" class="form-control col col" id="nom"  value="{{old('nom',$data['nom'])}}" name="nom" placeholder="entrer your  Name ...">
                    @error('nom')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form- row" style="margin-top: 30px">
                    <label class="col" class="form-label" for="exampleCheck1">Prenom :</label>
                    <input type="text" class="form-control col col" id="Prenom" name="Prenom" value="{{old('Prenom',$data['prenom'])}}">
                    @error('Prenom')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group row" style="margin-top: 30px"> <label class="form-label col" for="tele">Telephone :</label>
                    <input type="tel" class="form-control col" id="tel" name="tel" value="{{old("tel", $data['tel'])}}">
                    @error('tel')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                <div class="form-group row" style="margin-top: 30px">

                    <label for="activiter" class="form-label col">Activite:</label>
                    <select name="activiter" class="form-control col">
                        <option value="" > les activiteé</option>
                        <option  @if(old('activiter',$data['active']==1) )selected @endif value="1">yes</option>
                        <option @if(old('activiter',$data['active']==0) and old('activiter',$data['active']!="")) selected @endif  value="0">no</option>
                    </select>
                    @error('activiter')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
            </div>
            <div class="col-6">
                <div class="form-group row"> <label for="adress" class="col">Adress:</label>
                    <input type="text" class="form-control col" id="Adress" name="Adress" placeholder="entrer your Adress" value="{{old("Adress",$data['adresse'])}}">
                    @error('Adress')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group row" style="margin-top: 30px">
                    <label for="Telephone" class="col">Ville : </label>
                    <input type="text" class="form-control col" name="Ville" id="Ville" value="{{old("Ville",$data['ville'])}}" placeholder="entrer your user Ville ...">
                    @error('Ville')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="col">
                    <div class="form-group row" style="margin-top: 30px">
                        <label for="CIN" class="col">CIN:</label>
                        <input type="text" class="form-control col" id="CIN" name="CIN" placeholder="entrer your CIN" value="{{old("CIN",$data['cin'])}}">
                        @error('CIN')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group row" >
                        <label for="dat_naiss" class="col">Date de Naissance :</label>
                        <input type="date" class="form-control col" id="dat_naiss" name="dat_naiss" placeholder="entrer your dat_naiss" value="{{old("dat_naiss",$data['datenaissance'])}}">
                        @error('dat_naiss')
                        <span class="text-danger">{{$message}}</span>
                        @enderror

                    </div>
                </div>

            </div> <button type="submit" class="btn mt-5 m-auto w-25" style="background: white;border-radius: 30px;border: 1px solid gold">Submit</button>
        </form>
    </div>
    </body>
    </html>

@endsection
@section("titre","update client")
@section("clients","text-white border-bottom ")
