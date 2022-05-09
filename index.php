<?php
include("./sys/connection.php");
include('./sys/bootstrap.php');
?>
<link rel="stylesheet" href="./sys/custom.css">
</head>
<?php
include('./sys/navbar.php');
?>
<div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div> <a href="#" class="nav_logo"> <i class='fa-solid fa-laptop nav_logo-icon'></i> <span class="nav_logo-name">KuroComputer</span> </a>
                <div class="nav_list"> <a href="index.php" class="nav_link active"> <i class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Dashboard</span> </a> <a href="./frontend/profil.php" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span class="nav_name">Profile</span> </a> <a href="./frontend/tambah.php" class="nav_link"> <i class='bx bx-pencil nav_icon'></i> <span class="nav_name">Add Data</span> </a> </div>
        
        </nav>
    </div>

<div class="container mx-4">
<h1 class="text-center">Selamat Datang</h1>
<br>
<div class="row">
    <div class="col-md-auto">
        <div class="text-center">
                <div class="card" style="width: 14rem;">
                    <div class="card-body"> 
                        <?php
                            echo "<h1><i class='fa-solid fa-laptop'></i></h1>";
                            $status = pg_query("select count(*) from laptop");
                            $isi = pg_fetch_object($status);
                            echo "<h1>".$isi->count."</h1>";
                        ?>
                        <h5 class="card-title">Jumlah Laptop</h5>
                    </div>
                </div>
                <div class="card mt-3" style="width: 14rem;">
                    <div class="card-body">
                    <?php
                            echo "<h1><i class='fa-solid fa-laptop-file'></i></h1>";
                            $status2 = pg_query("select COUNT(*) OVER () AS total from laptop group by merek;");
                            $isi2 = pg_fetch_object($status2);
                            echo "<h1>".$isi2->total."</h1>"
                        ?>
                        <h5 class="card-title">Total Merek</h5>
                    </div>
                </div>
        </div>     
    </div>
    <div class="col">
        <div class="row mb-3">
            <div class="col-md-6">
                <form action="" method="GET">
                    <div class="row g-3 align-items-center">
                            <div class="col-auto">
                                <label class="col-form-label">Find Items</label>
                            </div>
                            <div class="col-md-4">
                                <input type="text" name="find" class="form-control">
                            </div>
                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary">Cari</button>
                                <button type="button" class="btn" ><a href="index.php"><i class="fa-solid fa-trash-can"></a></i></button>
                            </div>
                    </div>
                </form>
            </div>   
            <div class="col-md-6">
                <div class="row g-3 align-items-center">
                    <div class="col-auto">
                        <label class="col-form-label">Sort By</label>
                    </div>
                    <div class="col-md-4">
                    <select id="sortselect" class="form-select">
                        <option selected value="0" >Pilih</option>
                        <option value="1">Merek</option>
                        <option value="2">Nomor Seri</option>
                        <option value="3">Tahun Dibuat</option>
                    </select>
                    </div>
                    <div class="col-auto">
                        <span id="passwordHelpInline" class="form-text">
                        Sort Menurut kolom.
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if(isset($_GET['find'])) {
            $data= $_GET['find'];
            include("frontend/findtabel.php");
        }else{
            include("frontend/tabel.php");
        }
        ?>
    </div>
</div>
<?php
include("sys/js.php");
?>
</div>
    <div class="gambar">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#135984CF" fill-opacity="1" d="M0,32L30,64C60,96,120,160,180,197.3C240,235,300,245,360,250.7C420,256,480,256,540,234.7C600,213,660,171,720,138.7C780,107,840,85,900,117.3C960,149,1020,235,1080,229.3C1140,224,1200,128,1260,112C1320,96,1380,160,1410,192L1440,224L1440,320L1410,320C1380,320,1320,320,1260,320C1200,320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,180,320C120,320,60,320,30,320L0,320Z"></path></svg>
    </div>
</body>
