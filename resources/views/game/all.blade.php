@extends('layouts.app_new')

@section('content')

<header class="panel-heading">
    <h2>Popular Games</h2>
</header>
      <div class="row">
<!--
            @foreach($popular as $p)
        				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        					<div class="info-box {{$p->color}}-bg">
        						<div class="count">{{$p->name}}</div>
        						<div class="title">Tables: {{$p->table}}</div>
        					</div>
        				</div>
            @endforeach -->

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
              <a href="/game/1">
        					<div class="info-box green-bg">
        						<div class="count">Belote</div>
        						<div class="title">Tables: 1567</div>
        					</div><!--/.info-box-->
                </a>
        				</div><!--/.col-->

        				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                  <a href="/game/2">
        					<div class="info-box brown-bg">
        						<div class="count">Biriba</div>
        						<div class="title">Tables: 1564</div>
        					</div><!--/.info-box-->
                </a>
        				</div><!--/.col-->

        				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                  <a href="/game/3">
        					<div class="info-box dark-bg">
        						<div class="count">Backgammon</div>
        						<div class="title">Tables: 1243</div>
        					</div><!--/.info-box-->
                </a>
        				</div><!--/.col-->

        				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                  <a href="/game/4">
        					<div class="info-box blue-bg">
        						<div class="count">Chess</div>
        						<div class="title">Tables: 823</div>
        					</div><!--/.info-box-->
                </a>
        				</div><!--/.col-->

        			</div><!--/.row-->
                   <!-- page end-->

               <header class="panel-heading">
                   <h2>All Games</h2>
               </header>

               <div class="row">

                 @foreach($games as $game)
                 <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                   <a href="/game/{{$game->id}}">
                   <div class="info-box {{$game->color}}-bg">
                     <div class="count">{{$game->name}}</div>
                     <div class="title">Tables: {{$game->table}}</div>
                   </div><!--/.info-box-->
                 </a>
                 </div><!--/.col-->
                 @endforeach

               </div>

@endsection
