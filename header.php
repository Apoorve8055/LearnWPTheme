<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    
    <header>
        <section class="top-bar row">
            <div class="social-media-icon col-xl-10 col-md-8 col-sm-8 col-6">Social Media</div>
            <div class="search col-xl-2 col-md-4 col-sm-4 col-6 text-end">Search</div>
        </section>
        <section class="menu-area">
            <div class="container">
                <div class="row">
                    <section class="logo col-xl-2 col-md-2 col-sm-12 col-12 text-center">Logo</section>
                    <nav class="main-menu col-xl-10 col-md-10 text-end"> 
                        <?php wp_nav_menu(array('theme_location'=>'my_main_menu')); ?>
                    </nav>
                </div>
            </div>
        </section>
    </header>