<?php

namespace App\Http\Controllers;

use App\Models\profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        $profil = profil::all();
        // dd($profil);
        return view('profil', [
            'profil' => $profil,
        ]);
    }
}
