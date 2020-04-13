<?php 
require 'helpers.php';
require 'session.php';
require 'form-data.php';

clear_form_errors();

$email = post('email');
$username = post('name');
$password = post('password');
$confirmPassword = post('confirm_password');

// $username; 
// $username = null; 
// $username = false; 
// $username = 0; 
// $username = ''; 

if (! $username) {
    // go here 
    set_form_error('name', 'User Name Is Required');
}

if ($email == '') {
    // ?
    set_form_error('email', 'Email Address is required');
}

if (! $password) {
    if (sess_get('language') == 'ar') {
        set_form_error('password', 'كلمة المرور مطلوبة');
    } else {
        set_form_error('password', 'Password is required');
    }
} elseif (strlen($password) < 8) {
    set_form_error('password', 'Minimum Password length is 8');
}

if (! $confirmPassword) {
    set_form_error('confirm_password', 'Confirm Password is required');
} elseif ($confirmPassword != $password) {
    set_form_error('confirm_password', 'Confirm Password did not match password');
}

if (form_has_errors()) {
    redirect_to('register.php');
} else {
    // Store user info
    sess_set('user', [
        'name' => $username,
        'email' => $email,
    ]);

    // redirect back to index.php 
    redirect_to('index.php');
}