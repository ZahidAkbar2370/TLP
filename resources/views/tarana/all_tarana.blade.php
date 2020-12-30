@extends('admin_layout')
@section('admin_content')

<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>All Tarana</h2>
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
								  <th>Tarana Name</th>
								  <th>Tarana Link</th>
								  <th>Tarana Audio</th>
								  <th>Tarana Description</th>
								  <th>Publication Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						 
								@if(!empty($all_taranas))
								@foreach($all_taranas as $key=> $tarana)
								 <tbody>
									<tr>
										<td>{{$tarana->tarana_id}}</td>
										<td class="center">{{$tarana->tarana_name}}</td>
										<td class="center">{{$tarana->tarana_link}}</td>
										<td class="center">{{$tarana->tarana_audio}}</td>
										<td class="center">{{$tarana->tarana_description}}</td>

										@if(($tarana->publication_status)=="1")
											<td class="center">
											<span class="label label-success">Active</span>
											</td>
										@else
											<td class="center">
											<span class="label label-danger">Unactive</span>
											</td>
										@endif

										<td class="center">
											@if(($tarana->publication_status)=="1")
											<a class="btn btn-danger" href="{{URL::to('/unactive_tarana/'.$tarana->tarana_id)}}">
												<i class="halflings-icon white thumbs-down"></i>  
											</a>
											@else
												<a class="btn btn-success" href="{{URL::to('/active_tarana/'.$tarana->tarana_id)}}">
												<i class="halflings-icon white thumbs-up"></i>  
											</a>
											@endif
											<a class="btn btn-info" href="{{URL::to('/edit-tarana/'.$tarana->tarana_id)}}">
												<i class="halflings-icon white edit"></i>  
											</a>
											<a class="btn btn-danger" href="delete-tarana/{{$tarana->tarana_id}}">
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