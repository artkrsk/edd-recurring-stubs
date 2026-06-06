<?php


namespace {
	// EDD Recurring constants
	if (!defined('EDD_RECURRING_VERSION')) {
		define('EDD_RECURRING_VERSION', '2.13.1');
	}
	if (!defined('EDD_RECURRING_PLUGIN_FILE')) {
		define('EDD_RECURRING_PLUGIN_FILE', __FILE__);
	}
	if (!defined('EDD_RECURRING_PLUGIN_DIR')) {
		define('EDD_RECURRING_PLUGIN_DIR', plugin_dir_path(EDD_RECURRING_PLUGIN_FILE));
	}
	if (!defined('EDD_RECURRING_PLUGIN_URL')) {
		define('EDD_RECURRING_PLUGIN_URL', plugins_url('/', EDD_RECURRING_PLUGIN_FILE));
	}
}
namespace {
    // @codeCoverageIgnore
    /**
     * Admin Notices
     */
    class EDD_Recurring_Admin_Notices
    {
        /**
         * Constructor
         */
        public function __construct()
        {
        }
        /**
         * Initialize
         *
         * @deprecated 2.13.0
         */
        public function init()
        {
        }
        /**
         * Display admin notices.
         *
         * @return void
         */
        public function notices()
        {
        }
    }
    /**
     * Class EDD_Recurring_Reports
     *
     * @since 2.4
     *
     */
    class EDD_Recurring_Reports
    {
        /**
         * Get it started
         */
        public function __construct()
        {
        }
        /**
         * Registers reports with EDD
         *
         * @param EDD\Reports\Data\Report_Registry $reports
         *
         * @since 2.10.1
         * @return void
         */
        public function register_reports($reports)
        {
        }
    }
    /**
     * Class EDD_Recurring_Reports
     *
     * @since x.x.x
     *
     */
    class EDD_Recurring_Reports_Filters
    {
        public static function instance()
        {
        }
        public function add_completed_status($statuses)
        {
        }
        public function add_subscription_earnings_data($data, $start_date, $end_date)
        {
        }
    }
    /**
     * Reports Chart
     *
     * @package   edd-recurring
     * @copyright Copyright (c) 2021, Sandhills Development, LLC
     * @license   GPL2+
     * @since     2.10.1
     */
    class EDD_Recurring_Reports_Chart
    {
        /**
         * Final array of graph data.
         *
         * @var array[]
         */
        public $graph_data = array(
            'renewals' => array(),
            // Renewal count.
            'refunds' => array(),
            // Refunded renewal count.
            'created' => array(),
        );
        /**
         * EDD_Recurring_Reports_Chart constructor.
         *
         * @param array $dates Date range for the query.
         */
        public function __construct()
        {
        }
        /**
         * Returns the data that makes up the renewals chart.
         *
         * @since 2.10.1
         * @return array[]
         */
        public static function get_chart_data()
        {
        }
        /**
         * Adds data to the graph for a specific timestamp.
         *
         * @param object $result     Row from the database.
         * @param int    $timestamp  Unix timestamp.
         * @param string $query_type Type of query being performed.
         *
         * @since 2.10.1
         * @return void
         */
        public function add_graph_data($result, $timestamp, $query_type)
        {
        }
    }
    /**
     * EDD_Recurring_Add_Subscription_Price_IDs Class
     *
     * @since 2.9
     */
    class EDD_Recurring_Add_Subscription_Price_IDs extends \EDD_Batch_Export
    {
        /**
         * Our export type. Used for export-type specific filters/actions
         * @var string
         * @since 2.9
         */
        public $export_type = '';
        /**
         * Allows for a non-download batch processing to be run.
         * @since  2.9
         * @var boolean
         */
        public $is_void = \true;
        /**
         * Sets the number of items to pull on each step
         * @since  2.9
         * @var integer
         */
        public $per_step = 50;
        /**
         * Get the Export Data
         *
         * @access public
         * @since 2.9
         * @return array $data The data for the CSV file
         */
        public function get_data()
        {
        }
        /**
         * Return the calculated completion percentage
         *
         * @since 2.9
         * @return int
         */
        public function get_percentage_complete()
        {
        }
        /**
         * Set the properties specific to this export
         *
         * @since 2.9
         * @param array $request The Form Data passed into the batch processing
         */
        public function set_properties($request)
        {
        }
        /**
         * Process a step
         *
         * @since 2.9
         * @return bool
         */
        public function process_step()
        {
        }
        public function headers()
        {
        }
        /**
         * Perform the export
         *
         * @access public
         * @since 2.9
         * @return void
         */
        public function export()
        {
        }
        /**
         * Fetch total number of subscription IDs needing migration
         *
         * @since 2.9.5
         *
         * @global object $wpdb
         */
        public function pre_fetch()
        {
        }
    }
    /**
     * Changes order items with the edd_subscription status to complete.
     *
     * @copyright   Copyright (c) 2022, Easy Digital Downloads
     * @license     https://opensource.org/licenses/gpl-2.0.php GNU Public License
     * @since       2.11.7
     */
    class EDD_Recurring_Update_Order_Items extends \EDD_Batch_Export
    {
        /**
         * Our export type. Used for export-type specific filters/actions
         * @var string
         * @since 2.11.7
         */
        public $export_type = '';
        /**
         * Allows for a non-download batch processing to be run.
         * @since  2.11.7
         * @var boolean
         */
        public $is_void = \true;
        /**
         * Sets the number of items to pull on each step
         * @since  2.11.7
         * @var integer
         */
        public $per_step = 50;
        /**
         * Get the Export Data
         *
         * @access public
         * @since 2.11.7
         * @return array $data The data for the CSV file
         */
        public function get_data()
        {
        }
        /**
         * Return the calculated completion percentage
         *
         * @since 2.11.7
         * @return int
         */
        public function get_percentage_complete()
        {
        }
        /**
         * Process a step
         *
         * @since 2.11.7
         * @return bool
         */
        public function process_step()
        {
        }
        public function headers()
        {
        }
        /**
         * Perform the export
         *
         * @access public
         * @since 2.11.7
         * @return void
         */
        public function export()
        {
        }
    }
    /**
     * EDD_Recurring_Add_Subscription_Price_IDs Class
     *
     * @since 2.9.3
     */
    class EDD_Recurring_Update_Subscription_Price_IDs extends \EDD_Batch_Export
    {
        /**
         * Our export type. Used for export-type specific filters/actions
         * @var string
         * @since 2.9.3
         */
        public $export_type = '';
        /**
         * Allows for a non-download batch processing to be run.
         * @since  2.9.3
         * @var boolean
         */
        public $is_void = \true;
        /**
         * Sets the number of items to pull on each step
         * @since  2.9.3
         * @var integer
         */
        public $per_step = 50;
        /**
         * Get the Export Data
         *
         * @access public
         * @since 2.9.3
         * @return array $data The data for the CSV file
         */
        public function get_data()
        {
        }
        /**
         * Return the calculated completion percentage
         *
         * @since 2.9.3
         * @return int
         */
        public function get_percentage_complete()
        {
        }
        /**
         * Set the properties specific to this export
         *
         * @since 2.9.3
         * @param array $request The Form Data passed into the batch processing
         */
        public function set_properties($request)
        {
        }
        /**
         * Process a step
         *
         * @since 2.9.3
         * @return bool
         */
        public function process_step()
        {
        }
        public function headers()
        {
        }
        /**
         * Perform the export
         *
         * @access public
         * @since 2.9.3
         * @return void
         */
        public function export()
        {
        }
        /**
         * Fetch total number of subscription IDs needing migration
         *
         * @since 2.9.3.5
         *
         * @global object $wpdb
         */
        public function pre_fetch()
        {
        }
    }
    /**
     * The Cecurring Customer Class
     *
     * DEPRECATED in 2.4. Use EDD_Recurring_Subscriber instead
     *
     * Includes methods for setting users as customers, setting their status, expiration, etc.
     *
     * @since  1.0
     */
    class EDD_Recurring_Customer
    {
        /**
         * Get us started
         *
         * @since  1.0
         * @return void
         */
        function __construct()
        {
        }
        /**
         * Set a user as a subscriber
         *
         * @since  1.0
         * @param  $user_id INT The ID of the user we're setting as a subscriber
         * @return void
         */
        public static function set_as_subscriber($user_id = 0)
        {
        }
        /**
         * Store a recurring customer ID
         *
         * @since  1.0
         * @param  $user_id      INT The ID of the user we're setting as a subscriber
         * @param  $recurring_id INT The recurring profile ID to set
         * @return bool
         */
        public static function set_customer_id($user_id = 0, $recurring_id = '')
        {
        }
        /**
         * Get a recurring customer ID
         *
         * @since  1.0
         * @param  $user_id      INT The ID of the user we're getting an ID for
         * @return str
         */
        public static function get_customer_id($user_id = 0)
        {
        }
        /**
         * Get a user ID from the recurring customer ID
         *
         * @since  1.0.1
         * @param  $recurring_id  STR The recurring ID of the user we're getting an ID for
         * @return int
         */
        public static function get_user_id_by_customer_id($recurring_id = '')
        {
        }
        /**
         * Stores the parent payment ID for a customer
         *
         * @since  1.0.1
         * @param  $user_id     INT The user ID to set a parent payment for
         * @param  $payment_id  INT The Payment ID to set
         * @return int
         */
        public static function set_customer_payment_id($user_id = 0, $payment_id = 0)
        {
        }
        /**
         * Get the parent payment ID for a customer
         *
         * @since  1.0.1
         * @param  $user_id     INT The user ID to get a parent payment for
         * @return int
         */
        public static function get_customer_payment_id($user_id = 0)
        {
        }
        /**
         * Set a status for a customer
         *
         * @since  1.0
         * @param  $user_id      INT The ID of the user we're setting a status for
         * @param  $status       STRING The status to set
         * @return bool
         */
        public static function set_customer_status($user_id = 0, $status = 'active')
        {
        }
        /**
         * Get customer status
         *
         * @since  1.0
         * @param  $user_id      INT The ID of the user we're getting a status for
         * @return bool
         */
        public static function get_customer_status($user_id = 0)
        {
        }
        /**
         * Check if a customer is active
         *
         * @since  1.0
         * @param  $user_id      INT The ID of the user we're checking
         * @return bool
         */
        public static function is_customer_active($user_id = 0)
        {
        }
        /**
         * Set an expiration date
         *
         * @since  1.0
         * @param  $user_id      INT The ID of the user we're setting an expiration for
         * @param  $expiration   INT The expiration timestamp
         * @return bool
         */
        public static function set_customer_expiration($user_id = 0, $expiration = 0)
        {
        }
        /**
         * Get an expiration date
         *
         * @since  1.0
         * @param  $user_id      INT The ID of the user we're getting an expiration for
         * @return int
         */
        public static function get_customer_expiration($user_id = 0)
        {
        }
        /**
         * Check if expired
         *
         * @since  1.0
         * @param  $user_id      INT The ID of the user we're checking
         * @return bool
         */
        public static function is_customer_expired($user_id = 0)
        {
        }
        /**
         * Calculate a new expiration date
         *
         * @since  1.0
         * @param  $_customer_or_user_id      INT depending on EDD Version, this is a customer or User ID
         * @param  $payment_id   INT The original payment ID
         * @return int
         */
        public static function calc_user_expiration($_customer_or_user_id = 0, $payment_id = 0)
        {
        }
        /**
         * Given a customer ID, transpose to the user ID
         *
         * @since  2.2.14
         * @param  int $customer_id The customer ID to lookup
         * @return int              The User ID assocaited with that customer ID
         */
        public static function get_user_id_from_customer_id($customer_id)
        {
        }
    }
    /**
     * The Recurring Checkout Class.
     *
     * This handles modification of the frontend checkout.
     *
     * Some methods introduced before 2.6 were moved here from the main EDD_Recurring class.
     *
     * Note: there are many filters and helper methods that modify aspects of checkout as well,
     * but they are not included here due to many of them being used elsewhere and they
     * cannot be moved in order to maintain backwards compatibility.
     *
     * Look in the main EDD_Recurring class if you do not find the method you are looking for here.
     *
     * @since  2.6
     */
    class EDD_Recurring_Checkout
    {
        /**
         * Come alive!
         *
         * @since  2.6
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * Start things up by adding actions and filters
         *
         * @since  2.6
         * @return void
         */
        public function init()
        {
        }
        /**
         * If a purchase fails b/c of not being logged in, show the login form if it doesn't show
         * Covers a use case of auto-register being enabled, and a user account already existing for the email
         * address used
         *
         * @since  2.4.8
         * @return void
         */
        public function force_login_fields()
        {
        }
        /**
         * If multiple subscriptions are in the cart and one fails, notifiy the customer about it but process the rest
         *
         * @since  2.4.14
         * @param  EDD\Orders\Order $order              The order object.
         * @param  array            $receipt_args Array of arguments of the payment receipt.
         * @return void
         */
        public function display_failed_subscriptions($order, $receipt_args)
        {
        }
        /**
         * Display the signup fee notice under the purchase link
         *
         * @since  2.4
         * @param  int   $download_id The download ID beign displayed.
         * @param  array $args      Array of arguements for the purcahse link.
         * @return void
         */
        public function show_single_signup_fee_notice($download_id, $args)
        {
        }
        /**
         * Display the sign up fee notice under the purchase link for Custom Prices
         *
         * @since  2.5
         * @param  int   $download_id The download ID being displayed.
         * @param  array $args      Array of arguments for the purchase link.
         * @return void
         */
        public function show_single_custom_signup_fee_notice($download_id, $args)
        {
        }
        /**
         * Show the signup fees by vraible prices
         *
         * @since  2.4
         * @param  int    $price_id    The price ID key.
         * @param  string $price       The Price.
         * @param  int    $download_id The download ID.
         * @return void
         */
        public function show_variable_signup_fee_notice($price_id, $price, $download_id)
        {
        }
        /**
         * Show the signup fees for Custom Prices
         *
         * @since  2.5
         * @param  int    $download_id The download ID.
         * @param  array  $prices      The array of price IDs for the download.
         * @param  string $type        If the inputs are checkboxes (multi-select) or radio (single price).
         * @return void
         */
        public function show_multi_custom_signup_fee_notice($download_id, $prices, $type)
        {
        }
        /**
         * Display the sign up fee notice under the purchase link
         *
         * @since  2.4
         * @param  int   $download_id The download ID being displayed.
         * @param  array $args      Array of arguments for the purchase link.
         * @return void
         */
        public function show_single_terms_notice($download_id, $args)
        {
        }
        /**
         * Show the sign up fees by variable prices.
         *
         * @since  2.4
         * @param  int    $price_id    The price ID key.
         * @param  string $price       The Price.
         * @param  int    $download_id The download ID.
         * @return void
         */
        public function show_variable_terms_notice($price_id, $price, $download_id)
        {
        }
        /**
         * Show the subscription terms for variable prices.
         *
         * @since  2.5
         * @param  int    $download_id The download ID.
         * @param  array  $prices      Variable prices.
         * @param  string $type        Product type.
         * @return void
         */
        public function show_variable_custom_terms_notice($download_id, $prices, $type)
        {
        }
        /**
         * Disclose the subscription terms on the cart item.
         *
         * @since  2.4
         * @param array $item The cart item.
         * @param int $key The position in the cart.
         * @return void
         */
        public function show_terms_on_cart_item($item, $key)
        {
        }
        /**
         * Remove default total display when cart contains a free trial.
         *
         * @since  2.6
         * @return void
         */
        public function maybe_remove_total()
        {
        }
        /**
         * Display a new total amount and note for free trials.
         *
         * @since  2.6
         * @return void
         */
        public function free_trial_total()
        {
        }
        /**
         * Listen for the action to add failed subscriptions to the cart again.
         *
         * @since  2.4.14
         * @return void
         */
        public function process_add_failed()
        {
        }
        /**
         * Check if the email entered on checkout has already used a free trial.
         *
         * @since  2.6
         * @return void
         */
        public function check_repeat_trial()
        {
        }
    }
    /**
     * Recurring Shortcodes
     *
     * Adds additional recurring specific shortcodes as well as hooking into existing EDD core shortcodes to add additional subscription functionality
     *
     * @since  2.4
     */
    class EDD_Recurring_Shortcodes
    {
        /**
         * Get things started
         */
        public function __construct()
        {
        }
        /**
         * Adds our templates dir to the EDD template stack
         *
         * @since 2.4
         *
         * @param array $paths The template paths.
         *
         * @return mixed
         */
        public function add_template_stack($paths)
        {
        }
        /**
         * Subscription Receipt
         *
         * @description: Displays the recurring details within the [edd_receipt] shortcode
         *
         * @since      2.4
         *
         * @return mixed
         */
        public function subscription_receipt()
        {
        }
        /**
         * Displays a profile cancellation link
         *
         * @since  1.0
         * @return string
         */
        public function cancel_link($atts, $content = \null)
        {
        }
        /**
         * Sets up the process of verifying the saving of the updated payment method.
         *
         * @since  x.x
         * @return void
         */
        public function verify_profile_update_setup()
        {
        }
        /**
         * Subscription History
         *
         * Provides users with an historical overview of their purchased subscriptions
         *
         * @since      2.4
         * @since      2.7.14 Modified to call the EDD_Recurring()->subscriptions_view() function.
         */
        public function edd_subscriptions()
        {
        }
    }
    /**
     * The Recurring Subscriber Class
     *
     * Includes methods for setting users as customers, setting their status, expiration, etc.
     *
     * @since  2.4
     */
    class EDD_Recurring_Subscriber extends \EDD_Customer
    {
        /**
         * Constructor.
         *
         * @since  2.4
         *
         * @param int|bool $_id_or_email The user ID or email address.
         * @param bool     $by_user_id  Whether to search by user ID.
         *
         * @return void
         */
        public function __construct($_id_or_email = \false, $by_user_id = \false)
        {
        }
        /**
         * Determine if the customer has an active subscription for the given product
         *
         * @since  2.4
         * @param int      $product_id The optional download ID.
         * @param null|int $price_id The optional price ID (added in 2.11.10).
         * @return boolean
         */
        public function has_active_product_subscription($product_id = 0, $price_id = \null)
        {
        }
        /**
         * Has Product Subscription
         *
         * @since 2.4
         * @param int $product_id The product ID.
         * @return mixed|void
         */
        public function has_product_subscription($product_id = 0)
        {
        }
        /**
         * Has Active Subscription
         *
         * @since 2.4
         * @return mixed|void
         */
        public function has_active_subscription()
        {
        }
        /**
         * Has trialed
         *
         * Determines if the subscriber has used a free trial.
         * Optionally checks if a trial for a specific product has been used.
         *
         * @since 2.6
         *
         * @param int $product_id The Product ID to check if the user has trialed.
         *
         * @return bool
         */
        public function has_trialed($product_id = 0)
        {
        }
        /**
         * Adds a subscription to a user / customer
         *
         * @since 2.4
         * @param array $args The subscription arguments.
         * @return EDD_Subscription|false
         */
        public function add_subscription($args = array())
        {
        }
        /**
         * Add Payment
         *
         * @since 2.4
         * @param array $args The payment arguments.
         * @return bool
         */
        public function add_payment($args = array())
        {
        }
        /**
         * Retrieves a subscription based on subscription ID
         *
         * @param int $subscription_id The subscription ID.
         * @since 2.4
         * @return object EDD_Subscription
         */
        public function get_subscription($subscription_id = 0)
        {
        }
        /**
         * Retrieves a subscription based on the profile ID
         *
         * @since 2.4
         * @param string $profile_id The profile ID.
         * @return object EDD_Subscription
         */
        public function get_subscription_by_profile_id($profile_id = '')
        {
        }
        /**
         * Retrieves an array of subscriptions for a the customer
         *
         * Optional product ID and status(es) can be supplied
         *
         * @param int      $product_id The optional product ID.
         * @param array    $statuses The optional status(es) to retrieve.
         * @param null|int $price_id The price ID (added in 2.11.10).
         * @since 2.4
         * @return array
         */
        public function get_subscriptions($product_id = 0, $statuses = array(), $price_id = \null)
        {
        }
        /**
         * Set a user as a subscriber
         *
         * @since  1.0
         * @return void
         */
        public function set_as_subscriber()
        {
        }
        /**
         * Calculate a new expiration date
         *
         * @param int    $download_id The download ID.
         * @param int    $price_id The price ID.
         * @param string $trial_period The trial period.
         *
         * @return string
         */
        public function get_new_expiration($download_id = 0, $price_id = \null, $trial_period = '')
        {
        }
        /**
         * Get a recurring customer ID
         *
         * @since  2.4
         * @param  string $gateway The gateway to retrieve the customer ID for.
         * @return str
         */
        public function get_recurring_customer_id($gateway = \false)
        {
        }
        /**
         * Store a recurring customer ID
         *
         * @since  2.4
         * @param  int    $recurring_id The recurring profile ID to set.
         * @param  string $gateway      The Gateway to set the ID for.
         * @return bool
         */
        public function set_recurring_customer_id($recurring_id = '', $gateway = \false)
        {
        }
        /**
         * Retrieve the recurring customer IDs for the user
         *
         * @since  2.4
         * @return mixed The profile IDs
         */
        public function get_recurring_customer_ids()
        {
        }
    }
    /**
     * EDD_Subscriptions_API
     *
     * Extends the EDD_API to make the /subscriptions endpoint
     *
     * @class EDD_Subscriptions_API
     * @since 2.4
     * @author Chris K, Pippin, Topher
     */
    class EDD_Subscriptions_API extends \EDD_API
    {
        /**
         * User ID Performing the API Request
         *
         * @var int
         * @access private
         * @since  2.4
         */
        public $user_id = 0;
        /**
         *
         * @var bool
         * @access private
         * @since  1.7
         */
        public $override = \true;
        /**
         * Adds to the allowed query vars list from EDD Core for API access
         *
         * @access public
         * @since  2.4.3
         * @author Topher
         * @param  array $vars Query vars.
         * @return string[] $vars New query vars
         */
        public function query_vars($vars)
        {
        }
        /**
         * Fire up the engines.
         *
         * @since 2.4
         */
        public function __construct()
        {
        }
        /**
         * Whitelist 'subscriptions' api endpoint
         *
         * @since 2.4
         *
         * @param $queries
         *
         * @return array
         */
        public function add_valid_subscriptions_query($queries)
        {
        }
        /**
         *
         * Add Subscribers Endpoint
         *
         * @description: This method makes available the http://mycoolsite.com/edd-api/subscriptions/ endpoint
         * @since      2.4
         *
         * @param $data
         * @param $query_mode
         * @param $api_object
         *
         * @return array $subscriptions
         */
        public function add_edd_subscription_endpoint($data, $query_mode, $api_object)
        {
        }
    }
    class EDD_Recurring_Gateway
    {
        public $id;
        public $subscriptions = array();
        public $purchase_data = array();
        public $offsite = \false;
        public $email = 0;
        public $customer_id = 0;
        public $user_id = 0;
        public $payment_id = 0;
        public $failed_subscriptions = array();
        public $custom_meta = array();
        /**
         * Friendly name for the gateway.
         * Technically deprecated as of 2.13.0, but left for backwards compatibility.
         *
         * @var string
         */
        protected $friendly_name;
        /**
         * Store \EDD_Subscriber object once retrieved.
         *
         * @since 2.9.0
         *
         * @type \EDD_Recurring_Subscriber
         */
        public $subscriber;
        /**
         * Registers additionally supported functionalities for specific gateways.
         *
         * @since 2.9.0
         * @type array
         */
        public $supports = array();
        /**
         * Get things started
         *
         * @access      public
         * @since       2.4
         * @return      void
         */
        public function __construct()
        {
        }
        /**
         * Setup gateway ID and possibly load API libraries
         *
         * @access      public
         * @since       2.4
         * @return      void
         */
        public function init()
        {
        }
        /**
         * Magic getter for our object.
         *
         * @param string $key The property to get.
         * @return mixed
         */
        public function __get(string $key)
        {
        }
        /**
         * Enqueue necessary scripts. Perhaps only enqueue when edd_is_checkout()
         *
         * @access      public
         * @since       2.4
         * @return      void
         */
        public function scripts()
        {
        }
        /**
         * Validate checkout fields
         *
         * @access      public
         * @since       2.4
         * @return      void
         */
        public function validate_fields($data, $posted)
        {
        }
        /**
         * Whether or not payments should automatically be set to `complete` during `record_signup()`.
         *
         * Defaults to the opposite of `EDD_Recurring_Gateway::$offsite`.
         *
         * @since 2.11
         *
         * @return bool
         */
        protected function should_auto_complete_payment()
        {
        }
        /**
         * Creates subscription payment profiles and sets the IDs so they can be stored
         *
         * @access      public
         * @since       2.4
         * @return      void
         */
        public function create_payment_profiles()
        {
        }
        /**
         * Finishes the signup process by redirecting to the success page or to an off-site payment page
         *
         * @access      public
         * @since       2.4
         * @return      void
         */
        public function complete_signup()
        {
        }
        /**
         * Processes webhooks from the payment processor
         *
         * @access      public
         * @since       2.4
         * @return      void
         */
        public function process_webhooks()
        {
        }
        /**
         * Determines if a subscription can be cancelled through the gateway
         *
         * @access      public
         * @since       2.4
         * @return      bool
         */
        public function can_cancel($ret, $subscription)
        {
        }
        /**
         * Returns an array of subscription statuses that can be cancelled
         *
         * @access      public
         * @since       2.6.3
         * @return      array
         */
        public function get_cancellable_statuses()
        {
        }
        /**
         * Cancels a subscription. If possible, cancel at the period end. If not possible, cancel immediately.
         *
         * @access      public
         * @since       2.4
         * @param       EDD_Subscription $subscription The EDD_Subscription object for the EDD Subscription being cancelled.
         * @param       bool             $valid Currently this defaults to be true at all times.
         * @return      bool
         */
        public function cancel($subscription, $valid)
        {
        }
        /**
         * Cancels a subscription immediately.
         *
         * @access      public
         * @since       2.4
         * @param       EDD_Subscription $subscription The EDD_Subscription object for the EDD Subscription being cancelled.
         * @return      bool
         */
        public function cancel_immediately($subscription)
        {
        }
        /**
         * Determines if a subscription can be reactivated through the gateway
         *
         * @access      public
         * @since       2.7.10
         * @return      bool
         */
        public function can_reactivate($ret, $subscription)
        {
        }
        /**
         * Reactivates a cancelled subscription
         *
         * @access      public
         * @since       2.7.10
         * @return      bool
         */
        public function reactivate($subscription, $valid)
        {
        }
        /**
         * Determines if a subscription can be retried through the gateway
         *
         * @access      public
         * @since       2.7.10
         * @return      bool
         */
        public function can_retry($ret, $subscription)
        {
        }
        /**
         * Retries a failing subscription
         *
         * This method is connected to a filter instead of an action so we can return a nice error message.
         *
         * @access      public
         * @since       2.7.10
         * @return      bool|WP_Error
         */
        public function retry($result, $subscription)
        {
        }
        /**
         * Determines if a subscription can be cancelled through a gateway
         *
         * @since  2.4
         * @param  bool   $ret            Default stting (false)
         * @param  object $subscription   The subscription
         * @return bool
         */
        public function can_update($ret, $subscription)
        {
        }
        /**
         * Process the update payment form
         *
         * @since  2.4
         * @param  int $subscriber    EDD_Recurring_Subscriber
         * @param  int $subscription  EDD_Subscription
         * @return void
         */
        public function update_payment_method($subscriber, $subscription)
        {
        }
        /**
         * Outputs the payment method update form
         *
         * @since  2.4
         * @param  object $subscription The subscription object
         * @return void
         */
        public function update_payment_method_form($subscription)
        {
        }
        /**
         * Get the expiration date with merchant processor
         *
         * @since  2.6.6
         * @param  object $subscription The subscription object
         * @return string Expiration date in Y-n-d H:i:s format
         */
        public function get_expiration($subscription)
        {
        }
        /**
         * Outputs any information after the Credit Card Fields
         *
         * @since  2.4
         * @return void
         */
        public function after_cc_fields()
        {
        }
        /**
         * Determines if the gateway allows multiple subscriptions to be purchased at once.
         * @since 2.8.5
         * @return bool
         */
        public function can_purchase_multiple_subs()
        {
        }
        /****************************************************************
         * Below methods should not be extended except in rare cases
         ***************************************************************/
        /**
         * Processes the checkout screen and sends sets up the subscription data for hand-off to the gateway
         *
         * @access      public
         * @since       2.4
         * @return      void
         */
        public function process_checkout($purchase_data)
        {
        }
        /**
         * Sets up EDD_Customer (ID only) and EDD_Recurring_Subscriber based on purchase data.
         *
         * @since 2.11.8.1 Moved to the main gateway class.
         * @since 2.9.0
         */
        public function setup_customer_subscriber()
        {
        }
        /**
         * Maps/normalizes cart data to a list of subscription data.
         *
         * @since 2.9.0
         * @since 2.11.8 Moved from the Stripe gateway to be used by all gateways.
         */
        public function build_subscriptions()
        {
        }
        /**
         * Maybe updates the subscription data with trial information.
         *
         * @param array          $args
         * @param array          $item
         * @param EDD_Subscriber $subscriber
         * @return array
         */
        public function maybe_update_subscription_for_trial($args, $item)
        {
        }
        /**
         * Checks if the subscriber can trial a specific item.
         *
         * @since 2.12.0
         * @param int $item_id
         * @return bool
         */
        protected function subscriber_can_trial($item_id)
        {
        }
        /**
         * Handles errors that occur during checkout processing.
         *
         * @param array|false $errors
         *
         * @since 2.11
         */
        protected function handle_errors($errors = \false)
        {
        }
        /**
         * Records purchased subscriptions in the database and creates an edd_payment record
         *
         * @access      public
         * @since       2.4
         * @return      void
         */
        public function record_signup()
        {
        }
        /**
         * Triggers the validate_fields() method for the gateway during checkout submission
         *
         * This should not be extended
         *
         * @access      public
         * @since       2.4
         * @return      void
         */
        public function checkout_errors($data, $posted)
        {
        }
        /**
         * Process the update payment form
         *
         * @since  2.4
         * @param  int  $user_id            User ID
         * @param  int  $subscription_id    Subscription ID
         * @param  bool $verified           Sanity check that the request to update is coming from a verified source
         * @return void
         */
        public function process_payment_method_update($user_id, $subscription_id, $verified)
        {
        }
        /**
         * Handles cancellation requests for a subscription
         *
         * This should not be extended
         *
         * @access      public
         * @since       2.4
         * @return      void
         */
        public function process_cancellation($data)
        {
        }
        /**
         * Process subscription reactivation
         *
         * @access      public
         * @since       2.6
         * @return      void
         */
        public function process_reactivation($data)
        {
        }
        /**
         * Make it so that accounts are required
         *
         * @access      public
         * @since       2.4
         * @return      void
         */
        public function require_login()
        {
        }
        /**
         * Retrieve subscription details
         *
         * This method should be extended by each gateway in order to call the gateway API to determine the status and expiration of the subscription
         *
         * @access      public
         * @since       2.4
         * @return      array
         */
        public function get_subscription_details(\EDD_Subscription $subscription)
        {
        }
        public function link_profile_id($profile_id, $subscription)
        {
        }
        /**
         * Add support for mixed carts to the gateway, if possible.
         *
         * @since 2.12.0
         * @param array  $supports
         * @param string $gateway
         * @return array
         */
        public function maybe_update_gateway_supports($supports, $gateway)
        {
        }
        /**
         * Convert a DateTime object of the order date and return it in the MySQL DATETIME format.
         *
         * Since EDD 3.0 uses GMT for all dates in the order records, we assume GMT first, but if we detect
         * EDD 2.x, we need to convert this to the Store's timezone.
         *
         * @param DateTime $date_time The DateTime object of the order date.
         *
         * @return string The MySQL DATETIME formatted date, converted into the timezone depending on EDD version.
         */
        protected function get_formatted_order_date(\DateTime $date_time)
        {
        }
        /**
         * Gets the friendly name of the gateway.
         *
         * @since 2.13.0
         * @return string
         */
        protected function get_friendly_name()
        {
        }
    }
    class EDD_Recurring_2Checkout extends \EDD_Recurring_Gateway
    {
        /**
         * Gateway ID.
         *
         * @var string
         */
        public $id = '2checkout';
        /**
         * Whether this gateway uses off-site checkout.
         *
         * @var bool
         */
        public $offsite = \true;
        /**
         * The gateway credentials.
         *
         * @var array
         */
        protected $credentials;
        /**
         * Setup gateway ID and load API libraries
         *
         * @access      public
         * @since       2.4
         * @return      void
         */
        public function init()
        {
        }
        /**
         * Validate the checkout fields and show any errors if necessary
         *
         * @access      public
         * @since       2.4
         * @return      void
         */
        public function validate_fields($data, $posted)
        {
        }
        /**
         * Store pending profile IDs
         *
         * @access      public
         * @since       2.4
         * @return      void
         */
        public function create_payment_profiles()
        {
        }
        /**
         * Finishes the signup process by redirecting to the success page or to an off-site payment page
         *
         * @access      public
         * @since       2.4
         * @return      void
         */
        public function complete_signup()
        {
        }
        /**
         * Processes webhooks from the payment processor
         *
         * @access      public
         * @since       2.4
         * @return      void
         */
        public function process_webhooks()
        {
        }
        /**
         * Determines if the subscription can be cancelled
         *
         * @access      public
         * @since       2.4
         * @return      bool
         */
        public function can_cancel($ret, $subscription)
        {
        }
        /**
         * Cancels a subscription
         *
         * @access      public
         * @since       2.4
         * @return      bool
         */
        public function cancel($subscription, $valid)
        {
        }
        /**
         * Retrieve the API credentials
         *
         * @since 2.4
         * @return array
         */
        public function get_api_credentials()
        {
        }
        /**
         * Determines if 2Checkout allows multiple subscriptions to be purchased at once.
         *
         * 2Checkout does not allow multiple subscriptions to be purchased at the same time.
         *
         * @since 2.8.5
         * @return bool
         */
        public function can_purchase_multiple_subs()
        {
        }
        /**
         * Link the recurring profile in 2Checkout.
         *
         * @since  2.4.4
         * @param  string $profile_id   The recurring profile id
         * @param  object $subscription The Subscription object
         * @return string               The link to return or just the profile id
         */
        public function link_profile_id($profile_id, $subscription)
        {
        }
    }
    class EDD_Recurring_2Checkout_Onsite extends \EDD_Recurring_2Checkout
    {
        /**
         * Gateway ID
         *
         * @var string
         */
        public $id = '2checkout_onsite';
        /**
         * Whether this gateway uses offsite payment pages.
         *
         * @var bool
         */
        public $offsite = \false;
        /**
         * Validate the checkout fields and show any errors if necessary
         *
         * @access      public
         * @since       2.4
         * @return      void
         */
        public function validate_fields($data, $posted)
        {
        }
        /**
         * Store pending profile IDs
         *
         * @access      public
         * @since       2.4
         * @return      void
         */
        public function create_payment_profiles()
        {
        }
        /**
         * Finishes the signup process by redirecting to the success page or to an off-site payment page
         *
         * @access      public
         * @since       2.4
         * @return      void
         */
        public function complete_signup()
        {
        }
        /**
         * Determines if the subscription can be cancelled
         *
         * @access      public
         * @since       2.4
         * @return      bool
         */
        public function can_cancel($ret, $subscription)
        {
        }
        /**
         * Cancels a subscription
         *
         * @access      public
         * @since       2.4
         * @return      bool
         */
        public function cancel($subscription, $valid)
        {
        }
        /**
         * Link the recurring profile in 2Checkout.
         *
         * @since  2.4.4
         * @param  string $profile_id   The recurring profile id
         * @param  object $subscription The Subscription object
         * @return string               The link to return or just the profile id
         */
        public function link_profile_id($profile_id, $subscription)
        {
        }
    }
    /**
     * Manual Recurring Payments Gateway
     *
     * This is the store gateway for manual recurring payments.
     */
    class EDD_Recurring_Manual_Payments extends \EDD_Recurring_Gateway
    {
        /**
         * Gateway ID
         *
         * @var string
         */
        public $id = 'manual';
        /**
         * The gateway supports.
         *
         * @var array
         */
        public $supports = array('mixed_cart');
        /**
         * Create a payment profile for each subscription.
         *
         * @return void
         */
        public function create_payment_profiles()
        {
        }
        /**
         * Determines if the subscription can be cancelled
         *
         * @access      public
         * @since       2.7
         * @return      bool
         */
        public function can_cancel($ret, $subscription)
        {
        }
        /**
         * Cancels a subscription.
         *
         * This does not actually cancel anything since there is no payment profile to cancel.
         * It is purely for testing / demonstration purposes.
         *
         * @access      public
         * @since       2.4
         * @return      bool
         */
        public function cancel($subscription, $valid)
        {
        }
    }
    class EDD_Recurring_PayPal extends \EDD_Recurring_Gateway
    {
        /**
         * Gateway ID.
         *
         * @var string
         */
        public $id = 'paypal';
        /**
         * Whether this gateway uses offsite payment pages.
         *
         * @var bool
         */
        public $offsite = \true;
        /**
         * Get things started
         *
         * @access      public
         * @since       2.4
         * @return      void
         */
        public function init()
        {
        }
        /**
         * Create temporary profile IDs that we can reference during IPN processing
         *
         * @access      public
         * @since       2.4
         * @return      void
         */
        public function create_payment_profiles()
        {
        }
        /**
         * Initial field validation before ever creating profiles or customers
         *
         * @access      public
         * @since       2.4
         * @return      void
         */
        public function validate_fields($data, $posted)
        {
        }
        /**
         * Setup PayPal arguments and redirect to PayPal
         *
         * @access      public
         * @since       2.4
         * @return      void
         */
        public function complete_signup()
        {
        }
        /**
         * Processes the "signup" IPN notice
         *
         * @since  2.4
         *
         * @param array $ipn_data IPN data from PayPal.
         *
         * @return void
         */
        public function process_paypal_subscr_signup($ipn_data)
        {
        }
        /**
         * Processes the recurring payments as they come in
         *
         * @since  2.4
         *
         * @param array $ipn_data IPN data from PayPal.
         *
         * @return void
         */
        public function process_paypal_subscr_payment($ipn_data)
        {
        }
        /**
         * Processes the "cancel" IPN notice
         *
         * @since  2.4
         *
         * @param array $ipn_data IPN data from PayPal.
         *
         * @return void
         */
        public function process_paypal_subscr_cancel($ipn_data)
        {
        }
        /**
         * Processes the "cancel" IPN notice
         *
         * @since  2.4
         *
         * @param array $ipn_data IPN data from PayPal.
         *
         * @return void
         */
        public function process_paypal_subscr_eot($ipn_data)
        {
        }
        /**
         * Processes the payment failed IPN notice
         *
         * @since  2.4
         *
         * @param array $ipn_data IPN data from PayPal.
         *
         * @return void
         */
        public function process_paypal_subscr_failed($ipn_data)
        {
        }
        /**
         * Retrieve the subscription this IPN notice is for
         *
         * @since  2.4
         *
         * @param array $ipn_data Optional. IPN data from PayPal. Default is empty array.
         *
         * @return EDD_Subscription|false
         */
        public function get_subscription($ipn_data = array())
        {
        }
        /**
         * Validate PayPal Recurring Download
         * @description: Additional server side validation for PayPal Standard recurring
         *
         * @param int $post_id Optional. Download ID, default is 0
         *
         * @return mixed
         */
        public function validate_paypal_recurring_download($post_id = 0)
        {
        }
        /**
         * Refund charges and cancel subscription when refunding via View Order Details
         *
         * @access      public
         * @since       2.5
         *
         * @param  EDD_Payment $payment Pavement to cancel.
         *
         * @return      void
         */
        public function cancel_subscriptions_on_refund(\EDD_Payment $payment)
        {
        }
        /**
         * Refund a renewal payment
         *
         * @access      public
         * @since       2.5
         *
         * @param  EDD_Payment $payment Pavement whose renewal is being refunded.
         * @return      void
         */
        public function refund_renewal_payment(\EDD_Payment $payment)
        {
        }
        /**
         * Determines if the subscription can be cancelled
         *
         * @access      public
         * @since       2.4
         *
         * @param $ret
         * @param EDD_Subscription $subscription Subscription to cancel.
         *
         * @return      bool
         */
        public function can_cancel($ret, $subscription)
        {
        }
        /**
         * Cancels a subscription
         *
         * @access      public
         * @since       2.4
         *
         * @param  EDD_Subscription $subscription The subscription object.
         * @param  bool|mixed       $valid        If cancellation is valid.
         *
         * @return      bool
         */
        public function cancel($subscription, $valid)
        {
        }
        /**
         * Determines if the subscription can be retried when failing
         *
         * @access      public
         * @since       2.8
         * @return      bool
         */
        public function can_retry($ret, $subscription)
        {
        }
        /**
         * Retries a failing subscription
         *
         * This method is connected to a filter instead of an action so we can return a nice error message.
         *
         * @access      public
         * @since       2.8
         * @return      bool|WP_Error
         */
        public function retry($result, $subscription)
        {
        }
        /**
         * Determines if PayPal Standard allows multiple subscriptions to be purchased at once.
         *
         * PayPal Standard does not allow multiple subscriptions to be purchased at the same time.
         *
         * @since 2.8.5
         * @return bool
         */
        public function can_purchase_multiple_subs()
        {
        }
        /**
         * Get the expiration date with PayPal
         *
         * @since  2.6.6
         *
         * @param  EDD_Subscription $subscription The subscription object
         *
         * @return string|WP_Error Expiration date or WP_Error if something went wrong
         */
        public function get_expiration($subscription)
        {
        }
        /**
         * Retrieves subscription details (status and expiration)
         *
         * @access      public
         * @since       2.6.6
         *
         * @param  EDD_Subscription $subscription The subscription object
         *
         * @return      array
         */
        public function get_subscription_details(\EDD_Subscription $subscription)
        {
        }
        /**
         * Link the recurring profile in PayPal.
         *
         * @since  2.4.4
         * @param  string $profile_id   The recurring profile id
         * @param  EDD_Subscription $subscription The Subscription object
         * @return string               The link to return or just the profile id
         */
        public function link_profile_id($profile_id, $subscription)
        {
        }
    }
    class EDD_Recurring_PayPal_Commerce extends \EDD_Recurring_Gateway
    {
        /**
         * ID of the gateway
         *
         * @var string
         */
        public $id = 'paypal_commerce';
        /**
         * @var string PayPal product ID used for this checkout.
         */
        public $paypal_product_id;
        /**
         * EDD_Recurring_PayPal_Commerce constructor.
         *
         * Ensures EDD 2.11+ is installed.
         *
         * @since 2.11
         */
        public function __construct()
        {
        }
        /**
         * Get things started
         *
         * @since 2.11
         */
        public function init()
        {
        }
        /**
         * Determines if the gateway allows multiple subscriptions to be purchased at once.
         *
         * @since 2.11
         * @return bool
         */
        public function can_purchase_multiple_subs()
        {
        }
        /**
         * Ensures that payments are created as `pending` in `record_signup()`.
         * We complete it ourselves in `activate_subscription()`.
         *
         * @since 2.11
         *
         * @return false
         */
        protected function should_auto_complete_payment()
        {
        }
        /**
         * Loads our script for the payment confirmation page.
         *
         * @since 2.11
         */
        public function scripts()
        {
        }
        /**
         * Initial field validation before ever creating profiles or customers
         *
         * @since 2.11
         */
        public function validate_fields($data, $posted)
        {
        }
        /**
         * Sets the intent to `subscription`.
         *
         * @link  https://developer.paypal.com/docs/checkout/reference/customize-sdk/#intent
         *
         * @since 2.11
         *
         * @param array $args JS SDK query args.
         *
         * @return array
         */
        public function set_sdk_intent($args)
        {
        }
        /**
         * Changes the approval action used for `onApprove`.
         *
         * @since 2.11
         *
         * @param string $action
         *
         * @return string
         */
        public function set_subscription_approval_action($action)
        {
        }
        /**
         * Checkout error handler.
         *
         * PayPal Commerce uses AJAX for all checkout processing, so we always want to send errors
         * back via JSON.
         *
         * @param array|false $errors
         *
         * @since 2.11
         * @return void
         */
        protected function handle_errors($errors = array())
        {
        }
        /**
         * Creates the subscription in PayPal.
         *
         * @since 2.11
         */
        public function create_payment_profiles()
        {
        }
        /**
         * Send JSON success or error at the end of the signup process.
         *
         * @since 2.11
         */
        public function complete_signup()
        {
        }
        /**
         * Determines whether or not a product exists.
         *
         * This is run for cached products in `get_or_create_paypal_product()`. This helps confirm
         * that the saved product ID was created with the same credentials currently in use.
         *
         * @since 2.11
         *
         * @param string $product_id PayPal product ID.
         *
         * @return bool
         */
        protected function paypal_product_exists($product_id)
        {
        }
        /**
         * Retrieves the PayPal product ID for a given EDD product.
         * If no product ID has been saved, a new one is created and saved.
         *
         * @since 2.11
         *
         * @param int $download_id EDD product ID.
         *
         * @return string ID of the PayPal product.
         * @throws API_Exception
         * @throws Gateway_Exception
         */
        protected function get_or_create_paypal_product($download_id)
        {
        }
        /**
         * Determines whether or not a plan exists.
         *
         * This is run for cached plans in `get_or_create_paypal_plan()`. This helps confirm
         * that the saved plan ID was created with the same credentials currently in use.
         *
         * @since 2.11
         *
         * @param string $plan_id
         *
         * @return bool
         */
        protected function paypal_plan_exists($plan_id)
        {
        }
        /**
         * Updates an existing PayPal plan to set the payment failure threshold to 2 and disable auto-billing outstanding balances.
         *
         * @since 2.11.10
         * @param string $plan_id
         * @return bool
         */
        protected function update_existing_paypal_plan($plan_id)
        {
        }
        /**
         * Returns the ID of a PayPal plan that matches the provided
         * subscription details. If a plan exists in our map, that ID
         * is returned. Otherwise, a new plan is created.
         *
         * @since 2.11
         *
         * @param string $product_id   PayPal product ID.
         * @param array  $subscription Subscription details.
         *
         * @return string PayPal plan ID.
         * @throws API_Exception
         */
        protected function get_or_create_paypal_plan($product_id, $subscription)
        {
        }
        /**
         * Creates a new subscription in PayPal.
         *
         * @since 2.11
         *
         * @param string $plan_id      PayPal plan ID.
         * @param array  $subscription Subscription details.
         *
         * @return string
         * @throws API_Exception
         */
        protected function create_paypal_subscription($plan_id, $subscription = array())
        {
        }
        /**
         * Builds the arguments for creating a PayPal plan.
         *
         * @since 2.11
         *
         * @param string $product_id   PayPal product ID.
         * @param array  $subscription Subscription details.
         *
         * @return array
         */
        public static function build_plan_api_args($product_id, $subscription)
        {
        }
        /**
         * Converts EDD subscription frequency settings to arguments PayPal will accept.
         *
         * @link  https://developer.paypal.com/docs/api/subscriptions/v1/#definition-frequency
         *
         * @since 2.11
         *
         * @param string $unit     Billing cycle unit.
         * @param int    $quantity Billing cycle quantity.
         *
         * @return array
         */
        public static function subscription_frequency_to_paypal_args($unit, $quantity)
        {
        }
        /**
         * Adds subscription events to the PayPal webhook.
         *
         * @param string[] $events Registered events.
         * @param string   $mode   PayPal API mode.
         *
         * @since 2.11
         * @return string[]
         */
        public function webhook_events($events, $mode)
        {
        }
        /**
         * Determines if a subscription can be cancelled.
         *
         * @since 2.11
         *
         * @param bool             $ret
         * @param EDD_Subscription $subscription
         *
         * @return bool
         */
        public function can_cancel($ret, $subscription)
        {
        }
        /**
         * Cancels a subscription in PayPal.
         *
         * @since 2.11
         *
         * @param EDD_Subscription $subscription Subscription object.
         * @param bool             $valid        Whether the request is valid.
         * @throws Exception If the request fails.
         * @return bool
         */
        public function cancel($subscription, $valid)
        {
        }
        /**
         * Retrieves the subscription's expiration date from PayPal.
         *
         * @since 2.11
         *
         * @param EDD_Subscription $subscription
         *
         * @return string|WP_Error
         */
        public function get_expiration($subscription)
        {
        }
        /**
         * Retrieves the subscription details from PayPal directly.
         *
         * @since 2.11
         *
         * @param EDD_Subscription $subscription
         *
         * @return string[]
         */
        public function get_subscription_details(\EDD_Subscription $subscription)
        {
        }
        /**
         * Links the subscription ID to the corresponding PayPal page.
         *
         * @link  https://sandbox.paypal.com/billing/subscriptions/
         *
         * @since 2.11
         *
         * @param string           $profile_id
         * @param EDD_Subscription $subscription
         *
         * @return string
         */
        public function link_profile_id($profile_id, $subscription)
        {
        }
        /**
         * Activates the EDD subscription at the end of the checkout process.
         *
         * PayPal has actually already activated the subscription for us, so this step is for us to
         * confirm that PayPal did, then update EDD records accordingly.
         *
         * @since 2.11
         */
        public function activate_subscription()
        {
        }
        /**
         * Filters the content on the confirmation page.
         *
         * @since 2.11
         *
         * @param string $content
         *
         * @return string
         */
        public function payment_confirmation_page($content)
        {
        }
        /**
         * Confirms the initial payment in the subscription.
         *
         * @since 2.11
         */
        public function confirm_transaction()
        {
        }
        /**
         * Retrieves a list of transactions for a given subscription.
         *
         * @since 2.11
         *
         * @param EDD_Subscription $subscription Subscription to retrieve transactions for.
         * @param string           $start        The start time of the range of transactions to list.
         *                                       Accepts any format that can be parsed by `strtotime()`.
         * @param string           $end          The end time of the range of transactions to list.
         *                                       Accepts any format that can be parsed by `strtotime()`.
         *
         * @return object[]
         * @throws API_Exception
         */
        public function get_subscription_transactions(\EDD_Subscription $subscription, $start = '', $end = '')
        {
        }
        /**
         * Determines whether or not a given PayPal transaction is a valid match for a given EDD Payment.
         * This validates that the PayPal transaction is COMPLETED, has the correct amount, and the
         * correct currency.
         *
         * @since 2.11
         *
         * @param object            $transaction
         * @param \EDD\Orders\Order $order
         *
         * @return bool
         */
        public function is_transaction_valid_for_payment($transaction, \EDD\Orders\Order $order)
        {
        }
        /**
         * Returns a "note-ready" explanation of a capture status reason.
         *
         * @link  https://developer.paypal.com/docs/api/payments/v2/#definition-capture_status_details
         *
         * @since 2.11
         *
         * @param string $reason
         *
         * @return string
         */
        public static function capture_status_to_note($reason)
        {
        }
    }
    class EDD_Recurring_PayPal_Express extends \EDD_Recurring_Gateway
    {
        /**
         * Gateway ID.
         *
         * @var string
         */
        public $id = 'paypalexpress';
        /**
         * Whether this gateway uses offsite payment pages.
         *
         * @var bool
         */
        public $offsite = \true;
        protected $username;
        protected $password;
        protected $signature;
        /**
         * Get things rollin'
         *
         * @since 2.4
         */
        public function init()
        {
        }
        /**
         * Upgrades the TLS for calls to the PayPal API via the WordPress HTTP API
         * @param  reference boject $handle The cURL object
         * @param  array            $r      Array of parameters for the WP_HTTP class
         * @param  string           $url    The URL being called by the WP_HTTP class
         * @return void
         */
        public function alter_paypal_curl_ssl_version($handle, $r, $url)
        {
        }
        /**
         * Validate Fields
         *
         * @description: Validate additional fields during checkout submission
         *
         * @since      2.4
         *
         * @param $data
         * @param $posted
         */
        public function validate_fields($data, $posted)
        {
        }
        /**
         * Create payment profiles
         *
         * @since 2.4
         */
        public function create_payment_profiles()
        {
        }
        /**
         * Redirect to PayPal
         *
         * @since 2.4
         */
        public function complete_signup()
        {
        }
        /**
         * Process payment confirmation after returning from PayPal
         *
         * @since 2.1
         */
        public function process_confirmation()
        {
        }
        /**
         * Display the confirmation form
         *
         * @since 2.4
         * @return string
         */
        public function confirmation_form()
        {
        }
        /**
         * Retrieve checkout details from PayPal
         *
         * @since 2.4
         * @return string
         */
        public function get_checkout_details($token = '')
        {
        }
        /**
         * Process webhooks
         *
         * @since 2.4
         */
        public function process_webhooks()
        {
        }
        /**
         * Refund charges and cancel subscription when refunding via View Order Details
         *
         * @access      public
         * @since       2.4.11
         * @return      void
         */
        public function process_refund(\EDD_Payment $payment)
        {
        }
        /**
         * Determines if the subscription can be cancelled
         *
         * @access      public
         * @since       2.4
         * @return      bool
         */
        public function can_cancel($ret, $subscription)
        {
        }
        /**
         * Cancels a subscription
         *
         * @access      public
         * @since       2.4
         * @return      bool
         */
        public function cancel($subscription, $valid)
        {
        }
        /**
         * Determines if the subscription can be retried when failing
         *
         * @access      public
         * @since       2.8
         * @return      bool
         */
        public function can_retry($ret, $subscription)
        {
        }
        /**
         * Retries a failing subscription
         *
         * This method is connected to a filter instead of an action so we can return a nice error message.
         *
         * @access      public
         * @since       2.8
         * @return      bool|WP_Error
         */
        public function retry($result, $subscription)
        {
        }
        /**
         * Determines if PayPal Express allows multiple subscriptions to be purchased at once.
         *
         * PayPal Express has deprecated this entirely as of November 1, 2019.
         *
         * @see https://github.com/easydigitaldownloads/edd-recurring/issues/1231
         * @see https://github.com/easydigitaldownloads/edd-recurring/issues/1092
         * @since 2.8.5
         * @return bool
         */
        public function can_purchase_multiple_subs()
        {
        }
        /**
         * Get the expiration date with PayPal
         *
         * @since  2.6.6
         * @param  object $subscription The subscription object
         * @return string Expiration date or WP_Error if something went wrong
         */
        public function get_expiration($subscription)
        {
        }
        /**
         * Retrieves subscription details (status and expiration)
         *
         * @access      public
         * @since       2.4
         * @return      array
         */
        public function get_subscription_details(\EDD_Subscription $subscription)
        {
        }
        /**
         * Link the recurring profile in PayPal.
         *
         * @since  2.4.4
         * @param  string $profile_id   The recurring profile id
         * @param  object $subscription The Subscription object
         * @return string               The link to return or just the profile id
         */
        public function link_profile_id($profile_id, $subscription)
        {
        }
    }
    class EDD_Recurring_PayPal_Website_Payments_Pro extends \EDD_Recurring_Gateway
    {
        /**
         * Gateway ID.
         *
         * @var string
         */
        public $id = 'paypalpro';
        protected $username;
        protected $password;
        protected $signature;
        /**
         * Get things rollin'
         *
         * @since 2.4
         */
        public function init()
        {
        }
        /**
         * Validate Fields
         *
         * @description: Validate additional fields during checkout submission
         *
         * @since      2.4
         *
         * @param $data
         * @param $posted
         */
        public function validate_fields($data, $posted)
        {
        }
        /**
         * Create payment profiles
         *
         * @since 2.4
         */
        public function create_payment_profiles()
        {
        }
        /**
         * Process the payment completion
         *
         * @since  2.4.3
         * @return void
         */
        public function complete_signup()
        {
        }
        /**
         * Process webhooks
         *
         * @since 2.4
         */
        public function process_webhooks()
        {
        }
        /**
         * Refund charges when refunding via View Order Details
         *
         * @access      public
         * @since       2.4.11
         * @return      void
         */
        public function process_refund(\EDD_Payment $payment)
        {
        }
        /**
         * Determines if the subscription can be cancelled
         *
         * @access      public
         * @since       2.4
         * @return      bool
         */
        public function can_cancel($ret, $subscription)
        {
        }
        /**
         * Cancels a subscription
         *
         * @access      public
         * @since       2.4
         * @return      bool
         */
        public function cancel($subscription, $valid)
        {
        }
        /**
         * Determines if the subscription can be retried when failing
         *
         * @access      public
         * @since       2.8
         * @return      bool
         */
        public function can_retry($ret, $subscription)
        {
        }
        /**
         * Retries a failing subscription
         *
         * This method is connected to a filter instead of an action so we can return a nice error message.
         *
         * @access      public
         * @since       2.8
         * @return      bool|WP_Error
         */
        public function retry($result, $subscription)
        {
        }
        /**
         * Determines if PayPal Pro allows multiple subscriptions to be purchased at once.
         *
         * PayPal Pro has deprecated this entirely as of November 1, 2019.
         *
         * @see https://github.com/easydigitaldownloads/edd-recurring/issues/1231
         * @see https://github.com/easydigitaldownloads/edd-recurring/issues/1092
         * @since 2.9.3
         * @return bool
         */
        public function can_purchase_multiple_subs()
        {
        }
        /**
         * Get the expiration date with PayPal
         *
         * @since  2.6.6
         * @param  object $subscription The subscription object
         * @return string Expiration date or WP_Error if something went wrong
         */
        public function get_expiration($subscription)
        {
        }
        /**
         * Retrieves subscription details (status and expiration)
         *
         * @access      public
         * @since       2.4
         * @return      array
         */
        public function get_subscription_details(\EDD_Subscription $subscription)
        {
        }
        /**
         * Determines if the subscription can be updated
         *
         * @access      public
         * @since       2.4
         * @return      bool
         */
        public function can_update($ret, $subscription)
        {
        }
        /**
         * Process the update payment form
         *
         * @since  2.4
         * @param  int  $subscriber    EDD_Recurring_Subscriber
         * @param  int  $subscription  EDD_Subscription
         * @return void
         */
        public function update_payment_method($subscriber, $subscription)
        {
        }
        /**
         * Link the recurring profile in PayPal.
         *
         * @since  2.4.4
         * @param  string $profile_id   The recurring profile id
         * @param  object $subscription The Subscription object
         * @return string               The link to return or just the profile id
         */
        public function link_profile_id($profile_id, $subscription)
        {
        }
    }
    class EDD_Recurring_Stripe extends \EDD_Recurring_Gateway
    {
        /**
         * Gateway ID
         *
         * @var string
         */
        public $id = 'stripe';
        /**
         * Ensures Easy Digital Downloads - Stripe Payment Gateway is active.
         *
         * @since unknown
         */
        public function __construct()
        {
        }
        /**
         * Registers gateway and hooks.
         *
         * @since unknown
         */
        public function init()
        {
        }
        /**
         * Removes Stripe from active gateways if the base gateway < 2.7.0
         *
         * @since 2.9.0
         *
         * @param array $enabled_gateways Enabled gateways that allow purchasing.
         * @return array
         */
        public function _require_stripe_270($enabled_gateways)
        {
        }
        /**
         * Adds notice if the base gateway < 2.7.0
         *
         * @since 2.9.0
         */
        public function _require_stripe_270_notice()
        {
        }
        /**
         * Require existing emails to log in prior to making a recurring purchase.
         * This replaces the "require_login" function in the base gateway class because of
         * some re-ordering which had to take place with PaymentIntents.
         *
         * @since 2.9.3
         * @throws \Exception If a user account exists for the email in question and the user is logged out, throw an Exception.
         * @return void
         */
        public function require_login_for_existing_users()
        {
        }
        // Override methods that are automatically called in the parent class.
        public function process_checkout($purchase_data)
        {
        }
        public function complete_signup()
        {
        }
        public function create_payment_profiles()
        {
        }
        public function record_signup()
        {
        }
        /**
         * Ensure subsequent API requests use the correct information.
         *
         * @since 2.9.0
         */
        public function setup_stripe_api()
        {
        }
        /**
         * Tell Auto Register to log the user in.
         *
         * @since  2.9.0
         * @param  bool $should_log_in_user This indicates whether the user should be automatically logged in when their user is created by EDD Auto Register.
         * @return bool
         */
        public function auto_register($should_log_in_user)
        {
        }
        /**
         * Check the customer currency prior to allowing checkout.
         *
         * If a customer has previously purchased a subscription, any future subscriptions must be made in the same currency.
         *
         * @since 2.9.0
         * @throws \Exception If the Stripe customer currency does not match the currency attempting to checkout, throw an Exception.
         *
         * @param array            $purchase_data Purchase data.
         * @param \Stripe\Customer $customer Stripe Customer object.
         */
        public function check_customer_currency($purchase_data, $customer)
        {
        }
        /**
         * Sets the PaymentIntent capture method to manual.
         *
         * Creating \Stripe\Subscriptions can fail individually.
         * Capturing after all attempts have been made ensures we only charge
         * for fulfilled items.
         *
         * @since 2.9.0
         *
         * @param array $payment_intent_args PaymentIntent creation arguments.
         * @param array $purchase_data       Cart purchase data.
         * @return array
         */
        public function create_payment_intent_args($payment_intent_args, $purchase_data)
        {
        }
        /**
         * Handles creating EDD_Subscription and \Stripe\Subscription records
         * on checkout form submission.
         *
         * @since 2.9.0
         *
         * @param array                                     $purchase_data    Purchase data.
         * @param \EDD\Orders\Order|\EDD_Payment            $order_or_payment The order or payment object.
         * @param \Stripe\PaymentIntent|\Stripe\SetupIntent $intent           Created Stripe Intent.
         */
        public function process_purchase_form($order_or_payment, $intent)
        {
        }
        /**
         * Creates EDD_Subscription records.
         *
         * @todo This is not gateway-specific and can be moved up.
         */
        public function create_edd_subscriptions()
        {
        }
        /**
         * Creates \Stripe\Subscription records.
         *
         * @since 2.9.0
         *
         * @param \Stripe\PaymentIntent Stripe PaymentIntent, used to retrieve the parent \EDD_Payment
         */
        public function create_stripe_subscriptions($intent)
        {
        }
        /**
         * Adjusts the capture amount for the \Stripe\PaymentIntent and captures.
         *
         * The parent \EDD_Payment record's current total is used to
         * determine the amount that is captured.
         *
         * @since 2.9.0
         *
         * @param \Stripe\PaymentIntent $intent PaymentIntent to capture.
         */
        public function capture_payment_intent($intent)
        {
        }
        /**
         * Transitions \EDD_Subscription records to their next status when
         * the parent \EDD_Payment record is transitioned.
         *
         * @since 2.9.0
         * @param \EDD_Payment $parent_payment Parent payment.
         */
        public function complete_subscriptions($parent_payment)
        {
        }
        /**
         * Processes webhooks from the payment processor.
         *
         * @since 2.4
         * @return void
         */
        public function process_webhooks()
        {
        }
        /**
         * Retrieve the customer object from Stripe.
         *
         * @since 2.4
         * @since 2.9.0 All payments go through the base Stripe gateway ensuring a
         *              customer record is associated with each user.
         *
         * @param string $customer_id Optional \Stripe\Customer ID. If not supplied the current user record will be used.
         * @return null|\Stripe\Customer Null if a saved customer ID reference cannot be found.
         */
        public function get_customer($customer_id = \null)
        {
        }
        /**
         * Backfills missing subscription data.
         *
         * This runs when a renewal payment is processed in Stripe for a subscription that is
         * missing the profile_id field. This happens occassionally with subscriptions created
         * pre Recurring Payments 2.4
         *
         * @access      public
         * @since       2.4
         * @return      object EDD_Subscription
         */
        public function backfill_subscription($customer_id = '', $subscription_id = '')
        {
        }
        /**
         * Retrieve the plan ID for an item in the cart
         *
         * @access      public
         * @since       2.4
         * @param       array $subscription The EDD Subscription data in question.
         * @return      int|false
         */
        public function get_plan_id($subscription = array())
        {
        }
        /**
         * Retrieve the stripe Plan details. It also creates a plan if none is found that matches.
         *
         * @access      public
         * @since       2.9.6
         * @param       array $subscription The EDD Subscription data in question.
         * @return      \Stripe\Plan|false Stripe Plan object or false if one cannot be created or retrieved.
         */
        public function get_stripe_plan($subscription = array())
        {
        }
        /**
         * Build the argument array for creating a plan in Stripe
         *
         * @since 2.7
         * @param array  $subscription
         * @param string $name
         * @param string $plan_id
         *
         * @return array
         */
        public function get_plan_args($subscription, $name, $plan_id = '')
        {
        }
        /**
         * Returns a timestamp for a Subscription's biling cycle anchor point.
         *
         * @since 2.9.7
         *
         * @link https://github.com/easydigitaldownloads/edd-recurring/issues/1268
         * @link https://stripe.com/docs/billing/subscriptions/billing-cycle
         *
         * @param array    $subscription Subscription arguments.
         * @param null|int $now          Starting point for determining the current calendar positions.
         *                               Default time()
         * @return int Timestamp.
         */
        public function get_billing_cycle_anchor($subscription, $now = \null)
        {
        }
        /**
         * Matches the Subscription's expiration date with Stripe's renewal date.
         *
         * @since 2.9.7
         *
         * @param int              $expiration Renewal expiration timestamp.
         * @param int              $subscription_id ID of the current Subscription.
         * @param EDD_Subscription $subscription Current subscription.
         * @return int Renewal expiration timestamp.
         */
        public function set_renewal_expiration($expiration, $subscription_id, $subscription)
        {
        }
        /**
         * Fixes an issue in subscriptions that got the incorrect expiration date.
         *
         * @see https://github.com/easydigitaldownloads/edd-recurring/pull/1281
         * @since 2.9.8
         *
         * @param $sub EDD_Subscription
         */
        public function check_renewal_expiration($sub)
        {
        }
        /**
         * Determines if the subscription can be cancelled
         *
         * @access      public
         * @since       2.4
         * @return      bool
         */
        public function can_cancel($ret, $subscription)
        {
        }
        /**
         * Cancels a subscription at period end, unless the status of the subscription is failing. If failing, cancel immediately.
         *
         * @access      public
         * @since       2.4
         * @param       EDD_Subscription $subscription The EDD Subscription object being cancelled.
         * @param       bool             $valid Currently this defaults to be true at all times.
         * @return      bool
         */
        public function cancel($subscription, $valid)
        {
        }
        /**
         * Cancels a subscription immediately.
         *
         * @access      public
         * @since       2.9.4
         * @param       EDD_Subscription $subscription The EDD Subscription object being cancelled.
         * @return      bool
         */
        public function cancel_immediately($subscription)
        {
        }
        /**
         * Determines if a subscription can be reactivated through the gateway.
         *
         * @since 2.6
         *
         * @param bool              $can_reactivate                       True if the Subscription can be reactivated.
         * @param \EDD_Subscription $subscription Subscription to determine reactivation status of.
         *
         * @return bool
         */
        public function can_reactivate($can_reactivate, $subscription)
        {
        }
        /**
         * Determines if the subscription can be retried when failing
         *
         * @access      public
         * @since       2.8
         * @return      bool
         */
        public function can_retry($ret, $subscription)
        {
        }
        /**
         * Reactivates a subscription.
         *
         * @access      public
         * @since       2.6
         *
         * @param EDD_Subscription $subscription The EDD_Subscription object.
         * @param boolean          $valid        A verification call that this call came from a valid source.
         *
         * @return boolean
         */
        public function reactivate($subscription, $valid)
        {
        }
        /**
         * Retries a failing Subscription's latest invoice.
         *
         * This method is connected to a filter instead of an action so we can return a nice error message.
         *
         * @todo This uses a different amount of paid invoices than the Stripe Account settings may require.
         *
         * @access      public
         * @since       2.8
         *
         * @param bool             $result       If the result was successful.
         * @param EDD_Subscription $subscription The EDD_Subscription object to retry.
         *
         * @return      bool|WP_Error
         */
        public function retry($result, $subscription)
        {
        }
        /**
         * Get the expiration date with Stripe
         *
         * @since  2.6.6
         * @param  object $subscription The subscription object
         * @return string Expiration date or WP_Error if something went wrong
         */
        public function get_expiration($subscription)
        {
        }
        /**
         * Determines if the subscription can be updated.
         *
         * @access      public
         * @since       2.4
         * @return      bool
         */
        public function can_update($can_update, $subscription)
        {
        }
        /**
         * Refund charges for renewals when refunding via View Order Details.
         *
         * @access      public
         * @since       2.4.11
         * @param       EDD_Payment $payment The EDD_Payment object that is being refunded.
         * @return      void
         */
        public function process_refund(\EDD_Payment $payment)
        {
        }
        /**
         * Outputs the payment method update form
         *
         * @since  2.4
         * @param  EDD_Subscription object $subscription The subscription object.
         * @return void
         */
        public function update_payment_method_form($subscription)
        {
        }
        /**
         * Updates a Subscription's default payment method.
         *
         * @since 2.13.0 Added `setup_intent` to the AJAX response if a new payment method requires confirmation.
         */
        public function update_subscription_payment_method()
        {
        }
        /**
         * Processes the update payment form.
         *
         * Handling of the latest open invoice with an attached PaymentIntent is done
         * on the client. In order to avoid a loop of paying for multiple "Past due" invoices
         * that haven't affected the the \EDD_Subscription status, void them.
         *
         * @link https://github.com/easydigitaldownloads/edd-recurring/issues/1177
         *
         * @since 2.9.0
         *
         * @param EDD_Recurring_Subscriber $subscriber   EDD_Recurring_Subscriber.
         * @param EDD_Subscription         $subscription EDD_Subscription.
         */
        public function update_payment_method($subscriber, $subscription)
        {
        }
        /**
         * Cancels subscription in Stripe when marked as completed
         *
         * @access      public
         * @since       2.4.15
         * @return      bool
         */
        public function cancel_on_completion($subscription_id, $subscription)
        {
        }
        /**
         * Link the recurring profile in Stripe.
         *
         * @since  2.4.4
         * @param  string $profile_id   The recurring profile id
         * @param  object $subscription The Subscription object
         * @return string               The link to return or just the profile id
         */
        public function link_profile_id($profile_id, $subscription)
        {
        }
        /**
         * Looks up the transaction ID for a subscription record by the profile ID.
         *
         * @since  2.4.11
         * @param string $profile_id The recurring profile id.
         * @return object|false EDD_Subsciption object or false if no updates are made.
         */
        public function check_transaction_id($profile_id = '')
        {
        }
        /**
         * Determines if the subscription data needs checked against Stripe's database.
         *
         * Right now this only checks if the transaction ID is missing and retrieves it. In the future this could also check status, expiration date, etc.
         *
         * @since  2.4.11
         * @param EDD_Subscription $subscription The EDD_Subscription object.
         * @return void
         */
        public function maybe_check_subscription(\EDD_Subscription $subscription)
        {
        }
        /**
         * Verify that the user has acknowledged to updating their payment form as a default for all subscriptions
         *
         * @since 2.4
         * @since 2.9.0 No longer used, always returns value sent.
         *
         * @param bool  $is_valid  If the data passed so far was valid from EDD Core
         * @param array $post_data The array of $_POST sent by the form
         *
         * @return bool
         */
        public function confirm_default_payment_method_change($is_valid, $post_data)
        {
        }
    }
}
namespace EDD_Recurring\Gateways\PayPal {
    abstract class Billing_Subscription extends \EDD\Gateways\PayPal\Webhooks\Events\Webhook_Event
    {
        /**
         * Retrieves an EDD subscription object from a subscription event.
         *
         * @since 2.11
         *
         * @return \EDD_Subscription
         * @throws \Exception
         */
        protected function get_subscription_from_event()
        {
        }
    }
    class Billing_Subscription_Activated extends \EDD_Recurring\Gateways\PayPal\Billing_Subscription
    {
        /**
         * Handles the subscription activation event.
         *
         * @since 2.11
         * @throws \Exception
         */
        protected function process_event()
        {
        }
    }
    class Billing_Subscription_Cancelled extends \EDD_Recurring\Gateways\PayPal\Billing_Subscription
    {
        /**
         * Processes a cancellation webhook.
         *
         * @since 2.11
         * @throws \Exception
         */
        protected function process_event()
        {
        }
    }
    class Billing_Subscription_Expired extends \EDD_Recurring\Gateways\PayPal\Billing_Subscription
    {
        /**
         * Handles expiration webhooks.
         *
         * @since 2.11
         * @throws \Exception
         */
        protected function process_event()
        {
        }
    }
    class Billing_Subscription_Payment_Failed extends \EDD_Recurring\Gateways\PayPal\Billing_Subscription
    {
        /**
         * Handles subscription renewal payment failures.
         *
         * @since 2.11
         * @throws \Exception
         */
        protected function process_event()
        {
        }
    }
    class Billing_Subscription_Suspended extends \EDD_Recurring\Gateways\PayPal\Billing_Subscription
    {
        /**
         * Processes a suspension webhook.
         *
         * @since 2.11
         * @throws \Exception
         */
        protected function process_event()
        {
        }
    }
    class Payment_Sale_Completed extends \EDD\Gateways\PayPal\Webhooks\Events\Webhook_Event
    {
        /**
         * Handles sale completion events.
         *
         * @since 2.11
         * @throws \Exception
         */
        protected function process_event()
        {
        }
    }
    class Payment_Sale_Refunded extends \EDD\Gateways\PayPal\Webhooks\Events\Webhook_Event
    {
        /**
         * Processes the event.
         *
         * @throws API_Exception
         * @throws Authentication_Exception
         *
         * @since 2.11.3
         */
        protected function process_event()
        {
        }
        /**
         * Retrieves an EDD_Payment record from a refund event.
         *
         * @since 2.11.3
         *
         * @return \EDD_Payment
         * @throws API_Exception
         * @throws Authentication_Exception
         * @throws \Exception
         */
        protected function get_payment_from_refund()
        {
        }
    }
}
namespace {
    /**
     * Integrates EDD Recurring with the Auto Register extension
     *
     * @since v2.4
     */
    class EDD_Recurring_Auto_Register
    {
        /**
         * Get things started
         *
         * @since  2.4
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * Run the auto-register plugin function prior to creating payment profiles
         *
         * @since  2.4
         * @param  EDD_Recurring_Gateway $gateway_data  Gateway Object
         * @return void
         */
        public function auto_register(\EDD_Recurring_Gateway $gateway_data)
        {
        }
    }
    /**
     * Integrates EDD Recurring with the Content Restriction extension
     *
     * This allows content to be restricted to active subscribers only
     *
     * @since v1.0
     */
    class EDD_Recurring_Content_Restriction
    {
        /**
         * Get things started
         *
         * @since  1.0
         * @return void
         */
        function __construct()
        {
        }
        /**
         * Load our admin actions
         *
         * @since  1.0
         * @return void
         */
        public function admin_init()
        {
        }
        /**
         * Attach our extra meta box field
         *
         * @since  1.0
         * @return void
         */
        public function metabox($post_id)
        {
        }
        /**
         * For backwards compatibility only, this function remains, and is renamed to deprecated_metabox instead of just metabox.
         * For the correct/current usage, see the metabox method in this EDD_Recurring_Content_Restriction class,
         * and the edd_cr_restricted_table_before hook added in Content Restriction version 2.3
         * Attach our extra meta box field
         *
         * @since  2.8
         * @return void
         */
        public function deprecated_metabox($post_id, $restricted_to, $restricted_variable)
        {
        }
        /**
         * Save data from the meta box
         *
         * @since  1.0
         * @return void
         */
        public function save_data($post_id, $data)
        {
        }
        /**
         * Check if user has access to content
         *
         * @since  1.0
         * @return bool
         */
        public function restrict($is_restricted = \false, $post_id = 0, $download_id = 0, $user_id = 0, $price_id = \null)
        {
        }
        /**
         * Check if user has access to content
         *
         * @since  2.2.7
         * @return bool
         */
        public function can_access_content($return, $user_id, $restricted_to, $post_id)
        {
        }
        /**
         * Sets the active subscription restriction on the edd_restrict shortcode by default and allows overriding it
         *
         * @since  2.4
         * @param  array $out   The attributes to return
         * @param  array $pairs Attribute pairs
         * @param  array $atts  Passed attributes
         * @return array
         */
        public function restrict_shortcode_atts($out, $pairs, $atts)
        {
        }
        /**
         * Allows subscriptions to modify the edd_restrict shortcode
         *
         * @since  2.4
         * @param  string $content       The content between the shortcode tags.
         * @param  array  $restricted_to The list of items to restrict to.
         * @param  array  $atts          The array of attributes.
         * @return string                The new content
         */
        public function restrict_shortcode_content($content, $restricted_to, $atts)
        {
        }
    }
    /**
     * Integrates EDD Recurring with the Fraud Monitor extension
     *
     * @since v2.7.1
     */
    class EDD_Recurring_Fraud_Monitor
    {
        /**
         * Get things started
         *
         * @since  2.7.1
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * When a payment is confirmed as fraud, cancel any subscriptions associated with the payment.
         *
         * @since 2.7.1
         * @param $payment_id
         * @return void
         */
        public function cancel_on_fraud($payment_id)
        {
        }
    }
    // @codeCoverageIgnore
    /**
     * Class EDD_Recurring_Invoices
     *
     * @since 2.5.3
     */
    class EDD_Recurring_Invoices
    {
        /**
         * Get things started
         *
         * @since  2.5.3
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * Add the payment statuses created and used by Recurring to the list of acceptable statuses when EDD Invoices is deciding if it should show the "Generate Invoice" option.
         *
         * @since  2.5.3
         * @param  array $acceptable_statuses  The array containing all of the acceptable payment statuses.
         * @return array
         */
        public function add_acceptable_payment_statuses($acceptable_statuses)
        {
        }
    }
    /**
     * Integrates EDD Recurring with the Software Licensing extension
     *
     * @since v2.4
     */
    class EDD_Recurring_Software_Licensing
    {
        /**
         * @var EDD_Subscriptions_DB
         */
        protected $db;
        /**
         * Get things started
         *
         * @since  2.4
         * @return void
         */
        public function __construct()
        {
        }
        /**
         * Updates the recurring amounts if a Software Licensing renewal discount is on the item.
         *
         * @param array $recurring_amounts
         * @param array $item
         * @return array
         */
        public function update_recurring_amounts($recurring_amounts, $item)
        {
        }
        /**
         * Modifies the recurring amounts in respect to renewal discounts and license upgrades
         *
         * @since  2.4
         * @deprecated 2.11.9
         * @param array $args This array contains information about the product. The the edd_recurring_subscription_pre_gateway_args filter in edd-recurring-gateway for a list of keys.
         * @param array $item The information about this item, as found in the edd_gateway_[ gateway name ] hook.
         * @return array The modified args for the edd_recurring_subscription_pre_gateway_args filter.
         */
        public function set_recurring_amount($args = array(), $item = array())
        {
        }
        /**
         * Sets the length of a license key for free trials
         *
         * @since  2.6
         * @return string
         */
        public function set_license_length_for_trials($expiration, $payment_id, $download_id, $license_id)
        {
        }
        /**
         * Disables the Renew/Extend link in [edd_license_keys] for licenses that are tied to an active, trialling, or failing subscription
         *
         * @since  2.4
         * @return bool
         */
        public function disable_license_extension($can_extend, $license_id = 0)
        {
        }
        /**
         * Disables the license key renewal reminders when a license has an active subscription
         *
         * @since  2.4
         * @return bool
         */
        public function maybe_suppress_scheduled_reminder_for_license($send = \true, $license_id = 0, $notice_id = 0)
        {
        }
        /**
         * Adds edd_subscription status to the renewals by date query
         *
         * @since  2.5
         * @return array
         */
        public function renewals_by_date($args, $day, $month, $year)
        {
        }
        /**
         * Determines if a subscription with a license key can be renewed
         *
         * @since  2.5
         * @return bool
         */
        public function can_renew_subscription($can_renew, \EDD_Subscription $subscription)
        {
        }
        /**
         * Retrieves the renewal URL
         *
         * @since  2.5
         * @return bool
         */
        public function get_renew_url($url, \EDD_Subscription $subscription)
        {
        }
        /**
         * Prevents the notice about updating payment method from showing when customer only has one subscription and we're processing an upgrade
         *
         * @since  2.5
         * @return bool
         */
        public function maybe_suppress_update_payment_method_notice($show_notice, $notice_subs)
        {
        }
        /**
         * Removes the trial flags from cart items when purchasing a renewal or upgrade
         *
         * @since  2.7
         * @return bool
         */
        public function remove_trial_flags_on_renewals_and_upgrades($cart_contents)
        {
        }
        /**
         * Adds upgrade flag to subscription details during checkout
         *
         * Replaced by add_upgrade_and_renewal_flag()
         *
         * @since  2.4
         * @return array
         */
        public function add_upgrade_flag($subscription = array(), $item = array())
        {
        }
        /**
         * Adds upgrade and renewal flag to subscription details during checkout
         *
         * @since  2.6.3
         * @return array
         */
        public function add_upgrade_and_renewal_flag($subscription = array(), $item = array())
        {
        }
        /**
         * If a license has an associated subscription and that subscription is currently trialling, the upgrade
         * cost is modified to be the full amount of the new product.
         *
         * @param float $prorated_price The prorated cost to upgrade the license.
         * @param int   $license_id     ID of the license being upgraded.
         * @param float $old_price      Price of the license being upgraded.
         * @param float $new_price      Price of the new license level.
         *
         * @since 2.10.1
         * @return float The prorated cost to upgrade the license.
         */
        public function reset_upgrade_cost_when_trialling($prorated_price, $license_id, $old_price, $new_price)
        {
        }
        /**
         * When upgrading a license, set the subscription renewal to the license expiration.
         *
         * @since 2.7.1
         * @param $args
         * @param $recurring_gateway_data
         *
         * @return array
         */
        public function handle_subscription_upgrade_expiration($args, $recurring_gateway_data)
        {
        }
        /**
         * Renew the license key for a subscription when a renewal payment is processed.
         *
         * @since  2.4
         * @return void
         */
        public function renew_license_keys($sub_id, $expiration, $subscription, $payment_id)
        {
        }
        /**
         * Sets the "Was Renewal" flag on renewal payments that have a license key
         *
         * @since  2.5
         * @return void
         */
        public function set_renewal_flag($payment, $subscription)
        {
        }
        /**
         * Display a link to the subscription details page in Downloads > Licenses
         *
         * @since  2.4
         * @return void
         */
        public function licenses_table($license)
        {
        }
        /**
         * Display the associated license key on the subscription details screen
         *
         * @since  2.4
         * @return void
         */
        public function subscription_details(\EDD_Subscription $subscription)
        {
        }
        /**
         * Display renewal date in [license_keys] for any key that is renewing automatically
         *
         * @since  2.4
         * @return void
         */
        public function license_key_details($license_id = 0)
        {
        }
        /**
         * Display the new subscription details on checkout when upgrading a license
         *
         * @since  2.4
         * @return void
         */
        public function checkout_upgrade_details()
        {
        }
        /**
         * Display the new subscription details on checkout when manually renewing a license
         *
         * @since  2.6.3
         * @return void
         */
        public function checkout_license_renewal_details()
        {
        }
        /**
         * Determines if the cart contains an upgrade
         *
         * @since  2.5
         * @return bool
         */
        public function cart_has_upgrade()
        {
        }
        /**
         * Displays a notice about license key lengths being synced with free trials
         *
         * @since  2.6
         * @return void
         */
        public function free_trial_settings_notice($download_id = 0)
        {
        }
        /**
         * Updates the expiration date on a license key when the renewal date of a subscription is checked
         * and synced with a merchant processor
         *
         * See https://github.com/easydigitaldownloads/edd-recurring/issues/614
         *
         * @since  2.6.6
         * @return void
         */
        public function maybe_sync_license_expiration_on_check_expiration(\EDD_Subscription $subscription, $expiration)
        {
        }
        /**
         * Rolls a license expiration date back when refunding a renewal payment
         *
         * See https://github.com/easydigitaldownloads/edd-recurring/issues/559
         *
         * @since  2.7
         * @param \EDD_Payment|int $payment      The original order ID in EDD 3.0; an EDD_Payment object in 2.x.
         * @param int              $refund_id    The refund order ID (EDD 3.0).
         * @param bool             $all_refunded Whether the entire order was refunded (EDD 3.0).
         * @return void
         */
        public function rollback_expiration_on_renewal_refund($payment, $refund_id = \null, $all_refunded = \true)
        {
        }
        /**
         * If this is a renewal and the old subscription is `failing`, cancel it.
         *
         * @link https://github.com/easydigitaldownloads/edd-recurring/issues/1288
         *
         * @param EDD_Subscription|false $subscription Newly created subscription object.
         * @param array                  $sub_args     Gateway subscription arguments.
         * @param EDD_Recurring_Gateway  $gateway      Gateway object.
         *
         * @since 2.10.2
         * @return void
         */
        public function cancel_failed_subscription_during_renewal($subscription, $sub_args, $gateway)
        {
        }
        /**
         * Filters the EDD discount response when a discount is added to or removed from the cart.
         *
         * @since 2.11.9
         * @deprecated 2.11.10
         * @param array $data
         * @return array
         */
        public function update_discount_response($data)
        {
        }
        /**
         * Handles the upgrade process for a license key with a subscription.
         *
         * When upgrading a license key that has a subscription, the original subscription is cancelled
         * and then a new subscription record is created.
         *
         * @since  2.4
         * @deprecated 2.13.0
         * @return void
         */
        public function handle_subscription_upgrade(\EDD_Recurring_Gateway $gateway_data)
        {
        }
        /**
         * Handles the upgrade process for a license key with a subscription
         *
         * When upgrading a license key that has a subscription and upgrading to a product without a subscription,
         * the original subscription is cancelled
         *
         * @since  2.4
         * @deprecated 2.13.0
         * @return void
         */
        public function handle_non_subscription_upgrade($download_id = 0, $payment_id = 0, $type = 'default', $cart_item = array(), $cart_index = 0)
        {
        }
        /**
         * Handles the processing of cancelling existing subscription when manually renewing a license key
         *
         * When renewing a license key that has a subscription, the original subscription is cancelled
         * and then a new subscription record is created
         *
         * @since  2.6.3
         * @deprecated 2.13.0
         * @return void
         */
        public function handle_manual_license_renewal(\EDD_Recurring_Gateway $gateway_data)
        {
        }
    }
}
namespace EDD\Recurring\Admin\Dashboard {
    /**
     * Recurring Dashboard Widget.
     *
     * @since 2.13.0
     */
    class Widget implements \EDD\EventManagement\SubscriberInterface
    {
        /**
         * Get the subscribed events.
         *
         * @since 2.13.0
         * @return array
         */
        public static function get_subscribed_events()
        {
        }
        /**
         * Display the widget
         *
         * @since  2.4.15
         * @return void
         */
        public function widget()
        {
        }
        /**
         * Retrieve subscription count for given period
         *
         * @since  2.4.15
         *
         * @param string $period Period to retrieve count for.
         *
         * @return int
         */
        public function get_subscription_count($period = '')
        {
        }
        /**
         * Retrieve estimated revenue for the number of days given
         *
         * @since  2.4.15
         *
         * @param int $days Number of days (0 to 365).
         *
         * @return float
         */
        public function get_estimated_revenue($days = 0)
        {
        }
    }
}
namespace EDD\Recurring\Admin\Exports {
    /**
     * Subscriptions class.
     *
     * @since 2.11.8
     */
    class Subscriptions extends \EDD_Batch_Export
    {
        /**
         * @var string Export type - used for export-specific filters/actions.
         */
        public $export_type = 'recurring_subscriptions';
        /**
         * Constructor.
         *
         * @since 2.11.8
         *
         * @param int $_step The step.
         */
        public function __construct($_step = 1)
        {
        }
        /**
         * CSV column headers.
         *
         * @since 2.11.8
         *
         * @return array
         */
        public function csv_cols()
        {
        }
        /**
         * Retrieves the data for this batch.
         *
         * @since 2.11.8
         *
         * @return array|false Array of data if we have some, or false if none found.
         */
        public function get_data()
        {
        }
        /**
         * Calculates the percentage complete.
         *
         * @since 2.11.8
         *
         * @return int|float
         */
        public function get_percentage_complete()
        {
        }
        /**
         * Sets filter properties we support.
         *
         * @since 2.11.8
         *
         * @param array $request The request.
         */
        public function set_properties($request)
        {
        }
    }
}
namespace EDD\Recurring\Admin {
    /**
     * Class Filters
     *
     * @package EDD\Recurring\Admin
     * @since 2.12.1
     */
    class Filters implements \EDD\EventManagement\SubscriberInterface
    {
        /**
         * Registers the event listeners.
         *
         * @since 2.12.1
         * @return array
         */
        public static function get_subscribed_events()
        {
        }
        /**
         * Add a tooltip to the subscription status in the order list.
         *
         * @since 2.12.1
         * @param array $statuses The order statuses.
         * @return array
         */
        public function add_subscription_status_tooltip($statuses)
        {
        }
        /**
         * Add a link to the recurring payments documentation.
         *
         * @since 2.12.1
         * @param string $link The link to the documentation.
         * @return string
         */
        public function add_docs_link($link)
        {
        }
    }
}
namespace EDD\Recurring\Admin\Orders {
    // @codeCoverageIgnore
    /**
     * Order details for subscriptions.
     */
    class Details implements \EDD\EventManagement\SubscriberInterface
    {
        /**
         * Get the events to subscribe to.
         *
         * @since 2.13.0
         * @return array
         */
        public static function get_subscribed_events()
        {
        }
        /**
         * Add the subscription section to the order details.
         *
         * @since 2.13.0
         * @param array                  $sections The sections.
         * @param \EDD\Orders\Order|null $order    The order.
         * @return array
         */
        public function subscription_section($sections, $order)
        {
        }
        /**
         * Display the subscription details.
         *
         * @since 2.13.0
         * @param \EDD\Orders\Order $order The order.
         * @return void
         */
        public function details($order)
        {
        }
        /**
         * Fix a missing subscription.
         *
         * @since 2.13.0
         * @param array $data The data.
         * @return void
         */
        public function fix_missing_subscription($data)
        {
        }
        /**
         * Show a notice if the subscription tool was used.
         *
         * @since 2.13.0
         * @return void
         */
        public function missing_subscription_notice()
        {
        }
    }
}
namespace EDD\Recurring\Admin\Pointers {
    /**
     * Class RecurringRevenue
     *
     * @since 2.12.0
     */
    class RecurringRevenue
    {
        /**
         * Maybe show an admin pointer showing a message about the new menu locations.
         *
         * @since 2.12.0
         *
         * @param array $pointers Array of pointers.
         *
         * @return array
         */
        public static function register_pointer($pointers)
        {
        }
    }
    /**
     * Class RevenueBreakdown
     *
     * @since 2.12.0
     */
    class RevenueBreakdown
    {
        /**
         * Maybe show an admin pointer showing a message about the new menu locations.
         *
         * @since 2.12.0
         *
         * @param array $pointers Array of pointers.
         *
         * @return array
         */
        public static function register_pointer($pointers)
        {
        }
    }
}
namespace EDD\Recurring\Admin\Reports {
    /**
     * Recurring Revenue Report
     *
     * @since 2.13.0
     */
    class RecurringRevenue
    {
        /**
         * Get the Monthly Recurring Revenue (MRR).
         *
         * @since 2.13.0
         * @return float
         */
        public static function get_mrr()
        {
        }
        /**
         * Get the Annual Recurring Revenue (ARR).
         *
         * @since 2.13.0
         * @return float
         */
        public static function get_arr()
        {
        }
    }
    class RevenueBreakdown
    {
        /**
         * Registers the revenue attribution reports.
         *
         * @param \EDD\Reports\Data\Report_Registry $reports
         * @return void
         */
        public function __construct($reports)
        {
        }
        /**
         * Registers the revenue attribution top level report.
         *
         * @since 2.12.0
         */
        public function register_report()
        {
        }
        /**
         * Maybe adds the filter for the products dropdown.
         * We have to check the report ID because the action is run for a lot of different contexts.
         *
         * @since 2.12.0
         * @param mixed $report
         * @return void
         */
        public function maybe_filter_products($report)
        {
        }
        /**
         * Removes the filter for the products dropdown.
         * We have to check the report ID because the action is run for a lot of different contexts.
         *
         * @since 2.12.0
         * @param mixed $report
         * @return void
         */
        public function remove_filter_products($report)
        {
        }
        /**
         * Gets the new revenue for the time period.
         *
         * @since 2.12.0
         * @param string $output
         * @return string|array
         */
        public function get_new_revenue($output = 'formatted')
        {
        }
        /**
         * Gets the renewal revenue for the time period.
         *
         * @since 2.12.0
         * @param string $output
         * @return string|array
         */
        public function get_renewal_revenue($output = 'formatted')
        {
        }
        /**
         * The callback function which fetches the data for the revenue attribution bar chart.
         *
         * @since 2.12.0
         * @return array
         */
        public function new_vs_renewal_sales()
        {
        }
        /**
         * Resrict the status keys to only new purchaes which do not include 'edd_subscription'.
         *
         * @since 2.12.0
         * @param array $statuses
         * @return array
         */
        public function new_sales_statuses_only($statuses)
        {
        }
        /**
         * Restrict statuses to only recurring sales.
         *
         * @since 2.12.0
         * @return array
         */
        public function recurring_sales_statuses_only()
        {
        }
    }
}
namespace EDD\Recurring\Admin\Subscriptions {
    /**
     * EDD Subscriptions List Table Class
     *
     * @access      private
     */
    class ListTable extends \EDD\Admin\List_Table
    {
        /**
         * Number of results to show per page
         *
         * @since       2.4
         */
        public $per_page = 30;
        public $total_count = 0;
        public $active_count = 0;
        public $pending_count = 0;
        public $expired_count = 0;
        public $completed_count = 0;
        public $trialling_count = 0;
        public $cancelled_count = 0;
        public $failing_count = 0;
        /**
         * Get things started
         *
         * @access      private
         * @since       2.4
         * @return      void
         */
        public function __construct()
        {
        }
        /**
         * Adds the advanced filters to the subscriptions table.
         *
         * @since 2.11.8
         * @return void
         */
        public function advanced_filters()
        {
        }
        /**
         * Outputs the filter bar searchbox.
         *
         * @since 2.11.8
         * @return void
         */
        public function filter_bar_searchbox()
        {
        }
        /**
         * Adds the items to the filter bar.
         *
         * @since 2.11.8
         * @return void
         */
        public function filter_bar_items()
        {
        }
        /**
         * Retrieve the view types
         *
         * @access public
         * @since 2.4
         * @return array $views All the views available
         */
        public function get_views()
        {
        }
        /**
         * Show the search field
         *
         * @since 2.5
         * @access public
         *
         * @param string $text Label for the search box
         * @param string $input_id ID of the search box
         *
         * @return void
         */
        public function search_box($text, $input_id)
        {
        }
        /**
         * Render most columns
         *
         * @access      private
         * @since       2.4
         * @return      string
         */
        protected function column_default($item, $column_name)
        {
        }
        /**
         * Customer column
         *
         * @access      private
         * @since       2.4
         * @return      string
         */
        function column_customer_id($item)
        {
        }
        /**
         * Status column
         *
         * @access      private
         * @since       2.4
         * @return      string
         */
        function column_status($item)
        {
        }
        /**
         * Period column
         *
         * @access      private
         * @since       2.4
         * @return      string
         */
        function column_period($item)
        {
        }
        /**
         * Initial Amount column
         *
         * @access      private
         * @since       2.4
         * @return      string
         */
        function column_initial_amount($item)
        {
        }
        /**
         * Renewal date column
         *
         * @access      private
         * @since       2.4
         * @return      string
         */
        function column_renewal_date($item)
        {
        }
        /**
         * Payment column
         *
         * @access      private
         * @since       2.4
         * @return      string
         */
        function column_parent_payment_id($item)
        {
        }
        /**
         * Gets the gateway column text.
         *
         * @since 2.11.8
         * @param EDD_Subscription $item
         * @return string
         */
        function column_gateway($item)
        {
        }
        /**
         * Product ID column
         *
         * @access      private
         * @since       2.4
         * @return      string
         */
        function column_product_id($item)
        {
        }
        /**
         * Retrieve the table columns
         *
         * @access      public
         * @since       2.4
         * @return      array
         */
        public function get_columns()
        {
        }
        /**
         * Retrieve the sortable columns.
         *
         * @since 2.13.1
         * @return array Array of all the sortable columns.
         */
        public function get_sortable_columns()
        {
        }
        protected function bulk_actions($which = '')
        {
        }
        /**
         * Setup the final data for the table.
         *
         * @since       2.4
         * @uses        $this->_column_headers
         * @uses        $this->items
         * @uses        $this->get_columns()
         * @uses        $this->get_sortable_columns()
         * @uses        $this->get_pagenum()
         * @uses        $this->set_pagination_args()
         * @return      array
         */
        public function prepare_items()
        {
        }
        /**
         * Gets the data for the table.
         *
         * @since 2.13.0
         * @return array
         */
        public function get_data()
        {
        }
        /**
         * Retrieve the subscription counts.
         *
         * @since 1.4
         * @deprecated 2.13.0 in favor of get_count().
         * @return void
         */
        public function get_subscription_counts()
        {
        }
    }
}
namespace EDD\Recurring\Admin\Upgrades {
    // @codeCoverageIgnore
    /**
     * Class Loader
     *
     * @since 2.13.0
     */
    class Loader implements \EDD\EventManagement\SubscriberInterface
    {
        /**
         * Registers the event listeners.
         *
         * @since 2.13.0
         * @return array
         */
        public static function get_subscribed_events()
        {
        }
        /**
         * Registers the upgrade routines.
         *
         * @since 2.13.0
         * @return void
         */
        public function register_upgrades()
        {
        }
        /**
         * Maybe shows the resume upgrade notice.
         *
         * @since 2.13.0
         * @return void
         */
        public function maybe_show_resume_notice()
        {
        }
        /**
         * Marks the specified page and view as admin.
         *
         * @since 2.13.0
         * @param mixed  $found The value indicating whether the page and view were found.
         * @param string $page The page being checked.
         * @param string $view The view being checked.
         * @param string $passed_page The passed page value.
         * @param string $passed_view The passed view value.
         * @return mixed The updated value indicating whether the page and view are admin.
         */
        public function mark_as_admin($found, $page, $view, $passed_page, $passed_view)
        {
        }
        /**
         * Whether the notice can be displayed.
         *
         * @since 2.13.0
         * @return bool
         */
        protected function can_show_notice()
        {
        }
        /**
         * Registers the hidden upgrades page.
         * If the EDD core upgrades have been updated, this will exit early.
         *
         * @since 2.13.0
         */
        public function register_upgrade_page()
        {
        }
    }
}
namespace EDD\Recurring\Admin\Upgrades\Routines {
    // @codeCoverageIgnore
    /**
     * MissingStripe Class
     *
     * @since 2.13.0
     */
    class MissingStripe extends \EDD_Batch_Export
    {
        /**
         * Our export type. Used for export-type specific filters/actions.
         *
         * @var string
         * @since 2.13.0
         */
        public $export_type = 'recurring_missing_stripe';
        /**
         * Allows for a non-download batch processing to be run.
         *
         * @since  2.13.0
         * @var boolean
         */
        public $is_void = true;
        /**
         * Sets the number of items to pull on each step.
         *
         * @since  2.13.0
         * @var integer
         */
        public $per_step = 50;
        /**
         * Get the Export Data
         *
         * @since 2.13.0
         * @return array $data The data for the CSV file
         */
        public function get_data()
        {
        }
        /**
         * Return the calculated completion percentage
         *
         * @since 2.13.0
         * @return int
         */
        public function get_percentage_complete()
        {
        }
        /**
         * Process a step
         *
         * @since 2.13.0
         * @return bool
         */
        public function process_step()
        {
        }
        /**
         * Set headers for the export
         *
         * @since 2.13.0
         * @return void
         */
        public function headers()
        {
        }
        /**
         * Perform the export.
         *
         * @access public
         * @since 2.13.0
         * @return void
         */
        public function export()
        {
        }
    }
}
namespace EDD\Recurring\Admin\Upgrades {
    // @codeCoverageIgnore
    /**
     * Class Screen
     *
     * @since 2.13.0
     */
    class Screen
    {
        /**
         * Renders the upgrade screen.
         *
         * @since 2.13.0
         * @return void
         */
        public static function render()
        {
        }
    }
}
namespace EDD\Recurring\Admin\Upgrades\Screens {
    // @codeCoverageIgnore
    /**
     * Class Upgrade
     *
     * @since 2.13.0
     */
    abstract class Upgrade
    {
        /**
         * The type of notice to display. This will be used as part of the CSS class.
         *
         * @since 2.13.0
         * @var string
         */
        protected $type = 'warning';
        /**
         * Upgrade constructor.
         */
        public function __construct()
        {
        }
        /**
         * Gets the ID of the upgrade.
         *
         * @since 2.13.0
         * @return string
         */
        protected function get_id(): string {}
        /**
         * Gets the message for the admin notice.
         *
         * @since 2.13.0
         * @return string
         */
        protected function get_admin_message(): string {}
        /**
         * Gets the message for the upgrade notice.
         *
         * @since 2.13.0
         * @return string
         */
        protected function get_update_message(): string {}
        /**
         * Gets the export class.
         *
         * @since 2.13.0
         * @return string
         */
        protected function get_export_class(): string {}
        /**
         * Whether the upgrade is needed.
         *
         * @return boolean
         */
        protected function needs_upgrade(): bool {}
        /**
         * Public function to begin rendering the upgrade form.
         * All this does is verify the nonce and then call the render() method.
         *
         * @since 2.13.0
         * @return void
         */
        final public function validate($nonce)
        {
        }
        /**
         * This is really hacky, but important until EDD core better supports namespaced classes.
         * During the download, `EDD\Admin\Export` gets converted to:
         * `EDD\\\\Admin\\\\Export` . This breaks the `class_exists()`
         * check in EDD core ( @see edd_process_batch_export_download() ). Therefore, we hook in before
         * that runs to strip slashes, which makes everything work again. Dumb, but temporarily necessary.
         *
         * @link https://github.com/awesomemotive/easy-digital-downloads-pro/issues/1150
         * @since 2.13.0
         */
        public function modify_request()
        {
        }
        /**
         * Updates the title of the page.
         *
         * @since 2.13.0
         * @param string $page_title The current page title.
         * @param string $current_page The current page slug.
         * @return string
         */
        public function update_title($page_title, $current_page)
        {
        }
        /**
         * Actually renders the upgrade form.
         *
         * @since 2.13.0
         * @return void
         */
        protected function render()
        {
        }
        /**
         * Check if the upgrade is complete.
         *
         * @since 2.13.0
         * @return bool
         */
        protected function is_complete()
        {
        }
        /**
         * Sets an upgrade as completed.
         *
         * @since 2.13.0
         * @return bool
         */
        protected function mark_complete()
        {
        }
        /**
         * Prints the admin notice for the upgrade.
         *
         * @since 2.13.0
         * @return void
         */
        public function show_notice()
        {
        }
        /**
         * Gets the upgrade slug.
         *
         * @since 2.13.0
         * @return string
         */
        public static function get_upgrade_slug()
        {
        }
        /**
         * Method to determine if the upgrade can run.
         *
         * @since 2.13.0
         * @return bool
         */
        protected function can_upgrade()
        {
        }
        /**
         * Whether the notice can be displayed.
         *
         * @since 2.13.0
         * @return bool
         */
        protected function can_show_notice()
        {
        }
        /**
         * Shows the completed notice.
         *
         * @param string $message Optional. The message to display.
         * @return void
         */
        protected function completed_notice($message = '')
        {
        }
        /**
         * Gets the admin notice button text.
         *
         * @since 2.13.0
         * @return string
         */
        protected function get_admin_notice_button_text(): string
        {
        }
    }
    // @codeCoverageIgnore
    /**
     * Class MissingStripe
     *
     * @since 2.13.0
     */
    class MissingStripe extends \EDD\Recurring\Admin\Upgrades\Screens\Upgrade
    {
        /**
         * Gets the ID of the upgrade.
         *
         * @since 2.13.0
         * @return string
         */
        protected function get_id(): string
        {
        }
        /**
         * Gets the message for the admin notice.
         *
         * @since 2.13.0
         * @return string
         */
        protected function get_admin_message(): string
        {
        }
        /**
         * Gets the message for the upgrade notice.
         *
         * @since 2.13.0
         * @return string
         */
        protected function get_update_message(): string
        {
        }
        /**
         * Gets the export class.
         *
         * @since 2.13.0
         * @return string
         */
        protected function get_export_class(): string
        {
        }
        /**
         * Whether the upgrade is needed.
         *
         * @return boolean
         */
        protected function needs_upgrade(): bool
        {
        }
        /**
         * Gets the admin notice button text.
         *
         * @since 2.13.0
         * @return string
         */
        protected function get_admin_notice_button_text(): string
        {
        }
    }
}
namespace EDD\Recurring\Blocks {
    /**
     * Class Loader
     *
     * @since 2.13.0
     */
    class Loader implements \EDD\EventManagement\SubscriberInterface
    {
        /**
         * Registers the event listeners.
         *
         * @since 2.13.0
         * @return array
         */
        public static function get_subscribed_events()
        {
        }
        /**
         * Registers the Recurring blocks.
         *
         * @since 2.13.0
         * @return void
         */
        public function register()
        {
        }
        /**
         * Renders the subscriptions block.
         *
         * @since 2.13.0
         * @param array $attributes The attributes for the block.
         * @return string
         */
        public function subscriptions($attributes)
        {
        }
        /**
         * Renders the subscription details block.
         *
         * @since 2.13.0
         * @param array $attributes The attributes for the block.
         * @return string
         */
        public function subscription_details($attributes)
        {
        }
        /**
         * Adds a custom variable to the JS to allow a user in the block editor
         * to preview sensitive data.
         *
         * @since 2.13.0
         * @return void
         */
        public function localize()
        {
        }
        /**
         * Adds the subscription block to the EDD blocks array.
         *
         * @since 2.13.0
         * @param array $blocks The array of EDD blocks.
         * @return array
         */
        public function add_to_edd_blocks($blocks)
        {
        }
        /**
         * Adds the styles for the subscription blocks.
         *
         * @since 2.13.0
         * @param string $path The path to the block style.
         * @param string $block_name The name of the block.
         * @return string
         */
        public function add_styles($path, $block_name)
        {
        }
        /**
         * Adds a confirmation to the cancel button.
         *
         * @since 2.13.0
         * @return void
         */
        public function add_cancel_confirmation()
        {
        }
    }
}
namespace EDD\Recurring\CLI {
    // @codeCoverageIgnore
    /**
     * Class Stripe
     */
    class Stripe extends \WP_CLI_Command
    {
        /**
         * Find missing subscriptions.
         *
         * ## OPTIONS
         * [--limit=<limit>]   The number of results to return. Default is 500.
         * [--offset=<offset>] The number of results to skip. Default is 0.
         * [--fix]             Whether to fix the missing subscriptions.
         * [--order=<order>]   The order ID to fix. This will override any other options.
         *
         * @since 2.13.0
         */
        public function missing($args, $assoc_args)
        {
        }
    }
}
namespace EDD\Recurring\Cart {
    class Discounts
    {
        /**
         * Discounts constructor.
         */
        public function __construct()
        {
        }
        /**
         * Filters the EDD discount response when a discount is added to or removed from the cart.
         *
         * @since 2.11.9
         * @param array $data
         * @return array
         */
        public function update_discount_response($data)
        {
        }
    }
    /**
     * Subscription class.
     *
     * @since 2.11.9
     * @package EDD_Recurring
     */
    class Subscription
    {
        /**
         * Subscription constructor.
         *
         * @param array $cart_details The cart details.
         */
        public function __construct($cart_details = array())
        {
        }
        /**
         * Gets the subscription details.
         *
         * @since 2.11.9
         * @param array $item The cart item.
         * @param int   $key  The cart item index.
         * @return array|false
         */
        public function get($item, $key)
        {
        }
        /**
         * Gets the recurring amounts for the subscription.
         *
         * @param array $item The cart item.
         * @param int   $key  The cart item index (if known).
         * @return array An array containing the recurring amount (total charged) and tax for renewal orders.
         */
        public function get_recurring_amount($item, $key = false)
        {
        }
        /**
         * Calculates the recurring amounts for an item.
         *
         * @param array $item The cart item.
         * @return array
         */
        public function calculate_recurring_amounts($item)
        {
        }
    }
}
namespace EDD\Recurring {
    /**
     * Core class.
     */
    class Core extends \EDD\EventManagement\Subscribers
    {
        /**
         * Get the service providers.
         *
         * @since 2.13.0
         * @return array
         */
        protected function get_service_providers()
        {
        }
        /**
         * Get the admin providers.
         *
         * @since 2.13.0
         * @return array
         */
        protected function get_admin_providers()
        {
        }
    }
}
namespace EDD\Recurring\Cron {
    // @codeCoverageIgnore
    /**
     * The Recurring Reminders Class.
     *
     * @since  2.4
     */
    class Handler implements \EDD\EventManagement\SubscriberInterface
    {
        /**
         * @var EDD_Subscriptions_DB
         */
        protected $db;
        /**
         * Get the subscribers.
         *
         * @since 2.13.0
         * @return array
         */
        public static function get_subscribed_events()
        {
        }
        /**
         * Get the instance of this class.
         *
         * @since 2.13.0
         * @return \EDD\Recurring\Cron\Handler
         */
        public static function get_instance()
        {
        }
        /**
         * Set up our actions and properties.
         *
         * @since  2.4
         */
        public function init()
        {
        }
        /**
         * Check for expired subscriptions once per day and mark them as expired.
         *
         * @since  2.4
         */
        public function check_for_expired_subscriptions()
        {
        }
        /**
         * Deletes pending subscription records.
         *
         * @since 2.5
         * @return void
         */
        public function check_for_abandoned_subscriptions()
        {
        }
        /**
         * Cancel a subscription.
         *
         * @since 2.13.0
         * @param int    $subscription_id The subscription ID.
         * @param string $reason          The reason for the cancellation.
         * @return void
         */
        public function cancel($subscription_id, $reason = '')
        {
        }
        /**
         * Check for any missed cancellation events and run them.
         *
         * @since 2.13.0
         * @return void
         */
        public function check_for_missed_cancellations()
        {
        }
    }
}
namespace EDD\Recurring\Database {
    /**
     * Database Components.
     *
     * @since 2.13.0
     */
    class Components implements \EDD\EventManagement\SubscriberInterface
    {
        /**
         * Returns an array of events that this subscriber wants to listen to.
         *
         * @since 2.13.0
         * @return array
         */
        public static function get_subscribed_events()
        {
        }
        /**
         * Install the database components.
         *
         * @since 2.13.0
         */
        public function install()
        {
        }
    }
}
namespace EDD\Recurring\Database\Queries {
    /**
     * Class used for querying items.
     *
     * @since 2.13.0
     * @see \EDD\Database\Queries\Query::__construct() for accepted arguments.
     */
    class Subscription extends \EDD\Database\Query
    {
        /** Table Properties ******************************************************/
        /**
         * Name of the database table to query.
         *
         * @since 2.13.0
         * @access public
         * @var string
         */
        protected $table_name = 'subscriptions';
        /**
         * String used to alias the database table in MySQL statement.
         *
         * @since 2.13.0
         * @access public
         * @var string
         */
        protected $table_alias = 'subs';
        /**
         * Name of class used to setup the database schema
         *
         * @since 2.13.0
         * @access public
         * @var string
         */
        protected $table_schema = '\EDD\Recurring\Database\Schemas\Subscriptions';
        /** Item ******************************************************************/
        /**
         * Name for a single item
         *
         * @since 2.13.0
         * @access public
         * @var string
         */
        protected $item_name = 'subscription';
        /**
         * Plural version for a group of items.
         *
         * @since 2.13.0
         * @access public
         * @var string
         */
        protected $item_name_plural = 'subscriptions';
        /**
         * Callback function for turning IDs into objects
         *
         * @since 2.13.0
         * @access public
         * @var mixed
         */
        protected $item_shape = '\EDD\Recurring\Subscriptions\Subscription';
        /** Cache *****************************************************************/
        /**
         * Group to cache queries and queried items in.
         *
         * @since 2.13.0
         * @access public
         * @var string
         */
        protected $cache_group = 'edd_subscriptions';
    }
}
namespace EDD\Recurring\Database\Schemas {
    /**
     * Subscriptions Schema Class.
     *
     * @since 2.13.0
     */
    class Subscriptions extends \EDD\Database\Schema
    {
        /**
         * Array of database column objects
         *
         * @since 2.13.0
         * @access public
         * @var array
         */
        public $columns = array(array('name' => 'id', 'type' => 'bigint', 'length' => 20, 'unsigned' => true, 'extra' => 'auto_increment', 'primary' => true, 'sortable' => true), array('name' => 'customer_id', 'type' => 'bigint', 'length' => 20, 'unsigned' => true, 'default' => 0, 'cache_key' => true), array('name' => 'period', 'type' => 'varchar', 'length' => 20, 'searchable' => true, 'sortable' => true), array('name' => 'initial_amount', 'type' => 'mediumtext'), array('name' => 'initial_tax_rate', 'type' => 'mediumtext', 'default' => 0), array('name' => 'initial_tax', 'type' => 'mediumtext', 'default' => 0), array('name' => 'recurring_amount', 'type' => 'mediumtext'), array('name' => 'recurring_tax_rate', 'type' => 'mediumtext', 'default' => 0), array('name' => 'recurring_tax', 'type' => 'mediumtext', 'default' => 0), array('name' => 'bill_times', 'type' => 'bigint', 'length' => 20, 'allow_null' => false, 'default' => 0), array('name' => 'transaction_id', 'type' => 'varchar', 'length' => 255, 'allow_null' => false), array('name' => 'parent_payment_id', 'type' => 'bigint', 'length' => 20, 'allow_null' => false), array('name' => 'product_id', 'type' => 'bigint', 'length' => 20, 'allow_null' => false), array('name' => 'price_id', 'type' => 'bigint', 'length' => 20, 'default' => null, 'allow_null' => true), array(
            'name' => 'created',
            'type' => 'datetime',
            'default' => '',
            // Defaults to current time in query class.
            'created' => true,
            'date_query' => true,
            'sortable' => true,
        ), array(
            'name' => 'expiration',
            'type' => 'datetime',
            'default' => '',
            // Defaults to current time in query class.
            'date_query' => true,
            'sortable' => true,
        ), array('name' => 'trial_period', 'type' => 'varchar', 'length' => 20), array('name' => 'status', 'type' => 'varchar', 'length' => 20, 'searchable' => true, 'sortable' => true), array('name' => 'profile_id', 'type' => 'varchar', 'length' => 255, 'searchable' => true, 'sortable' => true), array('name' => 'gateway', 'type' => 'varchar', 'length' => 100, 'default' => '', 'allow_null' => false), array('name' => 'date_modified', 'type' => 'datetime', 'default' => '', 'modified' => true));
    }
}
namespace EDD\Recurring\Database\Tables {
    /**
     * Setup the global "subscriptionmeta" database table.
     *
     * @since 2.13.0
     */
    final class SubscriptionMeta extends \EDD\Database\Table
    {
    }
    /**
     * Setup the global "edd_subscriptions" database table.
     *
     * @since 2.13.0
     */
    final class Subscriptions extends \EDD\Database\Table
    {
    }
}
namespace EDD\Recurring\Downloads {
    // @codeCoverageIgnore
    /**
     * The Product Class.
     *
     * @since 2.13.0
     */
    class Product extends \EDD_Download
    {
        /**
         * Whether or not the product is recurring.
         *
         * @since 2.13.0
         * @param int|null $price_id Optional. The price ID to check.
         * @return bool
         */
        public function is_recurring($price_id = null)
        {
        }
        /**
         * Get the period for a price or the product.
         *
         * @since 2.13.0
         * @param int|null $price_id Optional. The price ID to check.
         * @return string
         */
        public function get_period($price_id = null)
        {
        }
        /**
         * Get the times a product is billed.
         *
         * @since 2.13.0
         * @param int|null $price_id Optional. The price ID to check.
         * @return int
         */
        public function get_times($price_id = null)
        {
        }
        /**
         * Whether or not the product has a free trial.
         *
         * @since 2.13.0
         * @param int|null $price_id Optional. The price ID to check.
         * @return bool
         */
        public function has_free_trial($price_id = null)
        {
        }
        /**
         * Get the signup fee for a price or the product.
         *
         * @since 2.13.0
         * @param int|null $price_id Optional. The price ID to check.
         * @return float
         */
        public function get_signup_fee($price_id = null)
        {
        }
        /**
         * Get the trial period for a price or the product.
         *
         * @since 2.13.0
         * @param int|null $price_id Optional. The price ID to check.
         * @return array|bool
         */
        public function get_trial_period($price_id = null)
        {
        }
    }
}
namespace EDD\Recurring\Emails {
    class Handler
    {
        /**
         * Handler constructor.
         *
         * @since 2.12.4
         */
        public function __construct()
        {
        }
        /**
         * Handles the renewal order received event.
         *
         * @since 2.12.4
         * @param int $subscription_id
         * @param int $expiration
         * @param EDD_Subscription $subscription
         * @param int $order_id
         */
        public function send_payment_received($subscription_id, $expiration, \EDD_Subscription $subscription, $order_id = 0)
        {
        }
        /**
         * Handles the renewal order failed event.
         *
         * @since 2.12.4
         * @param EDD_Subscription $subscription
         */
        public function send_payment_failed(\EDD_Subscription $subscription)
        {
        }
        /**
         * Handles the subscription cancelled event.
         *
         * @since 2.12.4
         * @param int $subscription_id
         * @param EDD_Subscription $subscription
         */
        public function send_subscription_cancelled($subscription_id, \EDD_Subscription $subscription)
        {
        }
        /**
         * Legacy method to send a reminder email.
         *
         * @param int $subscription_id
         * @param int $notice_id
         * @return void
         */
        public function send_reminder($subscription_id, $notice_id)
        {
        }
    }
    /**
     * Class Registry
     *
     * @since 2.12.4
     * @package EDD\Recurring\Admin\Emails
     */
    class Registry
    {
        /**
         * Registry constructor.
         *
         * @since 2.12.4
         */
        public function __construct()
        {
        }
        /**
         * Registers the email templates.
         *
         * @since 2.12.4
         * @param array $emails
         * @return array
         */
        public function register_email_templates($emails)
        {
        }
        /**
         * Registers the email types.
         *
         * @since 2.12.4
         * @param array $types
         * @return array
         */
        public function register_email_types($types)
        {
        }
        /**
         * Registers the email senders.
         *
         * @since 2.12.4
         * @param array $senders
         * @return array
         */
        public function register_email_senders($senders)
        {
        }
        /**
         * Registers the email contexts.
         *
         * @since 2.12.4
         * @param array $contexts
         * @return array
         */
        public function register_email_contexts($contexts)
        {
        }
        /**
         * Gets the action to add a new email.
         *
         * @since 2.12.4
         * @param array $actions The array of "add new" actions.
         */
        public function get_add_action($actions)
        {
        }
        /**
         * Adds the email period field.
         *
         * @since 2.12.4
         * @param \EDD\Emails\Email $email
         */
        public function add_email_period($email)
        {
        }
        /**
         * Saves the email ID. This only runs if the emails are registered with Berlin.
         * This generates a unique ID for the new email.
         *
         * @since 2.12.4
         * @param string                    $email_id
         * @param \EDD\Emails\EmailTemplate $email_template
         * @param array                     $data
         * @return string|null
         */
        public function save_id($email_id, $email_template, $data)
        {
        }
        /**
         * Updates the email meta when emails are registered with Berlin.
         *
         * @since 2.12.4
         * @param int|string $id
         * @param array      $data
         */
        public function update_email_meta($id, $data = array())
        {
        }
        /**
         * Modifies the object ID in the logs table.
         *
         * @since 2.12.4
         * @param int                  $object_id
         * @param \EDD\Emails\LogEmail $item
         * @return string
         */
        public function logs_table_object($object_id, $item)
        {
        }
        /**
         * Adds the subscription context to some user email tags.
         *
         * @since 2.12.4
         * @param array $tags An array of email tags.
         */
        public function register_email_tags($tags)
        {
        }
    }
}
namespace EDD\Recurring\Emails\Traits {
    trait Subscriptions
    {
        /**
         * Retrieve reminder notice periods.
         *
         * @since 2.4
         * @return array Subscribers whose subscriptions are renewing or expiring within the defined period.
         */
        public function get_reminder_subscriptions($period = '+1month', $type = false)
        {
        }
    }
}
namespace EDD\Recurring\Emails {
    /**
     * The Recurring Reminders Class
     *
     * @since  2.4
     * @since 2.12.4 Moved from EDD_Recurring_Reminders
     */
    class Reminders
    {
        use \EDD\Recurring\Emails\Traits\Subscriptions;
        /**
         * The class constructor.
         */
        public function __construct()
        {
        }
        /**
         * Get the singleton instance of our class.
         *
         * @since  2.4
         * @return Reminders
         */
        public static function get_instance()
        {
        }
        /**
         * Returns if renewals are enabled.
         *
         * @return array Array of defined reminders.
         */
        public function reminders_enabled()
        {
        }
        /**
         * Retrieve reminder notices periods.
         *
         * @since 2.4
         * @return array reminder notice periods
         */
        public function get_notice_periods()
        {
        }
        /**
         * Retrieve the reminder label for a notice.
         *
         * @since 2.4
         * @return string
         */
        public function get_notice_period_label($notice_id = 0)
        {
        }
        /**
         * Retrieve reminder notices types.
         *
         * @since 2.4
         * @return array reminder notice types
         */
        public function get_notice_types()
        {
        }
        /**
         * Retrieve the reminder type label for a notice.
         *
         * @since 2.4
         * @return String
         */
        public function get_notice_type_label($notice_id = 0)
        {
        }
        /**
         * Retrieve a reminder notice.
         *
         * @since 2.4
         * @return array Reminder notice details
         */
        public function get_notice($notice_id = 0)
        {
        }
        /**
         * Retrieve reminder notice periods.
         *
         * @since 2.4
         * @param string $type         The type of reminder to retrieve.
         * @return array Reminder notices defined in settings
         */
        public function get_notices($type = 'all')
        {
        }
        /**
         * Send reminder emails.
         *
         * @since 2.4
         * @return void
         */
        public function scheduled_reminders()
        {
        }
        /**
         * Sends a reminder email.
         *
         * @since 2.12.4
         * @param \EDD_Subscription $subscription The subscription object.
         * @param \EDD\Emails\Email $notice       The email object.
         * @return bool
         */
        public function send($subscription, $notice)
        {
        }
        /**
         * Filter fields for test email for a reminder.
         *
         * @since 2.4
         * @return string
         */
        public function filter_test_notice($text = null)
        {
        }
        /**
         * Setup and send test email for a reminder.
         *
         * @since 2.4
         * @deprecated 2.12.4
         * @return void
         */
        public function send_test_notice($notice_id = 0)
        {
        }
    }
}
namespace EDD\Recurring\Emails\Templates {
    /**
     * Class Notices
     *
     * @since 2.12.4
     * @package EDD\Recurring\Templates\Emails
     */
    class Notices extends \EDD\Emails\Templates\EmailTemplate
    {
        /**
         * The reminders object.
         *
         * @since 2.12.4
         * @var \EDD_Recurring_Reminders
         */
        protected $reminders;
        /**
         * The array key for the reminder.
         *
         * @since 2.12.4
         * @var int
         */
        protected $key;
        /**
         * Whether this email can be previewed.
         *
         * @since 2.12.4
         * @var bool
         */
        protected $can_preview = true;
        /**
         * Whether this email can be tested.
         *
         * @since 2.12.4
         * @var bool
         */
        protected $can_test = true;
        /**
         * The email recipient.
         *
         * @since 2.12.4
         * @var string
         */
        protected $recipient = 'customer';
        /**
         * The email context.
         *
         * @since 2.12.4
         * @var string
         */
        protected $context = 'subscription';
        /**
         * Retrieves the email sender.
         *
         * @since 2.12.4
         * @var string
         */
        protected $sender = 'recurring';
        /**
         * The email metadata.
         *
         * @since 2.12.4
         * @var string
         */
        protected $meta = array('type' => '', 'period' => null);
        /**
         * Notices constructor.
         *
         * @param int|string $key
         */
        public function __construct($key = 0, $email = null)
        {
        }
        /**
         * Name of the template.
         *
         * @since 2.12.4
         * @return string
         */
        public function get_name()
        {
        }
        /**
         * Description of the email.
         *
         * @since 2.12.4
         * @return string
         */
        public function get_description()
        {
        }
        /**
         * Gets a custom label for the email context.
         *
         * @return string
         */
        public function get_context_label(): string
        {
        }
        /**
         * Gets the email defaults.
         *
         * @since 2.12.4
         * @return array
         */
        public function defaults(): array
        {
        }
        /**
         * The email properties that can be edited.
         *
         * @return array
         */
        protected function get_editable_properties(): array
        {
        }
        /**
         * Gets the row actions for the email.
         *
         * @since 2.12.4
         * @return array
         */
        public function get_row_actions()
        {
        }
        /**
         * Gets the email preview data.
         *
         * @since 2.12.4
         * @return array
         */
        protected function get_preview_data()
        {
        }
        /* Legacy */
        /**
         * Whether the email has legacy data.
         *
         * @since 2.12.4
         * @var bool
         */
        public function has_legacy_data(): bool
        {
        }
        /**
         * Removes the legacy data.
         *
         * @since 2.12.4
         * @return void
         */
        public function remove_legacy_data()
        {
        }
        /**
         * Gets the option names for this email.
         *
         * @since 2.12.4
         * @return array
         */
        protected function get_options(): array
        {
        }
        /**
         * Gets a legacy option.
         *
         * @since 2.12.4
         * @param string $key The email template key.
         * @return mixed
         */
        protected function get_legacy($key)
        {
        }
    }
    /**
     * Class PaymentReceived
     *
     * @since 2.12.4
     * @package EDD\Recurring\Templates\Emails
     */
    class PaymentReceived extends \EDD\Emails\Templates\EmailTemplate
    {
        /**
         * Whether this email can be previewed.
         *
         * @since 2.12.4
         * @var bool
         */
        protected $can_preview = true;
        /**
         * Whether this email can be tested.
         *
         * @since 2.12.4
         * @var bool
         */
        protected $can_test = true;
        /**
         * Unique identifier for this template.
         *
         * @since 2.12.4
         * @var string
         */
        protected $email_id = 'renewal_payment_received';
        /**
         * The email recipient.
         *
         * @since 2.12.4
         * @var string
         */
        protected $recipient = 'customer';
        /**
         * The email context.
         *
         * @since 2.12.4
         * @var string
         */
        protected $context = 'order';
        /**
         * Retrieves the email sender.
         *
         * @since 2.12.4
         * @var string
         */
        protected $sender = 'recurring';
        /**
         * Name of the template.
         *
         * @since 2.12.4
         * @return string
         */
        public function get_name()
        {
        }
        /**
         * Description of the email.
         *
         * @since 2.12.4
         * @return string
         */
        public function get_description()
        {
        }
        /**
         * Gets the email context label.
         * The context for this email is actually a subscription, but the
         * triggering event is an order, so we will show that instead.
         *
         * @since 2.12.4
         * @return string
         */
        public function get_context_label(): string
        {
        }
        /**
         * Gets the email defaults.
         *
         * @since 2.12.4
         * @return string
         */
        public function defaults(): array
        {
        }
        /**
         * Gets a legacy option.
         *
         * @since 2.12.4
         * @param string $key The email template key.
         * @return mixed
         */
        protected function get_legacy($key)
        {
        }
        /**
         * Gets the preview data for this email.
         *
         * @since 2.12.4
         * @return array
         */
        protected function get_preview_data()
        {
        }
        /**
         * Gets the editable properties for this email.
         *
         * @since 2.12.4
         * @return array
         */
        protected function get_editable_properties(): array
        {
        }
        /* Legacy */
        /**
         * Gets the option names for this email.
         *
         * @since 2.12.4
         * @return array
         */
        protected function get_options(): array
        {
        }
    }
    /**
     * Class PaymentFailed
     *
     * @since 2.12.4
     * @package EDD\Recurring\Templates\Emails
     */
    class PaymentFailed extends \EDD\Recurring\Emails\Templates\PaymentReceived
    {
        /**
         * The email context.
         *
         * @since 2.12.5
         * @var string
         */
        protected $context = 'subscription';
        /**
         * Unique identifier for this template.
         *
         * @since 2.12.4
         * @return string
         */
        protected $email_id = 'renewal_payment_failed';
        /**
         * Name of the template.
         *
         * @since 2.12.4
         * @return string
         */
        public function get_name()
        {
        }
        /**
         * Description of the email.
         *
         * @since 2.12.4
         * @return string
         */
        public function get_description()
        {
        }
        /**
         * Gets the email context label.
         * The context for this email is actually a subscription, but the
         * triggering event is an order, so we will show that instead.
         *
         * @since 2.12.4
         * @return string
         */
        public function get_context_label(): string
        {
        }
        /**
         * Gets the email defaults.
         *
         * @since 2.12.4
         * @return string
         */
        public function defaults(): array
        {
        }
        /**
         * Gets the email object.
         *
         * @since 2.12.5
         * @return \EDD\Emails\Email
         */
        public function get_email()
        {
        }
        /**
         * Gets the preview data for this email.
         *
         * @since 2.12.5
         * @return array
         */
        protected function get_preview_data()
        {
        }
        /* Legacy */
        /**
         * Gets the option names for this email.
         *
         * @since 2.12.4
         * @return array
         */
        protected function get_options(): array
        {
        }
    }
    // @codeCoverageIgnore
    /**
     * Class PaymentReceivedAdmin
     *
     * @since 2.12.5
     * @package EDD\Recurring\Templates\Emails
     */
    class PaymentReceivedAdmin extends \EDD\Recurring\Emails\Templates\PaymentReceived
    {
        /**
         * Whether this email can be previewed.
         *
         * @since 2.12.5
         * @var bool
         */
        protected $can_preview = true;
        /**
         * Whether this email can be tested.
         *
         * @since 2.12.5
         * @var bool
         */
        protected $can_test = true;
        /**
         * Unique identifier for this template.
         *
         * @since 2.12.5
         * @var string
         */
        protected $email_id = 'renewal_payment_received_admin';
        /**
         * The email recipient.
         *
         * @since 2.12.5
         * @var string
         */
        protected $recipient = 'admin';
        /**
         * The email meta.
         *
         * @since 2.12.4
         * @var array
         */
        protected $meta = array('recipients' => '');
        /**
         * Name of the template.
         *
         * @since 2.12.5
         * @return string
         */
        public function get_name()
        {
        }
        /**
         * Description of the email.
         *
         * @since 2.12.5
         * @return string
         */
        public function get_description()
        {
        }
        /**
         * Gets the email defaults.
         *
         * @since 2.12.5
         * @return string
         */
        public function defaults(): array
        {
        }
        /**
         * Gets the editable properties for this email.
         *
         * @since 2.12.5
         * @return array
         */
        protected function get_editable_properties(): array
        {
        }
        /* Legacy */
        /**
         * Gets the option names for this email.
         *
         * @since 2.12.5
         * @return array
         */
        protected function get_options(): array
        {
        }
    }
    class PreviewData
    {
        use \EDD\Emails\Templates\Traits\Previews;
        /**
         * Gets a subscription and data.
         *
         * @since 2.12.4
         * @return array|bool
         */
        public static function get_subscription_data()
        {
        }
        /**
         * Gets the email preview data.
         *
         * @since 2.12.4
         * @return array
         */
        public static function get_notice_data()
        {
        }
        /**
         * Gets a random subscription from the database.
         *
         * @since 2.12.4
         * @return false|\EDD_Subscription
         */
        public static function get_subscription()
        {
        }
    }
    /**
     * Class SubscriptionCancelled
     *
     * @since 2.12.4
     * @package EDD\Recurring\Templates\Emails
     */
    class SubscriptionCancelled extends \EDD\Emails\Templates\EmailTemplate
    {
        /**
         * Unique identifier for this template.
         *
         * @since 2.12.4
         * @var string
         */
        protected $email_id = 'subscription_cancelled';
        /**
         * The email recipient.
         *
         * @since 2.12.4
         * @var string
         */
        protected $recipient = 'customer';
        /**
         * The email context.
         *
         * @since 2.12.4
         * @var string
         */
        protected $context = 'subscription';
        /**
         * Retrieves the email sender.
         *
         * @since 2.12.4
         * @var string
         */
        protected $sender = 'recurring';
        /**
         * Whether the email can be previewed.
         *
         * @since 2.12.4
         * @var bool
         */
        protected $can_preview = true;
        /**
         * Whether the email can be tested.
         *
         * @since 2.12.4
         * @var bool
         */
        protected $can_test = true;
        /**
         * Name of the template.
         *
         * @since 2.12.4
         * @return string
         */
        public function get_name()
        {
        }
        /**
         * Description of the email.
         *
         * @since 2.12.4
         * @return string
         */
        public function get_description()
        {
        }
        /**
         * Get the default email properties.
         *
         * @since 2.12.4
         * @return array
         */
        public function defaults(): array
        {
        }
        /**
         * Gets a legacy option.
         *
         * @since 2.12.4
         * @param string $key The email template key.
         * @return mixed
         */
        protected function get_legacy($key)
        {
        }
        /**
         * Get the email properties that can be edited.
         *
         * @since 2.12.4
         * @return array
         */
        protected function get_editable_properties(): array
        {
        }
        /**
         * Get the preview data.
         *
         * @since 2.12.4
         * @return array|bool
         */
        protected function get_preview_data()
        {
        }
        /* Legacy */
        /**
         * Gets the option names for this email.
         *
         * @since 2.12.4
         * @return array
         */
        protected function get_options(): array
        {
        }
    }
    /**
     * Class SubscriptionCancelledAdmin
     *
     * @since 2.12.4
     * @package EDD\Recurring\Templates\Emails
     */
    class SubscriptionCancelledAdmin extends \EDD\Recurring\Emails\Templates\SubscriptionCancelled
    {
        /**
         * Unique identifier for this template.
         *
         * @since 2.12.4
         * @var string
         */
        protected $email_id = 'subscription_cancelled_admin';
        /**
         * The email recipient.
         *
         * @since 2.12.4
         * @var string
         */
        protected $recipient = 'admin';
        /**
         * The email meta.
         *
         * @since 2.12.4
         * @var array
         */
        protected $meta = array('recipients' => 'admin');
        /**
         * Description of the email.
         *
         * @since 2.12.4
         * @return string
         */
        public function get_description()
        {
        }
        /**
         * Get the default email properties.
         *
         * @since 2.12.4
         * @return array
         */
        public function defaults(): array
        {
        }
        /*Legacy */
        /**
         * Gets the option names for this email.
         *
         * @since 2.12.4
         * @return array
         */
        protected function get_options(): array
        {
        }
    }
}
namespace EDD\Recurring\Emails\Types {
    /**
     * Class Notices
     *
     * @since 2.12.4
     * @package EDD\Recurring\Emails\Types
     */
    class Notices extends \EDD\Emails\Types\Email
    {
        /**
         * The email context.
         *
         * @since 2.12.4
         * @var string
         */
        protected $context = 'subscription';
        /**
         * The email recipient type.
         *
         * @since 2.12.4
         * @var string
         */
        protected $recipient_type = 'customer';
        /**
         * The reminders object.
         *
         * @since 2.12.4
         * @var \EDD_Recurring_Reminders
         */
        protected $reminders;
        /**
         * The array key for the reminder.
         *
         * @since 2.12.4
         * @var int
         */
        protected $key;
        /**
         * Notices constructor.
         *
         * @param int               $subscription_id
         * @param \EDD_Subscription $subscription
         * @param \EDD\Emails\Email $notice
         */
        public function __construct($subscription_id, $subscription, $notice)
        {
        }
        /**
         * Set the email subject.
         *
         * @since 2.12.5
         * @return void
         */
        protected function set_subject()
        {
        }
        /**
         * Set the email subject.
         *
         * @since 2.12.4
         *
         * @return void
         */
        protected function set_message()
        {
        }
        /**
         * Set the email to email.
         *
         * @since 2.12.4
         * @return void
         */
        protected function set_to_email()
        {
        }
        /**
         * Whether the email should send.
         *
         * @return bool
         */
        protected function should_send()
        {
        }
    }
    /**
     * Class PaymentReceived
     *
     * @since 2.12.4
     * @package EDD
     * @subpackage Emails
     */
    class PaymentReceived extends \EDD\Emails\Types\Email
    {
        /**
         * The email ID.
         *
         * @var string
         * @since 2.12.4
         */
        protected $id = 'renewal_payment_received';
        /**
         * The email context.
         *
         * @var string
         * @since 2.12.4
         */
        protected $context = 'order';
        /**
         * The email recipient type.
         *
         * @var string
         * @since 2.12.4
         */
        protected $recipient_type = 'customer';
        /**
         * The subscription ID.
         *
         * @since 2.12.4
         * @var int
         */
        protected $subscription_id;
        /**
         * The subscription object.
         *
         * @since 2.12.4
         * @var \EDD_Subscription
         */
        protected $subscription;
        /**
         * The order ID.
         *
         * @since 2.12.4
         * @var int
         */
        protected $order_id;
        /**
         * The order object.
         *
         * @since 2.12.4
         * @var \EDD\Orders\Order
         */
        protected $order;
        /**
         * PaymentReceived constructor.
         *
         * @since 2.12.4
         *
         * @param int              $subscription_id The subscription ID.
         * @param string           $expiration      The expiration date.
         * @param \EDD_Subscription $subscription    The subscription object.
         * @param int              $order_id        The order ID.
         */
        public function __construct($subscription_id, $order_id = null)
        {
        }
        /**
         * Set the email to address.
         *
         * @since 2.12.4
         *
         * @return void
         */
        protected function set_to_email()
        {
        }
        /**
         * Set the email subject.
         *
         * @since 2.12.4
         *
         * @return void
         */
        protected function set_subject()
        {
        }
        /**
         * Set the email message.
         *
         * @since 2.12.4
         *
         * @return void
         */
        protected function set_message()
        {
        }
        /**
         * Gets the legacy filters.
         *
         * @since 2.12.4
         * @return array
         */
        protected function get_legacy_filters()
        {
        }
        /**
         * Applies tags to the given property and content.
         *
         * @since 2.12.5
         *
         * @param string $property The property to apply tags to.
         * @param string $content The content to apply tags to.
         * @return void
         */
        protected function do_tags($property, $content)
        {
        }
    }
    /**
     * Class PaymentFailed
     * This class extends the PaymentReceived class, because the only
     * difference between the two emails is the ID.
     *
     * @since 2.12.4
     * @package EDD
     * @subpackage Emails
     */
    class PaymentFailed extends \EDD\Recurring\Emails\Types\PaymentReceived
    {
        /**
         * The email ID.
         *
         * @var string
         * @since 2.12.4
         */
        protected $id = 'renewal_payment_failed';
        /**
         * The email context.
         *
         * @var string
         * @since 2.12.5
         */
        protected $context = 'subscription';
        /**
         * PaymentFailed constructor.
         *
         * @since 2.12.5
         *
         * @param int  $subscription_id The subscription ID.
         * @param null $order_id        The order ID. For failed renewals, there will be no order ID.
         */
        public function __construct($subscription_id, $order_id = null)
        {
        }
        /**
         * Gets the legacy filters.
         *
         * @since 2.12.4
         * @return array
         */
        protected function get_legacy_filters()
        {
        }
    }
    // @codeCoverageIgnore
    /**
     * Class PaymentReceived
     *
     * @since 2.12.5
     * @package EDD
     * @subpackage Emails
     */
    class PaymentReceivedAdmin extends \EDD\Recurring\Emails\Types\PaymentReceived
    {
        /**
         * The email ID.
         *
         * @var string
         * @since 2.12.5
         */
        protected $id = 'renewal_payment_received_admin';
        /**
         * The email recipient type.
         *
         * @var string
         * @since 2.12.5
         */
        protected $recipient_type = 'admin';
        /**
         * Set the email to address.
         *
         * @since 2.12.5
         *
         * @return void
         */
        protected function set_to_email()
        {
        }
        /**
         * Gets the legacy filters.
         *
         * @since 2.12.5
         * @return array
         */
        protected function get_legacy_filters()
        {
        }
    }
    /**
     * Class SubscriptionCancelled
     *
     * @since 2.12.4
     * @package EDD
     * @subpackage Emails
     */
    class SubscriptionCancelled extends \EDD\Emails\Types\Email
    {
        /**
         * The email ID.
         *
         * @var string
         * @since 2.12.4
         */
        protected $id = 'subscription_cancelled';
        /**
         * The email context.
         *
         * @var string
         * @since 2.12.4
         */
        protected $context = 'subscription';
        /**
         * The email recipient type.
         *
         * @var string
         * @since 2.12.4
         */
        protected $recipient_type = 'customer';
        /**
         * The subscription ID.
         *
         * @since 2.12.4
         * @var int
         */
        protected $subscription_id;
        /**
         * The subscription object.
         *
         * @since 2.12.4
         * @var \EDD_Subscription
         */
        protected $subscription;
        /**
         * SubscriptionCancelled constructor.
         *
         * @since 2.12.4
         *
         * @param int                                       $subscription_id The subscription ID.
         * @param \EDD\Recurring\Subscriptions\Subscription $subscription    The subscription object.
         */
        public function __construct($subscription_id, $subscription = null)
        {
        }
        /**
         * Set the email to address.
         *
         * @since 2.12.4
         *
         * @return void
         */
        protected function set_to_email()
        {
        }
        /**
         * Set the email subject.
         *
         * @since 2.12.4
         *
         * @return void
         */
        protected function set_subject()
        {
        }
        /**
         * Set the email subject.
         *
         * @since 2.12.4
         *
         * @return void
         */
        protected function set_message()
        {
        }
        /**
         * Gets the legacy filters.
         *
         * @since 2.12.4
         * @return array
         */
        protected function get_legacy_filters()
        {
        }
    }
    /**
     * Class SubscriptionCancelled
     *
     * @since 2.12.4
     * @package EDD
     * @subpackage Emails
     */
    class SubscriptionCancelledAdmin extends \EDD\Recurring\Emails\Types\SubscriptionCancelled
    {
        /**
         * The email ID.
         *
         * @var string
         * @since 2.12.4
         */
        protected $id = 'subscription_cancelled_admin';
        /**
         * The email recipient type.
         *
         * @var string
         * @since 2.12.4
         */
        protected $recipient_type = 'admin';
        /**
         * Set the email to address.
         *
         * @since 2.12.4
         *
         * @return void
         */
        protected function set_to_email()
        {
        }
    }
}
namespace EDD\Recurring\Gateways\Stripe {
    /**
     * Class Loader
     */
    class Loader implements \EDD\EventManagement\SubscriberInterface
    {
        /**
         * Get the subscribed events.
         *
         * @since 2.13.0
         * @return array
         */
        public static function get_subscribed_events()
        {
        }
        /**
         * AJAX callback to revert a failed payment method update on Stripe.
         *
         * @since 2.13.0
         */
        public function revert_failed_payment_method_update()
        {
        }
        /**
         * AJAX handler for updating a Subscription's default payment method using Payment Elements.
         *
         * @since 2.13.0
         * @throws \Exception If Stripe API calls fail.
         */
        public function update_payment_method_payment_elements()
        {
        }
    }
    // @codeCoverageIgnore
    /**
     * Class MissingSubscription
     */
    class MissingSubscription
    {
        /**
         * Query for missing subscriptions.
         *
         * @since 2.13.0
         * @param array $args The optional arguments.
         * @return array
         */
        public function find($args)
        {
        }
        /**
         * Fix a missing subscription.
         *
         * @since 2.13.0
         * @param int $id The order ID.
         * @return bool|string
         */
        public static function fix($id)
        {
        }
    }
}
namespace EDD\Recurring\Gateways\Stripe\Update {
    // @codeCoverageIgnore
    /**
     * Stripe Update Form
     *
     * @since 2.13.0
     */
    class Form
    {
        /**
         * Subscription object.
         *
         * @var \EDD\Recurring\Subscriptions\Subscription
         */
        protected $subscription;
        /**
         * Constructor.
         *
         * @param \EDD\Recurring\Subscriptions\Subscription $subscription Subscription object.
         */
        public function __construct($subscription)
        {
        }
        /**
         * Render the update payment method form.
         *
         * @since 2.13.0
         */
        public function render()
        {
        }
    }
}
namespace EDD\Recurring\Gateways\Stripe\Webhooks {
    /**
     * Class Event
     *
     * @since 2.13.0
     */
    class Event
    {
        /**
         * Get the event from Stripe.
         *
         * @since 2.13.0
         * @throws \EDD\Utils\Exception If the event is invalid.
         * @return \EDD\Stripe\API\Event | false
         */
        public static function get()
        {
        }
    }
}
namespace EDD\Recurring\Gateways\Stripe\Webhooks\Events\Traits {
    // @codeCoverageIgnore
    /**
     * Trait Mode
     *
     * @since 2.13.0
     */
    trait Mode
    {
        /**
         * Verify the webhook mode.
         *
         * @since 2.13.0
         * @return bool
         */
        public function verify_mode()
        {
        }
    }
}
namespace EDD\Recurring\Gateways\Stripe\Webhooks\Events {
    // @codeCoverageIgnore
    /**
     * Class Event
     *
     * @since 2.13.0
     */
    abstract class Event
    {
        use \EDD\Recurring\Gateways\Stripe\Webhooks\Events\Traits\Mode;
        /**
         * The event object.
         *
         * @var \Stripe\Event
         * @since 2.13.0
         */
        protected $event;
        /**
         * The event data.
         *
         * @var object
         * @since 2.13.0
         */
        protected $data;
        /**
         * The event object.
         *
         * This type will vary by webhook. Each webhook event should define this property with the appropriate type.
         *
         * @var object
         * @since 2.13.0
         */
        protected $object;
        /**
         * The subscription object.
         *
         * @var \EDD_Subscription
         * @since 2.13.0
         */
        public $subscription;
        /**
         * Event constructor.
         *
         * @since 2.13.0
         *
         * @param \Stripe\Event $event The event object.
         */
        public function __construct($event)
        {
        }
        /**
         * Check the event mode against the store mode.
         *
         * @since 2.13.0
         * @return bool
         */
        public function process() {}
        /**
         * Check if the requirements are met for processing the event.
         *
         * @since 2.13.0
         * @return bool
         */
        public function requirements_met()
        {
        }
        /**
         * Get the subscription.
         *
         * @since 2.13.0
         * @return \EDD_Subscription|false
         */
        protected function get_subscription()
        {
        }
    }
    // @codeCoverageIgnore
    /**
     * Class CustomerSubscriptionCreated
     *
     * @since 2.13.0
     */
    class CustomerSubscriptionCreated extends \EDD\Recurring\Gateways\Stripe\Webhooks\Events\Event
    {
        /**
         * Processes the event.
         *
         * @since 2.13.0
         * @return void
         */
        public function process()
        {
        }
    }
    // @codeCoverageIgnore
    /**
     * Class CustomerSubscriptionDeleted
     *
     * @since 2.13.0
     */
    class CustomerSubscriptionDeleted extends \EDD\Recurring\Gateways\Stripe\Webhooks\Events\Event
    {
        /**
         * Processes the event.
         *
         * @since 2.13.0
         * @return void
         */
        public function process()
        {
        }
    }
    // @codeCoverageIgnore
    /**
     * Class CustomerSubscriptionUpdated
     *
     * @since 2.13.0
     */
    class CustomerSubscriptionUpdated extends \EDD\Recurring\Gateways\Stripe\Webhooks\Events\Event
    {
        /**
         * Processes the event.
         *
         * @since 2.13.0
         * @return void
         */
        public function process()
        {
        }
    }
    // @codeCoverageIgnore
    /**
     * Class InvoicePaymentFailed
     *
     * @since 2.13.0
     */
    class InvoicePaymentFailed extends \EDD\Recurring\Gateways\Stripe\Webhooks\Events\Event
    {
        /**
         * Processes the event.
         *
         * @since 2.13.0
         * @return void
         */
        public function process()
        {
        }
    }
    // @codeCoverageIgnore
    /**
     * Class InvoicePaymentSucceeded
     *
     * @since 2.13.0
     */
    class InvoicePaymentSucceeded extends \EDD\Recurring\Gateways\Stripe\Webhooks\Events\Event
    {
        /**
         * Processes the event.
         *
         * @since 2.13.0
         * @return void
         */
        public function process()
        {
        }
    }
}
namespace EDD\Recurring\Gateways\Stripe\Webhooks {
    // @codeCoverageIgnore
    /**
     * The listener class.
     *
     * @since 2.13.0
     */
    class Listener
    {
        /**
         * The event object.
         *
         * @var \EDD\Recurring\Gateways\Stripe\Webhooks\Event
         * @since 2.13.0
         */
        protected $event;
        /**
         * Listener constructor.
         *
         * @since 2.13.0
         */
        public function __construct($event)
        {
        }
        /**
         * Processes the event.
         *
         * @since 2.13.0
         * @return bool
         */
        public function process()
        {
        }
    }
}
namespace EDD\Recurring\Integrations {
    /**
     * Abstract integration class.
     *
     * @since 2.13.0
     */
    abstract class Integration implements \EDD\EventManagement\SubscriberInterface
    {
        /**
         * Get the subscribed events.
         *
         * @since 2.13.0
         * @return array
         */
        public static function get_subscribed_events(): array
        {
        }
        /**
         * Whether the integration is active.
         *
         * @since 2.13.0
         * @return bool
         */
        public static function is_active(): bool {}
        /**
         * Register hooks.
         *
         * @since 2.13.0
         * @return array
         */
        protected static function hooks(): array {}
    }
}
namespace EDD\Recurring\Integrations\SoftwareLicensing {
    // @codeCoverageIgnore
    /**
     * Software Licensing Emails class.
     *
     * @since 2.13.0
     */
    trait Emails
    {
        /**
         * Maybe disable the subscription reminder if the license has been upgraded.
         *
         * @param bool                                $can_send        Whether the reminder can be sent.
         * @param int                                 $subscription_id The subscription ID.
         * @param int                                 $notice_id       The notice ID.
         * @param \EDD\Recurring\Emails\Types\Notices $notice          The notice object.
         * @return bool
         */
        public function maybe_disable_reminder($can_send, $subscription_id, $notice_id, $notice)
        {
        }
    }
    // @codeCoverageIgnore
    /**
     * Renewals class.
     */
    trait Renewals
    {
        /**
         * Adds metadata to the license to indicate a manual renewal.
         *
         * @since 2.13.0
         * @return void
         */
        public function set_renewal_flag(\EDD_Recurring_Gateway $gateway_data)
        {
        }
        /**
         * Cancel a subscription when a license is manually renewed.
         *
         * @since 2.13.0
         * @param int $license_id The license ID.
         */
        public function cancel_subscription_on_renewal($license_id)
        {
        }
    }
    /**
     * Software Licensing Upgrades trait.
     *
     * @since 2.13.0
     */
    trait Upgrades
    {
        /**
         * Cancel a subscription when a license is upgraded.
         *
         * @since 2.13.0
         * @param int   $license_id The license ID.
         * @param array $args       The license upgrade arguments.
         */
        public function cancel_subscription_on_upgrade($license_id, $args)
        {
        }
        /**
         * When upgrading a license, set a trial period so that we avoid having a license that expires prior to the subscription,
         * and renew the subscription at the next expiration.
         *
         * @since 2.7.1
         *
         * @param array                      $args          Arguments used to create the subscription.
         * @param array                      $downloads     All downloads for this order.
         * @param string                     $gateway       Gateway slug.
         * @param int                        $download_id   ID of the download for this subscription.
         * @param int|false                  $price_id      Price ID for the download.
         * @param array                      $subscription  All subscription data used for creating the subscription.
         * @param EDD_Recurring_Gateway|null $gateway_class Gateway object.
         *
         * @return array
         * @throws \Exception Thrown when a PayPal API error occurs.
         * @throws API_Exception Thrown when a PayPal API error occurs.
         */
        public function handle_subscription_upgrade_billing($args, $downloads, $gateway, $download_id, $price_id, $subscription = array(), $gateway_class = null)
        {
        }
        /**
         * Get the license for the download.
         *
         * @since 2.13.0
         * @param array $download    The download array.
         * @param int   $download_id The download ID.
         * @param int   $price_id    The price ID.
         * @return \EDD_SL_License|false
         */
        private function get_license($download, $download_id, $price_id)
        {
        }
        /**
         * Get the options for the download.
         * Account for the fact that PayPal Express deals with post-payment creation, which means we have item_number in play.
         *
         * @since 2.13.0
         * @param array $download The download array.
         * @return array
         */
        private function get_options($download)
        {
        }
        /**
         * Get the license expiration. Depending on the gateway, the license may have been upgraded, but if not,
         * we get the expiration from the upgrade paths and new download, instead of the existing license, as it has not changed yet.
         *
         * @since 2.13.0
         * @param \EDD_SL_License $license  The license object.
         * @param array           $download The download array.
         * @return int|false
         */
        private function get_license_expiration($license, $download)
        {
        }
        /**
         * Get the upgrade path for the license.
         *
         * @since 2.13.0
         * @param \EDD_SL_License $license  The license object.
         * @param array           $download The download array.
         * @return array|false
         */
        private function get_upgrade_path($license, $download)
        {
        }
    }
    /**
     * Software Licensing Integration class.
     *
     * @since 2.13.0
     */
    class Integration extends \EDD\Recurring\Integrations\Integration
    {
        use \EDD\Recurring\Integrations\SoftwareLicensing\Emails;
        use \EDD\Recurring\Integrations\SoftwareLicensing\Renewals;
        use \EDD\Recurring\Integrations\SoftwareLicensing\Upgrades;
        /**
         * Check if the integration is active.
         *
         * @since 2.13.0
         * @return bool
         */
        public static function is_active(): bool
        {
        }
        /**
         * Register hooks.
         *
         * @since 2.13.0
         * @return array
         */
        protected static function hooks(): array
        {
        }
    }
    // @codeCoverageIgnore
    /**
     * License class.
     */
    class License
    {
        /**
         * The license object.
         *
         * @since 2.13.0
         * @var \EDD_SL_License
         */
        public $license;
        /**
         * License constructor.
         *
         * @since 2.13.0
         * @param int $license_id The license ID.
         */
        public function __construct($license_id)
        {
        }
        /**
         * Get a subscription from a license.
         *
         * @since 2.13.0
         * @param array $sub_args Optional. Arguments to pass to the EDD_Subscriptions_DB::get_subscriptions() method.
         * @return false|\EDD_Subscription
         */
        public function get_subscription($sub_args = array())
        {
        }
    }
}
namespace EDD\Recurring\Legacy {
    // @codeCoverageIgnore
    /**
     * The Subscriptions DB Class
     *
     * @since  2.4
     */
    class Database extends \EDD_DB
    {
        /**
         * Get things started
         *
         * @access  public
         * @since   2.4
         */
        public function __construct()
        {
        }
        /**
         * Get columns and formats
         *
         * @access  public
         * @since   2.4
         */
        public function get_columns()
        {
        }
        /**
         * Get default column values
         *
         * @access  public
         * @since   2.4
         */
        public function get_column_defaults()
        {
        }
        /**
         * Retrieve all subscriptions for a customer
         *
         * @access  public
         * @since   2.4
         * @return EDD_Subscription[]
         */
        public function get_subscriptions($args = array())
        {
        }
        /**
         * Count the total number of subscriptions in the database
         *
         * @access  public
         * @since   2.4
         */
        public function count($args = array())
        {
        }
        /**
         * Create the table
         *
         * @deprecated 2.13.0
         * @since   2.4
         */
        public function create_table()
        {
        }
        /**
         * Convert object to array
         *
         * @since 2.7.4
         *
         * @return array
         */
        public function to_array()
        {
        }
    }
    /**
     * The Recurring Emails Class
     * This class will be formally deprecated when the minimum EDD version supports email management.
     *
     * @since  2.4
     */
    class Emails
    {
        /**
         * The subscription object.
         *
         * @var EDD_Subscription
         */
        public $subscription;
        /**
         * EDD_Recurring_Emails constructor.
         */
        public function __construct()
        {
        }
        /**
         * Initializes the class.
         *
         * @return void
         */
        public function init()
        {
        }
        /**
         * Sends an email when a subscription payment is received.
         *
         * @param int               $subscription_id The subscription ID.
         * @param int               $expiration      The expiration date.
         * @param \EDD_Subscription $subscription    The subscription object.
         * @param int               $payment_id      The renewal payment ID.
         * @return void
         */
        public function send_payment_received($subscription_id, $expiration, \EDD_Subscription $subscription, $payment_id = 0)
        {
        }
        /**
         * Sends an email when a subscription payment fails.
         *
         * @param \EDD_Subscription $subscription The subscription object.
         * @return void
         */
        public function send_payment_failed(\EDD_Subscription $subscription)
        {
        }
        /**
         * Sends an email to the customer when a subscription is cancelled.
         *
         * @param int               $subscription_id The subscription ID.
         * @param \EDD_Subscription $subscription    The subscription object.
         * @return void
         */
        public function send_subscription_cancelled($subscription_id, \EDD_Subscription $subscription)
        {
        }
        /**
         * Sends an email to the admin when a subscription is cancelled.
         *
         * @param int              $subscription_id The subscription ID.
         * @param \EDD_Subscription $subscription    The subscription object.
         * @return void
         */
        public function send_subscription_cancelled_admin($subscription_id, \EDD_Subscription $subscription)
        {
        }
        /**
         * Sends a reminder email to a customer.
         *
         * @param int $subscription_id The subscription ID.
         * @param int $notice_id       The notice ID.
         * @return bool
         */
        public function send_reminder($subscription_id = 0, $notice_id = 0)
        {
        }
        /**
         * Replaces template tags in a reminder email.
         *
         * @param string $text            The text to be parsed (subject or message).
         * @param int    $subscription_id The subscription ID.
         * @return string
         */
        public function filter_reminder_template_tags($text = '', $subscription_id = 0)
        {
        }
        /**
         * Replaces template tags in a payment received email.
         *
         * @param string $text   The text to be parsed (subject or message).
         * @param string $amount The payment amount.
         * @return string
         */
        public function payment_received_template_tags($text = '', $amount = '')
        {
        }
    }
    /**
     * The Recurring Reminders Class
     *
     * @since  2.4
     */
    class Reminders
    {
        use \EDD\Recurring\Emails\Traits\Subscriptions;
        public function __construct()
        {
        }
        /**
         * Returns if renewals are enabled.
         *
         * @return array Array of defined reminders.
         */
        public function reminders_enabled()
        {
        }
        /**
         * Retrieve reminder notices periods.
         *
         * @since 2.4
         * @return array reminder notice periods
         */
        public function get_notice_periods()
        {
        }
        /**
         * Retrieve the reminder label for a notice.
         *
         * @since 2.4
         * @return string
         */
        public function get_notice_period_label($notice_id = 0)
        {
        }
        /**
         * Retrieve reminder notices types.
         *
         * @since 2.4
         * @return array reminder notice types
         */
        public function get_notice_types()
        {
        }
        /**
         * Retrieve the reminder type label for a notice.
         *
         * @since 2.4
         * @return String
         */
        public function get_notice_type_label($notice_id = 0)
        {
        }
        /**
         * Retrieve a reminder notice.
         *
         * @since 2.4
         * @return array Reminder notice details
         */
        public function get_notice($notice_id = 0)
        {
        }
        /**
         * Retrieve reminder notice periods.
         *
         * @since 2.4
         * @return array Reminder notices defined in settings
         */
        public function get_notices($type = 'all')
        {
        }
        /**
         * Send reminder emails.
         *
         * @since 2.4
         * @return void
         */
        public function scheduled_reminders()
        {
        }
        /**
         * Setup and send test email for a reminder.
         *
         * @since 2.4
         * @return void
         */
        public function send_test_notice($notice_id = 0)
        {
        }
        /**
         * Filter fields for test email for a reminder.
         *
         * @since 2.4
         * @return string
         */
        function filter_test_notice($text = null)
        {
        }
    }
}
namespace EDD\Recurring {
    // @codeCoverageIgnore
    /**
     * The EDD_Recurring Class.
     *
     * @since 2.13.0
     */
    final class Plugin
    {
        /**
         * The plugin path.
         *
         * @var string
         */
        public static $plugin_path;
        /**
         * The plugin directory path.
         *
         * @var string
         */
        public static $plugin_dir;
        /**
         * The gateways that are available for use
         *
         * @var array
         */
        public static $gateways = array();
        /**
         * The customers class
         *
         * @var EDD_Recurring_Customer
         */
        public static $customers;
        /**
         * The content restriction class
         *
         * @var EDD_Recurring_Content_Restriction
         */
        public static $content_restriction;
        /**
         * The software licensing class
         *
         * @var EDD_Recurring_Software_Licensing
         */
        public static $software_licensing;
        /**
         * The auto register class
         *
         * @var EDD_Recurring_Auto_Register
         */
        public static $auto_register;
        /**
         * The invoices class
         *
         * @var EDD_Recurring_Invoices
         */
        public static $invoices;
        /**
         * The fraud monitor class
         *
         * @var EDD_Recurring_Fraud_Monitor
         */
        public static $fraud_monitor;
        /**
         * The reminders class
         *
         * @var EDD_Recurring_Reminders
         */
        public static $reminders;
        /**
         * @var EDD\Recurring\Emails\Handler|EDD\Recurring\Legacy\Emails
         */
        public static $emails;
        /**
         * The cron class
         *
         * @var EDD\Recurring\Cron\Handler
         */
        public static $cron;
        /**
         * The API class
         *
         * @var EDD_Subscriptions_API
         */
        public static $api;
        /**
         * The checkout class
         *
         * @var EDD_Recurring_Checkout
         */
        public static $checkout;
        /**
         * Main EDD_Recurring Instance
         *
         * Insures that only one instance of EDD_Recurring exists in memory at any one
         * time. Also prevents needing to define globals all over the place.
         *
         * @since     v1.0
         * @staticvar array $instance
         * @uses      EDD_Recurring::setup_globals() Setup the globals needed
         * @uses      EDD_Recurring::includes() Include the required files
         * @uses      EDD_Recurring::setup_actions() Setup the hooks and actions
         * @see       EDD()
         * @return EDD_Recurring The one true EDD_Recurring
         */
        public static function instance()
        {
        }
        /**
         * Load global files
         *
         * @since  1.0
         * @return void
         */
        public function includes_global()
        {
        }
        /**
         * We have to disable Stripe's express checkout when loading the gateway files.
         *
         * @since 2.11.8.1
         * @return array
         */
        public function reset_prb()
        {
        }
        /**
         * Load admin files
         *
         * @since  1.0
         * @return void
         */
        public function includes_admin()
        {
        }
        /**
         * Register our Subscriptions submenu
         *
         * @since  2.4
         * @return void
         */
        public function subscriptions_list()
        {
        }
        /**
         * Allow file downloads for payments with a status of cancelled
         *
         * @since  1.4.2
         *
         * @param array $stati The payment stati that can download files.
         *
         * @return array
         */
        public function add_allowed_payment_status($stati)
        {
        }
        /**
         * Allow file downloads for payments with a status of cancelled
         *
         * @since  1.4.2
         *
         * @param bool   $is_complete If the payment is complete.
         * @param int    $payment_id  The payment ID.
         * @param string $status    The payment status.
         *
         * @return array
         */
        public function is_payment_complete($is_complete, $payment_id, $status)
        {
        }
        /**
         * Disable item quantities if the cart contains a subscription
         *
         * @since  2.5
         *
         * @param bool $ret Whether or not to enable item quantities.
         *
         * @return array
         */
        public function maybe_disable_quantities($ret)
        {
        }
        /**
         * Allow file download access once a renewal has processed
         *
         * @since  2.4.6
         * @param  bool  $has_access   If the user has access to the file.
         * @param  int   $payment_id    The payment ID associated with the download.
         * @param  array $args        Array of arguments for the file request.
         * @return bool               If the file should be delivered or not.
         */
        public function allow_file_access($has_access, $payment_id, $args)
        {
        }
        /**
         * Tells EDD about our new payment status
         *
         * @since  1.0
         *
         * @param array $stati The payment stati.
         *
         * @return array
         */
        public function register_edd_cancelled_status($stati)
        {
        }
        /**
         * Displays the cancelled payments filter link
         *
         * @since  1.0
         * @deprecated 2.12.0
         *
         * @param array $views The views.
         *
         * @return array
         */
        public function payments_view($views)
        {
        }
        /**
         * Add or remove the signup fees.
         *
         * @since  2.1.6
         * @return void
         */
        public function maybe_add_remove_fees()
        {
        }
        /**
         * Checks if a user has permission to download a file
         *
         * This allows file downloads to be limited to active subscribers.
         *
         * @since  1.0
         *
         * @param int    $download_id The ID of the download.
         * @param string $email       The email address of the user.
         * @param int    $payment_id  The ID of the payment.
         * @param array  $args        Additional arguments.
         *
         * @return void
         */
        public function process_download($download_id = 0, $email = '', $payment_id = 0, $args = array())
        {
        }
        /**
         * Adds recurring product details to the shopping cart
         *
         * This fires when items are added to the cart
         *
         * @since  1.0
         *
         * @param array $cart_item The cart item details.
         *
         * @return array
         */
        public static function add_subscription_cart_details($cart_item)
        {
        }
        /**
         * Set up the time period IDs and labels
         *
         * @since  1.0
         * @return array
         */
        public static function periods()
        {
        }
        /**
         * Set up the singular time period IDs and labels
         *
         * @since  1.0
         * @return array
         */
        public static function singular_periods()
        {
        }
        /**
         * Get the time period for a variable priced product
         *
         * @since  1.0
         *
         * @param int $price_id The Price ID.
         * @param int $post_id  The Post ID.
         *
         * @return string
         */
        public static function get_period($price_id, $post_id = null)
        {
        }
        /**
         * Get the time period for a single-price product
         *
         * @since  1.0
         *
         * @param int $post_id The Post ID.
         *
         * @return string
         */
        public static function get_period_single($post_id)
        {
        }
        /**
         * Get the number of times a price ID recurs
         *
         * @since  1.0
         *
         * @param int $price_id The Price ID.
         * @param int $post_id  The Post ID.
         *
         * @return int
         */
        public static function get_times($price_id, $post_id = null)
        {
        }
        /**
         * Get the signup fee a price ID
         *
         * @since  1.1
         *
         * @param int $price_id The Price ID.
         * @param int $post_id  The Post ID.
         *
         * @return float
         */
        public static function get_signup_fee($price_id, $post_id = null)
        {
        }
        /**
         * Get the number of times a single-price product recurs
         *
         * @since  1.0
         *
         * @param int $post_id The Post ID.
         *
         * @return int
         */
        public static function get_times_single($post_id)
        {
        }
        /**
         * Get the signup fee of a single-price product
         *
         * @since  1.1
         *
         * @param int $post_id The Post ID.
         *
         * @return float
         */
        public static function get_signup_fee_single($post_id)
        {
        }
        /**
         * Get the time period for a custom-price product
         *
         * For Custom Prices plugin
         *
         * @since  2.5
         *
         * @param int $post_id The Post ID.
         *
         * @return string
         */
        public static function get_custom_period($post_id)
        {
        }
        /**
         * Get the number of times a custom-price product recurs
         *
         * For Custom Prices plugin
         *
         * @since  2.5
         *
         * @param int $post_id The Post ID.
         *
         * @return int
         */
        public static function get_custom_times($post_id)
        {
        }
        /**
         * Get the signup fee of a custom price product
         *
         * For Custom Prices plugin
         *
         * @since  2.5
         *
         * @param int $post_id The Post ID.
         *
         * @return float
         */
        public static function get_custom_signup_fee($post_id)
        {
        }
        /**
         * Check if a price is recurring
         *
         * @since  1.0
         *
         * @param int $download_id The Download ID.
         * @param int $price_id    The Price ID.
         *
         * @return bool
         */
        public static function is_price_recurring($download_id, $price_id)
        {
        }
        /**
         * Check if a product is recurring
         *
         * @since  1.0
         *
         * @param int      $download_id The Download ID.
         * @param null|int $price_id Optional. The price ID to check. If not set, checks the single product price. Added in 2.12.0.
         *
         * @return bool
         */
        public static function is_recurring($download_id = 0, $price_id = null)
        {
        }
        /**
         * Check if a custom price product is recurring
         *
         * @since  2.5
         *
         * @param int $download_id The Download ID.
         *
         * @return bool
         */
        public static function is_custom_recurring($download_id = 0)
        {
        }
        /**
         * Check if a product has a free trial
         *
         * @since  2.6
         *
         * @param int $download_id The Download ID.
         * @param int $price_id    The Price ID.
         *
         * @return bool
         */
        public static function has_free_trial($download_id = 0, $price_id = null)
        {
        }
        /**
         * Determine if the currently logged in customer or email address has used their free trial
         *
         * @since  2.6
         *
         * @param int    $download_id The Download ID.
         * @param string $email The email address.
         *
         * @return bool
         */
        public static function has_trialed($download_id = 0, $email = '')
        {
        }
        /**
         * Get the time period for a product
         *
         * @since  2.6
         *
         * @param int $post_id The Post ID.
         * @param int $price_id The Price ID.
         *
         * @return array|false
         */
        public static function get_trial_period($post_id, $price_id = null)
        {
        }
        /**
         * Record a subscription payment
         *
         * @deprecated 2.4
         * @since  1.0.1
         *
         * @param int    $parent_id The parent payment ID.
         * @param string $amount    The amount of the payment.
         * @param string $txn_id    The transaction ID.
         * @param string $unique_key The unique key.
         *
         * @return void
         */
        public function record_subscription_payment($parent_id = 0, $amount = '', $txn_id = '', $unique_key = 0)
        {
        }
        /**
         * Checks if a payment already exists
         *
         * @deprecated 2.4
         * @since  1.0.2
         *
         * @param string $unique_key The unique key.
         *
         * @return bool
         */
        public function payment_exists($unique_key = 0)
        {
        }
        /**
         * Determines if a purchase contains a recurring product
         *
         * @since  1.0.1
         *
         * @param array $purchase_data The purchase data.
         *
         * @return bool
         */
        public function is_purchase_recurring($purchase_data)
        {
        }
        /**
         * Looks at the cart to determine if there is a recurring subscription in the cart
         *
         * @since   2.4
         * @return  bool
         */
        public function cart_contains_recurring()
        {
        }
        /**
         * Looks at the cart to determine if there are recurring and non-recurring items
         *
         * @since   2.4.13
         * @return  bool
         */
        public function cart_is_mixed()
        {
        }
        /**
         * Looks at the cart to determine if there are free trials and non-trials together
         *
         * Trials and non-trials cannot be purchased together.
         *
         * @since   2.6
         * @return  bool
         */
        public function cart_is_mixed_with_trials()
        {
        }
        /**
         * Overwrites cart total line when free trials are present
         *
         * @since  2.6
         *
         * @param float $total The cart total.
         *
         * @return string
         */
        public static function maybe_set_cart_total($total)
        {
        }
        /**
         * Looks at the cart to determine if there is a subscription with a free trial
         *
         * @since   2.6
         * @return  bool
         */
        public function cart_has_free_trial()
        {
        }
        /**
         * Make sure subscription payments get included in earning reports
         *
         * @since  1.0
         *
         * @param  array $args The array of query arguments.
         *
         * @return array
         */
        public function earnings_query($args)
        {
        }
        /**
         * Make sure subscription payments get included in has user purchased query
         *
         * @since  2.1.5
         * @param  array $args The array of query arguments.
         * @return array
         */
        public function has_purchased_query($args)
        {
        }
        /**
         * Add edd_subscription post type to EDD Payment Stats
         *
         * @since 2.11.7 This is now also used to update EDD 3.0's list of net/gross order statuses.
         * @since 2.11.9 This is now also used on order items in case they are incorrectly set to `edd_subscription` instead of `complete`.
         *
         * @since  2.6.10
         * @param  array $statuses Post statuses.
         */
        public function edd_payment_stats_post_status($statuses)
        {
        }
        /**
         * Tells EDD to include child payments in queries
         *
         * @since  2.2
         *
         * @param WP_Query $query The WP_Query object.
         *
         * @return void
         */
        public function enable_child_payments($query)
        {
        }
        /**
         * Load frontend CSS files
         *
         * @since  2.4
         * @return void
         */
        public function enqueue_styles()
        {
        }
        /**
         * Load frontend javascript files
         *
         * @since  2.4
         *
         * @return void
         */
        public function enqueue_scripts()
        {
        }
        /**
         * Instruct EDD PDF Invoices that subscription payments are eligible for Invoices.
         *
         * @since  2.2
         *
         * @param  bool $is_allowed  The current status of if an invoice is allowed.
         * @param  int  $payment_id  The payment ID.
         *
         * @return bool
         */
        public function is_invoice_allowed($is_allowed, $payment_id)
        {
        }
        /**
         * Adds `edd_subscription` to the list of order statuses that support refunds.
         *
         * @param array $statuses The list of order statuses that support refunds.
         *
         * @since 2.10.1
         * @return array
         */
        public function refundable_order_statuses($statuses)
        {
        }
        /**
         * Checks the payment status during the refund process and allows it to be processed through the gateway
         * if it's an edd_subscription
         *
         * @since  2.4
         * @param  bool   $process_refund The current status of if a refund should be processed.
         * @param  object $payment        The EDD_Payment object of the refund being processed.
         * @return bool                   If the payment should be processed as a refund.
         */
        public function maybe_process_refund($process_refund, $payment)
        {
        }
        /**
         * Checks the payment status during the refund process and tells EDD to not decrease sales
         * if it's an edd_subscription
         *
         * @since  2.4
         * @param  bool   $decrease_sales The current status of if sales counts should be decreased.
         * @param  object $payment        The EDD_Payment object of the refund being processed.
         * @return bool                   If the sales counts should be decreased.
         */
        public function maybe_decrease_sales($decrease_sales, $payment)
        {
        }
        /**
         * Checks if the payment being added to a customer via recount should increase the purchase_count
         *
         * @since  2.4.5
         * @param  bool   $increase_sales The current status of if we should increase sales.
         * @param  object $payment        The WP_Post object of the payment.
         * @return bool                   If we should increase the customer sales count.
         */
        public function maybe_increase_customer_sales($increase_sales, $payment)
        {
        }
        /**
         * Get User ID from customer recurring ID
         *
         * @since  2.4
         *
         * @param string $recurring_id The recurring customer ID.
         *
         * @return int
         */
        public function get_user_id_by_recurring_customer_id($recurring_id = '')
        {
        }
        /**
         * Get pretty subscription frequency
         *
         * @param string $period The period to get the pretty frequency for.
         *
         * @return mixed|string|void
         */
        public function get_pretty_subscription_frequency($period)
        {
        }
        /**
         * Get pretty subscription frequency for singular periods
         *
         * @since 2.6
         *
         * @param string $period The period to get the pretty frequency for.
         *
         * @return mixed|string|void
         */
        public function get_pretty_singular_subscription_frequency($period)
        {
        }
        /**
         * Get gateway class
         *
         * @param  string $gateway The gateway whose class is being retrieved.
         * @return string The name of the gateway class.
         */
        public function get_gateway_class($gateway = '')
        {
        }
        /**
         * Get instantiated gateway class.
         *
         * @param  string $gateway_id The gateway whose class is being retrieved.
         * @return object The instantiated gateway class for the $gateway_id requested.
         */
        public function get_gateway($gateway_id = '')
        {
        }
        /** Backwards Compatible Functions for Recurring terms */
        /**
         * Display the signup fee notice under the purchase link
         *
         * @since  2.4
         * @param  int   $download_id The download ID being displayed.
         * @param  array $args      Array of arguments for the purchase link.
         * @return void
         */
        public function show_single_signup_fee_notice($download_id, $args)
        {
        }
        /**
         * Display the signup fee notice under the purchase link for Custom Prices
         *
         * @since  2.5
         * @param  int   $download_id The download ID being displayed.
         * @param  array $args      Array of arguments for the purchase link.
         * @return void
         */
        public function show_single_custom_signup_fee_notice($download_id, $args)
        {
        }
        /**
         * Show the signup fees by variable prices
         *
         * @since  2.4
         * @param  int    $price_id    The price ID key.
         * @param  string $price       The Price.
         * @param  int    $download_id The download ID.
         *
         * @return void
         */
        public function show_variable_signup_fee_notice($price_id, $price, $download_id)
        {
        }
        /**
         * Show the signup fees for Custom Prices
         *
         * @since  2.5
         * @param int    $download_id    The price ID key.
         * @param array  $prices         The Prices for the download.
         * @param string $type           The product type.
         *
         * @return void
         */
        public function show_multi_custom_signup_fee_notice($download_id, $prices, $type)
        {
        }
        /**
         * Display the signup fee notice under the purchase link
         *
         * @since  2.4
         * @param  int   $download_id The download ID being displayed.
         * @param  array $args      Array of arguments for the purchase link.
         * @return void
         */
        public function show_single_terms_notice($download_id, $args)
        {
        }
        /**
         * Show the signup fees by variable prices
         *
         * @since  2.4
         * @param  int    $price_id    The price ID key.
         * @param  string $price       The Price.
         * @param  int    $download_id The download ID.
         * @return void
         */
        public function show_variable_terms_notice($price_id, $price, $download_id)
        {
        }
        /**
         * Show the subscription terms for variable prices
         *
         * @since  2.5
         * @param  int    $download_id The download ID.
         * @param  array  $prices      Variable prices.
         * @param  string $type        Product type.
         * @return void
         */
        public function show_variable_custom_terms_notice($download_id, $prices, $type)
        {
        }
        /**
         * Disclose the subscription terms on the cart item
         *
         * @since  2.4
         * @param  array $item The cart item.
         * @return void
         */
        public function show_terms_on_cart_item($item)
        {
        }
        /**
         * Show the subscriptions management UI
         *
         * @since 2.7.14
         *
         * @param string $action Optional. Which view to show. Options: update|list. If not set, $_GET[ 'action ] or "list" is used.
         *
         * @return string
         */
        public function subscriptions_view($action = '')
        {
        }
        /**
         * Since we cannot invalidate the wp_cache by group, we need to avoid allowing the 'subscriptions' group
         * from being added to the persistent caching solutions. While this might hurt page speed overall, it will still
         * help with single page lads times when we are doing complex queries for subscriptions.
         *
         * @since 2.8.5
         * @return void
         */
        public function add_non_persistent_cache()
        {
        }
        /**
         * Conditonally load a notice for Authorize.net 2.0
         *
         * @since 2.9.6
         * @return void
         */
        public function _require_authnet_20_notice()
        {
        }
        /**
         * Conditionally remove the Authorize.net gateway from the active gateways to account for the
         * 2.0 release of Authorize.net, where the code is moved into the gateway itself.
         *
         * @since 2.9.6
         *
         * @param array $enabled_gateways The list of active gateways.
         * @return array
         */
        public function _require_authnet_20($enabled_gateways = array())
        {
        }
        /**
         * Registers renewal payment post status
         *
         * @since  1.0
         * @deprecated 2.12.3
         * @return void
         */
        public function register_post_statuses()
        {
        }
    }
}
namespace EDD\Recurring\Subscribers {
    class DownloadChecker
    {
        /**
         * DownloadChecker constructor.
         *
         * @since 2.11.10
         * @param \EDD_Recurring_Subscriber|false $customer
         */
        public function __construct($customer)
        {
        }
        /**
         * Checks if the current user can download a file.
         *
         * @since 2.11.10
         * @param string   $download_id
         * @param string   $payment_id
         * @param null|int $price_id
         * @return bool
         */
        public function user_can_download($download_id, $payment_id, $price_id)
        {
        }
    }
}
namespace EDD\Recurring\Subscriptions {
    // @codeCoverageIgnore
    /**
     * Cancel subscriptions.
     */
    class Cancel
    {
        /**
         * Maybe schedule the subscription cancellation--it will be skipped if already scheduled.
         *
         * @since 2.13.0
         * @param \EDD_Subscription $subscription The subscription object.
         * @param string            $reason       The reason for cancellation.
         * @return void
         */
        public function schedule_cancellation(\EDD_Subscription $subscription, string $reason)
        {
        }
        /**
         * Cancel a subscription.
         *
         * @since 2.13.0
         * @param int    $subscription_id The subscription ID.
         * @param string $reason          The reason for cancellation.
         * @return void
         */
        public function cancel($subscription_id, $reason = '')
        {
        }
    }
    /**
     * The Subscription Class
     *
     * @since  2.4
     */
    class Subscription extends \EDD\Database\Row
    {
        /**
         * Subscription ID
         *
         * @var int
         */
        protected $id = 0;
        /**
         * Customer ID
         *
         * @var int
         */
        protected $customer_id = 0;
        /**
         * Subscription period
         *
         * @var string
         */
        protected $period = '';
        /**
         * Initial amount
         *
         * @var string
         */
        protected $initial_amount = '';
        /**
         * Initial tax rate
         *
         * @var string
         */
        protected $initial_tax_rate = '';
        /**
         * Initial tax
         *
         * @var string
         */
        protected $initial_tax = '';
        /**
         * Recurring amount
         *
         * @var string
         */
        protected $recurring_amount = '';
        /**
         * Recurring tax rate
         *
         * @var string
         */
        protected $recurring_tax_rate = '';
        /**
         * Recurring tax
         *
         * @var string
         */
        protected $recurring_tax = '';
        /**
         * Number of times to bill
         *
         * @var int
         */
        protected $bill_times = 0;
        /**
         * Transaction ID
         *
         * @var string
         */
        protected $transaction_id = '';
        /**
         * Parent payment ID
         *
         * @var int
         */
        protected $parent_payment_id = 0;
        /**
         * Product ID
         *
         * @var int
         */
        protected $product_id = 0;
        /**
         * Price ID
         *
         * @var int
         */
        protected $price_id = null;
        /**
         * Created date.
         *
         * @todo This property will be changed to date_created in a future release.
         *
         * @var string
         */
        protected $created;
        /**
         * Modified date.
         *
         * @var string
         */
        protected $date_modified;
        /**
         * Expiration date
         *
         * @var string
         */
        protected $expiration;
        /**
         * Trial period
         *
         * @var string
         */
        protected $trial_period;
        /**
         * Status
         *
         * @var string
         */
        protected $status = 'pending';
        /**
         * Profile ID
         *
         * @var string
         */
        protected $profile_id = '';
        /**
         * Gateway
         *
         * @var string
         */
        protected $gateway = '';
        /**
         * Notes
         *
         * @var array
         */
        // protected $notes = array();
        /**
         * The Customer object.
         *
         * @var EDD_Customer $customer
         */
        protected $customer;
        /**
         * Get us started
         *
         * @since  2.4
         *
         * @param int|object $_id_or_object Subscription ID or object.
         * @param bool       $_by_profile_id Whether to get the subscription by profile ID.
         */
        public function __construct($_id_or_object = 0, $_by_profile_id = false)
        {
        }
        /**
         * Magic getter.
         *
         * @since 2.4
         */
        public function __get($key = '')
        {
        }
        /**
         * Magic setter. Since properties are not public, we need to use this to set them for backwards compatibility.
         *
         * @since 2.13.0
         */
        public function __set($key = '', $value = '')
        {
        }
        /**
         * Creates a subscription
         *
         * @since  2.4
         * @param  array $data Array of attributes for a subscription.
         * @return mixed  false if data isn't passed and class not instantiated for creation.
         */
        public function create($data = array())
        {
        }
        /**
         * Updates a subscription
         *
         * @since  2.4
         * @param  array $args Array of fields to update.
         * @return bool
         */
        public function update($args = array())
        {
        }
        /**
         * Delete the subscription
         *
         * @since  2.4
         * @return bool
         */
        public function delete()
        {
        }
        /**
         * Retrieves the parent payment ID
         *
         * @since  2.4
         * @return int
         */
        public function get_original_payment_id()
        {
        }
        /**
         * Retrieve renewal payments for a subscription
         *
         * @since  2.4
         * @deprecated 2.12.0
         * @return EDD_Payment[]
         */
        public function get_child_payments()
        {
        }
        /**
         * Get the renewal orders for a subscription.
         *
         * @since 2.12.0
         * @param array $args Optional args to get renewal orders.
         * @return array
         */
        public function get_renewal_orders($args = array())
        {
        }
        /**
         * Counts the number of payments made to the subscription
         *
         * @since  2.4
         * @return int
         */
        public function get_total_payments()
        {
        }
        /**
         * Returns the number of times the subscription has been billed
         *
         * @since  2.6
         * @return int
         */
        public function get_times_billed()
        {
        }
        /**
         * Gets the lifetime value for the subscription
         *
         * @since  2.4
         * @return float
         */
        public function get_lifetime_value()
        {
        }
        /**
         * Records a new payment on the subscription
         *
         * @since  2.4
         * @param  array $args Array of values for the payment, including amount and transaction ID.
         * @return bool|integer False if no payment is crated, or the payment ID if successful.
         */
        public function add_payment($args = array())
        {
        }
        /**
         * Retrieves the transaction ID from the subscription
         *
         * @since  2.4.4
         * @return bool
         */
        public function get_transaction_id()
        {
        }
        /**
         * Stores the transaction ID for the subscription purchase
         *
         * @since  2.4.4
         *
         * @param string $txn_id The transaction ID to store.
         */
        public function set_transaction_id($txn_id = '')
        {
        }
        /**
         * Renews a subscription.
         *
         * @since  2.4
         * @param int $payment_id The payment ID to renew the subscription with.
         * @return void
         */
        public function renew($payment_id = 0)
        {
        }
        /**
         * Marks a subscription as completed
         *
         * Subscription is completed when the number of payments matches the billing_times field
         *
         * @since  2.4
         * @return void
         */
        public function complete()
        {
        }
        /**
         * Marks a subscription as expired
         *
         * Subscription is completed when the billing times is reached
         *
         * @since  2.4
         * @param bool $check_expiration True if expiration date should be checked with merchant processor before expiring.
         * @return bool
         */
        public function expire($check_expiration = false)
        {
        }
        /**
         * Marks a subscription as failing
         *
         * @since  2.4.2
         * @return void
         */
        public function failing()
        {
        }
        /**
         * Marks a subscription as cancelled
         *
         * @since  2.4
         * @return void
         */
        public function cancel()
        {
        }
        /**
         * Determines if subscription can be cancelled
         *
         * This method is filtered by payment gateways in order to return true on subscriptions
         * that can be cancelled with a profile ID through the merchant processor
         *
         * @since  2.4
         * @return bool
         */
        public function can_cancel()
        {
        }
        /**
         * Retrieves the URL to cancel subscription
         *
         * @since  2.4
         * @return string
         */
        public function get_cancel_url()
        {
        }
        /**
         * Determines if subscription can be manually renewed
         *
         * This method is filtered by payment gateways in order to return true on subscriptions
         * that can be renewed manually
         *
         * @since  2.5
         * @return bool
         */
        public function can_renew()
        {
        }
        /**
         * Retrieves the URL to renew a subscription
         *
         * @since  2.5
         * @return string
         */
        public function get_renew_url()
        {
        }
        /**
         * Determines if subscription can have their payment method updated
         *
         * @since  2.4
         * @return bool
         */
        public function can_update()
        {
        }
        /**
         * Retrieves the URL to update subscription
         *
         * @since  2.4
         * @return string
         */
        public function get_update_url()
        {
        }
        /**
         * Determines if subscription can be reactivated
         *
         * This method is filtered by payment gateways in order to return true on subscriptions
         * that can be reactivated with a profile ID through the merchant processor
         *
         * @since  2.7.10
         * @return bool
         */
        public function can_reactivate()
        {
        }
        /**
         * Retrieves the URL to reactivate subscription
         *
         * @since  2.7.10
         * @return string
         */
        public function get_reactivation_url()
        {
        }
        /**
         * Determines if subscription can be retried when failing.
         *
         * This method is filtered by payment gateways in order to return true on subscriptions
         * that can be retried with a profile ID through the merchant processor
         *
         * @since  2.7.10
         * @return bool
         */
        public function can_retry()
        {
        }
        /**
         * Retries a failing subscription
         *
         * @since  2.7.10
         * @return bool|WP_Error
         */
        public function retry()
        {
        }
        /**
         * Retrieves the URL to retry a failing subscription
         *
         * @since  2.7.10
         * @return string
         */
        public function get_retry_url()
        {
        }
        /**
         * Determines if subscription is active
         *
         * @since  2.4
         * @return bool
         */
        public function is_active()
        {
        }
        /**
         * Determines if subscription is expired
         *
         * @since  2.4
         * @return bool
         */
        public function is_expired()
        {
        }
        /**
         * Retrieves the expiration date
         *
         * @since  2.4
         * @return string
         */
        public function get_expiration()
        {
        }
        /**
         * Checks the expiration date and returns the new date if it is different
         *
         * Will return true only if the expiration date retrieved is further in the future of the existing date.
         *
         * @since  2.6.6
         * @return bool True if expiration changes
         */
        public function check_expiration()
        {
        }
        /**
         * Retrieves the expiration date in a timestamp
         *
         * @since  2.4
         * @return int
         */
        public function get_expiration_time()
        {
        }
        /**
         * Retrieves the subscription status
         *
         * @since  2.4
         * @return int
         */
        public function get_status()
        {
        }
        /**
         * Retrieves the subscription status label
         *
         * @since  2.4
         * @return int
         */
        public function get_status_label()
        {
        }
        /**
         * Retrieves the subscription status badge
         *
         * @since  2.12.0
         * @return string
         */
        public function get_status_badge()
        {
        }
        /**
         * Determines if a payment exists with the specified transaction ID
         *
         * @since  2.4
         * @param  string $txn_id The transaction ID from the merchant processor.
         * @return bool
         */
        public function payment_exists($txn_id = '')
        {
        }
        /**
         * Get the parsed notes for a subscription as an array
         *
         * @since  2.7
         * @param  integer $length The number of notes to get.
         * @param  integer $paged What note to start at.
         * @return array           The notes requested
         */
        public function get_notes($length = 20, $paged = 1)
        {
        }
        /**
         * Get the total number of notes we have after parsing
         *
         * @since  2.7
         * @return int The number of notes for the subscription
         */
        public function get_notes_count()
        {
        }
        /**
         * Add a note for the subscription
         *
         * @since  2.7
         * @param string $note The note to add.
         * @return string|boolean The new note if added successfully, false otherwise
         */
        public function add_note($note = '')
        {
        }
        /**
         * Convert object to array
         *
         * @since 2.7.4
         *
         * @return array
         */
        public function to_array()
        {
        }
        /**
         * Whether the current user can manage a specific subscription.
         *
         * @since 2.11.8
         * @param string $capability The capability required if the user is not the subscription owner.
         * @return bool
         */
        public function current_user_can($capability = 'manage_subscriptions')
        {
        }
        /**
         * Maybe add a time meta value to the subscription.
         *
         * @since 2.13.0
         *
         * @param string $key The key of the meta value to add.
         * @return bool
         */
        public function maybe_add_time_meta(string $key)
        {
        }
        /**
         * Set the status property internally.  All places where the status of the subscription gets changed end up going
         * going through here so the action here is reliable for hooking in on any status change.
         *
         * Method should only be called when the status for the subscription has actually been changed in the db.
         *
         * @since 2.7.14
         * @param string $new_status The new status for the subscription.
         */
        protected function set_status($new_status)
        {
        }
    }
}
namespace EDD\Recurring\Subscriptions\Update {
    /**
     * Class Link
     *
     * @since 2.13.0
     */
    class Link
    {
        /**
         * Generates a secure URL for updating a subscription\'s payment method.
         *
         * @since 2.13.0
         *
         * @param Subscription $subscription The subscription object.
         * @return string|null The secure URL, or null if not applicable.
         */
        public static function generate_for_subscription(\EDD\Recurring\Subscriptions\Subscription $subscription): ?string
        {
        }
        /**
         * Validates a token from a secure URL and retrieves the subscription.
         *
         * @since 2.13.0
         *
         * @param string $token The token from the URL.
         * @return Subscription|null The subscription object if the token is valid, otherwise null.
         */
        public static function validate_token(string $token): ?\EDD\Recurring\Subscriptions\Subscription
        {
        }
    }
    /**
     * Class Page
     *
     * Handles the WordPress integration for the subscription update URL, including rewrite rules and page display.
     *
     * @since 2.13.0
     */
    class Page implements \EDD\EventManagement\SubscriberInterface
    {
        /**
         * Get the subscribed events.
         *
         * @since 2.13.0
         * @return array
         */
        public static function get_subscribed_events(): array
        {
        }
        /**
         * Add custom rewrite rule for subscription update URLs.
         *
         * @since 2.13.0
         */
        public function add_custom_rewrite_rule()
        {
        }
        /**
         * Add query vars for the custom rewrite rule.
         *
         * @since 2.13.0
         * @param array $vars Query vars.
         * @return array
         */
        public function add_query_vars($vars)
        {
        }
        /**
         * Handle subscription redirect logic before template loading.
         *
         * @since 2.13.1
         * @return void
         */
        public function handle_subscription_redirect()
        {
        }
        /**
         * Include custom template for subscription update page.
         *
         * @since 2.13.0
         * @param string $template Template.
         * @return string
         */
        public function include_template($template)
        {
        }
        /**
         * Finish the update payment process.
         *
         * @since 2.13.0
         * @param array $data The data passed to the function.
         * @return void
         */
        public function finish_update_payment($data)
        {
        }
        /**
         * Render the subscription update form content.
         *
         * @since 2.13.0
         * @param string $token The update token from the URL.
         * @return void
         */
        public function render_update_content($token)
        {
        }
        /**
         * Get the subscription update URL base.
         *
         * @since 2.13.0
         * @return string
         */
        public static function get_update_url_base()
        {
        }
    }
}
namespace EDD\Recurring\Upgrades\Background {
    // @codeCoverageIgnore
    interface UpgradeInterface
    {
        /**
         * Gets the name of the upgrade.
         *
         * @since 2.13.0
         * @return string
         */
        public static function get_upgrade_name(): string;
        /**
         * Gets the items to process.
         *
         * @since 2.13.0
         * @param bool $count If we should return the count of items.
         * @return array|int|false
         */
        public function get_items($count = false);
        /**
         * Processes the upgrade step.
         *
         * @since 2.13.0
         * @return void
         */
        public function process_step(): void;
        /**
         * Gets the array of parameters for the complete notification.
         *
         * @since 2.13.0
         * @return array
         */
        public function get_complete_notification(): array;
        /**
         * Gets the array of parameters for the in progress notification.
         *
         * @since 2.13.0
         * @return array
         */
        public function get_in_progress_notification(): array;
    }
    /**
     * Base class for upgrades.
     *
     * @since 2.13.0
     */
    abstract class Upgrade implements \EDD\EventManagement\SubscriberInterface, \EDD\Recurring\Upgrades\Background\UpgradeInterface
    {
        /**
         * The number of database rows which should prevent the upgrade running via the background process.
         *
         * @var int
         */
        protected $warning_count = 25000;
        /**
         * Whether the upgrade should be silent.
         *
         * @var bool
         */
        protected $is_silent = false;
        /**
         * The number of items to process per step.
         *
         * @var int
         */
        protected $per_step = 50;
        /**
         * Hook into actions and filters.
         *
         * @since 2.13.0
         */
        public static function get_subscribed_events()
        {
        }
        /**
         * Maybe schedule the background update.
         *
         * @since 2.13.0
         * @return void
         */
        public function maybe_schedule_background_update()
        {
        }
        /**
         * Schedules the next event.
         *
         * @since 2.13.0
         * @param int|null $timestamp The timestamp to schedule the event for.
         * @return void
         */
        public static function schedule_next_event($timestamp = null)
        {
        }
        /**
         * Maybe register the CLI command.
         *
         * @since 2.13.0
         * @return void
         */
        public function maybe_register_cli_command()
        {
        }
        /**
         * Runs the upgrade via WP-CLI.
         *
         * @since 2.13.0
         *
         * @param array $args       The arguments passed to the command.
         * @param array $assoc_args The associative arguments passed to the command.
         *
         * @return void
         */
        public function do_cli($args, $assoc_args)
        {
        }
        /**
         * Gets the name of the cron action.
         *
         * @since 2.13.0
         * @return string
         */
        protected static function get_cron_action(): string
        {
        }
        /**
         * Gets the percentage complete.
         *
         * @since 2.13.0
         *
         * @return int
         */
        protected function get_percentage_complete()
        {
        }
        /**
         * Marks the upgrade process as complete.
         *
         * @since 2.13.0
         * @return void
         */
        protected function mark_complete()
        {
        }
        /**
         * Adds or updates the initial notification about the migration.
         *
         * @since 2.13.0
         *
         * @return void
         */
        protected function add_or_update_initial_notification()
        {
        }
        /**
         * Determines if the step can be processed.
         *
         * @since 2.13.0
         *
         * @return bool
         */
        protected function can_process_step()
        {
        }
        /**
         * Get the CLI notification parameters.
         *
         * @since 2.13.0
         * @return array
         */
        protected function get_cli_notification(): array
        {
        }
        /**
         * Get the number of items to process per step.
         *
         * @since 2.13.0
         * @return int
         */
        protected function get_count_per_step()
        {
        }
    }
    // @codeCoverageIgnore
    /**
     * DateModified upgrade class.
     *
     * @since 2.13.0
     */
    class DateModified extends \EDD\Recurring\Upgrades\Background\Upgrade
    {
        /**
         * Mark the upgrade as silent.
         *
         * @var boolean
         */
        protected $is_silent = true;
        /**
         * The number of database rows which should prevent the upgrade running via the background process.
         *
         * @var int
         */
        protected $warning_count = 0;
        /**
         * The number of items to process per step.
         *
         * @var int
         */
        protected $per_step = 100;
        /**
         * The name of the upgrade.
         *
         * @since 2.13.0
         * @var string
         */
        public static function get_upgrade_name(): string
        {
        }
        /**
         * Process the upgrade step.
         * The database is modified directly since Berlin will
         * always change the date modified to the current date/time.
         *
         * @since 2.13.0
         * @return void
         */
        public function process_step(): void
        {
        }
        /**
         * Get the items to process.
         *
         * @since 2.13.0
         * @param bool $count Whether to return the count of items.
         * @return array|bool
         */
        public function get_items($count = false)
        {
        }
        /**
         * Get the complete notification parameters.
         *
         * @since 2.13.0
         * @return array
         */
        public function get_complete_notification(): array
        {
        }
        /**
         * Get the in progress notification parameters.
         *
         * @since 2.13.0
         * @return array
         */
        public function get_in_progress_notification(): array
        {
        }
        /**
         * Get the CLI notification parameters.
         *
         * @since 2.13.0
         * @return array
         */
        public function get_cli_notification(): array
        {
        }
        /**
         * Mark the upgrade as complete.
         * Ensures that the step option is deleted.
         *
         * @since 2.13.0
         * @return void
         */
        protected function mark_complete()
        {
        }
    }
    // @codeCoverageIgnore
    /**
     * GatewayColumn upgrade class.
     *
     * @since 2.13.0
     */
    class GatewayColumn extends \EDD\Recurring\Upgrades\Background\Upgrade
    {
        /**
         * The number of database rows which should prevent the upgrade running via the background process.
         *
         * @var int
         */
        protected $warning_count = 0;
        /**
         * The number of items to process per step.
         *
         * @var int
         */
        protected $per_step = 100;
        /**
         * The name of the upgrade.
         *
         * @since 2.13.0
         * @var string
         */
        public static function get_upgrade_name(): string
        {
        }
        /**
         * Maybe schedule the background update.
         *
         * @since 2.13.0
         * @return void
         */
        public function maybe_schedule_background_update()
        {
        }
        /**
         * Process the upgrade step.
         * The database is modified directly since Berlin will
         * always change the date modified to the current date/time.
         *
         * @since 2.13.0
         * @return void
         */
        public function process_step(): void
        {
        }
        /**
         * Get the items to process.
         *
         * @since 2.13.0
         * @param bool $count Whether to return the count of items.
         * @return array|bool
         */
        public function get_items($count = false)
        {
        }
        /**
         * Get the complete notification parameters.
         *
         * @since 2.13.0
         * @return array
         */
        public function get_complete_notification(): array
        {
        }
        /**
         * Get the in progress notification parameters.
         *
         * @since 2.13.0
         * @return array
         */
        public function get_in_progress_notification(): array
        {
        }
        /**
         * Get the CLI notification parameters.
         *
         * @since 2.13.0
         * @return array
         */
        public function get_cli_notification(): array
        {
        }
    }
    // @codeCoverageIgnore
    /**
     * Notes upgrade class.
     *
     * @since 2.13.0
     */
    class Notes extends \EDD\Recurring\Upgrades\Background\Upgrade
    {
        /**
         * The number of database rows which should prevent the upgrade running via the background process.
         *
         * @var int
         */
        protected $warning_count = 0;
        /**
         * The name of the upgrade.
         *
         * @since 2.13.0
         * @var string
         */
        public static function get_upgrade_name(): string
        {
        }
        /**
         * Hook into actions and filters.
         *
         * @since 2.13.0
         */
        public static function get_subscribed_events()
        {
        }
        /**
         * Process the upgrade step.
         * The database is modified directly since Berlin will
         * always change the date modified to the current date/time.
         *
         * @since 2.13.0
         * @return void
         */
        public function process_step(): void
        {
        }
        /**
         * Get the items to process.
         *
         * @since 2.13.0
         * @param bool $count Whether to return the count of items.
         * @return array|bool
         */
        public function get_items($count = false)
        {
        }
        /**
         * Get the complete notification parameters.
         *
         * @since 2.13.0
         * @return array
         */
        public function get_complete_notification(): array
        {
        }
        /**
         * Get the in progress notification parameters.
         *
         * @since 2.13.0
         * @return array
         */
        public function get_in_progress_notification(): array
        {
        }
        /**
         * Get the CLI notification parameters.
         *
         * @since 2.13.0
         * @return array
         */
        public function get_cli_notification(): array
        {
        }
        /**
         * Marks the upgrade process as complete.
         *
         * @since 2.13.0
         * @return void
         */
        protected function mark_complete()
        {
        }
    }
    // @codeCoverageIgnore
    /**
     * StripeTrials upgrade class.
     *
     * @since 2.13.0
     */
    class StripeTrials extends \EDD\Recurring\Upgrades\Background\Upgrade
    {
        /**
         * The name of the upgrade.
         *
         * @since 2.13.0
         * @var string
         */
        public static function get_upgrade_name(): string
        {
        }
        /**
         * Process the upgrade step.
         *
         * @since 2.13.0
         * @return void
         */
        public function process_step(): void
        {
        }
        /**
         * Get the items to process.
         *
         * @since 2.13.0
         * @param bool $count Whether to return the count of items.
         * @return array|bool
         */
        public function get_items($count = false)
        {
        }
        /**
         * Get the complete notification parameters.
         *
         * @since 2.13.0
         * @return array
         */
        public function get_complete_notification(): array
        {
        }
        /**
         * Get the in progress notification parameters.
         *
         * @since 2.13.0
         * @return array
         */
        public function get_in_progress_notification(): array
        {
        }
        /**
         * Mark the upgrade as complete.
         * Ensures that the step option is deleted.
         *
         * @since 2.13.0
         * @return void
         */
        protected function mark_complete()
        {
        }
    }
}
namespace EDD\Recurring\Upgrades {
    /**
     * Class Loader
     *
     * @since 2.13.0
     * @package EDD\Upgrades
     */
    class Loader implements \EDD\EventManagement\SubscriberInterface
    {
        /**
         * Get the events to subscribe to.
         *
         * @since 2.13.0
         * @return array
         */
        public static function get_subscribed_events()
        {
        }
        /**
         * Add the upgrade events.
         *
         * @since 2.13.0
         * @return void
         */
        public function add_events()
        {
        }
    }
}
namespace EDD\Recurring\Utilities {
    /**
     * Date utility class.
     *
     * @since 2.13.1
     */
    class Date
    {
        /**
         * Get the GMT date for a date string.
         *
         * @since 2.13.1
         * @param string $date_string The date string to parse.
         * @return string|false The date created, or false on failure.
         */
        public static function get_gmdate_from_string(string $date_string)
        {
        }
    }
}
/**
 * Discount handling for Recurring.
 */
