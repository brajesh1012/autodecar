<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Common_model extends CI_Model
{
    function search_intro($key)
    {
        $q = $this->db->query("SELECT * FROM users where ( login_id LIKE '%" . $key . "%' or full_name LIKE '%" . $key . "%' ) AND status = '0' ");
        $result = $q->result_array();
        return $result;
    }

    /*---GET SINGLE RECORD---*/
    function getsingle($table, $where)
    {
        $q = $this->db->get_where($table, $where);
        return $q->row();
    }

    function getsingle_order_by($table, $where, $order, $type)
    {
        $this->db->order_by($order, $type);
        $q = $this->db->get_where($table, $where);
        return $q->row();
    }

    /*<!--INSERT RECORD FROM SINGLE TABLE-->*/
    function insertData($table, $dataInsert)
    {
        $this->db->insert($table, $dataInsert);
        return $this->db->insert_id();
    }

    /*<!--UPDATE RECORD FROM SINGLE TABLE-->*/
    function updateData($table, $data, $where)
    {
        $this->db->update($table, $data, $where);
        return;
    }
    /*<!--DELETE RECORD FROM SINGLE TABLE-->*/
    function deleteData($table, $where)
    {
        //$this->db->delete('mytable', array('id' => $id));
        $this->db->delete($table, $where);
        return;
    }

    /*<!--GET ALL RECORD FROM SINGLE TABLE WITHOUT CONDITION-->*/
    function getAllrecord($table)
    {
        $this->db->select('*');
        $q = $this->db->get($table);
        $num_rows = $q->num_rows();
        if ($num_rows > 0) {
            foreach ($q->result() as $rows) {
                $data[] = $rows;
            }
            $q->free_result();
            return $data;
        }
    }

    /*---GET MULTIPLE RECORD---*/
    function getAllwhere($table, $where, $order_by='')
    {
           if (!empty($order_by)) {
        $this->db->order_by($order_by);
    }

        $this->db->select('*');
        $q = $this->db->get_where($table, $where);
        $num_rows = $q->num_rows();
        if ($num_rows > 0) {
            foreach ($q->result() as $rows) {
                $data[] = $rows;
            }
            $q->free_result();
            return $data;
        }
    }

    function get_bill_info_group($bill_id)
    {
        $this->db->select('gp.id,gp.material_id,m.material_name');
        $this->db->join('clients as c', 'c.client_id=gp.client_id');
        $this->db->join('vehicles as v', 'v.vehicle_id=gp.vehicle_id');
        $this->db->join('materials as m', 'm.material_id=gp.material_id');
        $this->db->where('gp.bill_id', $bill_id);
        $this->db->order_by('gp.serial_no', 'asc');
        $this->db->group_by('gp.material_id');
        $q = $this->db->get_where('gate_pass as gp');
        $num_rows = $q->num_rows();
        if ($num_rows > 0) {
            foreach ($q->result() as $rows) {
                $data[] = $rows;
            }
            $q->free_result();
            return $data;
        }
    }

    public function record_count($table, $where = '')
    {
        $this->db->from($table);
        if ($where != '') {
            $this->db->where($where);
        }
        return $this->db->count_all_results();
    }

    function getAllwhere_pagination($table, $limit, $start, $where = '', $order = "", $type = "")
    {
        $this->db->select('*');
        $this->db->from($table);
        if ($where != '') {
            $this->db->where($where);
        }
        if ($order != "") {
            $this->db->order_by($order, $type);
        }
        $this->db->limit($limit, $start);
        $query = $this->db->get();
        return $query->result();
    }
    function select_sum($table, $colomn, $where = '')
    {
        $this->db->select('SUM(' . $colomn . ') as total_qty');
        $this->db->from($table);
        if ($where != '') {
            $this->db->where($where);
        }
        $query = $this->db->get();
        return $query->result();
    }
    function chk_subcription()
    {
        $user_company_id = $this->session->userdata('user_company_id');
        $rec = $this->getsingle('klc_front_user', array('company_id' => $user_company_id));
        if ($rec && $user_company_id) {
            if ($rec->next_pay_date < date('Y-m-d')) {
                redirect('subcription');
            }
        } else {
            redirect('subcription');
        }
    }

    // function get_temp_data_group_by($user_id, $company_id)
    // {
    //     $this->db->select('t1.*');
    //     $this->db->from('temp_transaction t1');
    //     $this->db->join(
    //         '(SELECT DISTINCT entry_tpye, entry_no, entry_date, bill_to_buyer FROM temp_transaction) t2',
    //         't1.entry_tpye = t2.entry_tpye 
    //         AND t1.entry_no = t2.entry_no 
    //         AND t1.entry_date = t2.entry_date 
    //         AND t1.bill_to_buyer = t2.bill_to_buyer',
    //         'INNER'
    //     );
    //     $this->db->where('t1.user_id', $user_id);
    //     $this->db->where('t1.company_id', $company_id);
    //     $this->db->order_by('t1.entry_tpye, t1.entry_no, t1.entry_date, t1.bill_to_buyer');
    //     $q = $this->db->get();


    //     $num_rows = $q->num_rows();
    //     if ($num_rows > 0) {
    //         foreach ($q->result() as $rows) {
    //             $data[] = $rows;
    //         }
    //         $q->free_result();
    //         return $data;
    //     }
    // }



    function get_temp_data_group_by($user_id, $company_id)
    {
        $this->db->select('*');
        $this->db->group_by(['entry_tpye', 'entry_no', 'entry_date', 'bill_to_buyer']);
        $this->db->where('user_id', $user_id);
        $this->db->where('company_id', $company_id);
        $q = $this->db->get('temp_transaction');
        $num_rows = $q->num_rows();
        if ($num_rows > 0) {
            foreach ($q->result() as $rows) {
                $data[] = $rows;
            }
            $q->free_result();
            return $data;
        }
    }

    public function slug_exists($slug) {
    return $this->db->where('slug', $slug)->get('car_list')->num_rows() > 0;
}


    public function get_vehicle_list_by_user($table, $where = '', $order = "") {
        
    return $this->db->where($where)->order_by($order)->get($table)->result();
    
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// public function get_vehicle_list_by_user1($table, $user_id, $status = null, $title_search = null, $order = "id DESC")
// {
//     // Base condition: only get vehicles added by the current user
//     $this->db->where('added_by', $user_id);

//     // Status filter (skip if status is 'all')
//     if ($status !== null && $status !== '' && $status !== 'all') {
//         $this->db->where('post_status', $status);
//     }

//     // Title search across multiple fields
//     if (!empty($title_search)) {
//         $this->db->group_start();
//         $this->db->like('make', $title_search);
//         $this->db->or_like('model', $title_search);
//         $this->db->or_like('year', $title_search);
//         $this->db->or_like('mileage', $title_search);
//         $this->db->or_like('vehicle_condition', $title_search);
//         $this->db->or_like('price', $title_search);
//         $this->db->or_like('fuel_type', $title_search);
//         $this->db->or_like('transmission', $title_search);
//         $this->db->or_like('km', $title_search);
//         $this->db->or_like('location', $title_search);
//         $this->db->group_end();
//     }

//     $this->db->order_by($order);
//     return $this->db->get($table)->result();
// }

// ////////////////////////////////////////////////////////////

  public function count_all()
    {
        if(@$_SESSION['role_name']=="Admin"){
                return $this->db
                ->count_all_results('car_list');
        }else{

            return $this->db
                   ->where('added_by', @$_SESSION['user_id'])
                   ->count_all_results('car_list');
        }
    }

    public function count_by_status($status)
    {
         if(@$_SESSION['role_name']=="Admin"){
                    return $this->db->where(['status' => $status])
                        ->from('car_list')
                        ->count_all_results();
         }else{

             return $this->db->where(['added_by' => @$_SESSION['user_id'],'status' => $status])
                             ->from('car_list')
                             ->count_all_results();
         }
    }


}
