<!DOCTYPE html>
<html>
<head>
    <title>RDP | Sport</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/v4-shims.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/v4-shims.min.css.map">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/rdp.png') }}">


</head>
<style>
    .home {
    width: 100%;
    min-height: 100vh;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(17rem, 1fr));
    align-items: center;
    gap: 1.5rem;
  }


  .footer {
    padding-top: 3rem;
    padding-bottom: 2rem;
    background-color: #263238;
    color: #fff;
    bottom: 0;
    box-shadow: 0px 1px 12px #888888;
}

.footer-bottom {
    margin-top: -5%;
}

.copyright {
    background-color: #1a252f;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    bottom: 0;
}

</style>

<body>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

@if($message = Session::get('success'))
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
