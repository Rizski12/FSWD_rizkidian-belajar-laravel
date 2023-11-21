<!-- resources/views/products/edit.blade.php -->

@extends('layouts.main')

@section('konten')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>CRUD Products</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">CRUD Products</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

 <!-- Main content -->
 <section class="content">
 <div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Edit Product</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('crud.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
        
                 {{-- Populate fields with existing data --}}
                 <div class="form-group">
                    <label for="product_name">Product Name:</label>
                    <input type="text" name="product_name" id="product_name" class="form-control" value="{{ $product->product_name }}" required>
                </div>
        
                <div class="form-group">
                    <label for="product_code">Product Code:</label>
                    <input type="text" name="product_code" id="product_code" class="form-control" value="{{ $product->product_code }}" required>
                </div>
        
                <div class="form-group">
                    <label for="category_id">Category:</label>
                    <select name="category_id" id="category_id" class="form-control" required>
                        {{-- Populate categories dropdown --}}
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->category_name }}
                            </option>
                        @endforeach
                    </select>
                </div>
        
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="text" name="price" id="price" class="form-control" value="{{ $product->price }}" required>
                </div>
        
                <div class="form-group">
                    <label for="unit">Unit:</label>
                    <input type="text" name="unit" id="unit" class="form-control" value="{{ $product->unit }}" required>
                </div>
        
                <div class="form-group">
                    <label for="discount_amount">Discount Amount:</label>
                    <input type="text" name="discount_amount" id="discount_amount" class="form-control" value="{{ $product->discount_amount }}" required>
                </div>
        
                <div class="form-group">
                    <label for="stock">Stock:</label>
                    <input type="text" name="stock" id="stock" class="form-control" value="{{ $product->stock }}" required>
                </div>
                <div class="form-group">
                    <label for="image">Product Image:</label>
                    <input type="file" name="image" id="image" class="form-control">
                </div>

                @if($product->image)
                    <div class="form-group">
                        <img src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->product_name }}" class="img-fluid" style="max-width: 100px; max-height: 100px;">
                    </div>
                @endif
        
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('crud.index') }}" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
</section>
<!-- /.content -->
@endsection
