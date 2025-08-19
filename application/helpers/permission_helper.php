<?php 

function has_permission($permission_name) {
    $CI =& get_instance();
    $CI->load->model('AdminModel');

    $user = $CI->session->userdata('role');
    if (!$user) return false;

    $permissions = $CI->AdminModel->get_role_permissions($user);
    foreach ($permissions as $perm) {
        if ($perm->name == $permission_name) {
            return true;
        }
    }
    return false;
}
?>