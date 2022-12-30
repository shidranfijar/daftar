

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tahun Ajaran</th>
            <th scope="col">Nama</th>
            <th scope="col">Tempat Lahir</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Jenis kelamin</th>
            <th scope="col">Nama Bapak</th>
            <th scope="col">Alamat Lengkap</th>
            <th scope="col">Kenapa Ingin Masuk Kesini?</th>
            <th scope="col">opsi</th>
        </tr>
    </thead>
    <tbody>
        <?php
            include "koneksi.php";
            $no=1;
            $query=mysqli_query($connect, "SELECT * FROM tb_pendaftaran");
            while ($result=mysqli_fetch_array($query)) {
                ?>
                    <tr>
                        <td>
                            <?php echo $no++; ?>
                        </td>
                        <td>
                            <?php echo $result['th_ajaran']; ?>
                        </td>
                        <td>
                            <?php echo $result['nm_peserta']; ?>
                        </td>
                        <td>
                            <?php echo $result['tmp_lahir']; ?>
                        </td>
                        <td>
                            <?php echo $result['tgl_lahir']; ?>
                        </td>
                        <td>
                            <?php echo $result['jk']; ?>
                        </td>
                        <td>
                            <?php echo $result['nm_bapak']; ?>
                        </td>
                        <td>
                            <?php echo $result['alamat']; ?>
                        </td>
                        <td>
                            <?php echo $result['knp_masuk']; ?>
                        </td>  
                        <td>
                        <button type="delete" id="tombol-hapus" class="btn btn-primary">hapus</button>
                        </td>
                    </tr>
                <?php
            }
        ?>
    </tbody>
</table>