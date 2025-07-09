<?php
defined("BASEPATH") or exit("No direct script access allowed");

class AdminController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("AdminModel");
        $this->load->model("WebsiteModel");
		$this->load->model("Common_model");
        $this->load->helper("permission");
        $this->load->helper("subscription");
    }

    public function index()
    {
        // if (!has_permission("Dashboard")) {
        //     show_error("Unauthorized access");
        // }
		// hello test

              if (!isset($_SESSION['role_name'])) {
                redirect(base_url()); // or homepage
            }

            if ($_SESSION["role_name"] == "Buyer") {
                redirect(base_url());
            }

            $status = $this->input->post('post_status');

        $data['current_status'] = $status; 

                $data['total']         = $this->Common_model->count_all();
                $data['under_review']  = $this->Common_model->count_by_status(0);
                $data['active']        = $this->Common_model->count_by_status(1);
                $data['reserved']      = $this->Common_model->count_by_status(2);
                $data['sold']          = $this->Common_model->count_by_status(3);
                $data['expired']       = $this->Common_model->count_by_status(4);
                if(@$_SESSION["role_name"] == "Admin"){

                    $data["details"] = $this->AdminModel->get_data("car_list", $status);
                }else{

                    $where = ['added_by' => $this->session->userdata('user_id')];

                    if ($status !== null && $status !== '' && $status !== 'all') {
                        $where['status'] = $status; // add status to where condition
                    }

                      $data["details"] = $this->Common_model->get_vehicle_list_by_user("car_list", $where ,"id DESC");
                    }
            $data["main"] = "dashboard";
            $this->load->view("admin/template", $data);
      
        
    }

    public function my_listing()
    {
        // if (!has_permission("Car List")) {
        //     show_error("Unauthorized access");
        // }
      
            if (!isset($_SESSION['role_name'])) {
                redirect(base_url()); // or homepage
            }

            if ($_SESSION["role_name"] == "Buyer") {
                redirect(base_url());
            }

        $status = $this->input->post('post_status');

        $data['current_status'] = $status; 

        if($_SESSION["role_name"] == "Admin"){

             $data["details"] = $this->AdminModel->get_data("car_list", $status);
        }else{

            $where = ['added_by' => $this->session->userdata('user_id')];

            if ($status !== null && $status !== '' && $status !== 'all') {
             $where['status'] = $status; // add status to where condition
        }

               $data["details"] = $this->Common_model->get_vehicle_list_by_user("car_list", $where ,"id DESC");
         }

        $data["main"] = "my-listing";
        $this->load->view("admin/template", $data);
    }



     public function users_list()
    {
        // if (!has_permission("Car List")) {
        //     show_error("Unauthorized access");
        // }

       
             if (!isset($_SESSION['role_name'])) {
                redirect(base_url()); // or homepage
            }

            if ($_SESSION["role_name"] == "Buyer") {
                redirect(base_url());
            }


         $data["users"] = $this->Common_model->getAllwhere('users',["role !=" => 1], 'id DESC');

        $data["main"] = "users";
        $this->load->view("admin/template", $data);
    }





    public function my_favorite()
    {
        
              if (!isset($_SESSION['role_name'])) {
                redirect(base_url()); // or homepage
            }

            if ($_SESSION["role_name"] == "Buyer") {
                redirect(base_url());
            }


        $data["main"] = "my-favorite";
        $this->load->view("admin/template", $data);
    }

    public function message()
    {
            if (!isset($_SESSION['role_name'])) {
                redirect(base_url()); // or homepage
            }

            if ($_SESSION["role_name"] == "Buyer") {
                redirect(base_url());
            }

        $data["main"] = "message";
        $this->load->view("admin/template", $data);
    }

    public function my_review()
    {
            if (!isset($_SESSION['role_name'])) {
                redirect(base_url()); // or homepage
            }

            if ($_SESSION["role_name"] == "Buyer") {
                redirect(base_url());
            } 

            $data["main"] = "my-review";
            $this->load->view("admin/template", $data);
    }


      public function my_profile()
    
    {
      if (!isset($_SESSION['role_name'])) {
                redirect(base_url()); // or homepage
            }

            if ($_SESSION["role_name"] == "Buyer") {
                redirect(base_url());
            }


         $this->form_validation->set_rules("username", "User Name", "required");
        $this->form_validation->set_rules("mobile", "Mobile", "required");
        $this->form_validation->set_rules("email", "Email", "required");
		
        if ($this->form_validation->run() == false) {	
            
         $data["profile"] = $this->Common_model->getsingle('users', array('id' => $this->session->userdata('user_id')));
        $data["main"] = "my-profile";
        $this->load->view("admin/template", $data);

        } else {
			
			$id = $this->session->userdata('user_id');

        // Upload Profile Image
             $old_image = $this->input->post('old_image');
             $profile_image = $old_image;

        if (!empty($_FILES['profile']['name'])) {
            $config['upload_path'] = './uploads/profile/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048;
            $config['file_name'] = time() . '_' . $_FILES['profile']['name'];

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('profile')) {
                $uploadData = $this->upload->data();
                $profile_image = $uploadData['file_name'];
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect(ADMIN_PATH  . "/my-profile");
            }
        }

            $data = [
                "username" => $this->input->post("username"),
                "mobile" => $this->input->post("mobile"),
                "email" => $this->input->post("email"),
                 'profile'  => $profile_image
            ];
            

			$user_data = $this->Common_model->updateData('users',$data, array('id' => $id));

            $this->session->set_flashdata(
                "success",
                "User updated successfully!"
            );
            redirect(ADMIN_PATH  . "/my-profile");
        }

    }


    public function change_password()
    {
            if (!isset($_SESSION['role_name'])) {
                redirect(base_url()); // or homepage
            }

            if ($_SESSION["role_name"] == "Buyer") {
                redirect(base_url());
            }

         $this->form_validation->set_rules("password", "Password", "required");
        $this->form_validation->set_rules("new_password", "New Password", "required|min_length[8]");
        $this->form_validation->set_rules(
            "confirm_password",
            "Confirm Password",
            "required|matches[new_password]"
        );
		
		  if ($this->form_validation->run() == FALSE) {
         $data["main"] = "change-password";
        $this->load->view("admin/template", $data);
    } else {
        $current_password = $this->input->post('password');
        $new_password = $this->input->post('new_password');
        $user_id = $this->session->userdata('user_id');
        $user = $this->db->get_where('users', ['id' => $user_id])->row();

        if ($user) {
            if (password_verify($current_password, $user->password)) {
                if (password_verify($new_password, $user->password)) {
                    $this->session->set_flashdata('error', 'New password cannot be the same as the current password.');
                    redirect(ADMIN_PATH  . '/change-password');
                }

                $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
                $this->db->where('id', $user_id)->update('users', ['password' => $hashed_password]);

                $this->session->set_flashdata('success', 'Password changed successfully.');
                redirect(ADMIN_PATH  . '/change-password'); 

            } else {
                $this->session->set_flashdata('error', 'Incorrect current password.');
                redirect(ADMIN_PATH  . '/change-password');
            }
        } else {
            $this->session->set_flashdata('error', 'User not found.');
            redirect(ADMIN_PATH  . '/change-password');
        }
    }
    }

    public function add_listing1()
    {
           if (!isset($_SESSION['role_name'])) {
                redirect(base_url()); // or homepage
            }

            if ($_SESSION["role_name"] == "Buyer") {
                redirect(base_url());
            }

        $data["makes"] = $this->WebsiteModel->get_data("make");
        $data["models"] = $this->WebsiteModel->get_data("model");
        $data["fuel_types"] = $this->WebsiteModel->get_data("fuel_type");
        $data["transmissions"] = $this->WebsiteModel->get_data("transmission");
        $data["cities"] = $this->AdminModel->get_data("cities");
        $data["main"] = "add-listing";
        $this->load->view("admin/template", $data);
    }

    public function add_listing()
    {

            if (!isset($_SESSION['role_name'])) {
                redirect(base_url()); // or homepage
            }

            if ($_SESSION["role_name"] == "Buyer") {
                redirect(base_url());
            }

              
          
             $user_id = $_SESSION['user_id'];

        $this->form_validation->set_rules("title", "Title", "required");
        $this->form_validation->set_rules("vehicle_type", "Vehicle Type", "required");
        // $this->form_validation->set_rules("cat_id", "Category", "required");
        $this->form_validation->set_rules("make", "Make By", "required");
        $this->form_validation->set_rules("model", "Model", "required");
        $this->form_validation->set_rules("variant", "variant", "required");
        $this->form_validation->set_rules("color", "Color", "required");
        $this->form_validation->set_rules("ownership", "Ownership", "required");
        $this->form_validation->set_rules("euro_norm", "Euro Norm", "required");
        $this->form_validation->set_rules("co2_emission", "co2 Emission", "required");
        $this->form_validation->set_rules("is_negotiable", "Is Price Negotiable", "required");
        $this->form_validation->set_rules("state", "Canton", "required");
        $this->form_validation->set_rules("zipcode", "Zipcode", "required");
        // $this->form_validation->set_rules("mfk_date", "MFk", "required");
        // $this->form_validation->set_rules("tuv_date", "TUV", "required");

        $this->form_validation->set_rules("year", "Year", "required|numeric");
        $this->form_validation->set_rules("mileage", "Mileage", "required");
        $this->form_validation->set_rules(
            "vehicle_condition",
            "Vehicle Condition",
            "required"
        );
        $this->form_validation->set_rules("price", "Price", "required");
        $this->form_validation->set_rules("fuel_type", "Fuel Type", "required");
        $this->form_validation->set_rules(
            "transmission",
            "Transmission",
            "required"
        );
        $this->form_validation->set_rules("location", "Location", "required");
        $this->form_validation->set_rules("km", "Kilo Meter", "required");
        $this->form_validation->set_rules(
            "description",
            "Description",
            "required"
        );

        if ($this->form_validation->run() == false) {
            $data["categories"] = $this->WebsiteModel->get_data("categories");
            $data["makes"] = $this->WebsiteModel->get_data("make");
            $data["models"] = $this->WebsiteModel->get_data("model");
            $data["variants"] = $this->WebsiteModel->get_data("variants");
            $data["colors"] = $this->WebsiteModel->get_data("vehicle_color");
            $data["fuel_types"] = $this->WebsiteModel->get_data("fuel_type");
            $data["transmissions"] = $this->WebsiteModel->get_data(
                "transmission"
            );
            $data["vehicle_types"] = $this->AdminModel->get_data("vehicle_type");
            $data["cities"] = $this->AdminModel->get_data("cities");
            $data["states"] = $this->AdminModel->get_data("states");


            $data["comforts"] = $this->AdminModel->get_data("comfort_and_interior");
            $data["safety_and_assistance"] = $this->AdminModel->get_data("safety_and_assistance");
            $data["lighting_and_visibility"] = $this->AdminModel->get_data("lighting_and_visibility");


            $data["multimedia_and_navigation"] = $this->AdminModel->get_data("multimedia_and_navigation");
            $data["engine_and_drive_technology"] = $this->AdminModel->get_data("engine_and_drive_technology");
            $data["exterior_and_design"] = $this->AdminModel->get_data("exterior_and_design");


            $data["other_features_and_extras"] = $this->AdminModel->get_data("other_features_and_extras");

            // 

            if($_SESSION["role_name"] != "Admin"){
                    // Allow first vehicle without subscription
                    $vehicle_count = $this->db->where('added_by', $user_id)->count_all_results('car_list');
                    if ($vehicle_count == 0) {
                          $data["main"] = "add-listing";
                           $this->load->view("admin/template", $data);
                        return;
                    }

                    // Check subscription
                    $sub = $this->db->where('user_id', $user_id)
                        ->where('end_date >=', date('Y-m-d'))
                        ->get('user_subscriptions')->row();

                    if ($sub) {
                        if ($sub->listings_used < get_plan_limit($sub->plan_id)) {
                               $data["main"] = "add-listing";
                                 $this->load->view("admin/template", $data);
                        } else {
                            $this->session->set_flashdata('error', 'You have used all your listings. Please upgrade your plan.');
                            redirect(ADMIN_PATH  . '/add-plan');
                        }
                    } else {
                        $this->session->set_flashdata('error', 'Please purchase a subscription to add more vehicles.');
                        redirect(ADMIN_PATH  . '/add-plan');
                    }
                }else{

                    $data["main"] = "add-listing";
                    $this->load->view("admin/template", $data);

                }

            // 

        } else {
            $title = $this->input->post('title');
			$slug = url_title($title, 'dash', TRUE);
			$checkSlug = $this->Common_model->getsingle('car_list', array('slug' => $slug));
			if ($checkSlug) 
			{
				for ($i = 1; $i <= 99999; $i++) 
				{
					$rand = rand(11, 99);
					$newSlug = $slug . '-' . $rand;
					$checkNewSlug = $this->Common_model->getsingle('car_list', array('slug' => $newSlug));
					if (!$checkNewSlug) {
						$slug = $newSlug;
						break; 
					}
				}
			}

			
            // Photo Upload Logic (optional)
            $photos = [];
            if (!empty($_FILES["photos"]["name"][0])) {
                $filesCount = count($_FILES["photos"]["name"]);
                for ($i = 0; $i < $filesCount; $i++) {
                    $_FILES["file"]["name"] = $_FILES["photos"]["name"][$i];
                    $_FILES["file"]["type"] = $_FILES["photos"]["type"][$i];
                    $_FILES["file"]["tmp_name"] =
                        $_FILES["photos"]["tmp_name"][$i];
                    $_FILES["file"]["error"] = $_FILES["photos"]["error"][$i];
                    $_FILES["file"]["size"] = $_FILES["photos"]["size"][$i];

                    $config["upload_path"] = "./uploads/";
                    $config["allowed_types"] = "jpg|jpeg|png";
                    $config["file_name"] =
                        time() . "_" . $_FILES["file"]["name"];

                    $this->load->library("upload", $config);

                    if ($this->upload->do_upload("file")) {
                        $uploadData = $this->upload->data();
                        $photos[] = $uploadData["file_name"];
                    }
                }
            }


            // Emission Certificate Upload
                $emission_certificate = '';
                if (!empty($_FILES['emission_certificate']['name'])) {
                    $_FILES["file"]["name"] = $_FILES["emission_certificate"]["name"];
                    $_FILES["file"]["type"] = $_FILES["emission_certificate"]["type"];
                    $_FILES["file"]["tmp_name"] = $_FILES["emission_certificate"]["tmp_name"];
                    $_FILES["file"]["error"] = $_FILES["emission_certificate"]["error"];
                    $_FILES["file"]["size"] = $_FILES["emission_certificate"]["size"];

                    $config["upload_path"] = "./uploads/emission_certificates/";
                    $config["allowed_types"] = "pdf";
                    $config["file_name"] = time() . "_" . $_FILES["file"]["name"];

                    // Make sure the directory exists
                    if (!is_dir($config["upload_path"])) {
                        mkdir($config["upload_path"], 0777, true);
                    }

                    $this->load->library("upload", $config);

                    if ($this->upload->do_upload("file")) {
                        $uploadData = $this->upload->data();
                        $emission_certificate = $uploadData["file_name"];
                    }
                }

              


                  $comfort_and_interior = $this->input->post("comfort_and_interior");
                $comfort_and_interior_json = !empty($comfort_and_interior) ? json_encode($comfort_and_interior) : json_encode([]);

                 $safety_and_assistance = $this->input->post("safety_and_assistance");
                $safety_and_assistance_json = !empty($safety_and_assistance) ? json_encode($safety_and_assistance) : json_encode([]);

                 $lighting_and_visibility = $this->input->post("lighting_and_visibility");
                $lighting_and_visibility_json = !empty($lighting_and_visibility) ? json_encode($lighting_and_visibility) : json_encode([]);

                 $multimedia_and_navigation = $this->input->post("multimedia_and_navigation");
                $multimedia_and_navigation_json = !empty($multimedia_and_navigation) ? json_encode($multimedia_and_navigation) : json_encode([]);

                $engine_and_drive_technology = $this->input->post("engine_and_drive_technology");
                $engine_and_drive_technology_json = !empty($engine_and_drive_technology) ? json_encode($engine_and_drive_technology) : json_encode([]);

                $exterior = $this->input->post("exterior");
                $exterior_json = !empty($exterior) ? json_encode($exterior) : json_encode([]);

                $other_features = $this->input->post("other_features_and_extras");
                $other_features_json = !empty($other_features) ? json_encode($other_features) : json_encode([]);


                $price = $this->input->post("price");

            if($_SESSION["role_name"] == 'Dealer') {
                $tax = 7.7; // 7.7% (VAT = Value Added Tax)
                $vat_rate = $tax/100; // 0.077 
                $vat_amount = $price * $vat_rate;
                $total_price = $price + $vat_amount;
            } else {
                $vat_amount = 0;
                $total_price = $price; // ya zero if private user ko free listing dena ho
            }


            $tuv_date_raw = $this->input->post("tuv_date"); // This will be '2025-07-07'

            if (!empty($tuv_date_raw)) {
                $tuv_date = date('m/y', strtotime($tuv_date_raw)); // Output: 07/25
            } else {
                $tuv_date = null;
            }



             $mfk_date_raw = $this->input->post("mfk_date"); // This will be '2025-07-07'

            if (!empty($mfk_date_raw)) {
                $mfk_date = date('m/y', strtotime($tuv_date_raw)); // Output: 07/25
            } else {
                $mfk_date = null;
            }


            $data = [
				"slug" => $slug,
                "title" => $this->input->post("title"),
                "vehicle_type" => $this->input->post("vehicle_type"),
                "cat_id" => $this->input->post("cat_id"),
                "make" => $this->input->post("make"),
                "model" => $this->input->post("model"),
                "variant" => $this->input->post("variant"),
                "color" => $this->input->post("color"),
                "year" => $this->input->post("year"),
                "mileage" => $this->input->post("mileage"),
                "vehicle_condition" => $this->input->post("vehicle_condition"),

                "price" => $price,
                "total_price" => $total_price,
                "tax" => $vat_amount ?? '' ,
                "is_negotiable" => $this->input->post("is_negotiable"),

                "fuel_type" => $this->input->post("fuel_type"),
                "transmission" => $this->input->post("transmission"),
                "location" => $this->input->post("location"),
                "description" => $this->input->post("description"),
                "km" => $this->input->post("km"),

                "ownership" => $this->input->post("ownership"),
                "euro_norm" => $this->input->post("euro_norm"),
                "co2_emission" => $this->input->post("co2_emission"),

                "state" => $this->input->post("state"),
                "zipcode" => $this->input->post("zipcode"),


                "winter_tires" => $this->input->post("winter_tires")  ?? '',
                "ac_type" => $this->input->post("ac_type") ?? '',
                "four_by_four" => $this->input->post("4x4") ?? '',
                "navigation_system" => $this->input->post("navigation_system") ?? '',
                "parking_sensors" => $this->input->post("parking_sensors") ?? '',


                "mfk_date" => $mfk_date ?? '',
                "tuv_date" =>  $tuv_date ?? '',

                "emission_certificate" => $emission_certificate ?? '',
                "added_by" => $this->session->userdata('user_id'),

                "comfort_and_interior" => $comfort_and_interior_json,
                "safety_and_assistance" => $safety_and_assistance_json,
                "lighting_and_visibility" => $lighting_and_visibility_json,
                "multimedia_and_navigation" => $multimedia_and_navigation_json,
                "engine_and_drive_technology" => $engine_and_drive_technology_json,
                "exterior_and_design" => $exterior_json,
                "other_features_and_extras" => $other_features_json,
                // 'photos' => json_encode($photos)
            ];
            $this->db->insert("car_list", $data); // Save to database
            $last_id = $this->db->insert_id(); // Get last inserted ID


            if (!empty($photos)) {
                foreach ($photos as $photo) {
                    $car_img = [
                        "car_list_id" => $last_id,
                        "photos" => $photo,
                    ];
                    $this->db->insert("car_img", $car_img);
                }
            }

            if( $_SESSION["role_name"] != "admin"){

                $this->db->set('listings_used', 'listings_used+1', false)
                ->where('user_id', $user_id)
                ->update('user_subscriptions');

            }


            // Example saving to DB
            // $this->Vehicle_model->insert($data);

            $this->session->set_flashdata(
                "success",
                "Vehicle added successfully!"
            );
            redirect(ADMIN_PATH . "/my-listing");
        }
    }
	
	public function edit_listing($id)
    {
              
        if (!isset($_SESSION['role_name'])) {
                redirect(base_url()); // or homepage
            }

            if ($_SESSION["role_name"] == "Buyer") {
                redirect(base_url());
            }

        $this->form_validation->set_rules("title", "Title", "required");
        $this->form_validation->set_rules("vehicle_type", "Vehicle Type", "required");
        $this->form_validation->set_rules("make", "Make By", "required");
        $this->form_validation->set_rules("model", "Model", "required");
        $this->form_validation->set_rules("variant", "variant", "required");
        $this->form_validation->set_rules("color", "Color", "required");
        $this->form_validation->set_rules("ownership", "Ownership", "required");
        $this->form_validation->set_rules("euro_norm", "Euro Norm", "required");
        $this->form_validation->set_rules("co2_emission", "co2 Emission", "required");
        $this->form_validation->set_rules("is_negotiable", "Is Price Negotiable", "required");
        $this->form_validation->set_rules("state", "Canton", "required");
        $this->form_validation->set_rules("zipcode", "Zipcode", "required");
        $this->form_validation->set_rules("mfk_date", "MFk", "required");
        $this->form_validation->set_rules("tuv_date", "TUV", "required");

        $this->form_validation->set_rules("year", "Year", "required|numeric");
        $this->form_validation->set_rules("mileage", "Mileage", "required");
        $this->form_validation->set_rules(
            "vehicle_condition",
            "Vehicle Condition",
            "required"
        );
        $this->form_validation->set_rules("price", "Price", "required");
        $this->form_validation->set_rules("fuel_type", "Fuel Type", "required");
        $this->form_validation->set_rules(
            "transmission",
            "Transmission",
            "required"
        );
        $this->form_validation->set_rules("location", "Location", "required");
        $this->form_validation->set_rules("km", "Kilo Meter", "required");
        $this->form_validation->set_rules(
            "description",
            "Description",
            "required"
        );
		
		$data["cars"] = $cars = $this->Common_model->getsingle('car_list', array('id' => $id));
		$slug = $cars->slug;
		// $oldmake = $cars->make;
		$oldtitle = $cars->title;
		
        if ($this->form_validation->run() == false) {

             $data["makes"] = $this->WebsiteModel->get_data("make");
            $data["models"] = $this->WebsiteModel->get_data("model");
            $data["variants"] = $this->WebsiteModel->get_data("variants");
            $data["colors"] = $this->WebsiteModel->get_data("vehicle_color");
            $data["fuel_types"] = $this->WebsiteModel->get_data("fuel_type");
            $data["transmissions"] = $this->WebsiteModel->get_data(
                "transmission"
            );
            $data["vehicle_types"] = $this->AdminModel->get_data("vehicle_type");
            $data["cities"] = $this->AdminModel->get_data("cities");
            $data["states"] = $this->AdminModel->get_data("states");


             $data["comforts"] = $this->AdminModel->get_data("comfort_and_interior");
            $data["safety_and_assistance"] = $this->AdminModel->get_data("safety_and_assistance");
            $data["lighting_and_visibility"] = $this->AdminModel->get_data("lighting_and_visibility");


            $data["multimedia_and_navigation"] = $this->AdminModel->get_data("multimedia_and_navigation");
            $data["engine_and_drive_technology"] = $this->AdminModel->get_data("engine_and_drive_technology");
            $data["exterior_and_design"] = $this->AdminModel->get_data("exterior_and_design");


            $data["other_features_and_extras"] = $this->AdminModel->get_data("other_features_and_extras");


            $data["main"] = "edit-listing";
            $this->load->view("admin/template", $data);
        } else {
			
			// $make = $this->input->post('make');
			// if($make != $oldmake OR $slug == '')
			// {
			// 	$slug = url_title($make, 'dash', TRUE);
			// 	$checkSlug = $this->Common_model->getsingle('car_list', array('slug' => $slug));
			// 	if ($checkSlug) 
			// 	{
			// 		for ($i = 1; $i <= 99999; $i++) 
			// 		{
			// 			$rand = rand(11, 99);
			// 			$newSlug = $slug . '-' . $rand;
			// 			$checkNewSlug = $this->Common_model->getsingle('car_list', array('slug' => $newSlug));
			// 			if (!$checkNewSlug) {
			// 				$slug = $newSlug;
			// 				break; 
			// 			}
			// 		}
			// 	}
			// }


            $title = $this->input->post('title');
			if($title != $oldtitle OR $slug == '')
			{
				$slug = url_title($title, 'dash', TRUE);
				$checkSlug = $this->Common_model->getsingle('car_list', array('slug' => $slug));
				if ($checkSlug) 
				{
					for ($i = 1; $i <= 99999; $i++) 
					{
						$rand = rand(11, 99);
						$newSlug = $slug . '-' . $rand;
						$checkNewSlug = $this->Common_model->getsingle('car_list', array('slug' => $newSlug));
						if (!$checkNewSlug) {
							$slug = $newSlug;
							break; 
						}
					}
				}
			}

			
            // Photo Upload Logic (optional)
            $photos = [];
            if (!empty($_FILES["photos"]["name"][0])) {
                $filesCount = count($_FILES["photos"]["name"]);
                for ($i = 0; $i < $filesCount; $i++) {
                    $_FILES["file"]["name"] = $_FILES["photos"]["name"][$i];
                    $_FILES["file"]["type"] = $_FILES["photos"]["type"][$i];
                    $_FILES["file"]["tmp_name"] =
                        $_FILES["photos"]["tmp_name"][$i];
                    $_FILES["file"]["error"] = $_FILES["photos"]["error"][$i];
                    $_FILES["file"]["size"] = $_FILES["photos"]["size"][$i];

                    $config["upload_path"] = "./uploads/";
                    $config["allowed_types"] = "jpg|jpeg|png";
                    $config["file_name"] =
                        time() . "_" . $_FILES["file"]["name"];

                    $this->load->library("upload", $config);

                    if ($this->upload->do_upload("file")) {
                        $uploadData = $this->upload->data();
                        $photos[] = $uploadData["file_name"];
                    }
                }
            }


            // Emission Certificate Upload
                $emission_certificate = '';
                if (!empty($_FILES['emission_certificate']['name'])) {
                    $_FILES["file"]["name"] = $_FILES["emission_certificate"]["name"];
                    $_FILES["file"]["type"] = $_FILES["emission_certificate"]["type"];
                    $_FILES["file"]["tmp_name"] = $_FILES["emission_certificate"]["tmp_name"];
                    $_FILES["file"]["error"] = $_FILES["emission_certificate"]["error"];
                    $_FILES["file"]["size"] = $_FILES["emission_certificate"]["size"];

                    $config["upload_path"] = "./uploads/emission_certificates/";
                    $config["allowed_types"] = "pdf";
                    $config["file_name"] = time() . "_" . $_FILES["file"]["name"];

                    // Make sure the directory exists
                    if (!is_dir($config["upload_path"])) {
                        mkdir($config["upload_path"], 0777, true);
                    }

                    $this->load->library("upload", $config);

                    if ($this->upload->do_upload("file")) {
                        $uploadData = $this->upload->data();
                        $emission_certificate = $uploadData["file_name"];
                    }
                }else{
                    $emission_certificate = $this->input->post("old_emission_certificate");
                }



                $comfort_and_interior = $this->input->post("comfort_and_interior");
                $comfort_and_interior_json = !empty($comfort_and_interior) ? json_encode($comfort_and_interior) : json_encode([]);

                 $safety_and_assistance = $this->input->post("safety_and_assistance");
                $safety_and_assistance_json = !empty($safety_and_assistance) ? json_encode($safety_and_assistance) : json_encode([]);

                 $lighting_and_visibility = $this->input->post("lighting_and_visibility");
                $lighting_and_visibility_json = !empty($lighting_and_visibility) ? json_encode($lighting_and_visibility) : json_encode([]);

                 $multimedia_and_navigation = $this->input->post("multimedia_and_navigation");
                $multimedia_and_navigation_json = !empty($multimedia_and_navigation) ? json_encode($multimedia_and_navigation) : json_encode([]);

                $engine_and_drive_technology = $this->input->post("engine_and_drive_technology");
                $engine_and_drive_technology_json = !empty($engine_and_drive_technology) ? json_encode($engine_and_drive_technology) : json_encode([]);

                $exterior = $this->input->post("exterior");
                $exterior_json = !empty($exterior) ? json_encode($exterior) : json_encode([]);

                $other_features = $this->input->post("other_features_and_extras");
                $other_features_json = !empty($other_features) ? json_encode($other_features) : json_encode([]);
                
    
              // Assume vehicle info already loaded in $vehicle
                $old_price = $cars->price;
                $old_vat = $cars->tax;
                $new_price = $this->input->post('price');

                // Compare price to check if it changed
                if ($old_price != $new_price && $_SESSION["role_name"] == 'Dealer') {
                    $vat = ($new_price * 7.7) / 100;
                } else {
                    $vat = $old_vat; // Use old VAT if price is unchanged
                }

                $total_price = $new_price + $vat;
          
                
            $tuv_date_raw = $this->input->post("tuv_date"); // This will be '2025-07-07'

            if (!empty($tuv_date_raw)) {
                $tuv_date = date('m/y', strtotime($tuv_date_raw)); // Output: 07/25
            } else {
                $tuv_date = null;
            }



             $mfk_date_raw = $this->input->post("mfk_date"); // This will be '2025-07-07'

            if (!empty($mfk_date_raw)) {
                $mfk_date = date('m/y', strtotime($tuv_date_raw)); // Output: 07/25
            } else {
                $mfk_date = null;
            }

            
            $data = [
				"slug" => $slug,
                 "title" => $this->input->post("title"),
                "vehicle_type" => $this->input->post("vehicle_type"),
                "make" => $this->input->post("make"),
                "model" => $this->input->post("model"),
                "variant" => $this->input->post("variant"),
                "color" => $this->input->post("color"),
                "year" => $this->input->post("year"),
                "mileage" => $this->input->post("mileage"),
                "vehicle_condition" => $this->input->post("vehicle_condition"),

                "price" => $new_price,

                "total_price" => $total_price,

                "tax" => $vat ?? '' ,

                "is_negotiable" => $this->input->post("is_negotiable"),

                "fuel_type" => $this->input->post("fuel_type"),
                "transmission" => $this->input->post("transmission"),
                "location" => $this->input->post("location"),
                "description" => $this->input->post("description"),
                "km" => $this->input->post("km"),

                "ownership" => $this->input->post("ownership"),
                "euro_norm" => $this->input->post("euro_norm"),
                "co2_emission" => $this->input->post("co2_emission"),

                "state" => $this->input->post("state"),
                "zipcode" => $this->input->post("zipcode"),


                "winter_tires" => $this->input->post("winter_tires") ?? '',
                "ac_type" => $this->input->post("ac_type") ?? '',
                "four_by_four" => $this->input->post("4x4") ?? '',
                "navigation_system" => $this->input->post("navigation_system") ?? '',
                "parking_sensors" => $this->input->post("parking_sensors") ?? '',


                "mfk_date" => $mfk_date ?? '',
                "tuv_date" => $tuv_date ?? '',

                "emission_certificate" => $emission_certificate ?? '',
                "added_by" => $this->session->userdata('user_id'),

                 "comfort_and_interior" => $comfort_and_interior_json,
                "safety_and_assistance" => $safety_and_assistance_json,
                "lighting_and_visibility" => $lighting_and_visibility_json,
                "multimedia_and_navigation" => $multimedia_and_navigation_json,
                "engine_and_drive_technology" => $engine_and_drive_technology_json,
                "exterior_and_design" => $exterior_json,
                "other_features_and_extras" => $other_features_json,

            ];
            
			$this->Common_model->updateData('car_list',$data, array('id' => $id));
			
            if (!empty($photos)) {
                foreach ($photos as $photo) {
                    $car_img = [
                        "car_list_id" => $id,
                        "photos" => $photo,
                    ];
                    $this->db->insert("car_img", $car_img);
                }
            }

            $this->session->set_flashdata(
                "success",
                "Vehicle updated successfully!"
            );
            redirect(ADMIN_PATH . "/my-listing");
        }
    }


    // /////////////////////////////////////////////////////Duplicate Start//////////////////////////////////////////////////////

    public function duplicate_listing($id)
    {
            if (!isset($_SESSION['role_name'])) {
                redirect(base_url()); // or homepage
            }

            if ($_SESSION["role_name"] == "Buyer") {
                redirect(base_url());
            }

        $this->form_validation->set_rules("title", "Title", "required");
        $this->form_validation->set_rules("vehicle_type", "Vehicle Type", "required");
        $this->form_validation->set_rules("make", "Make By", "required");
        $this->form_validation->set_rules("model", "Model", "required");
        $this->form_validation->set_rules("variant", "variant", "required");
        $this->form_validation->set_rules("color", "Color", "required");
        $this->form_validation->set_rules("ownership", "Ownership", "required");
        $this->form_validation->set_rules("euro_norm", "Euro Norm", "required");
        $this->form_validation->set_rules("co2_emission", "co2 Emission", "required");
        $this->form_validation->set_rules("is_negotiable", "Is Price Negotiable", "required");
        $this->form_validation->set_rules("state", "Canton", "required");
        $this->form_validation->set_rules("zipcode", "Zipcode", "required");
        $this->form_validation->set_rules("mfk_date", "MFk", "required");
        $this->form_validation->set_rules("tuv_date", "TUV", "required");

        $this->form_validation->set_rules("year", "Year", "required|numeric");
        $this->form_validation->set_rules("mileage", "Mileage", "required");
        $this->form_validation->set_rules(
            "vehicle_condition",
            "Vehicle Condition",
            "required"
        );
        $this->form_validation->set_rules("price", "Price", "required");
        $this->form_validation->set_rules("fuel_type", "Fuel Type", "required");
        $this->form_validation->set_rules(
            "transmission",
            "Transmission",
            "required"
        );
        $this->form_validation->set_rules("location", "Location", "required");
        $this->form_validation->set_rules("km", "Kilo Meter", "required");
        $this->form_validation->set_rules(
            "description",
            "Description",
            "required"
        );
		
		$data["cars"] = $cars = $this->Common_model->getsingle('car_list', array('id' => $id));
		$slug = $cars->slug;
		// $oldmake = $cars->make;
		$oldtitle = $cars->title;
		
        if ($this->form_validation->run() == false) {

             $data["makes"] = $this->WebsiteModel->get_data("make");
            $data["models"] = $this->WebsiteModel->get_data("model");
            $data["variants"] = $this->WebsiteModel->get_data("variants");
            $data["colors"] = $this->WebsiteModel->get_data("vehicle_color");
            $data["fuel_types"] = $this->WebsiteModel->get_data("fuel_type");
            $data["transmissions"] = $this->WebsiteModel->get_data(
                "transmission"
            );
            $data["vehicle_types"] = $this->AdminModel->get_data("vehicle_type");
            $data["cities"] = $this->AdminModel->get_data("cities");
            $data["states"] = $this->AdminModel->get_data("states");


             $data["comforts"] = $this->AdminModel->get_data("comfort_and_interior");
            $data["safety_and_assistance"] = $this->AdminModel->get_data("safety_and_assistance");
            $data["lighting_and_visibility"] = $this->AdminModel->get_data("lighting_and_visibility");


            $data["multimedia_and_navigation"] = $this->AdminModel->get_data("multimedia_and_navigation");
            $data["engine_and_drive_technology"] = $this->AdminModel->get_data("engine_and_drive_technology");
            $data["exterior_and_design"] = $this->AdminModel->get_data("exterior_and_design");


            $data["other_features_and_extras"] = $this->AdminModel->get_data("other_features_and_extras");


            $data["main"] = "duplicate-listing";
            $this->load->view("admin/template", $data);
        } else {
	
            $title = $this->input->post('title');
			// if($title != $oldtitle OR $slug == '')
			// {
			// 	$slug = url_title($title, 'dash', TRUE);
			// 	$checkSlug = $this->Common_model->getsingle('car_list', array('slug' => $slug));
			// 	if ($checkSlug) 
			// 	{
			// 		for ($i = 1; $i <= 99999; $i++) 
			// 		{
			// 			$rand = rand(11, 99);
			// 			$newSlug = $slug . '-' . $rand;
			// 			$checkNewSlug = $this->Common_model->getsingle('car_list', array('slug' => $newSlug));
			// 			if (!$checkNewSlug) {
			// 				$slug = $newSlug;
			// 				break; 
			// 			}
			// 		}
			// 	}
			// }

            $slug = url_title($title, 'dash', TRUE);
			$checkSlug = $this->Common_model->getsingle('car_list', array('slug' => $slug));
			if ($checkSlug) 
			{
				for ($i = 1; $i <= 99999; $i++) 
				{
					$rand = rand(11, 99);
					$newSlug = $slug . '-' . $rand;
					$checkNewSlug = $this->Common_model->getsingle('car_list', array('slug' => $newSlug));
					if (!$checkNewSlug) {
						$slug = $newSlug;
						break; 
					}
				}
			}


			
            // Photo Upload Logic (optional)
            $photos = [];
            if (!empty($_FILES["photos"]["name"][0])) {
                $filesCount = count($_FILES["photos"]["name"]);
                for ($i = 0; $i < $filesCount; $i++) {
                    $_FILES["file"]["name"] = $_FILES["photos"]["name"][$i];
                    $_FILES["file"]["type"] = $_FILES["photos"]["type"][$i];
                    $_FILES["file"]["tmp_name"] =
                        $_FILES["photos"]["tmp_name"][$i];
                    $_FILES["file"]["error"] = $_FILES["photos"]["error"][$i];
                    $_FILES["file"]["size"] = $_FILES["photos"]["size"][$i];

                    $config["upload_path"] = "./uploads/";
                    $config["allowed_types"] = "jpg|jpeg|png";
                    $config["file_name"] =
                        time() . "_" . $_FILES["file"]["name"];

                    $this->load->library("upload", $config);

                    if ($this->upload->do_upload("file")) {
                        $uploadData = $this->upload->data();
                        $photos[] = $uploadData["file_name"];
                    }
                }
            }


            // Emission Certificate Upload
                $emission_certificate = '';
                if (!empty($_FILES['emission_certificate']['name'])) {
                    $_FILES["file"]["name"] = $_FILES["emission_certificate"]["name"];
                    $_FILES["file"]["type"] = $_FILES["emission_certificate"]["type"];
                    $_FILES["file"]["tmp_name"] = $_FILES["emission_certificate"]["tmp_name"];
                    $_FILES["file"]["error"] = $_FILES["emission_certificate"]["error"];
                    $_FILES["file"]["size"] = $_FILES["emission_certificate"]["size"];

                    $config["upload_path"] = "./uploads/emission_certificates/";
                    $config["allowed_types"] = "pdf";
                    $config["file_name"] = time() . "_" . $_FILES["file"]["name"];

                    // Make sure the directory exists
                    if (!is_dir($config["upload_path"])) {
                        mkdir($config["upload_path"], 0777, true);
                    }

                    $this->load->library("upload", $config);

                    if ($this->upload->do_upload("file")) {
                        $uploadData = $this->upload->data();
                        $emission_certificate = $uploadData["file_name"];
                    }
                }else{
                    $emission_certificate = $this->input->post("old_emission_certificate");
                }



                $comfort_and_interior = $this->input->post("comfort_and_interior");
                $comfort_and_interior_json = !empty($comfort_and_interior) ? json_encode($comfort_and_interior) : json_encode([]);

                 $safety_and_assistance = $this->input->post("safety_and_assistance");
                $safety_and_assistance_json = !empty($safety_and_assistance) ? json_encode($safety_and_assistance) : json_encode([]);

                 $lighting_and_visibility = $this->input->post("lighting_and_visibility");
                $lighting_and_visibility_json = !empty($lighting_and_visibility) ? json_encode($lighting_and_visibility) : json_encode([]);

                 $multimedia_and_navigation = $this->input->post("multimedia_and_navigation");
                $multimedia_and_navigation_json = !empty($multimedia_and_navigation) ? json_encode($multimedia_and_navigation) : json_encode([]);

                $engine_and_drive_technology = $this->input->post("engine_and_drive_technology");
                $engine_and_drive_technology_json = !empty($engine_and_drive_technology) ? json_encode($engine_and_drive_technology) : json_encode([]);

                $exterior = $this->input->post("exterior");
                $exterior_json = !empty($exterior) ? json_encode($exterior) : json_encode([]);

                $other_features = $this->input->post("other_features_and_extras");
                $other_features_json = !empty($other_features) ? json_encode($other_features) : json_encode([]);
                

            // Prepare data to insert (example)

             // Assume vehicle info already loaded in $vehicle
                $old_price = $cars->price;
                $old_vat = $cars->tax;
                $new_price = $this->input->post('price');

                // Compare price to check if it changed
                if ($old_price != $new_price && $_SESSION["role_name"] == 'Dealer') {
                    $vat = ($new_price * 7.7) / 100;
                } else {
                    $vat = $old_vat; // Use old VAT if price is unchanged
                }

                $total_price = $new_price + $vat;

                         
                $tuv_date_raw = $this->input->post("tuv_date"); // This will be '2025-07-07'

                if (!empty($tuv_date_raw)) {
                    $tuv_date = date('m/y', strtotime($tuv_date_raw)); // Output: 07/25
                } else {
                    $tuv_date = null;
                }


                
             $mfk_date_raw = $this->input->post("mfk_date"); // This will be '2025-07-07'

            if (!empty($mfk_date_raw)) {
                $mfk_date = date('m/y', strtotime($tuv_date_raw)); // Output: 07/25
            } else {
                $mfk_date = null;
            }


            $data = [
				"slug" => $slug,
                 "title" => $this->input->post("title"),
                "vehicle_type" => $this->input->post("vehicle_type"),
                "make" => $this->input->post("make"),
                "model" => $this->input->post("model"),
                "variant" => $this->input->post("variant"),
                "color" => $this->input->post("color"),
                "year" => $this->input->post("year"),
                "mileage" => $this->input->post("mileage"),
                "vehicle_condition" => $this->input->post("vehicle_condition"),

                "price" => $new_price,

                "total_price" => $total_price,

                "tax" => $vat ?? '' ,

                "is_negotiable" => $this->input->post("is_negotiable"),

                "fuel_type" => $this->input->post("fuel_type"),
                "transmission" => $this->input->post("transmission"),
                "location" => $this->input->post("location"),
                "description" => $this->input->post("description"),
                "km" => $this->input->post("km"),

                "ownership" => $this->input->post("ownership"),
                "euro_norm" => $this->input->post("euro_norm"),
                "co2_emission" => $this->input->post("co2_emission"),

                "state" => $this->input->post("state"),
                "zipcode" => $this->input->post("zipcode"),


                "winter_tires" => $this->input->post("winter_tires") ?? '' ,
                "ac_type" => $this->input->post("ac_type") ?? '',
                "four_by_four" => $this->input->post("4x4") ?? '',
                "navigation_system" => $this->input->post("navigation_system")  ?? '' ,
                "parking_sensors" => $this->input->post("parking_sensors") ?? '' ,


                "mfk_date" => $mfk_date,
                "tuv_date" => $tuv_date,

                "emission_certificate" => $emission_certificate ?? '',
                "added_by" => $this->session->userdata('user_id'),

                 "comfort_and_interior" => $comfort_and_interior_json,
                "safety_and_assistance" => $safety_and_assistance_json,
                "lighting_and_visibility" => $lighting_and_visibility_json,
                "multimedia_and_navigation" => $multimedia_and_navigation_json,
                "engine_and_drive_technology" => $engine_and_drive_technology_json,
                "exterior_and_design" => $exterior_json,
                "other_features_and_extras" => $other_features_json,

            ];

             $this->db->insert("car_list", $data); 
            $last_id = $this->db->insert_id();
            // print_r($photos);die;

                    if (!empty($photos)) {
                foreach ($photos as $photo) {
                    $car_img = [
                        "car_list_id" =>  $last_id,
                        "photos" => $photo,
                    ];
                    $this->db->insert("car_img", $car_img);
                }
            }



            $this->session->set_flashdata(
                "success",
                "Vehicle Add successfully!"
            );
            redirect(ADMIN_PATH . "/my-listing");
        }
    }


    // /////////////////////////////////////////////////////Duplicate End//////////////////////////////////////////////////////
    public function add_model()
    {

        //  if (!has_permission("Add Model")) {
        //     show_error("Unauthorized access");
        // }

             if (!isset($_SESSION['role_name'])) {
                redirect(base_url()); // or homepage
            }

            if ($_SESSION["role_name"] == "Buyer") {
                redirect(base_url());
            }

        $this->form_validation->set_rules(
            "name",
            "Model Name",
            "required|is_unique[model.name]"
        );

          $this->form_validation->set_rules(
            "vehicle_type_id",
            "Vehicle Type",
            "required"
        );

          $this->form_validation->set_rules(
            "make_id",
            "Make",
            "required"
        );



        if ($this->form_validation->run() == false) {
            $data["vehicle_types"] = $this->WebsiteModel->get_data("vehicle_type");
            $data["makes"] = $this->WebsiteModel->get_data("make");
            $data["models"] = $this->WebsiteModel->get_data("model");
            $data["main"] = "vehicle_model";
            $this->load->view("admin/template", $data);
        } else {
            // Prepare data to insert (example)
            $data = [
                "name" => $this->input->post("name"),
                "vehicle_type_id" => $this->input->post("vehicle_type_id"),
                "make_id" => $this->input->post("make_id"),
            ];
            $this->db->insert("model", $data); // Save to database

            $this->session->set_flashdata(
                "success",
                "Model added successfully!"
            );
            redirect(ADMIN_PATH . "/add-model");
        }
    }

    public function delete_model()
    {
        $mid = $_GET["m_id"];
        $delete = $this->db->where("id", $mid)->delete("model");

        if ($delete) {
            $this->session->set_flashdata(
                "success",
                "Model Delete successfully!"
            );
            redirect(ADMIN_PATH . "/add-model");
        }
    }

       public function add_variant()
    {

        //  if (!has_permission("Add Model")) {
        //     show_error("Unauthorized access");
        // }

           if (!isset($_SESSION['role_name'])) {
                redirect(base_url()); // or homepage
            }

            if ($_SESSION["role_name"] == "Buyer") {
                redirect(base_url());
            }

        $this->form_validation->set_rules(
            "name",
            "Variant Name",
            "required|is_unique[variants.name]"
        );

         $this->form_validation->set_rules(
            "name",
            "Model",
            "required"
        );

          $this->form_validation->set_rules(
            "vehicle_type_id",
            "Vehicle Type",
            "required"
        );

          $this->form_validation->set_rules(
            "make_id",
            "Make",
            "required"
        );



        if ($this->form_validation->run() == false) {
            $data["vehicle_types"] = $this->WebsiteModel->get_data("vehicle_type");
            $data["makes"] = $this->WebsiteModel->get_data("make");
            $data["models"] = $this->WebsiteModel->get_data("model");
            $data["variants"] = $this->WebsiteModel->get_data("variants");
            $data["main"] = "vehicle_variant";
            $this->load->view("admin/template", $data);
        } else {
            // Prepare data to insert (example)
            $data = [
                "name" => $this->input->post("name"),
                "vehicle_type_id" => $this->input->post("vehicle_type_id"),
                "make_id" => $this->input->post("make_id"),
                "model_id" => $this->input->post("model_id"),
            ];
            $this->db->insert("variants", $data); // Save to database

            $this->session->set_flashdata(
                "success",
                "Variant added successfully!"
            );
            redirect(ADMIN_PATH . "/add-variant");
        }
    }


        public function delete_variant()
    {
        $mid = $_GET["m_id"];
        $delete = $this->db->where("id", $mid)->delete("variants");

        if ($delete) {
            $this->session->set_flashdata(
                "success",
                "Variant Delete successfully!"
            );
            redirect(ADMIN_PATH . "/add-variant");
        }
    }

     public function add_categories()
    {
         
        if (!isset($_SESSION['role_name'])) {
                redirect(base_url()); // or homepage
            }

         if ($_SESSION["role_name"] == "Buyer") {
                redirect(base_url());
            }

        $this->form_validation->set_rules(
            "name",
            "Categories Name",
            "required|is_unique[categories.name]"
        );
         $this->form_validation->set_rules(
            "vehicle_type_id",
            "Vehicle Type",
            "required"
        );

        if ($this->form_validation->run() == false) {
            $data["vehicle_types"] = $this->WebsiteModel->get_data("vehicle_type");
            $data["categories"] = $this->WebsiteModel->get_data("categories");
            $data["main"] = "categories";
            $this->load->view("admin/template", $data);
        } else {

              // Emission Certificate Upload
                $cat_img = '';
                if (!empty($_FILES['img']['name'])) {
                    $_FILES["file"]["name"] = $_FILES["img"]["name"];
                    $_FILES["file"]["type"] = $_FILES["img"]["type"];
                    $_FILES["file"]["tmp_name"] = $_FILES["img"]["tmp_name"];
                    $_FILES["file"]["error"] = $_FILES["img"]["error"];
                    $_FILES["file"]["size"] = $_FILES["img"]["size"];

                    $config["upload_path"] = "./uploads/categories/";
                    $config["allowed_types"] = "jpg|jpeg|png";
                    $config["file_name"] = time() . "_" . $_FILES["file"]["name"];

                    // Make sure the directory exists
                    if (!is_dir($config["upload_path"])) {
                        mkdir($config["upload_path"], 0777, true);
                    }

                    $this->load->library("upload", $config);

                    if ($this->upload->do_upload("file")) {
                        $uploadData = $this->upload->data();
                        $cat_img = $uploadData["file_name"];
                    }
                }

            // Prepare data to insert (example)
            $data = [
                "name" => $this->input->post("name"),
                "vehicle_type_id" => $this->input->post("vehicle_type_id"),
                "img" => $cat_img,
            ];
            $this->db->insert("categories", $data); // Save to database

            $this->session->set_flashdata(
                "success",
                "Categories added successfully!"
            );
            redirect(ADMIN_PATH . "/add-categories");
        }
    }




    public function add_make()
    {
         
        if (!isset($_SESSION['role_name'])) {
                redirect(base_url()); // or homepage
            }

         if ($_SESSION["role_name"] == "Buyer") {
                redirect(base_url());
            }

        $this->form_validation->set_rules(
            "name",
            "Make Name",
            "required|is_unique[make.name]"
        );
       $this->form_validation->set_rules(
            "vehicle_type_id",
            "Vehicle Type",
            "required"
        );

        //  $this->form_validation->set_rules(
        //     "cat_id",
        //     "Category",
        //     "required"
        // );

        if ($this->form_validation->run() == false) {
            $data["vehicle_types"] = $this->WebsiteModel->get_data("vehicle_type");
            $data["categories"] = $this->WebsiteModel->get_data("categories");
            $data["makes"] = $this->WebsiteModel->get_data("make");
            $data["main"] = "vehicle_make";
            $this->load->view("admin/template", $data);
        } else {

              // Emission Certificate Upload
                $brand_logo = '';
                if (!empty($_FILES['logo']['name'])) {
                    $_FILES["file"]["name"] = $_FILES["logo"]["name"];
                    $_FILES["file"]["type"] = $_FILES["logo"]["type"];
                    $_FILES["file"]["tmp_name"] = $_FILES["logo"]["tmp_name"];
                    $_FILES["file"]["error"] = $_FILES["logo"]["error"];
                    $_FILES["file"]["size"] = $_FILES["logo"]["size"];

                    $config["upload_path"] = "./uploads/brands/";
                    $config["allowed_types"] = "jpg|jpeg|png";
                    $config["file_name"] = time() . "_" . $_FILES["file"]["name"];

                    // Make sure the directory exists
                    if (!is_dir($config["upload_path"])) {
                        mkdir($config["upload_path"], 0777, true);
                    }

                    $this->load->library("upload", $config);

                    if ($this->upload->do_upload("file")) {
                        $uploadData = $this->upload->data();
                        $brand_logo = $uploadData["file_name"];
                    }
                }

            // Prepare data to insert (example)
            $data = [
                "name" => $this->input->post("name"),
                // "cat_id" => $this->input->post("cat_id"),
                 "vehicle_type_id" => $this->input->post("vehicle_type_id"),
                "logo" => $brand_logo,
            ];
            $this->db->insert("make", $data); // Save to database

            $this->session->set_flashdata(
                "success",
                "Make added successfully!"
            );
            redirect(ADMIN_PATH . "/add-make");
        }
    }

    public function delete_make()
    {
        $mid = $_GET["m_id"];
        $delete = $this->db->where("id", $mid)->delete("make");

        if ($delete) {
            $this->session->set_flashdata(
                "success",
                "Make Delete successfully!"
            );
            redirect(ADMIN_PATH . "/add-make");
        }
    }

    public function add_transmission()
    {

            if (!isset($_SESSION['role_name'])) {
                redirect(base_url()); // or homepage
            }

            if ($_SESSION["role_name"] == "Buyer") {
                redirect(base_url());
            }

        $this->form_validation->set_rules(
            "name",
            "Transmission",
            "required|is_unique[transmission.name]"
        );

        if ($this->form_validation->run() == false) {
            $data["transmissions"] = $this->WebsiteModel->get_data(
                "transmission"
            );
            $data["main"] = "vehicle_transmission";
            $this->load->view("admin/template", $data);
        } else {
            // Prepare data to insert (example)
            $data = [
                "name" => $this->input->post("name"),
            ];
            $this->db->insert("transmission", $data); // Save to database

            $this->session->set_flashdata(
                "success",
                "Transmission added successfully!"
            );
            redirect(ADMIN_PATH . "/add-transmission");
        }
    }

    public function delete_transmission()
    {
        $tid = $_GET["t_id"];
        $delete = $this->db->where("id", $tid)->delete("transmission");

        if ($delete) {
            $this->session->set_flashdata(
                "success",
                "Transmission Delete successfully!"
            );
            redirect(ADMIN_PATH . "/add-transmission");
        }
    }


    public function add_fuel_type()
    {

             if (!isset($_SESSION['role_name'])) {
                redirect(base_url()); // or homepage
            }

            if ($_SESSION["role_name"] == "Buyer") {
                redirect(base_url());
            }

        $this->form_validation->set_rules(
            "name",
            "Fuel type",
            "required|is_unique[fuel_type.name]"
        );

        if ($this->form_validation->run() == false) {
            $data["fuel_types"] = $this->WebsiteModel->get_data("fuel_type");
            $data["main"] = "vehicle_fuel_type";
            $this->load->view("admin/template", $data);
        } else {
            // Prepare data to insert (example)
            $data = [
                "name" => $this->input->post("name"),
            ];
            $this->db->insert("fuel_type", $data); // Save to database

            $this->session->set_flashdata(
                "success",
                "Fuel Type added successfully!"
            );
            redirect(ADMIN_PATH . "/add-fuel-type");
        }
    }

    public function delete_fuel_type()
    {
        $fid = $_GET["f_id"];
        $delete = $this->db->where("id", $fid)->delete("fuel_type");

        if ($delete) {
            $this->session->set_flashdata(
                "success",
                "Fuel Type Delete successfully!"
            );
            redirect(ADMIN_PATH . "/add-fuel-type");
        }
    }

    // //////////////////////////////////////////////////////////////////////////////////////////////////

    public function permission()
    {
        
        $data["permissions"] = $this->WebsiteModel->get_data("permissions");
        $data["main"] = "permissions";
        $this->load->view("admin/template", $data);
    }

    public function add_permission()
    {
        $this->form_validation->set_rules(
            "name",
            "Permission Name",
            "required|is_unique[permissions.name]"
        );

        if ($this->form_validation->run() == false) {
            $data["permissions"] = $this->WebsiteModel->get_data("permissions");
            $data["main"] = "permissions";
            $this->load->view("admin/template", $data);
        } else {
            // Prepare data to insert (example)
            $data = [
                "name" => $this->input->post("name"),
            ];
            $this->db->insert("permissions", $data); // Save to database

            $this->session->set_flashdata(
                "success",
                "Permission added successfully!"
            );
            redirect(ADMIN_PATH . "/permission");
        }
    }

    public function delete_permission()
    {
        $pid = $_GET["p_id"];
        $delete = $this->db->where("id", $pid)->delete("permissions");

        if ($delete) {
            $delete = $this->db
                ->where("permission_id", $pid)
                ->delete("role_has_permissions");
            $this->session->set_flashdata(
                "success",
                "Permission Delete successfully!"
            );
            redirect(ADMIN_PATH . "/permission");
        }
    }

    public function role()
    {
        $data["permissions"] = $this->AdminModel->get_data("permissions");
        $data["roles"] = $this->AdminModel->get_data("roles");
        $data["main"] = "roles";
        $this->load->view("admin/template", $data);
    }

    public function add_role()
    {
        $this->form_validation->set_rules(
            "name",
            "Role Name",
            "required|is_unique[roles.role]"
        );

        if ($this->form_validation->run() == false) {
            $data["permissions"] = $this->AdminModel->get_data("permissions");
            $data["roles"] = $this->AdminModel->get_data("roles");
            $data["main"] = "roles";
            $this->load->view("admin/template", $data);
        } else {
            // Prepare data to insert (example)
            $roleData = [
                "role" => $this->input->post("name"),
            ];
            $roles = $this->AdminModel->insert("roles", $roleData);

            $permissions = $this->input->post("permission"); // array of permission IDs

            if ($permissions && is_array($permissions)) {
                foreach ($permissions as $permission_id) {
                    $perData = [
                        "role_id" => $roles,
                        "permission_id" => $permission_id,
                    ];
                    $this->AdminModel->insert("role_has_permissions", $perData);
                }
            }

            $this->session->set_flashdata(
                "success",
                "Role added successfully!"
            );
            redirect(ADMIN_PATH . "/roles");
        }
    }

    public function edit_role()
    {
        $id = $_GET["id"];
        $data["permissions"] = $this->AdminModel->get_data("permissions");
        $data["roles"] = $this->AdminModel->get_data_by_id($id, "roles");
        $assigned = $this->db
            ->where("role_id", $id)
            ->get("role_has_permissions")
            ->result();
        $data["assigned_permissions"] = array_column(
            $assigned,
            "permission_id"
        );
        $data["main"] = "update-roles";
        $this->load->view("admin/template", $data);
    }

    public function update_role()
    {
        $this->form_validation->set_rules("role", "Role Name", "required");

        $id = $this->input->post("r_id");

        if ($this->form_validation->run() == false) {
            $data["permissions"] = $this->AdminModel->get_data("permissions");
            $data["roles"] = $this->AdminModel->get_data("roles");
            $data["main"] = "roles";
            $this->load->view("admin/template", $data);
        } else {
            // Prepare data to insert (example)
            $roleData = [
                "role" => $this->input->post("role"),
            ];
            $roles = $this->AdminModel->update_data($id, $roleData, "roles");

            $permissions = $this->input->post("permission"); // array of permission IDs

            if ($permissions && is_array($permissions)) {
                $is_delete = $this->db
                    ->where("role_id", $id)
                    ->delete("role_has_permissions");

                if ($is_delete) {
                    foreach ($permissions as $permission_id) {
                        $perData = [
                            "role_id" => $id,
                            "permission_id" => $permission_id,
                        ];
                        $this->AdminModel->insert(
                            "role_has_permissions",
                            $perData
                        );
                    }
                }
            }

            $this->session->set_flashdata(
                "success",
                "Role Updated successfully!"
            );
            redirect(ADMIN_PATH . "/edit-roles?id=" . $id);
        }
    }


    public function delete_car_img()
{
    $id = $this->input->get('c_id');
    $car = $this->db->get_where('car_img', ['id' => $id])->row();

    if ($car) {
        $image_path = FCPATH . 'uploads/' . $car->photos;
        if (file_exists($image_path)) {
            unlink($image_path);
        }

        $this->db->where('id', $id)->delete('car_img');
        $this->session->set_flashdata('success', 'Image deleted successfully.');
    } else {
        $this->session->set_flashdata('error', 'Image not found.');
    }

    redirect(ADMIN_PATH . '/my-listing');
}



 private function getDropdownData($table, $column, $value) {
        return $this->db->get_where($table, [$column => $value])->result();
    }

      public function get_makes_by_vehicle_type() {
        $vehicle_type_id = $this->input->post('vehicle_type_id');
        if ($vehicle_type_id) {
            $makes = $this->getDropdownData('make', 'vehicle_type_id', $vehicle_type_id);
            echo json_encode($makes);
        } else {
            echo json_encode([]);
        }
    }

      public function get_modal_by_make() {
        $make_id = $this->input->post('make_id');
        if ($make_id) {
            $models = $this->getDropdownData('model', 'make_id', $make_id);
            echo json_encode($models);
        } else {
            echo json_encode([]);
        }

    }

          public function get_variant_by_model() {
        $model_id = $this->input->post('model_id');
        if ($model_id) {
            $variants = $this->getDropdownData('variants', 'model_id', $model_id);
            echo json_encode($variants);
        } else {
            echo json_encode([]);
        }

    }

              public function get_city_by_state() {
        $state = $this->input->post('state');
        if ($state) {
            $states = $this->getDropdownData('cities', 'state_id', $state);
            echo json_encode($states);
        } else {
            echo json_encode([]);
        }

    }


        // //////////////////////////////////////////////Dealer Profile//////////////////////////////////////////////////////////////



         public function dealer_my_profile()
    
    {

    if ($_SESSION["role_name"] != "Dealer") {
            redirect(base_url());
        }

         $this->form_validation->set_rules("username", "User Name", "required");
        $this->form_validation->set_rules("mobile", "Mobile", "required");
        $this->form_validation->set_rules("email", "Email", "required");
        $this->form_validation->set_rules("company_name", "Company Name", "required");
        $this->form_validation->set_rules("phone_number", "Phone Number", "required");
        $this->form_validation->set_rules("company_email", "Company Email", "required");
        $this->form_validation->set_rules("website", "Website", "required");
        $this->form_validation->set_rules("open_from", "Open From", "required");
        $this->form_validation->set_rules("open_to", "Open To", "required");
        $this->form_validation->set_rules("contact_name", "Contact Name", "required");
        $this->form_validation->set_rules("contact_designation", "Contact Designation", "required");
        $this->form_validation->set_rules("contact_email", "Contact Email", "required");
        $this->form_validation->set_rules("contact_phone", "Contact Phone", "required");
        $this->form_validation->set_rules("address", "Address", "required");

		
        if ($this->form_validation->run() == false) {	
            
         $data["profile"] = $this->Common_model->getsingle('users', array('id' => $this->session->userdata('user_id')));
         $data["dealer_data"] = $this->Common_model->getsingle('dealer_profile', array('user_id' => $this->session->userdata('user_id')));
        //  print_r($data["dealer_data"]);die;
        $data["main"] = "my-profile";
        $this->load->view("dealer/template", $data);

        } else {
			
			$id = $this->session->userdata('user_id');

        // Upload Profile Image
             $old_image = $this->input->post('old_image');
             $profile_image = $old_image;

        if (!empty($_FILES['profile']['name'])) {
            $config['upload_path'] = './uploads/profile/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048;
            $config['file_name'] = time() . '_' . $_FILES['profile']['name'];

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('profile')) {
                $uploadData = $this->upload->data();
                $profile_image = $uploadData['file_name'];
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect(ADMIN_PATH . '/dealer-profile');
            }
        }

        // Upload Company logo

        $old_logo = $this->input->post('old_logo');
             $logo = $old_logo;

        if (!empty($_FILES['logo']['name'])) {
            $config['upload_path'] = './uploads/logo/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048;
            $config['file_name'] = time() . '_' . $_FILES['logo']['name'];

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('logo')) {
                $uploadData = $this->upload->data();
                $logo = $uploadData['file_name'];
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect(ADMIN_PATH . '/dealer-profile');
            }
        }

        // Upload Contact person image

        $old_contact_image = $this->input->post('old_contact_image');
             $contact_image = $old_contact_image;

        if (!empty($_FILES['contact_image']['name'])) {
            $config['upload_path'] = './uploads/profile/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = 2048;
            $config['file_name'] = time() . '_' . $_FILES['contact_image']['name'];

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('contact_image')) {
                $uploadData = $this->upload->data();
                $contact_image = $uploadData['file_name'];
            } else {
                $this->session->set_flashdata('error', $this->upload->display_errors());
                redirect(ADMIN_PATH . '/dealer-profile');
            }
        }



            $data = [
                "username" => $this->input->post("username"),
                "mobile" => $this->input->post("mobile"),
                "email" => $this->input->post("email"),
                 'profile'  => $profile_image
            ];
            

               $dealer_data = [
                "user_id" => $this->session->userdata('user_id'),
                "company_name" => $this->input->post("company_name"),
                "phone_number" => $this->input->post("phone_number"),
                "company_email" => $this->input->post("company_email"),
                "website" => $this->input->post("website"),
                "open_from" => $this->input->post("open_from"),
                "open_to" => $this->input->post("open_to"),
                "contact_name" => $this->input->post("contact_name"),
                "contact_designation" => $this->input->post("contact_designation"),
                "contact_email" => $this->input->post("contact_email"),
                "contact_phone" => $this->input->post("contact_phone"),
                "address" => $this->input->post("address"),
                "logo" => $logo,
                "contact_image" => $contact_image,
            ];


			$user_data = $this->Common_model->updateData('users',$data, array('id' => $id));

            $get_dealer_data = $this->Common_model->getAllwhere('dealer_profile', array('user_id' => $this->session->userdata('user_id')));
            // print_r($dealer_data);die;
            if($get_dealer_data){
                $this->Common_model->updateData('dealer_profile',$dealer_data, array('user_id' => $id));
            }else{
                //   print_r($dealer_data);die;
                $this->Common_model->insertData('dealer_profile', $dealer_data);
            }

            $this->session->set_flashdata(
                "success",
                "User updated successfully!"
            );
            redirect(ADMIN_PATH . '/dealer-profile');
        }

    }




