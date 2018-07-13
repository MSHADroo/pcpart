<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainboardController extends Controller
{
    public function search(Array $params ,Array $selected ){
        return Cpu::get();
    }
}
