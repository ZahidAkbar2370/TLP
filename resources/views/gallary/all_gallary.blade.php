@extends('admin_layout')
@section('admin_content')

<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>All Gallary</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>ID</th>
								  <th>Gallary Name</th>
								  <th>Gallary Image</th>
								  <th>Gallary Description</th>
								  <th>Publication Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						 
								@if(!empty($all_gallarys))
								@foreach($all_gallarys as $key=> $gallary)
								 <tbody>
									<tr>
										<td>{{$gallary->gallary_id}}</td>
										<td class="center">{{$gallary->gallary_name}}</td>
										<td class="center"><img src="{{$gallary->gallary_image}}" width="70" height="50"></td>
										<td class="center">{{$gallary->gallary_description}}</td>

										@if(($gallary->publication_status)=="1")
											<td class="center">
											<span class="label label-success">Active</span>
											</td>
										@else
											<td class="center">
											<span class="label label-danger">Unactive</span>
											</td>
										@endif

										<td class="center">
											@if(($gallary->publication_status)=="1")
											<a class="btn btn-danger" href="{{URL::to('/unactive_gallary/'.$gallary->gallary_id)}}">
												<i class="halflings-icon white thumbs-down"></i>  
											</a>
											@else
												<a class="btn btn-success" href="{{URL::to('/active_gallary/'.$gallary->gallary_id)}}">
												<i class="halflings-icon white thumbs-up"></i>  
											</a>
											@endif
											<a class="btn btn-info" href="{{URL::to('/edit-gallary/'.$gallary->gallary_id)}}">
												<i class="halflings-icon white edit"></i>  
											</a>
											<a class="btn btn-danger" href="delete-gallary/{{$gallary->gallary_id}}">
												<i class="halflings-icon white trash"></i> 
											</a>
										</td>
									</tr>
							
						  </tbody>
								@endforeach
								@endif
								
							
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->


@endsection