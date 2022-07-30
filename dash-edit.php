<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="/assets/css/dash-edit.css">

        <title>Netflix</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="/assets/nficon2016.ico">
    </head>

    <body>
        <div class="app-mount">
            <div class="container">
                <div class="pinning-header">
                    <div class="pinning-header-container">
                        <div class="main-header">
                            <a class="logo-icon-link" aria-label="Netflix" href="#">
                                <img class="logo-icon" src="/assets/logo-3.png">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="profiles-gate-container">
                    <div class="centered-div" style="opacity: 1; transform: scale(1); transition-duration: 450ms; transition-delay: 200ms;">
                        <div class="profile-actions-container">
                            <h1>Edit Profile</h1>
                            <div class="profile-metadata profile-entry">
                                <div class="main-profile-avatar">
                                    <div class="avatar-box">
                                        <img src="/assets/profile-1.png" alt="" style="opacity: 1; transform: scale(1); transition-duration: 400ms;">
                                        <div class="avatar-edit-icon">
                                            <svg class="svg-icon svg-icon-edit" focusable="true">
                                                <use filter="" xlink:href="#edit">
                                                    <symbol id="edit" viewBox="0 0 32 32">
                                                        <path fill="currentColor" d="M16 0c8.833 0 16 7.167 16 16 0 8.8-7.167 16-16 16s-16-7.2-16-16c0-8.833 7.167-16 16-16zM16 1.7c-7.9 0-14.3 6.4-14.3 14.3s6.4 14.3 14.3 14.3 14.3-6.4 14.3-14.3-6.4-14.3-14.3-14.3zM22.333 12.9l0.3-0.267 0.867-0.867c0.467-0.5 0.4-0.767 0-1.167l-1.767-1.767c-0.467-0.467-0.767-0.4-1.167 0l-0.867 0.867-0.267 0.3zM18.3 11.1l-8.6 8.6-0.833 3.767 3.767-0.833 0.967-1 7.633-7.6z"></path>
                                                    </symbol>
                                                </use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="profile-edit-parent">
                                    <div class="profile-edit-inputs">
                                        <input type="text" class="" placeholder="Name" value="Daddy B"></div>
                                    </div>
                                    <!--<div class="profile-entry-dropdowns">
                                        <div class="profileDropDown">
                                            <div class="profileDropDown-label">Language:</div>
                                            <div cols="2" class="nfDropDown theme-lakira">
                                                <div class="label" role="button" tabindex="0" aria-haspopup="true" aria-expanded="false">
                                                    <a class="user-lang-link" tabindex="0" role="link">English</a>
                                                    <span class="arrow"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="profileDropDown">
                                            <div class="profileDropDown-label">Allowed TV programmes and films:</div>
                                            <div cols="1" data-uia="maturity-drop-down" class="nfDropDown widthRestricted theme-lakira">
                                                <div data-uia="maturity-drop-down" class="label" role="button" tabindex="0" aria-haspopup="true" aria-expanded="false">
                                                    All maturity levels
                                                    <span class="arrow"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>-->
                                </div>
                                <span data-uia="profile-save-button" class="profile-button preferred-action">
                                    <!--<span>SAVE</span>-->
                                    <a href="dash-manage.php">SAVE</a>
                                </span>
                                <span data-uia="profile-cancel-button" class="profile-button">
                                    <!--<span>CANCEL</span>-->
                                    <a href="dash-manage.php">CANCEL</a>
                                </span>
                                <span data-uia="profile-delete-button" class="profile-button">
                                    <!--<span>DELETE PROFILE</span>-->
                                    <a href="dash-manage.php">DELETE PROFILE</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
