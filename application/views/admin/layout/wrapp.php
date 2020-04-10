<?php
//Proteksi Halaman Admin
is_login();
//Gabungan Semua layout
require_once('header.php');
require_once('sidebar.php');
require_once('topbar.php');
require_once('content.php');
require_once('footer.php');