public function bulk_upload_view() {

       if ($_SESSION["role_name"] == "Buyer") {
            redirect(base_url());
        }

           $data["main"] = "vehicle_bulk_upload";
        $this->load->view("dealer/template", $data);
    }


public function import_csv() {

    // if ($_SESSION["role_name"] != "Buyer") {
    //         redirect(base_url());
    //     }

    if ($_FILES['csv_file']['name']) {
        $filename = $_FILES['csv_file']['tmp_name'];
        $file = fopen($filename, "r");
        $i = 0;
        $insertCount = 0;
        $duplicateCount = 0;

        while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {
            if ($i == 0) { $i++; continue; } // Skip header

            // SLug

            $title =  $data[0];
			$slug = url_title($title, 'dash', TRUE);
			$checkSlug = $this->Common_model->getsingle('car_list', array('slug' => $slug));
			if ($checkSlug) 
			{
				for ($i = 1; $i <= 99999; $i++) 
				{
					$rand = rand(11, 99);
					$newSlug = $slug . '-' . $rand;
					$checkNewSlug = $this->Common_model->getsingle('car_list', array('slug' => $newSlug));
					if (!$checkNewSlug) {
						$slug = $newSlug;
						break; 
					}
                        if ($checkNewSlug) {
                $duplicateCount++;
                continue;
            }
				}
			}

            // slug

            // $slug = $data[0];
            // $existing = $this->Common_model->slug_exists($slug);

            if ($checkNewSlug) {
                $duplicateCount++;
                continue;
            }


             $price = $data[9];

             if (!is_numeric($price) || $price <= 0) {
                    continue; // Skip this row
                }
            if($_SESSION["role_name"] == 'Dealer') {
                $tax = 7.7; // 7.7% (VAT = Value Added Tax)
                $vat_rate = $tax/100; // 0.077 
                $vat_amount = $price * $vat_rate;
                $total_price = $price + $vat_amount;
            } else {
                $vat_amount = 0;
                $total_price = $price; // ya zero if private user ko free listing dena ho
            }


            $insertData = [
                "slug"               => $slug,
                "title"              => $data[0],
                "vehicle_type"       => $data[1],
                "make"               => $data[2],
                "model"              => $data[3],
                "variant"            => $data[4],
                "color"              => $data[5],
                "year"               => $data[6],
                "mileage"            => $data[7],
                "vehicle_condition"  => $data[8],
                "price"              => $price,
                "total_price"        => $total_price,
                "tax"                => $vat_amount,
                "is_negotiable"      => $data[10],
                "fuel_type"          => $data[11],
                "transmission"       => $data[12],
                "state"              => $data[13],
                "location"           => $data[14],
                "zipcode"            => $data[15],
                "km"                 => $data[16],
                "description"        => $data[17],
                "ownership"          => $data[18],
                "euro_norm"          => $data[19],
                "co2_emission"       => $data[20],
                "winter_tires"       => $data[21],
                "ac_type"            => $data[22],
                "parking_sensors"    => $data[23],
                "mfk_date"           => $data[24],
                "tuv_date"           => $data[25],
                "added_by"           => $this->session->userdata('user_id')
            ];

            $this->Common_model->insertData('car_list', $insertData);
            $insertCount++;
        }

        fclose($file);
        $this->session->set_flashdata('success', "$insertCount vehicles uploaded. $duplicateCount duplicates skipped.");
    } else {
        $this->session->set_flashdata('error', 'Please select a CSV file.');
    }

    redirect(ADMIN_PATH  . '/bulk-upload-view');
}



