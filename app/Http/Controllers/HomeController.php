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
}