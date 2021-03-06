<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sun city</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<!--        <link href="../css/style.css" rel="stylesheet" type="text/css">-->
<!--        <link href="../css/media_style.css" rel="stylesheet" type="text/css">-->
        <?php 
        echo link_tag('assets/main/css/style.css');
        echo link_tag('assets/main/css/media_style.css');
        echo link_tag('assets/main/css/tcal.css');
        ?>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css' />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="<?php echo base_url()?>assets/main/js/tcal.js"></script>
        <script src="<?php echo base_url()?>assets/main/js/custom-select.min.js"></script>
    </head>             
    <body>
        <a id="nav-toggle" href="#"><span></span></a>
        <div class="header">
            <div class="running_line">
                <div class="marquee">
                    <span>Наш бегущий текст. Текст, который будет двигаться с права налево.</span>
                </div>
                <div class="header_language">
                    <div class="language">
                        <select>
                            <option>EN</option>
                            <option>RUS</option>
                            <option>CHI</option>
                        </select>
                    </div>
                </div>
                <?php
                    $user_id = user('id');
                    if($user_id){
                        $name ="<a href=''><span class=\"entypo-user\"></span><p>".user("fullname")." </p><div class=\"content_login\"></div></a>|";
                        $sign_logout="<a href='/logout'><p>Выйти</p><span class=\"entypo-logout\"></span></a>";
                    }else{
                        $name ="<a href='/login'><p>Войти </p><span class=\"entypo-login\"></span><div class=\"content_login\"></div></a>";
                        $sign_logout="<a href='/signup'><p>Регистрация</p><span class=\"entypo-user-add\"></span></a>";
                    }
                ?>
                <div>
                    <div class="sign_in">
                        <?php echo $name?>
                        <?php echo $sign_logout;?>
                    </div>
                </div>
            </div>
            
            <div class="navbar">
                <div class="nav_panel">
                    <div class="nav_p_logo">
                        <a href="/main">
                            <img src="<?php echo base_url()?>assets/main/image/logo.png">
                        </a>
                    </div>
                    <div class="nav_mob_call">
                        <a href=""><i class="material-icons">call</i></a>
                    </div>
                    <div class="nav_mob_menu">
                        <a class="nav_toggle" href="javascript:void(0);"><span></span></a>
                    </div>
                </div>
                <div class="nav_p_menu">
                    <ul>
                        <li><a href="#reviews">Home Page</a></li>
                        <li><a href="#courses">About us</a></li>
                        <li><a href="#academy">Universal Entertainment</a></li>
<!--                        <li><a href="#teachers">Elite reservation service</a></li>-->
                        <li><a href="#partners">Members</a></li>
                        <li><a href="#contact">Contact us</a></li>
<!--                        <li><a href="#contact">Job opportunity</a></li>-->
                    </ul>
                </div>
            </div>
        