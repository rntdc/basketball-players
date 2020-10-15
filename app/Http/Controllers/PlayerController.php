<?php

namespace App\Http\Controllers;

use Redirect;
use App\Models\Player;
use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function index() {
        $players = Player::get();
        return view('home', ['players' => $players]);
    }

    public function form() {
        return view('players.form');
    }

    public function add(Request $request) {
        $player = new Player;
        $player = $player->create( $request->all() );
        return Redirect::to('/home');
    }

    public function edit($id) {
        $player = Player::findOrFail($id);
        return view('players.form', ['player' => $player]);
    }

    public function update($id, Request $request) {
        $player = Player::findOrFail($id);
        $player->update( $request->all() );
        return Redirect::to('/home');
    }
    
    public function delete($id) {
        $player = Player::findOrFail($id);
        $player->delete();
        return Redirect::to('/home');
    }
}
