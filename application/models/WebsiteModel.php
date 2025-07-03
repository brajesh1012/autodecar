<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WebsiteModel extends CI_Model {

	public function insert($data) {
        return $this->db->insert('users', $data);
    }


    public function get_user_by_email($email) {
        return $this->db->where('email', $email)->get('users')->row();
    }

        public function get_data_by_id($id, $table) {
        return $this->db->where('id', $id)->get($table)->row();
    }

            public function get_data_by($field, $value, $table) {
        return $this->db->where($field, $value)->get($table)->row();
    }

    public function get_vehicle() {
    $location = $this->session->userdata('location');
    
    if (!empty($location)) {
        return $this->db->where('location', $location)->get('car_list')->result();
    }else{
          return $this->db->get('car_list')->result();
    }

    
 }

   public function filter_vehicles($make = '', $model = '', $fuel_type = '', $transmission = '', $minYear = '', $maxYear = '', $min_price = '', $max_price = '', $minkm = '', $maxkm = '') {

    $location = $this->session->userdata('location');
    
    if (!empty($location)) {
         $this->db->where('location', $location);
    }

        if(!empty($make)) {
            $this->db->where('make', $make);
        }

          if(!empty($model)) {
            $this->db->where('model', $model);
        }

             if(!empty($transmission)) {
            $this->db->where('transmission', $transmission);
        }

             if(!empty($fuel_type)) {
            $this->db->where('fuel_type', $fuel_type);
        }

        if(!empty($minYear) && !empty($maxYear)){

            
                    $this->db->where('year >=', $minYear);
                    $this->db->where('year <=', $maxYear);
        }

           if (is_numeric($min_price) && is_numeric($max_price)){

            
                    $this->db->where('price >=', $min_price);
                    $this->db->where('price <=', $max_price);
        }

           if (is_numeric($minkm) && is_numeric($maxkm)){

            
                    $this->db->where('km >=', $minkm);
                    $this->db->where('km <=', $maxkm);
        }

        return $this->db->get('car_list')->result();


    }


// public function get_vehicle() {
//     $location = $this->session->userdata('location');

//     $make         = $this->input->get('make');
//     $model        = $this->input->get('model');
//     $fuel_type    = $this->input->get('fuel_type');
//     $transmission = $this->input->get('transmission');

//     if (!empty($location)) {
//         $this->db->where('location', $location);
//     }
//     if (!empty($make)) {
//         $this->db->where('make', $make);
//     }
//     if (!empty($model)) {
//         $this->db->where('model', $model);
//     }
//     if (!empty($fuel_type)) {
//         $this->db->where('fuel_type', $fuel_type);
//     }
//     if (!empty($transmission)) {
//         $this->db->where('transmission', $transmission);
//     }

//     return $this->db->get('car_list')->result();
// }


 public function get_data($table) {

     return $this->db->get($table)->result();

 }

}