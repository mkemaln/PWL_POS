<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FileUploadController extends Controller
{
    public function fileUpload(){
        return view('file-upload');
    }
    
    public function prosesFileUpload(Request $request){
        $request->validate([
            'berkas' => 'required|file|image|max:500'
        ]);
        echo $request->berkas->getClientOriginalName(). "lolos validasi";
    }
}
