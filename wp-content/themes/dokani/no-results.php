<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * @package dokani
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<div class="no-results not-found">
	<div class="inside-article">
		<?php
		/**
		 * dokani_before_content hook.
		 *
		 * @since 1.0.0
		 *
		 * @hooked dokani_featured_page_header_inside_single - 10
		 */
		do_action( 'dokani_before_content' );
		?>

		<header class="entry-header">
			<h1 class="entry-title"><?php esc_html_e( 'Nothing Found', 'dokani' ); ?></h1>
		</header><!-- .entry-header -->

		<?php
		/**
		 * dokani_after_entry_header hook.
		 *
		 * @since 1.0.0
		 *
		 * @hooked dokani_post_image - 10
		 */
		do_action( 'dokani_after_entry_header' );
		?>

		<div class="entry-content">

				<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

					<p>
						<?php
						printf(
							/* translators: 1: Admin URL */
							wp_kses_post( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'dokani' ) ),
							esc_url( admin_url( 'post-new.php' ) )
						);
						?>
					</p>

				<?php elseif ( is_search() ) : ?>

					<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'dokani' ); // WPCS: XSS OK. ?></p>
					<?php get_search_form(); ?>

				<?php else : ?>

					<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'dokani' ); // WPCS: XSS OK. ?></p>
					<?php get_search_form(); ?>

				<?php endif; ?>

		</div><!-- .entry-content -->

		<?php
		/**
		 * dokani_after_content hook.
		 *
		 * @since 1.0.0
		 */
		do_action( 'dokani_after_content' );
		?>
	</div><!-- .inside-article -->
</div><!-- .no-results -->
