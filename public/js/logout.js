function logoutConfirmation() {
    Swal.fire({
        title: 'Anda yakin ingin logout?',
        text: 'Anda akan keluar dari sesi saat ini.',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Ya, logout',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "/logout";
        }
    });
}