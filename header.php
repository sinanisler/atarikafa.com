<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( "name" ) ?></title>

    <link rel=icon href="<?php bloginfo("stylesheet_directory"); ?>/img/favicon.png" type="image/png">
    <link rel="stylesheet" href="<?php bloginfo("stylesheet_directory"); ?>/assets/css/vendor.css">
    <link rel="stylesheet" href="<?php bloginfo("stylesheet_directory"); ?>/assets/css/responsive.css">
    <link rel="stylesheet" href="<?php bloginfo("stylesheet_directory"); ?>/assets/css/style.css?v=0.23">
    <link rel="stylesheet" href="<?php bloginfo("stylesheet_directory"); ?>/style.css?v=0.64">
	

    <?php wp_head(); ?>
</head>
<body>



<?php /*
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(36976655, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/36976655" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

*/ ?>

    <div class="td-search-popup" id="td-search-popup">
        <form action="index.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Ara.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <div class="body-overlay" id="body-overlay"></div>



    <div class="navbar-area">


        <!-- navbar start -->
        <nav class="navbar navbar-expand-lg">
            <div class="container nav-container">
                <div class="responsive-mobile-menu">
                    <div class="logo d-lg-none d-block">
                        <a class="main-logo" href="<?php bloginfo("home"); ?>"><img src="<?php bloginfo("stylesheet_directory"); ?>/img/atarikafa-logo-beyaz.png" alt="img"></a>
                    </div>
                    <button class="menu toggle-btn d-block d-lg-none" data-target="#nextpage_main_menu" 
                    aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-left"></span>
                        <span class="icon-right"></span>
                    </button>
                </div>
                <div class="nav-right-part nav-right-part-mobile">
                    <a class="search header-search" href="#"><i class="fa fa-search"></i></a>
                </div>
                <div class="collapse navbar-collapse" id="nextpage_main_menu">
                    <a href="<?php bloginfo("home"); ?>" class="atari-home-url"> </a>

                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'ust_menu',
                            'menu_class'     => 'navbar-nav',
                            ) );
                    ?>

                    <?php /*
                    <ul class="navbar-nav menu-open">
                        <li class=" ">
                            <a href="index-2.html"><img src="<?php bloginfo("stylesheet_directory"); ?>/img/atarikafa-logo-beyaz.png"></a>
                        </li>
                        <li class="menu-item-has-children current-menu-item">
                            <a href="#">Kategoriler</a>
                            <ul class="sub-menu">
                                <li><a href="cat-tech.html">Tech</a></li>
                                <li><a href="cat-sports.html">Sports</a></li>
                                <li><a href="cat-lifestyle.html">Lifestyle</a></li>
                                <li><a href="cat-fashion.html">Fashion</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children current-menu-item">
                            <a href="#">Topluluk</a>
                            <ul class="sub-menu">
                                <li><a href="error.html">Error</a></li>
                                <li><a href="author.html">Author</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul>
                        </li>
                        <li class="menu-item-has-children current-menu-item">
                            <a href="#">Sıkça Sorulan Sorular</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                                <li><a href="blog-details-2.html">Blog Details 2</a></li>
                            </ul>
                        </li>
                    </ul>
                    */ ?>






                </div>
                <div class="nav-right-part nav-right-part-desktop">
                    <div class="menu-search-inner">
                        <form action="<?php echo home_url( '/' ); ?>" method="get">
                            <input type="text" name="s" placeholder="Sitede Ara...">
                            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- navbar end -->

