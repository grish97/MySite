<?php

    define("BASE_PATH", dirname(__FILE__));
    
    function path($path) {
        return BASE_PATH . preg_replace("/[\\/]/", DIRECTORY_SEPARATOR,  "/" . $path);
    }
    
    require_once(path("core/functions.php"));
    require_once(path("core/connect.php"));
    require_once(path("core/router.php"));

?>