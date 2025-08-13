<?php
defined('BASEPATH') or exit('No direct script access allowed');

class WebsiteController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->helper(['form', 'url']);
        // $this->load->library(['form_validation', 'session']);
        $this->load->model('WebsiteModel');
        $this->load->model('AdminModel');
        $this->load->library('pagination');
          $this->load->helper('subscription'); // Load the helper
    }


    public function index()
    {
        $data['brands'] = $this->WebsiteModel->get_data('make');
        $data['bikes'] = $this->WebsiteModel->filter_vehicles(1, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        $data['cars'] = $this->WebsiteModel->filter_vehicles(2, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        $data['commercials'] = $this->WebsiteModel->filter_vehicles(3, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);
        $data['categories'] = $this->WebsiteModel->getCategories();
        $data['blogs'] = $this->db->get('blogs')->result();
        $user_id = $this->session->userdata('user_id');
        $this->db->where('user_id', $user_id);
        $fav_count = $this->db->count_all_results('favorites');
        $data['favorite_count'] = $fav_count;
        $this->load->view('home', $data);
    }

    public function set_location()
    {
        $location = $this->input->post('location');
        //  print_r($location);die;
        if (!empty($location)) {
            $this->session->set_userdata('location', $location);
            echo "success";
        } else {
            $this->session->unset_userdata('location', $location);
            echo "no location selected";
        }
    }


   public function save_language()
{
    $lang = $this->input->post('lang');
    //print_r($lang);
    if ($lang) {
        $this->session->set_userdata('selected_lang', $lang);
    }
}



    public function advance_filter()
    {

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

        $this->load->view('advance-filter', $data); // This will load the view file
    }
    public function register()
    {
        $this->form_validation->set_rules('role', 'Role', 'required');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('cpassword', 'Confirm Password', 'required|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            echo json_encode(['status' => false, 'errors' => validation_errors()]);
        } else {
            $data = [
                'role' => $this->input->post('role'),
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),
                'mobile' => $this->input->post('mobile'),
                'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
            ];

            $this->db->insert('users', $data);
            echo json_encode(['status' => true, 'message' => 'Registered successfully']);
        }
    }



    // public function login()
    // {
    //     // print_r($_POST);

    //     $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    //     $this->form_validation->set_rules('password', 'Password', 'required');

    //     if ($this->form_validation->run() == FALSE) {
    //         echo json_encode([
    //             'status' => 'error',
    //             'message' => validation_errors()
    //         ]);
    //     } else {
    //         $email = $this->input->post('email');
    //         $password = $this->input->post('password');

    //         $user = $this->WebsiteModel->get_user_by_email($email);
    //         // print_r($user);die;

    //         if ($user && password_verify($password, $user->password) && ($user->status == 1)) {
    //             $roles = $this->WebsiteModel->get_data_by_id($user->role, 'roles');
    //             // Set session

    //             $this->session->set_userdata([
    //                 'user_id' => $user->id,
    //                 'username' => $user->username,
    //                 'mobile' => $user->mobile,
    //                 'status' => $user->status,
    //                 'email' => $user->email,
    //                 'role' => $user->role,
    //                 'role_name' => $roles->role
    //             ]);


    //             echo json_encode([
    //                 'status' => 'success',
    //                 'role' => $user->role,
    //                 'role_name' => $roles->role,
    //                 'message' => 'Login successful!'
    //             ]);
    //         } elseif ($user->status == 0) {

    //             echo json_encode([
    //                 'status' => 'error',
    //                 'message' => 'Not allowed to login'
    //             ]);
    //         } else {
    //             echo json_encode([
    //                 'status' => 'error',
    //                 'message' => 'Invalid email or password.'
    //             ]);
    //         }
    //     }
    // }


    public function login()
{
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required');

    if ($this->form_validation->run() == FALSE) {
        echo json_encode([
            'status' => 'error',
            'message' => validation_errors()
        ]);
        return;
    }

    $email = $this->input->post('email');
    $password = $this->input->post('password');

    $user = $this->WebsiteModel->get_user_by_email($email);

    if (!$user) {
        // Email not found
        echo json_encode([
            'status' => 'error',
            'message' => 'Email not registered.'
        ]);
        return;
    }

    if (!password_verify($password, $user->password)) {
        // Wrong password
        echo json_encode([
            'status' => 'error',
            'message' => 'Invalid password.'
        ]);
        return;
    }

    if ($user->status != 1) {
        // Inactive account
        echo json_encode([
            'status' => 'error',
            'message' => 'Not allowed to login.'
        ]);
        return;
    }

    // Successful login
    $roles = $this->WebsiteModel->get_data_by_id($user->role, 'roles');
    $this->session->set_userdata([
        'user_id' => $user->id,
        'username' => $user->username,
        'mobile' => $user->mobile,
        'status' => $user->status,
        'email' => $user->email,
        'role' => $user->role,
        'role_name' => $roles->role
    ]);

    echo json_encode([
        'status' => 'success',
        'role' => $user->role,
        'role_name' => $roles->role,
        'message' => 'Login successful!'
    ]);
}


    public function logout()
    {
        $this->session->sess_destroy(); // destroy all session data
        redirect(base_url());
    }


    // public function forgot_password() {
    //     // $this->load->library('form_validation');
    //     $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

    //     if ($this->form_validation->run() == FALSE) {
    //         $this->session->set_flashdata('forgot_msg', 'Please enter a valid email.');
    //         redirect(base_url());
    //     } else {
    //         $email = $this->input->post('email');
    //         $user = $this->db->get_where('users', ['email' => $email])->row();

    //         if ($user) {
    //             // Generate token
    //             $token = bin2hex(random_bytes(16));
    //             $expiry = date("Y-m-d H:i:s", strtotime('+1 hour'));

    //             // Save to DB
    //             $this->db->where('email', $email)->update('users', [
    //                 'token' => $token,
    //                 'token_expiry' => $expiry
    //             ]);

    //             // Send email
    //             $reset_link = base_url("reset-password/{$token}");
    //             $subject = "Password Reset Link";
    //             // $message = "Hello {$user->name},<br><br>Click below link to reset your password:<br>
    //              <a href='{$reset_link}'>{$reset_link}</a><br><br>This link is valid for 1 hour.";

    //           $message = "
    //             <p>Hello " . htmlspecialchars($user->username) . ",</p>
    //             <p>Click the link below to reset your password:</p>
    //             <p><a href=\"{$reset_link}\" target=\"_blank\">{$reset_link}</a></p>
    //             <p>This link is valid for 1 hour.</p>
    //             <br><p>Regards,<br>Auto Decar Team</p>
    //         ";

    //             $this->_send_email($email, $subject, $message);

    //             $this->session->set_flashdata('forgot_msg', 'Reset link sent to your email.');
    //         } else {
    //             $this->session->set_flashdata('forgot_msg', 'Email not found.');
    //         }

    //         redirect(base_url());
    //     }
    // }


    public function forgot_password()
    {
        if ($this->input->is_ajax_request()) {
            $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

            if ($this->form_validation->run() == FALSE) {
                echo json_encode(['message' => 'Please enter a valid email.']);
                return;
            }

            $email = $this->input->post('email');
            $user = $this->db->get_where('users', ['email' => $email])->row();

            if ($user) {
                $token = bin2hex(random_bytes(16));
                $expiry = date("Y-m-d H:i:s", strtotime('+1 hour'));

                $this->db->where('email', $email)->update('users', [
                    'token' => $token,
                    'token_expiry' => $expiry
                ]);

                $reset_link = base_url("reset-password/{$token}");
                $subject = "Password Reset Link";
                $message = "
            <p>Hello " . htmlspecialchars($user->username) . ",</p>
            <p>Click the link below to reset your password:</p>
            <p><a href=\"{$reset_link}\" target=\"_blank\">{$reset_link}</a></p>
            <p>This link is valid for 1 hour.</p>
            <br><p>Regards,<br>Auto Decar Team</p>
        ";

                $this->_send_email($email, $subject, $message);

                echo json_encode(['message' => 'Reset link sent to your email.']);
            } else {
                echo json_encode(['message' => 'Email not found.']);
            }
        } else {
            show_error('Direct access not allowed');
        }
    }



    private function _send_email($to, $subject, $message)
    {
        $this->load->library('email');
        $this->email->set_mailtype("html"); // Move this line up

        $this->email->from('test@email.com', 'Auto Decar');
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        if (!$this->email->send()) {
            log_message('error', 'Email failed: ' . $this->email->print_debugger());
        }
    }

    public function reset_password($token = null)
    {
        if (!$token) {
            show_error('Invalid token');
        }

        $user = $this->db->get_where('users', ['token' => $token])->row();

        if (!$user || strtotime($user->token_expiry) < time()) {
            show_error('Token expired or invalid');
        }

        // Show reset form
        if ($_POST) {
            $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'matches[password]');

            if ($this->form_validation->run() === TRUE) {
                $password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
                $this->db->where('id', $user->id)->update('users', [
                    'password' => $password,
                    'token' => NULL,
                    'token_expiry' => NULL
                ]);
                $this->session->set_flashdata('success', 'Password reset successfully.');
                redirect(base_url());
            }
        }

        // Load reset view
        $this->load->view('reset_password', ['token' => $token]);
    }


    public function profile()
    {
        $data['user'] = $this->db->get_where('users', ['id' => $_SESSION['user_id']])->row();
        //  print_r($data['user']);die;

        $this->load->view('profile', $data);
    }


    public function update_profile()
    {
        // $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('profile'); // replace with actual URL
        } else {
            $username = $this->input->post('username');
            $email = $this->input->post('email');
            $old_image = $this->input->post('old_image');
            $profile_image = $old_image;

            // Check if new image is uploaded
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

            // Update user in DB
            $data = [
                'username' => $username,
                'email'    => $email,
                'profile'  => $profile_image
            ];

            $this->db->where('id', $this->session->userdata('user_id'));
            $update = $this->db->update('users', $data);

            if ($update) {
                $this->session->set_flashdata('success', 'Profile updated successfully!');
            } else {
                $this->session->set_flashdata('error', 'Something went wrong. Please try again.');
            }

            redirect('profile');
        }
    }


    public function listing_list()
    {
        $data['year_range'] = $this->db->get_where('years_range', ['id' => 1])->row_array();
        $data['categories'] = $this->WebsiteModel->get_data('categories');
        $data['makes'] = $this->WebsiteModel->get_data('make');
        $data['models'] =  $this->WebsiteModel->get_data('model');
        $data['fuel_types'] =  $this->WebsiteModel->get_data('fuel_type');
        $data['transmissions'] = $this->WebsiteModel->get_data('transmission');
        // $data['vehicles'] = $this->WebsiteModel->get_vehicle();
        $vehicle_type = $this->input->get('vehicle_type');
        $cat_id = $this->input->get('cat_id');
        $make = $this->input->get('make');
        $model = $this->input->get('model');

        $variant = $this->input->get('variant');
        $fuel_type = $this->input->get('fuel_type');
        $color = $this->input->get('color');
        $mileage = $this->input->get('mileage');
        $transmission = $this->input->get('transmission');
        $vehicle_condition = $this->input->get('vehicle_condition');
        $ownership = $this->input->get('ownership');
        $euro_norm = $this->input->get('euro_norm');
        $winter_tires = $this->input->get('winter_tires');
        $ac_type = $this->input->get('ac_type');
        $parking_sensors = $this->input->get('parking_sensors');

        $comfort_and_interior = $this->input->get('comfort_and_interior');
        $safety_and_assistance = $this->input->get('safety_and_assistance');
        $lighting_and_visibility = $this->input->get('lighting_and_visibility');
        $multimedia_and_navigation = $this->input->get('multimedia_and_navigation');
        $engine_and_drive_technology = $this->input->get('engine_and_drive_technology');
        $exteriors = $this->input->get('exterior');
        $other_features_and_extras = $this->input->get('other_features_and_extras');

        $minYear = $this->input->get('year');
        $maxYear = $this->input->get('year_to');
        $zipcode = $this->input->get('zipcode');
        $minkm = str_replace(',', '', $this->input->get('km'));
        $maxkm = str_replace(',', '', $this->input->get('km_to'));
        $min_price = str_replace(',', '', $this->input->get('price'));
        $max_price = str_replace(',', '', $this->input->get('price_to'));



        // Step 2: Pagination Configuration
        $config['base_url'] = base_url('listing-list');
        $config['total_rows'] = $this->WebsiteModel->count_filtered_vehicles(
            $vehicle_type,
            $cat_id,
            $make,
            $model,
            $minYear,
            $maxYear,
            $min_price,
            $max_price,
            $minkm,
            $maxkm,
            $zipcode,
            $variant,
            $fuel_type,
            $color,
            $mileage,
            $transmission,
            $vehicle_condition,
            $ownership,
            $euro_norm,
            $winter_tires,
            $ac_type,
            $parking_sensors,
            $comfort_and_interior,
            $safety_and_assistance,
            $lighting_and_visibility,
            $multimedia_and_navigation,
            $engine_and_drive_technology,
            $exteriors,
            $other_features_and_extras
        );

        $config['per_page'] = 5;
        $config['page_query_string'] = TRUE;
        $config['query_string_segment'] = 'page';

        $config['first_link'] = FALSE;
        $config['last_link']  = FALSE;

        $config['full_tag_open']  = '<ul class="pagination custom-pagination">';
        $config['full_tag_close'] = '</ul>';

        $config['cur_tag_open']  = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open']  = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '<span class="page-link">&laquo;</span>';
        $config['next_link'] = '<span class="page-link">&raquo;</span>';

        // ✅ Add this line to apply class to all <a> tags automatically
        $config['attributes'] = ['class' => 'page-link'];


        $this->pagination->initialize($config);

        // Step 3: Get page offset
        $page = ($this->input->get('page')) ? $this->input->get('page') : 0;

        // Step 4: Fetch Filtered Vehicles
        $data['vehicles'] = $this->WebsiteModel->filter_vehicles(
            $vehicle_type,
            $cat_id,
            $make,
            $model,
            $minYear,
            $maxYear,
            $min_price,
            $max_price,
            $minkm,
            $maxkm,
            $zipcode,
            $variant,
            $fuel_type,
            $color,
            $mileage,
            $transmission,
            $vehicle_condition,
            $ownership,
            $euro_norm,
            $winter_tires,
            $ac_type,
            $parking_sensors,
            $comfort_and_interior,
            $safety_and_assistance,
            $lighting_and_visibility,
            $multimedia_and_navigation,
            $engine_and_drive_technology,
            $exteriors,
            $other_features_and_extras,
            $config['per_page'],
            $page
        );
    // echo $this->db->last_query();die;
        // Step 5: Send Pagination Links to View
        $data['pagination_links'] = $this->pagination->create_links();
        $this->load->view('listing-list', $data);
    }



    public function car()
    {
        // Step 2: Pagination Configuration
        $config['base_url'] = base_url('car');
        $config['total_rows'] = $this->WebsiteModel->count_filtered_vehicles(
            2,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null
        );
        //  print_r($config['total_rows']);die;

        $config['per_page'] = 5;
        $config['page_query_string'] = TRUE;
        $config['query_string_segment'] = 'page';

        $config['first_link'] = FALSE;
        $config['last_link']  = FALSE;

        $config['full_tag_open']  = '<ul class="pagination custom-pagination">';
        $config['full_tag_close'] = '</ul>';

        $config['cur_tag_open']  = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open']  = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '<span class="page-link">&laquo;</span>';
        $config['next_link'] = '<span class="page-link">&raquo;</span>';

        // ✅ Add this line to apply class to all <a> tags automatically
        $config['attributes'] = ['class' => 'page-link'];


        $this->pagination->initialize($config);

        // Step 3: Get page offset
        $page = ($this->input->get('page')) ? $this->input->get('page') : 0;

        // Step 4: Fetch Filtered Vehicles
        $data['vehicles'] = $this->WebsiteModel->filter_vehicles(
            2,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            $config['per_page'],
            $page
        );

        // Step 5: Send Pagination Links to View
        $data['pagination_links'] = $this->pagination->create_links();


        $this->load->view('listing-list', $data);
    }


    public function bike()
    {
        // Step 2: Pagination Configuration
        $config['base_url'] = base_url('bike');
        $config['total_rows'] = $this->WebsiteModel->count_filtered_vehicles(
            1,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null
        );

        $config['per_page'] = 5;
        $config['page_query_string'] = TRUE;
        $config['query_string_segment'] = 'page';

        $config['first_link'] = FALSE;
        $config['last_link']  = FALSE;

        $config['full_tag_open']  = '<ul class="pagination custom-pagination">';
        $config['full_tag_close'] = '</ul>';

        $config['cur_tag_open']  = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open']  = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '<span class="page-link">&laquo;</span>';
        $config['next_link'] = '<span class="page-link">&raquo;</span>';

        // ✅ Add this line to apply class to all <a> tags automatically
        $config['attributes'] = ['class' => 'page-link'];


        $this->pagination->initialize($config);

        // Step 3: Get page offset
        $page = ($this->input->get('page')) ? $this->input->get('page') : 0;

        // Step 4: Fetch Filtered Vehicles
        $data['vehicles'] = $this->WebsiteModel->filter_vehicles(
            1,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            $config['per_page'],
            $page
        );

        // Step 5: Send Pagination Links to View
        $data['pagination_links'] = $this->pagination->create_links();
        $this->load->view('listing-list', $data);
    }


    public function commercial()
    {
        // Step 2: Pagination Configuration
        $config['base_url'] = base_url('commercial');
        $config['total_rows'] = $this->WebsiteModel->count_filtered_vehicles(
            3,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null
        );

        $config['per_page'] = 5;
        $config['page_query_string'] = TRUE;
        $config['query_string_segment'] = 'page';

        $config['first_link'] = FALSE;
        $config['last_link']  = FALSE;

        $config['full_tag_open']  = '<ul class="pagination custom-pagination">';
        $config['full_tag_close'] = '</ul>';

        $config['cur_tag_open']  = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['num_tag_open']  = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '<span class="page-link">&laquo;</span>';
        $config['next_link'] = '<span class="page-link">&raquo;</span>';

        // ✅ Add this line to apply class to all <a> tags automatically
        $config['attributes'] = ['class' => 'page-link'];


        $this->pagination->initialize($config);

        // Step 3: Get page offset
        $page = ($this->input->get('page')) ? $this->input->get('page') : 0;

        // Step 4: Fetch Filtered Vehicles
        $data['vehicles'] = $this->WebsiteModel->filter_vehicles(
            3,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            null,
            $config['per_page'],
            $page
        );

        // Step 5: Send Pagination Links to View
        $data['pagination_links'] = $this->pagination->create_links();

        $this->load->view('listing-list', $data);
    }



    public function chat_list()
    {
        $this->load->view('chat_list'); // or seller/chat_list
    }



    public function filterVehicles()
    {
        $make = $this->input->get('make');
        $model = $this->input->get('model');
        $data['vehicles'] = $this->WebsiteModel->filter_vehicles($make, $model, $fuel_type, $transmission, $minYear, $maxYear, $min_price, $max_price, $minkm, $maxkm);
        $this->load->view('partials/_vehicle_list',  $data);
    }




    public function listing_grid()
    {
        $data['vehicles'] = $this->WebsiteModel->get_vehicle();

        // print_r($data['vehicles']);die;
        $this->load->view('listing-grid', $data);
    }

    public function listing_grid2()
    {

        $this->load->view('listing-grid2');
    }


    public function listing_grid_map()
    {

        $this->load->view('listing-grid-map');
    }


    public function listing_details()
    {

        $this->load->view('listing-details');
    }

    public function blog_grid()
    {
        $data['blogs'] = $this->db->get('blogs')->result();
        $this->load->view('blog-grid', $data);
    }

    public function blog_details($id = null)
    {
        if (!$id) {
            show_404(); // show 404 if ID not found
        }
        $data['blog'] = $this->WebsiteModel->get_data_by('id', $id, 'blogs');

        $this->load->view('blog-details', $data);
    }

    public function listing_details_v3()
    {

        $this->load->view('listing-details-v3');
    }

    public function listing_details_v4()
    {

        $this->load->view('listing-detail-v4');
    }

    public function list_details_v1($slug = null)
    {
        $data['details'] = $this->WebsiteModel->get_data_by('slug', $slug, 'car_list');
        $this->load->view('list-details-v1', $data);
    }

    public function about_us()
    {

        $data['about'] = $this->WebsiteModel->get_data_by('id', 1, 'aboutus');
        // $data['blogs'] = $this->db->get('blogs')->result();
        $this->load->view('about-us', $data);
    }


    public function faq()
    {

        $this->load->view('faq');
    }

    public function pricing()
    {

        $this->load->view('pricing');
    }

    public function dealer_list()
    {

        $this->load->view('dealer-list');
    }

    public function dealer_details()
    {

        $this->load->view('dealer-details');
    }

    public function sale_agent()
    {

        $this->load->view('sale-agent');
    }

    public function sale_agent_details()
    {

        $this->load->view('sale-agent-details');
    }

    public function compare()
    {

        $this->load->view('compare');
    }
    public function contact()
    {
        $data['contact'] = $this->db->where('id', 1)->get('contectus')->row();

        $this->load->view('contact', $data);
    }

    public function enquiry()
    {
       // Default values
    $login_name = 'Unknown';
    $login_role = 'Visitor';

    // If user is logged in
    if (isset($_SESSION['user_id']) && $_SESSION['user_id'] != '') {
        $users = $this->db->where('id', $_SESSION['user_id'])->get('users')->row();
        $user_role = $this->db->where('id', $users->role)->get('roles')->row();
        $login_name = $users->username;
        $login_role = $user_role->role;
    }
            
        $data = array(

            'login_name' => $login_name,
            'login_role' => $login_role,
            'name'    => $this->input->post('name'),
            'email'   => $this->input->post('email'),
            'mobile'   => $this->input->post('tel'),
            'subject' => $this->input->post('subject'),
            'message' => $this->input->post('message')
        );

        if ($this->db->insert('enquiry', $data)) {
            $this->session->set_flashdata('success', 'Thank you for enquiry');
        } else {
            $this->session->set_flashdata('error', 'Something went wrong.');
        }

        redirect('contact');
    }


    public function my_favorite()
    {

        $this->load->view('my-favorite');
    }


    public function toggle()
    {
        $vehicle_id = $this->input->post('vehicle_id');
        $user_id = $this->session->userdata('user_id');

        if (!$user_id) {
            echo json_encode(['status' => 'error', 'message' => 'User not logged in']);
            return;
        }

        $result = $this->WebsiteModel->toggle_favorite($user_id, $vehicle_id);

        echo json_encode(['status' => 'success', 'action' => $result]);
    }

    public function favorite_list()
    {
        $user_id = $this->session->userdata('user_id');
        $data['favorites'] = $this->WebsiteModel->getFavoritesByUser($user_id);
        $this->load->view('my_favorite', $data);
    }


    public function reviews()
    {
        // $this->load->library('form_validation');

        // $this->form_validation->set_rules('name', 'Name', 'required|trim');
        // $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim');
        // print_r($_SESSION[]);die;
        $this->form_validation->set_rules('rating', 'Rating', 'required|greater_than[0]');
        $this->form_validation->set_rules('review', 'Review', 'required|trim');
        $slug = $this->input->post('slug');
        if ($this->form_validation->run() == FALSE) {
            // Validation failed
            $this->session->set_flashdata('error', validation_errors());
            redirect('list-details/' . $slug . '#review-section');
        } else {
            // Validation success
            $data = [
                // 'name' => $this->input->post('name'),
                // 'email' => $this->input->post('email'),
                'user_id' => $_SESSION['user_id'],
                'vehicle_id' => $this->input->post('vehicle_id'),
                'rating' => $this->input->post('rating'),
                'review_text' => $this->input->post('review')
            ];

            $this->WebsiteModel->insertReview($data);

            $this->session->set_flashdata('msg', 'Thank you for your review!');
            redirect('list-details/' . $slug . '#review-section');
        }
    }

    public function delete_review_ajax()
    {
        $review_id = $this->input->post('review_id');
        $user_id = $_SESSION['user_id'];

        // Check ownership before deleting
        $this->db->where(['id' => $review_id, 'user_id' => $user_id]);
        $query = $this->db->get('reviews');
        if ($query->num_rows() == 0) {
            echo json_encode(['status' => 'error', 'message' => 'Review not found or permission denied.']);
            return;
        }

        // Proceed with deletion
        $this->db->where('id', $review_id);
        if ($this->db->delete('reviews')) {
            echo json_encode(['status' => 'success', 'message' => 'Review deleted successfully.']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Failed to delete review.']);
        }
    }


    //    url =  https://irisinformatics.net/autodecar/websiteController/subscription_mail
    public function subscription_mail(){

         send_subscription_reminders();
    }


    public function get_vehicle_count()
{
    // print_r($_POST);die;
    $vehicle_type = $this->input->post('vehicle_type');
    $cat_id       = $this->input->post('cat_id');
    $make         = $this->input->post('make');
    $model        = $this->input->post('model');
    $year         = $this->input->post('year');
    $year_to      = $this->input->post('year_to');
    $zipcode      = $this->input->post('zipcode');
    $price        = $this->input->post('price');
    $price_to     = $this->input->post('price_to');

    $this->db->from('car_list');

    if (!empty($vehicle_type)) $this->db->where('vehicle_type', $vehicle_type);
    if (!empty($cat_id) && $cat_id != 'Any') $this->db->where('cat_id', $cat_id);
    if (!empty($make) && $make != 'Any') $this->db->where('make', $make);
    if (!empty($model) && $model != 'Any') $this->db->where('model', $model);
    if (!empty($year)) $this->db->where('year >=', $year);
    if (!empty($year_to)) $this->db->where('year <=', $year_to);
    if (!empty($zipcode)) $this->db->where('zipcode', $zipcode);
    if (!empty($price)) $this->db->where('total_price >=', $price);
    if (!empty($price_to)) $this->db->where('total_price <=', $price_to);

    $count = $this->db->count_all_results();

    echo json_encode(['count' => $count]);
}


}
