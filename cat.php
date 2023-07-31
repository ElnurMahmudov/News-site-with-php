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

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="tb-contact">
                            <p><i class="fas fa-envelope"></i>mahmudov_313@mail.ru</p>
                            <p><i class="fas fa-phone-alt"></i>+994(51)388 00 57</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="tb-menu">
                            <a href="xeber.php?id='.$info['id'].'">Haqqında</a>
                            <a href="xeber.php?id='.$info['id'].'">Məxfilik</a>
                            <a href="xeber.php?id='.$info['id'].'">Şərtlər</a>
                            <a href="xeber.php?id='.$info['id'].'">Əlaqə</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar Start -->
        
        <!-- Brand Start -->
        <div class="brand">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4">
                        <div class="b-logo">
                            <a href="index.php">
                                <img src="https://play-lh.googleusercontent.com/9joog1GCGFpY4BBHIKogu9BluZ0cGq0B6DPw0lG5jEmJHMhzxhrv-r0ZeUE_za3dn59j" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="b-search">
                            <input type="text" placeholder="Xəbər axtar">
                            <button><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Brand End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENYU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="index.php" class="nav-item nav-link active">Baş səhifə</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Kateqoriyalar</a>
                                <div class="dropdown-menu">
                                      <?php
                                      
                                     $sec = mysqli_query($con, "SELECT cat FROM newsdata WHERE (title LIKE '%".$_POST['axtar']."' OR text LIKE '%".$_POST['axtar']."') GROUP BY cat");
                                        
                                        
                                        while($info = mysqli_fetch_array($sec))
                                        {
                                        
                                        echo'
                                    <a href="cat.php?cat='.$info['cat'].'" class="dropdown-item">'.$info['cat'].'</a>
                                       ';}
                                       ?>
                                </div>
                            </div>
                            <a href="contact.php" class="nav-item nav-link">Bizimlə əlaqə</a>
                        </div>
                        <div class="social ml-auto">
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->

        <!-- Top News Start-->
        <div class="top-news">
            
        
          
        </div>

       



        <!-- Main News Start-->
        <div class="main-news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="row">
                            
                                                <?php
                                              
                                                
                              $sec = mysqli_query($con, "SELECT * FROM newsdata WHERE cat='".$_GET['cat']."' GROUP BY title ORDER BY tarix DESC LIMIT 12");
                                
                                while($info = mysqli_fetch_array($sec))
                                {
                                echo'  <div class="col-md-4">  
                                <div class="mn-img">
                                    <img style="width:300px; height:180px" src="'.$info['image'].'" />
                                    <div class="mn-title">
                                        <a href="xeber.php?id='.$info['id'].'">'.$info['title'].'</a>
                                    </div>
                                </div>
                                </div>
                                
                                
                                            ';}
                                ?>   
                           
                        </div>
                    </div>

                    <div class="col-lg-3">
                      
                      
                        <div class="mn-list">
                            <h3>Digər xəbərlər</h3>
                           <?php
                                $sec = mysqli_query($con, "SELECT * FROM newsdata WHERE (title LIKE '%".$_POST['axtar']."' OR text LIKE '%".$_POST['axtar']."') GROUP BY title ORDER BY tarix DESC LIMIT 30,5");
                                
                                while($info = mysqli_fetch_array($sec))
                                {
                                echo' <ul>
                                <li>
                                <a href="xeber.php?id='.$info['id'].'">'.$info['title'].'</a>
                            
                                </li> <br>  
                            </ul>    
                                                 ';}
                                ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main News End-->

       <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h3 class="title">Əlaqə</h3>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>Bül bül pr. 43. Bakı, Azərbaycan</p>
                                <p><i class="fa fa-envelope"></i>mahmudov_313@mail.ru</p>
                                <p><i class="fa fa-phone"></i>+994(51) 388 00 57</p>
                                <div class="social">
                                    <a href="xeber.php?id='.$info['id'].'"><i class="fab fa-twitter"></i></a>
                                    <a href="xeber.php?id='.$info['id'].'"><i class="fab fa-facebook-f"></i></a>
                                    <a href="xeber.php?id='.$info['id'].'"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="xeber.php?id='.$info['id'].'"><i class="fab fa-instagram"></i></a>
                                    <a href="xeber.php?id='.$info['id'].'"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                       
                    </div>

                    <div class="col-lg-3 col-md-6">
                        
                    </div>
                    
                   
                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Footer Menu Start -->
        <div class="footer-menu">
            <div class="container">
                <div class="f-menu">
                    <a href="xeber.php?id='.$info['id'].'">İstifadə qaydaları</a>
                    <a href="xeber.php?id='.$info['id'].'">Gizlilik Siyasəti</a>
                    <a href="xeber.php?id='.$info['id'].'">Yardım</a>
                    <a href="xeber.php?id='.$info['id'].'">Bizimlə reklam edin</a>
                    <a href="xeber.php?id='.$info['id'].'">Bizimlə əlaqə</a>
                </div>
            </div>
        </div>
        <!-- Footer Menu End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                  
                  
                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->

        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
