<?php


if(isset($_GET['page'])) {
  $page = $_GET['page'];
  switch ($page) {
    case 'tampil':
      include 'views/tampil_data_training.php';
      break;
    
  }
}else {
  include 'index.php';
}



?>