<?php
require_once "../exercise5/get_permissions.php";

function getAllPermissionsIncludingInherited($role_id, $conn) {
    $permissions = [];

    while ($role_id !== null) {

        $sql = "SELECT permission_id FROM role_permissions WHERE role_id = $role_id";
        $res = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_assoc($res)) {
            $permissions[] = $row['permission_id'];
        }

        $sql2 = "SELECT role_inherit FROM roles WHERE role_id = $role_id";
        $res2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($res2);

        $role_id = $row2['role_inherit'];
    }

    return array_unique($permissions);
}
