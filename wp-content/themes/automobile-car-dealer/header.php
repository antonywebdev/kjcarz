<?php
/**
 * The Header for our theme.
 * @package Automobile Car Dealer
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open(); 
  } else { 
    do_action( 'wp_body_open' ); 
  } ?>
  <?php if(get_theme_mod('automobile_car_dealer_preloader',false) != '' || get_theme_mod( 'automobile_car_dealer_display_preloader',false) != ''){ ?>
    <div class="frame w-100 h-100">
      <div class="loader">
        <div class="dot-1"></div>
        <div class="dot-2"></div>
        <div class="dot-3"></div>
      </div>
    </div>
  <?php }?>
  <div class="row top-bar">
    <div class="col-lg-8 col-md-8 col-sm-12 topbar-announce call-mail">
       <?php if( get_theme_mod( 'automobile_car_dealer_mail','' ) != '') { ?>
                      <a class="mail" href="mailto:<?php echo esc_url( get_theme_mod('automobile_car_dealer_mail','') ); ?>"><i class="<?php echo esc_attr(get_theme_mod('automobile_car_dealer_email_icon','fas fa-envelope')); ?> me-1"></i><?php echo esc_html( get_theme_mod('automobile_car_dealer_mail','' )); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('automobile_car_dealer_mail','' )); ?></span></a>
                    <?php }?>
                    <?php if( get_theme_mod( 'automobile_car_dealer_phone','' ) != '') { ?>
                      <a class="call" href="tel:<?php echo esc_url( get_theme_mod('automobile_car_dealer_phone','' )); ?>"><i class="<?php echo esc_attr(get_theme_mod('automobile_car_dealer_phone_icon','fa fa-phone')); ?> me-1"></i><?php echo esc_html( get_theme_mod('automobile_car_dealer_phone','') ); ?><span class="screen-reader-text"><?php echo esc_html( get_theme_mod('automobile_car_dealer_phone','') ); ?></span></a>
                    <?php }?>
                    <span class="address"> <i class="fas fa-map-marker-alt"></i>KJ Carz, Arumpakkam, Chennai</span>
    </div>

<div class="col-lg-1 col-md-1 col-sm-12 appoinment-block">
<?php if( get_theme_mod( 'automobile_car_dealer_button_link','' ) != '') { ?>
                  <div class="appointbtn text-center">
                    <a href="<?php echo esc_url( get_theme_mod('automobile_car_dealer_button_link','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('automobile_car_dealer_appointment_icon','fas fa-calendar-alt')); ?> me-2"></i><?php esc_html_e( 'MAKE AN APPOINTMENT','automobile-car-dealer' ); ?><span class="screen-reader-text"><?php esc_html_e( 'MAKE AN APPOINTMENT','automobile-car-dealer' );?></span></a>
                  </div>
                <?php }?>
</div>
<div class="col-lg-2 col-md-2 col-sm-12 topbar-announce socialbox">
<?php if( get_theme_mod( 'automobile_car_dealer_cont_facebook') != '') { ?>
<a href="<?php echo esc_url( get_theme_mod( 'automobile_car_dealer_cont_facebook','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('automobile_car_dealer_facebook_icon','fab fa-facebook-f')); ?> me-2"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','automobile-car-dealer' );?></span></a>
<?php } ?>
<?php if( get_theme_mod( 'automobile_car_dealer_cont_twitter') != '') { ?>
<a href="<?php echo esc_url( get_theme_mod( 'automobile_car_dealer_cont_twitter','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('automobile_car_dealer_twitter_icon','fab fa-twitter')); ?> me-2" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','automobile-car-dealer' );?></span></a>
<?php } ?>
<?php if( get_theme_mod( 'automobile_car_dealer_pinterest') != '') { ?>
<a href="<?php echo esc_url( get_theme_mod( 'automobile_car_dealer_pinterest','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('automobile_car_dealer_pinterest_icon','fab fa-pinterest')); ?> me-2" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Pinterest','automobile-car-dealer' );?></span></a>
<?php } ?>
<?php if( get_theme_mod( 'automobile_car_dealer_tumblr') != '') { ?>
<a href="<?php echo esc_url( get_theme_mod( 'automobile_car_dealer_tumblr','' ) ); ?>"><i class="<?php echo esc_attr(get_theme_mod('automobile_car_dealer_tumblr_icon','fab fa-tumblr')); ?> me-2" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Tumblr','automobile-car-dealer' );?></span></a>
<?php } ?>
<?php if( get_theme_mod( 'automobile_car_dealer_instagram') != '') { ?>
<a href="<?php echo esc_url( get_theme_mod( 'automobile_car_dealer_instagram','' ) ); ?>" class="me-2"><i class="<?php echo esc_attr(get_theme_mod('automobile_car_dealer_instagram_icon','fab fa-instagram')); ?>" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram','automobile-car-dealer' );?></span></a>
<?php } ?>
<?php if( get_theme_mod( 'automobile_car_dealer_linkedin') != '') { ?>
<a href="<?php echo esc_url( get_theme_mod( 'automobile_car_dealer_linkedin','' ) ); ?>" class="me-2"><i class="<?php echo esc_attr(get_theme_mod('automobile_car_dealer_linkedin_icon','fab fa-linkedin-in')); ?> me-3" aria-hidden="true"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin','automobile-car-dealer' );?></span></a>
<?php } ?>

  </div>

  </div>
  <header role="banner">
    <a class="screen-reader-text skip-link" href="#skip_content"><?php esc_html_e( 'Skip to content', 'automobile-car-dealer' ); ?></a>
    <div id="header" class="header-class <?php if( get_theme_mod( 'automobile_car_dealer_sticky_header', false) != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>
      <div class="container inner-box p-0">
        <div class="row m-0">
          <div class="col-lg-3 col-md-12 logo_bar align-self-center">
            <div class="logo m-0 py-lg-3 pb-2 text-lg-center text-start align-self-center">
              <?php if ( has_custom_logo() ) : ?>
                <div class="site-logo"><?php the_custom_logo(); ?></div>
              <?php endif; ?>
              <?php $blog_info = get_bloginfo( 'name' ); ?>
              <?php if ( ! empty( $blog_info ) ) : ?>
                <?php if( get_theme_mod('automobile_car_dealer_site_title_enable',true) != ''){ ?>
                  <?php if ( is_front_page() && is_home() ) : ?>
                    <h1 class="site-title p-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="p-0"><?php bloginfo( 'name' ); ?></a></h1>
                  <?php else : ?>
                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="p-0"><?php bloginfo( 'name' ); ?></a></p>
                  <?php endif; ?>
                <?php }?>
              <?php endif; ?>
              <?php
              $description = get_bloginfo( 'description', 'display' );
              if ( $description || is_customize_preview() ) :
                ?>
                <?php if( get_theme_mod('automobile_car_dealer_site_tagline_enable',true) != ''){ ?>
                  <p class="site-description">
                    <?php echo esc_html($description); ?>
                  </p>
                <?php }?>
              <?php endif; ?>      
            </div>
            <?php 
              if(has_nav_menu('primary')){ ?>
              <div class="toggle-menu responsive-menu align-self-center <?php if( get_theme_mod( 'automobile_car_dealer_display_fixed_header', false) != '') { ?> sticky-header"<?php } else { ?>close-sticky <?php } ?>">
                <button role="tab" onclick="automobile_car_dealer_responsive_menu_open()" class="mobiletoggle"><i class="<?php echo esc_attr(get_theme_mod('automobile_car_dealer_responsive_menu_open_icon','fas fa-bars')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','automobile-car-dealer'); ?></span>
                </button>
              </div>
            <?php }?>
          </div>
          <div class="col-lg-9 col-md-5 p-0 align-self-center">
            <div class="topbar search-bar-block row m-0 py-3 px-0">
              
              <div class="col-lg-12 col-md-12 col-12 header-icon-wrapper">
                <div class="main-search">
                  <span><a class="me-4"><i class="<?php echo esc_attr(get_theme_mod('automobile_car_dealer_search_icon','fas fa-search')); ?> pt-1 me-3"></i></a></span>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9 col-9 view-cars-btn">
                  <span><a href="#" class="menu-button-text">View Our Cars
                </a></span>
                </div>
              </div>
            </div>
            <div class="searchform_page w-100 h-100">
              <div class="close w-100 text-end me-4"><a href="#maincontent"><i class="fa fa-times"></i></a></div>
              <div class="search_input w-100">
                <?php get_search_form(); ?>
              </div>
            </div>
            <div>
              <div class="row m-0">
                <div class="col-lg-9 col-md-6 p-0 align-self-center">
                  <div id="navbar-header" class="menu-brand text-center">
                    <div class="responsive-search">
                      <?php get_search_form();?>
                    </div>
                    <nav id="site-navigation" class="primary-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'automobile-car-dealer' ); ?>">
                      <?php 
                        if(has_nav_menu('primary')){
                          wp_nav_menu( array( 
                            'theme_location' => 'primary',
                            'container_class' => 'main-menu-navigation clearfix' ,
                            'menu_class' => 'clearfix',
                            'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav text-start m-0 ps-0">%3$s</ul>',
                            'fallback_cb' => 'wp_page_menu',
                          ) );
                        } 
                      ?>
                    </nav>
                    <a href="javascript:void(0)" class="closebtn responsive-menu" onclick="automobile_car_dealer_responsive_menu_close()"><i class="<?php echo esc_attr(get_theme_mod('automobile_car_dealer_responsive_menu_close_icon','fas fa-times')); ?>"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','automobile-car-dealer'); ?></span></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>