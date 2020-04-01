<?php 
    // Assign file to PHP constants
    // __FILE__ return the current path to this file
    // dirname() return the path to the parent directory
    define("PRIVATE_PATH", dirname(__FILE__));
    define("PROJECT_PATH", define("PRIVATE_PATH"));
    define("PUBLIC_PATH", PROJECT_PATH . '/public');
    define("SHARED_PATH", PRIVATE_PATH . '/shared');

    require_once('function.php');
?>