<?php
require_once "permissions.php"; // file này chứa hàm checkAccess()

function requirePermission($permission) {
    if (!checkAccess($permission)) {
        header("Location: unauthorized.php");
        exit();
    }
}
?>
