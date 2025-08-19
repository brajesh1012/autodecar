<style>
.text-p,
p {
    font-weight: 400;
    font-size: 14px;
    line-height: 19.6px;
    color: #d95c32;
    font-family: "Inter", sans-serif;
}

.subscription-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.subscription-header {
    text-align: center;
    margin-bottom: 40px;
}

.subscription-header h1 {
    color: #333;
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 10px;
}

.subscription-header p {
    color: #666;
    font-size: 1.1rem;
    margin-bottom: 0;
}

.plans-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 30px;
    margin-top: 40px;
}

.plan-card {
    background: #fff;
    border-radius: 20px;
    padding: 40px 30px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
    position: relative;
    border: 3px solid transparent;
}

.plan-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
}

.plan-card.current {
    border-color: #d95c32;
    background: linear-gradient(135deg, #fff 0%, #fff8f6 100%);
}

.plan-card.current::before {
    content: "Current Plan";
    position: absolute;
    top: -15px;
    left: 50%;
    transform: translateX(-50%);
    background: #d95c32;
    color: white;
    padding: 8px 20px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.plan-name {
    font-size: 2rem;
    font-weight: 700;
    color: #333;
    margin-bottom: 10px;
}

.plan-price {
    font-size: 3rem;
    font-weight: 800;
    color: #d95c32;
    margin-bottom: 5px;
}

.plan-price .currency {
    font-size: 1.5rem;
    vertical-align: top;
}

.plan-duration {
    color: #666;
    font-size: 1rem;
    margin-bottom: 30px;
}

.plan-features {
    list-style: none;
    padding: 0;
    margin: 0 0 30px 0;
}

.plan-features li {
    padding: 12px 0;
    border-bottom: 1px solid #f0f0f0;
    color: #555;
    font-size: 1rem;
}

.plan-features li:last-child {
    border-bottom: none;
}

.plan-features li strong {
    color: #333;
    font-weight: 600;
}

.plan-button {
    width: 100%;
    padding: 15px 30px;
    border: none;
    border-radius: 50px;
    font-size: 1.1rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    cursor: pointer;
    transition: all 0.3s ease;
    text-decoration: none;
    display: inline-block;
    text-align: center;
}

.plan-button.primary {
    background: #d95c32;
    color: white;
}

.plan-button.primary:hover {
    background: #c04a28;
    transform: translateY(-2px);
}

.plan-button.secondary {
    background: #f8f9fa;
    color: #666;
    border: 2px solid #e9ecef;
}

.plan-button.secondary:hover {
    background: #e9ecef;
    color: #333;
}

.plan-button.current {
    background: #28a745;
    color: white;
}

.plan-button.current:hover {
    background: #218838;
}

.plan-popular {
    position: relative;
}

.plan-popular::after {
    content: "Most Popular";
    position: absolute;
    top: -15px;
    left: 50%;
    transform: translateX(-50%);
    background: #ffc107;
    color: #333;
    padding: 8px 20px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.current-subscription-info {
    background: linear-gradient(135deg, #d95c32 0%, #c04a28 100%);
    color: white;
    padding: 20px;
    border-radius: 15px;
    margin-bottom: 30px;
    text-align: center;
}

.current-subscription-info h3 {
    margin: 0 0 10px 0;
    font-size: 1.5rem;
    font-weight: 600;
}

.current-subscription-info p {
    margin: 5px 0;
    color: rgba(255, 255, 255, 0.9);
}

@media (max-width: 768px) {
    .plans-container {
        grid-template-columns: 1fr;
        gap: 20px;
    }
    
    .plan-card {
        padding: 30px 20px;
    }
    
    .subscription-header h1 {
        font-size: 2rem;
    }
}
</style>

<div id="themesflat-content">
    <div class="dashboard-toggle">Show DashBoard</div>
    <div class="subscription-container">
        <div class="subscription-header">
            <h1>Choose Your Subscription Plan</h1>
            <p>Select the perfect plan for your vehicle listing needs</p>
        </div>

        <!-- Current Subscription Info -->
        <div class="current-subscription-info" id="currentSubscriptionInfo" style="display: none;">
            <h3>Your Current Subscription</h3>
            <p><strong>Plan:</strong> <span id="currentPlanName">-</span></p>
            <p><strong>Status:</strong> <span id="currentPlanStatus">-</span></p>
            <p><strong>Expires:</strong> <span id="currentPlanExpiry">-</span></p>
        </div>

        <div class="plans-container">
            <!-- Basic Plan -->
            <div class="plan-card" data-plan-id="1">
                <h2 class="plan-name">Basic</h2>
                <div class="plan-price">
                    <span class="currency">$</span>29.99
                </div>
                <div class="plan-duration">1 Month</div>
                
                <ul class="plan-features">
                    <li><strong>Listing Limit:</strong> 5 vehicles</li>
                    <li><strong>Duration:</strong> 1 Month</li>
                    <li><strong>Priority Support:</strong> No</li>
                    <li><strong>Featured Listings:</strong> 1</li>
                    <li><strong>Analytics:</strong> No</li>
                    <li><strong>Email Support:</strong> Yes</li>
                </ul>
                
                <form action="<?= base_url('dealer/purchase-subscription') ?>" method="POST" style="display: inline;">
                    <input type="hidden" name="plan_id" value="1">
                    <button type="submit" class="plan-button primary" data-plan="Basic">Select Plan</button>
                </form>
            </div>

            <!-- Silver Plan -->
            <div class="plan-card plan-popular" data-plan-id="2">
                <h2 class="plan-name">Silver</h2>
                <div class="plan-price">
                    <span class="currency">$</span>79.99
                </div>
                <div class="plan-duration">3 Months</div>
                
                <ul class="plan-features">
                    <li><strong>Listing Limit:</strong> 15 vehicles</li>
                    <li><strong>Duration:</strong> 3 Months</li>
                    <li><strong>Priority Support:</strong> Yes</li>
                    <li><strong>Featured Listings:</strong> 5</li>
                    <li><strong>Analytics:</strong> Basic</li>
                    <li><strong>Email Support:</strong> Yes</li>
                    <li><strong>Phone Support:</strong> Yes</li>
                </ul>
                
                <form action="<?= base_url('dealer/purchase-subscription') ?>" method="POST" style="display: inline;">
                    <input type="hidden" name="plan_id" value="2">
                    <button type="submit" class="plan-button primary" data-plan="Silver">Select Plan</button>
                </form>
            </div>

            <!-- Platinum Plan -->
            <div class="plan-card" data-plan-id="3">
                <h2 class="plan-name">Platinum</h2>
                <div class="plan-price">
                    <span class="currency">$</span>149.99
                </div>
                <div class="plan-duration">6 Months</div>
                
                <ul class="plan-features">
                    <li><strong>Listing Limit:</strong> Unlimited</li>
                    <li><strong>Duration:</strong> 6 Months</li>
                    <li><strong>Priority Support:</strong> Yes</li>
                    <li><strong>Featured Listings:</strong> Unlimited</li>
                    <li><strong>Analytics:</strong> Advanced</li>
                    <li><strong>Email Support:</strong> Yes</li>
                    <li><strong>Phone Support:</strong> Yes</li>
                    <li><strong>Dedicated Manager:</strong> Yes</li>
                </ul>
                
                <form action="<?= base_url('dealer/purchase-subscription') ?>" method="POST" style="display: inline;">
                    <input type="hidden" name="plan_id" value="3">
                    <button type="submit" class="plan-button primary" data-plan="Platinum">Select Plan</button>
                </form>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <p class="text-muted">
                <strong>Need help choosing?</strong> Contact our support team for personalized recommendations.
            </p>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    // Static current subscription data - Change this to show different current plan
    var currentSubscription = {
        plan_id: 2, // 1=Basic, 2=Silver, 3=Platinum - CHANGE THIS TO SHOW DIFFERENT CURRENT PLAN
        plan_name: 'Silver',
        status: 'Active',
        expiry_date: 'March 15, 2024',
        listings_used: 8,
        listings_limit: 15
    };

    // Function to update current subscription display
    function updateCurrentSubscription() {
        if (currentSubscription) {
            $('#currentPlanName').text(currentSubscription.plan_name);
            $('#currentPlanStatus').text(currentSubscription.status);
            $('#currentPlanExpiry').text(currentSubscription.expiry_date);
            $('#currentSubscriptionInfo').show();

            // Mark current plan card
            $('.plan-card').removeClass('current');
            $('.plan-card[data-plan-id="' + currentSubscription.plan_id + '"]').addClass('current');

            // Update button for current plan
            $('.plan-button').each(function() {
                var $button = $(this);
                var $card = $button.closest('.plan-card');
                var cardPlanId = $card.data('plan-id');
                
                if (cardPlanId == currentSubscription.plan_id) {
                    $button.removeClass('primary').addClass('current');
                    $button.text('Current Plan');
                    $button.prop('disabled', true);
                } else {
                    $button.removeClass('current').addClass('primary');
                    $button.text('Select Plan');
                    $button.prop('disabled', false);
                }
            });
        }
    }

    // Initialize current subscription display
    updateCurrentSubscription();

    // Add click event to plan buttons
    $('.plan-button.primary').click(function(e) {
        e.preventDefault();
        
        var planName = $(this).data('plan');
        var planPrice = $(this).closest('.plan-card').find('.plan-price').text();
        
        if(confirm('Are you sure you want to select the ' + planName + ' plan for ' + planPrice + '?')) {
            $(this).closest('form').submit();
        }
    });

    // Demo function to change current subscription (for testing)
    // You can call this in browser console: changeCurrentPlan(1) for Basic, changeCurrentPlan(2) for Silver, changeCurrentPlan(3) for Platinum
    window.changeCurrentPlan = function(planId) {
        var planNames = {1: 'Basic', 2: 'Silver', 3: 'Platinum'};
        var planLimits = {1: 5, 2: 15, 3: 'Unlimited'};
        
        currentSubscription.plan_id = planId;
        currentSubscription.plan_name = planNames[planId];
        currentSubscription.listings_limit = planLimits[planId];
        
        updateCurrentSubscription();
        console.log('Current plan changed to: ' + planNames[planId]);
    };
});
</script> 