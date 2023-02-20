<?php
include ("koneksi.php");
//cek apakah tombol simpan sudah diklik atau belum
if ($_SERVER['REQUEST_METHOD']=="POST") {
	//ambil data dari form
	$id =$_POST['id_user'];
	$username =$_POST['username'];
	$nama_lengkap =$_POST['nama_lengkap'];
	$password =$_POST['password'];
	$level =$_POST['level'];
	//buat query
	$sql ="INSERT INTO user (id_user,username,nama_lengkap,password, level) VALUE ('$id','$username','$nama_lengkap', '$password','$level')";
	 $query =mysqli_query($koneksi,$sql) or die (mysqli_error($koneksi));
	 //apakah query update berhasil
	 if ($query) {
	 //kalau berhasil, alihkan ke halaman index.php dengan status=sukses
	 header ('location:regis.php?status=sukses');
	 }else{
	 	//kalau gagal, alihkan  ke halaman index.php dengan status=gagal
	 header ('location:regis.php?status=gagal');
	 }
	 }else{ 
	     die("akses dilarang...");
	}
	?>