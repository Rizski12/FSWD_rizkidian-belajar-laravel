<!-- resources/views/products/index.blade.php -->

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
    @if(session('success'))
        <div id="success-alert" class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i> Success!</h5>
            {{ session('success') }}
        </div>

        <script>
            setTimeout(function(){
                $('#success-alert').fadeOut('slow');
            }, 3000);
        </script>
    @endif

    @if(session('error'))
        <div id="danger-alert" class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h5><i class="icon fas fa-check"></i> Failled!</h5>
            {{ session('error') }}
        </div>

        <script>
            setTimeout(function(){
                $('#danger-alert').fadeOut('slow');
            }, 3000);
        </script>
    @endif

    @if (count($products) > 0)
    <div class="card mt-3">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h2>Product List</h2>
                <a href="{{ route('crud.create') }}" class="btn btn-primary mb-2">Add Product</a>
            </div>
        </div>
        <div class="card-body">
          <table class="table table-bordered text-center">
            <thead class="bg-secondary">
                <tr>
                    <th>Product Code</th>
                    <th>Image</th>
                    <th>Name Product</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Unit</th>
                    <th>Discount</th>
                    <th>Stock</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->product_code }}</td>
                        <td>
                            <img src="{{ asset('images/products/' . $product->image) }}" alt="{{ $product->product_name }} Image" style="max-width: 100px; max-height: 100px;">
                        </td>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->category->category_name }}</td>
                        <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                        <td>{{ $product->unit }}</td>
                        <td>{{ $product->discount_amount }}%</td>
                        <td>{{ $product->stock }}</td>
                        
                        <td>
                            <a href="{{ route('crud.edit', $product->id) }}" class="btn btn-sm btn-warning"><i class='fas fa-edit'></i>Edit</a> |
                            <form action="{{ route('crud.destroy', $product->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"><i class='fas fa-trash-alt'></i>Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer">
        <div class="d-flex justify-content-between">
            <p>Showing {{ $products->firstItem() }} to {{ $products->lastItem() }} of {{ $products->total() }} products.</p>
            {{ $products->render("pagination::bootstrap-4") }}
        </div>
    </div>
</div>
    @else
        <p>No products available.</p>
    @endif
</div>
</section>
<!-- /.content -->
@endsection
