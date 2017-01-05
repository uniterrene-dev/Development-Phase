<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!doctype html>
<html>
<head>
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0">
<title>Lavish</title>
 <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() )?>/css/custom.css">
 <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() )?>/css/responsive.css">
 <link rel="stylesheet" type="text/css" href="<?php echo esc_url( get_template_directory_uri() )?>/css/font-awesome.min.css">
 <link rel="stylesheet" type="text/css"  href="<?php echo esc_url( get_template_directory_uri() )?>/css/normalize.css">
 <link rel="stylesheet" type="text/css"  href="<?php echo esc_url( get_template_directory_uri() )?>/css/styles.css">
 <link rel="stylesheet" type="text/css"  href="<?php echo esc_url( get_template_directory_uri() )?>/css/jquery.bxslider.css" >
 <link rel="stylesheet" type="text/css"  href="<?php echo esc_url( get_template_directory_uri() )?>/css/jquery_dropdown.css">

</head>

<body>
<div class="top-nav">
    <div class="wrapper">
        <div class="top-right-nav">
            <ul>
                <li><a href="#">MEMBERS LOGIN</a></li>
                <li><a href="#">MAGAZINE</a></li>
                <li><a href="#" id="show-city-list">CITIES</a></li>
                <li><a href="#">CONTACT</a></li>
                <li><a href="#">DEUTSCH</a></li>
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>
<!--<div class="city-menu">
    <div class="city-wrap">
                <ul>
            <li class="c-title">Germany</li>
                            <li><a href="berlin-escort.htm">Berlin</a></li>
                            <li><a href="bochum-escort.htm">Bochum</a></li>
                            <li><a href="bonn-escort.htm">Bonn</a></li>
                            <li><a href="cologne-escort.htm">Cologne</a></li>
                            <li><a href="dortmund-escort.htm">Dortmund</a></li>
                            <li><a href="dresden-escort.htm">Dresden</a></li>
                            <li><a href="dusseldorf-escort.htm">Dusseldorf</a></li>
                            <li><a href="essen-escort.htm">Essen</a></li>
                            <li><a href="frankfurt-escort.htm">Frankfurt</a></li>
                            <li><a href="hamburg-escort.htm">Hamburg</a></li>
                            <li><a href="hanover-escort.htm">Hanover</a></li>
                            <li><a href="karlsruhe-escort.htm">Karlsruhe</a></li>
                            <li><a href="leipzig-escort.htm">Leipzig</a></li>
                            <li><a href="mainz-escort.htm">Mainz</a></li>
                            <li><a href="mannheim-escort.htm">Mannheim</a></li>
                            <li><a href="munich-escort.htm">Munich</a></li>
                            <li><a href="nuremberg-escort.htm">Nuremberg</a></li>
                            <li><a href="stuttgart-escort.htm">Stuttgart</a></li>
                            <li><a href="wiesbaden-escort.htm">Wiesbaden</a></li>
                    </ul>
                <ul>
            <li class="c-title">Austria</li>
                            <li><a href="bregenz-escort.htm">Bregenz</a></li>
                            <li><a href="graz-escort.htm">Graz</a></li>
                            <li><a href="innsbruck-escort.htm">Innsbruck</a></li>
                            <li><a href="kitzbuehel-escort.htm">Kitzbühel</a></li>
                            <li><a href="klagenfurt-escort.htm">Klagenfurt</a></li>
                            <li><a href="linz-escort.htm">Linz</a></li>
                            <li><a href="salzburg-escort.htm">Salzburg</a></li>
                            <li><a href="vienna-escort.htm">Vienna</a></li>
                            <li><a href="villach-escort.htm">Villach</a></li>
                            <li><a href="wels-escort.htm">Wels</a></li>
                    </ul>
                <ul>
            <li class="c-title">Switzerland</li>
                            <li><a href="basel-escort.htm">Basel</a></li>
                            <li><a href="bern-escort.htm">Bern</a></li>
                            <li><a href="chur-escort.htm">Chur</a></li>
                            <li><a href="geneva-escort.htm">Geneva</a></li>
                            <li><a href="lausanne-escort.htm">Lausanne</a></li>
                            <li><a href="lucerne-escort.htm">Lucerne</a></li>
                            <li><a href="st-gallen-escort.htm">St Gallen</a></li>
                            <li><a href="st-moritz-escort.htm">St Moritz</a></li>
                            <li><a href="winterthur-escort.htm">Winterthur</a></li>
                            <li><a href="zurich-escort.htm">Zurich</a></li>
                    </ul>
                <ul>
            <li class="c-title">Spain</li>
                            <li><a href="barcelona-escort.htm">Barcelona</a></li>
                            <li><a href="ibiza-escort.htm">Ibiza</a></li>
                            <li><a href="madrid-escort.htm">Madrid</a></li>
                            <li><a href="majorca-escort.htm">Majorca</a></li>
                            <li><a href="marbella-escort.htm">Marbella</a></li>
                            <li><a href="palma-escort.htm">Palma</a></li>
                            <li><a href="seville-escort.htm">Seville</a></li>
                            <li><a href="valencia-escort.htm">Valencia</a></li>
                    </ul>
                <ul>
            <li class="c-title">Benelux</li>
                            <li><a href="amsterdam-escort.htm">Amsterdam</a></li>
                            <li><a href="brussels-escort.htm">Brussels</a></li>
                            <li><a href="luxembourg-escort.htm">Luxembourg</a></li>
                    </ul>
                <ul>
            <li><a href="javascript:;" id="close-city-menu">Close list</a></li>
        </ul>
    </div>
