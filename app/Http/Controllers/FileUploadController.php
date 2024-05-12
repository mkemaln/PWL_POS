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
        return view('file-upload');
    }
}
