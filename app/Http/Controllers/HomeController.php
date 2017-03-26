<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\Table;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $games = Game::all();
      $tables = Table::all();
        return view('home')->withGames($games)->withTables($tables);
    }
}
