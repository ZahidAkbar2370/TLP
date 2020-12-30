@extends('layout')
@section('contents')

	<center><h1>Khtmy Nabuwat</h1></center>

	<div class="fluid-container" style="margin-left:40px;margin-bottom:40px;margin-top: 30px;margin-right:20px;">
		@foreach($khtmynabuwats as $khtmynabuwat)
		<div class="row" style="border:1px solid">
			
			<div class="col-md-9">
				<p>{{ $khtmynabuwat->khtmynabuwat_detail }}</p>
			</div>
			<div class="col-md-3" style="border-left:1px solid">
				<h4> {{ $khtmynabuwat->khtmynabuwat_title }}
				</h4>
			</div>
			
		</div>
		<br>
		@endforeach
		{{-- <div class="row" style="border:1px solid">
			<div class="col-md-9" >
				<strong>fklasdjflkdsajfaslkdfjasdklfjsd fasdklfhsdf asdfdas fasd fsd f asd f asd g  dfg d fg
				sdf sdafasdf asd f
			ag dagadfasd f asd f as df asd f a sdf asd </strong>
			</div>
			<div class="col-md-3" style="border-left:1px solid">
				<h4>ختمِ نبوت - تحریر نمبر 711
				</h4>
			</div>
		</div> --}}
	</div>

@endsection