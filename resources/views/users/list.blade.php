@extends('admin.dashboard')
@section('content')
    <br>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Role</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $key => $user)
            <tr>
                <th scope="row">{{ ++$key }}</th>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td> @if($user->role == \App\Http\Controllers\Role::ADMIN)
                        Admin
                    @elseif($user->role == \App\Http\Controllers\Role::MODERATOR)
                        Moderator
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
