<?php
/*include "wp-load.php";*/
echo get_current_user_id();
global $wpdb;
print_r($wpdb);
$db="userscv";
$userid = get_current_user_id();
echo $userid;
echo "string";
$result = $wpdb->get_results("SELECT * FROM $db WHERE userwpid=$userid");
if($wpdb->num_rows > 0) {
  $wpdb->update( $db, array(
    'userwpid' => get_current_user_id(),
    'name' => $_POST['cv_username'],
    'spec' => $_POST['cv_spec'],
    'info' => $_POST['cv_info'],
    'age' => $_POST['cv_age'],
    'address' => $_POST['cv_address'],
    'email' => $_POST['cv_email'],
    'city' => $_POST['cv_city'],
    'country' => $_POST['cv_country'],
    'phone' => $_POST['cv_phone'],
    'verif' => 1),
  array( 'userwpid' => get_current_user_id()),
  array( '%d', '%s', '%s', '%s', '%d', '%s', '%s', '%s', '%s', '%s', '%d' ),
  array( '%d' )
  );
} else {
  $wpdb->insert( $db, array(
    'userwpid' => get_current_user_id(),
    'name' => $_POST['cv_username'],
    'spec' => $_POST['cv_spec'],
    'info' => htmlspecialchars($_POST['cv_info']),
    'age' => $_POST['cv_age'],
    'address' => $_POST['cv_address'],
    'email' => $_POST['cv_email'],
    'city' => $_POST['cv_city'],
    'country' => $_POST['cv_country'],
    'phone' => $_POST['cv_phone'],
    'verif' => 1),
  array( '%d', '%s', '%s', '%s', '%d', '%s', '%s', '%s', '%s', '%s', '%d' )
  );
}

/*
$cvdatabase="userscv";
$currentuserid = get_current_user_id();
$cv = $wpdb->get_results("SELECT * FROM $cvdatabase WHERE userwpid=$currentuserid");
if($wpdb->num_rows > 0) {
$data=TRUE;
} else {
$data =FALSE;
}
?>
<?php 
global $wpdb;
if(isset(is_user_logged_in()==true){
if($data == TRUE) {
$wpdb->update( $cvdatabase, array(
'userwpid' => get_current_user_id(),
'name' => $_POST['cv_username'],
'spec' => $_POST['cv_spec'],
'info' => $_POST['cv_info'],
'age' => $_POST['cv_age'],
'address' => $_POST['cv_address'],
'email' => $_POST['cv_email'],
'city' => $_POST['cv_city'],
'country' => $_POST['cv_country'],
'phone' => $_POST['cv_phone'],
'verif' => "1"),
array( 'userwpid' => get_current_user_id()),
array( '%d', '%s', '%s', '%s', '%d', '%s', '%s', '%s', '%s', '%s', '%d' ),
array( '%d' )
);
} else if($data == FALSE) {
$wpdb->insert( $cvdatabase, array(
'userwpid' => get_current_user_id(),
'name' => $_POST['cv_username'],
'spec' => $_POST['cv_spec'],
'info' => htmlspecialchars($_POST['cv_info']),
'age' => $_POST['cv_age'],
'address' => $_POST['cv_address'],
'email' => $_POST['cv_email'],
'city' => $_POST['cv_city'],
'country' => $_POST['cv_country'],
'phone' => $_POST['cv_phone'],
'verif' => "1"),
array( '%d', '%s', '%s', '%s', '%d', '%s', '%s', '%s', '%s', '%s', '%d' )
);
}
} 
*/
?>
