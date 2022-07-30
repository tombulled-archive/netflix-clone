<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Netflix</title>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="/assets/css/browse.css">
        <link rel="shortcut icon" href="/assets/nficon2016.ico">

        <script src="/assets/js/jquery-3.4.1.min.js"></script>
    </head>

    <body>
        <div class="app-mount">
            <div class="pinning-header">
                <div class="pinning-header-container">
                    <div class="main-header has-billboard">
                        <a class="logo icon-logo active" href="/browse.php">
                            <img class="logo-icon" src="/assets/logo-3.png">
                        </a>
                        <ul class="tabbed-primary-navigation">
                            <li class="navigation-menu">
                                <a class="menu-trigger" role="button" aria-haspopup="true" tabindex="0">Browse</a>
                            </li>
                            <li class="navigation-tab">
                                <a class="current active" href="/browse">Home</a>
                            </li>
                            <li class="navigation-tab">
                                <a href="/browse/genre/83">Series</a>
                            </li>
                            <li class="navigation-tab">
                                <a href="/browse/genre/34399">Films</a>
                            </li>
                            <li class="navigation-tab">
                                <a href="/browse/genre/1592210">Recently Added</a>
                            </li>
                            <li class="navigation-tab">
                                <a href="/browse/my-list">My List</a>
                            </li>
                        </ul>
                        <div class="secondary-navigation">
                            <div class="nav-element">
                                <div class="search-box">
                                    <button class="search-tab" tabindex="0" aria-label="Search" data-uia="search-box-launcher">
                                        <span class="icon-search"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="nav-element show-kids">
                                <a href="/Kids">CHILDREN</a>
                            </div>
                            <div class="nav-element">
                                <span class="notifications">
                                    <button class="notifications-menu" aria-haspopup="true" aria-expanded="false" aria-label="Notifications">
                                        <span class="icon-button-notification"></span>
                                        <span class="notification-pill">1</span>
                                    </button>
                                </span>
                            </div>
                            <div class="nav-element">
                                <div class="account-menu-item">
                                    <div class="account-dropdown-button">
                                        <a href="/YourAccount" role="button" tabindex="0" aria-haspopup="true" aria-expanded="false" aria-label="Tom – Account &amp; Settings">
                                            <span class="profile-link" role="presentation">
                                                <img class="profile-icon" src="/assets/profile-1.png" alt="">
                                            </span>
                                        </a>
                                        <span class="caret" role="presentation"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main-view">
                <span class="billboard-container">
                    <div class="billboard-row">
                        <div class="billboard-content">
                            <div class="billboard-mask">
                                <div class="billboard-component">
                                    <div class="hero-image-wrapper">
                                        <img class="hero-image" src="/assets/wall-1.jpg">
                                        <div class="hero-dim-bottom"></div>
                                        <div class="hero-dim-top"></div>
                                    </div>
                                    <div class="embedded-components">
                                        <span class="rating">
                                            <span class="rating-content">MATURE</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="fill-container">
                                <div class="info-meta">
                                    <div class="meta-layer">
                                        <div class="billboard-title">
                                            <img class="title-logo" src="/assets/title-1.png">
                                        </div>
                                        <div class="billboard-links">
                                            <a class="play-link">
                                                <span class="icon-button">
                                                    <span class="icon-button-flat icon-play"></span>
                                                    <span class="text-button-flat">Play</span>
                                                </span>
                                            </a>
                                            <a class="add-link">
                                                <span class="icon-button">
                                                    <span class="icon-button-flat icon-add"></span>
                                                    <span class="text-button-flat">My List</span>
                                                </span>
                                            </a>
                                        </div>
                                        <div class="billboard-supplemental">
                                            Watch Series 1 now
                                        </div>
                                        <div class="billboard-synopsis">
                                            A mysterious alien object. A perilous mission. A gutsy crew. To protect humankind, they will cross the universe to answer the question: Friend or foe?
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </span>
                <div class="title-cards">
                    <div class="title-card-row">
                        <div class="row-container">
                            <div class="row-sub-container row-header">
                                <h2 class="row-head">
                                    <a class="row-title" href="category">
                                        <div class="row-header-title">
                                            My List
                                        </div>
                                    </a>
                                </h2>
                            </div>
                            <div class="row-sub-container row-footer">
                            </div>

                            <style>
                            /*
                            Depending on the targetted item, show its left and right arrows pointing to the correct ajacent items
                            These will be coded for moving from the left and from the right (as the pointers vary)
                            NOTE: This needs to use id's as each slider will have different amounts of items
                            */
                            .slider-item:nth-of-type(1):target ~ .arrows-left .arrow-left:nth-of-type(12),
                            .slider-item:nth-of-type(1)[target] ~ .arrows-left .arrow-left:nth-of-type(12),
                            .slider-item:nth-of-type(7):target ~ .arrows-left .arrow-left:nth-of-type(18),
                            .slider-item:nth-of-type(7)[target] ~ .arrows-left .arrow-left:nth-of-type(18),
                            .slider-item:nth-of-type(7):target ~ .arrows-right .arrow-right:nth-of-type(1),
                            .slider-item:nth-of-type(7)[target] ~ .arrows-right .arrow-right:nth-of-type(1),
                            .slider-item:nth-of-type(12):target ~ .arrows-left .arrow-left:nth-of-type(18),
                            .slider-item:nth-of-type(12)[target] ~ .arrows-left .arrow-left:nth-of-type(18),
                            .slider-item:nth-of-type(12):target ~ .arrows-right .arrow-right:nth-of-type(1),
                            .slider-item:nth-of-type(12)[target] ~ .arrows-right .arrow-right:nth-of-type(1),
                            .slider-item:nth-of-type(18):target ~ .arrows-right .arrow-right:nth-of-type(7),
                            .slider-item:nth-of-type(18)[target] ~ .arrows-right .arrow-right:nth-of-type(7)
                            {
                                z-index: 1;
                                visibility: visible !important;
                            }
                            </style>

                            <div id="1" class="slider" style="--total-items: 18; --slider-index: 1;">
                                <!-- Placeholders are used to round up to the nearest multiple of 6 -->
                                <!-- This is ONLY built for laptops/pc's (hover wont work on mobiles, as touch screen) -->
                                <!-- Make id's reflect the container aswell, e.g. id="1-1" is container 1, item 1
                                    #2-14, #2.14, #2,14 #2@14, #2%14, #s2i1, #s2-i1, #s2.i1
                                -->
                                <div id="1-1" class="slider-item item-placeholder" style="--item-index: 1;">
                                    <div class="item-contents">
                                        <img src="/assets/film-1.jpg">
                                    </div>
                                </div>
                                <div id="1-2" class="slider-item item-placeholder" style="--item-index: 2;">
                                    <div class="item-contents">
                                        <img src="/assets/film-1.jpg">
                                    </div>
                                </div>
                                <div id="1-3" class="slider-item item-placeholder" style="--item-index: 3;">
                                    <div class="item-contents">
                                        <img src="/assets/film-1.jpg">
                                    </div>
                                </div>
                                <div id="1-4" class="slider-item item-placeholder" style="--item-index: 4;">
                                    <div class="item-contents">
                                        <img src="/assets/film-1.jpg">
                                    </div>
                                </div>

                                <div id="1-5" class="slider-item" style="--item-index: 5;">
                                    <div class="item-contents">
                                        <img src="/assets/film-1.jpg">
                                    </div>
                                </div>
                                <div id="1-6" class="slider-item" style="--item-index: 6;">
                                    <div class="item-contents">
                                        <img src="/assets/film-1.jpg">
                                    </div>
                                </div>

                                <div id="1-7" class="slider-item" style="--item-index: 7;">
                                    <div class="item-contents">
                                        <img src="/assets/film-1.jpg">
                                    </div>
                                </div>
                                <div id="1-8" class="slider-item" style="--item-index: 8;">
                                    <div class="item-contents">
                                        <img src="/assets/film-1.jpg">
                                    </div>
                                </div>
                                <div id="1-9" class="slider-item" style="--item-index: 9;">
                                    <div class="item-contents">
                                        <img src="/assets/film-1.jpg">
                                    </div>
                                </div>
                                <div id="1-10" class="slider-item" style="--item-index: 10;">
                                    <div class="item-contents">
                                        <img src="/assets/film-1.jpg">
                                    </div>
                                </div>
                                <div id="1-11" class="slider-item" style="--item-index: 11;">
                                    <div class="item-contents">
                                        <img src="/assets/film-1.jpg">
                                    </div>
                                </div>
                                <div id="1-12" class="slider-item" style="--item-index: 12;">
                                    <div class="item-contents">
                                        <img src="/assets/film-1.jpg">
                                    </div>
                                </div>

                                <div id="1-13" class="slider-item" style="--item-index: 13;">
                                    <div class="item-contents">
                                        <img src="/assets/film-1.jpg">
                                    </div>
                                </div>
                                <div id="1-14" class="slider-item" style="--item-index: 14;">
                                    <div class="item-contents">
                                        <img src="/assets/film-1.jpg">
                                    </div>
                                </div>
                                <div id="1-15" class="slider-item" style="--item-index: 15;">
                                    <div class="item-contents">
                                        <img src="/assets/film-1.jpg">
                                    </div>
                                </div>
                                <div id="1-16" class="slider-item" style="--item-index: 16;">
                                    <div class="item-contents">
                                        <img src="/assets/film-1.jpg">
                                    </div>
                                </div>
                                <div id="1-17" class="slider-item" style="--item-index: 17;">
                                    <div class="item-contents">
                                        <img src="/assets/film-1.jpg">
                                    </div>
                                </div>
                                <div id="1-18" class="slider-item" style="--item-index: 18;">
                                    <div class="item-contents">
                                        <img src="/assets/film-1.jpg">
                                    </div>
                                </div>

                                <span class="arrows arrows-left">
                                    <div class="arrow arrow-left" id="arrow-left-1">
                                        <a class="arrow-link" href="#1-1">
                                            <b class="indicator-icon icon-left-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-left" id="arrow-left-2">
                                        <a class="arrow-link" href="#1-2">
                                            <b class="indicator-icon icon-left-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-left" id="arrow-left-3">
                                        <a class="arrow-link" href="#1-3">
                                            <b class="indicator-icon icon-left-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-left" id="arrow-left-4">
                                        <a class="arrow-link" href="#1-4">
                                            <b class="indicator-icon icon-left-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-left" id="arrow-left-5">
                                        <a class="arrow-link" href="#1-5">
                                            <b class="indicator-icon icon-left-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-left" id="arrow-left-6">
                                        <a class="arrow-link" href="#1-6">
                                            <b class="indicator-icon icon-left-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-left" id="arrow-left-7">
                                        <a class="arrow-link" href="#1-7">
                                            <b class="indicator-icon icon-left-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-left" id="arrow-left-8">
                                        <a class="arrow-link" href="#1-8">
                                            <b class="indicator-icon icon-left-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-left" id="arrow-left-9">
                                        <a class="arrow-link" href="#1-9">
                                            <b class="indicator-icon icon-left-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-left" id="arrow-left-10">
                                        <a class="arrow-link" href="#1-10">
                                            <b class="indicator-icon icon-left-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-left" id="arrow-left-11">
                                        <a class="arrow-link" href="#1-11">
                                            <b class="indicator-icon icon-left-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-left" id="arrow-left-12">
                                        <a class="arrow-link" href="#1-12">
                                            <b class="indicator-icon icon-left-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-left" id="arrow-left-13">
                                        <a class="arrow-link" href="#1-13">
                                            <b class="indicator-icon icon-left-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-left" id="arrow-left-14">
                                        <a class="arrow-link" href="#1-14">
                                            <b class="indicator-icon icon-left-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-left" id="arrow-left-15">
                                        <a class="arrow-link" href="#1-15">
                                            <b class="indicator-icon icon-left-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-left" id="arrow-left-16">
                                        <a class="arrow-link" href="#1-16">
                                            <b class="indicator-icon icon-left-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-left" id="arrow-left-17">
                                        <a class="arrow-link" href="#1-17">
                                            <b class="indicator-icon icon-left-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-left" id="arrow-left-18">
                                        <a class="arrow-link" href="#1-18">
                                            <b class="indicator-icon icon-left-caret"></b>
                                        </a>
                                    </div>
                                </span>
                                <span class="arrows arrows-right">
                                    <div class="arrow arrow-right" id="arrow-right-1">
                                        <a class="arrow-link" href="#1-1">
                                            <b class="indicator-icon icon-right-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-right" id="arrow-right-2">
                                        <a class="arrow-link" href="#1-2">
                                            <b class="indicator-icon icon-right-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-right" id="arrow-right-3">
                                        <a class="arrow-link" href="#1-3">
                                            <b class="indicator-icon icon-right-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-right" id="arrow-right-4">
                                        <a class="arrow-link" href="#1-4">
                                            <b class="indicator-icon icon-right-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-right" id="arrow-right-5">
                                        <a class="arrow-link" href="#1-5">
                                            <b class="indicator-icon icon-right-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-right" id="arrow-right-6">
                                        <a class="arrow-link" href="#1-6">
                                            <b class="indicator-icon icon-right-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-right" id="arrow-right-7">
                                        <a class="arrow-link" href="#1-7">
                                            <b class="indicator-icon icon-right-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-right" id="arrow-right-8">
                                        <a class="arrow-link" href="#1-8">
                                            <b class="indicator-icon icon-right-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-right" id="arrow-right-9">
                                        <a class="arrow-link" href="#1-9">
                                            <b class="indicator-icon icon-right-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-right" id="arrow-right-10">
                                        <a class="arrow-link" href="#1-10">
                                            <b class="indicator-icon icon-right-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-right" id="arrow-right-11">
                                        <a class="arrow-link" href="#1-11">
                                            <b class="indicator-icon icon-right-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-right" id="arrow-right-12">
                                        <a class="arrow-link" href="#1-12">
                                            <b class="indicator-icon icon-right-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-right" id="arrow-right-13">
                                        <a class="arrow-link" href="#1-13">
                                            <b class="indicator-icon icon-right-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-right" id="arrow-right-14">
                                        <a class="arrow-link" href="#1-14">
                                            <b class="indicator-icon icon-right-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-right" id="arrow-right-15">
                                        <a class="arrow-link" href="#1-15">
                                            <b class="indicator-icon icon-right-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-right" id="arrow-right-16">
                                        <a class="arrow-link" href="#1-16">
                                            <b class="indicator-icon icon-right-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-right" id="arrow-right-17">
                                        <a class="arrow-link" href="#1-17">
                                            <b class="indicator-icon icon-right-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-right" id="arrow-right-18">
                                        <a class="arrow-link" href="#1-18">
                                            <b class="indicator-icon icon-right-caret"></b>
                                        </a>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="title-card-row">
                        <div class="row-container">
                            <div class="row-sub-container row-header">
                                <h2 class="row-head">
                                    <a class="row-title" href="category">
                                        <div class="row-header-title">
                                            Trending Now
                                        </div>
                                    </a>
                                </h2>
                            </div>
                            <div class="row-sub-container row-footer">
                            </div>

                            <div id="2" class="slider" style="--total-items: 18; --slider-index: 1;">
                                <!-- Placeholders are used to round up to the nearest multiple of 6 -->
                                <!-- This is ONLY built for laptops/pc's (hover wont work on mobiles, as touch screen) -->
                                <!-- Make id's reflect the container aswell, e.g. id="2-1" is container 1, item 1
                                    #2-14, #2.14, #2,14 #2@14, #2%14, #s2i1, #s2-i1, #s2.i1
                                -->
                                <div id="2-1" class="slider-item item-placeholder" style="--item-index: 1;">
                                    <div class="item-contents">
                                        <img src="/assets/film-1.jpg">
                                    </div>
                                </div>
                                <div id="2-2" class="slider-item item-placeholder" style="--item-index: 2;">
                                    <div class="item-contents">
                                        <img src="/assets/film-1.jpg">
                                    </div>
                                </div>
                                <div id="2-3" class="slider-item item-placeholder" style="--item-index: 3;">
                                    <div class="item-contents">
                                        <img src="/assets/film-1.jpg">
                                    </div>
                                </div>
                                <div id="2-4" class="slider-item item-placeholder" style="--item-index: 4;">
                                    <div class="item-contents">
                                        <img src="/assets/film-1.jpg">
                                    </div>
                                </div>

                                <div id="2-5" class="slider-item" style="--item-index: 5;">
                                    <div class="item-contents">
                                        <img src="/assets/film-1.jpg">
                                    </div>
                                </div>
                                <div id="2-6" class="slider-item" style="--item-index: 6;">
                                    <div class="item-contents">
                                        <img src="/assets/film-1.jpg">
                                    </div>
                                </div>

                                <div id="2-7" class="slider-item" style="--item-index: 7;">
                                    <div class="item-contents">
                                        <img src="/assets/film-1.jpg">
                                    </div>
                                </div>
                                <div id="2-8" class="slider-item" style="--item-index: 8;">
                                    <div class="item-contents">
                                        <img src="/assets/film-1.jpg">
                                    </div>
                                </div>
                                <div id="2-9" class="slider-item" style="--item-index: 9;">
                                    <div class="item-contents">
                                        <img src="/assets/film-1.jpg">
                                    </div>
                                </div>
                                <div id="2-10" class="slider-item" style="--item-index: 10;">
                                    <div class="item-contents">
                                        <img src="/assets/film-1.jpg">
                                    </div>
                                </div>
                                <div id="2-11" class="slider-item" style="--item-index: 11;">
                                    <div class="item-contents">
                                        <img src="/assets/film-1.jpg">
                                    </div>
                                </div>
                                <div id="2-12" class="slider-item" style="--item-index: 12;">
                                    <div class="item-contents">
                                        <img src="/assets/film-1.jpg">
                                    </div>
                                </div>

                                <div id="2-13" class="slider-item" style="--item-index: 13;">
                                    <div class="item-contents">
                                        <img src="/assets/film-1.jpg">
                                    </div>
                                </div>
                                <div id="2-14" class="slider-item" style="--item-index: 14;">
                                    <div class="item-contents">
                                        <img src="/assets/film-1.jpg">
                                    </div>
                                </div>
                                <div id="2-15" class="slider-item" style="--item-index: 15;">
                                    <div class="item-contents">
                                        <img src="/assets/film-1.jpg">
                                    </div>
                                </div>
                                <div id="2-16" class="slider-item" style="--item-index: 16;">
                                    <div class="item-contents">
                                        <img src="/assets/film-1.jpg">
                                    </div>
                                </div>
                                <div id="2-17" class="slider-item" style="--item-index: 17;">
                                    <div class="item-contents">
                                        <img src="/assets/film-1.jpg">
                                    </div>
                                </div>
                                <div id="2-18" class="slider-item" style="--item-index: 18;">
                                    <div class="item-contents">
                                        <img src="/assets/film-1.jpg">
                                    </div>
                                </div>

                                <span class="arrows arrows-left">
                                    <div class="arrow arrow-left" id="arrow-left-1">
                                        <a class="arrow-link" href="#2-1">
                                            <b class="indicator-icon icon-left-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-left" id="arrow-left-2">
                                        <a class="arrow-link" href="#2-2">
                                            <b class="indicator-icon icon-left-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-left" id="arrow-left-3">
                                        <a class="arrow-link" href="#2-3">
                                            <b class="indicator-icon icon-left-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-left" id="arrow-left-4">
                                        <a class="arrow-link" href="#2-4">
                                            <b class="indicator-icon icon-left-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-left" id="arrow-left-5">
                                        <a class="arrow-link" href="#2-5">
                                            <b class="indicator-icon icon-left-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-left" id="arrow-left-6">
                                        <a class="arrow-link" href="#2-6">
                                            <b class="indicator-icon icon-left-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-left" id="arrow-left-7">
                                        <a class="arrow-link" href="#2-7">
                                            <b class="indicator-icon icon-left-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-left" id="arrow-left-8">
                                        <a class="arrow-link" href="#2-8">
                                            <b class="indicator-icon icon-left-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-left" id="arrow-left-9">
                                        <a class="arrow-link" href="#2-9">
                                            <b class="indicator-icon icon-left-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-left" id="arrow-left-10">
                                        <a class="arrow-link" href="#2-10">
                                            <b class="indicator-icon icon-left-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-left" id="arrow-left-11">
                                        <a class="arrow-link" href="#2-11">
                                            <b class="indicator-icon icon-left-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-left" id="arrow-left-12">
                                        <a class="arrow-link" href="#2-12">
                                            <b class="indicator-icon icon-left-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-left" id="arrow-left-13">
                                        <a class="arrow-link" href="#2-13">
                                            <b class="indicator-icon icon-left-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-left" id="arrow-left-14">
                                        <a class="arrow-link" href="#2-14">
                                            <b class="indicator-icon icon-left-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-left" id="arrow-left-15">
                                        <a class="arrow-link" href="#2-15">
                                            <b class="indicator-icon icon-left-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-left" id="arrow-left-16">
                                        <a class="arrow-link" href="#2-16">
                                            <b class="indicator-icon icon-left-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-left" id="arrow-left-17">
                                        <a class="arrow-link" href="#2-17">
                                            <b class="indicator-icon icon-left-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-left" id="arrow-left-18">
                                        <a class="arrow-link" href="#2-18">
                                            <b class="indicator-icon icon-left-caret"></b>
                                        </a>
                                    </div>
                                </span>
                                <span class="arrows arrows-right">
                                    <div class="arrow arrow-right" id="arrow-right-1">
                                        <a class="arrow-link" href="#2-1">
                                            <b class="indicator-icon icon-right-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-right" id="arrow-right-2">
                                        <a class="arrow-link" href="#2-2">
                                            <b class="indicator-icon icon-right-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-right" id="arrow-right-3">
                                        <a class="arrow-link" href="#2-3">
                                            <b class="indicator-icon icon-right-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-right" id="arrow-right-4">
                                        <a class="arrow-link" href="#2-4">
                                            <b class="indicator-icon icon-right-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-right" id="arrow-right-5">
                                        <a class="arrow-link" href="#2-5">
                                            <b class="indicator-icon icon-right-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-right" id="arrow-right-6">
                                        <a class="arrow-link" href="#2-6">
                                            <b class="indicator-icon icon-right-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-right" id="arrow-right-7">
                                        <a class="arrow-link" href="#2-7">
                                            <b class="indicator-icon icon-right-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-right" id="arrow-right-8">
                                        <a class="arrow-link" href="#2-8">
                                            <b class="indicator-icon icon-right-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-right" id="arrow-right-9">
                                        <a class="arrow-link" href="#2-9">
                                            <b class="indicator-icon icon-right-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-right" id="arrow-right-10">
                                        <a class="arrow-link" href="#2-10">
                                            <b class="indicator-icon icon-right-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-right" id="arrow-right-11">
                                        <a class="arrow-link" href="#2-11">
                                            <b class="indicator-icon icon-right-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-right" id="arrow-right-12">
                                        <a class="arrow-link" href="#2-12">
                                            <b class="indicator-icon icon-right-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-right" id="arrow-right-13">
                                        <a class="arrow-link" href="#2-13">
                                            <b class="indicator-icon icon-right-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-right" id="arrow-right-14">
                                        <a class="arrow-link" href="#2-14">
                                            <b class="indicator-icon icon-right-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-right" id="arrow-right-15">
                                        <a class="arrow-link" href="#2-15">
                                            <b class="indicator-icon icon-right-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-right" id="arrow-right-16">
                                        <a class="arrow-link" href="#2-16">
                                            <b class="indicator-icon icon-right-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-right" id="arrow-right-17">
                                        <a class="arrow-link" href="#2-17">
                                            <b class="indicator-icon icon-right-caret"></b>
                                        </a>
                                    </div>
                                    <div class="arrow arrow-right" id="arrow-right-18">
                                        <a class="arrow-link" href="#2-18">
                                            <b class="indicator-icon icon-right-caret"></b>
                                        </a>
                                    </div>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
            </div>
        </div>

        <script>
        /*
        When an arrow is clicked, make the targetted element have [target], so it can be combined in a css rule such as:
            element:target, element[target]
        Also, relinquish all elements with [target] of their target
        */
        $('a[href^="#"]').on('click', function(e) {
            e.preventDefault();

            var href_sep = $(this).attr('href').split('#');
            var url = href_sep[0];
            var target = href_sep[href_sep.length - 1];
            var slider_item = $('#' + target);
            var target_sep = target.split('-');
            var slider_index = target_sep[0];
            var item_index = target_sep[1];
            var slider = $('#' + slider_index)[0];

            $('#' + slider_index + ' .slider-item').removeAttr('target');

            history.pushState({}, '', url);

            slider_item.attr('target', '');
            slider_item[0].scrollIntoView();
        });

        /* Prevent left-most arrow from being shown when a slider 'resets'/initialises */
        $('.arrow-left:last-of-type').attr('prevent-compensation', '');
        </script>
    </body>
</html>
