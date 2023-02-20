<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lag="en">
  <head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Aplikasi</title>
</head>
<body>
    <center><h3>Data Diri</h3></center>
    <center><h4>Peserta SPORT TOURISM</h></center>
  <div class="container mt-3">

    <table class="table table-striped table-hover table-boordered">
      <thead class="table-dark">
      <th>Id</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Tanggal Lahir</th>
      <th>Alamat</th>
      </thead >

      <?php
      $sql ="SELECT * FROM daftar";
      $query = mysqli_query($koneksi, $sql);
      while($daftar = mysqli_fetch_Array($query)) {
        echo" 
        <tbody>
      <tr>
        <td>$daftar[id_daftar]</td>
        <td>$daftar[nama]</td>
        <td>$daftar[email]</td>
        <td>$daftar[tanggal_lahir]</td>
        <td>$daftar[alamat]</td>
        </tr>
      </tbody>
        ";

      }
      ?>
    </table>
    <center><p>Total:
<?php echo mysqli_num_rows($query) ?></center>
<br>
<center> <a href="home_user.php" class="btn btn-primary btn-md mb-2">Logout</a></center>
</p>
  </div>

  
</body>
</html>