namespace EDD\Recurring\Admin\Discounts {
    /**
     * Adds the one time discount metadata to the discount.
     *
     * @since 2.12.0
     * @param array $args        The array of discount args.
     * @param int   $discount_id The discount ID.
     * @return void
     */
    function add_one_time_discount_meta($args, $discount_id)
    {
    }
    /**
     * Adds the one time discount setting to the discount screen.
     *
     * @since 2.12.0
     * @param int   $discount_id
     * @return void
     */
    function render_one_time_discount_setting($discount_id = 0)
    {
    }
}
/**
 * Export Actions
 *
 * @package   EDD\Recurring\Admin\Exports
 * @copyright Copyright (c) 2021, Sandhills Development, LLC
 * @license   GPL2+
 * @since     2.11.8
 */
namespace EDD_Recurring\Admin\Export {
    /**
     * Adds the Export Subscriptions form to the Export page.
     *
     * @since 2.13.0
     */
    function export_form($exporter_id)
    {
    }
}
/**
 * Roles and Capabilities
 *
 * @package     Recurring
 * @subpackage  Classes/Roles
 * @copyright   Copyright (c) 2022, Easy Digital Downloads
 * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
 * @since       2.11.9
 */
namespace EDD\Recurring\Roles {
    /**
     * Add new shop-specific capabilities
     *
     * @access public
     * @since 2.11.9
     * @global WP_Roles $wp_roles
     */
    function add_caps()
    {
    }
    /**
     * Remove core post type capabilities (called on uninstall)
     *
     * @since 2.11.9
     * @return void
     */
    function remove_caps()
    {
    }
}
/**
 * Recurring Email Functions
 *
 * @package    edd-recurring
 * @subpackage Emails
 * @copyright  Copyright (c) 2022, Easy Digital Downloads
 * @license    GPL2+
 * @since      2.12.0
 */
