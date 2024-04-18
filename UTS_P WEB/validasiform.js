function validasiForm() {
    // Ambil nilai dari setiap input
    var namaLengkap = document.getElementById('namaLengkap').value;
    var kelas = document.getElementById('kelas').value;
    var asalSekolah = document.getElementById('asalSekolah').value;
    var nomorHpSiswa = document.getElementById('nomorHpSiswa').value;
    var nomorHpOrangtua = document.getElementById('nomorHpOrangtuaWali').value;
    var email = document.getElementById('email').value;

    // memeriksa apakah setiap input tidak kosong
    if (namaLengkap === '' || kelas === '' || asalSekolah === '' || nomorHpSiswa === '' || nomorHpOrangtua === '' || email === '') {
        alert('Harap lengkapi semua kolom dalam formulir.');
        return false; // Mengembalikan false karena formulir tidak valid
    }

    // validasi nomor telepon
    var nomorHpRegex = /^[0-9]+$/;
    if (!nomorHpRegex.test(nomorHpSiswa) || !nomorHpRegex.test(nomorHpOrangtua)) {
        alert('Nomor HP hanya boleh berisi angka.');
        return false; // Mengembalikan false karena formulir tidak valid
    }

    // validasi email (memastikan format email yang valid)
    var emailRegex = /\S+@\S+\.\S+/;
    if (!emailRegex.test(email)) {
        alert('Harap masukkan alamat email yang valid.');
        return false; // Mengembalikan false karena formulir tidak valid
    }

    // Jika semua validasi berhasil, Anda dapat mengembalikan true
    return true; // Mengembalikan true karena formulir valid
}