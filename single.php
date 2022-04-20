<?php get_header(); ?>

    <!--page-title area-->
    <section class="page-title-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <ul class="page-list">
                            <li><a href="<?php bloginfo("home"); ?>">Anasayfa</a></li>
                            <li><a href="<?php bloginfo( "url" ) ?>/<?php $cc = get_the_category(); if ( ! empty( $cc ) ) { echo esc_html( $cc[0]->slug ); } ?>">
                            <?php $categories = get_the_category(); if ( ! empty( $categories ) ) { echo esc_html( $categories[0]->name ); } ?>
                        </a></li>
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


                            <div class="single-post-top-image ">
                                
                                <div class="details ">
									<h5 class="title "><?php the_title(); ?></h5>
									
                                    <div class="post-meta-single ">
                                        <ul>
                                            <li><a class="tag-base tag-blue" href="<?php bloginfo( "url" ) ?>/<?php $cc = get_the_category(); if ( ! empty( $cc ) ) { echo esc_html( $cc[0]->slug ); } ?>">
                                            <?php $categories = get_the_category(); if ( ! empty( $categories ) ) { echo esc_html( $categories[0]->name ); } ?></a></li>
                                            <li title="<?php $my_date = the_date( 'd-m-Y', '', '', false ); echo $my_date;  ?>"  datetime="<?php echo $my_date;  ?>"><p><i class="fa fa-clock-o"></i><?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' önce'; ?></p></li>
                                            <li class="comments">
                                    <i class="fa fa-comments"></i>
                                    <?php printf( _nx( '1 Yorum', '%1$s Yorum', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( get_comments_number() ) ); ?></li>
                                                                    </ul>
                                    </div>
                                    
                                </div>


                                <a href="https://www.atarikafa.com/core3" target="_blank" style=" display:none ">
                                    <img src="https://www.atarikafa.com/wp-content/uploads/2021/05/core-i2.jpg" style="width:100%" />
                                </a><br><br>




								
								<div class="atari-thumb">
                                  <?php the_post_thumbnail( "large" ); ?>
                                </div>
								<br><br>
                            </div>
                            

                            <span class="atari-single-p">
                                <?php the_content(); ?>
                            </span>

                            <?php endwhile;   ?>



					
				
                            <?php 
                            $terms = get_the_term_list( $post->ID, 'indirme_linki' ); $strip_terms = strip_tags( $terms ); 
                            
                            if(in_category(4) and in_category(6) ){ } else{
                                if(!empty($strip_terms)){  
                                
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
                                href="<?php echo $strip_terms; ?>" 
                                style="border-radius:6px" target="_blank" rel="noreferrer noopener">
                                

                                İNDİR –  <?php the_title(); ?></a>
                                
                                </div>
                                <?php }  
                            }
                            
                            ?>
                            
                            <?php  if(in_category(237)){  ?>
                            <br>
                            <p style="color:gray; font-size:14px; line-height: 17px; ">
                            MultiMC uygulaması açık kaynak geliştirilen çoklu profil oyun ve modding uygulamasıdır. <br>
                            Minecraft oyuncuları MultiMC ile profiller oluşturabilir, haritalar paylaşabilir, modlar kurabilir ve mod paketleri kurabilirler.<br>
                            MultiMC geliştiricleri arasında Mojang/Minecraft çalışanları bile <a href="https://github.com/MultiMC/MultiMC5/graphs/contributors" title="archive.is/EZ6Tv" style="color:red" target="blank" rel="nofollow">bulunmaktadır</a>. 
                            <br>
                            <a href="https://multimc.org/" title="archive.is/bNXbM" style="color:red" target="blank" rel="nofollow">MultiMC.org</a>
                            <br><br>

                            MultiMC is a free, open source launcher for Minecraft. It allows you to have multiple, cleanly 
                            separated instances of Minecraft (each with their own mods, texture packs, saves, etc) and helps 
                            you manage them and their associated options with a simple and powerful interface.  
                            Some of the developers of MultiMC client have <a href="https://github.com/MultiMC/MultiMC5/graphs/contributors" title="archive.is/EZ6Tv" style="color:red" target="blank" rel="nofollow">Mojang/Minecraft employees</a>. 
                            Minecraft communities can create profiles, share maps, install mods and mods packs with MultiMC.<br>
                            <a href="https://multimc.org/" title="archive.is/bNXbM" style="color:red" target="blank" rel="nofollow">MultiMC.org</a>

                            </p>
                            
                            <?php } ?>

                            
                            
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
                            <strong>Mod listesi</strong> için .zip'i indirin içindeki modlist.html de tam mod listesi var.
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



                            <div class="article-author-block"> 
                                <?php echo get_avatar( get_the_author_meta( 'ID') , 50); ?> 
                                <div class="article-body">
                                Yazar: <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) );?>"><?php the_author(); ?></a><br>
                                
                                <?php echo get_the_author_meta( 'description' );?>
                                
                                </div>
                            </div>
                            <br><br>




                            <?php comments_template('/comments.php'); ?>






                            
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 pd-top-50">


                    <?php include("kategoriler.php"); ?>

                    <ul class="widgets-atarikafa">
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar_Single') ) : ?>
                    <?php endif; ?>
                    </ul>		


                </div>
            </div>
        </div>
    </div>




<?php get_footer(); ?>