
@extends('layouts.book')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Display booking details</h2>
            </div>

        </div>
    </div>

   
@if (\Session::has('success'))
        <div class="alert alert-success">
            <h5>{{ \Session::get('success') }}</h5>
        </div>
    @endif


    <table class="table table-bordered">
        <tr>

            
            <th>Name</th>
            <th>Email Address</th>
            <th>Phone number</th>
            <th>Room number</th>
            <th>Room type</th>
            <th>Check-in-date</th>
            <th>Check-out-date</th>
        </tr>
        @foreach ($userbook as $userbooks)
        <tr>

        
            <td>{{ $userbooks->name }}</td>
            <td>{{ $userbooks->email }}</td>
            <td>{{ $userbooks->phonenumber }}</td>
            <td>{{ $userbooks->room_numbers }}</td>
            <td>{{ $userbooks->room_type }}</td>
            <td>{{ $userbooks->check_in_date }}</td>
            <td>{{ $userbooks->check_out_date }}</td>

            <td>
           <a href="/click_delete/{{$userbooks->reserve_id}}" class="btn btn-danger"> Cancel </a>
                  
</td>
            
        </tr>
        @endforeach
    </table>



@endsection