public function download_csv()
{
    $file = FCPATH . 'uploads/Vehicle_bulk_upload.csv';

    if (file_exists($file)) {
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="Vehicle_bulk_upload.csv"');
        readfile($file);
        exit;
    } else {
        show_404();
    }
}


public function delete_vehicle_record() {
    
    if ($_SESSION["role_name"] == "buyer") {
            redirect(base_url());
        }

    $data = json_decode(file_get_contents("php://input"), true);
    $id = $data['id'];
    $table = $data['table'];
    $key = $data['key'];

    if ($id && $table && $key) {
        // Step 1: Delete from main table
        $this->db->where($key, $id);
        $deleted = $this->db->delete($table);

        if ($deleted) {
            // Step 2: Fetch related car images
            $car_images = $this->db->get_where('car_img', ['car_list_id' => $id])->result();

            if (!empty($car_images)) {
                foreach ($car_images as $img) {
                    $image_path = FCPATH . 'uploads/' . $img->photos;
                    if (file_exists($image_path)) {
                        unlink($image_path);
                    }
                }

                // Step 3: Delete image records
                $this->db->where('car_list_id', $id)->delete('car_img');
            }

            // Final response
            echo json_encode(['status' => 'success', 'message' => 'Record deleted successfully']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to delete record']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Invalid data']);
    }
}


