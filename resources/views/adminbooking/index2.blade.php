@extends('adminbooking.viewlayout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Display booking details</h2>
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

            <th>Reserve ID</th>
            <th>Name</th>
            <th>Email Address</th>
            <th>Phone number</th>
            <th>Room number</th>
            <th>Room type</th>
            <th>Check-in-date</th>
            <th>Check-out-date</th>
        </tr>
        @foreach ($reserve as $reserves)
        <tr>

            <td>{{ $reserves->reserve_id }}</td>
            <td>{{ $reserves->name }}</td>
            <td>{{ $reserves->email }}</td>
            <td>{{ $reserves->phonenumber }}</td>
            <td>{{ $reserves->room_numbers }}</td>
            <td>{{ $reserves->room_type }}</td>
            <td>{{ $reserves->check_in_date }}</td>
            <td>{{ $reserves->check_out_date }}</td>
            
        </tr>
        @endforeach
    </table>



@endsection
