<?php
// Set the session save path
session_save_path('D:\laragon\www\ins3064\test');
session_start();

$name = "test_value"; // tên biến cho cả cookie và session

// ----- SESSION -----
if (isset($_SESSION[$name])) {
    echo "Session value: " . $_SESSION[$name] . "<br>";
} else {
    $_SESSION[$name] = "This is session value";
    echo "Session initialized.<br>";
}

// ----- COOKIE -----
if (isset($_COOKIE[$name])) {
    echo "Cookie value: " . $_COOKIE[$name] . "<br>";
} else {
    setcookie($name, "This is cookie value", time() + 3600, "/");
    echo "Cookie initialized. Reload page to see cookie value.<br>";
}

// ----- COMPARE VALUES -----
echo "<br><strong>Comparison:</strong><br>";

if (isset($_COOKIE[$name])) {
    if ($_SESSION[$name] === $_COOKIE[$name]) {
        echo "Session and Cookie have the SAME value.";
    } else {
        echo "Session and Cookie have DIFFERENT values.";
    }
} else {
    echo "Cannot compare yet — cookie will be available after reload.";
}
?>
