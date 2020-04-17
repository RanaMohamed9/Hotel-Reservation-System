@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Update Profile</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="csss/nunito-font.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="csss/style.css"/>
</head> 
<body class="form-v6">
	<div class="page-content">
		<div style = "margin-top:30px;" class="form-v6-content">
			<div  class="form-left" >
				<img style = "margin-bottom:6px;" src="imagess/clouds.jpg" alt="form">
			</div>
                    <form method="POST" action="{{ route ('update') }}">
                       
                       
                     @csrf
             

                
                    @if (session('success'))
                        <div class="alert alert-success" role="alert"style="color:black;margin-top:20px;padding-left:50px;margin-bottom:0px;" >
                            {{ session('success') }}
                        </div>
                    @endif

               


                        
                        <div class="form-group row">
                        
                       
                            <div class="col-md-10 ">
                            <h1 style="color:black;margin-top:50px;margin-bottom:55px;padding-left:160px;"><b>Edit info</b></h1>
                                 
                                <input style="margin-bottom:20px;margin-left:80px;" id="name" value="{{$user['name']}}" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Your Name" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert" style="margin-left:80px;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            
                            <div class="col-md-10 ">
                                <input style="margin-bottom:20px;margin-left:80px;" id="email"value="{{$user['email']}}" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email Address" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert" style="margin-left:80px;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                          
                            <div class="col-md-10 ">
                                <input style="margin-bottom:20px;margin-left:80px;" id="phonenumber" value="{{$user['phonenumber']}}"type="number" class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber"  placeholder="Phone Number" value="{{ old('phonenumber') }}" required autocomplete="phonenumber" autofocus>

                                @error('phonenumber')
                                    <span class="invalid-feedback" role="alert" style="margin-left:80px;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            
                            <div class="col-md-10">
                                <input style="margin-bottom:20px;margin-left:80px;" id="address" value="{{$user['address']}}"type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" placeholder="Address" required autocomplete="address" autofocus>

                                @error('address')
                                    <span class="invalid-feedback" role="alert" style="margin-left:80px;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                         
                            <div class="col-md-10">
                                <input style="margin-bottom:20px;margin-left:80px;" id="creditcard_id" value="{{$user['creditcard_id']}}"type="number" class="form-control @error('creditcard_id') is-invalid @enderror" name="creditcard_id" value="{{ old('creditcard_id') }}" placeholder="Creditcard" required autocomplete="creditcard_id" autofocus>

                                @error('creditcard_id')
                                    <span class="invalid-feedback" role="alert" style="margin-left:80px;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                     
                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button style ="margin-top:10px;margin-bottom:35px;margin-left:300px;background-color:#fe892a;font-weight:bold ;font-size:15px; height:35px;width:120px;" type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>	  
                    </form>  
                </div>
        </div>
</body>
</html>
@endsection

