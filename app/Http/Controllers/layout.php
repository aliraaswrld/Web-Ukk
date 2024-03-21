<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\support\Facades\auth;

class layout extends Controller
{
    public function index(){
    
        return view('layout.index');
    }

    public function dashboard(){
        
                return view('admin.dashboard', compact('gallerys'));
    }

public function tambahGallery(){
    return view('admin.tambahGallery');
}

    public function tabelGallery(){
        $user = auth::user();
        $gallerys = $user->gallery;
        $gallerys = Gallery::paginate(3);
        return view ('admin.tabelGallery', compact('gallerys'));
    }
}