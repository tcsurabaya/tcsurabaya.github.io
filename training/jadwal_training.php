<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-------------------------------------------Untuk Judul Kepala Website------------------------------------------------------------>
  <title>TC SURABAYA</title>


  <!-------------------------------------------Style.CSS dari Boostrap------------------------------------------------------------>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <!-------------------------------------------Style.CSS Buatan Sendiri------------------------------------------------------------>
  <link rel="stylesheet" href="style.css">

</head>


<body>

  <!-------------------------------------------Untuk Tampilan Border Utama------------------------------------------------------------>

  <nav>
    <div class="wrapper">
      <div class="logo"><a href="#">TC SURABAYA</a></div>
      <div class="menu">
        <ul>
          <li><a href="../index.html" class="tbl-biru">BACK TO HOME</a></li>
        </ul>
      </div>
    </div>
  </nav>
  
  
  
  <div class="container">
  <h2><b><u><center>JADWAL TRAINING TC SURABAYA</center></u></b></h2><br>
  <body>
<!----------------------------------------------------------------------------->
<form action="" method="POST">
    <input type="text" name="query" placeholder="Cari Data">
    <input type="submit" name="cari" value="Search">
</form>
<br>
<!----------------------------------------------------------------------------->

  <table class="table table-bordered">
    <thead style="text-align: center; background-color:aqua;">
      <tr>
        <th>No</th>
        <th>NIK</th>
        <th>NAMA</th>
        <th>JABATAN</th>
        <th>KODE TOKO</th>
        <th>NAMA TOKO</th>
        <th>JENIS TRAINING</th>
        <th>TGL TRAINING</th>
      </tr>
    </thead>
    

        <?php

          error_reporting(0);
            require_once '../koneksi.php';
            $query = $_POST['query'];
            $query = mysqli_query($koneksi, "SELECT * FROM undangan_training WHERE nik LIKE '%".$query."%' ");
            $no = 1;

if (mysqli_num_rows($query)) {
    while ($baris = mysqli_fetch_array($query)) {
         ?>
        
            <tr>
                <td style="text-align: center;"><?php echo $no++?></td>
                <td style="text-align: center;"><?php echo $baris ['nik']?></td>
                <td><?php echo $baris ['nama']?></td>
                <td style="text-align: center;"><?php echo $baris ['jabatan']?></td>
                <td style="text-align: center;"><?php echo $baris ['kode_toko']?></td>
                <td><?php echo $baris ['nama_toko']?></td>
                <td style="text-align: center;"><?php echo $baris ['jenis_training']?></td>
                <td style="text-align: center;"><?php echo $baris ['tgl_training']?></td>
            </tr>
     <?php
    }
}else{
  echo '<tr><td colspan="8">Tidak Ada Data</td></tr>';
}
    ?>

    </body>
  </table>
</div>





