<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WebsiteController extends CI_Controller {

        public function __construct() {
        parent::__construct();
        // $this->load->helper(['form', 'url']);
        // $this->load->library(['form_validation', 'session']);
        $this->load->model('WebsiteModel');
          $this->load->model('AdminModel');
    }


	public function index()
	{
        $data['brands'] = $this->WebsiteModel->get_data('make');
        $data['bikes'] = $this->WebsiteModel->filter_vehicles(null, null, null, null, null, null, null, null, null, null, null, 1);
        $data['cars'] = $this->WebsiteModel->filter_vehicles(null, null, null, null, null, null, null, null, null, null, null, 2);
        $data['commercials'] = $this->WebsiteModel->filter_vehicles(null, null, null, null, null, null, null, null, null, null, null, 3);

        $user_id = $this->session->userdata('user_id');
            $this->db->where('user_id', $user_id);
            $fav_count = $this->db->count_all_results('favorites');
            $data['favorite_count'] = $fav_count;
            $this->load->view('home', $data);
	}

    public function set_location() {
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



    public function login()
	{
	    // print_r($_POST);

        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            echo json_encode([
                'status' => 'error',
                'message' => validation_errors()
            ]);
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            $user = $this->WebsiteModel->get_user_by_email($email);
            // print_r($user);die;
            
            if ($user && password_verify($password, $user->password) && ($user->status == 1)) {
                $roles = $this->WebsiteModel->get_data_by_id($user->role, 'roles');
                // Set session

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
            }elseif($user->status==0){

                     echo json_encode([
                    'status' => 'error',
                    'message' => 'Not allowed to login'
                ]); 
            }
                else {
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Invalid email or password.'
                ]);
            }
        }
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


public function forgot_password() {
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



private function _send_email($to, $subject, $message) {
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

public function reset_password($token = null) {
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
 
    	$this->load->view('profile',$data);
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
        $make = $this->input->get('make');
        $model = $this->input->get('model');
        $minYear = $this->input->get('year');
        $maxYear = $this->input->get('year_to');
        $zipcode = $this->input->get('zipcode');
        $minkm = str_replace(',', '', $this->input->get('km'));
        $maxkm = str_replace(',', '', $this->input->get('km_to'));
        $min_price = str_replace(',', '', $this->input->get('price'));
        $max_price = str_replace(',', '', $this->input->get('price_to'));
        $data['vehicles'] = $this->WebsiteModel->filter_vehicles($make, $model, $minYear, $maxYear, $min_price, $max_price, $minkm, $maxkm, $zipcode, $vehicle_type);
    	$this->load->view('listing-list', $data);
}



public function car()
  {
        $data['vehicles'] = $this->WebsiteModel->filter_vehicles(null, null, null, null, null, null, null, null, null, null, null, 2);
        $this->load->view('listing-list', $data);
    }

            
 public function bike()
  {
        $data['vehicles'] = $this->WebsiteModel->filter_vehicles(null, null, null, null, null, null, null, null, null, null, null, 1);
         $this->load->view('listing-list', $data);
   }


 public function commercial()
 {
        $data['vehicles'] = $this->WebsiteModel->filter_vehicles(null, null, null, null, null, null, null, null, null, null, null, 3);
        $this->load->view('listing-list', $data);
 }



    public function chat_list() {
        $this->load->view('chat_list'); // or seller/chat_list
    }



    public function filterVehicles() {
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
 
    	$this->load->view('blog-grid');
} 

    public function blog_details()
{
 
    	$this->load->view('blog-details');
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

    // $data['new_vehicles'] = $this->WebsiteModel->get_new_vehicle();
    $data['details'] = $this->WebsiteModel->get_data_by('slug', $slug, 'car_list');
    	$this->load->view('list-details-v1', $data);
}

   public function about_us()
{
 
    	$this->load->view('about-us');
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
 
    	$this->load->view('contact');
}

  public function my_favorite()
{
 
    	$this->load->view('my-favorite');
}


 public function toggle() {
        $vehicle_id = $this->input->post('vehicle_id');
        $user_id = $this->session->userdata('user_id');

        if (!$user_id) {
            echo json_encode(['status' => 'error', 'message' => 'User not logged in']);
            return;
        }

        $result = $this->WebsiteModel->toggle_favorite($user_id, $vehicle_id);

        echo json_encode(['status' => 'success', 'action' => $result]);
    }

    public function favorite_list() {
        $user_id = $this->session->userdata('user_id');
        $data['favorites'] = $this->WebsiteModel->getFavoritesByUser($user_id);
        $this->load->view('my_favorite', $data);
    }

}
	
