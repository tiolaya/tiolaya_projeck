document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');

    form.addEventListener('submit', function (event) {
        event.preventDefault(); // Hindari pengiriman formulir

        // Ambil nilai-nilai input
        const nama = form.querySelector('#nama').value.trim();
        const email = form.querySelector('#email').value.trim();
        const pesan = form.querySelector('#pesan').value.trim();

        // Validasi input
        if (nama === '' || email === '' || pesan === '') {
            alert('Mohon lengkapi semua kolom!');
            return;
        }

        // Kirim data formulir ke backend (di sini digunakan metode alert sebagai contoh)
        alert(`Terima kasih, ${nama}! Pesan Anda telah terkirim:\n\nEmail: ${email}\nPesan: ${pesan}`);

        // Kosongkan input setelah pengiriman berhasil
        form.reset();
    });
});
