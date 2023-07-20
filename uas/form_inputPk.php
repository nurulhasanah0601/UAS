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
            <a class="navbar-brand ps-3" href="index.html">STMIK LOMBOK</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        </nav>
        
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="index.html">
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
                        <h3 class="mt-4">Input Perkuliahan
                        </h3>
                            <table class="table align-middle table-bordered table-hover">
                                <thead>
                            <table>
                                <tr>
                                        <td>Nim</td>
                                        <td>
                                            <input type="text" name="nim">
                                        </td>
                                </tr>
                                <tr>
                                        <td>kode_matakuliah</td>
                                        <td>
                                            <input type="text" name="kode_matakuliah">
                                        </td>
                                </tr>
                                <tr>
                                        <td>NIDN</td>
                                        <td>
                                            <input type="text" name="nidn">
                                        </td>
                                </tr>
                                        <td>Nilai</td>
                                        <td>
                                            <input type="text" name="nilai">
                                        </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type="submit" value="simpan">
                                    <input type="submit" value="batal"></td>
                                </tr>
                            </table>
                                </thead>
                            </table>
                    </div>
                    </div>
                    </div>
        </div>
</body>
</html>