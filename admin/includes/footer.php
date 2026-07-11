<?php
/*
  $Id$

  CE Phoenix, E-Commerce made Easy
  https://phoenixcart.org

  Copyright (c) 2021 Phoenix Cart

  Released under the GNU General Public License
*/
?>
<div class="w-100"></div>

<footer class="col mt-3 d-print-none">
  <div class="card bg-light p-0 pt-3 mb-3 card-body text-center">
    <?php // 2026-07-11: Display the imhabii build without changing the upstream PhoenixCart version. ?>
    <p>Phoenix v<?= Versions::get('Phoenix') ?><?php
      $imhabii_version_file = DIR_FS_CATALOG . 'includes/imhabii_version.php';
      if (is_file($imhabii_version_file)) {
        echo ' / imhabii build ' . htmlspecialchars(trim(file_get_contents($imhabii_version_file)));
      }
    ?> &copy; 2000-<?= date('Y') ?> <a href="https://www.phoenixcart.org" target="_blank" rel="noreferrer">Phoenix Cart</a></p>
  </div>
</footer>
