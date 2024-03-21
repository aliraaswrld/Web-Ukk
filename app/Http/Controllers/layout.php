<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\support\Facades\auth;

class layout extends Controller
{
    public function index()
    {
        $gallerys = Gallery::latest()->paginate(8);
        return view('layout.index', compact('gallerys'));
    }

    public function dashboard()
    {
        $gallerys = Gallery::latest()->paginate(8);
        return view('admin.dashboard', compact('gallerys'));
    }

    public function tambahGallery()
    {
        return view('admin.tambahGallery');
    }

    public function tabelGallery()
    {
     
        $gallerys = Gallery::paginate(3);
        return view('admin.tabelGallery', compact('gallerys'));
    }

    public function editgallery()
    {
        return view('admin.editgallery');
    }
}