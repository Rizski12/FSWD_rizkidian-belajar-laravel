@extends('layouts.app')

@section('content')
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/images/logo.jpg') }}" style="border-radius:70%;" class="me-2" alt="Bootstrap" width="35" height="35">
                Rdp<strong>Store</strong>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <form action="{{ route('toko') }}" method="GET" class="carousel-search-form d-flex ms-auto">
                    <input type="text" name="search" style="width: 350px;" class="form-control me-2" placeholder="Cari Produk Anda!">
                    <button type="submit" class="btn btn-outline-light">Cari</button>
                </form>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('toko') }}">Beranda</a>
                    </li>
                </ul>
                <div class="icon mt-2">
                    <h5>
                      <i><a href="" class="btn fas fa-cart-plus ms-2 text-white" title="Keranjang Belanja"></a></i>
                      <i class="btn fas fa-envelope text-white" title="Kotak Masuk" href=""></i>
                      <i class="btn fas fa-bell text-white" title="Notifikasi"></i>
                    </h5>
                  </div>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); logoutConfirmation();" class="btn btn-outline-light">
                    <i class="nav-icon 	fas fa-sign-out-alt"></i>Logout
                </a>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!--Awal carousel-->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="{{ asset('assets/images/slide1.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Hallo Guys!!</h5>
                <p>Welcome to our online shop website.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="{{ asset('assets/images/slide2.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>What do you want to buy </h5>
                <p>Has anyone found the product you are looking for?</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="{{ asset('assets/images/slide3.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Happy shopping</h5>
                <p>Happy shopping have a nice day.</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- Akhir Carousel-->


<div class="container mt-4">
    <h2>Kategori Produk</h2>
    <form action="{{ route('toko') }}" method="GET" class="mb-3">
        <div class="input-group">
            <select name="category" class="form-select" onchange="this.form.submit()">
                <option value="">Semua Kategori</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $selectedCategory == $category->id ? 'selected' : '' }}>
                        {{ $category->category_name }}
                    </option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-primary">Filter</button>
        </div>
    </form>
</div>



<div class="featured-products">
    <div class="container">
        <h2>Fitur Produk</h2>
    </div>
    <div class="produk-container mt-2">
        @foreach($featuredProducts as $product)
                <div class="card card-produk mb-3">
                    <span class="badge-produk">{{ $product->discount_amount }} %</span>
                    <img src="{{ asset('images/products/' . $product->image) }}" class="card-img-top" alt="Gambar Produk">
                    <div class="card-body p-2">
                        <h4 class="card-title mb-0">{{ $product->product_name }}</h4>
                        {{-- <p class="deskripsi">{{ $product->description }}</p> --}}
                        <p class="deskripsi">Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                        <p class="stok">Stok: {{ $product->stock }} {{ $product->unit }}</p>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star text-warning"></i>
                        <i class="fas fa-star-half-alt text-warning"></i><br>
                        <h5 class="harga text-danger mb-1">Rp. {{ number_format($product->price, 0, ',', '.') }}</h5>
                        <div class="d-flex justify-content-between">
                            <button class="order-button me-md-2">Order</button>
                            <button class="cart-button"><i class="fas fa-shopping-cart"></i></button>
                        </div>
                    </div>
                </div>
        @endforeach
</div>
</div>



<!-- Pagination Links -->
<div class="pagination justify-content-center">
    {{ $featuredProducts->onEachSide(1)->links("pagination::bootstrap-4") }}
</div>

    <!--Awal footer-->
    <footer class="bg-dark text-white p-5">
        <div class="row">
        <div class="col-md-3">
            <h5>LAYANAN PELANGGAN</h5>
            <ul>
            <li><a class="link" href="#">Cara Pembelian</a></li>
            <li><a class="link" href="#">Pengiriman</a></li>
            <li><a class="link" href="#">Cara Pengembalian</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <h5>TENTANG KAMI</h5>
            <ul>
            <li><a class="link" href="#">About us</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <h5>MITRA KERJASAMA</h5>
            <ul>
            <li><a href="https://www.gojek.com/id-id/help/login/cara-masuk-ke-akun-gojek/" target="_blank">GOJEK</a></li>
            <li><a href="https://www.grab.com/id/driver/drive/" target="_blank">GRAB</a></li>
            <li><a href="https://www.jne.co.id/id/beranda" target="_blank">JNE</a></li>
            <li><a href="https://www.posindonesia.co.id/id" target="_blank">PT. Pos Indonesia</a></li>
            </ul>
        </div>
        <div class="col-md-3">
            <h5>HUBUNGI KAMI</h5>
            <ul>
            <li><a href="https://wa.me/62895602084841?text=Saya ingin bertanya" target="_blank">0895602084841</a></li>
            <li><a href="mailto:rizkidianpratama176@gmail.com">Kirim Email</a></li>
            </ul>
        </div>
        </div>
    </footer>
    <div class="copyright text-center text-white font-weight-bold bg-secondary p-1">
        <p>Developed by rizkidian Copyright
        <i class="far fa-copyright"></i> 2023
        </p>
    </div>
    <!--Akhir footer-->
 
@endsection