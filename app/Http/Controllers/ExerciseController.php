<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function photo(Request $request){

        
        $path = $request->photo->store('public');
        

        return 'Deu certo';
    }
}
