<?php
/**
 * Sample implementation of the Custom Header feature
 *
 * You can add an optional custom header image to header.php like so ...
 *
	<?php the_header_image_tag(); ?>
 *
 * @link https://developer.wordpress.org/themes/functionality/custom-headers/
 *
 * @package Meet Metaslider
 */

/**
 * Set up the WordPress core custom header feature.
 *
 * @uses meet_metaslider_header_style()
 */
function meet_metaslider_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'meet_metaslider_custom_header_args', array(
		'default-image'          => '',
		'default-text-color'     => '1A2238',
		'height'             	 => 400,
		'flex-height'            => true,
		'default-image'			=> '%s/img/bg-img-2.png',
		'wp-head-callback'       => 'meet_metaslider_header_style',
	) ) );
	register_default_headers( array(
		'header-bg' => array(
			'url'           => '%s/img/bg-img.png',
			'thumbnail_url' => '%s/img/bg-img.png',
			'description'   => _x( 'Default', 'Default header image', 'meet-metaslider' )
		),	
		'header-bg' => array(
			'url'           => '%s/img/bg-img-2.png',
			'thumbnail_url' => '%s/img/bg-img-2.png',
			'description'   => _x( 'Default', 'Default header image 2', 'meet-metaslider' )
		),	
	) );

}
add_action( 'after_setup_theme', 'meet_metaslider_custom_header_setup' );

if ( ! function_exists( 'meet_metaslider_header_style' ) ) :
	/**
	 * Styles the header image and text displayed on the blog.
	 *
	 * @see meet_metaslider_custom_header_setup().
	 */
	function meet_metaslider_header_style() {
		$header_text_color = get_header_textcolor();
		$header_image = get_header_image();

		/*
		 * If no custom options for text are set, let's bail.
		 * get_header_textcolor() options: Any hex value, 'blank' to hide text. Default: add_theme_support( 'custom-header' ).
		 */
		if ( empty( $header_image ) && $header_text_color == get_theme_support( 'custom-header', 'default-text-color' ) ){
			return;
		}

	// If we get this far, we have custom styles. Let's do this.
		?>
		<style type="text/css">


			.site-title a,
			.site-description,
			.logofont,
			.site-title,
			.logodescription {
				color: #<?php echo esc_attr( $header_text_color ); ?>;
			}

			<?php if ( ! display_header_text() ) : ?>
				.logofont,
				.logodescription {
					position: absolute;
					clip: rect(1px, 1px, 1px, 1px);
					display:none;
				}
			<?php endif; ?>

			<?php header_image(); ?>"
			<?php
			if ( ! display_header_text() ) :
				?>
				.logofont,
				.site-title,
				p.logodescription{
					position: absolute;
					clip: rect(1px, 1px, 1px, 1px);
					display:none;
				}
				<?php
			else :
				?>
				.site-title a,
				.site-title,
				.site-description,
				.logodescription {
					color: #<?php echo esc_attr( $header_text_color ); ?>;
				}
			<?php endif; ?>
		</style>
		<?php
	}
endif;
