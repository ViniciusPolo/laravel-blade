<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function photo($request){

        
        $request->photo->store('public');
        

        return 'Deu certo';
    }
}
