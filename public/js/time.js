 // Fungsi untuk mengambil waktu dari server dan menampilkan dalam format yang diinginkan
 function updateServerTime() {
    const serverTimeElement = document.getElementById("server-time-text");
    const options = {
      weekday: "long",
      year: "numeric",
      month: "long",
      day: "numeric",
      hour: "2-digit",
      minute: "2-digit",
      second: "2-digit"
    };

    // Mengambil waktu dari server (misalnya melalui AJAX)
    const serverTime = new Date(); // Anda harus menggantinya dengan cara yang sesuai untuk mengambil waktu dari server

    // Mengonversi waktu ke format yang diinginkan
    const formattedServerTime = serverTime.toLocaleDateString("id-ID", options);

    // Menampilkan waktu dalam elemen teks
    serverTimeElement.textContent = formattedServerTime;
  }

  // Memanggil fungsi updateServerTime setiap detik (1000 ms)
  setInterval(updateServerTime, 1000);

  // Memanggil fungsi untuk menampilkan waktu server saat halaman dimuat
  window.addEventListener("load", updateServerTime);