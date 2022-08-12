<!-------------------------------------------Untuk Koneksikan Antar Page------------------------------------------------------------>
<?php

if(isset($_GET['page'])) {
  $page = $_GET['page'];
  switch ($page) {
    case 'data' :
      include 'admin/tampil_pengkinian_data.php';
      break;
    case 'jadwal' :
      include 'training/jadwal_training.php';
      break;
    
  }
}else{
  include 'halaman_utama.php';
}

?>