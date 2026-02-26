<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        ;
        $lang = request()->input("lang");


        echo "<h1>HE seleccionado un nuevo idioma $lang</h1>";
        //
    }
}
