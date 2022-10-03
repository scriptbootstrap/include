<?php
// query tabel user guide
$queryUserGuide = query("SELECT * FROM tb_user_guide"); ?>
<?php include("menu-active.php"); ?>

<head>
  <style>
    .nav li a:hover {
      background-color: #f675a836 !important;
    }
  </style>
</head>
<div class="sidebar sidebar-style-2">
  <div class="sidebar-wrapper scrollbar scrollbar-inner">
    <div class="sidebar-content">
      <div class="user">
        <div class="avatar-sm float-left mr-2">
          <img src="<?php include("url.php"); ?>assets/img/photo-profile/<?= $rowSession["gambar"]; ?>" alt="..." class="avatar-img rounded-circle">
        </div>
        <div class="info">
          <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
            <span>
              <?= $rowSession["first_name"]; ?> <?= $rowSession["last_name"]; ?>
              <span class="user-level">
                <?php if ($rowSession["level"] === $levelSuperAdmin) : ?>
                  Super Admin
                <?php endif; ?>

                <?php if ($rowSession["level"] === $levelPP) : ?>
                  PP
                <?php endif; ?>

                <?php if ($rowSession["level"] === $levelPPK) : ?>
                  PPK
                <?php endif; ?>
              </span>
              <span class="caret"></span>
            </span>
          </a>
          <div class="clearfix"></div>

          <div class="collapse in" id="collapseExample">
            <ul class="nav">
              <li>
                <a href="<?php include("url.php"); ?>dashboard/account-settings/account?id_account=<?= $rowSession["id"]; ?>">
                  <span class="link-collapse">Profil Saya</span>
                </a>
              </li>
              <li>
                <a href="<?php include("url.php"); ?>dashboard/account-settings/account?id_account=<?= $rowSession["id"]; ?>">
                  <span class="link-collapse">Edit Profil</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <ul class="nav">
        <li class="nav-item">
          <a href="<?php include("url.php"); ?>dashboard/" class="collapsed <?= $activeDashboard; ?>">
            <i class="fas fa-home"></i>
            <p>Dasbor</p>
          </a>
        </li>
        <li class="nav-section">
          <span class="sidebar-mini-icon">
            <i class="fa fa-ellipsis-h"></i>
          </span>
          <h4 class="text-section">Pengadaan</h4>
        </li>
        <li class="nav-item">
          <a data-toggle="collapse" href="#barang_jasa" class="<?= $activeBarangJasa; ?>">
            <i class="fas fa-envelope"></i>
            <p>Barang & Jasa < 50JT</p>
                <span class="caret"></span>
          </a>
          <div class="collapse" id="barang_jasa">
            <ul class="nav nav-collapse">
              <li>
                <a href="<?php include("url.php"); ?>dashboard/barang-jasa/memo/memo">
                  <span class="sub-item">Membuat Memo</span>
                </a>
              </li>

              <?php if (($rowSession["level"] === $levelSuperAdmin) || ($rowSession["level"] === $levelPP)) : ?>
                <li>
                  <a href="<?php include("url.php"); ?>dashboard/barang-jasa/baphk/baphk">
                    <span class="sub-item">Membuat BAPHK</span>
                  </a>
                </li>
              <?php endif; ?>

              <?php if (($rowSession["level"] === $levelSuperAdmin) || ($rowSession["level"] === $levelPP)) : ?>
                <li>
                  <a href="<?php include("url.php"); ?>dashboard/barang-jasa/pip/pip">
                    <span class="sub-item">Membuat PIP</span>
                  </a>
                </li>
              <?php endif; ?>

              <?php if (($rowSession["level"] === $levelSuperAdmin) || ($rowSession["level"] === $levelPP)) : ?>
                <li>
                  <a href="<?php include("url.php"); ?>dashboard/barang-jasa/pibu/pibu">
                    <span class="sub-item">Membuat PIBU</span>
                  </a>
                </li>
              <?php endif; ?>

              <?php if (($rowSession["level"] === $levelSuperAdmin) || ($rowSession["level"] === $levelPP)) : ?>
                <li>
                  <a href="<?php include("url.php"); ?>dashboard/barang-jasa/bahkn/bahkn">
                    <span class="sub-item">Membuat BAHKN</span>
                  </a>
                </li>
              <?php endif; ?>

              <?php if (($rowSession["level"] === $levelSuperAdmin) || ($rowSession["level"] === $levelPP)) : ?>
                <li>
                  <a href="<?php include("url.php"); ?>dashboard/barang-jasa/bahp/bahp">
                    <span class="sub-item">Membuat BAHP</span>
                  </a>
                </li>
              <?php endif; ?>

              <?php if (($rowSession["level"] === $levelSuperAdmin) || ($rowSession["level"] === $levelPP)) : ?>
                <li>
                  <a href="<?php include("url.php"); ?>dashboard/barang-jasa/spes/spes">
                    <span class="sub-item">Membuat SPes</span>
                  </a>
                </li>
              <?php endif; ?>

              <li>
                <a href="<?php include("url.php"); ?>dashboard/barang-jasa/bahpp/bahpp">
                  <span class="sub-item">Membuat BAHPP</span>
                </a>
              </li>

              <li>
                <a href="<?php include("url.php"); ?>dashboard/barang-jasa/bapp/bapp">
                  <span class="sub-item">Membuat BAPP</span>
                </a>
              </li>

              <li>
                <a href="<?php include("url.php"); ?>dashboard/barang-jasa/bast/bast">
                  <span class="sub-item">Membuat BAST</span>
                </a>
              </li>

              <li>
                <a href="<?php include("url.php"); ?>dashboard/barang-jasa/kwitansi/kwitansi">
                  <span class="sub-item">Membuat Kwitansi</span>
                </a>
              </li>

              <li>
                <a href="<?php include("url.php"); ?>dashboard/barang-jasa/bap/bap">
                  <span class="sub-item">Membuat BAP</span>
                </a>
              </li>


            </ul>
          </div>
        </li>

        <li class="nav-item">
          <a data-toggle="collapse" href="#barang" class="<?= $activeBarang; ?>" id="appRepair1">
            <i class="fas fa-envelope"></i>
            <p>Barang 50JT - 200JT</p>
            <span class="caret"></span>
          </a>
        </li>

        <li class="nav-item">
          <a data-toggle="collapse" href="#jasalainnya" class="<?= $activeJasaLainnya; ?>" id="appRepair2">
            <i class="fas fa-envelope"></i>
            <p>Jasa Lainnya 50JT - 200JT</p>
            <span class="caret"></span>
          </a>
        </li>

        <li class="nav-section">
          <span class="sidebar-mini-icon">
            <i class="fa fa-ellipsis-h"></i>
          </span>
          <h4 class="text-section">Komponen</h4>
        </li>

        <?php if ($rowSession["level"] === $levelSuperAdmin) : ?>
          <li class="nav-item">
            <a data-toggle="collapse" href="#pengaturan" class="<?= $activeSettings; ?>">
              <i class="fas fa-cog"></i>
              <p>Pengaturan</p>
              <span class="caret"></span>
            </a>
            <div class="collapse" id="pengaturan">
              <ul class="nav nav-collapse">
                <li>
                  <a href="<?php include("url.php"); ?>dashboard/settings/user">
                    <span class="sub-item">Akun Pengguna</span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
        <?php endif; ?>

        <li class="nav-item">
          <!-- <a href="<?php include("url.php"); ?>dashboard/bantuan/tutorial"> -->
          <?php foreach ($queryUserGuide as $row) : ?>
            <a href="<?php include("url.php"); ?>dashboard/help/user-guide/sikudabaja?id=<?= $row["id"]; ?>" class="<?= $activeUserGuide; ?>">
              <img src=" <?php include("url.php"); ?>/assets/img/Logo_BPS.png" alt="" width="26">
              <p style="margin-left:15px ;">Panduan Penggunaan</p>
            </a>
          <?php endforeach; ?>
        </li>

        <li class="nav-item">
          <a href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fa fa-sign-out-alt"></i>
            <p>Keluar</p>
          </a>
        </li>

      </ul>
    </div>
  </div>
</div>

<!-- Info repair app -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php for ($repairApp = 1; $repairApp < 20; $repairApp++) : ?>
  <script>
    const appRepair<?= $repairApp; ?> = document.getElementById('appRepair<?= $repairApp; ?>')

    appRepair<?= $repairApp; ?>.onclick = () => {
      Swal.fire({ //displays a pop up with sweetalert
        icon: 'info',
        title: 'Fitur ini belum tersedia!',
        showConfirmButton: true,
        window: 'index',
        timer: 5000
      });
    }
  </script>
<?php endfor; ?>


<!-- Info fix bug app -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php for ($fixBug = 1; $fixBug < 20; $fixBug++) : ?>
  <script>
    const fixBug<?= $fixBug; ?> = document.getElementById('fixBug<?= $fixBug; ?>')

    fixBug<?= $fixBug; ?>.onclick = () => {
      Swal.fire({ //displays a pop up with sweetalert
        icon: 'info',
        title: 'Mohon Maaf, Fitur masih dalam perbaikan bug!',
        showConfirmButton: true,
        window: 'index',
        timer: 7000
      });
    }
  </script>
<?php endfor; ?>