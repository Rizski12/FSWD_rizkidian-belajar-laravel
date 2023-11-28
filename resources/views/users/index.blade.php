@extends('layouts.main')

@section('konten')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Daftar Users</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Users</li>
          </ol>
        </div>
      </div>
    </div>
    <!-- /.container-fluid -->
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

    @if (count($users) > 0)
    <div class="card mt-3">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <h2>Users List</h2>
                <a href="{{ route('users.create') }}" class="btn btn-primary mb-2">Tambah User</a>
            </div>
        </div>
    <div class="card-body">
      <table class="table table-bordered text-center" id="example1">
        <thead class="bg-dark">
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Grup</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if($user->group) <!-- Memeriksa apakah pengguna memiliki grup -->
                            {{ $user->group->group_name }} <!-- Menampilkan nama grup jika ada -->
                        @else
                            Belum tergabung ke dalam grup <!-- Pesan jika pengguna tidak memiliki grup -->
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-warning">Edit</a> |
                        <!-- Tombol untuk hapus bisa menggunakan form atau konfirmasi JavaScript -->
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline;">
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

</div>
@else
    <p>No products available.</p>
@endif
</div>
</section>
<!-- /.content -->
@endsection