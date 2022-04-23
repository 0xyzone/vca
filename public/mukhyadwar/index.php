<?php
include "../includes/header.php";
?>
<div class="flex flex-col justify-center items-center w-full h-full gap-2">
    <div class="">
        <img src="<?php echo site() ?>assets/img/logo.png" alt="vca logo" class="w-32">
    </div>
    <div class="loginform">
        <fieldset>
            <legend>Login to the system!</legend>
            <form action="validate.php" method="post">
                <input type="text" name="uname" id="uname" placeholder="Username/Email" autofocus>
                <input type="password" name="password" id="password" placeholder="Password">
                <input type="button" class="mt-4" id="login" disabled="disabled" value="Login">
                <a href="#">Forgot your password?</a>
            </form>
        </fieldset>
    </div>
</div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="../assets/js/login.js"></script>