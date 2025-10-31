<?php

    /**
     * APP KEYS
     */
    $keys = ['app', 'head', 'home', 'header', 'footer', 'products'];


    /**
     * CSS PATHS
     */
    $cssPaths = [];

    foreach ($keys as $key) {
        $cssPaths[$key] = 'public/css/' . $key . '.css';
    }


    /**
     * JS PATHS
     */
    $jsPaths = [];

    foreach ($keys as $key) {
        $jsPaths[$key] = 'public/js/' . $key . '.js';
    }


    /**
     * APP IMAGE KEYS
     */
    $bgHomeMobile = 'public/images/app/bg-home-mobile.jpg';
    $bgHomeWeb = 'public/images/app/bg-home-web.jpg';
    $contact = 'public/images/app/contact.png';
    $facebook = 'public/images/app/facebook.png';
    $instagram = 'public/images/app/instagram.png';
    $lastApp = 'public/images/app/last-app.jpg';
    $linkedin = 'public/images/app/linkedin.png';
    $logoTrans = 'public/images/app/logo-trans.png';
    $logoWhite = 'public/images/app/logo-white.png';
    $profile = 'public/images/app/profile.png';
    $service = 'public/images/app/service.jpg';
    $twitter = 'public/images/app/twitter.png';


    /**
     * ERP IMAGE KEYS
     */
    $admin = 'public/images/erp-transport/admin.png';
    $dashboard = 'public/images/erp-transport/dashboard.png';
    $flotte = 'public/images/erp-transport/flotte.png';
    $leave = 'public/images/erp-transport/leave.png';
    $planning = 'public/images/erp-transport/planning.png';
    $tours = 'public/images/erp-transport/tours.png';

    
    /**
     * IMAGE PATHS
     */
    $appImgPaths = [];

    foreach ($appImgs as $key) {
        $appImgPaths[$key] = '';
    }


    /**
     * OTHER VARIABLES
     */
    $headPath = 'templates/base/head.php';


    include 'templates/base/header.php';

    include 'templates/home/index.php';

    include 'templates/base/footer.php';
?>