<?php get_header(); ?>
<div class="content-area">
        <main>
            <section class="slide">
                <div class="container">
                    <div class="row">
                        Slides
                    </div>
                </div>
            </section>
            <section class="services">
            <div class="container">
                    <div class="row">
                        Services
                    </div>
                </div>
            </section>
            <section class="middle-area">
                <div class="container">
                    <div class="row">
                        <?php get_sidebar();?>
                        <div class="news col-md-9">
                            <?php 
                            
                            if(have_posts()):
                                while(have_posts()):the_post();
                            ?>
                                <article>
                                    <h1><?php the_title();?></h1>
                                    <p>Posted in <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>
                                    <p>Categories: <?php the_category(''); ?> </p>
                                    <p><?php the_tags(''); ?></p>
                                    <p><?php the_content(); ?></p>
                                </article>
                            <?php endwhile; else:?>
                                <p>No Post</p>

                            <?php endif;?>
                            
                        </div>
                    </div>
                </div>
            </section>
            <section class="map"> 
                 <div class="container">
                    <div class="row">
                      Maps  
                    </div>
                </div></section>
        </main>
    </div>
<?php get_footer(); ?>