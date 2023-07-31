<?php

$con = mysqli_connect('localhost','u1593433_news','elnur777!@','u1593433_news');
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Əlaqə</title>
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
                                
                                        $sec = mysqli_query($con, "SELECT cat FROM newsdata GROUP BY cat");
                                        
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
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Baş səhifə</a></li>
                    <li class="breadcrumb-item active">Əlaqə</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="contact-form">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" placeholder="Adınız" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" class="form-control" placeholder="E-mail" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Mövzu" />
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" rows="5" placeholder="Mətn"></textarea>
                                </div>
                                <div><button class="btn" type="submit">Göndər</button></div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact-info">
                            <h3>Əlaqə</h3>
                            
                            <h4><i class="fa fa-map-marker"></i>Bül bül pr. 43. Bakı, Azərbaycan</h4>
                            <h4><i class="fa fa-envelope"></i>mahmudov_313@mail.ru</h4>
                            <h4><i class="fa fa-phone"></i>+994(51) 388 00 57</h4>
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
        
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
                    <a href="xeber.php?id='.$info['id'].'">Bizimlə əlaqə yaradın</a>
                </div>
            </div>
        </div>
        <!-- Footer Menu End -->

        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 copyright">
                        <p>Copyright &copy; <a href="https://htmlcodex.com">HTML Codex</a>. All Rights Reserved</p>
                    </div>

                    <div class="col-md-6 template-by">
                        <p>Template By <a href="https://htmlcodex.com">HTML Codex</a></p>
                    </div>
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
