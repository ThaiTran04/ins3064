<?php
require_once "role_functions.php";

if (isset($_POST['add'])) {
    addPermissionToRole($_POST['role_id'], $_POST['permission_id']);
}

if (isset($_POST['remove'])) {
    removePermissionFromRole($_POST['role_id'], $_POST['permission_id']);
}
?>

<h1>Role Management</h1>

<form method="POST">
    Role ID: <input type="number" name="role_id" required><br>
    Permission ID: <input type="number" name="permission_id" required><br><br>

    <button name="add">Add Permission</button>
    <button name="remove">Remove Permission</button>
</form>
