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

   public function filter_vehicles($vehicle_type = '', $cat_id= '', $make = '', $model = '', $minYear = '', $maxYear = '', $min_price = '', $max_price = '', $minkm = '', $maxkm = '', $zipcode = '',  $variant = '', $fuel_type = '', $color = '', $mileage = '', $transmission = '', $vehicle_condition = '', $ownership = '', $euro_norm = '', $winter_tires = '', $ac_type = '', $parking_sensors = '', $comfort_and_interior = '',$safety_and_assistance = '' , $lighting_and_visibility = '', $multimedia_and_navigation = '', $engine_and_drive_technology = '', $exteriors = '', $other_features_and_extras = '', $limit = 5, $offset = 0) {

    $location = $this->session->userdata('location');
    
    if (!empty($location)) {
         $this->db->where('location', $location);
    }

      if(!empty($vehicle_type)) {
            $this->db->where('vehicle_type', $vehicle_type);
        }

        
      if(!empty($cat_id)) {
            $this->db->where('cat_id', $cat_id);
        }

        if(!empty($make)) {
            $this->db->where('make', $make);
        }

          if(!empty($model)) {
            $this->db->where('model', $model);
        }

         if(!empty($variant)) {
            $this->db->where('variant', $variant);
        }

             if(!empty($transmission)) {
            $this->db->where('transmission', $transmission);
        }

             if(!empty($fuel_type)) {
            $this->db->where('fuel_type', $fuel_type);
        }

        if(!empty($minYear)){

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

        if(!empty($color)) {
            $this->db->where('color', $color);
        }
        if(!empty($mileage)) {
             $this->db->where('mileage >=', $mileage);
        }
        if(!empty($vehicle_condition)) {
             $this->db->where('vehicle_condition', $vehicle_condition);
        }
        if(!empty($ownership)) {
             $this->db->where('ownership', $ownership);
        }
        if(!empty($euro_norm)) {
             $this->db->where('euro_norm', $euro_norm);
        }
        if(!empty($winter_tires)) {
             $this->db->where('winter_tires', $winter_tires);
        }
        if(!empty($ac_type)) {
             $this->db->where('ac_type', $ac_type);
        }
        if(!empty($parking_sensors)) {
             $this->db->where('parking_sensors', $parking_sensors);
        }

          if (is_numeric($zipcode)){
            $this->db->where('zipcode', $zipcode);       
        }

        
        if (!empty($comfort_and_interior) && is_array($comfort_and_interior)) {
            $this->db->group_start();
            foreach ($comfort_and_interior as $filter) {
                $this->db->or_like('comfort_and_interior', $filter);
            }
            $this->db->group_end();
        }
        if (!empty($safety_and_assistance) && is_array($safety_and_assistance)) {
            $this->db->group_start();
            foreach ($safety_and_assistance as $safety) {
                $this->db->or_like('safety_and_assistance', $safety);
            }
            $this->db->group_end();
        }
        if (!empty($lighting_and_visibility) && is_array($lighting_and_visibility)) {
            $this->db->group_start();
            foreach ($lighting_and_visibility as $lighting) {
                $this->db->or_like('lighting_and_visibility', $lighting);
            }
            $this->db->group_end();
        }

           if (!empty($multimedia_and_navigation) && is_array($multimedia_and_navigation)) {
            $this->db->group_start();
            foreach ($multimedia_and_navigation as $multimedia) {
                $this->db->or_like('multimedia_and_navigation', $multimedia);
            }
            $this->db->group_end();
        }

             if (!empty($engine_and_drive_technology) && is_array($engine_and_drive_technology)) {
            $this->db->group_start();
            foreach ($engine_and_drive_technology as $engine) {
                $this->db->or_like('engine_and_drive_technology', $engine);
            }
            $this->db->group_end();
        }


          if (!empty($exteriors) && is_array($exteriors)) {
            $this->db->group_start();
            foreach ($exteriors as $exterior) {
                $this->db->or_like('exterior_and_design', $exterior);
            }
            $this->db->group_end();
        }

          if (!empty($other_features_and_extras) && is_array($other_features_and_extras)) {
            $this->db->group_start();
            foreach ($other_features_and_extras as $other) {
                $this->db->or_like('other_features_and_extras', $other);
            }
            $this->db->group_end();
        }

          $this->db->limit($limit, $offset);

      $this->db->where('status',1);
    $query = $this->db->get('car_list');

    if ($query->num_rows() > 0) {
        return $query->result();
        // echo $this->db->last_query();die;
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


 public function is_favorited($user_id, $vehicle_id) {
        $this->db->where('user_id', $user_id);
        $this->db->where('vehicle_id', $vehicle_id);
        return $this->db->get('favorites')->num_rows() > 0;
    }


    public function toggle_favorite($user_id, $vehicle_id) {
        $this->db->where('user_id', $user_id);
        $this->db->where('vehicle_id', $vehicle_id);
        $query = $this->db->get('favorites');

        if ($query->num_rows() > 0) {
            // Already favorite, so remove
            $this->db->where('user_id', $user_id);
            $this->db->where('vehicle_id', $vehicle_id);
            $this->db->delete('favorites');
            return 'removed';
        } else {
            // Add to favorites
            $this->db->insert('favorites', [
                'user_id' => $user_id,
                'vehicle_id' => $vehicle_id
            ]);
            return 'added';
        }
    }


    //  public function getFavoritesByUser($user_id) {
    //     $this->db->select('f.*, v.title, v.price, v.image');
    //     $this->db->from('favorites f');
    //     $this->db->join('car_list v', 'f.vehicle_id = v.id');  // vehicle_id used here
    //     $this->db->where('f.user_id', $user_id);
    //     return $this->db->get()->result();
    // }


public function getFavoritesByUser($user_id) {
    $this->db->select('f.*, cl.title, cl.price, ci.photos');
    $this->db->from('favorites f');
    $this->db->join('car_list cl', 'f.vehicle_id = cl.id');
    $this->db->join(
        '(SELECT MIN(id) as id, car_list_id, photos FROM car_img GROUP BY car_list_id) ci',
        'f.vehicle_id = ci.car_list_id',
        'left'
    );
    $this->db->where('f.user_id', $user_id);
    return $this->db->get()->result();
}

public function get_new_vehicle() {
   $this->db->order_by('created_at', 'DESC');
$this->db->limit(5);
$query = $this->db->get('car_list');
$result = $query->result();
return $result;
}


public function count_filtered_vehicles($vehicle_type = '', $cat_id= '', $make = '', $model = '', $minYear = '', $maxYear = '', $min_price = '', $max_price = '', $minkm = '', $maxkm = '', $zipcode = '',  $variant = '', $fuel_type = '', $color = '', $mileage = '', $transmission = '', $vehicle_condition = '', $ownership = '', $euro_norm = '', $winter_tires = '', $ac_type = '', $parking_sensors = '', $comfort_and_interior = '', $safety_and_assistance = '' , $lighting_and_visibility = '', $multimedia_and_navigation = '', $engine_and_drive_technology = '', $exteriors = '', $other_features_and_extras = '')
{
    // Same filters as filter_vehicles
    $location = $this->session->userdata('location');
    
    if (!empty($location)) {
         $this->db->where('location', $location);
    }

    if(!empty($vehicle_type)) {
        $this->db->where('vehicle_type', $vehicle_type);
    }

      if(!empty($cat_id)) {
            $this->db->where('cat_id', $cat_id);
        }

    if(!empty($make)) {
        $this->db->where('make', $make);
    }

    if(!empty($model)) {
        $this->db->where('model', $model);
    }

    if(!empty($variant)) {
        $this->db->where('variant', $variant);
    }

    if(!empty($transmission)) {
        $this->db->where('transmission', $transmission);
    }

    if(!empty($fuel_type)) {
        $this->db->where('fuel_type', $fuel_type);
    }

    if(!empty($minYear)) {
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

    if(!empty($color)) {
        $this->db->where('color', $color);
    }

    if(!empty($mileage)) {
        $this->db->where('mileage >=', $mileage);
    }

    if(!empty($vehicle_condition)) {
        $this->db->where('vehicle_condition', $vehicle_condition);
    }

    if(!empty($ownership)) {
        $this->db->where('ownership', $ownership);
    }

    if(!empty($euro_norm)) {
        $this->db->where('euro_norm', $euro_norm);
    }

    if(!empty($winter_tires)) {
        $this->db->where('winter_tires', $winter_tires);
    }

    if(!empty($ac_type)) {
        $this->db->where('ac_type', $ac_type);
    }

    if(!empty($parking_sensors)) {
        $this->db->where('parking_sensors', $parking_sensors);
    }

    if (is_numeric($zipcode)){
        $this->db->where('zipcode', $zipcode);       
    }

    // Multi-checkbox filters (like JSON fields)
    
    if (!empty($comfort_and_interior)) {
        $this->db->group_start();
        foreach ($comfort_and_interior as $filter) {
            $this->db->or_like('comfort_and_interior', $filter);
        }
        $this->db->group_end();
    }

    if (!empty($safety_and_assistance)) {
        $this->db->group_start();
        foreach ($safety_and_assistance as $safety) {
            $this->db->or_like('safety_and_assistance', $safety);
        }
        $this->db->group_end();
    }

    if (!empty($lighting_and_visibility)) {
        $this->db->group_start();
        foreach ($lighting_and_visibility as $lighting) {
            $this->db->or_like('lighting_and_visibility', $lighting);
        }
        $this->db->group_end();
    }

    if (!empty($multimedia_and_navigation)) {
        $this->db->group_start();
        foreach ($multimedia_and_navigation as $multimedia) {
            $this->db->or_like('multimedia_and_navigation', $multimedia);
        }
        $this->db->group_end();
    }

    if (!empty($engine_and_drive_technology)) {
        $this->db->group_start();
        foreach ($engine_and_drive_technology as $engine) {
            $this->db->or_like('engine_and_drive_technology', $engine);
        }
        $this->db->group_end();
    }

    if (!empty($exteriors)) {
        $this->db->group_start();
        foreach ($exteriors as $exterior) {
            $this->db->or_like('exterior_and_design', $exterior);
        }
        $this->db->group_end();
    }

    if (!empty($other_features_and_extras)) {
        $this->db->group_start();
        foreach ($other_features_and_extras as $other) {
            $this->db->or_like('other_features_and_extras', $other);
        }
        $this->db->group_end();
    }

    $this->db->where('status', 1);

    return $this->db->count_all_results('car_list');
}


public function getCategories()
{
    $this->db->select('c.id, c.name, c.img');
    $this->db->from('categories c');
    $this->db->join('car_list cl', 'cl.cat_id = c.id');
    $this->db->group_by('c.id');
    $query = $this->db->get();
    return $query->result();
}

public function insertReview($data) {
    return $this->db->insert('reviews', $data);
}

}