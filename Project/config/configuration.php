<?php
$hostname = '127.0.0.1';
$username = 'root';
$password = '';
$db_name = 'absen_itdel';

global $dbhandle;
try {
    $dbhandle = new mysqli($hostname, $username, $password, $db_name);
} catch (Exception $e) {
    die("Koneksi ke database gagal: " . $e->getMessage());
}
