<?php
defined("BASEPATH") or exit("No direct script access allowed");

class CommanController extends CI_Controller
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
        // Get POST data
        $current_password = $this->input->post('password');
        $new_password = $this->input->post('new_password');

        // Get logged-in user ID (adjust session key as needed)
        $user_id = $this->session->userdata('user_id');

        // Fetch user record from DB
        $user = $this->db->get_where('users', ['id' => $user_id])->row();

        if ($user) {
            // Verify current password
            if (password_verify($current_password, $user->password)) {
                
                // Prevent reusing the same password
                if (password_verify($new_password, $user->password)) {
                    $this->session->set_flashdata('error', 'New password cannot be the same as the current password.');
                    redirect('dealer/change-password'); // Adjust your redirect
                }

                // Hash new password
                $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

                // Update password in DB
                $this->db->where('id', $user_id)->update('users', ['password' => $hashed_password]);

                $this->session->set_flashdata('success', 'Password changed successfully.');
                redirect('dealer/change-password'); // Adjust your redirect

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


    // Comman Delete Function

    public function delete_record() {
        $data = json_decode(file_get_contents("php://input"), true);
        $id = $data['id'];
        $table = $data['table'];
        $key = $data['key'];

        if ($id && $table && $key) {
            $this->db->where($key, $id);
            $deleted = $this->db->delete($table);

            if ($deleted) {
                echo json_encode(['status' => 'success', 'message' => 'Record deleted successfully']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Failed to delete record']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Invalid data']);
        }
    }



// Comman Status Update Function
  public function update_status() {
        $data = json_decode(file_get_contents("php://input"), true);

        // print_r($data);die;
        $id     = $data['id'] ?? null;
        $table  = $data['table'] ?? null;
        $key    = $data['key'] ?? 'id';
        $status = $data['status'] ?? null;

        if ($id && $table && $status !== null) {
            $this->db->where($key, $id);
            $updated = $this->db->update($table, ['status' => $status]);

            if ($updated) {
                echo json_encode(['status' => 'success', 'message' => 'Status updated successfully.']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Failed to update status.']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Invalid request data.']);
        }
}

}