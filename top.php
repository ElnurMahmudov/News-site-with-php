<?php

$con = mysqli_connect('localhost','u1593433_news','elnur777!@','u1593433_news');
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        
            <title> <?php if(empty($taminfo['title'])){echo'Azərbaycandan və dünyadan xəbərlər';} else{echo $taminfo['title'] ;} ?> </title>

    <meta name="keywords" content='<?php if(empty($taminfo['title'])){echo'Azərbaycandan,və,dünyadan,xəbərlər,-,elnur.ml';}else{$keys = explode(' ',$taminfo['title']);for($i=0; $i<count($keys); $i++){echo $keys[$i].'.';}echo'elnur.ml';}
    ?>'/>
    <meta name="description" content="<?php if(empty($taminfo['title']))
    {echo'elnur.ml - Azərbaycanda və dünyada baş verən ən son xəbərlər';}
    else{echo mb_substr($taminfo['text'],0,75);echo'...';}?>" />
    
    <meta name="robots" content="index,follow"/>
    <meta name="generator" content="elnur.ml" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    

    <meta property="og:image" content="https://play-lh.googleusercontent.com/9joog1GCGFpY4BBHIKogu9BluZ0cGq0B6DPw0lG5jEmJHMhzxhrv-r0ZeUE_za3dn59j"/>
    <!--<meta property="og:image:secure_url" content="" /> -->
    <meta property="og:image:width" content="640" /> 
    <meta property="og:image:height" content="442" />

    <meta property="og:url" content="https://elnur.ml/"/>
    <meta property="og:title" content='Azərbaycandan və dünyadan xəbərlər - elnur.ml'/>
    <meta property="og:description" content='elnur.ml - Azərbaycanda və dünyada baş verən ən son xəbərlər'/>
    <meta property="og:site_name" content="Elnur.ml"/>
    <meta property="og:type" content="article"/>


    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content='Azərbaycandan və dünyadan xəbərlər - elnur.ml'/>
    <meta itemprop="description" content="elnur.ml - Azərbaycanda və dünyada baş verən ən son xəbərlər"/>
    <meta itemprop="image" content="https://play-lh.googleusercontent.com/9joog1GCGFpY4BBHIKogu9BluZ0cGq0B6DPw0lG5jEmJHMhzxhrv-r0ZeUE_za3dn59j"/>

    <!-- Twitter Card data -->
    <meta name="twitter:url" content="https://elnur.ml/" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:creator" content="@elnur.ml" />
    <meta name="twitter:title" content=" Azərbaycandan və dünyadan xəbərlər - elnur.ml " />
    <meta name="twitter:image" content="https://play-lh.googleusercontent.com/9joog1GCGFpY4BBHIKogu9BluZ0cGq0B6DPw0lG5jEmJHMhzxhrv-r0ZeUE_za3dn59j">       

    <meta property="article:section" content="elnur.ml - Azərbaycanda və dünyada baş verən ən son xəbərlər" />
    <meta property="article:tag" content="" />
    <meta property="article:published_time" content="" />

    <meta name="alexaVerifyID" content=""/>
    <meta name='yandex-verification' content='40a8629d6384ee6a' />
    <meta name="msvalidate.01" content="E61E404E3E67634BA7BC38EB81AE7718" />
    <meta name="google-site-verification" content="U4CdUUF9Iu2Z4i2km6ERiG50N7EIDgSIwGgoQzsZLew" />
        
        
        <meta charset="utf-8">
        <title>Ən sox xəbərlər</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Bootstrap News Template - Free HTML Templates" name="keywords">
        <meta content="Bootstrap News Template - Free HTML Templates" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet"> 

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/slick/slick.css" rel="stylesheet">
        <link href="lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>
