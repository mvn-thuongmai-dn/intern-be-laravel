@extends('layouts.app')

@section('content')
<div class="container">
    <h2>List User</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Birthday</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
          <tr>
            <td>{{$user->id}}</td>
            <td><a href="{{route('users.post', ['user' => $user->id])}}">{{$user->name}}</a></td>
            <td>{{$user->email}}</td>
            <td>{{$user->gender }}</td>
            <td>{{$user->birthday}}</td>
            <td><a type="button" href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn btn-outline-info">Edit</a type="button"></td>
            {{-- <td><a type="button" href="{{ route('users.destroy', ['user' => $user->id]) }}" class="btn btn-outline-danger">Delete</a type="button"></td> --}}
            <td>
                <form action="{{ route('users.destroy', ['user' => $user->id]) }}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection
