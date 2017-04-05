@extends('layouts.app_new')

@section('content')
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
<!--main content start-->
<div class="container">
<div class="row">
  <div class="col-lg-12">
    <h3 class="page-header"><i class="fa fa-user-md"></i> Profile</h3>
    <ol class="breadcrumb">
      <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
      <li><i class="fa fa-user-md"></i>Profile</li>
    </ol>
  </div>
</div>
        <div class="row">
          <!-- profile-widget -->
          <div class="col-lg-12">
              <div class="profile-widget profile-widget-info">
                    <div class="panel-body">
                      <div class="col-lg-2 col-sm-2">
                        <h4>{{ $profile->name }}</h4>
                        <div class="follow-ava">
                            <img src="img/profile-widget-avatar.jpg" alt="">
                        </div>
                      </div>
                      <div class="col-lg-4 col-sm-4 follow-info">
                          <p>5/10</p>
          <p><i class="fa fa-twitter">acctweet</i></p>
                          <h6>

                              <span><i class="icon_pin_alt"></i>{{ $profile->country }}</span>
                          </h6>
                      </div>



                    </div>
              </div>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
           <div class="col-lg-12">
              <section class="panel">
                    <header class="panel-heading tab-bg-info">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a data-toggle="tab" href="#recent-activity">
                                    <i class="icon-home"></i>
                                    Review
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#profile">
                                    <i class="icon-user"></i>
                                    Profile
                                </a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#edit-profile">
                                    <i class="icon-envelope"></i>
                                    Edit Profile
                                </a>
                            </li>
                        </ul>
                    </header>
                    <div class="panel-body">
                        <div class="tab-content">
                            <div id="recent-activity" class="tab-pane active">
                                <div class="profile-activity">

                                    <div class="act-time">
                                        <div class="activity-body act-in">
                                            <span class="arrow"></span>
                                            <div class="text">
                                                <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                                                <p class="attribution"><a href="#">Jimy Smith</a> at 5:25am, 30th Octmber 2014</p>
                                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="act-time">
                                        <div class="activity-body act-in">
                                            <span class="arrow"></span>
                                            <div class="text">
                                                <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                                                <p class="attribution"><a href="#">Maria Willyam</a> at 5:25am, 30th Octmber 2014</p>
                                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="act-time">
                                        <div class="activity-body act-in">
                                            <span class="arrow"></span>
                                            <div class="text">
                                                <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                                                <p class="attribution"><a href="#">Sarah saw</a> at 5:25am, 30th Octmber 2014</p>
                                                <p>Knowledge speaks, but wisdom listens.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="act-time">
                                        <div class="activity-body act-in">
                                            <span class="arrow"></span>
                                            <div class="text">
                                                <a href="#" class="activity-img"><img class="avatar" src="img/chat-avatar.jpg" alt=""></a>
                                                <p class="attribution"><a href="#">Layla night</a> at 5:25am, 30th Octmber 2014</p>
                                                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <!-- profile -->
                            <div id="profile" class="tab-pane">
                              <section class="panel">
                                <div class="bio-graph-heading">
                                  {{$profile->about}}
                                </div>
                                <div class="panel-body bio-graph-info">
                                    <h1>Bio Graph</h1>
                                    <div class="row">

                                        <div class="bio-row">
                                            <p><span>Full Name </span>: {{$profile->name}}</p>
                                        </div>
                                        <div class="bio-row">
                                            <p><span>Gender</span>: {{$profile->gender}}</p>
                                        </div>
                                        <div class="bio-row">
                                            <p><span>Birthday</span>: {{$profile->birthday}}</p>
                                        </div>
                                        <div class="bio-row">
                                            <p><span>Country </span>: {{$profile->country}}</p>
                                        </div>

                                        <div class="bio-row">
                                            <p><span>Email </span>: asd@ads.co <i class="fa fa-lock"></i></p>
                                        </div>
                                        <div class="bio-row">
                                            <p><span>Phone </span>: {{$profile->phone}} <i class="fa fa-lock"></i></p>
                                        </div>

                                    </div>
                                </div>
                              </section>
                                <section>
                                    <div class="row">
                                    </div>
                                </section>
                            </div>
                            <!-- edit-profile -->
                            <div id="edit-profile" class="tab-pane">
                              <section class="panel">
                                    <div class="panel-body bio-graph-info">
                                        <h1> Profile Info</h1>




                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">Edit Profile</div>
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

                                                    <form class="form-horizontal" role="form" method="POST" action="/profile/edit" enctype="multipart/form-data">
                                                        {{ csrf_field() }}

                                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                            <label for="name" class="col-md-4 control-label">Name</label>

                                                            <div class="col-md-6">
                                                                <input id="name" type="text" class="form-control" name="name" value="{{ $profile->name }}" autofocus>

                                                                @if ($errors->has('name'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('name') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group{{ $errors->has('picture') ? ' has-error' : '' }}">
                                                            <label for="picture" class="col-md-4 control-label">Picture</label>

                                                            <div class="col-md-6">
                                                                <input id="picture" type="file" name="picture">
                                                                <img src="/img/{{$profile->picture}}">

                                                                @if ($errors->has('picture'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('picture') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                                                            <label for="gender" class="col-md-4 control-label">Gender</label>

                                                            <div class="col-md-6">
                                                              <select id="gender" name="gender">
                                                                <option value="male" selected="{{$profile->gender == 'male' ? 'selected' : ''}}">Male</option>
                                                                <option value="female" selected="{{$profile->gender == 'female' ? 'selected' : ''}}">Female</option>
                                                              </select>

                                                                @if ($errors->has('gender'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('gender') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <script>
                                                        $( function() {
                                                          $( "#datepicker" ).datepicker();
                                                        } );
                                                        </script>

                                                        <div class="form-group{{ $errors->has('birthday') ? ' has-error' : '' }}">

                                                            <label for="birthday" class="col-md-4 control-label">birthday</label>



                                                            <div class="col-md-3">
                                                              <div class="input-group">
                                                                <input id="datepicker" type="text" class="form-control" name="birthday" value="{{ $profile->birthday }}" required aria-describedby="basic-addon2">
                                                                <span class="input-group-addon" id="basic-addon2"><i class="fa fa-calendar" aria-hidden="true"></i></span>
                                                              </div>


                                                                @if ($errors->has('birthday'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('birthday') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group{{ $errors->has('about') ? ' has-error' : '' }}">
                                                            <label for="about" class="col-md-4 control-label">About</label>

                                                            <div class="col-md-6">
                                                              <textarea name="about" id="about" class="form-control" rows="5" style="resize:none;">{{$profile->about}}</textarea>

                                                                @if ($errors->has('about'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('about') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                                                            <label for="country" class="col-md-4 control-label">Country</label>

                                                            <div class="col-md-6">
                                                                <input id="country" type="text" class="form-control" name="country" value="{{ $profile->country }}">

                                                                @if ($errors->has('country'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('country') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                                            <label for="phone" class="col-md-4 control-label">Phone</label>

                                                            <div class="col-md-6">
                                                                <input id="phone" type="text" class="form-control" name="phone" value="{{ $profile->phone }}">

                                                                @if ($errors->has('phone'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('phone') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-md-6 col-md-offset-4">
                                                                <button type="submit" class="btn btn-primary">
                                                                    Save
                                                                </button>
                                                                <button class="btn btn-danger">
                                                                    Cancel
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>








                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
           </div>
        </div>

        <!-- page end-->
</div>






@endsection
