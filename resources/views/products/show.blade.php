@extends('layouts.app')
  

  
@section('contents')
    <h1 class="mb-0">show Product</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">name</label>
            <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $product->name }}" readonly>
        </div>

        <div class="col mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" name="description" placeholder="Descriptoin" readonly>{{ $product->description }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Price</label>
            <input type="text" name="price" class="form-control" placeholder="Price" value="{{ $product->price }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Image<br></label>
            <div>
            @if($product?->image)
            <img src="/images/{{ $product->image }}" width="300px">
            @endif
            </div>
        </div>
    </div>
    
@endsection


