<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

include 'view/home_view.php';
