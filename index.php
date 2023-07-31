<?php
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
                            <form method="post" action="index.php">
                            <input type="text" name="axtar" placeholder="Xəbər axtar">
                            </form>
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
            <div class="container">
                <div class="row">
                    
                    
                                
                    <div class="col-md-6 tn-left">
                        <div class="row tn-slider">
                            
                         
                             
                            <?php
                                
                                $sec = mysqli_query($con, "SELECT * FROM newsdata WHERE (title LIKE '%".$_POST['axtar']."' OR text LIKE '%".$_POST['axtar']."') GROUP BY title ORDER BY tarix DESC LIMIT 3");
                                
                               
                                
                                while($info = mysqli_fetch_array($sec))
                                {
                                 $title = substr($info['title'],0,100);
                                echo'   
                            
                            
                            <div class="col-md-6">
                                <div class="tn-img">
                                   <a href="xeber.php?id='.$info['id'].'"><img style="width:600px; height:360px" alt="'.$info['title'].'" src="'.$info['image'].'"></a> 
                                    <div class="tn-title">
                                        <a title="'.$info['title'].'" href="xeber.php?id='.$info['id'].'">'.$title.' . . .</a>
                                    </div>
                                </div>
                            </div>
                            
                              
                             ';}
                    ?>  
                            
                        </div>
                    </div>
                    
                  
                    
                    
                    
                    
                    <div class="col-md-6 tn-right">
                        <div class="row">
                            
                           <?php
                                
                                $sec = mysqli_query($con, "SELECT * FROM newsdata WHERE cat='Kriminal' GROUP BY title ORDER BY tarix DESC LIMIT 4");
                                
                                while($info = mysqli_fetch_array($sec))
                                {
                                $title = substr($info['title'],0,80);
                                echo'
                                
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img style="width:300px; height:180px" alt="'.$info['title'].'" src="'.$info['image'].'" />
                                    <div class="tn-title">
                                        <a title="'.$info['title'].'" href="xeber.php?id='.$info['id'].'">'.$title.' . . .</a>
                                    </div>
                                </div>
                            </div>
                            
                              ';}
                    ?>
                    
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>

       

        <!-- Category News Start-->
        
        <div class="cat-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        
                        <h2>İdman</h2>
                        
                        <div class="row cn-slider">
                            
                               <?php
                                
                                $sec = mysqli_query($con, "SELECT * FROM newsdata WHERE cat='İdman' GROUP BY title ORDER BY tarix DESC");
                                
                                while($info = mysqli_fetch_array($sec))
                                {
                                
                                echo' 
                              <div class="col-md-6">
                                <div class="cn-img">
                                    <img style="width:300px; height:180px" alt="'.$info['title'].'" src="'.$info['image'].'" />
                                    <div class="cn-title">
                                        <a title="'.$info['title'].'" href="xeber.php?id='.$info['id'].'">'.$info['title'].'</a>
                                    </div>
                                </div>
                              </div>
                            ';}
                                
                                ?>
                        </div>
                    </div>    
                    <div class="col-md-6">
                        
                        <h2>İqtisadiyyat</h2>
                        <div class="row cn-slider">
                            <?php
                              $sec = mysqli_query($con, "SELECT * FROM newsdata WHERE cat='İkt' GROUP BY title ORDER BY tarix DESC");
                                
                                while($info = mysqli_fetch_array($sec))
                                {
                                echo' 
                                <div class="col-md-6">
                                  <div class="cn-img">
                                    <img style="width:300px; height:180px" alt="'.$info['title'].'" src="'.$info['image'].'" />
                                    <div class="cn-title">
                                        <a title="'.$info['title'].'" href="xeber.php?id='.$info['id'].'">'.$info['title'].'</a>
                                    </div>
                                  </div>
                                </div>
                                
                                ';}
                                ?>
                                
                         </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category News End-->

        <!-- Category News Start-->
        
        <div class="cat-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        
                        <h2>Mədəniyyət</h2>
                        <div class="row cn-slider">
                            
                               <?php
                                
                                $sec = mysqli_query($con, "SELECT * FROM newsdata WHERE cat='Mədəniyyət' GROUP BY title ORDER BY tarix DESC");
                                
                                while($info = mysqli_fetch_array($sec))
                                {
                                
                                echo' 
                              <div class="col-md-6">
                                <div class="cn-img">
                                    <img style="width:300px; height:180px" alt="'.$info['title'].'" src="'.$info['image'].'" />
                                    <div class="cn-title">
                                        <a title="'.$info['title'].'" href="xeber.php?id='.$info['id'].'">'.$info['title'].'</a>
                                    </div>
                                </div>
                              </div>
                            ';}
                                
                                ?>
                        </div>
                    </div>    
                    <div class="col-md-6">
                        
                        <h2>Siyasət</h2>
                        <div class="row cn-slider">
                            <?php
                              $sec = mysqli_query($con, "SELECT * FROM newsdata WHERE cat='Siyasət' GROUP BY title ORDER BY tarix DESC");
                                
                                while($info = mysqli_fetch_array($sec))
                                {
                                echo' 
                                <div class="col-md-6">
                                  <div class="cn-img">
                                    <img style="width:300px; height:180px" alt="'.$info['title'].'" src="'.$info['image'].'" />
                                    <div class="cn-title">
                                        <a title="'.$info['title'].'" href="xeber.php?id='.$info['id'].'">'.$info['title'].'</a>
                                    </div>
                                  </div>
                                </div>
                                
                                ';}
                                ?>
                                
                         </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category News End-->

        
        <!-- Tab News Start-->
        <div class="tab-news">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#featured">Maraqlı xəbərlər</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#popular">Populyar xəbərlər</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#latest">Şou-biznes</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="featured" class="container tab-pane active">
                           
                                <div class="tn-news">
                                    
                                <?php
                              $sec = mysqli_query($con, "SELECT * FROM newsdata WHERE cat='Maraqlı' GROUP BY title ORDER BY tarix DESC LIMIT 3");
                                
                                while($info = mysqli_fetch_array($sec))
                                {
                                echo' 
                                    <div class="tn-img">
                                        <img style="width:150px; height:100px" alt="'.$info['title'].'" alt="'.$info['title'].'"  src="'.$info['image'].'" />
                                    </div>
                                    <div class="tn-title">
                                        <a title="'.$info['title'].'" href="xeber.php?id='.$info['id'].'">'.$info['title'].'</a>
                                    </div>
                                   
                               
                                 </div> 
                                    
                               
                                <div class="tn-news">
                                   
                                </div>
                                <div class="tn-news">
                                    
                                     ';}
                                ?>
                                </div>  
                            </div>
                            
                            
                            
                            <div id="popular" class="container tab-pane fade">
                                <div class="tn-news">
                                    <?php
                              $sec = mysqli_query($con, "SELECT * FROM newsdata WHERE cat='Cəmiyyət' GROUP BY title ORDER BY tarix DESC LIMIT 3");
                                
                                while($info = mysqli_fetch_array($sec))
                                {
                                echo' 
                                    <div class="tn-img">
                                        <img style="width:150px; height:100px" alt="'.$info['title'].'" alt="'.$info['title'].'" src="'.$info['image'].'" />
                                    </div>
                                    <div class="tn-title">
                                        <a title="'.$info['title'].'" href="xeber.php?id='.$info['id'].'">'.$info['title'].'</a>
                               </div>
                                   
                               
                                 </div> 
                                    
                               
                                <div class="tn-news">
                                   
                                </div>
                                <div class="tn-news">
                                    
                                     ';}
                                ?>
                                </div>  
                            </div>
                            
                            
                            <div id="latest" class="container tab-pane fade">
                                <div class="tn-news">
                                    <?php
                              $sec = mysqli_query($con, "SELECT * FROM newsdata WHERE cat='Şou-biznes' GROUP BY title ORDER BY tarix DESC LIMIT 3");
                                
                                while($info = mysqli_fetch_array($sec))
                                {
                                echo' 
                                    <div class="tn-img">
                                        <img style="width:150px; height:100px" alt="'.$info['title'].'" src="'.$info['image'].'" />
                                    </div>
                                    <div class="tn-title">
                                        <a title="'.$info['title'].'" href="xeber.php?id='.$info['id'].'">'.$info['title'].'</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    
                                </div>
                                <div class="tn-news">
                                           ';}
                                ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <ul class="nav nav-pills nav-justified">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="pill" href="#m-viewed">Dünya xəbərləri</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#m-read">Avto xəbərlər</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="pill" href="#m-recent">Turizm xəbərləri</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div id="m-viewed" class="container tab-pane active">
                                <div class="tn-news">
                                      <?php
                              $sec = mysqli_query($con, "SELECT * FROM newsdata WHERE cat='Dünya' GROUP BY title ORDER BY tarix DESC LIMIT 3");
                                
                                while($info = mysqli_fetch_array($sec))
                                {
                                echo'  
                                    <div class="tn-img">
                                        <img style="width:150px; height:100px" alt="'.$info['title'].'" src="'.$info['image'].'" />
                                    </div>
                                    <div class="tn-title">
                                        <a title="'.$info['title'].'" href="xeber.php?id='.$info['id'].'">'.$info['title'].'</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                    
                                </div>
                                <div class="tn-news">
                                   
                              
                                            ';}
                                ?> 
                                  </div>
                            </div>
                            
                            
                            
                            <div id="m-read" class="container tab-pane fade">
                                <div class="tn-news">
                                       <?php
                              $sec = mysqli_query($con, "SELECT * FROM newsdata WHERE cat='Avto-moto' GROUP BY title ORDER BY tarix DESC LIMIT 3");
                                
                                while($info = mysqli_fetch_array($sec))
                                {
                                echo'  
                                    <div class="tn-img">
                                        <img style="width:150px; height:100px" alt="'.$info['title'].'" src="'.$info['image'].'" />
                                    </div>
                                    <div class="tn-title">
                                        <a title="'.$info['title'].'" href="xeber.php?id='.$info['id'].'">'.$info['title'].'</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                   
                                </div>
                                <div class="tn-news">
                                    
                                            ';}
                                ?> 
                                </div>
                            </div>
                            <div id="m-recent" class="container tab-pane fade">
                                <div class="tn-news">
                                             <?php
                              $sec = mysqli_query($con, "SELECT * FROM newsdata WHERE cat='Turizm' GROUP BY title ORDER BY tarix DESC LIMIT 3");
                                
                                while($info = mysqli_fetch_array($sec))
                                {
                                echo'  
                                    <div class="tn-img">
                                        <img style="width:150px; height:100px" alt="'.$info['title'].'" src="'.$info['image'].'" />
                                    </div>
                                    <div class="tn-title">
                                        <a title="'.$info['title'].'" href="xeber.php?id='.$info['id'].'">'.$info['title'].'</a>
                                    </div>
                                </div>
                                <div class="tn-news">
                                   
                                </div>
                                <div class="tn-news">
                                         
                                            ';}
                                ?>  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Tab News Start-->

        <!-- Main News Start-->
        <div class="main-news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                  
       
                         <div class="row">
          
                                                <?php
                                     $num = 9;
                                $page = intval($_GET['page']);
                                
                                $result = mysqli_query($con, "SELECT * FROM newsdata GROUP BY title ORDER BY tarix DESC ");
                                
                               $posts = mysqli_num_rows($result);
                                
                                $total = intval(($posts - 1) / $num) + 1;
                                
                                if(empty($page) or $page < 0) $page = 1;
                                if($page > $total) $page = $total;
                                
                                $start = $page * $num - $num;
                                             
                                                
                              $sec = mysqli_query($con, "SELECT * FROM newsdata WHERE (title LIKE '%".$_POST['axtar']."' OR text LIKE '%".$_POST['axtar']."') GROUP BY title ORDER BY tarix DESC LIMIT ".$start.", ".$num);
                                
                                while($info = mysqli_fetch_array($sec))
                                {
                                echo'  <div class="col-md-4">  
                                <div class="mn-img">
                                    <img style="width:350px; height:250px" alt="'.$info['title'].'" src="'.$info['image'].'" />
                                    <div class="mn-title">
                                        <a title="'.$info['title'].'" href="xeber.php?id='.$info['id'].'">'.$info['title'].'</a>
                                    </div>
                                </div>
                                </div>
                                
                                            ';}
                 
               ?>
                                
                               

                         
                        </div>
                        
 
                           <?php    
                              
                                // Проверяем нужны ли стрелки назад
if ($page != 1) $pervpage = '<a href="?page=1"><<</a>
                               <a href="?page='. ($page - 1) .'"><</a> ';
// Проверяем нужны ли стрелки вперед
if ($page != $total) $nextpage = ' <a href="?page='. ($page + 1) .'">></a>
                                   <a href="?page=' .$total. '>>></a>';

// Находим две ближайшие станицы с обоих краев, если они есть
if($page - 2 > 0) $page2left = ' <a href="?page='. ($page - 2) .'">'. ($page - 2) .'</a> | ';
if($page - 1 > 0) $page1left = '<a href="?page='. ($page - 1) .'">'. ($page - 1) .'</a> | ';
if($page + 2 <= $total) $page2right = ' | <a href="?page='. ($page + 2) .'">'. ($page + 2) .'</a>';
if($page + 1 <= $total) $page1right = ' | <a href="?page='. ($page + 1) .'">'. ($page + 1) .'</a>';

// Вывод меню
echo $pervpage.$page2left.$page1left.'<b>'.$page.'</b>'.$page1right.$page2right.$nextpage;


    ?> 

 
                            </div>

                    <div class="col-lg-3">
                      
                      
                        
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
                    <a href="xeber.php?id='.$info['id'].'">Bizimlə əlaqə yaradın</a>
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
