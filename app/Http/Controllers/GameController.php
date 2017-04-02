<?php

namespace App\Http\Controllers;

use App\Game;
use App\Table;
use Illuminate\Http\Request;
use Auth;

class GameController extends Controller
{


  private $form_rules = [
          'name'  => 'required',
          'description'   => '',
          'category'     => '',
  ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $games = Game::all()->sortBy('name');
      $popular = $games->random(4);

        return view('game.all')->withGames($games)->withPopular($popular);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('game.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      if (Auth::check()){
              $v = \Validator::make($request->all(), $this->form_rules);
      }

      if ($v->fails()) {
              return redirect()->back()->withErrors($v);
      }

      Game::create([
        'name'  => $request['name'],
        'description' => $request['description'],
        'category'  => $request['category']
      ]);

      return redirect()->back()->withStatus("Game was successfully created!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        return view('game.show')->withGame($game);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function edit(Game $game)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Game $game)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function destroy(Game $game)
    {
        //
    }
}
