<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(){
        return view('landing.index');
    }
    public function quienessomos(){
        return view('landing.quienessomos');
    }
    public function servicios(){
        return view('landing.servicios');
    }
    public function agendarcita(){
        return view('landing.agendarcita');
    }
}
