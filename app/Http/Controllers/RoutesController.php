<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class RoutesController extends Controller
{
    public function sobre(){
        return Inertia::render('Sobre');
    }
}
