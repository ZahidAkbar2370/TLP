@extends('layout')
@section('contents')

	<center><h1>Gallary</h1></center>

	<div class="fluid-container" style="margin-left:40px;margin-bottom:40px;margin-top: 30px">
		@if(!empty($gallarys))
		
		<div class="row">
		@foreach($gallarys as $gallary)
			<div class="col-md-4">
				<img src="{{$gallary->gallary_image}}" width="300" height="250" style="margin-bottom: 40px">
			</div>
			<!-- <div class="col-md-4">
				<img src="image.jpg" width="300" height="250">
			</div>
			<div class="col-md-4">
				<img src="image1.jpg" width="300" height="250">
			</div>
			<div class="col-md-4">
				<img src="image2.jpg" width="300" height="250">
			</div> -->
		@endforeach
		</div>
		
		@endif
	</div>

@endsection