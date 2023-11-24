document.getElementById('image').addEventListener('change', function() {
    var reader = new FileReader();

    reader.onload = function(e) {
        var preview = document.getElementById('previewImage');
        var existingImageContainer = document.getElementById('existingImageContainer');
        
        if (existingImageContainer) {
            existingImageContainer.style.display = 'none'; // Menyembunyikan gambar yang sudah ada
        }
        
        preview.src = e.target.result;
        preview.style.display = 'block';
    }

    reader.readAsDataURL(this.files[0]);
});