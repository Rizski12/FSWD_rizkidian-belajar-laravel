
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
       <div class="card">
           <div class="card-header">
            <h1>Edit Users</h1>
        </div>
    <div class="card-body">
            <form action="{{ route('users.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name">Nama:</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
                </div>
                <div class="form-group">
                    <label for="phone_number">Nomor Telepon:</label>
                    <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $user->phone_number }}" required>
                </div>
                <div class="form-group">
                    <label for="username">Username:</label>
                    <input type="text" class="form-control" id="username" name="username" value="{{ $user->username }}" required>
                </div>
                <div class="form-group">
                    <label for="password">Password Baru:</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password baru">
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Konfirmasi Password Baru:</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Konfirmasi password baru">
                </div>
                <div class="form-group">
                    <label for="group_id">Grup:</label>
                    <select class="form-control" id="group_id" name="group_id" required>
                        @foreach($userGroups as $key => $value)
                            <option value="{{ $key }}" @if($key == $user->group_id) selected @endif>{{ $value }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="is_active">Aktif:</label>
                    <select class="form-control" id="is_active" name="is_active" required>
                        <option value="1" @if($user->is_active == 1) selected @endif>Ya</option>
                        <option value="0" @if($user->is_active == 0) selected @endif>Tidak</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('users.index') }}" class="btn btn-danger">Batal</a>
            </form>
        </div>
       </div>
    </div>
</section>
<!-- /.content -->
@endsection
