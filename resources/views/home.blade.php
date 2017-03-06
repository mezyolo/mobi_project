@extends('templates.home')

@section('content')
	<div class="page-header"><h1>All Rooms</h1></div>
	@foreach ($rooms as $room)
    <div class="card">
  		<img src="img_avatar.png" alt="Avatar" style="width:290px; height: 200px; background: #111; display: block; margin: 0 auto;">
  		<div class="container">
    		<h4><b>{{ $room->name }}</b></h4> 
    		<p>0/{{ $room->limit_users }}</p> 
  		</div>
	</div>
	@endforeach
	<div class="page-header"><h1>Most Popular</h1></div>
<!--     <div class="card">
  		<img src="img_avatar.png" alt="Avatar" style="width:200px; height: 150px; background: #111;">
  		<div class="container">
    		<h4><b>{{ $rooms[1]->name }}</b></h4> 
    		<p>Architect & Engineer</p> 
  		</div> -->
	</div>
@endsection