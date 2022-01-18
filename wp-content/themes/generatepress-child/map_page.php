<?php /* Template Name: Map_page */ ?>
<?php
/**
 * The template is only for map page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package GeneratePress
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); ?>

	<div <?php generate_do_attr( 'content' ); ?>>

		<main <?php generate_do_attr( 'main' ); ?>>
			<?php
			/**
			 * generate_before_main_content hook.
			 *
			 * @since 0.1
			 */
			do_action( 'generate_before_main_content' );

			if ( generate_has_default_loop() ) {
				while ( have_posts() ) :

					the_post();

					generate_do_template_part( 'page' );

				endwhile;
			}

			/**
			 * generate_after_main_content hook.
			 *
			 * @since 0.1
			 */
			do_action( 'generate_after_main_content' );
			?>
			
			
			
			<!-- Here goes the map-->
asdasdasdas

			<div id="map"></div>
	<div>
        <span id="monthOutput"></span><br>
        <span id="yearOutput"></span>
    </div>
    <div class="slidecontainer">
        <input type="range" min="1" max="100" value="0" class="slider" id="dateRange">
    </div>
    <p>Value: <span id="demo"></span></p>


		</main>
	</div>

	<?php
	/**
	 * generate_after_primary_content_area hook.
	 *
	 * @since 2.0
	 */
	do_action( 'generate_after_primary_content_area' );

	generate_construct_sidebars();

	get_footer();
?>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxNSGmfapR0Ehm_EiNHlOn4kIMoqIu-E4&callback=initMap&libraries=&v=beta"
        async>
    </script>
    <script>
        initSlider();
    </script>