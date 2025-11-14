<?php
session_save_path('D:\laragon\www\ins3064\test');
session_start();

// Unset all session variables
$_SESSION = [];

// Destroy the session
session_destroy();

echo "Session destroyed. All session variables have been unset.";
?>