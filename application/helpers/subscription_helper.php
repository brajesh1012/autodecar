<?php 

function get_plan_limit($plan_id) {
    $CI =& get_instance();
    $plan = $CI->db->get_where('subscription_plans', ['id' => $plan_id])->row();
    return $plan ? $plan->listing_limit : 0;
}
?>