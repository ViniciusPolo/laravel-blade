<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    protected function storeAs(Request $request){
        $request->photo->storeAs('public','file.jpg');

        return 'Deu Certo!';
    }
}
