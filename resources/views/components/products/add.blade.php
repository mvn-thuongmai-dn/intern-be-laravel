@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Add Product</h2>
    
    <form class="col-6" method="POST">
        {{ csrf_field() }}
        <!-- Name -->
        <div class="form-outline">
            <input type="text" id="form6Example1" class="form-control" name="name" />
            <label class="form-label" for="form6Example1">Name</label>
          </div>

        <!-- Price and Amount -->
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <input type="number" step="0.025" id="form6Example2" class="form-control" name="price" />
                    <label class="form-label" for="form6Example2">Price</label>
                </div>
            </div>
            <div class="col">
              <div class="form-outline">
                  <input type="number" id="form6Example3" class="form-control" name="quantity"/>
                  <label class="form-label" for="form6Example3">Quantity</label>
              </div>
            </div>
        </div>

        <!-- Description input -->
        <div class="form-outline mb-4">
            <textarea class="form-control" id="form4Example3" rows="4" name="description"></textarea>
            <label class="form-label" for="form4Example3">Description</label>
        </div>

        <!-- Image -->
        <div class="form-outline">
            <input type="text" id="form6Example4" class="form-control" name="image"/>
            <label class="form-label" for="form6Example4">Image</label>
          </div>
      
        <!-- Submit button -->
        <button type="submit" class="btn btn-success mb-4 px-4">Add</button>
      </form>
</div>
@endsection
