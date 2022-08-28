<?php
if (!isset($_SESSION)) {
    session_start();
}

include '../config/configuration.php';
include '../functions/common_functions.php';
include '../functions/db_functions.php';
