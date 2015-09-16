<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function game() {
        return view('index');
    }
}
