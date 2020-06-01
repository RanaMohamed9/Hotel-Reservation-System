<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main layout</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
<a  style = "padding-left:280px;color:black;padding-bottom:20px;margin-top:15px;" class="navbar-brand" href="{{ url('/home') }}">
                    {{ ('Deluxe') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

<div class="jumbotron text-center">
  <h1>Booking details</h1>

</div>

<div class="container">
    @yield('content')
</div>
<div class="jumbotron text-center" style="margin-bottom:0">


  

  
</body>
</html>
