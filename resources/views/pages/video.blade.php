@extends('layout')
@section('contents')

	<center><h1>Videos</h1></center>

	<div class="fluid-container" style="margin-left:40px;margin-bottom:40px;margin-top: 30px">
		<div class="row">
			@foreach($videos as $video)
			<div class="col-md-4">
				<?php  echo ($video->video_link) ;  ?>
			</div>
			{{-- <div class="col-md-4">
				<?php echo('<iframe width="350" height="300" src="https://www.youtube.com/embed/86EcwWlGk3I" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');  ?>
			</div>
			<div class="col-md-4">
				<?php echo('<iframe width="350" height="300" src="https://www.youtube.com/embed/tdILu5lNxCk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');  ?>
			</div> --}}
			@endforeach
		</div>
	</div>

@endsection