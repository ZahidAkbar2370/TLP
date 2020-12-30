@extends('layout')
@section('contents')

	<center><h1>Contact Us</h1></center>
<form action="{{URL::to('/send-message')}}" method="post">
	@csrf()
	<div class="fluid-container" style="margin-left:40px;margin-bottom:40px;margin-top: 30px">
		<div class="row">
			<div class="col-md-2">
				
			</div>
			<div class="col-md-5">
				@if(!empty($message))
					<p>{{$message}}</p>
				@endif
				<input type="text" name="sender_name" placeholder="Enter Name" style="width: 300px;height:35px;border-radius:10px;border:1px solid"><br><br>
				<input type="email" name="sender_email" placeholder="Enter Email" style="width: 300px;height:35px;border-radius:10px;border:1px solid">
				<br>
				<input type="textarea" placeholder="Enter Your Message" name="sender_message" rows="4" cols="50" style="width: 300px;height:130px;border-radius:10px;border:1px solid;margin-top: 20px">
				<br><br>
				<button type="submit" style="width: 130px;height:35px;border-radius:10px;border:1px solid;color: white;background-color:green">Send Message</button>
			</div>
			<div class="col-md-5">
				<strong>Moile No:</strong><span>03000000001</span>
				<br>
				<strong>Email:</strong><span>tlp@gmail.com</span>
				<br>
				<strong>Address:</strong><span>Lahore</span>

			</div>
		</div>
	</div>
	</form>

@endsection