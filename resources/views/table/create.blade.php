@extends('layouts.app_new')

@section('content')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
<link rel="stylesheet" href="/css/wickedpicker.css">
<script type="text/javascript" src="/js/wickedpicker.js"></script>

<script>
$( function() {
  $( "#datepicker" ).datepicker();
} );
</script>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Table</div>
                <div class="panel-body">

                  @if (session('error'))
                    <div class="alert alert-danger">
                      {{ session('error') }}
                    </div>
                  @endif

                  @if (session('status'))
                    <div class="alert alert-success">
                      <strong>{{ session('status') }}</strong>
                    </div>
                  @endif

                    <form class="form-horizontal" role="form" method="POST" action="/table/create" >
                        {{ csrf_field() }}


                        <div class="form-group{{ $errors->has('game') ? ' has-error' : '' }}">
                            <label for="game" class="col-md-4 control-label">Game</label>

                            <div class="col-md-6">
                              <select id="game" name="game">
                                @foreach($games as $game)
                                <option value="{{$game->id}}">{{$game->name}}</option>
                                @endforeach
                              </select>

                                @if ($errors->has('game'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('game') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('place') ? ' has-error' : '' }}">
                            <label for="place" class="col-md-4 control-label">Place</label>

                            <div class="col-md-6">
                                <input id="place" type="text" class="form-control" name="place" value="" required autofocus>

                                @if ($errors->has('place'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('place') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('date') ? ' has-error' : '' }}">

                            <label for="date" class="col-md-4 control-label">Date</label>

                            <div class="col-md-6">
                              <input id="datepicker" type="text" class="form-control" name="date" value="" required >

                                @if ($errors->has('date'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('time') ? ' has-error' : '' }}">
                            <label for="time" class="col-md-4 control-label">Time</label>

                            <div class="col-md-6">
                                <!-- <input id="timepicker" type="text" class="timepicker form-control" name="time" value="" required> -->
                                <input type="text" id="timepicker" name="timepicker" class="timepicker form-control" required>

                                       <script type="text/javascript">
                                           $('.timepicker').wickedpicker({ twentyFour: true, title:
                                                   'Time'});
                                       </script>


                                @if ($errors->has('time'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('time') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('comment') ? ' has-error' : '' }}">
                        <label for="comment" class="col-md-4 control-label">Comment</label>

                        <div class="col-md-6">
                          <textarea name="comment" id="comment" class="form-control" rows="5" style="resize:none;"></textarea>

                            @if ($errors->has('comment'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('comment') }}</strong>
                                </span>
                            @endif
                        </div>
                      </div>

                    <div class="form-group{{ $errors->has('current_players') ? ' has-error' : '' }}">
                        <label for="current_players" class="col-md-4 control-label">Current Players</label>

                        <div class="col-md-6">
                            <input id="current_players" type="text" class="form-control" name="current_players" value="" required>

                            @if ($errors->has('current_players'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('current_players') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('all_players') ? ' has-error' : '' }}">
                        <label for="all_players" class="col-md-4 control-label">All Players</label>

                        <div class="col-md-6">
                            <input id="all_players" type="text" class="form-control" name="all_players" value="" required>

                            @if ($errors->has('all_players'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('all_players') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>


                    <div class="form-group{{ $errors->has('private') ? ' has-error' : '' }}">
                        <label for="private" class="col-md-4 control-label"></label>

                        <div class="col-md-6">
                          <input type="checkbox" name="private" > <label class="control-label">Private</label><br>

                            @if ($errors->has('private'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('private') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
