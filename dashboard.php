<?php
require_once('includes/init.php');

$user_role = get_role();

if ($user_role == 'admin' || $user_role == 'user') {
	$page = "Dashboard";
    	require_once('template/header.php');

?>

    <div class="mb-4">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-home"></i> Dashboard</h1>
        </div>

        <?php
        if ($user_role == 'admin') {
        ?>


            <!-- Content Row 
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                Selamat datang <span class="text-uppercase"><b><?php echo $_SESSION['username']; ?>!</b></span> Anda bisa mengoperasikan sistem ini.
            </div>-->

            <!-- Deskripsi Sistem Pendukung Keputusan Dosen Terfavorit -->
            <div class="alert alert-light" role="alert">
            <h2>Sistem Pendukung Keputusan Dosen Terfavorit</h2>
            <p>
            Metode SAW atau metode penjumlahan terbobot adalah metode dengan konsep dasar mencari penjumlahan terbobot dari rating kinerja pada setiap alternatif pada semua atribut (Fishburn 1967). SAW dapat dianggap sebagai cara yang paling mudah dan intuitif untuk menangani masalah Multiple Criteria Decision-Making MCDM, karena fungsi linear additive dapat mewakili preferensi pembuat keputusan (Decision-Making, DM). Hal tersebut dapat dibenarkan, namun, hanya ketika asumsi preference independence (Keeney & Raiffa 1976) atau preference separability (Gorman 1968) terpenuhi.
            </p>
            <p> 
            Langkah penyelesaian dengan metode Simple Additive Weighting adalah sebagai berikut.
            <br>
                1. Identifikasi dan kumpulkan data alternatif yang akan dievaluasi. Alternatif adalah opsi atau kandidat yang dipertimbangkan dalam keputusan.
            <br>
                2. Tentukan kriteria yang digunakan untuk mengevaluasi alternatif. Setiap kriteria memiliki bobot yang menunjukkan tingkat kepentingannya relatif terhadap kriteria lainnya.
            <br>
                3. Kumpulkan data penilaian untuk setiap alternatif berdasarkan kriteria yang telah ditentukan. Nilai penilaian dapat berupa data kuantitatif atau kualitatif yang dikonversi ke dalam skala numerik.
            <br>
                4. Lakukan normalisasi terhadap data penilaian agar berada dalam skala yang sama. Setelah normalisasi, kalikan nilai normalisasi dengan bobot kriteria dan jumlahkan hasilnya untuk setiap alternatif.
            <br>
                5. Hitung skor akhir untuk setiap alternatif dengan menjumlahkan hasil perkalian nilai normalisasi dan bobot kriteria. Tentukan peringkat alternatif berdasarkan skor akhir dan pilih alternatif terbaik. 
                </p>
        </div>
    
        <!-- 5 Card
            <div class="row">
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="list-alternatif.php" class="text-secondary text-decoration-none">Data Alternatif</a></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-users fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="list-kriteria.php" class="text-secondary text-decoration-none">Data Kriteria</a></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-cube fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-secondary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="list-sub-kriteria.php" class="text-secondary text-decoration-none">Data Sub Kriteria</a></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-cubes fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="list-penilaian.php" class="text-secondary text-decoration-none">Data Penilaian</a></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-edit fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="perhitungan.php" class="text-secondary text-decoration-none">Data Perhitungan</a></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calculator fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="hasil.php" class="text-secondary text-decoration-none">Data Hasil Akhir</a></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-chart-area fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        } elseif ($user_role == 'user') {
        ?>
            Content Row 
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                Selamat datang <span class="text-uppercase"><b><?php echo $_SESSION['username']; ?>!</b></span> Anda bisa mengoperasikan sistem dengan wewenang tertentu melalui pilihan menu di bawah.
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="index.php" class="text-secondary text-decoration-none">Dashboard</a></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-home fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="hasil.php" class="text-secondary text-decoration-none">Data Hasil Akhir</a></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-chart-area fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="list-profile.php" class="text-secondary text-decoration-none">Data Profile</a></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-chart-area fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div> -->
        <?php
        }
        ?>
    </div>

<?php
    require_once('template/footer.php');
} else {
    header('Location: login.php');
}
?>