@extends('admin.dashboard')
@section('content')
    <br>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Username</th>
            <th scope="col">Password</th>
            <th scope="col">Name</th>
            <th scope="col">Role</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $key => $user)
            <tr>
                <th scope="row">{{ ++$key }}</th>
                <td>{{ $user->username }}</td>
                <td>{{ $user->password }}</td>
                <td>{{ $user->name }}</td>
                <td> @if($user->role == \App\Http\Controllers\Role::ADMIN)
                    Admin
                    @else
                    Member
                    @endif
                </td>
{{--                <td>--}}
{{--                    <a href="{{ route('users.delete',['id' => $user->id]) }}">Delete</a>--}}
{{--                    <a href="{{ route('users.showFormChangePassword',['id' => $user->id]) }}">ChangePass</a>--}}
{{--                </td>--}}
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
