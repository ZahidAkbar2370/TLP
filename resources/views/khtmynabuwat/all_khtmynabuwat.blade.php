@extends('admin_layout')
@section('admin_content')

<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>All Khtmy Nabuwat</h2>
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
								  <th>Khtmy Nabuwat Title</th>
								  <th>Khtmy Nabuwat Detail</th>
								  <th>Khtmy Nabuwat Reference</th>
								  <th>Khtmy Nabuwat Link</th>
								  <th>Publication Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						 
								@if(!empty($all_khtmynabuwats))
								@foreach($all_khtmynabuwats as $key=> $khtmynabuwat)
								 <tbody>
									<tr>
										<td>{{$khtmynabuwat->khtmynabuwat_id}}</td>
										<td class="center">{{$khtmynabuwat->khtmynabuwat_title}}</td>
										<td class="center">{{$khtmynabuwat->khtmynabuwat_detail}}</td>
										<td class="center">{{$khtmynabuwat->khtmynabuwat_reference}}</td>
										<td class="center">{{$khtmynabuwat->khtmynabuwat_link}}</td>

										@if(($khtmynabuwat->publication_status)=="1")
											<td class="center">
											<span class="label label-success">Active</span>
											</td>
										@else
											<td class="center">
											<span class="label label-danger">Unactive</span>
											</td>
										@endif

										<td class="center">
											@if(($khtmynabuwat->publication_status)=="1")
											<a class="btn btn-danger" href="{{URL::to('/unactive_khtmynabuwat/'.$khtmynabuwat->khtmynabuwat_id)}}">
												<i class="halflings-icon white thumbs-down"></i>  
											</a>
											@else
												<a class="btn btn-success" href="{{URL::to('/active_khtmynabuwat/'.$khtmynabuwat->khtmynabuwat_id)}}">
												<i class="halflings-icon white thumbs-up"></i>  
											</a>
											@endif
											<a class="btn btn-info" href="{{URL::to('/edit-khtmynabuwat/'.$khtmynabuwat->khtmynabuwat_id)}}">
												<i class="halflings-icon white edit"></i>  
											</a>
											<a class="btn btn-danger" href="delete-khtmynabuwat/{{$khtmynabuwat->khtmynabuwat_id}}">
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