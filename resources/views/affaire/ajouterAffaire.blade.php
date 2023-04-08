@extends('layouts.app')

@section('content')
    <div class="p-5" style="height:100%;background: {{\App\Models\Color::getColors()->bgMain}};color: {{\App\Models\Color::getColors()->textMain}}">
        <form class="row" enctype="multipart/form-data" method="post"action="{{route('create-store-affaire')}}">
            {{csrf_field()}}
            <div class="col-6">
                <div class="form-group row">
                    <label class="form-label col-4 text-end" for="numero">Numero d'affaires</label>
                    <input  type="Number" class="form-control   col" id="numero" aria-describedby="emailHelp" name="numero" placeholder="numero d'affaire">
                    @error('numero')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group  row mt-3">
                    <label class=" form-label col-4 text-end" for="userName"> nome-d'affaire : </label>
                    <input type="text" class="form-control  col" name="Nameaffair" id="affireName" placeholder="entrer your affaire Name ...">
                    @error('Nameaffair')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form- row mt-3">
                    <label  class="form-label col-4 text-end" for="exampleCheck1">TYPE:</label>

                        <select class="form-select col " style="width: 280px" name="typeAffaire">
                            <option value="">choisir un  type </option>
                            <option value="Problèmes administratifs">Problèmes administratifs</option>
                            <option value="Problèmes commerciaux">Problèmes commerciaux</option>
                            <option value="Affaires civiles">Affaires civiles</option>
                            <option value="Délits, procès-verbaux et plaintes"> Délits, procès-verbaux et plaintes</option>
                            <option value="Affaires civiles">Affaires civiles</option>


                        </select>


                </div>
                <div class="form-group row mt-3">
                    <label class="form-label col-4 text-end" for="exampleCheck1">name-client :</label>

                        <input class="form-control col" list="datalistOptions" name="nameclient" placeholder="entrer name..">
                        <datalist id="datalistOptions">
                            @foreach($dataclient as $client)
                            <option value="{{$client->name}}">
                        @endforeach


                        </datalist>
                    @error('nameclient')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group row mt-3">
                    <label class="form-label col-4 text-end" for="avocat">name-avocat :</label>

                    <input class="form-control col" list="avocat" name="avocat" placeholder="entrer name..">
                    <datalist id="avocat">
                        @foreach($dataavocat as $avocat)
                            <option value="{{$avocat->name}}">
                        @endforeach
                    </datalist>
                    @error('avocat')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

            </div>


            <div class="col-6">
                <div class="form-group row mt-3">
                    <label for="prenom"  class="form-label col-4 text-end">Adverssaires:</label>
                    <input type="text" class="form-control col" id="adverssaire"  name="adverssaire" placeholder="entrer adverssaire ..">

                </div>
                <div class="form-group row mt-3">
                    <label for="Telephone" class="form-label col-4  text-end">jugement : </label>
                    <input type="text" class="form-control col" id="jugement" name="jugement" placeholder="jugement ...">

                </div>
                <div class="form-group row mt-3">
                    <label  class="form-label col-4 text-end">Date de jugement :</label>

                        <input type="date"  style="width: 270px; height: 35px" class="form-contro col " id="jugement_date" name="jugement_date"/>

                </div>
                <div class="form-group row mt-3 ">
                    <label class="form-label col-4 text-end" for="photo">document :</label>
                    <input type="file" class="form-control col" multiple id="document" name="document[]">

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
@endsection
@section("user")
    background:{{\App\Models\Color::getColors()->textHeader}};
    color: {{\App\Models\Color::getColors()->bgHeader}};
@endsection

@section("titre","Ajouter Affaire")
