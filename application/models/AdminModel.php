<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminModel extends CI_Model {

	public function insert($table, $data) {
       $this->db->insert($table, $data);

         return $this->db->insert_id();
    }


    public function get_user_by_email($field, $value, $table) {
        return $this->db->where($field, $email)->get($table)->row();
    }

    public function get_data($table, $status = null) {
        
    if ($status !== null && $status !== '' && $status !== 'all') {
        $this->db->where('status', $status);
    }
   return $this->db->order_by('id','desc')->get($table)->result();
    //  echo $this->db->last_query();die;
}

     public function get_data_by_id($id, $table) {
        return $this->db->where('id', $id)->get($table)->row();
    }

    public function update_data($id, $data, $table) {
        return $this->db->where('id', $id)->update($table, $data);
    }

       public function delete_data($id, $table) {
        return $this->db->where('id', $id)->delete($table)->row();
    }


     public function get_role_permissions($role_id) {
        return $this->db
            ->select('permissions.*')
            ->from('role_has_permissions')
            ->join('permissions', 'permissions.id = role_has_permissions.permission_id')
            ->where('role_has_permissions.role_id', $role_id)
            ->get()->result();
    }

}
