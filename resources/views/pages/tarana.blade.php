@extends('layout')
@section('contents')

	<center><h1>Tarana</h1></center>

	<div class="fluid-container" style="margin-left:40px;margin-bottom:40px;margin-top: 30px">
		<div class="row">
			@foreach($taranas as $tarana)
			<div class="col-md-4">
				<?php echo('<iframe width="350" height="300" src="https://www.youtube.com/embed/-NEheHr-BU0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'); ?>
			</div>
			{{-- <div class="col-md-4">
				<?php echo('<iframe width="350" height="300" src="https://www.youtube.com/embed/7zL2_v0mPlw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'); ?>
			</div>
			<div class="col-md-4">
				<?php echo('<iframe width="350" height="300" src="https://www.youtube.com/embed/Np4Rv2ZrnsY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>'); ?>
			</div> --}}
			@endforeach
		</div>
	</div>

@endsection