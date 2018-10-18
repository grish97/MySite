<?php
    
    function redirect($url) {
        header("Location: " . $url);
    }   

    function print_with_template(string $page, string $title = "My Site"){
        ob_start();
        require_once("core/templates/main.php");
        $template = ob_get_clean();
        $page = str_replace("@content", $page, $template);
        $page = str_replace("@title", $title, $page); 
        return $page;
    }
?>