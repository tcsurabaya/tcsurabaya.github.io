<!DOCTYPE html>

<html lang="en">

<head>

  <title>TC SURABAYA</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

​

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

  <!-- Brand -->

  <a class="navbar-brand" a href=""><img src="https://tcsurabaya.websites.co.in/files/893676/business/logo/logo-992580941.png?v=2013140388" width="29px" alt=""></a>



  <!-- Links -->

  <ul class="navbar-nav">

    <li class="nav-item">
      <a class="nav-link" href="../index.html">HOME</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="admin.php?page=data">Database Karyawan</a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="" data-toggle="modal" data-target="#myModalu">Link Praktek</a>
    </li>



    <!-- Dropdown -->

    <li class="nav-item dropdown">

      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Coming Soon</a>

      <div class="dropdown-menu">

        <a class="dropdown-item" href="#">Coming Soon</a>

        <a class="dropdown-item" href="#">Coming Soon</a>

        <a class="dropdown-item" href="#">Coming Soon</a>

      </div>

    </li>

  </ul>

</nav>


<!-- The Modal -->
<div class="modal" id="myModalu">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h1 class="modal-title">Link Praktek</h1>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
          <div class="container mt-3">

            <p>Silahkan melakukan pencarian sesuai dengan training yang dijalankan saat ini.</p>
            <input class="form-control" id="myInput" type="text" placeholder="Search..">
            <br>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Jenis Katagory</th>
                  <th>Nama Praktek</th>
                  <th>Link Praktek</th>
                </tr>
              </thead>
              <tbody id="myTable">
                <tr>
                  <td>Konvensional</td>
                  <td>Listing Barang</td>
                  <td><a href="" class="tbl-biru">Klink Disini</a></td>
                </tr>
                <tr>
                  <td>Konvensional</td>
                  <td>Transaksi Tunai</td>
                  <td><a href="" class="tbl-biru">Klink Disini</a></td>
                </tr>
                <tr>
                  <td>Konvensional</td>
                  <td>Transaksi BCA</td>
                  <td><a href="" class="tbl-biru">Klink Disini</a></td>
                </tr>
                <tr>
                  <td>Konvensional</td>
                  <td>Transaksi Mandiri</td>
                  <td><a href="" class="tbl-biru">Klink Disini</a></td>
                </tr>
                <tr>
                  <td>Konvensional</td>
                  <td>Transaksi I-saku</td>
                  <td><a href="" class="tbl-biru">Klink Disini</a></td>
                </tr>
                <tr>
                  <td>Konvensional</td>
                  <td>Transaksi Prepaid</td>
                  <td><a href="" class="tbl-biru">Klink Disini</a></td>
                </tr>

                <tr>
                  <td>E-Learning</td>
                  <td>Listing Barang</td>
                  <td><a href="" class="tbl-biru">Klink Disini</a></td>
                </tr>
                <tr>
                  <td>E-Learning</td>
                  <td>Transaksi Tunai</td>
                  <td><a href="" class="tbl-biru">Klink Disini</a></td>
                </tr>
                <tr>
                  <td>E-Learning</td>
                  <td>Transaksi BCA</td>
                  <td><a href="" class="tbl-biru">Klink Disini</a></td>
                </tr>
                <tr>
                  <td>E-Learning</td>
                  <td>Transaksi Mandiri</td>
                  <td><a href="" class="tbl-biru">Klink Disini</a></td>
                </tr>
                <tr>
                  <td>E-Learning</td>
                  <td>Transaksi I-saku</td>
                  <td><a href="" class="tbl-biru">Klink Disini</a></td>
                </tr>
                <tr>
                  <td>E-Learning</td>
                  <td>Transaksi Prepaid</td>
                  <td><a href="" class="tbl-biru">Klink Disini</a></td>
                </tr>
                
                </tbody>
            </table>
          </div>
        </div>

        <script>
          $(document).ready(function() {
            $("#myInput").on("keyup", function() {
              var value = $(this).val().toLowerCase();
              $("#myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
              });
            });
          });
        </script>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>

  

                

<?php

include '../libs.php';

?>




</body>

</html>

