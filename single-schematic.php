<?php get_header(); ?>

    <!--page-title area-->
    <section class="page-title-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner">
                        <ul class="page-list">
                            <li><a href="<?php bloginfo("home"); ?>">Anasayfa</a></li>
                            <li><a href="https://www.atarikafa.com/schematics/schematics/">Schematic</a></li>
                            <li style="padding-left:10px"> <?php the_title(); ?> Schematic, Şematik, 1.15, 1.16, 1.17</li>
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
                        <div class="single-blog-inner m-0 schematics-atari">

                            <?php while ( have_posts() ) : the_post(); ?>


                            <div class="single-post-top-image ">
                                
                                <div class="details ">
									<h5 class="title "><?php the_title(); ?>  Schematic, Şematik, 1.15, 1.16, 1.17</h5>
									
                                    <div class="post-meta-single " style="height: 16px;">
                                        <ul>
                                            <li><a class="tag-base tag-blue" href="https://www.atarikafa.com/schematics/schematics/">Schematic</a></li>
                                            <li title="<?php $my_date = the_date( 'd-m-Y', '', '', false ); echo $my_date;  ?>"  datetime="<?php  echo $my_date;  ?>"><p><i class="fa fa-clock-o"></i><?php echo esc_html( human_time_diff( get_the_time('U'), current_time('timestamp') ) ) . ' önce'; ?></p></li>
                                            <li class="comments">
                                    <i class="fa fa-comments"></i>
                                    <?php printf( _nx( '1 Yorum', '%1$s Yorum', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( get_comments_number() ) ); ?></li>
                                                                    </ul>
                                    </div>
                                    
                                </div>
								
								<div class="atari-thumb">
                                  <?php // the_post_thumbnail( "large" ); ?>
                                </div>
								<br><br>
                            </div>
                            

                            <span class="atari-single-p">
                                <?php the_content(); ?>
                            </span>




                            

                            <div class="wp-block-button" >
                                
                                <a class="wp-block-button__link has-background has-vivid-red-background-color" 
                                href="<?php $meta = get_post_meta( $post->ID, 'your_fields', true );  echo $meta['image'];  ?>" 
                                style="border-radius:6px; padding:25px" target="_blank" rel="noreferrer noopener">
                                

                                <?php the_title(); ?> SCHEMATIC İNDİR</a>
                                
                            </div>

                            <p style="font-size:15px; color:gray; margin-top:35px;">
                            - Tüm Şematikler Eski Mimar 1.12 play.atarikafa.com sunucusundan alınmıştır. <br>
                            - Bu şematikleri indirip istediğiniz gibi kullanabilirsiniz. <br>
                            - Şematikler zemin seviyesinde ve ortadan kopyalanır. Yapıştırırken aklınızda olsun. <br>
                            - Şematikler 1.12 de kaydediliyor. Şematikler 1.12, 1.13, 1.14, 1.15, 1.16 uyumlular. <br>
                            - Şematikleri dünyanıza aktarmak için WorldEdit plugin veya mod kullanmanız gerekir.
                            </p>



                            <?php endwhile; ?>

                            

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


                    <?php //include("kategoriler.php"); ?>

                    <ul class="widgets-atarikafa">
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar_Schematic') ) : ?>
                    <?php endif; ?>
                    </ul>		


                </div>
            </div>
        </div>
    </div>




<?php get_footer(); ?>