@extends('layouts.main')

@section('konten')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Products</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Products</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  
  <!-- Main content -->
 <section class="content">
 <div class="container-fluid">
    <div class="row">
        @foreach($produk as $product)
            <div class="col-md-3">
                <div class="card-product m" style="width: 17rem;">
                    <span class="badge-produk">{{ $product['badge'] }}</span>
                    <img src="{{ asset($product['gambar']) }}" class="card-img-top" alt="{{ $product['nama'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product['nama'] }}</h5><br>
                        <p class="deskripsi">{{ $product['deskripsi'] }}</p>
                        <p class="toko"><strong>Store: {{ $product['toko'] }}</strong></p>
                        <h5 class="harga">Price: ${{ $product['harga'] }}</h5>
                        <div class="flex">
                            <button class="order-button me-md-2">Order</button>
                            <button class="cart-button"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</section>
<!-- /.content -->
@endsection