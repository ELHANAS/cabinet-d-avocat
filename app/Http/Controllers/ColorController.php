<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($id)
    {
        $color = Color::getColors() ;
        if($id == 1){
            $color->textHeader = "gold" ;
            $color->bgHeader = "black" ;
            $color->textMain = "white" ;
            $color->bgMain = "#382b08";
            $color->textBtn =  "black";
            $color->bgBtn =  "gold" ;
            $color->imageBody = "backgourndmain.png";
            $color->imageProfil = "istockphoto-1143525474-170667a.jpg" ;
        }elseif ($id == 2){
            $color->textHeader = "white" ;
            $color->bgHeader = "#313131" ;
            $color->textMain = "black" ;
            $color->bgMain = "white";
            $color->textBtn =  "white";
            $color->bgBtn =  "#313131" ;
            $color->imageBody = "113239-popular-light-gray-background-2560x1600.jpg";
            $color->imageProfil = "backgoundGris.jpg" ;
        }elseif ($id == 3){
            $color->textHeader = "white" ;
            $color->bgHeader = "#1b6535" ;
            $color->textMain = "black" ;
            $color->bgMain = "#a8c66c";
            $color->textBtn =  "black";
            $color->bgBtn =  "#e1dd72" ;
            $color->imageBody = "backgroundGrinBody.jpg";
            $color->imageProfil = "istockphoto-1143525474-170667a.jpg" ;
        }
        elseif ($id == 4){
            $color->textHeader = "white" ;
            $color->bgHeader = "black" ;
            $color->textMain = "white" ;
            $color->bgMain = "black";
            $color->textBtn =  "black";
            $color->bgBtn =  "white" ;
            $color->imageBody = "imagesblack.jpg";
            $color->imageProfil = "istockphoto-1143525474-170667a.jpg" ;
        }
        elseif ($id == 5){
            $color->textHeader = "white" ;
            $color->bgHeader = "#e75874" ;
            $color->textMain = "#322514" ;
            $color->bgMain = "pink";
            $color->textBtn =  "#fbcbc9";
            $color->bgBtn =  "#322514" ;
            $color->imageBody = "images.jpg";
            $color->imageProfil = "istockphoto-1143525474-170667a.jpg" ;
        }
        $color->save() ;
        return redirect()->back() ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Color $color)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Color $color)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Color $color)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Color $color)
    {
        //
    }
}
