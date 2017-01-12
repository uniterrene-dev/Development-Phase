<?php

function registration_form() 
{

    echo '
    <style>
    div {
        margin-bottom:2px;
    }
     
    input{
        margin-bottom:4px;
    }
    </style>
    ';
 
    echo '
    <div class="container">
		<div class="vip-form-box">
    
    <form action="" method="post" name="vip-form" id="vip-form" class="form-vip">
    <section id="vip-form" class="vip-form-div">
	
      <div class="vip-form-box-left clearfix">
       <li class="vip-form-box-field">
        <div class="vip-label">
         <label> Full Name <span class="required">*</span> </label> </div>
        <div class="vip-fields"> <input name="first_name" placeholder="" value="" type="text" required> </div>        
       </li>
       <li class="vip-form-box-field">
        <div class="vip-label">
         <label> Last Name <span class="required">*</span> </label> </div>
        <div class="vip-fields"> <input placeholder="" name="last_name" value="" type="text" required> </div>
       </li>
       <li class="vip-form-box-field">
        <div class="vip-label">
         <label> Age <span class="required">*</span> </label> </div>
        <div class="vip-fields"> <input name="age" placeholder="" value="" type="text" required> </div>
       </li>
       <li class="vip-form-box-field">
        <div class="vip-label">
         <label> Nationality <span class="required">*</span> </label> </div>
        <div class="vip-fields"> <input placeholder="" name="nationality" value="" type="text" required> </div>
       </li>
       
       <li class="vip-form-box-field">
        <div class="vip-label">
         <label> Address: <span class="required">*</span> </label> </div>
        <div class="vip-fields"> <input placeholder="" name="address" value="" type="text" required> </div>
       </li>
       <li class="vip-form-box-field">
        <div class="vip-label">
         <label> City: </label> </div>
        <div class="vip-fields"> <input placeholder="" name="city" value="" type="text" required> </div>
       </li>
       <li class="vip-form-box-field">
        <div class="vip-label">
         <label> Zip Code: </label> </div>
        <div class="vip-fields"> <input name="zipcode" placeholder="" value="" type="text" required> </div>
       </li>
       <li class="vip-form-box-field">
        <div class="vip-label">
         <label> Desired Username: <span class="required">*</span> </label> </div>
        <div class="vip-fields"> <input placeholder="" name="username" value="" type="text" required> </div>
       </li>
       <li class="vip-form-box-field">
        <div class="vip-label">
         <label> Password <span class="required">*</span> </label> </div>
        <div class="vip-fields"> <input placeholder="" type="password" name="password" value="" required> </div>
       </li>
       <li class="vip-form-box-field">
        <div class="vip-label">
         <label> Confirm Password <span class="required">*</span> </label> </div>
        <div class="vip-fields"> <input placeholder="" type="password" name="conpassword" value="" type="password" required> </div>
       </li>
       <li class="vip-form-box-field">
        <div class="vip-label">
         <label> E-mail <span class="required">*</span> </label> </div>
        <div class="vip-fields"> <input name="email" placeholder="" value="" type="email" required> </div>
       </li>
       <li class="vip-form-box-field">
        <div class="vip-label">
         <label> Confirm E-mail <span class="required">*</span> </label> </div>
        <div class="vip-fields"> <input name="conemail" placeholder="" value="" type="email" required> </div>
       </li>
      </div> 
      <div class="vip-form-box-right clearfix">
       
       <li class="vip-form-box-field">
        <div class="vip-label">
         <label> Your phone number </label> </div>
        <div class="vip-fields"> <input placeholder="" name="phone" value="" type="text" required> </div>
       </li>
       <li class="vip-form-box-field">
        <div class="vip-label">
         <label> Mobile phone number <span class="required">*</span> </label> </div>
        <div class="vip-fields"> <input placeholder="" name="mob_num" value="" type="text" required> </div>
       </li>
       <li class="vip-form-box-field">
        <div class="vip-label">
         <label> Best times to call: </label> </div>
        <div class="vip-fields"> <input placeholder="" name="time_call" value="" type="text" required> </div>
       </li>
       <li class="vip-form-box-field">
        <div class="vip-label"> <label> If wish not be contacted </label> </div>
        <div class="vip-fields">
         <label> <input name="contacted_yes" value="" type="radio">Yes</label>
         <label> <input name="contacted_no" value="" type="radio">No</label>
        </div>
       </li>
       <li class="vip-form-box-field">
        <div class="vip-label"> <label> Membership <span class="required">*</span></label> </div>
        <div class="vip-fields"> 
           <select>
             <option name="lavishpln" value="">Lavish $150</option>
             <option name="sliverpln" value="">Silver $100k</option>
             <option name="goldpln" value="">Gold $250k</option>
             <option name="platinumpln" value="">Platinum $500k</option>
             <option name="blackpln" value="">Black $1mill</option>
           </select> 
        </div>
       </li>
       <li class="vip-form-box-field">
        <div class="vip-label"> <label>How often do you plan on booking your companion?  <span class="required">*</span></label> </div>
        <div class="vip-fields"> 
           <select name="member_plans" id="member_plan">
             <option name="dailypln" value="Daily">Daily</option>
             <option name="weeklypln" value="weekly">weekly</option>
             <option name="monthlypln" value="monthly">monthly</option>
             <option name="otherpln" value="other">other</option>
           </select> 
        </div>
       </li>
       <li class="vip-form-box-field">
        <div class="vip-label">
         <label> If other; please explain </label> </div>
        <div class="vip-fields"> <input placeholder="" name="explain" value="" type="text" required> </div>
       </li>
       <li class="vip-form-box-field">
        <div class="vip-label">
         <label> What are your favorite luxury hot spots? </label> </div>
        <div class="vip-fields"> <input placeholder="" name="hot_spot" value="" type="text" required> </div>
       </li>
       <li class="vip-form-box-field">
        <div class="vip-label">
         <label> What are your favorite luxyry toys? </label> </div>
        <div class="vip-fields"> <input placeholder="" name="toys" value="" type="text" required> </div>
       </li>
       <li class="vip-form-box-field">
        <div class="vip-label">
         <label> What would be your dream getaway? </label> </div>
        <div class="vip-fields"> <input placeholder="" name="gateway" value="" type="text" required> </div>
       </li>
       <li class="vip-form-box-field">
        <div class="vip-label"> <label> Would you like to be notified when we have new models? </label> </div>
        <div class="vip-fields">
         <label> <input value="Yes" type="radio">Yes</label>
         <label> <input value="No" type="radio">No</label>
        </div>
       </li>
       <li class="vip-form-box-field">
        <div class="vip-label"> <label> Who would your favorite mates be?  </label> </div>
        <div class="vip-fields"> 
           <select>
             <option value="Yvonno">Yvonno</option>
             <option value="Angelina">Angelina</option>
             <option value="Jade">Jade</option>
           </select> 
        </div>
       </li>
      </div> 
      <div class="vip-form-text-textarea clearfix">
        <li class="vip-form-box-field-textarea">
        <div class="vip-label"> <label> Why become a member? </label> </div>
        <div class="vip-fields">
         <textarea placeholder="" rows="3" cols="20"></textarea>
        </div>
       </li>
      </div>
      
      <div class="vip-form-submit-btn clearfix">
       <input type="submit" name="submit" value="Register"/>
      </div> 
    </form>
   </div>
 </div>
</section>';



}

