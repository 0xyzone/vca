<?php
session_start();
include_once "globalvar.php";
include_once "dbconnection.php";
?>

<!DOCTYPE html>
<html lang="en" id="html">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    include "css.php";
    ?>
    <?php
    include "scripts.php";
    ?>
    <script>
        let Mode = localStorage.getItem('Mode');
        const enableDarkMode = () => {
            $('#html').addClass('dark');
            localStorage.setItem('Mode', 'dark');
        }
        const disableDarkMode = () => {
            $('#html').removeClass('dark');
            localStorage.setItem('Mode', null);
        }

        if (Mode === 'dark') {
            enableDarkMode();
            $("#toggle").prop('checked',true);
        }
    </script>
    <title id="title"></title>
</head>

<body>
    
    <?php
    include site()."includes/bg.php";
    ?>