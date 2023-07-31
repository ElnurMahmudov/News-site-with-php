<?php

$con = mysqli_connect('localhost','u1593433_news','elnur777!@','u1593433_news');
$tarix=date('Y-m-d H:i:s');

$id = (int)$_GET['id'];

$tamsec = mysqli_query($con,"SELECT * FROM newsdata WHERE id='".$id."'");

if(mysqli_num_rows($tamsec)>0)
{
  $taminfo = mysqli_fetch_array($tamsec);
}
else{echo'
  <meta http-equiv="refresh" content="0; URL=http://elnur.ml/">'; exit;}


include"top.php";
?>


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
                    <li class="breadcrumb-item"><a href="index.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-back" viewBox="0 0 16 16">
              <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2V2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2z"/>
                                </svg> Əsas səhifəyə qayıt</a></li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Single News Start-->
        <div class="single-news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="sn-container">
                            <div class="sn-img">
                                <img src="<?=$taminfo['image'] ?>" />
                            </div>
                            <div class="sn-content">
                                <h1 class="sn-title"><?=$taminfo['title'] ?></h1>
                                <p><?=$taminfo['text'] ?>
                                </p>
                                <h6><b><font color=red>Kateqoriya:</font> <font color=blue><?=$taminfo['cat'] ?></font></b></h6>
                                 <h6><b><font color=red>Yaradıldı:</font><font color=blue> <?=$taminfo['created'] ?></font></b></h6>
                                 <h6><b><font color=red>Paylaşıldı:</font><font color=blue> <?=$taminfo['tarix'] ?></font></b></h6>
                                 <h6><b><font color=red>Mənbə:</font><font color=blue> <?=$taminfo['source'] ?></font></b></h6>
                            </div>
                        </div>
                        
                   <div class="col-md-18">
                        <div class="contact-form">
                            <h4><b><font color=red>Şərhlər</font></b></h4>
                            
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" name="ad" class="form-control" placeholder="Adınızı qeyd edin" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="email" name="email" class="form-control" placeholder="E-mail ünvanınızı daxil edin" />
                                    </div>
                                </div>
                                
  <?php
   
    if(isset($info['d1']))
   {  
      

    $ad=trim($_POST['ad']);
    $ad=strip_tags($ad);
    $ad=htmlspecialchars($ad);
    $ad=mysqli_real_escape_string($con, $ad);
    
    $email=trim($_POST['email']);
    $email=strip_tags($email);
    $email=htmlspecialchars($email);
    $email=mysqli_real_escape_string($con, $email);
    
    $text=trim($_POST['text']);
    $text=strip_tags($text);
    $text=htmlspecialchars($text);
    $text=mysqli_real_escape_string($con, $text);
    
    $meqale_id=trim($_POST['meqale_id']);
    $meqale_id=strip_tags($meqale_id);
    $meqale_id=htmlspecialchars($meqale_id);
    $meqale_id=mysqli_real_escape_string($con, $meqale_id);

       if(!empty($ad) && !empty($email) && !empty($text))
       


        {
            $elaveet=mysqli_query($con, "INSERT INTO comments(ad,email,text,tarix,meqale_id)
            
            VALUES('".$ad."','".$email."','".$text."','".$tarix."','".$meqale_id."')");

             if($elaveet==true)
                {echo'<div class="alert alert-success" role="alert">
                   Şərhiniz qeydə alındı</div>';}

             else
                {echo'<div class="alert alert-success" role="alert">
                   Şərhiniz qeydə alınmadı</div><br><br>';}
        }
        
        else
            {echo'<div class="alert alert-success" role="alert">
            ERROR</div>';}
       }

    

  
  ?>
                                
                                
                                <div class="form-group">
                                    <textarea name="text" class="form-control" rows="5" placeholder="Fikirlərinizi bölüşün"></textarea>
                                </div>
                                <div><button class="btn" name="d1" type="submit">Şərh bildir</button></div>
                            </form>
                        </div>
                    </div>
                        
                   </div>

                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="sidebar-widget">
                                <h2 class="sw-title">Daha çox xəbər</h2>
                                <div class="news-list">
                                    
                                         <?php
                                
                                $sec = mysqli_query($con, "SELECT * FROM newsdata GROUP BY title ORDER BY tarix DESC LIMIT 15,7");
                                
                                while($info = mysqli_fetch_array($sec))
                                {
                                
                                echo'<div class="nl-item">
                                        <div class="nl-img">
                                            <img src="'.$info['image'].'" />
                                        </div>
                                        <div class="nl-title">
                                            <a href="xeber.php?id='.$info['id'].'">'.$info['title'].'</a>
                                        </div>
                                        </div>
                                        ';}
                                        ?>
                             </div>
                            </div>
                            

                            

                            <div class="sidebar-widget">
                                <h2 class="sw-title">Kateqoriyalar</h2>
                                <div class="category">
                                    <ul>
                                        <li>          
                                       
                                        </li>
                                        <li><a href="">
                                            
                                             <?php
                                      $xsec = mysqli_query($con, "SELECT cat FROM newsdata WHERE cat='Kriminal'");
                                      
                                        $xsay=mysqli_num_rows($xsec);
                                         
                                     $sec = mysqli_query($con, "SELECT cat FROM newsdata WHERE cat='Kriminal' LIMIT 1");
                                       
                                       while($info = mysqli_fetch_array($sec))
                                       {
                                        echo'
                                    <a href="http://elnur.ml/cat.php?cat=Kriminal">'.$info['cat'].'</a>
                                     </a><span>( <b>'.$xsay.'</b> xəbər )</span
                                       ';}
                                       ?>
                                            
                                           </li>
                                        <li><a href="http://elnur.ml/cat.php?cat=D%C3%BCnya">Dünya</a><span>(
                                          <?php
                                      $xsec = mysqli_query($con, "SELECT cat FROM newsdata WHERE cat='Dünya'");
                                      
                                        $xsay=mysqli_num_rows($xsec);
                                         {echo'<b>'.$xsay.'</b> xəbər';}?>
                                        )</span></li>
                                        
                                           </li>
                                        <li><a href="http://elnur.ml/cat.php?cat=%C4%B0dman">İdman</a><span>(
                                          <?php
                                      $xsec = mysqli_query($con, "SELECT cat FROM newsdata WHERE cat='İdman'");
                                      
                                        $xsay=mysqli_num_rows($xsec);
                                         {echo'<b>'.$xsay.'</b> xəbər';}?>
                                        )</span></li>
                                        
                                          </li>
                                        <li><a href="http://elnur.ml/cat.php?cat=M%C3%BCharib%C9%99">Müharibə</a><span>(
                                          <?php
                                      $xsec = mysqli_query($con, "SELECT cat FROM newsdata WHERE cat='Müharibə'");
                                      
                                        $xsay=mysqli_num_rows($xsec);
                                         {echo'<b>'.$xsay.'</b> xəbər';}?>
                                        )</span></li>
                                        
                                         </li>
                                        <li><a href="http://elnur.ml/cat.php?cat=Siyas%C9%99t">Siyasət</a><span>(
                                          <?php
                                      $xsec = mysqli_query($con, "SELECT cat FROM newsdata WHERE cat='Siyasət'");
                                      
                                        $xsay=mysqli_num_rows($xsec);
                                         {echo'<b>'.$xsay.'</b> xəbər';}?>
                                        )</span></li>
                                      
                                      
                                       </li>
                                        <li><a href="http://elnur.ml/cat.php?cat=%C4%B0qtisadiyyat">İqtisadiyyat</a><span>(
                                          <?php
                                      $xsec = mysqli_query($con, "SELECT cat FROM newsdata WHERE cat='İqtisadiyyat'");
                                      
                                        $xsay=mysqli_num_rows($xsec);
                                         {echo'<b>'.$xsay.'</b> xəbər';}?>
                                        )</span></li>
                                        </li>
                                        
                                          </li>
                                        <li><a href="http://elnur.ml/cat.php?cat=M%C9%99d%C9%99niyy%C9%99t">Mədəniyyət</a><span>(
                                          <?php
                                      $xsec = mysqli_query($con, "SELECT cat FROM newsdata WHERE cat='İqtisadiyyat'");
                                      
                                        $xsay=mysqli_num_rows($xsec);
                                         {echo'<b>'.$xsay.'</b> xəbər';}?>
                                        )</span></li>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                           
                            
                            <div class="sidebar-widget">
                                <h2 class="sw-title">Digər kateqoriyalar</h2>
                                <div class="tags">
                                    <a href="http://elnur.ml/cat.php?cat=Turizm">Turizm</a>
                                    <a href="http://elnur.ml/cat.php?cat=%C5%9Eou-biznes">Şou biznes</a>
                                    <a href="http://elnur.ml/cat.php?cat=Avto-Moto">Avto</a>
                                    <a href="http://elnur.ml/cat.php?cat=%C4%B0KT">Texnologiya</a>
                                    <a href="http://elnur.ml/cat.php?cat=Maraql%C4%B1">Maraqlı</a>
                                    <a href="http://elnur.ml/cat.php?cat=Az%C9%99rbaycanda%20koronavirusla%20ba%C4%9Fl%C4%B1%20x%C9%99b%C9%99rl%C9%99r">Koronavirus</a>
                                    <a href="http://elnur.ml/cat.php?cat=C%C9%99miyy%C9%99t">Cəmiyyət</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Single News End-->        
        
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