</div>
<div class="filter_menu">
    <div class="filter_wrap">
                    <div class="filter-title">Sensual preferences</div>
            <ul>
                                    <li><a href="sensual-preferences/bisexual-escorts.htm">Bisexual Escorts</a></li>
                                    <li><a href="sensual-preferences/duo-escort-service.htm">Duo Escort Service </a></li>
                                    <li><a href="sensual-preferences/escorts-couples.htm">Escort Service couples</a></li>
                                    <li><a href="sensual-preferences/girlfriend-experience.htm">Girlfriend experience</a></li>
                            </ul>
                <div class="close-filter_menu"><a href="javascript:;" id="close-filter_menu">Close list</a></div>
    </div>
</div>-->
<div class="second-nav">
    <div class="wrapper">
        <a href="#"><img class="logo" src="<?php echo esc_url( get_template_directory_uri() )?>/images/header-logo.png" alt="logo" title="logo image"></a>
        <div class="main-nav">
            <ul>
                <li><a href="#" id="show-lady_menu">ESCORT LADIES</a></li>
                <li><a href="#">RATES & BOOKING</a></li>
                <li><a href="#">NEWS</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">JOBS</a></li>
            </ul>
        </div>
        <div id="mobile_nav"></div>
    </div>
</div>
<!--<div class="lady_menu">
    <div class="lady_wrap">
        <div class="all-ladies-link"><strong><a href="#">All Ladies</a></strong></div>
        <ul>
                            <li><a href="#">Aaliyah</a></li>
                            <li><a href="#">Alice</a></li>
                            <li><a href="#">Alina</a></li>
                            <li><a href="#">Amelie</a></li>
                            <li><a href="#">Anna</a></li>
                            <li><a href="#">Carolina</a></li>
                            <li><a href="#">Cheryl</a></li>
                            <li><a href="#">Claudia</a></li>
                            <li><a href="#">Emily</a></li>
                            <li><a href="#">Evelyn</a></li>
                            <li><a href="#">Isabelle</a></li>
                            <li><a href="#">Jasmin</a></li>
                            <li><a href="#">Julia</a></li>
                            <li><a href="#">Kiara</a></li>
                            <li><a href="#">Laura</a></li>
                            <li><a href="#">Lina</a></li>
                            <li><a href="#">Louise</a></li>
                            <li><a href="#">Mandy</a></li>
                            <li><a href="#">Mia</a></li>
                            <li><a href="#">Sandra</a></li>
                            <li><a href="#">Sasha</a></li>
                            <li><a href="#">Selina</a></li>
                            <li><a href="#">Sophie</a></li>
                            <li><a href="#">Stella</a></li>
                            <li><a href="#">Victoria</a></li>
                            <li><a href="#">Violett</a></li>
                    </ul>
        <div class="close-lady_menu"><a href="javascript:;" id="close-lady_menu">Close list</a></div>
    </div>
</div>-->
<div class="index-slide">
    <ul class="target-slider">
            <li>
              <a href="#">
                    <img src="<?php echo esc_url( get_template_directory_uri() )?>/images/slider-1.jpg" alt="slider1" title="banner slider">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?php echo esc_url( get_template_directory_uri() )?>/images/slider-1.jpg" alt="slider1" title="banner slider">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<?php echo esc_url( get_template_directory_uri() )?>/images/slider-2.jpg" alt="slider3" title="banner slider">
                </a>
            </li>
            <li>
                <a href="#s">
                    <img src="<?php echo esc_url( get_template_directory_uri() )?>/images/slider-3.jpg" alt="slider14" title="banner slider">
                </a>
                    </li>
        </ul>
        <div class="wrap-center-slide">
          <div class="big-button-slide">
            <a href="#">Meet Our Escort Ladies</a>
          </div>
        </div>
</div>

