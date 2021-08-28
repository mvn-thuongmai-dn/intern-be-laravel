@extends('layouts.app')

@section('content')
<div class="container">
    <h2>List Product</h2>
    <a type="button" href="{{ route('products.add') }}" class="btn btn-outline-success" data-mdb-ripple-color="dark">
      Add product
    </a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Description</th>
                <th>Image</th>
                <th>Quantity</th>
            </tr>
        </thead>
        <tbody>
          @foreach ($products as $product)
          <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->descroption}}</td>
            <td>{{$product->image}}</td>
            <td>{{$product->quantity}}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
@endsection
