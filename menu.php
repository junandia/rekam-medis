        <div class="app-bar">
            <a class="app-bar-element" href="index.php"><span class="mif-home"></span></a>
    <span class="app-bar-divider"></span>
    <ul class="app-bar-menu">
    <?php if ($_SESSION['level'] == "3" || $_SESSION['level'] == "2") {?>
        <li>
            <a href="" class="dropdown-toggle"><span class="mif-medium"></span></a>
            <ul class="d-menu" data-role="dropdown">
                <li><a href="index.php?page=./pasien/index">Pasien</a></li>
                <li><a href="index.php?page=./dokter/index">Dokter</a></li>
                <li><a href="index.php?page=./poliklinik/index">Poliklinik</a></li>
                <li><a href="index.php?page=./petugas/index">Petugas</a></li>
            </ul>
        </li>
            <a class="app-bar-element" href="index.php?page=./kunjungan/index"><span class="mif-ambulance"> Kunjungan</span></a>
        <li>
            <a href="" class="dropdown-toggle"><span class="mif-printer"></span> Laporan</a>
            <ul class="d-menu" data-role="dropdown">
                <li><a href="index.php?page=./laporan/pasien">Laporan Data Pasien</a></li>
                <li><a href="index.php?page=./laporan/kunjungan">Laporan Data Kunjungan</a></li>
            </ul>
        </li>
        <?php }else{ ?>
                    <a class="app-bar-element" href="index.php?page=./kunjungan/index"><span class="mif-ambulance"> Kunjungan</span></a>

        <li>
            <a href="" class="dropdown-toggle"><span class="mif-ambulance"></span> RMedis</a>
            <ul class="d-menu" data-role="dropdown">
                <li><a href="index.php?page=./rekamedis&waktu=today">Hari Ini</a></li>
                <li><a href="index.php?page=./rekamedis&waktu=allday">Semua</a></li>
            </ul>
        </li>
        <?php } ?>
    </ul>
        <div class="app-bar-element place-right">

        <a class="dropdown-toggle fg-white"><span class="mif-pencil"></span> Pengaturan</a>
        <div class="app-bar-drop-container bg-white fg-dark place-right"
                data-role="dropdown" data-no-close="true">
            <div class="padding20">
                <form>
                    <div class="form-actions">
                    <?php
                        $kd = $_SESSION['Kd_User'];
                    ?>
                        <a class="button primary" href="index.php?page=./ucp&kd=<?php echo $kd;?>">Ubah Password</a>
                        <a class="button danger" href="logout.php">Keluar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>