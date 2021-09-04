@extends('layouts.app')

@section('content')
  <div class="container">
    <h2>Edit User</h2>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    
    <form class="col-6" action="{{route('users.update', ['user' => $user->id])}}" method="POST">
      @csrf

      @method('PUT')
      <!-- Name -->
      <div class="form-outline">
        <input type="text" id="name" class="form-control" name="name" value="{{$user->name}}" />
        <label class="form-label" for="name">Name</label>
      </div>

      <!-- Description input -->
      <div class="form-outline mb-4">
        <input type="email" class="form-control" id="email" name="email" value="{{$user->email}}"></input>
        <label class="form-label" for="email">Email</label>
      </div>

      <!-- Price and Amount -->
      <div class="row mb-4">
        <div class="col">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="1" {{$user->gender === 'Male' ? 'checked' : ''}}>
                <label class="form-check-label" for="exampleRadios1">
                    Male
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="2" {{$user->gender === 'Female' ? 'checked' : ''}}>
                <label class="form-check-label" for="exampleRadios2">
                    Female
                </label>
              </div>
        </div>
        <div class="col">
          <div class="form-outline">
              <input type="date" id="birthday" class="form-control" name="birthday" value="{{ $birthday }}"/>
              <label class="form-label" for="birthday">Birthday</label>
          </div>
        </div>
      </div>
      
      <!-- Submit button -->
      <button type="submit" class="btn btn-success mb-4 px-4">Update</button>
    </form>
  </div>
@endsection
