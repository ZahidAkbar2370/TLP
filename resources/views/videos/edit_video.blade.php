@extends('admin_layout')
@section('admin_content')
	
	<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="{{URL::to('/dashboard')}}">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Update Video</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						
		
						@if(!empty($selected_video))	
						@foreach($selected_video as $select_video)
						<form class="form-horizontal" action="{{URL::to('/update-video',$select_video->video_id)}}" method="post">
						  <fieldset>
							{{csrf_field()}}

							<div class="control-group">
							  <label class="control-label" for="date01">Video Name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="video_name" value="{{$select_video->video_name}}" required>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Video Link</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="video_link" value="{{$select_video->video_link}}" required>
							  </div>
							</div>
          
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Video Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="video_description" value=""  rows="3" required>
									{{$select_video->video_description}}
								</textarea>
							  </div>
							</div>


							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Update Video</button>
							</div>
							 </fieldset>
						</form>  
							@endforeach
							@endif
						  

					</div>
				</div><!--/span-->

			</div><!--/row-->

@endsection