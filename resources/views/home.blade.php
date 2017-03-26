@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <a href="/game/create" class="btn btn-primary">Create Game (Admin)</a>
                    <a href="/table/create" class="btn btn-primary">Create Table</a>
                </div>
            </div>

            <div class="panel panel-default">
              <!-- Default panel contents -->
              <div class="panel-heading">Games</div>

              <!-- Table -->
              <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Category (ex: Cards)</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($games as $game)
                    <tr>
                      <td>{{$game->name}}</td>
                      <td>{{$game->description}}</td>
                      <td>{{$game->category}}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>

            <div class="panel panel-default">
              <!-- Default panel contents -->
              <div class="panel-heading">Tables</div>

              <!-- Table -->
              <table class="table table-striped">
                  <thead>
                    <tr>
                      <th>Game</th>
                      <th>User</th>
                      <th>Place</th>
                      <th>Date</th>
                      <th>Time</th>
                      <th>Players</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($tables as $table)
                    <tr>
                      <td>{{$table->game->name}}</td>
                      <td>{{$table->user->username}}</td>
                      <td>{{$table->place}}</td>
                      <td>{{$table->date}}</td>
                      <td>{{$table->time}}</td>
                      <td>{{$table->current_players}}/{{$table->all_players}}</td>
                      <td><a href="#" class="btn btn-success">Join</a></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>

        </div>
    </div>
</div>


@endsection
