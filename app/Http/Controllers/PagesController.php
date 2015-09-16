<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function welcome() {
        return view('welcome');
    }

    public function game() {
        $player = Player::first();

        //$player->questions()->latest()->first();

        return view('game', compact('player'));
    }
}