// ///////////////////////////////////////////////Subscrition plan////////////////////////////////////////////////////////////////////////

 public function add_plan()
    {

        //  if (!has_permission("Add Model")) {
        //     show_error("Unauthorized access");
        // }

          if (isset($_SESSION["role_name"]) &&
            $_SESSION["role_name"] == "Buyer"
        ) {
            redirect(base_url());

              } 


        $this->form_validation->set_rules(
            "plan_name",
            "Plan Name",
            "required|is_unique[subscription_plans.plan_name]"
        );

          $this->form_validation->set_rules(
            "price",
            "Price",
            "required"
        );

          $this->form_validation->set_rules(
            "duration_days",
            "Duration Days",
            "required"
        );

        $this->form_validation->set_rules(
            "listing_limit",
            "Listing Limit",
            "required"
        );



        if ($this->form_validation->run() == false) {

             $user_id = $_SESSION['user_id'] ?? null;
            $data["plans"] = $this->WebsiteModel->get_data("subscription_plans");

                $data['active_subscription'] = null;
                if ($user_id) {
                    $data['active_subscription'] = $this->db->where('user_id', $user_id)
                        ->where('end_date >=', date('Y-m-d'))
                        ->get('user_subscriptions')->row();
                }
                
            $data["main"] = "add_plan";
            $this->load->view("admin/template", $data);
        } else {
            // Prepare data to insert (example)
            $data = [
                "plan_name" => $this->input->post("plan_name"),
                "price" => $this->input->post("price"),
                "duration_days" => $this->input->post("duration_days"),
                "listing_limit" => $this->input->post("listing_limit"),
            ];
            $this->db->insert("subscription_plans", $data); // Save to database

            $this->session->set_flashdata(
                "success",
                "Plan added successfully!"
            );
            redirect(ADMIN_PATH . "/add-plan");
        }
    }


     public function update_plan($id)
    {

        //  if (!has_permission("Add Model")) {
        //     show_error("Unauthorized access");
        // }

          if (isset($_SESSION["role_name"]) &&
            $_SESSION["role_name"] == "Buyer"
        ) {
            redirect(base_url());

              } 


        $this->form_validation->set_rules(
            "plan_name",
            "Plan Name",
            "required"
        );

          $this->form_validation->set_rules(
            "price",
            "Price",
            "required"
        );

          $this->form_validation->set_rules(
            "duration_days",
            "Duration Days",
            "required"
        );

        $this->form_validation->set_rules(
            "listing_limit",
            "Listing Limit",
            "required"
        );



        if ($this->form_validation->run() == false) {

            $data["plan"] = $this->Common_model->getsingle('subscription_plans', array('id' => $id));
            $data["main"] = "update_plan";
            $this->load->view("admin/template", $data);
        } else {
            // Prepare data to insert (example)
            $data = [
                "plan_name" => $this->input->post("plan_name"),
                "price" => $this->input->post("price"),
                "duration_days" => $this->input->post("duration_days"),
                "listing_limit" => $this->input->post("listing_limit"),
            ];
            $this->Common_model->updateData('subscription_plans',$data, array('id' => $id));

            $this->session->set_flashdata(
                "success",
                "Plan updated successfully!"
            );
            redirect(ADMIN_PATH . "/add-plan");
        }
    }