namespace EDD\Recurring\Emails {
    /**
     * Registers new email tags for recurring products.
     *
     * @since 2.12.0
     * @return void
     */
    function register_email_tags()
    {
    }
    /**
     * Gets the recurring details for the purchase receipt email.
     *
     * @since 2.12.0
     * @param int                    $object_id    The order ID. As of 2.12.4 this can also be a subscription ID.
     * @param null|\EDD\Recurring\Subscriptions\Subscription $email_object The subscription object.
     * @param string                 $context      The context of the email.
     * @return string
     */
    function subscription_details($object_id, $email_object = null, $context = 'order')
    {
    }
    /**
     * Gets the subscription ID for the email tag.
     *
     * @since 2.12.0
     * @param int $email_object_id The email object ID.
     * @return string
     */
    function subscription_id($email_object_id)
    {
    }
    /**
     * Gets the download name for the email.
     *
     * @since 2.12.0
     * @param array $item The cart item.
     * @return string
     */
    function get_download_name($item)
    {
    }
    /**
     * Parses the individual item recurring parameters with defaults.
     *
     * @since 2.12.0
     * @param array $item The cart item.
     * @return array
     */
    function get_recurring_args($item)
    {
    }
    /**
     * Gets the subscription name for the email.
     *
     * @since 2.12.4
     * @param int                                            $object_id    The order ID. As of 2.12.4 this can also be a subscription ID.
     * @param null|\EDD\Recurring\Subscriptions\Subscription $email_object The subscription object.
     * @return string
     */
    function subscription_name($object_id, $email_object = null)
    {
    }
}
/**
 * PayPal Commerce Functions
 *
 * @package    edd-recurring
 * @subpackage Gateways\PayPal
 * @copyright  Copyright (c) 2021, Sandhills Development, LLC
 * @license    GPL2+
 * @since      2.11.2
 */
