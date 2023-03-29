@extends('layouts.app')

@section('content')
    <div class="p-5" style="height:100%;background: #7A6C21">
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

            <button type="submit" class="btn mt-2 m-auto " style="width:100px;background: black;
            color:gold;border-radius: 30px;border: 1px solid gold">Ajouter</button>
        </form>
    </div>
@endsection
@section("user","text-white border-bottom ")

@section("titre","Ajouter Affaire")
