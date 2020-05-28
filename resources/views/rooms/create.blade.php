@extends('rooms.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New Room</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('rooms.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Warning!</strong> Please check your input code<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('rooms.store') }}" method="POST">
    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Room Type:</strong>
                <input type="text" name="room_type" class="form-control" placeholder="single,double..etc">
            </div>
            <div class="form-group">
                <strong>Price:</strong>
                <input type="text" name="price" class="form-control" placeholder="100$">
            </div>
            <div class="form-group">
                <strong>Size:</strong>
                <input type="text" name="size" class="form-control" >
            </div>
            <div class="form-group">
                <strong>Max Persons:</strong>
                <input type="text" name="max_persons" class="form-control" placeholder="5,10..etc">
            </div>
            <div class="form-group">
                <strong>View:</strong>
                <input type="text" name="view" class="form-control" >
            </div>
            <div class="form-group">
                <strong>Bed:</strong>
                <input type="text" name="bed" class="form-control" >
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection
