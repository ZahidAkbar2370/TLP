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
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Update Gallary</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						
		
						@if(!empty($selected_gallary))	
						@foreach($selected_gallary as $select_gallary)
						<form class="form-horizontal" action="{{URL::to('/update-gallary',$select_gallary->gallary_id)}}" method="post">
						  <fieldset>
							{{csrf_field()}}

							<div class="control-group">
							  <label class="control-label" for="date01">Gallary Name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="gallary_name" value="{{$select_gallary->gallary_name}}" required>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Gallary Image</label>
							  <div class="controls">
								<input type="file" class="input-xlarge" name="gallary_image" value="{{$select_gallary->gallary_image}}" required>
							  </div>
							</div>
          
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">gallary Description</label>
							  <div class="controls">
								<textarea class="cleditor" name="gallary_description" value=""  rows="3" required>
									{{$select_gallary->gallary_description}}
								</textarea>
							  </div>
							</div>


							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Update gallary</button>
							</div>
							 </fieldset>
						</form>  
							@endforeach
							@endif
						  

					</div>
				</div><!--/span-->

			</div><!--/row-->

@endsection