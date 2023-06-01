<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloocontroller extends Controller
{
    public function halo(string $name): string
    {
        return $name;
    }
}
