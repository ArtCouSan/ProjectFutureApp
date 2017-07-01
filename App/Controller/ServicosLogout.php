<?php

session_start();
session_destroy();
header("location:../../Public/index.php");
exit();