namespace EDD_Recurring\Gateways\PayPal {
    /**
     * Builds the arguments to create a plan when upgrading a Software Licensing license.
     * In this scenario we need to sync the subscription's first renewal date with the expiration
     * date of the license. So if your license key expires in 6 months but you're upgrading to
     * a yearly plan, we want to charge the user $x today and have the first renewal be in
     * 6 months time.
     *
     * @internal Not intended for general use. May change without warning.
     *
     * @param \DateTime $renewal_date Desired date of the first renewal.
     * @param string    $product_id   PayPal product ID this plan is associated with.
     * @param array     $subscription Array of subscription data.
     *
     * @since    2.11.2
     * @return array Arguments that can be used in the API request to create a plan.
     * @throws \Exception If the billing cycle arguments are missing.
     */
    function _create_plan_args_for_sl_upgrade($renewal_date, $product_id, $subscription)
    {
    }
}
namespace {
    /**
     * The main function responsible for returning the one true EDD_Recurring Instance
     * to functions everywhere.
     *
     * Use this function like you would a global variable, except without needing
     * to declare the global.
     *
     * Example: <?php $recurring = EDD_Recurring(); ?>
     *
     * @since v1.0
     *
     * @return EDD\Recurring\Plugin|void The one true EDD_Recurring Instance (provided requirements have been met).
     */
    function EDD_Recurring()
    {
    }
    /**
     * Display the customer's subscriptions on the customer card
     *
     * @since  2.4
     * @param  object $customer The Customer object
     * @return void
     */
    function edd_recurring_customer_subscriptions_list($customer)
    {
    }
    /**
     * Registers a customer view for subscriptions.
     *
     * @since 2.12.0
     * @param array $views
     * @return array
     */
    function edd_recurring_register_subscription_customer_views($views)
    {
    }
    /**
     * Registers a subscriptions tab for the customer details screen.
     *
     * @since 2.12.0
     * @param array $tabs
     * @return array
     */
    function edd_recurring_register_subscription_customer_tab($tabs)
    {
    }
    /**
     * Outputs the customer subscriptions table.
     *
     * @since 2.12.0
     * @param EDD_Customer $customer
     * @return void
     */
    function edd_recurring_customer_subscription_view($customer)
    {
    }
    /**
     * Display a customer's recurring profile IDs on the customer card if they have them
     *
     * @since  2.4.2
     * @param  object $customer Customer Ojbect
     * @return void
     */
    function edd_recurring_customer_profile_ids($customer)
    {
    }
    /**
     * Allow the customer recount tool to include edd_subscription payment status.
     *
     * @since  2.4.5
     * @param  array $payment_statuses Array of post statuses.
     * @return array                   Array of post statuses with edd_subscription included.
     */
    function edd_recurring_customer_recount_status($payment_statuses)
    {
    }
    /**
     * Allow the customer recount tool to process a subscription payment.
     *
     * @todo Deprecate after EDD 3.0.
     *
     * @since  2.4.5
     * @param  bool   $ret      Base status for if the payment should be processed.
     * @param  object $payment  WP_Post object of the payment being checked.
     * @return bool             If it's an edd_subscription, return true, otherwise return the supplied return.
     */
    function edd_recurring_should_process_payment($ret, $payment)
    {
    }
    /**
     * Find any customers with subscription customer IDs
     *
     * @since  2.4
     * @param  array $items Current items to remove from the reset
     * @return array        The items with any subscription customer entires
     */
    function edd_recurring_reset_delete_sub_customer_ids($items)
    {
    }
    /**
     * Isolate any subscriber Customer IDs to remove from the db on reset
     *
     * @since  2.4
     * @param  stirng $type The type of item to remove from the initial findings
     * @param  array  $item The item to remove
     * @return string       The determine item type
     */
    function edd_recurring_reset_recurring_customer_ids($type, $item)
    {
    }
    /**
     * Add an SQL item to the reset process for the usermeta with the given umeta_ids
     *
     * @since  2.4
     * @param  array  $sql An Array of SQL statements to run
     * @param  string $ids The IDs to remove for the given item type
     * @return array       Returns the array of SQL statements with statements added
     */
    function edd_recurring_reset_customer_queries($sql, $ids)
    {
    }
    /**
     * Cancels subscriptions and deletes them when a customer is deleted
     *
     * @since  2.5
     * @param  int  $customer_id ID of the customer being deleted
     * @param  bool $confirm     Whether site admin has confirmed they wish to delete the customer
     * @param  bool $remove_data Whether associated data should be deleted
     * @return void
     */
    function edd_recurring_delete_customer_and_subscriptions($customer_id, $confirm, $remove_data)
    {
    }
    /**
     * Cancels subscriptions when customer is anonymized.
     *
     * @since  2.12.0
     * @param  EDD_Customer $customer The EDD_Customer object.
     * @return void
     */
    function edd_recurring_anonymize_customer($customer)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Variable Prices
    |--------------------------------------------------------------------------
    */
    /**
     * Meta box table header
     *
     * @access      public
     * @since       1.0
     * @return      void
     */
    function edd_recurring_metabox_head($download_id)
    {
    }
    /**
     * Add a hook to the variable price rows that all of our other fields can hook into
     *
     * @access      public
     * @since       2.6
     * @return      void
     */
    function edd_recurring_price_row_hook($download_id, $price_id, $args)
    {
    }
    /**
     * Meta box is recurring yes/no field
     *
     * @access      public
     * @since       1.0
     * @return      void
     */
    function edd_recurring_metabox_recurring($download_id, $price_id, $args)
    {
    }
    /**
     * Meta box free trial field
     *
     * @access      public
     * @since       1.0
     * @return      void
     */
    function edd_recurring_metabox_free_trial($download_id, $price_id, $args)
    {
    }
    /**
     * Meta box recurring period field
     *
     * @access      public
     * @since       1.0
     * @return      void
     */
    function edd_recurring_metabox_period($download_id, $price_id, $args)
    {
    }
    /**
     * Meta box recurring times field
     *
     * @access      public
     * @since       1.0
     * @return      void
     */
    function edd_recurring_metabox_times($download_id, $price_id, $args)
    {
    }
    /**
     * Meta box recurring fee field
     *
     * @access      public
     * @since       1.1
     * @return      void
     */
    function edd_recurring_metabox_signup_fee($download_id, $price_id, $args)
    {
    }
    /**
     * Meta fields for EDD to save
     *
     * @access      public
     * @since       1.0
     * @return      array
     */
    function edd_recurring_save_single($fields)
    {
    }
    /**
     * Store the trial options.
     * As of 2.12.0, if the product is variable, any stray single price meta is deleted.
     *
     * @access      public
     * @since       2.6
     * @return      void
     */
    function edd_recurring_save_trial_period($post_id, $post)
    {
    }
    /*
    |--------------------------------------------------------------------------
    | Single Price Options
    |--------------------------------------------------------------------------
    */
    /**
     * Add a hook to the Prices metabox that all of our other fields can hook into
     *
     * @access      public
     * @since       2.6
     * @return      void
     */
    function edd_recurring_metabox_hook($download_id)
    {
    }
    /**
     * Meta box is recurring yes/no field
     *
     * @access      public
     * @since       1.0
     * @return      void
     */
    function edd_recurring_metabox_single_recurring($download_id)
    {
    }
    /**
     * Meta box recurring period field
     *
     * @access      public
     * @since       1.0
     * @return      void
     */
    function edd_recurring_metabox_single_period($download_id)
    {
    }
    /**
     * Meta box recurring times field
     *
     * @access      public
     * @since       1.0
     * @return      void
     */
    function edd_recurring_metabox_single_times($download_id)
    {
    }
    /**
     * Meta box recurring signup fee field
     *
     * @access      public
     * @since       1.1
     * @return      void
     */
    function edd_recurring_metabox_single_signup_fee($download_id)
    {
    }
    /**
     * Free trial options
     *
     * @access      public
     * @since       2.6
     * @return      void
     */
    function edd_recurring_metabox_trial_options($download_id)
    {
    }
    /**
     * Recurring options for Custom Prices
     *
     * @access      public
     * @since       2.5
     * @return      void
     */
    function edd_recurring_metabox_custom_options($download_id)
    {
    }
    // add_action( 'edd_after_price_field', 'edd_recurring_metabox_custom_options', 10 );
    /**
     * Display Subscription transaction IDs for parent payments
     *
     * @since 2.4.4
     * @param $payment_id
     */
    function edd_display_subscription_txn_ids($payment_id)
    {
    }
    /**
     * If the EDD Subscriber is set as the default role, display an admin notice
     * warning that it will be deprecated in 2.12.0.
     *
     * @since 2.11.7
     * @return void
     */
    function edd_recurring_warn_subscriber_default_role()
    {
    }
    /**
     * Shows the checkbox to cancel a subscription in the refund modal.
     *
     * @since 2.10.4
     * @param \EDD\Orders\Order $order The order object (EDD 3.0).
     * @return void
     */
    function edd_recurring_show_cancel_checkbox($order)
    {
    }
    /**
     * Cancels a subscription during the refund process in EDD 3.0.
     *
     * @since 2.10.4
     * @param int $order_id The original order ID.
     * @return void
     */
    function edd_recurring_cancel_subscription_on_order_refund($order_id)
    {
    }
    /**
     * Report Data Callbacks
     *
     * Queries performed to get data used in reports.
     *
     * @package   edd-recurring
     * @copyright Copyright (c) 2021, Sandhills Development, LLC
     * @license   GPL2+
     */
    /**
     * Fetches the number of subscription renewals that were processed during this report period.
     *
     * @since 2.10.1
     * @return int
     */
    function edd_recurring_subscriptions_created_number_callback()
    {
    }
    /**
     * Fetches the number of subscription renewals that were processed during this report period.
     *
     * @since 2.10.1
     * @return int
     */
    function edd_recurring_renewals_number_callback()
    {
    }
    /**
     * Fetches the number of subscription renewals that were refunded during this report period.
     *
     * @since 2.10.1
     * @return int
     */
    function edd_recurring_renewals_refunded_number_callback()
    {
    }
    /**
     * Queries the database to get the gross renewal earnings.
     *
     * @since 2.10.1
     * @return float
     */
    function edd_recurring_get_gross_renewal_earnings_for_report_period()
    {
    }
    /**
     * Queries the database to get the renewal earnings refunded.
     *
     * @since 2.10.1
     * @return float
     */
    function edd_recurring_get_refunded_amount_for_report_period()
    {
    }
    /**
     * Load the admin javascript
     *
     * @access      public
     * @since       1.0
     * @return      void
     */
    function edd_recurring_admin_scripts($hook)
    {
    }
    /**
     * Register our settings section
     *
     * @since  2.4
     * @return array
     */
    function edd_recurring_settings_section($sections)
    {
    }
    /**
     * Register our settings.
     *
     * @since  1.0
     * @return array
     */
    function edd_recurring_settings($settings)
    {
    }
    /**
     * Adds the Recurring email settings to the Recurring section on the Emails tab.
     *
     * @since 2.11.4
     * @param array $settings The settings array.
     * @return array
     */
    function edd_recurring_email_settings($settings)
    {
    }
    /**
     * Displays the subscription renewal reminders options
     *
     * @since       2.4
     *
     * @param        $args array option arguments
     *
     * @return      void
     */
    function edd_recurring_renewal_reminders_settings($args)
    {
    }
    /**
     * Displays the subscription expiration reminders options
     *
     * @since       2.4
     *
     * @param        $args array option arguments
     *
     * @return      void
     */
    function edd_recurring_expiration_reminders_settings($args)
    {
    }
    /**
     * Add menu page for reminder emails
     * *
     *
     * @access      private
     * @since       2.4
     * @return      void
     */
    function edd_recurring_add_notices_page()
    {
    }
    /**
     * Removes the Subscription Reminder Notice menu link
     *
     * @since       2.4
     * @return      void
     */
    function edd_recurring_hide_reminder_notice_page()
    {
    }
    /**
     * Renders the add / edit subscription reminder notice screen
     *
     * @since 2.4
     */
    function edd_recurring_subscription_reminder_notice_edit()
    {
    }
    /**
     * Processes the creation of a new reminder notice
     *
     * @since 2.4
     *
     * @param array $data The post data
     *
     * @return void
     */
    function edd_recurring_process_add_reminder_notice($data)
    {
    }
    /**
     * Processes the update of an existing reminder notice
     *
     * @since 2.4
     *
     * @param array $data The post data
     *
     * @return void
     */
    function edd_recurring_process_update_reminder_notice($data)
    {
    }
    /**
     * Processes the deletion of an existing reminder notice
     *
     * @since 2.4
     *
     * @param array $data The post data
     *
     * @return void
     */
    function edd_recurring_process_delete_reminder_notice($data)
    {
    }
    /**
     * Sends a test email for a reminder notice
     *
     * @since 2.4
     *
     * @param array $data The post data
     *
     * @return void
     */
    function edd_recurring_process_send_test_reminder_notice($data)
    {
    }
    /**
     * Add additional text to Item Quantities setting to explain why it is sometimes disabled
     *
     * @since 2.5.2
     *
     * @param array $settings
     *
     * @return array
     */
    function edd_recurring_item_quantities_description($settings)
    {
    }
    /**
     * Add additional text to Guest Checkout setting to explain why it is disabled
     *
     * @since 2.5.2
     *
     * @param array $settings
     *
     * @return array
     */
    function edd_recurring_guest_checkout_description($settings)
    {
    }
    /**
     * Gets the URL for Recurring's email settings.
     *
     * @since 2.11.4
     * @return string
     */
    function edd_recurring_get_email_settings_url()
    {
    }
    /**
     * Adds the Recurring settings page titles.
     *
     * @since 2.12.0
     * @param string $title
     * @return string
     */
    function edd_recurring_settings_page_titles($title)
    {
    }
    // @codeCoverageIgnore
    /**
     * Render the Subscriptions table
     *
     * @access      public
     * @since       2.4
     * @return      void
     */
    function edd_subscriptions_page()
    {
    }
    /**
     * Recurring Subscription Details
     *
     * @description Outputs the subscriber details
     * @since       2.5
     */
    function edd_recurring_new_subscription_details()
    {
    }
    /**
     * Gets the tabs for existing subscriptions.
     *
     * @since 3.0
     * @return array
     */
    function edd_recurring_get_subscription_tabs()
    {
    }
    /**
     * Recurring Subscription Details
     *
     * @description Outputs the subscriber details
     * @since       2.4
     */
    function edd_recurring_subscription_details()
    {
    }
    /**
     * Handles subscription update
     *
     * @access      public
     * @since       2.4
     * @return      void
     */
    function edd_recurring_process_subscription_update()
    {
    }
    /**
     * Handles subscription creation
     *
     * @access      public
     * @since       2.5
     * @return      void
     */
    function edd_recurring_process_subscription_creation()
    {
    }
    /**
     * Handles subscription cancellation
     *
     * @access      public
     * @since       2.4
     * @return      void
     */
    function edd_recurring_process_subscription_cancel()
    {
    }
    /**
     * Handles adding a manual renewal payment
     *
     * @access      public
     * @since       2.4
     * @return      void
     */
    function edd_recurring_process_add_renewal_payment()
    {
    }
    /**
     * Handles retrying a renewal payment for a failing subscription
     *
     * @access      public
     * @since       2.8
     * @return      void
     */
    function edd_recurring_process_renewal_charge_retry()
    {
    }
    /**
     * Handles adding a subscription note
     *
     * @access      public
     * @since       2.7
     * @return      void
     */
    function edd_recurring_process_add_subscription_note()
    {
    }
    /**
     * Handles subscription deletion
     *
     * @access      public
     * @since       2.4
     * @return      void
     */
    function edd_recurring_process_subscription_deletion()
    {
    }
    /**
     * When an order is updated, maybe update the customer ID for the related subscription.
     *
     * @since 2.11.8
     * @param int $order_id
     * @return void
     */
    function edd_recurring_update_customer_id_edited_purchase($order_id)
    {
    }
    /**
     * Find all subscription IDs
     *
     * @since  2.4
     * @param  array $items Current items to remove from the reset
     * @return array        The items with all subscriptions
     */
    function edd_recurring_reset_delete_subscriptions($items)
    {
    }
    /**
     * Isolate the subscription items during the reset process
     *
     * @since  2.4
     * @param  stirng $type The type of item to remove from the initial findings
     * @param  array  $item The item to remove
     * @return string       The determine item type
     */
    function edd_recurring_reset_recurring_type($type, $item)
    {
    }
    /**
     * Add an SQL item to the reset process for the given subscription IDs
     *
     * @since  2.4
     * @param  array  $sql An Array of SQL statements to run
     * @param  string $ids The IDs to remove for the given item type
     * @return array       Returns the array of SQL statements with subscription statement added
     */
    function edd_recurring_reset_queries($sql, $ids)
    {
    }
    /**
     * Populates the subscription details (price, recurring amount, period, expiration) on product selection.
     *
     * @since 2.11.7
     * @return void
     */
    function edd_recurring_update_subscription_product_details()
    {
    }
    /**
     * Upgrade Functions
     *
     * @package     EDD
     * @subpackage  Admin/Upgrades
     * @copyright   Copyright (c) 2015, Pippin Williamson
     * @license     http://opensource.org/licenses/gpl-2.0.php GNU Public License
     * @since       2.4
     */
    /**
     * Perform automatic database upgrades when necessary
     *
     * @since 2.7
     * @return void
    */
    function edd_recurring_do_automatic_upgrades()
    {
    }
    /**
     * Recurring Payments Upgrade Notices
     *
     * @since 2.4
     *
     */
    function edd_show_recurring_upgrade_notices()
    {
    }
    /**
     * Migrates pre 2.4 subscriptions to new database
     *
     * @since  2.4
     * @return void
     */
    function edd_recurring_v24_migrate_subscriptions()
    {
    }
    /**
     * Retrieve the recurring profile ID for a legacy subscription
     *
     * @since  2.4
     * @return string
     */
    function edd_recurring_get_legacy_profile_id(\EDD_Payment $payment)
    {
    }
    /**
     * Fixes incorrect stripe customer association from the EDD Recurriong 2.4 upgrade routine.
     *
     * It was discovered that the upgrade routine for 2.4 resulted in a few subscribers getting assigned
     * the same customer ID from Stripe. This resulted in occasional new signups through Stripe to have
     * the charges assigned to the incorrect Stripe customer record. It also caused the credit / debit
     * card entered on checkout during purchase to get added to the wrong customer record in Stripe.
     *
     * See https://github.com/easydigitaldownloads/edd-recurring/issues/355
     *
     * @since  2.4.6
     * @return void
     */
    function edd_recurring_fix_24_stripe_customers()
    {
    }
    /**
     * Determines if we need to fix incorrect Stripe customers from the 2.4 upgrade routine
     *
     * @since  2.4.6
     * @return void
     */
    function edd_recurring_needs_24_stripe_fix()
    {
    }
    /**
     * Adds subscription_id meta data to renewal payments (including refunded renewals) so they can be queried for reports
     *
     * See https://github.com/easydigitaldownloads/edd-recurring/issues/626
     *
     * @since  2.7
     * @return void
     */
    function edd_recurring_27_add_subscription_id_meta()
    {
    }
    /**
     * Removes pre-existing logs for the PayPal Pro & Express payment gateway error logs
     *
     * @since  2.7.14
     * @return void
     */
    function edd_recurring_paypalproexpress_logs()
    {
    }
    /**
     * Adds columns to the EDD_Subscriptions table for initial_tax and recurring_tax
     *
     * @since  2.7.17
     * @return void
     */
    function edd_recurring_add_tax_columns_to_subs_table()
    {
    }
    /**
     * Adds columns to the EDD_Subscriptions table for initial_tax and recurring_tax
     *
     * @since  2.7.17
     * @return void
     */
    function edd_recurring_cancel_subs_if_times_met()
    {
    }
    /**
     * Manages the addition of the `price_id` column in the database.
     *
     * @since 2.9.0
     */
    function edd_upgrade_render_recurring_add_price_id_column()
    {
    }
    /**
     * Manages the addition of the `price_id` column in the database.
     *
     * @since 2.9.3
     */
    function edd_upgrade_render_recurring_update_price_id_column()
    {
    }
    /**
     * Registers the upgrade routine to add the `price_id` column to the database.
     *
     * @since 2.9.0
     */
    function edd_recurring_register_batch_subscription_price_id_column()
    {
    }
    /**
     * Includes the files to run the `price_id` column addition routine.
     *
     * @since 2.9.0
     *
     * @param string $class Batch processor class name.
     */
    function edd_include_subscription_price_id_batch_processor($class)
    {
    }
    /**
     * Registers the upgrade routine to update the `price_id` column to the database.
     *
     * @since 2.9.3
     */
    function edd_recurring_register_batch_subscription_price_id_column_update()
    {
    }
    /**
     * Includes the files to run the `price_id` column update routine.
     *
     * @since 2.9.3
     *
     * @param string $class Batch processor class name.
     */
    function edd_include_subscription_price_id_update_batch_processor($class)
    {
    }
    /**
     * PayPal plan IDs need to be wiped in case they were created with invalid intervals.
     * @link https://github.com/easydigitaldownloads/edd-recurring/issues/1502
     *
     * @since 2.11.2
     */
    function edd_recurring_wipe_invalid_paypal_plan_ids()
    {
    }
    /**
     * Updates the EDD Subscriber role to have the `read` capability.
     *
     * @since 2.11.7
     * @return void
     */
    function edd_recurring_fix_edd_subscriber_role()
    {
    }
    /**
     * Silent upgrade to register subscription roles.
     *
     * @since 2.12.0
     * @return void
     */
    function edd_recurring_update_subscription_roles()
    {
    }
    /**
     * Update the renewal order item status to `complete` during the EDD 3.0 migration process.
     *
     * @since 2.12.0
     * @param array $order_item_args
     * @return array
     */
    function edd_recurring_30_migration_order_item_creation_data($order_item_args)
    {
    }
    /**
     * Manages the upgrade to mark order items with the edd_subscription status as complete.
     *
     * @since 2.11.7
     */
    function edd_upgrade_render_recurring_update_order_item_status()
    {
    }
    /**
     * Registers the order item status batch updater.
     *
     * @since 2.11.7
     * @return void
     */
    function edd_recurring_register_order_item_status_update()
    {
    }
    /**
     * Loads the order items updater tool.
     *
     * @since 2.11.7
     * @param string $class
     * @return void
     */
    function edd_recurring_include_order_items_processor($class)
    {
    }
    /**
     * Update customer ID on subscriptions when payment's customer ID is updated
     *
     * @deprecated 2.11.8 in favor of `edd_recurring_update_customer_id_edited_purchase`
     * @access      public
     * @since       2.4.15
     * @return      void
     */
    function edd_recurring_update_customer_id_on_payment_update($meta_id, $object_id, $meta_key, $meta_value)
    {
    }
    /**
     * Display Subscription Payment Notice
     *
     * @description Adds a subscription payment indicator within the single payment view "Update Payment" metabox (top)
     * @since       2.4
     * @deprecated 2.12.0
     *
     * @param $payment_id
     *
     */
    function edd_display_subscription_payment_meta($payment_id)
    {
    }
    /**
     * Displays an admin notice about PHP version requirements.
     *
     * @since 3.0
     */
    function edd_recurring_php_notice()
    {
    }
    /**
     * List subscription (sub) payments of a particular parent payment
     *
     * The parent payment ID is the very first payment made. All payments made after for the profile are sub.
     *
     * @since  1.0
     * @deprecated 2.12.0
     * @param int $payment_id The current payment ID.
     * @return void
     */
    function edd_recurring_display_parent_payment($payment_id = 0)
    {
    }
    /**
     * Load the javascript which shows the "cancel subscription" checkbox while refunding a payment.
     * This is being done here instead of through wp_enqueue_scripts because it matches the way the
     * button for "Refund Charge in Stripe" is output. See the function called "edd_stripe_admin_js".
     *
     * @deprecated  2.12.0
     * @since       2.9.3
     * @param       int $payment_id The id of the payment being viewed, and potentially refunded.
     * @return      void
     */
    function edd_recurring_cancel_subscription_during_refund_option($payment_id = 0)
    {
    }
    /**
     * Cancel subscription when refunding a payment, if that was selected by the admin.
     *
     * @since       2.9.3
     * @deprecated 2.12.0
     * @param       EDD_Payment $payment The EDD_Payment object being viewed, and potentially refunded.
     * @return      void
     */
    function edd_recurring_cancel_subscription_during_refund($payment)
    {
    }
    /**
     * Set colspan on submit row
     *
     * This is a little hacky, but it's the best way to adjust the colspan on the submit row to make sure it goes full width
     *
     * @since       1.0
     * @deprecated  2.12.1
     * @return      void
     */
    function edd_recurring_metabox_colspan()
    {
    }
    /**
     * Adds a section for order subscriptions to EDD 3.0.
     *
     * @since 2.12.0
     * @deprecated 2.13.0
     * @param array     $sections
     * @param EDD_Order $order
     * @return array
     */
    function edd_recurring_subscription_section($sections, $order)
    {
    }
    /**
     * Outputs the subscription details in EDD 3.0.
     *
     * @since 2.12.0
     * @deprecated 2.13.0
     * @param EDD_Order $order
     * @return void
     */
    function edd_recurring_display_subscription_order_details($order)
    {
    }
    /**
     * EDD Recurring Functions
     *
     * @package     EDD Recurring
     * @subpackage  Functions
     */
    /**
     * Gets the (first) subscription related to an order
     *
     * @since 2.10.4
     * @param \EDD\Orders\Order $order The order object (EDD 3.0).
     * @return array|bool              Returns an array of subscriptions, or false.
     */
    function edd_recurring_get_order_subscriptions($order)
    {
    }
    /**
     * Returns a list of all possible statuses for a subscription.
     *
     * @since 2.11.8
     *
     * @return array
     */
    function edd_recurring_get_subscription_statuses()
    {
    }
    /**
     * Gets the recurring price text for notices.
     *
     * @since 2.11.8
     * @param array  $details The subscription details.
     * @param string $recurring_amount The recurring amount, if known. Added in 2.11.9.
     * @return string
     */
    function edd_recurring_get_subscription_billing_text($details, $recurring_amount = '')
    {
    }
    /**
     * Gets the frequency labels.
     *
     * @since 2.12.0
     * @param string  $period The period.
     * @param integer $count The count.
     * @return string
     */
    function edd_recurring_get_frequency_label($period, $count = 1)
    {
    }
    /**
     * Modify the EDD product dropdown to query only products with Recurring enabled.
     *
     * @param array $args The array of parameters for the product dropdown.
     * @return array
     */
    function edd_recurring_product_dropdown_recurring_only($args)
    {
    }
    /**
     * In EDD 3.0, if an order item is part of a renewal,
     * make sure the status is set to complete instead of edd_subscription.
     *
     * @since 2.11.7
     * @param string $old_status    The old order item status.
     * @param string $new_status    The new order item status.
     * @param int    $order_item_id The order item ID.
     * @return void
     */
    function edd_recurring_update_order_item_status($old_status, $new_status, $order_item_id)
    {
    }
    /**
     * Adds icons for recurring order status badges in EDD 3.0
     *
     * @since 2.12.0
     * @param string $icon HTML of the icon.
     * @param string $order_status  Order status.
     * @return string
     */
    function edd_recurring_order_status_badges($icon, $order_status)
    {
    }
    /**
     * Gets the recurring one time discount meta.
     *
     * @since 2.12.0
     * @param int $discount_id The discount ID.
     * @return string
     */
    function edd_recurring_get_discount_renewal_meta($discount_id)
    {
    }
    /**
     * Gets all subscription statuses which are considered to be active.
     *
     * @since 2.12.0
     * @return array
     */
    function edd_recurring_get_active_subscription_statuses()
    {
    }
    /**
     * Gets an array of subscription statuses which can be cancelled.
     *
     * @since 2.12.0
     * @return array
     */
    function edd_recurring_get_cancellable_statuses()
    {
    }
    /**
     * Checks if the new email templates are registered.
     *
     * @since 2.12.4
     * @return bool
     */
    function edd_recurring_are_email_templates_registered()
    {
    }
    /**
     * Gets the customer update URI.
     *
     * @since 2.13.1
     * @param \EDD\Recurring\Subscriptions\Subscription $subscription The subscription object.
     * @return string The customer update URI.
     */
    function edd_recurring_get_customer_update_uri($subscription): string
    {
    }
    // @codeCoverageIgnore
    /**
     * Gets a subscriber object.
     *
     * @since 2.12.3
     * @param string|int $id_or_email The user ID or email address.
     * @param bool       $by_user_id  Whether the ID is a user ID.
     *
     * @return EDD_Recurring_Subscriber|bool
     */
    function edd_recurring_get_subscriber($id_or_email, $by_user_id = \false)
    {
    }
    // @codeCoverageIgnore
    /**
     * Adds a meta row to the database for a subscription.
     *
     * @since 2.13.0
     * @param int    $subscription_id The subscription ID.
     * @param string $meta_key        The meta key.
     * @param mixed  $meta_value      The meta value.
     * @param bool   $unique          Whether the meta key should be unique.
     * @return bool
     */
    function edd_recurring_add_subscription_meta($subscription_id, $meta_key, $meta_value, $unique = \false)
    {
    }
    /**
     * Remove meta data matching criteria from an subscription.
     *
     * You can match based on the key, or key and value. Removing based on key and value, will keep from removing duplicate
     * meta data with the same key. It also allows removing all meta data matching key, if needed.
     *
     * @since 2.13.0
     *
     * @param int    $subscription_id   Order ID.
     * @param string $meta_key   Meta data name.
     * @param mixed  $meta_value Optional. Meta data value. Must be serializable if non-scalar. Default empty.
     *
     * @return bool True on success, false on failure.
     */
    function edd_recurring_delete_subscription_meta($subscription_id, $meta_key, $meta_value = '')
    {
    }
    /**
     * Retrieve subscription meta field for an subscription.
     *
     * @since 2.13.0
     *
     * @param int    $subscription_id  Order ID.
     * @param string $key       Optional. The meta key to retrieve. By default, returns data for all keys. Default empty.
     * @param bool   $single    Optional, default is false. If true, return only the first value of the specified meta_key.
     *                          This parameter has no effect if meta_key is not specified.
     *
     * @return mixed Will be an array if $single is false. Will be value of meta data field if $single is true.
     */
    function edd_recurring_get_subscription_meta($subscription_id, $key = '', $single = \false)
    {
    }
    /**
     * Update subscription meta field based on subscription ID.
     *
     * Use the $prev_value parameter to differentiate between meta fields with the
     * same key and subscription ID.
     *
     * If the meta field for the subscription does not exist, it will be added.
     *
     * @since 2.13.0
     *
     * @param int    $subscription_id   Order ID.
     * @param string $meta_key   Meta data key.
     * @param mixed  $meta_value Meta data value. Must be serializable if non-scalar.
     * @param mixed  $prev_value Optional. Previous value to check before removing. Default empty.
     *
     * @return int|bool Meta ID if the key didn't exist, true on successful update, false on failure.
     */
    function edd_recurring_update_subscription_meta($subscription_id, $meta_key, $meta_value, $prev_value = '')
    {
    }
    /**
     * Delete everything from subscription meta matching meta key.
     *
     * @since 2.13.0
     * @param string $meta_key Key to search for when deleting.
     * @return bool Whether the subscription meta key was deleted from the database.
     */
    function edd_recurring_delete_subscription_meta_by_key($meta_key)
    {
    }
    /**
     * Gets a subscription object.
     *
     * @since 2.12.3
     * @param int $id The subscription ID.
     * @return false|EDD_Subscription
     */
    function edd_recurring_get_subscription($id)
    {
    }
    /**
     * Gets a subscription object by a specific field.
     *
     * @since 2.12.3
     * @param string $field The field to search by.
     * @param string $value The value to search for.
     * @return false|EDD_Subscription
     */
    function edd_recurring_get_subscription_by($field, $value)
    {
    }
    /**
     * Trash a subscription.
     *
     * @since 2.13.0
     * @param int $subscription_id The subscription ID.
     * @return bool
     */
    function edd_recurring_trash_subscription($subscription_id)
    {
    }
    /**
     * Gets a list of subscriptions from the database.
     *
     * @since 2.13.0
     * @param array $args Optional arguments.
     * @return array
     */
    function edd_recurring_get_subscriptions($args = array())
    {
    }
    /**
     * Counts the number of subscriptions in the database.
     *
     * @since 2.13.0
     * @param array $args Optional arguments.
     * @return int
     */
    function edd_recurring_count_subscriptions($args = array())
    {
    }
    /**
     * Adds a subscription to the database.
     *
     * @since 2.13.0
     * @param array $data {
     *    Array of subscription data.
     *    @type int    $customer_id
     *    @type string $period
     *    @type string $initial_amount
     *    @type string $initial_tax_rate
     *    @type string $initial_tax
     *    @type string $recurring_amount
     *    @type string $recurring_tax_rate
     *    @type string $recurring_tax
     *    @type string $bill_times
     *    @type string $transaction_id
     *    @type string $parent_payment_id
     *    @type string $product_id
     *    @type string $price_id
     *    @type string $created
     *    @type string $expiration
     *    @type string $trial_period
     *    @type string $status
     *    @type string $profile_id
     *    @type string $notes
     * }
     * @return int|false ID of the newly created subscription, or false on failure.
     */
    function edd_recurring_add_subscription($data = array())
    {
    }
    /**
     * Deletes a subscription from the database.
     *
     * @since 2.13.0
     * @param int $subscription_id The subscription ID.
     * @return bool
     */
    function edd_recurring_delete_subscription(int $subscription_id)
    {
    }
    /**
     * Updates a subscription in the database.
     *
     * @since 2.13.0
     * @param int   $subscription_id The subscription ID.
     * @param array $data            Array of subscription data.
     * @return bool
     */
    function edd_recurring_update_subscription(int $subscription_id, $data = array())
    {
    }
    /**
     * Retrieve PayPal API credentials
     *
     * @access      public
     * @since       2.4
     */
    function edd_recurring_get_paypal_api_credentials()
    {
    }
    /**
     * Installs Recurring.
     *
     * @since 2.4
     *
     * @return void
     */
    function edd_recurring_install()
    {
    }
    /**
     * Registers the EDD subscription log post type, and
     * edd_log_type taxonomy if it does not exist.
     *
     * @since 2.10.1
     * @return void
     */
    function edd_recurring_register_log_type()
    {
    }
}

