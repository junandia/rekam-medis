        <div class="app-bar">
            <a class="app-bar-element" href="index.php"><span class="mif-home"></span></a>
    <span class="app-bar-divider"></span>
    <ul class="app-bar-menu">
        <li>
            <a href="" class="dropdown-toggle"><span class="mif-medium"></span>aster Data</a>
            <ul class="d-menu" data-role="dropdown">
                <li><a href="index.php?page=./pasien/index">Pasien</a></li>
                <li><a href="index.php?page=./dokter/index">Dokter</a></li>
                <li><a href="index.php?page=./poliklinik/index">Poliklinik</a></li>
                <li><a href="index.php?page=./petugas/index">Petugas</a></li>
            </ul>
        </li>
        <li>
            <a href="" class="dropdown-toggle"><span class="mif-printer"></span> Laporan</a>
            <ul class="d-menu" data-role="dropdown">
                <li><a href="">Laporan Data Pasien</a></li>
                <li><a href="">Laporan Data Dokter</a></li>
                <li><a href="">Laporan Data Petugas</a></li>
                <li><a href="">Laporan Data Poliklinik</a></li>
                <li><a href="">Laporan Rekam Medis</a>
            </ul>
        </li>
        <li>
            <a href="" class="dropdown-toggle"><span class="mif-ambulance"></span> RMedis</a>
            <ul class="d-menu" data-role="dropdown">
                <li><a href="index.php?page=./rekamedis&waktu=today">Hari Ini</a></li>
                <li><a href="index.php?page=./rekamedis&waktu=allday">Semua</a></li>
            </ul>
        </li>
    </ul>
            <a class="app-bar-element" href="index.php?page=./kunjungan/index"><span class="mif-ambulance"> Kunjungan</span></a>
        <div class="app-bar-element place-right">

        <a class="dropdown-toggle fg-white"><span class="mif-pencil"></span> Pengaturan</a>
        <div class="app-bar-drop-container bg-white fg-dark place-right"
                data-role="dropdown" data-no-close="true">
            <div class="padding20">
                <form>
                    <h4 class="text-light">Login to service...</h4>
                    <div class="input-control text">
                        <span class="mif-user prepend-icon"></span>
                        <input type="text">
                    </div>
                    <div class="input-control text">
                        <span class="mif-lock prepend-icon"></span>
                        <input type="password">
                    </div>
                    <label class="input-control checkbox small-check">
                        <input type="checkbox">
                        <span class="check"></span>
                        <span class="caption">Remember me</span>
                    </label>
                    <div class="form-actions">
                        <button class="button">Login</button>
                        <button class="button link">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>