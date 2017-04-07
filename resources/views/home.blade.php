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
                               <td>Belote</td>
                                <td><span class="profile-ava">
                                  <img src="https://randomuser.me/api/portraits/men/5.jpg" width="35px" height="35px">
                                </span>John Doe</td>
                                <td>2004-07-06 15:25</td>
                                <td>Cyprus, Nicosia, Panepistimiou 1</td>
                                <td>1</td>
                                <td>
                                  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal"><span<i class="fa fa-comments-o" aria-hidden="true"></i></span></button>
                                </td>
                                <td>
                                 <div class="btn-group">
                                     <a class="btn btn-success" href="#"> Join</a>
                                     <a class="btn btn-primary" href="#"> Details</a>
                                 </div>
                                 </td>
                             </tr>
                             <tr>
                               <td>Backgammon</td>
                                <td><span class="profile-ava">
                                  <img src="https://randomuser.me/api/portraits/women/64.jpg" width="35px" height="35px">
                                </span>Angeline Mcclain</td>
                                <td>2004-07-06 15:25</td>
                                <td>Cyprus, Nicosia, Panepistimiou 1</td>
                                <td>1</td>
                                <td>
                                  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal"><span<i class="fa fa-comments-o" aria-hidden="true"></i></span></button>
                                </td>
                                <td>
                                 <div class="btn-group">
                                     <a class="btn btn-success" href="#"> Join</a>
                                     <a class="btn btn-primary" href="#"> Details</a>
                                 </div>
                                 </td>
                             </tr>
                             <tr>
                               <td>Biriba</td>
                                <td><span class="profile-ava">
                                  <img src="https://randomuser.me/api/portraits/men/4.jpg" width="35px" height="35px">
                                </span>Howard Giggs</td>
                                <td>2004-07-06 15:25</td>
                                <td>Cyprus, Nicosia, Panepistimiou 1</td>
                                <td>1</td>
                                <td>
                                  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal"><span<i class="fa fa-comments-o" aria-hidden="true"></i></span></button>
                                </td>
                                <td>
                                 <div class="btn-group">
                                     <a class="btn btn-success" href="#"> Join</a>
                                     <a class="btn btn-primary" href="#"> Details</a>
                                 </div>
                                 </td>
                             </tr>
                             <tr>
                               <td>Chess</td>
                                <td><span class="profile-ava">
                                  <img src="https://randomuser.me/api/portraits/men/54.jpg" width="35px" height="35px">
                                </span>Sotiris Antreou</td>
                                <td>2004-07-06 15:25</td>
                                <td>Cyprus, Nicosia, Panepistimiou 1</td>
                                <td>1</td>
                                <td>
                                  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal"><span<i class="fa fa-comments-o" aria-hidden="true"></i></span></button>
                                </td>
                                <td>
                                 <div class="btn-group">
                                     <a class="btn btn-success" href="#"> Join</a>
                                     <a class="btn btn-primary" href="#"> Details</a>
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

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="row">
                <div class="col-md-12 portlets">
                  <!-- Widget -->
                  <div class="panel panel-default">
    				<div class="panel-heading">
                      <div class="pull-left">Message</div>
                      <div class="widget-icons pull-right">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="clearfix"></div>
                    </div>

                    <div class="panel-body">
                      <!-- Widget content -->
                      <div class="padd sscroll">

                        <ul class="chats">

                          <!-- Chat by us. Use the class "by-me". -->
                          <li class="by-me">
                            <!-- Use the class "pull-left" in avatar -->
                            <div class="avatar pull-left">
                              <img src="img/user.jpg" alt=""/>
                            </div>

                            <div class="chat-content">
                              <!-- In meta area, first include "name" and then "time" -->
                              <div class="chat-meta">John Smith <span class="pull-right">3 hours ago</span></div>
                              Vivamus diam elit diam, consectetur dapibus adipiscing elit.
                              <div class="clearfix"></div>
                            </div>
                          </li>

                          <!-- Chat by other. Use the class "by-other". -->
                          <li class="by-other">
                            <!-- Use the class "pull-right" in avatar -->
                            <div class="avatar pull-right">
                              <img src="img/user22.png" alt=""/>
                            </div>

                            <div class="chat-content">
                              <!-- In the chat meta, first include "time" then "name" -->
                              <div class="chat-meta">3 hours ago <span class="pull-right">Jenifer Smith</span></div>
                              Vivamus diam elit diam, consectetur fconsectetur dapibus adipiscing elit.
                              <div class="clearfix"></div>
                            </div>
                          </li>

                          <li class="by-me">
                            <div class="avatar pull-left">
                              <img src="img/user.jpg" alt=""/>
                            </div>

                            <div class="chat-content">
                              <div class="chat-meta">John Smith <span class="pull-right">4 hours ago</span></div>
                              Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                              <div class="clearfix"></div>
                            </div>
                          </li>

                          <li class="by-other">
                            <!-- Use the class "pull-right" in avatar -->
                            <div class="avatar pull-right">
                              <img src="img/user22.png" alt=""/>
                            </div>

                            <div class="chat-content">
                              <!-- In the chat meta, first include "time" then "name" -->
                              <div class="chat-meta">3 hours ago <span class="pull-right">Jenifer Smith</span></div>
                              Vivamus diam elit diam, consectetur fermentum sed dapibus eget, Vivamus consectetur dapibus adipiscing elit.
                              <div class="clearfix"></div>
                            </div>
                          </li>

                        </ul>

                      </div>
                      <!-- Widget footer -->
                      <div class="widget-foot">

                          <form class="col-md-10">
    						<div class="form-group">
    							<input type="text" class="form-control" placeholder="Type your message here...">
    						</div>
              </form>
              <form class="col-md-2">
                    <button type="submit" class="btn btn-info">Send</button>
                  </form>


                      </div>
                    </div>


                  </div>
                </div>

  </div>
</div>
</div>

@endsection
