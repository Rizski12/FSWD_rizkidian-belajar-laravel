<!DOCTYPE html>
<html>
<head>
    <title>Autentification</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/v4-shims.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/v4-shims.min.css.map">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/rdp.png') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
@media (max-width: 768px) {
  .box-area {
    flex-direction: column; 
    padding: 20px; 
  }

  .left-box {
    width: 100%; 
    border-radius: 0; 
    background: #41a4bf; 
    text-align: center; 
  }

  .featured-image img {
    width: 200px; 
  }
  .right-box {
    width: 100%; 
  }

  .header-text {
    text-align: center;
    margin-bottom: 20px; 
  }

  .btn-outline-info {
    display: block; 
    margin-bottom: 20px; 
  }

  form {
    margin-bottom: 20px; 
  }

  .form-check-label {
    margin-left: 5px; 
  }

  .forgot {
    margin-top: 5px; 
  }

  .btn-lg {
    font-size: 14px; 
  }

  .btn-light {
    display: block; 
    margin-bottom: 20px; 
  }

  .row {
    text-align: center; 
  }
}

</style>
<body class="login">
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/hide-password.js') }}"></script>

    
@if($message = Session::get('failed'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: '{{ $message }}'
        });
    </script>
@endif

@if($message = Session::get('auth-success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Success!',
            text: '{{ $message }}'
        });
    </script>
@endif

</body>
</html>
