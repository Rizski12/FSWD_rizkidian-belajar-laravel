<!-- resources/views/products/create.blade.php -->

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
            <h2>Add Product</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('crud.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
            
                 <div class="form-group">
                    <label for="product_name">Product Name:</label>
                    <input type="text" name="product_name" id="product_name" class="form-control" required>
                </div>
            
                <div class="form-group">
                    <label for="product_code">Product Code:</label>
                    <input type="text" name="product_code" id="product_code" class="form-control" required>
                </div>
            
                <div class="form-group">
                    <label for="category_id">Category:</label>
                    <select name="category_id" id="category_id" class="form-control" required>
                        {{-- Populate categories dropdown --}}
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                </div>
            
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="text" name="price" id="price" class="form-control" required>
                </div>
            
                <div class="form-group">
                    <label for="unit">Unit:</label>
                    <input type="text" name="unit" id="unit" class="form-control" required>
                </div>
            
                <div class="form-group">
                    <label for="discount_amount">Discount Amount:</label>
                    <input type="text" name="discount_amount" id="discount_amount" class="form-control" required>
                </div>
            
                <div class="form-group">
                    <label for="stock">Stock:</label>
                    <input type="text" name="stock" id="stock" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="image">Product Image</label>
                    <input type="file" name="image" id="image" class="form-control" required>
                    <img id="previewImage" src="#" alt="Preview" style="display: none; max-width: 150px; margin-top: 10px;" />
                </div>
        
            
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Product</button>
                    <a href="{{ route('crud.index') }}" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
</section>
<!-- /.content -->
@endsection
