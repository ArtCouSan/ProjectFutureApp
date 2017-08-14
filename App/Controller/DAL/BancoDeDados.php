<?php

// Conexão
$conmysql = mysqli_connect("localhost:3306", "root", "root", "vestibulando");

$db = mysqli_select_db($conmysql, "vestibulando");

