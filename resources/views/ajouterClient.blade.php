@extends('layouts.app')
@section("content")
    <body>
    <div class="p-5" style="background:{{\App\Models\Color::getColors()->bgMain}} ;color: {{\App\Models\Color::getColors()->textMain}} ">
        <form class="row" method="post" action="{{route('create-store')}}">
            @csrf
            <div class="col-6">
                <div class="form-group  row">
                    <label class="col" for="name">Name : </label>
                    <input type="text" class="form-control  col" id="name"  value="{{old("name")}}" name="name" placeholder="entrer your  Name ...">
                    @error('name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="form-group row mt-3" > <label class="form-label col" for="tele">Telephone :</label>
                    <input type="tel" class="form-control col" id="tel" name="tel" value="{{old("tel")}}">
                    @error('tel')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>
                <div class="form-group row mt-3" >
                    <label for="dat_naiss" class="col">Date de Naissance :</label>
                    <input type="date" class="form-control col" id="dat_naiss" name="dat_naiss" placeholder="entrer your dat_naiss" value="{{old("dat_naiss")}}">
                    @error('dat_naiss')
                    <span class="text-danger">{{$message}}</span>
                    @enderror

                </div>

            </div>
            <div class="col-6">
                <div class="form-group row">
                    <label for="adress" class="col">Adress:</label>
                    <input type="text" class="form-control col" id="Adress" name="Adress" placeholder="entrer your Adress" value="{{old("Adress")}}">
                    @error('Adress')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group row mt-3" >
                    <label for="Telephone" class="col">Ville : </label>
                    <input type="text" class="form-control col" name="Ville" id="Ville" value="{{old("Ville")}}" placeholder="entrer your user Ville ...">
                    @error('Ville')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                <div class="col">
                    <div class="form-group row mt-3" >
                        <label for="CIN" class="col">CIN:</label>
                        <input type="text" class="form-control col" id="CIN" name="CIN" placeholder="entrer your CIN" value="{{old("CIN")}}">
                        @error('CIN')
                        <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>

                </div>

            </div>
            <button type="submit" class="btn mt-5 m-auto  " style="width: 200px;background: {{\App\Models\Color::getColors()->textBtn}};color:{{\App\Models\Color::getColors()->bgBtn}};border-radius: 30px;
        border: 1px solid     {{\App\Models\Color::getColors()->bgBtn}}">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                    <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z"/>
                </svg>
                Enregistrer</button>
        </form>
    </div>
    </body>
    </html>

@endsection
@section("titre","Ajouter client")
@section("clients")
    background:{{\App\Models\Color::getColors()->textHeader}};
    color: {{\App\Models\Color::getColors()->bgHeader}};
@endsection