function registration_validation( $username, $password, $email)  
{
global $reg_errors;
$reg_errors = new WP_Error;
if ( empty( $username ) || empty( $password ) || empty( $email ) ) {
    $reg_errors->add('field', 'Required form field is missing');
}
if ( 4 > strlen( $username ) ) {
    $reg_errors->add( 'username_length', 'Username too short. At least 4 characters is required' );
}
if ( username_exists( $username ) )
{
    $reg_errors->add('user_name', 'Sorry, that username already exists!');
}
if ( ! validate_username( $username ) ) {
    $reg_errors->add( 'username_invalid', 'Sorry, the username you entered is not valid' );
}
if ( 5 > strlen( $password ) ) {
        $reg_errors->add( 'password', 'Password length must be greater than 5' );
    }
    if ( !is_email( $email ) ) {
    $reg_errors->add( 'email_invalid', 'Email is not valid' );
}
if ( email_exists( $email ) ) {
    $reg_errors->add( 'email', 'Email Already in use' );
}

if ( is_wp_error( $reg_errors ) ) {
 
    foreach ( $reg_errors->get_error_messages() as $error ) {
     
        echo '<div>';
        echo '<strong>ERROR</strong>:';
        echo $error . '<br/>';
        echo '</div>';
         
    }
 
}
}
function complete_registration($username,$first_name,$last_name,$age,$nationality,$nationality,$city,$zipcode,$username,$password,
$conpassword,$email,$conemail,$phone,$mob_num,$time_call,$explain,$hot_spot,$toys,$gateway,$mem_pln) {
	global $wpdb;
    global $reg_errors, $username,$first_name,$last_name,$age,$nationality,$nationality,$city,$zipcode,$username,$password,
$conpassword,$email,$conemail,$phone,$mob_num,$time_call,$explain,$hot_spot,$toys,$gateway,$mem_pln;
    if ( 1 > count( $reg_errors->get_error_messages() ) ) {
        $userdata = array(
        'user_login'    =>   $username,
        'user_email'    =>   $email,
        'user_pass'     =>   $password,
		'first_name'    =>   $first_name,
        'last_name'     =>   $last_name,
        
        );
         require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
         
         
     
         $user = wp_insert_user( $userdata );
        
         $appTable = $wpdb->prefix . "users";
        $sql_user_id = $wpdb->prepare("SELECT * FROM $appTable order by `ID` desc Limit 1", RID);
        dbDelta( $sql_user_id );
        
         $applications = $wpdb->get_results($sql_user_id);
         
 

		foreach ( $applications as $application ) {

		$uid =  $application->ID;
		}
        
       $sql = "INSERT INTO `lav`.`wp_vip_accounts` (`vip_account_id`, `vip_account_name`, `vip_account_package_name`, `vip_account_post_limit`, `vip_account_access`, `vip_user_id`, `is_payment`, `vip_first_name`, `vip_last_name`, `vip_nationality`, `vip_address`, `vip_city`, `vip_zipcode`, `vip_email`, `vip_phone`, `vip_mob_num`, `vip_time_call`, `vip_explain`, `vip_hot_spot`, `vip_toys`, `vip_gateway`, `vip_monthy_package`, `vip_total_package`) VALUES 
       ('', '$username', 'Sliver', '130', 'all', '$uid', '0', '$first_name', '$last_name', '$nationality', '$address', '$city', '$zipcode', '$email', '$phone', '$mob_num', '$time_call', '$explain', '$hot_spot', '$toys', '$gateway', '$mem_pln', 'Sliver');";
        
        
       
        
        //$user = wp_insert_user( $userdata );
        dbDelta( $sql );
        echo 'Registration complete. Goto <a href="' . get_site_url() . '/wp-login.php">login page</a>.';   
         //~ echo '
    //~ <style>
    //~ .container
    //~ {
      //~ display:none;
	//~ }
    //~ </style>
    //~ ';
    //~ echo do_shortcode( '[cr_custom_payment]' );
    }
}


