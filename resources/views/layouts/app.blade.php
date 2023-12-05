<!DOCTYPE html>
<html>
<head>
    <title>Rizkidian | Store</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/v4-shims.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/v4-shims.min.css.map">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/rdp.png') }}">
</head>

<style>
   @keyframes animasi2{
    form {background: red;}
    to {background: #007bff;}
}

body {
    font-family: 'Times New Roman', Times, serif;
}

.produk-container {
    width: 100%;
    padding: 0;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}


.card-produk {
    width: 270px;
    margin: 2vh;
    padding: 3px;
    box-shadow: 1px 1px 5px rgb(30, 32, 32);
    border-radius: 12px;
}

.card-produk:hover {
    box-shadow: 3px 3px 10px rgb(35, 35, 36);
    transition: 0.3s;
}

.badge-produk{
    position: absolute;
    left: 6px;
    top: 5px;
    text-transform: uppercase;
    font-size: 13px;
    font-weight: 700;
    background: red;
    color: #fff;
    padding: 3px 20px;
    border-radius: 8px 0 8px 0;
    animation-name: animasi2;
    animation-duration: 1s;
    animation-iteration-count: infinite;
    animation-direction: alternate;
 }

.card-produk img {
    max-width: 100%;
    padding: 2px 2px 0 2px;
    height: 40vh;
    border-bottom: #cbc9c9 solid;
    border-radius: 12px;
}

.card-title {
    font-family: 'Times New Roman', Times, serif;
    font-weight: bold;
    font-size: 20px;
    margin-top: 0;
    color: black;
 }

.deskripsi {
    font-family: 'Times New Roman', Times, serif;
    margin-bottom: 0;
    margin-top: 5px;
}

.kategori {
    font-family: 'Times New Roman', Times, serif;
    margin-bottom: 0;
}

.harga {
    font-family: 'Times New Roman', Times, serif;
    text-align: end;
    font-weight: 600;
    margin-bottom: 0;
}

.stok {
    font-family: 'Times New Roman', Times, serif;
    margin-bottom: 0;
    font-weight: 700;
}

.order-button {
    background-color: black;
    color: white;
    border: none;
    border-radius: 2px;
    padding: 8px 75px;
    text-align: center;
    display: inline-block;
    font-size: 16px;
    margin-right: 3px;
    cursor: pointer;
}

.cart-button {
    background-color: rgb(115, 142, 186);
    color: white;
    border: none;
    border-radius: 2px;
    padding: 8px 15px;
    text-align: center;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
}

</style>
<body>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/logout.js') }}"></script>

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
