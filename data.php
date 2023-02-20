<?php
//pangil koneksi database
include "koneksi.php";

?>
<!DOCTYPE html>
<html>
  <head>
    <title>data admin</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
      <div class="container">
      <h1 class="text-center">DAFTAR DATA PESERTA</h1>



  <!--- awal card table--->
  <div class="card mt-5">
    <div class="card-header bg-primary text-white">
     Data Mahasiswa
    </div>
    <div class="card-body">
    
    <table class="table table-bordered table-striped">
      <tr>
        <th>NO</th>
         <th>ID</th>
          <th>NAMA</th>
           <th>EMAIL</th>
            <th>TANGGAL LAHIR</th>
            <th>ALAMAT</th>
             <th>TINDAKAN<th>
      </tr>
      <?php
      $no = 1;
       $tampil = mysqli_query($koneksi,"SELECT * from daftar");
       while ($data = mysqli_fetch_array ($tampil)):

       ?> 
      <tr>
        <td> <?=$no++;?> </td>
          <td><?=$data['id_daftar'];?></td>
        <td><?=$data['nama'];?></td>
        <td><?=$data['email'];?></td>
        <td><?=$data['tanggal_lahir'];?></td>
        <td><?=$data['alamat'];?></td>
        <td><?=$data['tindakan'];?></td>
      </tr>
          <a href="#"> Edit </a>
          <a href="#"> Hapus </a>
      <?php endwhile; ?>

    </table>
  </div>
    
      
  <!--- akhir card table--->

</div>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </body>
</html>