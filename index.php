<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    
    <body>
        <br>
        <div class="container">
            <h2 class="alert alert-success text-center" style="background-color: #75BFFF; color: white;" >
            Data calon calon Mahasantri
            </h2>
            <div class="row">
                <div class="col-5" style="background-color: #75BFFF;">
                    <div class="card">
                        <div class="card-body">
                            <form id="form-input">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tahun Ajaran</label>
                                    <input type="text" class="form-control" id="th_ajaran" name="th_ajaran" placeholder="" value="2023/2024">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nama Lengkap</label>
                                    <input type="text" class="form-control" id="nm_peserta" name="nm_peserta"
                                        placeholder="">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">tempat lahir</label>
                                    <input type="text" class="form-control" id="tmp_lahir" name="tmp_lahir"
                                        placeholder="">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">tanggal lahir</label>
                                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                                        placeholder="">
                                </div>
    
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Jenis Kelamin</label>
                                    <select name="jk" class="form-control" id="jk">
                                        <option value="laki-laki">Laki-laki</option>
                                        <option value="perempuan">Perempuan</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nama bapak</label>
                                    <input type="text" class="form-control" id="nm_bapak" name="nm_bapak"
                                        placeholder="">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Alamat Lengkap</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat"
                                        placeholder="">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Kenapa Ingin Masuk Kesini?</label>
                                    <input type="text" class="form-control" id="knp_masuk" name="knp_masuk"
                                        placeholder="">
                                </div>
                                
    
                                <button type="submit" id="tombol-simpan" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <div id="tabeldata">
                    
                    </div>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.js"></script>
    
        <script>
            
            $(document).ready(function () {
                update();
            });
            $("#tombol-simpan").click(function () {
                //validasi form
                $('#form-input').validate({
                    rules: {
                        th_ajaran: {
                            required: true
                        },
                        nm_peserta: {
                            required: true
                        },
                        tmp_lahir: {
                            required: true
                        },
                        tgl_lahir: {
                            required: true
                        },
                        jk: {
                            required: true
                        },
                        nm_bapak: {
                            required: true
                        },
                        alamat: {
                            required: true
                        },
                        knp_masuk: {
                            required: true
                        }
                    },
                    //jika validasi sukses maka lakukan
                    submitHandler: function (form) {
                        $.ajax({
                            type: 'POST',
                            url: "simpan.php",
                            data: $('#form-input').serialize(),
                            success: function () {
                                //setelah simpan data, update data terbaru
                                update()
                            }
                        });
                        //kosongkan form nama dan jurusan
                        document.getElementById("th_ajaran").value = "";
                        document.getElementById("nm_peserta").value = "";
                        return false;
                    }
                });
            });
    
            //fungsi tampil data
            function update() {
                $.ajax({
                    url: 'data.php',
                    type: 'get',
                    success: function(data) {
                        $('#tabeldata').html(data);
                    }
                });
            }
            function update() {
    $.ajax({
        url: 'data.php',
        type: 'get',
        success: function(data) {
            $('#tabeldata').html(data);
        }
    });
}
$query = sprintf("DELETE FROM database_psb WHERE tb_pendaftaran='%s'",
            mysql_escape_string($tb_pendaftaran)
        );
    $sql = mysql_query($query);
    $pesan = "";
    if ($sql) {
        $pesan = "Data berhasil dihapus";
    } else {
        $pesan = "Data gagal dihapus ";
        $pesan = mysql_error();
    }
        </script>
    </body>
    
    </html>