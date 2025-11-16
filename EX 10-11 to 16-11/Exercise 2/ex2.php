<?php
function hasPermission($user_id, $permission) {
global $users, $roles;
$user_role = $users[$user_id]['role'];
return in_array($permission, $roles[$user_role]);
}
?>