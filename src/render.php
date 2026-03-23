<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$attributes = wp_parse_args(
	$attributes,
	[
		'title' => '',
		'url'   => '',
		'label' => 'Read more',
	]
);

if ( empty( $attributes['title'] ) || empty( $attributes['url'] ) ) {
	return '';
}

$wrapper_attributes = get_block_wrapper_attributes(
	[
		'class' => 'mla-featured-resource',
	]
);
?>

<div <?php echo $wrapper_attributes; ?>>
	<h3 class="mla-featured-resource__title">
		<?php echo esc_html( $attributes['title'] ); ?>
	</h3>

	<a
		class="mla-featured-resource__link"
		href="<?php echo esc_url( $attributes['url'] ); ?>"
	>
		<?php echo esc_html( $attributes['label'] ); ?>
	</a>
</div>
