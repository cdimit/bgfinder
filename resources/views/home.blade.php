@extends('layouts.app_new')

@section('content')
<div class="container">
    <div class="row">
      @if(Auth::guest())
          <div class="col-lg-12">
      @else
          <div class="col-lg-12 ">
      @endif
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <a href="/register">
            <div class="info-box green-bg">
              <i class="fa fa-user" aria-hidden="true"></i>
              <div class="count">{{$users->count()}}</div>
              <div class="title">Online Players</div>
            </div><!--/.info-box-->
          </a>
          </div><!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <i class="fa fa-globe" aria-hidden="true"></i>
              <div class="count">{{$tables->where('status', 'open')->count()}}</div>
              <div class="title">Active Tables</div>
            </div><!--/.info-box-->
          </div><!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <a href="/game/all">
            <div class="info-box dark-bg">
              <i class="fa fa-trophy" aria-hidden="true"></i>
              <div class="count">{{$games->count()}}</div>
              <div class="title">Games</div>
            </div><!--/.info-box-->
          </a>
          </div><!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              <i class="fa fa-cubes"></i>
              <div class="count">{{$tables->where('status', 'close')->count()}}</div>
              <div class="title">Completed Tables</div>
            </div><!--/.info-box-->
          </div><!--/.col-->

        </div><!--/.row-->
          </div>

        <div class="row">
                 <div class="col-lg-12">
                     <section class="panel">
                         <header class="panel-heading">
                             Tables
                         </header>

                         <table class="table table-striped table-advance table-hover">
                          <tbody>
                             <tr>
                               <th><i class="icon_profile"></i> Game</th>
                                <th><i class="icon_profile"></i> Name</th>
                                <th><i class="icon_calendar"></i> Date and Time to Play</th>
                                <th><i class="icon_pin_alt"></i> Location</th>
                                <th><i class="fa fa-users" aria-hidden="true"></i> Players Needed</th>
                                <th><i class="fa fa-comments-o" aria-hidden="true"></i></i> Chat</th>
                                <th><i class="icon_cogs"></i> Action</th>
                             </tr>
                             <tr>
                               <td>Biriba</td>
                                <td>Angeline Mcclain</td>
                                <td>2004-07-06 15:25</td>
                                <td>Cyprus, Nicosia, Panepistimiou 1</td>
                                <td>1</td>
                                <td><a class="btn btn-default" href="" title="Bootstrap 3 themes generator">
                                          <span<i class="fa fa-comments-o" aria-hidden="true"></i></span></a> </td>
                                <td>
                                 <div class="btn-group">
                                     <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                     <a class="btn btn-success" href="#"> More</a>
                                 </div>
                                 </td>
                             </tr>
                             <tr>
                               <td>Belote</td>
                                <td>Angeline Mcclain</td>
                                <td>2004-07-06 15:25</td>
                                <td>Cyprus, Nicosia, Panepistimiou 1</td>
                                <td>1</td>
                                <td><a class="btn btn-default" href="" title="Bootstrap 3 themes generator">
                                          <span<i class="fa fa-comments-o" aria-hidden="true"></i></span></a> </td>
                                <td>
                                 <div class="btn-group">
                                     <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                     <a class="btn btn-success" href="#"> More</a>
                                 </div>
                                 </td>
                             </tr>

                             <tr>
                               <td>Backgammon</td>
                                <td>Angeline Mcclain</td>
                                <td>2004-07-06 15:25</td>
                                <td>Cyprus, Nicosia, Panepistimiou 1</td>
                                <td>1</td>
                                <td><a class="btn btn-default" href="" title="Bootstrap 3 themes generator">
                                          <span<i class="fa fa-comments-o" aria-hidden="true"></i></span></a> </td>
                                <td>
                                 <div class="btn-group">
                                     <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                     <a class="btn btn-success" href="#"> More</a>
                                 </div>
                                 </td>
                             </tr>

                             <tr>
                               <td>Biriba</td>
                                <td>Angeline Mcclain</td>
                                <td>2004-07-06 15:25</td>
                                <td>Cyprus, Nicosia, Panepistimiou 1</td>
                                <td>1</td>
                                <td><a class="btn btn-default" href="" title="Bootstrap 3 themes generator">
                                          <span<i class="fa fa-comments-o" aria-hidden="true"></i></span></a> </td>
                                <td>
                                 <div class="btn-group">
                                     <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                     <a class="btn btn-success" href="#"> More</a>
                                 </div>
                                 </td>
                             </tr>

                          </tbody>
                       </table>
                     </section>
                 </div>


        </div>
    </div>
</div>

@endsection
