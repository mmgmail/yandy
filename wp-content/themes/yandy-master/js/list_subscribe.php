<?php
// http://stackoverflow.com/a/43475519/4372531

/*
   * Add a 'member' to a 'list' via mailchimp API v3.x
   * @ http://developer.mailchimp.com/documentation/mailchimp/reference/lists/members/#create-post_lists_list_id_members
   *
   * ================
   * BACKGROUND
   * Typical use case is that this code would get run by an .ajax() jQuery call or possibly a form action
   * The live data you need will get transferred via the global $_POST variable
   * That data must be put into an array with keys that match the mailchimp endpoints, check the above link for those
   * You also need to include your API key and list ID for this to work.
   * You'll just have to go get those and type them in here, see README.md
   * ================
   */

// Set API Key and list ID to add a subscriber
$api_key = 'd90cbe2593b966262793b2d2697dae1d-us11';
$list_id = '59d649918b';
$subdomain = 'us11';

/* ================
 * DESTINATION URL
 * Note: your API URL has a location subdomain at the front of the URL string
 * It can vary depending on where you are in the world
 * To determine yours, check the last 3 digits of your API key
 * ================
 */
$url = 'https://' . $subdomain . '.api.mailchimp.com/3.0/lists/' . $list_id . '/members/';

/* ================
 * DATA SETUP
 * Encode data into a format that the add subscriber mailchimp end point is looking for
 * Must include 'email_address' and 'status'
 * Statuses: pending = they get an email; subscribed = they don't get an email
 * Custom fields go into the 'merge_fields' as another array
 * More here: http://developer.mailchimp.com/documentation/mailchimp/reference/lists/members/#create-post_lists_list_id_members
 * ================
 */

// Function to get the client ip address
function get_client_ip_server() {
    $ipaddress = '';
    if ($_SERVER['HTTP_CLIENT_IP'])
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if($_SERVER['HTTP_X_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if($_SERVER['HTTP_X_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if($_SERVER['HTTP_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if($_SERVER['HTTP_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if($_SERVER['REMOTE_ADDR'])
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = '0.0.0.0';

    return $ipaddress;
}

$ip = get_client_ip_server();

$pfb_data = array(
    'email_address' => $_POST['email'],
    'status'        => 'subscribed',
    'ip_signup'     =>  $ip,
    'ip_opt'        => $ip,
    'merge_fields'  => array(
        'FNAME'       => $_POST['firstname'],
        'LNAME'       => $_POST['lastname']
    ),
);

// Encode the data
$encoded_pfb_data = json_encode($pfb_data);

// Setup cURL sequence
$ch = curl_init();

/* ================
 * cURL OPTIONS
 * The tricky one here is the _USERPWD - this is how you transfer the API key over
 * _RETURNTRANSFER allows us to get the response into a variable which is nice
 * This example just POSTs, we don't edit/modify - just a simple add to a list
 * _POSTFIELDS does the heavy lifting
 * _SSL_VERIFYPEER should probably be set but I didn't do it here
 * ================
 */
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $api_key);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $encoded_pfb_data);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

$result_info = curl_exec($ch); // store response
$response = curl_getinfo($ch, CURLINFO_HTTP_CODE); // get HTTP CODE
$errors = curl_error($ch); // store errors

curl_close($ch);

// Returns info back to jQuery .ajax or just outputs onto the page

$results = array(
    'results' => $result_info,
    'response' => $response,
    'errors' => $errors
);

// Sends data back to the page OR the ajax() in your JS
echo json_encode($results);