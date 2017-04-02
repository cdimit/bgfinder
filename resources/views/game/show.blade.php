@extends('layouts.app_new')

@section('content')


      <div class="row">


            <div class="col-lg-12">
        					<div class="info-box {{$game->color}}-bg">
        						<div class="count">{{$game->name}} <img src="/img/icons/card.png" /> <a href="#" class="btn main-bg">Add to Favorite</a></div>

        						<div class="title">{{$game->description}}</div>
        					</div><!--/.info-box-->
        				</div><!--/.col-->

        			</div><!--/.row-->
                   <!-- page end-->



                <div class="row">
                  <div>
                   <div class="col-lg-12 ">
                   <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                     <div class="info-box red-bg">
                       <i class="fa fa-heart" aria-hidden="true"></i>
                       <div class="count">34</div>
                       <div class="title">Following</div>
                     </div><!--/.info-box-->
                   </div><!--/.col-->

                   <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                     <div class="info-box brown-bg">
                       <i class="fa fa-globe" aria-hidden="true"></i>
                       <div class="count">{{$game->tables->where('status', 'open')->count()}}</div>
                       <div class="title">Active Tables</div>
                     </div><!--/.info-box-->
                   </div><!--/.col-->

                   <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                     <div class="info-box dark-bg">
                       <i class="fa fa-user" aria-hidden="true"></i>
                       <div class="count">{{$game->tables->where('status', 'open')->sum('needed_players')}}</div>
                       <div class="title">Needed Players</div>
                     </div><!--/.info-box-->
                   </div><!--/.col-->

                   <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                     <div class="info-box blue-bg">
                       <i class="fa fa-cubes"></i>
                       <div class="count">{{$game->tables->where('status', 'close')->count()}}</div>
                       <div class="title">Completed Tables</div>
                     </div><!--/.info-box-->
                   </div><!--/.col-->

                 </div><!--/.row-->
                   </div>
                 </div>




                   <div class="row">
              <div class="col-lg-12">
                  <section class="panel">
                      <header class="panel-heading">
                          <h3>{{$game->name}} Tables</h3>
                      </header>

                      <table class="table table-striped table-advance table-hover">
                       <tbody>
                          <tr>
                             <th><i class="icon_profile"></i> Name</th>
                             <th><i class="icon_calendar"></i> Date and Time to Play</th>
                             <th><i class="icon_pin_alt"></i> Location</th>
                             <th><i class="fa fa-users" aria-hidden="true"></i> Players Needed</th>
                             <th><i class="fa fa-comments-o" aria-hidden="true"></i></i> Chat</th>
                             <th><i class="icon_cogs"></i> Action</th>
                          </tr>
                          @foreach($game->tables->where('status', 'open') as $table)
                          <tr>
                             <td>
                               <span class="profile-ava">
                                 <img src="https://randomuser.me/api/portraits/men/{{$table->user->id}}.jpg" width="35px" height="35px">
                               </span>
                               {{$table->user->profile->name}}
                             </td>
                             <td>{{$table->date}} {{$table->time}}</td>
                             <td>{{$table->place}}</td>
                             <td>{{$table->needed_players}}</td>
                             <td><a class="btn btn-default" href="">
                                       <span<i class="fa fa-comments-o" aria-hidden="true"></i></span></a> </td>
                             <td>
                              <div class="btn-group">
                                  <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                  <a class="btn btn-success" href="#"> More</a>
                              </div>
                              </td>
                          </tr>
                      @endforeach

                       </tbody>
                    </table>
                  </section>
              </div>
          </div>

@endsection
