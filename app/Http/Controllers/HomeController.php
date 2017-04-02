<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;
use App\User;
use App\Table;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $games = Game::all();
      $tables = Table::all();
      $users = User::all();
        return view('home')->withGames($games)->withTables($tables)->withUsers($users);
    }
}
