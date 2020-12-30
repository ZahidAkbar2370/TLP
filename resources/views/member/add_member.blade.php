@extends('admin_layout')
@section('admin_content')
	
	<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="{{URL::to('/dashboard')}}">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="{{URl::to('/add-member')}}">Add Member</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Member</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="{{URL::to('/save-member')}}" method="post">
						  <fieldset>
							{{csrf_field()}}
							<div class="control-group">
							  <label class="control-label" for="date01">Member Name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="member_name" required>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Member Email</label>
							  <div class="controls">
								<input type="email" class="input-xlarge" name="member_email" required>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Member CNIC</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="member_cnic" required>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Member Contact No</label>
							  <div class="controls">
								<input type="number" class="input-xlarge" name="member_contactno" required>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Member City</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="member_city" required>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Member Address</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="member_address" required>
							  </div>
							</div>
          
							

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Publication Status</label>
							  <div class="controls">
								<input type="checkbox" name="publication_status" value="1" required>
							  </div>
							</div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add Member</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

@endsection