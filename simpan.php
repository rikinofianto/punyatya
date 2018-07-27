<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'beautyhijab';
$koneksi = new mysqli($host, $user, $pass, $db);

$nama = !empty($_POST['nama']) ? $_POST['nama'] : null;
$email = !empty($_POST['email']) ? $_POST['email'] : null;
$pesan = !empty($_POST['pesan']) ? $_POST['pesan'] : null;

if (!empty($pesan) && !empty($email) && !empty($nama)) :
    $sql = "INSERT INTO `contact`(`id`, `nama`, `email`, `pesan`) VALUES ('', '$nama', '$email', '$pesan')";
    $simpan = $koneksi->query($sql);
    if (!$koneksi->error) :?>
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Berhasil</strong> Data berhsil disimpan
        </div>
    <?php else :?>
        <div class="alert alert-danger alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Gagal</strong> Data gagal disimpan
        </div>
    <?php endif;?>
<?php else :?>
    <div class="alert alert-danger alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Gagal</strong> Form harus lengkap, semua field haru diisi
    </div>
<?php endif;?>
