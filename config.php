<?php 
  define('HOST', 'localhost');
  define('USER', 'root');
  define('PASS', '');
  define('BASE', 'maquinas');

$conn = new MySQLi(HOST, USER, PASS, BASE);

$pdo = new PDO('mysql:host=localhost;dbname=maquinas','root','');