function custom_registration_function() {
    if(isset($_POST['submit']) && $_POST['username'] != "") {
		
		
        registration_validation(
        $_POST['username'],
        $_POST['password'],
        $_POST['email'],
        $_POST['first_name'],
        $_POST['last_name']
        
        );
         
        // sanitize user form input
        global $username,$first_name,$last_name,$age,$nationality,$address,$city,$zipcode,$username,$password,
$conpassword,$email,$conemail,$phone,$mob_num,$time_call,$explain,$hot_spot,$toys,$gateway,$mem_pln;
        
        $username   =   sanitize_user( $_POST['username'] );
        $password   =   esc_attr( $_POST['password'] );
        $email      =   sanitize_email( $_POST['email'] );
        $first_name =   sanitize_text_field( $_POST['first_name'] );
        $last_name  =   sanitize_text_field( $_POST['last_name'] );
        $age  =   sanitize_text_field( $_POST['age'] );
        $nationality  =   sanitize_text_field( $_POST['nationality'] );
        $address  =   sanitize_text_field( $_POST['address'] );
        $city  =   sanitize_text_field( $_POST['city'] );
        $zipcode  =   sanitize_text_field( $_POST['zipcode'] );
        $phone  =   sanitize_text_field( $_POST['phone'] );
        $mob_num  =   sanitize_text_field( $_POST['mob_num'] );
        $time_call  =   sanitize_text_field( $_POST['time_call'] );
        $explain  =   sanitize_text_field( $_POST['explain'] );
        $hot_spot  =   sanitize_text_field( $_POST['hot_spot'] );
        $toys  =   sanitize_text_field( $_POST['toys'] );
        $gateway  =   sanitize_text_field( $_POST['gateway'] );
        $mem_pln  =   $_POST['member_plans'];
        
     
      // die;

 
        // call @function complete_registration to create the user
        // only when no WP_error is found
        complete_registration(
        $username,$first_name,$last_name,$age,$nationality,$address,$city,$zipcode,$username,$password,
$conpassword,$email,$conemail,$phone,$mob_num,$time_call,$explain,$hot_spot,$toys,$gateway,$mem_pln
        );
    }
 
    registration_form(
        $username,$first_name,$last_name,$age,$nationality,$address,$city,$zipcode,$username,$password,
$conpassword,$email,$conemail,$phone,$mob_num,$time_call,$explain,$hot_spot,$toys,$gateway,$mem_pln
        );
        
}
// Register a new shortcode: [cr_custom_registration]
add_shortcode( 'cr_custom_registration', 'custom_registration_shortcode' );
add_shortcode( 'cr_custom_payment', 'custom_payment_shortcode' );
 
