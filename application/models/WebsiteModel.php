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
        $filters = $this->input->get();
    $location = $this->session->userdata('location');
    
    if (!empty($location)) {
        $this->db->where('location', $location);
    }

    // 

         if (!empty($filters['make']) && $filters['make'] !== 'Any') {
        $this->db->where('make', $filters['make']);
    }
    if (!empty($filters['model']) && $filters['model'] !== 'Any') {
        $this->db->where('model', $filters['model']);
    }
    if (!empty($filters['year']) && $filters['year'] !== 'Any') {
        $this->db->where('year >=', $filters['year']);
    }
    if (!empty($filters['km']) && $filters['km'] !== 'Any') {
        $this->db->where('km <=', str_replace(',', '', $filters['km']));
    }
    if (!empty($filters['price']) && $filters['price'] !== 'Any') {
        $this->db->where('price <=', str_replace(',', '', $filters['price']));
    }
    // 


          return $this->db->get('car_list')->result();
    

    
 }

   public function filter_vehicles($make = '', $model = '', $fuel_type = '', $transmission = '', $minYear = '', $maxYear = '', $min_price = '', $max_price = '', $minkm = '', $maxkm = '', $zipcode = '', $vehicle_type = '') {

    $location = $this->session->userdata('location');
    
    if (!empty($location)) {
         $this->db->where('location', $location);
    }

      if(!empty($vehicle_type)) {
            $this->db->where('vehicle_type', $vehicle_type);
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

        if(!empty($minYear)){

            
                    $this->db->where('year >=', $minYear);
                    // $this->db->where('year <=', $maxYear);
        }

        //    if (is_numeric($min_price) && is_numeric($max_price)){
            if (is_numeric($min_price)){
            
                    $this->db->where('price', $min_price);
                    // $this->db->where('price >=', $min_price);
                    // $this->db->where('price <=', $max_price);
        }

        //    if (is_numeric($minkm) && is_numeric($maxkm)){
           if (is_numeric($maxkm)){

            
                    $this->db->where('km >=', $maxkm);
                    // $this->db->where('km >=', $minkm);
                    // $this->db->where('km <=', $maxkm);
        }

          if (is_numeric($zipcode)){

            
                    $this->db->where('zipcode', $zipcode);
                   
        }
      
    $query = $this->db->get('car_list');

    if ($query->num_rows() > 0) {
        return $query->result();
    } else {
        return false; // Or return ['message' => 'Data not found'];
    }

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