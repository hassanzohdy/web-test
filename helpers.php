<?php 

/**
 * Print the given variable
 * 
 * @param  mixed $variable
 * @return void
 */
function pre($var) 
{
    echo '<pre>';
    print_r($var);
    echo '</pre>';
}

/**
 * Redirect to the given file
 * 
 * @param  string $path 
 * @return void
 */
function redirect_to(string $path)
{ 
    header("location: $path"); 
}

/**
 * Get value for the given key from user info in session
 * 
 * @param  string $key 
 * @return mixed
 */
function user(string $key)
{
    $user = sess_get('user');

    if (! $user) return '';

    if (! isset($user[$key])) return '';

    return $user[$key];
}