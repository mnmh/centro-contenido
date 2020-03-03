<?php /* Template Name: Update */ acf_form_head(); ?>
<?php get_header(); ?>

<?php
	$args = array(
        'numberposts' => -1,
        'post_status' => 'draft'
    );

    $preregistro = get_posts( $args );

    // print_r($preregistro);

    // echo strtotime('today');

    foreach ($preregistro as $item):

    	$new_args = array(
    		'ID' => $item->ID,
            // 'post_title' => get_field('titulo', $item->ID),
    		'post_status' => 'publish',
    		// 'post_date_gmt' => gmdate( 'Y-m-d H:i:s', strtotime('today') )
    	);

    	// print_r($new_args);

    	// error_log('message');

    	// wp_update_post($new_args);
?>

<div class="elemento">
	<?php echo get_field('titulo', $item->ID) ?>
</div>

<?php endforeach; ?>

<?php get_footer(); ?>
