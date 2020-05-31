@extends('layouts.editlayout')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Password Update</title>
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
				<img style = "margin-bottom:6px;" src="imagess/boat.jpg" alt="form">
			</div>
                    <form method="POST" action="{{ route ('passwordupdate') }}">
                        @csrf
                        
                        @if (session('success'))
                        <div class="alert alert-success" role="alert" style="color:black;margin-top:10px;" >
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger" role="alert" style="color:black;margin-top:10px;" >
                            {{ session('error') }}
                        </div>
                    @endif

               


                        
                        <div class="form-group row">
                        
                       
                            <div class="col-md-20 ">
                            <h2 style="color:black;margin-top:40px;margin-bottom:35px;padding-left:120px;"><b>Update Password</b></h2>
                        

                        <div class="form-group row">
                         
                            <div class="col-md-10 ">
                                <input style="margin-bottom:20px;margin-left:95px;" id="oldpassword" type="password" class="form-control @error('oldpassword') is-invalid @enderror" name="oldpassword" placeholder="Current Password" required autocomplete="new-password">

                                @error('oldpassword')
                                    <span class="invalid-feedback" role="alert" >
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                         
                            <div class="col-md-10">
                                <input style="margin-bottom:20px;margin-left:95px;" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="New Password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert" style="margin-left:100px;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                          
                          <div class="col-md-11 ">
                              <input style="margin-bottom:20px;margin-left:80px;" id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                          </div>
                      </div>
                            

                     
                        <div class="form-group row mb-0">
                            <div class="col-md-10 ">
                                <button style ="margin-top:10px;margin-bottom:15px;margin-left:250px;background-color:#fe892a;font-weight:bold ;font-size:15px; height:35px;width:150px;" type="submit" class="btn btn-primary">
                                    {{ __('Save changes') }}
                                </button>
                            </div>
                        </div>

                        
                    </form>  
                </div>
        </div>
</body>
</html>
@endsection

