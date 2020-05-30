@extends('layouts.app')
@section('content')


<!DOCTYPE html>
<html lang="en">


<head>
<title>Deluxe Booking</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	
	
	      

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="cssb/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="cssb/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section" style ="margin-top:-40px; margin-bottom:-20px">
		<div class="section-center">
			<div class="container">
				<div class="row">
				

					<div class="col-md-5">
					
						<div class="booking-cta">
							<h1>Make your reservation</h1>
						</div>
					</div>
					<div class="col-md-6 col-md-offset-1">
						<div class="booking-form">
							<form action="/reserve" method="POST">
							@csrf
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input name="name" class="form-control" type="text" value="{{Auth()->user()->name}}" style="color:grey" >
											<span class="form-label">Name</span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input name="email" class="form-control" type="email" value="{{Auth()->user()->email}}" style="color:grey">
											<span class="form-label">Email</span>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input name="phonenumber" class="form-control" type="tel" value="{{Auth()->user()->phonenumber}}"  style="color:grey">
											<span class="form-label">Phone</span>
										</div>
									</div>
									<div class="col-md-2 col-sm-6">
										<div class="form-group" >
											<span class="form-label">Rooms</span>
											<select name='room_numbers' class="form-control"  style="color:grey">
												<option>1</option>
												<option>2</option>
												<option>3</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									<div class="col-md-4 col-sm-6">
										<div class="form-group">
											<span class="form-label">Room_Type</span>
											<select name='room_type' class="form-control" style="color:grey"> 
											@foreach($rooms as $room)
												<option>{{ $room->room_type }}</option>
												@endforeach
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
								</div>
								
									<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<input name="check_in_date" class="form-control" type="date" required  style="color:grey">
											<span class="form-label" style="margin-top:-20px;color:black">Check In</span>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<input name ="check_out_date" class="form-control" type="date" required  style="color:grey">
											<span class="form-label"style="margin-top:-20px;color:black">Check Out</span>
										</div>
									</div>
								</div>
								<div class="form-btn">
									<button class="submit-btn">Book Now</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="jsb/jquery.min.js"></script>
	<script>
		$('.form-control').each(function () {
			floatedLabel($(this));
		});

		$('.form-control').on('input', function () {
			floatedLabel($(this));
		});

		function floatedLabel(input) {
			var $field = input.closest('.form-group');
			if (input.val()) {
				$field.addClass('input-not-empty');
			} else {
				$field.removeClass('input-not-empty');
			}
		}
	</script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
@endsection
