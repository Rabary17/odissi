<?php

/*
 * Template Name: Header
 *
 * 
 */

 if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<?php $viewport_content = apply_filters( 'hello_elementor_viewport_content', 'width=device-width, initial-scale=1' ); ?>
	<meta name="viewport" content="<?php echo esc_attr( $viewport_content ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <header class="container d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 ">
    <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
     <?php  $menu_items = wp_get_nav_menu_items("Menu 1"); 
        
        foreach ($menu_items as $item): ?>
                
                <li><a href="#" class="nav-link px-2 link-secondary"><?php echo $item->post_title; ?></a></li>

        <?php endforeach; ?>
      </ul>
      <div class="align-items-center logo" >
        <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <img src="http://odissi.test/wp-content/uploads/2022/03/cropped-figma-logo-6F8EFD765C-seeklogo.com_.png">
        </a>
      </div>

      
      <div class="col-md-3 text-end social">
        <i class="bi bi-twitter"></i>
        <i class="bi bi-facebook"></i>
        <i class="bi bi-linkedin"></i>
      </div>
   </header>
</head>
<body <?php body_class(); ?>>