///////////////////////////////////////////////////Buy Plan///////////////////////////////////////////////////////////////////////



     public function buy_plan($plan_id) {
        // Check if user is logged in
        if (!isset($_SESSION['user_id'])) {
            $this->session->set_flashdata('error', 'Please login first');
            redirect(base_url());
        }

        $user_id = $_SESSION['user_id'];

        // Get plan details
        $plan = $this->db->get_where('subscription_plans', ['id' => $plan_id])->row();

        if (!$plan) {
            $this->session->set_flashdata('error', 'Invalid Plan');
            redirect(ADMIN_PATH . '/dashboard');
        }

        $exists = $this->db->where('user_id', $user_id)
                  ->where('plan_id', $plan_id)
                  ->where('end_date >=', date('Y-m-d'))
                  ->get('user_subscriptions')
                  ->row();

            if ($exists) {
                $this->session->set_flashdata('error', 'You already have this plan active.');
            redirect(ADMIN_PATH . '/add-plan');
            }


        // Prepare subscription data
        $start_date = date('Y-m-d');
        $end_date = date('Y-m-d', strtotime("+{$plan->duration_days} days"));

        $subscription_data = [
            'user_id' => $user_id,
            'plan_id' => $plan_id,
            'start_date' => $start_date,
            'end_date' => $end_date,
            'listings_used' => 0
        ];

        // Insert into user_subscriptions
        $this->db->insert('user_subscriptions', $subscription_data);

        $this->session->set_flashdata('success', 'Subscription purchased successfully!');
        redirect(ADMIN_PATH . '/add-plan'); // You can redirect to subscription status or vehicle add page
    }

    /////////////////////////////////////////////Subscribed Users//////////////////////////////////////////////////////////////////////////

    public function subscribed_users()
            {
                if ($this->session->userdata('role_name') != 'Admin') {
                    show_error('Unauthorized access');
                }

                $this->db->select('
                    user_subscriptions.*,
                    users.username as user_name,
                    users.email,
                    roles.role as role_name,
                    subscription_plans.plan_name,
                    subscription_plans.price,
                    subscription_plans.duration_days
                ');
                $this->db->from('user_subscriptions');
                $this->db->join('users', 'users.id = user_subscriptions.user_id');
                $this->db->join('roles', 'roles.id = users.role'); // join role table to get role_name
                $this->db->join('subscription_plans', 'subscription_plans.id = user_subscriptions.plan_id');
                $this->db->order_by('user_subscriptions.start_date', 'DESC');

                $data['subscribers'] = $this->db->get()->result();

                // print_r($data['subscribers']);die;

             $data["main"] = "subscribed_user";
            $this->load->view("admin/template", $data);
      }


/////////////////////////////////////////////////Subscrition plan////////////////////////////////////////////////////////////////////////




// public function chat() {

//         //    $data["main"] = "chat";
//         $this->load->view("chat");
//     }

// public function view_chat($vehicle_id, $receiver_id)
// {
//     // print_r($_SESSION['role_name']);die;
//     // 🔸 Join users and roles table to get receiver role name
//     $this->db->select('roles.role as role_name');
//     $this->db->from('users');
//     $this->db->join('roles', 'roles.id = users.role'); // assuming foreign key is 'role_name'
//     $this->db->where('users.id', $receiver_id);
//     $query = $this->db->get();

//     if ($query->num_rows() > 0) {
//         $receiver_role = $query->row()->role_name;
//     } else {
//         $receiver_role = 'Unknown';
//     }

//     // 🔸 Data pass to view
//     $data['vehicle_id'] = $vehicle_id;
//     $data['receiver_id'] = $receiver_id;
//     $data['receiver_role'] = $receiver_role;

//     $this->load->view('chat', $data);
// }



public function view_chat($vehicle_id, $other_user_id)
{

    //  $vehicle_id = $this->input->post('vehicle_id');
    // $other_user_id = $this->input->post('receiver_id');

    // print_r($other_user_id);die;

    $current_user_id = $_SESSION['user_id'];
    $current_user_role = $_SESSION['role_name'];

    // Determine who is sender and who is receiver
    $sender_id = $current_user_id;
    $sender_role = $current_user_role;

    $receiver_id = $other_user_id;

    // Get receiver role
    $this->db->select('roles.role as role_name');
    $this->db->from('users');
    $this->db->join('roles', 'roles.id = users.role');
    $this->db->where('users.id', $receiver_id);
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
        $receiver_role = $query->row()->role_name;
    } else {
        $receiver_role = 'Unknown';
    }

    // Pass all to view
    $data['vehicle_id'] = $vehicle_id;
    $data['receiver_id'] = $receiver_id;
    $data['receiver_role'] = $receiver_role;

    $this->load->view('chat', $data);
}


    public function chat_overview()
    {
        $data["main"] = "chat_overview";
        $this->load->view("admin/template", $data);

    }


    public function get_user_info()
{
    $user_id = $this->input->get('id');
    if (!$user_id) {
        echo json_encode([]);
        return;
    }

    $this->db->select('users.username, users.mobile, users.email, roles.role as role_name');
    $this->db->from('users');
    $this->db->join('roles', 'roles.id = users.role', 'left');
    $this->db->where('users.id', $user_id);
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
        echo json_encode($query->row());
    } else {
        echo json_encode([]);
    }
}

    public function test()
    {
        if (!has_permission("Car List")) {
            show_error("Unauthorized access");
        }
    }
}
