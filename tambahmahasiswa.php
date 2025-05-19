<?php
session_start();
include "koneksi.php";
ceklogin();

$query = "Select * from prodi";
$data = ambildata($query);

include "template/header.php";
include "template/sidebar.php";
?>

<!--bein::App Main-->
<main class="app-main">
    <!--begin::App Content Header-->
    <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Data mahasiswa</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="index.php">Data Mahasiswa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tambah</li>
                    </ol>
                </div>
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <!--begin::Row-->
            <!--begin::Row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Mahasiswa</h3>
                        </div>
                        <!-- /.card-body -->
                        <form action="tambahanaksimahasiswa.php" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nim" class="form-label">NIM</label>
                                    <input type="text" id="nim" name="nim" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" id="password" name="password" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama" class="form-label">Nama Mahasiswa</label>
                                    <input type="text" id="nama" name="nama" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggallahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" id="tanggallahir" name="tanggallahir" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="telp" class="form-label">Telpon</label>
                                    <input type="text" id="telp" name="telp" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" id="email" name="email" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="id_prodi" class="form-label">prodi</label>
                                    <select name="id_prodi" id="id_prodi" class="form-select">
                                        <?php foreach ($data as $d): ?>
                                            <option value="<?php echo $d['id'] ?>"><?php echo $d['nama'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label" for="foto">Uploud Foto</label>
                                    <input type="file" class="form-control" id="foto" name="foto" />
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="index.php" class="btn btn-warning">Kembali</a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                        <!-- /.card-body -->

                    </div>

                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <!-- /.col -->
                <!-- /.row (main row) --> 
            <!--end::Container-->
        </div>
        <!--end::App Content-->
</main>
<!--end::App Main-->


<?php
include "template/footer.php";
?>