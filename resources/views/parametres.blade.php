@extends('layouts.app')

@section('content')
    <div >x
        <form>
            <div class="row w-50 d-flex justify-content-start">
                <label class="form-label col-4 text-end p-1 fw-bold">launges  :</label>
                <div class="col-lg-5">
                <select class="form-control">
                    <option>Français</option>
                    <option>عربي</option>
                </select>
                </div>
            </div>

            <div  class="row mt-5 d-flex justify-content-around">
                <div class="bg-dark col-3 p-5 fw-bold" style="color: gold">
                    style A
                </div>
                <div class="bg-white col-3 p-5 fw-bold" style="color: black">
                    style B
                </div>
                <div class="bg-primary col-3 p-5 fw-bold" style="color: white">
                    style C
                </div>
            </div>
        </form>
    </div>
@endsection
@section("titre","parametres")


