<?php
/**
 * Hooks for the footer.
 *
 * @package    ThemeGrill
 * @subpackage ColorMag
 * @since      ColorMag 2.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


if ( ! function_exists( 'colormag_main_section_inner_end' ) ) :

	/**
	 *  Main section inner ends.
	 */
	function colormag_main_section_inner_end() {
		?>
		</div><!-- .inner-wrap -->
		<?php
	}

endif;


if ( ! function_exists( 'colormag_main_section_end' ) ) :

	/**
	 * Main section ends.
	 */
	function colormag_main_section_end() {
		?>
		</div><!-- #main -->
		<?php
	}

endif;


if ( ! function_exists( 'colormag_advertisement_above_footer_sidebar' ) )  :

	/**
	 * Advertisement above footer sidebar area.
	 */
	function colormag_advertisement_above_footer_sidebar() {

		if ( is_active_sidebar( 'colormag_advertisement_above_the_footer_sidebar' ) ) :
			?>
			<div class="advertisement_above_footer">
				<div class="inner-wrap">
					<?php dynamic_sidebar( 'colormag_advertisement_above_the_footer_sidebar' ); ?>
				</div>
			</div>
			<?php
		endif;

	}

endif;


if ( ! function_exists( 'colormag_footer_start' ) ) :

	/**
	 * Footer starts.
	 */
	function colormag_footer_start() {

	}

endif;


if ( ! function_exists( 'colormag_footer_end' ) ) :

	/**
	 * Footer ends.
	 */
	function colormag_footer_end() {

	}

endif;


if ( ! function_exists( 'colormag_page_end' ) ) :

	/**
	 * Page end.
	 */
	function colormag_page_end() {
		?>
		</div><!-- #page -->
		<?php
	}

endif;
