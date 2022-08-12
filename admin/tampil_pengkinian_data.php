<div class="container">
  <h2><b>DATABASE KARYAWAN</b></h2><br>

  <body>
    <!----------------------------------------------------------------------------->
    <form action="" method="POST">
      <input type="text" name="query" placeholder="Cari Data">
      <input type="submit" name="cari" value="Search">
    </form>
    <br>
    <!----------------------------------------------------------------------------->

    <table class="table table-bordered">
      <thead style="text-align: center; background-color:chartreuse">
        <tr>
          <th>No</th>
          <th>NIK</th>
          <th>NAMA</th>
          <th>NOMOR I-SAKU</th>
          <th>NOMOR WHATSAPP</th>
        </tr>
      </thead>


      <?php

      error_reporting(0);
      require_once '../koneksi.php';
      $query = $_POST['query'];
      $query = mysqli_query($koneksi, "SELECT * FROM pengkinian_data WHERE nik LIKE '%" . $query . "%' ");
      $no = 0;

      if (mysqli_num_rows($query)) {
        while ($hasil = mysqli_fetch_array($query)) {
          $no++; ?>

          <tr>
            <td style="text-align: center;"><?php echo $no ?></td>
            <td style="text-align: center;"><?php echo $hasil['nik'] ?></td>
            <td><?php echo $hasil['nama'] ?></td>
            <td style="text-align: center;"><?php echo $hasil['nomor_isaku'] ?></td>
            <td style="text-align: center;"><?php echo $hasil['nomor_whatsapp'] ?></td>
          </tr>

      <?php
        }
      } else {
        echo '<tr><td colspan="5">Tidak Ada Data</td></tr>';
      }
      ?>

  </body>
  </table>
</div>