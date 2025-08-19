<?php 

function get_plan_limit($plan_id) {
    $CI =& get_instance();
    $plan = $CI->db->get_where('subscription_plans', ['id' => $plan_id])->row();
    return $plan ? $plan->listing_limit : 0;
}


 function send_subscription_reminders() {
        $CI =& get_instance();
        $CI->load->database();
        $CI->load->library('email');

        $today = date('Y-m-d');

        for ($i = 1; $i <= 3; $i++) {
            $target_date = date('Y-m-d', strtotime("+$i days"));

            // JOIN user_subscriptions with subscription_plans
            $CI->db->select('us.*, sp.plan_name, u.email, u.username');
            $CI->db->from('user_subscriptions us');
            $CI->db->join('subscription_plans sp', 'sp.id = us.plan_id', 'left');
            $CI->db->join('users u', 'u.id = us.user_id', 'left');
            $CI->db->where('us.end_date', $target_date);
            // $CI->db->where('us.status', 'active');

            $subscriptions = $CI->db->get()->result();

            foreach ($subscriptions as $sub) {
                if ($sub->email) {
                    $CI->email->from('info@irisinformatics.net', 'AutoKorb');
                    $CI->email->to($sub->email);
                    $CI->email->subject("Your Subscription '{$sub->plan_name}' expires in $i day(s)");
                    $CI->email->message("Dear {$sub->username},\n\nYour subscription plan '{$sub->plan_name}' will expire on {$sub->end_date}.\nPlease renew it in time to avoid service interruption.\n\nThank you.");

                    $CI->email->send();
                }
            }
        }
    }
?>