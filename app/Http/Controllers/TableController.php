<?php

namespace App\Http\Controllers;

use App\Table;
use App\Game;
use Illuminate\Http\Request;
use Auth;

class TableController extends Controller
{
  private $form_rules = [
    // 'date' => 'date|require',
    // 'time' => 'require',
    // 'comment'  => '',
    // 'place' => 'require',
    // 'private'  => '',
    // 'needed_players' => 'require',
    // 'all_players' => 'require',
  ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $games = Game::all();

        return view('table.create')->withGames($games);
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

      if($request['private']){
        $private = true;
      }else{
        $private = false;
      }

      Table::create([
        'user_id' => Auth::user()->id,
        'game_id' => $request['game'],
        'date' => $request['date'],
        'time' => $request['time'],
        'comment'  => $request['comment'],
        'place' => $request['place'],
        'private'  => $private,
        'current_players' => $request['current_players'],
        'all_players' => $request['all_players'],
      ]);

      return redirect()->back()->withStatus("Game was successfully created!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function show(Table $table)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function edit(Table $table)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Table $table)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Table  $table
     * @return \Illuminate\Http\Response
     */
    public function destroy(Table $table)
    {
        //
    }
}
