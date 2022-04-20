<?php get_header(); ?>

    <!--page-title area-->
    <section class="page-title-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <ul class="page-list">
                            <li><a href="<?php bloginfo("home"); ?>">Anasayfa</a></li>
                            <li style="padding-left:10px"> <?php 
                                if(is_category()){
                                    single_cat_title();
                                }
                            
                                if(is_tag()){
                                    single_tag_title();
                                } 
                                ?></li>
                                <?php
                                    if(is_category() or is_tag()){
        
        
                                        $catID = get_the_category();
                                        
                                        echo category_description( $catID[0] ); 
                                    }
                                
                                ?>
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
                    

                    <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

                    <div class="single-blog-inner single-blog-inner-3">
                        <div class="single-blog-details">
                        <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail( "resim-800x460" ); ?>
                        </a>




                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="meta">
                                <span class="date">
                                    <i class="fa fa-calendar"></i>
                                    <?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' önce'; ?>
                                </span>
                                <span class="comments">
                                    <i class="fa fa-comments"></i>
                                    <?php printf( _nx( '1 Yorum', '%1$s Yorum', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( get_comments_number() ) ); ?>
                                </span>
                            </div>
                            
                            <p><?php the_excerpt(); ?></p>
                            <a class="btn btn-base" href="<?php the_permalink(); ?>">Devamını Görüntüle ➤</a>
                        </div>
                    </div>

                    <?php  endwhile; endif; wp_reset_query(); ?>


                    <nav class="mt-4">
                    <?php
                    global $wp_query;
                    $big = 999999999; // need an unlikely integer
                    echo '<ul class="sayfalama">';
                    echo paginate_links( array(
                        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                        'format' => '?paged=%#%',
                        'current' => max( 1, get_query_var('paged') ),
                        'total' => $wp_query->max_num_pages
                    ) );
                    echo '</ul>';
                    ?>
                    </nav> 

                    






                </div>
                <div class="col-lg-3 pd-top-50">


                    <?php include("kategoriler.php"); ?>

                    <ul class="widgets-atarikafa">
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar_Archive') ) : ?>
                    <?php endif; ?>
                    </ul>		


                </div>
            </div>
        </div>
    </div>




<?php get_footer(); ?>