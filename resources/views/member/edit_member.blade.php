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
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Update Category</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						
		
						@if(!empty($selected_member))	
						@foreach($selected_member as $select_member)
						<form class="form-horizontal" action="{{URL::to('/update-member',$select_member->member_id)}}" method="post">
						   <fieldset>
							{{csrf_field()}}
							<div class="control-group">
							  <label class="control-label" for="date01">Member Name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="member_name" value="{{$select_member->member_name}}" required>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Member Email</label>
							  <div class="controls">
								<input type="email" class="input-xlarge" name="member_email" value="{{$select_member->member_email}}" required>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Member CNIC</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="member_cnic" value="{{$select_member->member_cnic}}" required>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Member Contact No</label>
							  <div class="controls">
								<input type="number" class="input-xlarge" name="member_contactno" value="{{$select_member->member_contactno}}" required>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Member City</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="member_city" value="{{$select_member->member_city}}" required>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Member Address</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="member_address" value="{{$select_member->member_address}}" required>
							  </div>
							</div>
          
							
							</div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Update Member</button>
							</div>
						  </fieldset>
						</form>  
							@endforeach
							@endif
						  

					</div>
				</div><!--/span-->

			</div><!--/row-->

@endsection