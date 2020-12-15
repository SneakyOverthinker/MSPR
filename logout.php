<?php

//page de taitement avec unset, header location vers login
session_start();
session_unset();

header("location:login.php");
//réccu données via $_POST