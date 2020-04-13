<?php 

/**
 * Get value from post array
 * 
 * @param  string $key 
 * @return mixed
 */
function post(string $key)
{
    if (isset($_POST[$key])) {
        return $_POST[$key];
    }

    return null;
}

/**
 * Add new error to the form
 * 
 * @param  string $name 
 * @param  string $message 
 * @return void
 */
function set_form_error(string $name, string $message)
{
    $formErrorsKey = 'form_errors';

    $errors = sess_get($formErrorsKey); 

    if (! $errors) {
        $errors = [];
    }

    $errors[$name] = $message;

    sess_set($formErrorsKey, $errors);
}

/**
 * Check if form has errors
 * 
 * @return bool
 */
function form_has_errors(): bool 
{
    return sess_has('form_errors') === true;
}

/**
 * Get form error value for the give key
 * 
 * @param  string $name 
 * @return string 
 */
function form_error(string $name): string 
{
    $errors = sess_get('form_errors');

    if (! $errors) return '';

    // if (! isset($errors[$name])) return '';

    // return $errors[$name];

    if (! isset($errors[$name])) {
        return '';
    } else {
        return $errors[$name];
    }
}

/**
 * Remove the form errors from session
 * 
 * @return void
 */
function clear_form_errors()
{
    sess_remove('form_errors');
}