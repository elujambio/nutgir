<?php get_header(); ?>
<?php 
	// $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

	// $the_query = new WP_Query( 'posts_per_page=3&paged=' . $paged ); 
 ?>
<?php
$cat_id = 2; //the certain category ID
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$args = array(
	'category_name'		=> 	'ebooks',
	// 'category__in'   	=> $cat_id,
	'posts_per_page' 	=> 5,
	'paged'          	=> $paged
);

?>
<div class="monthly-index">
	<h1>EBOOKS</h1>
	<div class="highlights">
		<?php 
		// $wp_query = new WP_Query( array('posts_per_page=3&paged=' . $paged, 'category__in' . array($cat_id))); 
		$wp_query = new WP_Query( $args ); 
		?>

		<?php if( $wp_query->have_posts() ) : ?>
			<?php while( $wp_query->have_posts() ) : $wp_query->the_post();  ?>
			<div class="monthly-challenge">
				<?php the_post_thumbnail() ?>
				<a class="highlights-link" href="<?php the_permalink(); ?>"></a>
			</div>
			<div class="monthly-challenge-info">
				<h2><?php the_title(); ?></h2>
				<label><?php the_date(); ?> by <?php the_author(); ?></label>
				<p><?php the_excerpt(); ?></p>
				<a class="" href="<?php the_permalink(); ?>">Ver más</a>
			</div>
		<?php endwhile; ?>
		<?php pagination_nav(); ?>
	<?php endif; ?>	
	</div>
</div>
<?php get_footer(); ?>

