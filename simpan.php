

<?php 

include('koneksi.php');

// $nama       = $_POST['nama'];
// $jurusan    = $_POST['jurusan'];
// $jk         = $_POST['jk'];
$th_ajaran = $_POST['th_ajaran'];
$nm_peserta = $_POST['nm_peserta'];
$tmp_lahir = $_POST['tmp_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$jk = $_POST['jk'];
$nm_bapak = $_POST['nm_bapak'];
$alamat = $_POST['alamat'];
$knp_masuk = $_POST['knp_masuk'];
    
$insert = mysqli_query($connect, "insert into tb_pendaftaran set th_ajaran='$th_ajaran', nm_peserta='$nm_peserta', tmp_lahir='$tmp_lahir', tgl_lahir='$tgl_lahir', jk='$jk', nm_bapak='$nm_bapak', alamat='$alamat', knp_masuk='$knp_masuk'");

?>
