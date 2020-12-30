@extends('layout')
@section('contents')

	<center><h1>Sunnat Pak</h1></center>

	<div class="fluid-container" style="margin-left:40px;margin-bottom:40px;margin-top: 30px">
		<div class="fluid-container" style="margin-left:40px;margin-bottom:40px;margin-top: 30px;margin-right:20px;">
		@foreach($sunnatpaks as $sunnatpak)
		<div class="row" style="border:1px solid">
			
			<div class="col-md-9">
				<p>{{ $sunnatpak->sunnatpak_detail }}</p>
			</div>
			<div class="col-md-3" style="border-left:1px solid">
				<h4>{{$sunnatpak->sunnatpak_title }}
				</h4>
			</div>
			
		</div>
		<br>
		@endforeach
		{{-- <br>
		<div class="row" style="border:1px solid">
			<div class="col-md-9" >
				<strong>detail</strong>
			</div>
			<div class="col-md-3" style="border-left:1px solid">
				<h4>Title</h4>
			</div>
		</div> --}}
	</div>

@endsection