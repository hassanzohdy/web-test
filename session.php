<?php 

session_start();

/**
 * Add new key to the session
 * 
 * @param  string $key 
 * @param  mixed $value 
 * @return void
 */
function sess_set(string $key, $value)
{
    $_SESSION[$key] = $value;
}

/**
 * Check if session has the given key
 * 
 * @param  string $key 
 * @return bool
 */
function sess_has(string $key): bool 
{
    return isset($_SESSION[$key]);
}

/**
 * Get the value for given key  
 * 
 * @param  string $key 
 * @return mixed
 */
function sess_get(string $key) 
{
    if (sess_has($key)) {
        return $_SESSION[$key];
    }

    return null;
}

/**
 * Remove the given key from the session
 * 
 * @param  string $key 
 * @return void
 */
function sess_remove(string $key)
{
    unset($_SESSION[$key]);
}

/**
 * Destroy the session
 * 
 * @return void
 */
function sess_destroy()
{
    unset($_SESSION);

    session_unset();

    // remove all content in the session file
    session_destroy(); 
}