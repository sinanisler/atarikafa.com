<?php get_header(); ?>

    <!--page-title area-->
    <section class="page-title-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <ul class="page-list">
                            <li><a href="<?php bloginfo("home"); ?>">Anasayfa</a></li>
                            <li style="padding-left:10px"> <?php the_title(); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--page-title area end--> 

    <div class="blog-page-area pd-bottom-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 pd-top-50">
                    <div class="blog-details-page-inner">
                        <div class="single-blog-inner m-0">




                            <?php while ( have_posts() ) : the_post(); ?>

                            <script>


                            var timeleft = 10;
                            var downloadTimer = setInterval(function(){
                            if(timeleft <= 0){
                                clearInterval(downloadTimer);
                                document.getElementById("saniyee").innerHTML = "0";
                            } else {
                                document.getElementById("saniyee").innerHTML = timeleft ;
                            }
                            timeleft -= 1;
                            }, 1000);

                            </script>

                            


                            <?php
					
                            $download = $_GET["download"];
                            
                            $terms = get_the_term_list( $download, 'indirme_linki' ); $strip_terms = strip_tags( $terms ); 
                            
                            
                            // $getterm = get_term_by('id', $download, 'indirme_linki');
                            
                            // echo $getterm->name;
                            ?>
                            
                            <meta http-equiv="refresh" content="10; URL='<?php echo $strip_terms ?>'" />
                            
                            <h1> İndirme Sayfasına Yönlendiriliyorsunuz - <span id="saniyee"></span> </h1>
                            
                            <a href="<?php echo $strip_terms ?>">Yönlendirme başlamazsa buraya tıklayınız.</a>
                            
                            
                            
                            <br><br>




                            <?php endwhile;   ?>





					
				
                            <?php 
                            $terms = get_the_term_list( $post->ID, 'indirme_linki' ); $strip_terms = strip_tags( $terms ); if(!empty($strip_terms)){  
                            
                            // echo $strip_terms
                            
                            /*
                            <a class="wp-block-button__link has-background has-vivid-red-background-color" 
                            href="http://download.atarikafa.com/serve/sitelinks/?id=516125&url=https://www.atarikafa.com/download/?download=<?php the_ID(); ?>" 
                            style="border-radius:6px" target="_blank" rel="noreferrer noopener">
                            
                            
                            <a class="wp-block-button__link has-background has-vivid-red-background-color" 
                            href="<?php echo $strip_terms; ?>" 
                            style="border-radius:6px" target="_blank" rel="noreferrer noopener">

                            
                            */
                            ?>
                            <br><br>

                            <div class="wp-block-button" >
                            
                            <a class="wp-block-button__link has-background has-vivid-red-background-color" 
                            href="https://www.atarikafa.com/download/?download=<?php the_ID(); ?>" 
                            style="border-radius:6px" target="_blank" rel="noreferrer noopener">
                            

                            İNDİR –  <?php the_title(); ?></a>
                            
                            </div>
                            <?php }  ?>
                            
                            
                            
                            
                            <?php  if(in_category(4)){  ?>
                            <br>
                            <p style="color:red">
                            Haritayı nasıl kuracağınızı bilmiyorsanız aşağıdaki videoyu izleyip öğrenebilirsiniz. <br>
                            </p>
                            <figure class="wp-block-embed-youtube wp-block-embed is-type-video is-provider-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio">
                            <div class="wp-block-embed__wrapper">
                            <iframe title="Harita Kurulum ve MultiMC X Kullanım" width="500" height="281" src="https://www.youtube.com/embed/bqQLUzrnKvE?feature=oembed" 
                            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="">
                            </iframe>
                            </div>
                            </figure>
                            <?php } ?>
                            
                            
                            <?php  if(in_category(6)){  ?>
                            <br>
                            <p style="color:red">
                            Bu Mod Paketini nasıl kuracağınızı bilmiyorsanız aşağıdaki videoyu izleyip öğrenebilirsiniz. <br>
                            </p>
                            <figure class="wp-block-embed-youtube wp-block-embed is-type-video is-provider-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio">
                            <div class="wp-block-embed__wrapper">
                            <iframe title="Modpack Kurulumu ve MultiMC X Kullanım" width="500" height="281" src="https://www.youtube.com/embed/6yB9LQJbFSc?feature=oembed" 
                            frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="">
                            </iframe>
                            </div>
                            </figure>
                            <?php } ?>
				
				



                            

                            <br><br>



                            <?php comments_template('/comments.php'); ?>






                            
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 pd-top-50">


                    <?php include("kategoriler.php"); ?>

                    <ul class="widgets-atarikafa">
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar_Download') ) : ?>
                    <?php endif; ?>
                    </ul>		


                </div>
            </div>
        </div>
    </div>




<?php get_footer(); ?>