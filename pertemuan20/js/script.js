$(document).ready(function() {
    // 1. Sembunyikan tombol cari bawaan HTML
    $('#tombol-cari').hide();

    // 2. Event ketika keyword diketik di kolom input
    $('#keyword').on('keyup', function() {
        // Tampilkan loader saat proses pencarian dimulai
        $('.loader').show();

        // Kirim request AJAX ke file mahasiswa.php
        $.get('ajax/mahasiswa.php?keyword=' + $('#keyword').val(), function(data) {
            // Ganti isi elemen #container dengan data baru
            $('#container').html(data);
            
            // Sembunyikan kembali loader setelah data berhasil dimuat
            $('.loader').hide();
        });
    });
});