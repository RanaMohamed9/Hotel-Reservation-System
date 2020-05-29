@extends('admindisplay.viewlayout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Display Registered Users</h2>
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

            <th>User ID</th>
            <th>Name</th>
            <th>Email Address</th>
            <th>Role</th>
            <th>Phone number</th>
            <th>Address</th>
            <th>CreditCard ID</th>
        </tr>
        @foreach ($user as $users)
        <tr>

            <td>{{ $users->id }}</td>
            <td>{{ $users->name }}</td>
            <td>{{ $users->email }}</td>
            <td>{{ $users->role }}</td>
            <td>{{ $users->phonenumber }}</td>
            <td>{{ $users->address }}</td>
            <td>{{ $users->creditcard_id }}</td>
            
        </tr>
        @endforeach
    </table>



@endsection
