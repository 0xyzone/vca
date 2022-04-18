<?php
function site()
{
    if(isset($_SERVER['HTTPS'])){
        $protocol = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === "on" ? "https" : "http");
    } else {
        $protocol = "http";
    } 
    return $protocol . "://" . $_SERVER["HTTP_HOST"] . "/vca/public/";
}
?>