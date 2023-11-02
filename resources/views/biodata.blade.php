@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-md">
      <a class="navbar-brand text-white" href="#">Tugas Laravel Biodata Diri</a>
    </div>
  </nav>

<div class="container-card">
    <div class="card card-bio mt-2 mb-2">
        <div class="card-header">
            <h1 class="text-center">Biodata Diri</h1>
        </div>
        <div class="card-body">
        <div class="row p-3">
            <div class="col-md-4 mt-1 mb-1">
                <div class="card p-1">
                    <img src="{{ asset('assets/images/rizki.jpg') }}" class="img-fluid" alt="Your Photo">
                </div>
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
                    <p class="card-text">Deskripsi Diri:</p>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis commodi dolore repudiandae enim qui. Commodi et est excepturi facilis quae dolore nobis illo, quaerat nulla incidunt sit quis error officia.</p>
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

@endsection
