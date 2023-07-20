<?php
    include 'koneksi.php';

    $query = "SELECT * FROM perkuliahan";
    $sql = mysqli_query($conn, $query);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Dashboard</title>
</head>
<body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php">STMIK LOMBOK</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        </nav>
        
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Akademik
                            </a>
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link collapsed" href="mahasiswa.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Mahasiswa
                            </a>
                            <a class="nav-link collapsed" href="matakuliah.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Matakuliah
                            </a>
                            <a class="nav-link" href="perkuliahan.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Perkuliahan
                            </a>
                            <a class="nav-link" href="dosen.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Dosen
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                    <div class="container">
                        <h1 class="mt-4">Data Perkuliahan</h1>
                        <a href="form_inputPk.php" type="button" class="btn btn-primary btn-sm">Tambah Data</a>
                        <div class="table-responsive">
                            <table class="table align-middle table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Nim</th>
                                        <th>Kode Matakuliah</th>
                                        <th>Nidn</th>
                                        <th>Nilai</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    while($result = mysqli_fetch_assoc($sql)){
                                ?>
                                    <tr>
                                        <td><center>
                                            <?php echo $result['nim']; ?>
                                        </center></td>
                                        <td>
                                            <?php echo $result['kode_matakuliah']; ?>
                                        </td>
                                        <td>
                                            <?php echo $result['nidn']; ?>
                                        </td>
                                        <td>
                                            <?php echo $result['nilai']; ?>
                                        </td>
                                        <td>
                                            <a href="form_editPk.php?ubah=<?php echo $result['nim']; ?>" type="button" class="btn btn-success btn-sm">Edit</a>
                                            <a href="hapusPk.php?hapus=<?php echo $result['nim']; ?>" type="button" class="btn btn-danger btn-sm" onClick="return confirm('Apakah anda yakin ingin menghapus??')">Hapus</a>
                                        </td>
                                    </tr>
                                <?php
                                    }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
            </div>
</body>
</html>