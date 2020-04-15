@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="csss/nunito-font.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="csss/style.css"/>
</head>

<body class="form-v6">
	<div class="page-content">
		<div style = "width:925px;" class="form-v6-content">
			<div  class="form-left">
				<img style = "margin-bottom:5px;" src="imagess/insta-3.jpg" alt="form">
			</div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
						<div class="col-md-10 ">
                            <h1 style="color:black;margin-top:50px;margin-bottom:55px;padding-left:180px;"   > <b>   Login  </b></h1>
                        </div>
                      
                        <div class="form-group row">
                           
                            <div class="col-md-9">
                                <input style="margin-bottom:20px;margin-left:110px;" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  placeholder="Email Address" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                           
                            <div class="col-md-9  ">
                                <input  style="margin-bottom:20px;margin-left:110px;" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  placeholder="Password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-0 ">
                                <div class="form-check">
                                    <input style=" height:25px;width:15px;margin-bottom:20px;margin-left:110px;" class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
									
                                    <label style="color:black;font-weight:lighter;padding-right:8px;margin-bottom:20px;margin-left:130px;" class="form-check-label" for="remember">
                                        {{ __('Remember me  ') }}
                                    </label>
									
                                @if (Route::has('password.request'))
                                    <a style="padding-left:100px;" class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot?') }}
                                   
								 </a>

                                @endif
								
                                
								
                            </div>
                        </div>
						</div>

                        <div class="form-group row mb-0">
                            <div class="col-md-5 ">
                                <button style ="margin-bottom:20px;margin-left:190px;margin-top:10px;background-color:#fe892a;font-weight:bold ;font-size:15px; height:35px;width:130px;"type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
								
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
