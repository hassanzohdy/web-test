<?php 

// Convert your create account code into OOP style

class HomePage 
{
    /**
     * Display the visitor page >> the non logged in 
     * 
     * @return void
     */
    public function unregisteredPage()
    {
        // 
    }

    /**
     * Display the registered page 
     * 
     * @return void
     */
    public function home()
    {
        // 
    }
}

class LogoutPage 
{
    /**
     * Log the user out
     */
    public static function logout()
    {
        // 
    }
}

class Helpers 
{
    /**
     * Redirect to the given path
     * 
     * @param  string $path 
     * @return void
     */
    public static function redirectTo(string $path)
    {

    }
}

class RegisterPage
 {
    // Display create account page
    public function render()
    {

    }

    // Create a new user
    public function submit()
    {

    }

    /**
     * Remember The user data in cookies
     * 
     * @return void
     */
    public function rememberUser() 
    {
        
    }
    
    /**
     * Remember The user data in session
     * 
     * @return void
     */
    public function visitorUser() 
    {
        
    }
}

class Session 
{
    public function get($key)
    {

    }

    public function set($key, $value)
    {

    }

    public function remove($key)
    {

    }

    public function destroy()
    {

    }

    public function has($key)
    {

    }
}



class FormHandler 
{
    public function setError(string $name, string $errorMessage)
    {

    }

    public function hasError(string $name): bool
    {

    }

    public function getError(string $key): string 
    {

    }

    public function clearErrors()
    {

    }
}