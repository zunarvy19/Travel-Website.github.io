<?php


$connection = mysqli_connect('localhost', 'root', '', 'db_booking');

if (isset($_POST['send'])) {
  $nama = $_POST['name'];
  $email = $_POST['email'];
  $telepon = $_POST['phone'];
  $alamat = $_POST['address'];
  $tujuan = $_POST['location'];
  $jmlOrg = $_POST['guests'];
  $kedatangan = $_POST['arrivals'];
  $keberangkatan = $_POST['leaving'];

  $request = " insert into formbook(nama, email,	telepon,	alamat,	tujuan,	jmlOrang,	kedatangan,	keberangkatan) values 
  ('$nama', '$email', $telepon, '$alamat', '$tujuan', '$jmlOrg', '$kedatangan', '$keberangkatan')";

  mysqli_query($connection, $request);

  header('location:book.php');
} else {
  echo 'Something wrong, try again';
}
