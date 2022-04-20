<?php get_header(); ?>

    <div class="post-area banner-post-area pt-4 pd-bottom-30" style="padding-bottom:0px">
	

        <div class="container">
            <div class="row">
			
                
			
                <div class="col-lg-5 ">

                    <?php query_posts( 'posts_per_page=1&tag_id=164' ); while ( have_posts() ) : the_post(); ?>
                    <div class="single-post-wrap style-overlay atari-index-first">
                        <div class="thumb">
                            <a href="<?php the_permalink( ); ?>"><?php the_post_thumbnail('resim-500x280'); ?></a>
                            <a class="tag-base tag-blue" href="https://www.atarikafa.com/tag/atarikafa-mod-paketleri/" style="display:none">AtariKafa Mod Paketleri</a>
                        </div>
                        <div class="details">
                            <h5 class="title"><a href="<?php the_permalink( ); ?>" style="text-shadow: 2px 2px black;"><?php the_title(); ?></a></h5>


                            <div class="post-meta-single" style="margin-bottom:-1px; text-shadow: 2px 2px black;">
                                <ul>
                                    <li>
                                        <i class="fa fa-clock-o"></i>
                                        <?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' önce'; ?>
                                    </li>
                                    <li>
                                        <i class="fa fa-comments"></i>
                                        <?php printf( _nx( '1 Yorum', '%1$s Yorum', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( get_comments_number() ) ); ?>
                                    </li>
                                </ul>
                            </div>


                        </div>
                    </div>
                    <?php endwhile; wp_reset_query(); ?>



                    <div class="row">
                    
                        <?php query_posts( 'posts_per_page=2&tag_id=164&offset=1' ); while ( have_posts() ) : the_post(); ?>
                        <div class="col-lg-6 col-sm-6">
                            <div class="single-post-wrap style-overlay">
                                <div class="thumb">
                                <a href="<?php the_permalink( ); ?>"><?php the_post_thumbnail('resim-240x135'); ?></a>
                                </div>
                                <div class="details">

                                    <h6 class="title"><a href="<?php the_permalink( ); ?>" style="text-shadow: 2px 2px black;"><?php the_title(); ?></a></h6>


                                    <div class="post-meta-single" style="margin-bottom:-7px; text-shadow: 2px 2px black;">
                                        <ul>
                                            <li>
                                                <i class="fa fa-clock-o"></i>
                                                <?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' önce'; ?>
                                            </li>
                                            <li>
                                                <i class="fa fa-comments"></i>
                                                <?php printf( _nx( '1 Yorum', '%1$s Yorum', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( get_comments_number() ) ); ?>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <?php endwhile; wp_reset_query(); ?>


                    </div>

                </div>
				
				
				
				
                <div class="col-lg-4 col-sm-6 index-atari" style="padding-right:10px">
                    <div class="section-title style-two mb-4">
                        <h6 class="title" style="font-weight:400">AtariKafa Mod Paketleri</h6>
                    </div>
					
					<?php query_posts( 'posts_per_page=5&tag_id=164&offset=3' ); while ( have_posts() ) : the_post(); ?>
                    <div class="single-post-list-wrap ss-wrap-atari">
                        <div class="media">
                            <a href="<?php the_permalink(); ?>" class="media-left">
                            <?php the_post_thumbnail('resim-105x60'); ?>
                            </a>
                            <div class="media-body">
                                <div class="details">
                                    <h6 class="title"><a href="<?php the_permalink( ); ?>"><?php the_title(); ?></a></h6>
                                    <div class="post-meta-single">
                                        <ul>
                                            <li>
                                                <i class="fa fa-clock-o"></i>
                                                <?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' önce'; ?>
                                            </li>
                                            <li>
                                                <i class="fa fa-comments"></i>
                                                <?php printf( _nx( '1 Yorum', '%1$s Yorum', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( get_comments_number() ) ); ?>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
					<?php endwhile; wp_reset_query(); ?>
					
					
					
					
                </div>
				
				
				
				
				
                <div class="col-lg-3 col-sm-6 widget-category atarikafa-cat">
                    <div class="section-title style-two mb-4">
                        <h6 class="title" style="font-weight:400">Kategoriler</h6>
                    </div>
                    <div class="row custom-gutters-14">
                        <div class="col-sm-6 ">
                            <div class="atari-category">
                                <a class="atari-cat-link" href="https://www.atarikafa.com/minecraft-mod-paketleri/">Mod Paketleri</a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="atari-category">
                                <a class="atari-cat-link" href="https://www.atarikafa.com/minecraft-kaynak-paketleri/">Kaynak Paketleri</a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="atari-category">
                                <a class="atari-cat-link" href="https://www.atarikafa.com/tag/minecraft-survival-haritasi/">Survival Haritalar</a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="atari-category">
                                <a class="atari-cat-link" href="https://www.atarikafa.com/tag/minecraft-macera-haritasi/">Macera Haritalar</a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="atari-category">
                                <a class="atari-cat-link" href="https://www.atarikafa.com/tag/minecraft-bulmaca-haritasi/">Bulmaca Haritalar</a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="atari-category">
                                <a class="atari-cat-link" href="https://www.atarikafa.com/minecraft-seedler/">Minecraft Seedler</a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="atari-category">
                            <a class="atari-cat-link" href="https://www.atarikafa.com/minecraft-indir/">Minecraft İndir</a>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="atari-category">
                                <a class="atari-cat-link" href="https://www.atarikafa.com/schematics/schematics/">Minecraft Schematic</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>










    <div class="post-area banner-post-area pt-4 pd-bottom-30" style="background:#fdfdfd;  display:none">
        <div class="container">
        <div class="row">

            <div class="col-lg-12 ">
            <a href="https://www.atarikafa.com/kaspersky3" target="_blank">
                <img src="https://www.atarikafa.com/wp-content/uploads/2021/08/kaspersky-yatay1.png" style="width:100%; border:solid 1px lightgray" />
            </a>
            </div>

        </div>
        </div>
    </div>











<?php /*
        <div class="container pd-top-20" style="height:auto;">
        <div class="row" style="min-height:100px;">



                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- index-yatay -->
                <ins class="adsbygoogle"
                    style="display:block"
                    data-ad-client="ca-pub-7644416520223412"
                    data-ad-slot="1106711657"
                    data-ad-format="auto"
                    data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
                

        </div>
        </div>
*/ ?>



    

    <div class="post-area bg-sky pd-top-50 pd-bottom-50 content-atari-haritalar">
        <div class="container">
            <div class="row">




            <div class="col-lg-4 col-sm-6">
                    <div class="section-title">
                        <h6 class="title">Mod Paketleri</h6>
                    </div>
                    <div class="post-slider owl-carousel">


                        <div class="item">

                            <?php query_posts( 'posts_per_page=5&cat=6' ); while ( have_posts() ) : the_post(); ?>
                            <div class="single-post-list-wrap">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('resim-105x60'); ?>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="details">
                                            <h6 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h6>
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li>
                                                        <i class="fa fa-clock-o"></i>
                                                        <?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' önce'; ?>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-comments"></i>
                                                        <?php printf( _nx( '1 Yorum', '%1$s Yorum', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( get_comments_number() ) ); ?>
                                                    </li>
                                                </ul>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; wp_reset_query(); ?>

                        </div>

                        <div class="item">

                            <?php query_posts( 'posts_per_page=5&cat=6&&offset=5' ); while ( have_posts() ) : the_post(); ?>
                            <div class="single-post-list-wrap">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('resim-105x60'); ?>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="details">
                                            <h6 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h6>
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li>
                                                        <i class="fa fa-clock-o"></i>
                                                        <?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' önce'; ?>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-comments"></i>
                                                        <?php printf( _nx( '1 Yorum', '%1$s Yorum', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( get_comments_number() ) ); ?>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; wp_reset_query(); ?>

                        </div>


                        
                    </div>
                </div>
				
				



                <div class="col-lg-4 col-sm-6">
                    <div class="section-title">
                        <h6 class="title">Survival Haritaları</h6>
                    </div>
                    <div class="post-slider owl-carousel">


                        <div class="item">

                            <?php query_posts( 'posts_per_page=5&tag_id=28' ); while ( have_posts() ) : the_post(); ?>
                            <div class="single-post-list-wrap">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('resim-105x60'); ?>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="details">
                                            <h6 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h6>
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li>
                                                        <i class="fa fa-clock-o"></i>
                                                        <?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' önce'; ?>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-comments"></i>
                                                        <?php printf( _nx( '1 Yorum', '%1$s Yorum', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( get_comments_number() ) ); ?>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; wp_reset_query(); ?>

                        </div>

                        <div class="item">

                            <?php query_posts( 'posts_per_page=5&tag_id=28&&offset=5' ); while ( have_posts() ) : the_post(); ?>
                            <div class="single-post-list-wrap">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('resim-105x60'); ?>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="details">
                                            <h6 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h6>
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li>
                                                        <i class="fa fa-clock-o"></i>
                                                        <?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' önce'; ?>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-comments"></i>
                                                        <?php printf( _nx( '1 Yorum', '%1$s Yorum', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( get_comments_number() ) ); ?>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; wp_reset_query(); ?>

                        </div>


                        
                    </div>
                </div>
				
				
                <?php /*
                <div class="col-lg-4 col-sm-6">
                <br><br>

                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- single-sidebar -->
                <ins class="adsbygoogle" style="display: block;" data-ad-client="ca-pub-7644416520223412" data-ad-slot="9360606194" data-ad-format="auto" data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>

                </div>
                */ ?>



                
                <div class="col-lg-4 col-sm-6">
                    <div class="section-title">
                        <h6 class="title">Macera Haritaları</h6>
                    </div>
                    <div class="post-slider owl-carousel">


                        <div class="item">

                            <?php query_posts( 'posts_per_page=5&tag_id=22' ); while ( have_posts() ) : the_post(); ?>
                            <div class="single-post-list-wrap">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('resim-105x60'); ?>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="details">
                                            <h6 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h6>
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li>
                                                        <i class="fa fa-clock-o"></i>
                                                        <?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' önce'; ?>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-comments"></i>
                                                        <?php printf( _nx( '1 Yorum', '%1$s Yorum', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( get_comments_number() ) ); ?>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; wp_reset_query(); ?>

                        </div>

                        <div class="item">

                            <?php query_posts( 'posts_per_page=5&tag_id=22&&offset=5' ); while ( have_posts() ) : the_post(); ?>
                            <div class="single-post-list-wrap">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('resim-105x60'); ?>
                                        </a>
                                    </div>
                                    <div class="media-body">
                                        <div class="details">
                                            <h6 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h6>
                                            <div class="post-meta-single">
                                                <ul>
                                                    <li>
                                                        <i class="fa fa-clock-o"></i>
                                                        <?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' önce'; ?>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-comments"></i>
                                                        <?php printf( _nx( '1 Yorum', '%1$s Yorum', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( get_comments_number() ) ); ?>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; wp_reset_query(); ?>

                        </div>


                        
                    </div>
                </div>
				
				















            </div>
        </div>
    </div>

    
	
	
	<div class="post-area bg-sky pd-top-50 pd-bottom-50 schematic-atari" >
        <div class="container">
			<div class="section-title   mb-12">
				<h6 class="title" style="color:White; font-weight:400"><b>Son Eklenen</b> Schematicler</h6>
			</div>
            <div class="row">

            <?php query_posts( 'posts_per_page=16&post_type=schematic' ); while ( have_posts() ) : the_post(); ?>



				
                <div class="col-lg-3 col-sm-6">
                    <div class="single-post-wrap style-overlay">
                        <div class="thumb">
                            <a href="<?php the_permalink( ); ?>"><?php the_post_thumbnail('resim-350x200'); ?></a>
                            <a class="tag-base tag-purple" href="https://www.atarikafa.com/schematics/schematics/" style="left: 4px; top: 5px; font-size:13px">Schematic</a>
                        </div>
                        <div class="details" style="padding: 2px 6px;">
                            <div class="post-meta-single">
                                <p style="margin-bottom:-3px; color:#e1e1e1"><i class="fa fa-clock-o"></i><?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' önce'; ?></p>
                            </div>
                            <h6 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h6>
                        </div>
                    </div>
                </div>
                 
            
            <?php endwhile; wp_reset_query(); ?>



					
                
            </div>
        </div>
    </div>	
	
	
	

    

    

    
<?php get_footer(); ?>