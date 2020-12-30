@extends('admin_layout')
@section('admin_content')

<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>All Member</h2>
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
								  <th>Member Name</th>
								  <th>Member Email</th>
								  <th>Member CNIC</th>
								  <th>Member Contact No</th>
								  <th>Member City</th>
								  <th>Member Address</th>
								  <th>Publication Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						 
								@if(!empty($all_members))
								@foreach($all_members as $key=> $member)
								 <tbody>
									<tr>
										<td>{{$member->member_id}}</td>
										<td class="center">{{$member->member_name}}</td>
										<td class="center">{{$member->member_email}}</td>
										<td class="center">{{$member->member_cnic}}</td>
										<td class="center">{{$member->member_contactno}}</td>
										<td class="center">{{$member->member_city}}</td>
										<td class="center">{{$member->member_address}}</td>

										@if(($member->publication_status)=="1")
											<td class="center">
											<span class="label label-success">Active</span>
											</td>
										@else
											<td class="center">
											<span class="label label-danger">Unactive</span>
											</td>
										@endif

										<td class="center">
											@if(($member->publication_status)=="1")
											<a class="btn btn-danger" href="{{URL::to('/unactive_member/'.$member->member_id)}}">
												<i class="halflings-icon white thumbs-down"></i>  
											</a>
											@else
												<a class="btn btn-success" href="{{URL::to('/active_member/'.$member->member_id)}}">
												<i class="halflings-icon white thumbs-up"></i>  
											</a>
											@endif
											<a class="btn btn-info" href="{{URL::to('/edit-member/'.$member->member_id)}}">
												<i class="halflings-icon white edit"></i>  
											</a>
											<a class="btn btn-danger" href="delete-member/{{$member->member_id}}">
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