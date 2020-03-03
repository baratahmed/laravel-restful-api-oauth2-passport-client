<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function countryList(){
        return response()->download(public_path('nature.png','User Image'));
    }

    public function countrySave(Request $request){
        $fileName = 'IMG_'.time().'_qwerty.jpg';
        $path = $request->file('photo')->move(public_path('/'),$fileName);
        $photoUrl = url('/'.$fileName);
        return response()->json(['url' => $photoUrl], 200);
    }
}