// The callback function that will replace [book]
function custom_registration_shortcode() {
    ob_start();
    custom_registration_function();
    return ob_get_clean();
}

function custom_payment_shortcode() {
    ob_start();
    custom_payment();
    return ob_get_clean();
}

function custom_payment()
{
	payment_form();
}


function payment_form()
{
	$gatewayURL = 'https://secure.charge1.com/api/v2/three-step';
$APIKey = '2F822Rw39fx762MaV7Yy86jXGTC7sCDy';


// If there is no POST data or a token-id, print the initial shopping cart form to get ready for Step One.
if (empty($_POST['DO_STEP_1']) && empty($_GET['token-id'])) 
{
define("APPROVED", 1);
define("DECLINED", 2);
define("ERROR", 3);

class gwapi {

// Initial Setting Functions

  function setLogin($username, $password) {
    $this->login['username'] = $username;
    $this->login['password'] = $password;
  }

  function setOrder($orderid,
        $orderdescription,
        $tax,
        $shipping,
        $ponumber,
        $ipaddress) {
    $this->order['orderid']          = $orderid;
    $this->order['orderdescription'] = $orderdescription;
    $this->order['tax']              = $tax;
    $this->order['shipping']         = $shipping;
    $this->order['ponumber']         = $ponumber;
    $this->order['ipaddress']        = $ipaddress;
  }

  function setBilling($firstname,
        $lastname,
        $company,
        $address1,
        $address2,
        $city,
        $state,
        $zip,
        $country,
        $phone,
        $fax,
        $email,
        $website) {
    $this->billing['firstname'] = $firstname;
    $this->billing['lastname']  = $lastname;
    $this->billing['company']   = $company;
    $this->billing['address1']  = $address1;
    $this->billing['address2']  = $address2;
    $this->billing['city']      = $city;
    $this->billing['state']     = $state;
    $this->billing['zip']       = $zip;
    $this->billing['country']   = $country;
    $this->billing['phone']     = $phone;
    $this->billing['fax']       = $fax;
    $this->billing['email']     = $email;
    $this->billing['website']   = $website;
  }

  function setShipping($firstname,
        $lastname,
        $company,
        $address1,
        $address2,
        $city,
        $state,
        $zip,
        $country,
        $email) {
    $this->shipping['firstname'] = $firstname;
    $this->shipping['lastname']  = $lastname;
    $this->shipping['company']   = $company;
    $this->shipping['address1']  = $address1;
    $this->shipping['address2']  = $address2;
    $this->shipping['city']      = $city;
    $this->shipping['state']     = $state;
    $this->shipping['zip']       = $zip;
    $this->shipping['country']   = $country;
    $this->shipping['email']     = $email;
  }

  // Transaction Functions

  function doSale($amount, $ccnumber, $ccexp, $cvv="") {

    $query  = "";
    // Login Information
    $query .= "username=" . urlencode($this->login['username']) . "&";
    $query .= "password=" . urlencode($this->login['password']) . "&";
    // Sales Information
    $query .= "ccnumber=" . urlencode($ccnumber) . "&";
    $query .= "ccexp=" . urlencode($ccexp) . "&";
    $query .= "amount=" . urlencode(number_format($amount,2,".","")) . "&";
    $query .= "cvv=" . urlencode($cvv) . "&";
    // Order Information
    $query .= "ipaddress=" . urlencode($this->order['ipaddress']) . "&";
    $query .= "orderid=" . urlencode($this->order['orderid']) . "&";
    $query .= "orderdescription=" . urlencode($this->order['orderdescription']) . "&";
    $query .= "tax=" . urlencode(number_format($this->order['tax'],2,".","")) . "&";
    $query .= "shipping=" . urlencode(number_format($this->order['shipping'],2,".","")) . "&";
    $query .= "ponumber=" . urlencode($this->order['ponumber']) . "&";
    // Billing Information
    $query .= "firstname=" . urlencode($this->billing['firstname']) . "&";
    $query .= "lastname=" . urlencode($this->billing['lastname']) . "&";
    $query .= "company=" . urlencode($this->billing['company']) . "&";
    $query .= "address1=" . urlencode($this->billing['address1']) . "&";
    $query .= "address2=" . urlencode($this->billing['address2']) . "&";
    $query .= "city=" . urlencode($this->billing['city']) . "&";
    $query .= "state=" . urlencode($this->billing['state']) . "&";
    $query .= "zip=" . urlencode($this->billing['zip']) . "&";
    $query .= "country=" . urlencode($this->billing['country']) . "&";
    $query .= "phone=" . urlencode($this->billing['phone']) . "&";
    $query .= "fax=" . urlencode($this->billing['fax']) . "&";
    $query .= "email=" . urlencode($this->billing['email']) . "&";
    $query .= "website=" . urlencode($this->billing['website']) . "&";
    // Shipping Information
    $query .= "shipping_firstname=" . urlencode($this->shipping['firstname']) . "&";
    $query .= "shipping_lastname=" . urlencode($this->shipping['lastname']) . "&";
    $query .= "shipping_company=" . urlencode($this->shipping['company']) . "&";
    $query .= "shipping_address1=" . urlencode($this->shipping['address1']) . "&";
    $query .= "shipping_address2=" . urlencode($this->shipping['address2']) . "&";
    $query .= "shipping_city=" . urlencode($this->shipping['city']) . "&";
    $query .= "shipping_state=" . urlencode($this->shipping['state']) . "&";
    $query .= "shipping_zip=" . urlencode($this->shipping['zip']) . "&";
    $query .= "shipping_country=" . urlencode($this->shipping['country']) . "&";
    $query .= "shipping_email=" . urlencode($this->shipping['email']) . "&";
    $query .= "type=sale";
    return $this->_doPost($query);
  }

  function doAuth($amount, $ccnumber, $ccexp, $cvv="") {

    $query  = "";
    // Login Information
    $query .= "username=" . urlencode($this->login['username']) . "&";
    $query .= "password=" . urlencode($this->login['password']) . "&";
    // Sales Information
    $query .= "ccnumber=" . urlencode($ccnumber) . "&";
    $query .= "ccexp=" . urlencode($ccexp) . "&";
    $query .= "amount=" . urlencode(number_format($amount,2,".","")) . "&";
    $query .= "cvv=" . urlencode($cvv) . "&";
    // Order Information
    $query .= "ipaddress=" . urlencode($this->order['ipaddress']) . "&";
    $query .= "orderid=" . urlencode($this->order['orderid']) . "&";
    $query .= "orderdescription=" . urlencode($this->order['orderdescription']) . "&";
    $query .= "tax=" . urlencode(number_format($this->order['tax'],2,".","")) . "&";
    $query .= "shipping=" . urlencode(number_format($this->order['shipping'],2,".","")) . "&";
    $query .= "ponumber=" . urlencode($this->order['ponumber']) . "&";
    // Billing Information
    $query .= "firstname=" . urlencode($this->billing['firstname']) . "&";
    $query .= "lastname=" . urlencode($this->billing['lastname']) . "&";
    $query .= "company=" . urlencode($this->billing['company']) . "&";
    $query .= "address1=" . urlencode($this->billing['address1']) . "&";
    $query .= "address2=" . urlencode($this->billing['address2']) . "&";
    $query .= "city=" . urlencode($this->billing['city']) . "&";
    $query .= "state=" . urlencode($this->billing['state']) . "&";
    $query .= "zip=" . urlencode($this->billing['zip']) . "&";
    $query .= "country=" . urlencode($this->billing['country']) . "&";
    $query .= "phone=" . urlencode($this->billing['phone']) . "&";
    $query .= "fax=" . urlencode($this->billing['fax']) . "&";
    $query .= "email=" . urlencode($this->billing['email']) . "&";
    $query .= "website=" . urlencode($this->billing['website']) . "&";
    // Shipping Information
    $query .= "shipping_firstname=" . urlencode($this->shipping['firstname']) . "&";
    $query .= "shipping_lastname=" . urlencode($this->shipping['lastname']) . "&";
    $query .= "shipping_company=" . urlencode($this->shipping['company']) . "&";
    $query .= "shipping_address1=" . urlencode($this->shipping['address1']) . "&";
    $query .= "shipping_address2=" . urlencode($this->shipping['address2']) . "&";
    $query .= "shipping_city=" . urlencode($this->shipping['city']) . "&";
    $query .= "shipping_state=" . urlencode($this->shipping['state']) . "&";
    $query .= "shipping_zip=" . urlencode($this->shipping['zip']) . "&";
    $query .= "shipping_country=" . urlencode($this->shipping['country']) . "&";
    $query .= "shipping_email=" . urlencode($this->shipping['email']) . "&";
    $query .= "type=auth";
    return $this->_doPost($query);
  }

  function doCredit($amount, $ccnumber, $ccexp) {

    $query  = "";
    // Login Information
    $query .= "username=" . urlencode($this->login['username']) . "&";
    $query .= "password=" . urlencode($this->login['password']) . "&";
    // Sales Information
    $query .= "ccnumber=" . urlencode($ccnumber) . "&";
    $query .= "ccexp=" . urlencode($ccexp) . "&";
    $query .= "amount=" . urlencode(number_format($amount,2,".","")) . "&";
    // Order Information
    $query .= "ipaddress=" . urlencode($this->order['ipaddress']) . "&";
    $query .= "orderid=" . urlencode($this->order['orderid']) . "&";
    $query .= "orderdescription=" . urlencode($this->order['orderdescription']) . "&";
    $query .= "tax=" . urlencode(number_format($this->order['tax'],2,".","")) . "&";
    $query .= "shipping=" . urlencode(number_format($this->order['shipping'],2,".","")) . "&";
    $query .= "ponumber=" . urlencode($this->order['ponumber']) . "&";
    // Billing Information
    $query .= "firstname=" . urlencode($this->billing['firstname']) . "&";
    $query .= "lastname=" . urlencode($this->billing['lastname']) . "&";
    $query .= "company=" . urlencode($this->billing['company']) . "&";
    $query .= "address1=" . urlencode($this->billing['address1']) . "&";
    $query .= "address2=" . urlencode($this->billing['address2']) . "&";
    $query .= "city=" . urlencode($this->billing['city']) . "&";
    $query .= "state=" . urlencode($this->billing['state']) . "&";
    $query .= "zip=" . urlencode($this->billing['zip']) . "&";
    $query .= "country=" . urlencode($this->billing['country']) . "&";
    $query .= "phone=" . urlencode($this->billing['phone']) . "&";
    $query .= "fax=" . urlencode($this->billing['fax']) . "&";
    $query .= "email=" . urlencode($this->billing['email']) . "&";
    $query .= "website=" . urlencode($this->billing['website']) . "&";
    $query .= "type=credit";
    return $this->_doPost($query);
  }

  function doOffline($authorizationcode, $amount, $ccnumber, $ccexp) {

    $query  = "";
    // Login Information
    $query .= "username=" . urlencode($this->login['username']) . "&";
    $query .= "password=" . urlencode($this->login['password']) . "&";
    // Sales Information
    $query .= "ccnumber=" . urlencode($ccnumber) . "&";
    $query .= "ccexp=" . urlencode($ccexp) . "&";
    $query .= "amount=" . urlencode(number_format($amount,2,".","")) . "&";
    $query .= "authorizationcode=" . urlencode($authorizationcode) . "&";
    // Order Information
    $query .= "ipaddress=" . urlencode($this->order['ipaddress']) . "&";
    $query .= "orderid=" . urlencode($this->order['orderid']) . "&";
    $query .= "orderdescription=" . urlencode($this->order['orderdescription']) . "&";
    $query .= "tax=" . urlencode(number_format($this->order['tax'],2,".","")) . "&";
    $query .= "shipping=" . urlencode(number_format($this->order['shipping'],2,".","")) . "&";
    $query .= "ponumber=" . urlencode($this->order['ponumber']) . "&";
    // Billing Information
    $query .= "firstname=" . urlencode($this->billing['firstname']) . "&";
    $query .= "lastname=" . urlencode($this->billing['lastname']) . "&";
    $query .= "company=" . urlencode($this->billing['company']) . "&";
    $query .= "address1=" . urlencode($this->billing['address1']) . "&";
    $query .= "address2=" . urlencode($this->billing['address2']) . "&";
    $query .= "city=" . urlencode($this->billing['city']) . "&";
    $query .= "state=" . urlencode($this->billing['state']) . "&";
    $query .= "zip=" . urlencode($this->billing['zip']) . "&";
    $query .= "country=" . urlencode($this->billing['country']) . "&";
    $query .= "phone=" . urlencode($this->billing['phone']) . "&";
    $query .= "fax=" . urlencode($this->billing['fax']) . "&";
    $query .= "email=" . urlencode($this->billing['email']) . "&";
    $query .= "website=" . urlencode($this->billing['website']) . "&";
    // Shipping Information
    $query .= "shipping_firstname=" . urlencode($this->shipping['firstname']) . "&";
    $query .= "shipping_lastname=" . urlencode($this->shipping['lastname']) . "&";
    $query .= "shipping_company=" . urlencode($this->shipping['company']) . "&";
    $query .= "shipping_address1=" . urlencode($this->shipping['address1']) . "&";
    $query .= "shipping_address2=" . urlencode($this->shipping['address2']) . "&";
    $query .= "shipping_city=" . urlencode($this->shipping['city']) . "&";
    $query .= "shipping_state=" . urlencode($this->shipping['state']) . "&";
    $query .= "shipping_zip=" . urlencode($this->shipping['zip']) . "&";
    $query .= "shipping_country=" . urlencode($this->shipping['country']) . "&";
    $query .= "shipping_email=" . urlencode($this->shipping['email']) . "&";
    $query .= "type=offline";
    return $this->_doPost($query);
  }

  function doCapture($transactionid, $amount =0) {

    $query  = "";
    // Login Information
    $query .= "username=" . urlencode($this->login['username']) . "&";
    $query .= "password=" . urlencode($this->login['password']) . "&";
    // Transaction Information
    $query .= "transactionid=" . urlencode($transactionid) . "&";
    if ($amount>0) {
        $query .= "amount=" . urlencode(number_format($amount,2,".","")) . "&";
    }
    $query .= "type=capture";
    return $this->_doPost($query);
  }

  function doVoid($transactionid) {

    $query  = "";
    // Login Information
    $query .= "username=" . urlencode($this->login['username']) . "&";
    $query .= "password=" . urlencode($this->login['password']) . "&";
    // Transaction Information
    $query .= "transactionid=" . urlencode($transactionid) . "&";
    $query .= "type=void";
    return $this->_doPost($query);
  }

  function doRefund($transactionid, $amount = 0) {

    $query  = "";
    // Login Information
    $query .= "username=" . urlencode($this->login['username']) . "&";
    $query .= "password=" . urlencode($this->login['password']) . "&";
    // Transaction Information
    $query .= "transactionid=" . urlencode($transactionid) . "&";
    if ($amount>0) {
        $query .= "amount=" . urlencode(number_format($amount,2,".","")) . "&";
    }
    $query .= "type=refund";
    return $this->_doPost($query);
  }

  function _doPost($query) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://secure.charge1.com/api/transact.php");
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

    curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
    curl_setopt($ch, CURLOPT_POST, 1);

    if (!($data = curl_exec($ch))) {
        return ERROR;
    }
    curl_close($ch);
    unset($ch);
    print "\n$data\n";
    $data = explode("&",$data);
    for($i=0;$i<count($data);$i++) {
        $rdata = explode("=",$data[$i]);
        $this->responses[$rdata[0]] = $rdata[1];
    }
    return $this->responses['response'];
  }
}

$gw = new gwapi;
$gw->setLogin("demo", "password");
$gw->setBilling("$first_name","$last_name","Lavish","$address","", "$city",
        "CA","$zipcode","US","$phone","$mob_num","$email",
        "$email");
$gw->setShipping("$first_name","$last_name","Lavish","$address","", "$city",
        "CA","$zipcode","US","$phone","$mob_num","$email",
        "$email");
$gw->setOrder("1234","Big Order",1, 2, "PO1234","65.192.14.10");

$r = $gw->doSale("50.00","4111111111111111","1010");
print $gw->responses['responsetext'];
  }
}
