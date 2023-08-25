<?php

// DB Bağlantı bilgilerimiz....
$databaseHost = 'localhost:3306';
$databaseName = 'myblog';
$databaseUsername = 'root';
$databasePassword = '1234';

// Veritabanına Bağlanalım...
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
// Veritabanı Kodlamasını UTF8 Yapalım...
$result = mysqli_query($mysqli, "SET NAMES utf8");
