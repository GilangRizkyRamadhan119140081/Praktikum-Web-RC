<?php
//Membuat Token Keamanan Ajax Request (security Token)
session_start();
if (empty($_SESSION['security_token'])) {
  $_SESSION['security_token'] = bin2hex(random_bytes(32));
}

//MEMERIKSA LOGIN USER JIKA ADA AKAN DI TAMBHAH DIBAWAH INI

?>