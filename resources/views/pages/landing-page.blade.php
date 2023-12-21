@extends('layouts.head-landing')

@section('content')
 <!--awal navbar-->
 <nav class="navbar navbar-expand-lg bg-light bg-gradient fixed-top">
    <div class="container">
      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-shop"
        viewBox="0 0 16 16">
        <path
          d="M2.97 1.35A1 1 0 0 1 3.73 1h8.54a1 1 0 0 1 .76.35l2.609 3.044A1.5 1.5 0 0 1 16 5.37v.255a2.375 2.375 0 0 1-4.25 1.458A2.371 2.371 0 0 1 9.875 8 2.37 2.37 0 0 1 8 7.083 2.37 2.37 0 0 1 6.125 8a2.37 2.37 0 0 1-1.875-.917A2.375 2.375 0 0 1 0 5.625V5.37a1.5 1.5 0 0 1 .361-.976l2.61-3.045zm1.78 4.275a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0 1.375 1.375 0 1 0 2.75 0V5.37a.5.5 0 0 0-.12-.325L12.27 2H3.73L1.12 5.045A.5.5 0 0 0 1 5.37v.255a1.375 1.375 0 0 0 2.75 0 .5.5 0 0 1 1 0zM1.5 8.5A.5.5 0 0 1 2 9v6h1v-5a1 1 0 0 1 1-1h3a1 1 0 0 1 1 1v5h6V9a.5.5 0 0 1 1 0v6h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V9a.5.5 0 0 1 .5-.5zM4 15h3v-5H4v5zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-3zm3 0h-2v3h2v-3z" />
      </svg>
      <a class="navbar-brand fw-bold ms-3" href="#">MY Store</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item active">
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
          <button class="btn btn-outline-warning" type="submit">Search</button>
        </form>
        <div class="icon mt-2">
          <h5>
            <i><a href="" class="btn fas fa-cart-plus ms-2" title="Keranjang Belanja"></a></i>
            <i class="btn fas fa-envelope" title="Kotak Masuk" href=""></i>
            <i class="btn fas fa-bell" title="Notifikasi"></i>
          </h5>
        </div>
        <a href="{{ route('login') }}" class="btn btn-outline-dark my-2 my-sm-0 ml-2">
            <i class="fas fa-user me-1"></i> Sign In
        </a>
      </div>
    </div>
  </nav>
  <!--Akhir navbar-->

<!--Awal Home-->
<section class="home" id="home">
    <div class="home-text p-5">
      <h5>Belanja Sekarang Juga!!!</h5>
      <h1>Kini Belanja Lebih Mudah Dan Cepat</h1>
      <a href="{{ route('login') }}" class="btn btn-warning">Belanja Sekarang</a>
    </div>
    <div class="homeimg">
      <img src="{{ asset('assets/images/ok.png') }}" />
    </div>
  </section>
  <!--Akhir Home-->

  <hr>

  <section class="about" id="about">
    <div class="container-card">
        <div class="card mt-1 mb-3">
            <div class="card-header">
                <h1 class="text-center">About Profile</h1>
            </div>
            <div class="card-body">
            <div class="row p-3">
                <div class="col-md-4 mt-1 mb-1">
                        <img src="{{ asset('assets/images/rizki.jpg') }}" class="img-fluid justify-content-center" width="70%" alt="Your Photo">
                </div>
                <div class="col-md-8">
                        <table class="table table-borderless">
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td class="card-title">RIZKI DIAN PARATAMA</td>
                            </tr>
                            <tr>
                                <td>Umur</td>
                                <td>:</td>
                                <td>20 tahun</td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td>:</td>
                                <td>12 April 2003</td>
                            </tr>
                            <tr>
                                <td>Nomor Telepon</td>
                                <td>:</td>
                                <td>085260813249</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>Jl. Sei Bingai, Kota Binjai Sumatera Utara</td>
                            </tr>
                            <tr>
                                <td>Universitas</td>
                                <td>:</td>
                                <td>Universitas Malikussaleh</td>
                            </tr>
                            
                        </table>
                        <div class="col-md-12">
                            <p class="card-text">Deskripsi Diri:</p>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis commodi dolore repudiandae enim qui. Commodi et est excepturi facilis quae dolore nobis illo, quaerat nulla incidunt sit quis error officia.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card-footer text-center text-primary">
                &copy; {{ date('Y') }} Rizkidianpratama <br>
                <a href="https://www.facebook.com/akun-facebook" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="https://www.twitter.com/akun-twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.linkedin.com/in/akun-linkedin" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="https://www.github.com/akun-github" target="_blank"><i class="fab fa-github"></i></a>
                <a href="https://www.instagram.com/akun-instagram" target="_blank"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
  </section>


  <section>
    <!-- Footer -->
    <footer class="footer text-center">
        <div class="row">
            <div class="col-md-4 mb-5 mb-lg-0">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <i class="fa fa-top fa-map-marker"></i>
                    </li>
                    <li class="list-inline-item">
                        <h4 class="text-uppercase mb-4">Alamat</h4>
                    </li>
                </ul>
                <p class="mb-0">
                    Jl. Sei Bingai Kelurahan T.Seribu
                    <br>Kec. Binjai Selatan, Kota Binjai, Sumatera Utara
                </p>
            </div>
            <div class="col-md-4 mb-5 mb-lg-0">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <i class="fa fa-top fa-rss"></i>
                    </li>
                    <li class="list-inline-item">
                        <h4 class="text-uppercase mb-4">Sosial Media</h4>
                    </li>
                </ul>
                <ul class="list-inline mb-0 p-0">
                    <li class="list-inline-item">
                        <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://www.facebook.com/rizkidianpratama.rizkidianpratama?mibextid=ZbWKwL">
                            <i class="fa fa-fw fa-facebook"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn btn-outline-light btn-social text-center rounded-circle" href="https://instagram.com/rizski_dian?igshid=MTk0NTkyODZkYg==">
                            <i class="fa fa-fw fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <i class="fa fa-top fa-envelope-o"></i>
                    </li>
                    <li class="list-inline-item">
                        <h4 class="text-uppercase mb-4">Kontak</h4>
                    </li>
                </ul>
                <p class="mb-0">
                    085260813249 <br>
                    rizkidianpratama784@gmail.com
                </p>
            </div>
        </div>
    </footer>
    <!-- /footer -->

    <div class="copyright py-4 text-center text-white">
        <small>Copyright &copy; rizkidian 2023</small>
    </div>
  </section>
@endsection