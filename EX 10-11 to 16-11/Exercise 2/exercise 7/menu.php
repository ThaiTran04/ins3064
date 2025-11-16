<?php
require_once "permissions.php"; // chứa checkAccess()

echo "<h2>Menu</h2>";

if (checkAccess('delete_user')) {
    echo '<a href="protected_delete.php">Delete User</a><br>';
}

if (checkAccess('edit_user')) {
    echo '<a href="edit_user.php">Edit User</a><br>';
}

if (checkAccess('view_reports')) {
    echo '<a href="reports.php">View Reports</a><br>';
}
?>
