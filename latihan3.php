<?php
$user = $_POST['name'];
$pass = $_POST['password'];

if (($user == "akbar") && ($pass == "123"))
{
   echo "Login Berhasil";
  }
  else
  {
  echo "Login Gagal";
  }
  ?>
