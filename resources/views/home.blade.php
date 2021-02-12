@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <table class="table table-dark">
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Type</th>
                            <th>Status</th>
                        </tr>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->userType }}</td>
                                <td>{{ $user->userStatus }}</td>
                            </tr>
                        @endforeach
                    </table>

                    <a href="/home/create">
                        <button class="btn btn-primary btn-block">Add New User</button>
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
