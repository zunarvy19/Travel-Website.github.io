<?php


$connection = mysqli_connect('localhost', 'root', '', 'db_booking');

if (isset($_POST['send'])) {
  $nama = $_POST['name'];
  $email = $_POST['email'];
  $telepon = $_POST['phone'];
  $harga = $_POST['price'];
  $tujuan = $_POST['location'];

  $request = " insert into formbook(nama, email, telepon, harga, tujuan) values 
  ('$nama', '$email', $telepon, '$harga', '$tujuan')";

  mysqli_query($connection, $request);

  header('location:book.php');
} else {
  echo 'Something wrong, try again';
}
