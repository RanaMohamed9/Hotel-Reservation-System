@extends('rooms.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Room</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('rooms.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Warning!</strong> Please check input field code<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('rooms.update',$rooms->id) }}" method="POST">
        @csrf
        @method('PUT')

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Room Type:</strong>
                    <input type="text" name="room_type" value="{{ $rooms->room_type }}" class="form-control" placeholder="Room type">
                </div>
                <div class="form-group">
                    <strong>Price:</strong>
                    <input type="text" name="price" value="{{ $rooms->price }}" class="form-control" placeholder="price">
                </div>
                <div class="form-group">
                    <strong>Size:</strong>
                    <input type="text" name="size" value="{{ $rooms->size }}" class="form-control" placeholder="size">
                </div>
                <div class="form-group">
                    <strong>Max Persons:</strong>
                    <input type="text" name="max_persons" value="{{ $rooms->max_persons }}" class="form-control">
                </div>
                <div class="form-group">
                    <strong>View:</strong>
                    <input type="text" name="view" value="{{ $rooms->view }}" class="form-control" >
                </div>
                <div class="form-group">
                    <strong>Bed:</strong>
                    <input type="text" name="bed" value="{{ $rooms->bed}}" class="form-control" >
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
