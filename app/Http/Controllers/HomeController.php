<?php

namespace App\Http\Controllers;

use Redirect;
use App\Models\Player;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $players = Player::get();
        return view('home', ['players' => $players]);
    }

    public function add( Request $request ) {
        $player = new Player;
        $player = $player->create( $request->all() );
        return Redirect::to('/home');
    }
    
}
