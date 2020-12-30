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
					<a href="{{URl::to('/add-khtmynabuwat')}}">Add Khtmy Nabuwat Topic</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Khtmy Nabuwat Topic</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="{{URL::to('/save-khtmynabuwat')}}" method="post">
						  <fieldset>
							{{csrf_field()}}
							<div class="control-group">
							  <label class="control-label" for="date01">khtmynabuwat Title</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="khtmynabuwat_title" required>
							  </div>
							</div>
          
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">khtmynabuwat Detail</label>
							  <div class="controls">
								<textarea class="cleditor" name="khtmynabuwat_detail" rows="3" required></textarea>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">khtmynabuwat Reference</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="khtmynabuwat_reference" required>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">khtmynabuwat Link</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" name="khtmynabuwat_link" required>
							  </div>
							</div>

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Publication Status</label>
							  <div class="controls">
								<input type="checkbox" name="publication_status" value="1" required>
							  </div>
							</div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add khtmynabuwat</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			</div><!--/row-->

@endsection