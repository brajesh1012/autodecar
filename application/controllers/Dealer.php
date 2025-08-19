<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Dealer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("AdminModel");
        $this->load->model("WebsiteModel");
		$this->load->model("Common_model");
        $this->load->helper("permission");
    }

    public function index()
    {
        // if (!has_permission("Dashboard")) {
        //     show_error("Unauthorized access");
        // }
        if (
            isset($_SESSION["role_name"]) &&
            $_SESSION["role_name"] == "Dealer"
        ) {
              $status = $this->input->post('post_status'); // get status from POST

        $where = ['added_by' => $this->session->userdata('user_id')];

        if ($status !== null && $status !== '' && $status !== 'all') {
            $where['status'] = $status; // add status to where condition
        }

        $data['current_status'] = $status; 

                $data['total']         = $this->Common_model->count_all();
                $data['under_review']  = $this->Common_model->count_by_status(0);
                $data['active']        = $this->Common_model->count_by_status(1);
                $data['reserved']      = $this->Common_model->count_by_status(2);
                $data['sold']          = $this->Common_model->count_by_status(3);
                $data['expired']       = $this->Common_model->count_by_status(4);
                   $data["details"] = $this->Common_model->get_vehicle_list_by_user("car_list", $where ,"id DESC");
            $data["main"] = "dashboard";
            $this->load->view("dealer/template", $data);
        } else {
            redirect(base_url());
        }
    }

    public function my_listing()
    {
        // if (!has_permission("Car List")) {
        //     show_error("Unauthorized access");
        // }
  if ($_SESSION["role_name"] != "Dealer") {
            redirect(base_url());
        }

         $status = $this->input->post('post_status'); // get status from POST

        $where = ['added_by' => $this->session->userdata('user_id')];

        if ($status !== null && $status !== '' && $status !== 'all') {
            $where['status'] = $status; // add status to where condition
        }

        $data['current_status'] = $status; 

        $data["details"] = $this->Common_model->get_vehicle_list_by_user("car_list",$where,"id DESC");
        $data["main"] = "my-listing";
        $this->load->view("dealer/template", $data);
    }

    // public function my_favorite()
    // {
    //     $data["main"] = "my-favorite";
    //     $this->load->view("dealer/template", $data);
    // }

    // public function message()
    // {
    //     $data["main"] = "message";
    //     $this->load->view("dealer/template", $data);
    // }

    // public function my_review()
    // {
    //     $data["main"] = "my-review";
    //     $this->load->view("dealer/template", $data);
    // }

    public function my_profile()
    
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
                redirect('profile');
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
                redirect('dealer/my-profile');
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
                redirect('dealer/my-profile');
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
            redirect("dealer/my-profile");
        }



    }



    public function add_listing()
    {

        if ($_SESSION["role_name"] != "Dealer") {
            redirect(base_url());
        }

        $this->form_validation->set_rules("vehicle_type", "Vehicle Type", "required");
        $this->form_validation->set_rules("make", "Make By", "required");
        $this->form_validation->set_rules("model", "Model", "required");
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
            $data["makes"] = $this->WebsiteModel->get_data("make");
            $data["models"] = $this->WebsiteModel->get_data("model");
            $data["fuel_types"] = $this->WebsiteModel->get_data("fuel_type");
            $data["transmissions"] = $this->WebsiteModel->get_data(
                "transmission"
            );
            $data["cities"] = $this->AdminModel->get_data("cities");
            $data["main"] = "add-listing";
            $this->load->view("dealer/template", $data);
        } else {
			
			$make = $this->input->post('make');
			$slug = url_title($make, 'dash', TRUE);
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

            // Prepare data to insert (example)
            $data = [
				"slug" => $slug,
                "make" => $this->input->post("make"),
                "model" => $this->input->post("model"),
                "year" => $this->input->post("year"),
                "mileage" => $this->input->post("mileage"),
                "vehicle_condition" => $this->input->post("vehicle_condition"),
                "price" => $this->input->post("price"),
                "fuel_type" => $this->input->post("fuel_type"),
                "transmission" => $this->input->post("transmission"),
                "location" => $this->input->post("location"),
                "description" => $this->input->post("description"),
                "km" => $this->input->post("km"),
                "vehicle_type" => $this->input->post("vehicle_type"),
                "added_by" => $this->session->userdata('user_id'),
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
            // Example saving to DB
            // $this->Vehicle_model->insert($data);

            $this->session->set_flashdata(
                "success",
                "Vehicle added successfully!"
            );
            redirect("dealer/my-listing");
        }
    }
	
	public function edit_listing($id)
    {

        if ($_SESSION["role_name"] != "Dealer") {
            redirect(base_url());
        }

        $this->form_validation->set_rules("vehicle_type", "Vehicle Type", "required");
        $this->form_validation->set_rules("make", "Make By", "required");
        $this->form_validation->set_rules("model", "Model", "required");
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
		$oldmake = $cars->make;
		
        if ($this->form_validation->run() == false) {
			
			
            
			$data["makes"] = $this->WebsiteModel->get_data("make");
            $data["models"] = $this->WebsiteModel->get_data("model");
            $data["fuel_types"] = $this->WebsiteModel->get_data("fuel_type");
            $data["transmissions"] = $this->WebsiteModel->get_data(
                "transmission"
            );
            $data["cities"] = $this->AdminModel->get_data("cities");
            $data["main"] = "edit-listing";
            $this->load->view("dealer/template", $data);
        } else {
			
			$make = $this->input->post('make');
			if($make != $oldmake OR $slug == '')
			{
				$slug = url_title($make, 'dash', TRUE);
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

            // Prepare data to insert (example)
            $data = [
				"slug" => $slug,
                "make" => $this->input->post("make"),
                "model" => $this->input->post("model"),
                "year" => $this->input->post("year"),
                "mileage" => $this->input->post("mileage"),
                "vehicle_condition" => $this->input->post("vehicle_condition"),
                "price" => $this->input->post("price"),
                "fuel_type" => $this->input->post("fuel_type"),
                "transmission" => $this->input->post("transmission"),
                "location" => $this->input->post("location"),
                "description" => $this->input->post("description"),
                "km" => $this->input->post("km"),
                "vehicle_type" => $this->input->post("vehicle_type"),
                "added_by" => $this->session->userdata('user_id')
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
                "Vehicle added successfully!"
            );
            redirect("dealer/my-listing");
        }
    }

    public function add_model()
    {

        if ($_SESSION["role_name"] != "Dealer") {
            redirect(base_url());
        }
        //  if (!has_permission("Add Model")) {
        //     show_error("Unauthorized access");
        // }

        $this->form_validation->set_rules(
            "name",
            "Model Name",
            "required|is_unique[model.name]"
        );

        if ($this->form_validation->run() == false) {
            $data["models"] = $this->WebsiteModel->get_data("model");
            $data["main"] = "vehicle_model";
            $this->load->view("dealer/template", $data);
        } else {
            // Prepare data to insert (example)
            $data = [
                "name" => $this->input->post("name"),
            ];
            $this->db->insert("model", $data); // Save to database

            $this->session->set_flashdata(
                "success",
                "Model added successfully!"
            );
            redirect("dealer/add-model");
        }
    }

    public function delete_model()
    {
        if ($_SESSION["role_name"] != "Dealer") {
            redirect(base_url());
        }
        $mid = $_GET["m_id"];
        $delete = $this->db->where("id", $mid)->delete("model");

        if ($delete) {
            $this->session->set_flashdata(
                "success",
                "Model Delete successfully!"
            );
            redirect("dealer/add-model");
        }
    }


    public function add_make()
    {
        if ($_SESSION["role_name"] != "Dealer") {
            redirect(base_url());
        }
        $this->form_validation->set_rules(
            "name",
            "Make Name",
            "required|is_unique[make.name]"
        );

        if ($this->form_validation->run() == false) {
            $data["makes"] = $this->WebsiteModel->get_data("make");
            $data["main"] = "vehicle_make";
            $this->load->view("dealer/template", $data);
        } else {
            // Prepare data to insert (example)
            $data = [
                "name" => $this->input->post("name"),
            ];
            $this->db->insert("make", $data); // Save to database

            $this->session->set_flashdata(
                "success",
                "Make added successfully!"
            );
            redirect("dealer/add-make");
        }
    }

    public function delete_make()
    {
        if ($_SESSION["role_name"] != "Dealer") {
            redirect(base_url());
        }
        $mid = $_GET["m_id"];
        $delete = $this->db->where("id", $mid)->delete("make");

        if ($delete) {
            $this->session->set_flashdata(
                "success",
                "Make Delete successfully!"
            );
            redirect("dealer/add-make");
        }
    }

   
    public function add_transmission()
    {
        if ($_SESSION["role_name"] != "Dealer") {
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
            $this->load->view("dealer/template", $data);
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
            redirect("dealer/add-transmission");
        }
    }

    public function delete_transmission()
    {
        if ($_SESSION["role_name"] != "Dealer") {
            redirect(base_url());
        }

        $tid = $_GET["t_id"];
        $delete = $this->db->where("id", $tid)->delete("transmission");

        if ($delete) {
            $this->session->set_flashdata(
                "success",
                "Transmission Delete successfully!"
            );
            redirect("dealer/add-transmission");
        }
    }

    public function add_fuel_type()
    {
        if ($_SESSION["role_name"] != "Dealer") {
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
            $this->load->view("dealer/template", $data);
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
            redirect("dealer/add-fuel-type");
        }
    }

    public function delete_fuel_type()
    {
        if ($_SESSION["role_name"] != "Dealer") {
            redirect(base_url());
        }

        $fid = $_GET["f_id"];
        $delete = $this->db->where("id", $fid)->delete("fuel_type");

        if ($delete) {
            $this->session->set_flashdata(
                "success",
                "Fuel Type Delete successfully!"
            );
            redirect("dealer/add-fuel-type");
        }
    }

    public function delete_car_img()
{

    if ($_SESSION["role_name"] != "Dealer") {
            redirect(base_url());
        }

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

    redirect('dealer/my-listing');
}

// Vehicle Bulk Upload Start

 public function bulk_upload_view() {

       if ($_SESSION["role_name"] != "Dealer") {
            redirect(base_url());
        }

           $data["main"] = "vehicle_bulk_upload";
        $this->load->view("dealer/template", $data);
    }


public function import_csv() {

    if ($_SESSION["role_name"] != "Dealer") {
            redirect(base_url());
        }

    if ($_FILES['csv_file']['name']) {
        $filename = $_FILES['csv_file']['tmp_name'];
        $file = fopen($filename, "r");
        $i = 0;
        $insertCount = 0;
        $duplicateCount = 0;

        while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {
            if ($i == 0) { $i++; continue; } // Skip header

            // SLug

            $make =  $data[0];
			$slug = url_title($make, 'dash', TRUE);
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

            $insertData = [
                "slug"               => $slug,
                "make"               => $data[0],
                "model"              => $data[1],
                "year"               => $data[2],
                "mileage"            => $data[3],
                "vehicle_condition"  => $data[4],
                "price"              => $data[5],
                "fuel_type"          => $data[6],
                "transmission"       => $data[7],
                "location"           => $data[8],
                "km"                 => $data[9],
                "description"        => $data[10],
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

    redirect('dealer/bulk-upload-view');
}



public function download_csv()
{
    if ($_SESSION["role_name"] != "Dealer") {
            redirect(base_url());
        }

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

// Vehicle Bulk Upload End 


  public function delete_vehicle_record() {
    
    // if ($_SESSION["role_name"] != "Dealer") {
    //         redirect(base_url());
    //     }

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


 public function change_password()
    {
         $this->form_validation->set_rules("password", "Password", "required");
        $this->form_validation->set_rules("new_password", "New Password", "required|min_length[8]");
        $this->form_validation->set_rules(
            "confirm_password",
            "Confirm Password",
            "required|matches[new_password]"
        );
		
		  if ($this->form_validation->run() == FALSE) {
         $data["main"] = "change-password";
        $this->load->view("dealer/template", $data);
    } else {
        $current_password = $this->input->post('password');
        $new_password = $this->input->post('new_password');
        $user_id = $this->session->userdata('user_id');
        $user = $this->db->get_where('users', ['id' => $user_id])->row();

        if ($user) {
            if (password_verify($current_password, $user->password)) {
                if (password_verify($new_password, $user->password)) {
                    $this->session->set_flashdata('error', 'New password cannot be the same as the current password.');
                    redirect('dealer/change-password');
                }

                $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);
                $this->db->where('id', $user_id)->update('users', ['password' => $hashed_password]);

                $this->session->set_flashdata('success', 'Password changed successfully.');
                redirect('dealer/change-password'); 

            } else {
                $this->session->set_flashdata('error', 'Incorrect current password.');
                redirect('dealer/change-password');
            }
        } else {
            $this->session->set_flashdata('error', 'User not found.');
            redirect('dealer/change-password');
        }
    }
    }

}