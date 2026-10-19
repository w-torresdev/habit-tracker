<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $name = 'william';
        $habits = ['Ler', 'Programar', 'correr'];
        return view('home', [
            'name' => $name,
            'habits' => $habits,
        ]);
    }
}
