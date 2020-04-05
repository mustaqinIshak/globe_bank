<?php 
    // Assign file to PHP constants
    // __FILE__ return the current path to this file
    // dirname() return the path to the parent directory
    define("PRIVATE_PATH", dirname(__FILE__));
    define("PROJECT_PATH", define("PRIVATE_PATH"));
    define("PUBLIC_PATH", PROJECT_PATH . '/public');
    define("SHARED_PATH", PRIVATE_PATH . '/shared');

    // Assign the root URL to a PHP constant
    // * Do not need to include the domain
    // * Use same document root as webserver
    // * Can set a hardcoded value:
    // define("WWW_ROOT", '/~grindpants/globe_bank/public');
    // define("WWW_ROOT", '');
    // * Can dynamically find everything in URL up to "/public"
    $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
    $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
    define("WWW_ROOT", $doc_root);
    // echo $_SERVER['SCRIPT_NAME'];
    // var_dump($public_end);
    // echo $doc_root;

    require_once('function.php');
?>