namespace {
	class_alias( \EDD\Recurring\Plugin::class, 'EDD_Recurring' );
	class EDD_Recurring_Cron extends \EDD\Recurring\Cron\Handler {}
	class EDD_Recurring_Emails extends \EDD\Recurring\Legacy\Emails {}
	class EDD_Recurring_Reminders extends \EDD\Recurring\Legacy\Reminders {}
	class EDD_Recurring_Summary_Widget extends \EDD\Recurring\Admin\Dashboard\Widget {}
    /**
     * The protected properties below are exposed publicly via __get / __set / __isset
     * magic on the parent — declared here as @property so PHPStan can resolve them at
     * level max without `protected.access` errors.
     *
     * @property int $id
     * @property int $customer_id
     * @property string $period
     * @property string $initial_amount
     * @property string $initial_tax_rate
     * @property string $initial_tax
     * @property string $recurring_amount
     * @property string $recurring_tax_rate
     * @property string $recurring_tax
     * @property int $bill_times
     * @property string $transaction_id
     * @property int $parent_payment_id
     * @property int $product_id
     * @property int $price_id
     * @property string $created
     * @property string $date_modified
     * @property string $expiration
     * @property string $trial_period
     * @property string $status
     * @property string $profile_id
     * @property string $gateway
     * @property \EDD_Customer $customer
     */
	class EDD_Subscription extends \EDD\Recurring\Subscriptions\Subscription {}
	class EDD_Subscription_Reports_Table extends \EDD\Recurring\Admin\Subscriptions\ListTable {}
	class EDD_Subscriptions_DB extends \EDD\Recurring\Legacy\Database {}
}

namespace EDD\Recurring\Legacy {
    /**
     * The protected properties below are exposed publicly via __get / __set / __isset
     * magic on the parent — declared here as @property so PHPStan can resolve them at
     * level max without `protected.access` errors.
     *
     * @property int $id
     * @property int $customer_id
     * @property string $period
     * @property string $initial_amount
     * @property string $initial_tax_rate
     * @property string $initial_tax
     * @property string $recurring_amount
     * @property string $recurring_tax_rate
     * @property string $recurring_tax
     * @property int $bill_times
     * @property string $transaction_id
     * @property int $parent_payment_id
     * @property int $product_id
     * @property int $price_id
     * @property string $created
     * @property string $date_modified
     * @property string $expiration
     * @property string $trial_period
     * @property string $status
     * @property string $profile_id
     * @property string $gateway
     * @property \EDD_Customer $customer
     */
	class EDD_Subscription extends \EDD\Recurring\Subscriptions\Subscription {}
}
