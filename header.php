<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Varia
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) ) {
		wp_body_open();
	}
?>
	
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'varia' ); ?></a>

		<header id="masthead" class="sorella_site-header alignfull">

        <button class="menu-toggle">menu</button>

            <div class="sorella_navigation">
                <nav class="nav-header-left" role="navigation" aria-label="<?php esc_html__('Left Navigation', '_themename') ?>">
                        <?php wp_nav_menu( array('theme_location' => 'header-left-menu', 'container' => false) ) ?>
                    </nav>

                    <nav class="nav-header-right" role="navigation" aria-label="< ?php esc_html__('Right Navigation', '_themename') ?>">
                        <?php wp_nav_menu( array('theme_location' => 'header-right-menu', 'container' => false) ) ?>
                    </nav>

                    <div class="sorella_site-header__logo">
                    <?php if(has_custom_logo()){
                                the_custom_logo();
                            } else { ?> 
                                <a href="<?php echo esc_url(home_url('/')) ?>" class="c-header__blogname">
                                    <?php esc_html(bloginfo('name')) ?>
                                </a>
                    <?php } ?>
                    </div>
            </div><!-- .sorella_navigation -->

			<?php if ( has_nav_menu( 'social' ) ) : ?>
				<nav class="social-navigation" aria-label="<?php esc_attr_e( 'Social Links Menu', 'varia' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'social',
							'menu_class'     => 'social-links-menu',
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>' . varia_get_icon_svg( 'link' ),
							'depth'          => 1,
						)
					);
					?>
				</nav><!-- .social-navigation -->
			<?php endif; ?>

		</header><!-- #masthead -->

	<div id="content" class="site-content">
