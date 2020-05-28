@extends('rooms.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Check all Rooms</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('rooms.create') }}"> Create New Room</a>



            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>

            <th>Room ID</th>
            <th>Room Type</th>
            <th>Price</th>
            <th>Size</th>
            <th>Max Persons</th>
            <th>View</th>
            <th>Bed</th>
            <th >Action</th>
        </tr>
        @foreach ($rooms as $room)
        <tr>

            <td>{{ $room->id }}</td>
            <td>{{ $room->room_type }}</td>
            <td>{{ $room->price }}</td>
            <td>{{ $room->size }}</td>
            <td>{{ $room->max_persons }}</td>
            <td>{{ $room->view }}</td>
            <td>{{ $room->bed }}</td>
            <td>


                <form action="{{ route('rooms.destroy',$room) }}" method="POST">





                    <a class="btn btn-primary" href="{{ route('rooms.edit',$room->id) }}">Edit Room</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete Room</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>



@endsection
