<?php
/**
 * Displays header site branding
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-branding">
	<div class="wrap">

		<?php //the_custom_logo(); ?>

		<div class="site-branding-text">
			<?php if(is_home()) { ?>
          <h1 class="logo"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
        <?php } else { ?>
          <div class="logo"><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></div>
        <?php } ?>
		</div><!-- .site-branding-text -->

		<?php if ( ( twentyseventeen_is_frontpage() || ( is_home() && is_front_page() ) ) && ! has_nav_menu( 'top' ) ) : ?>
		<a href="#content" class="menu-scroll-down"><?php echo twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ); ?><span class="screen-reader-text"><?php _e( 'Scroll down to content', 'twentyseventeen' ); ?></span></a>
	<?php endif; ?>

	</div><!-- .wrap -->
</div><!-- .site-branding -->
