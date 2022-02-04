<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function photo(Request $request){

        
        $path = $request->photo->store('public/file.jpg');
        

        return 'Deu certo';
    }

    public function image(Request $image1, Request $image2){

        
        $image1->image->store('public/images/file1.jpg');
        $image2->image->store('public/images/file2.jpg');
        

        return 'Deu certo';
    }
}
