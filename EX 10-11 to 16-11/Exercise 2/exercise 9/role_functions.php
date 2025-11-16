<?php
function addPermissionToRole($role_id, $permission_id) {
    $conn = mysqli_connect("localhost", "root", "", "exercise_db");
    $sql = "INSERT INTO role_permissions(role_id, permission_id) VALUES ($role_id, $permission_id)";
    mysqli_query($conn, $sql);
}

function removePermissionFromRole($role_id, $permission_id) {
    $conn = mysqli_connect("localhost", "root", "", "exercise_db");
    $sql = "DELETE FROM role_permissions WHERE role_id = $role_id AND permission_id = $permission_id";
    mysqli_query($conn, $sql);
}
?>
