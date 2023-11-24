document.getElementById('image').addEventListener('change', function() {
    var reader = new FileReader();

    reader.onload = function(e) {
        var preview = document.getElementById('previewImage');
        preview.src = e.target.result;
        preview.style.display = 'block';
    }

    reader.readAsDataURL(this.files[0]);
});