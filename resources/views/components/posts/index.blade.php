@extends('layouts.app')

@section('content')
<div class="container">
    <h2>List User Posts</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($posts as $post)
          <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->description}}</td>
          @endforeach
        </tbody>
      </table>
</div>
@endsection
