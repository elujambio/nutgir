<?php get_header(); ?>

<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
	<div class="single-post">
		<h1><?php
foreach((get_the_category()) as $category) {
    echo $category->cat_name . ' ';
} ?></h1>
		<div class="post">
			<div class="post-image">
				<?php the_post_thumbnail(); ?>
			</div>
			<div class="post-structure">
				<h2 class="post-title"><?php the_title(); ?></h2>
				<label class="post-meta"><?php the_date(); ?> by <?php the_author(); ?></label>
				<div class="post-text"><?php the_content(); ?></div>
			</div>
		</div>
	</div>
	<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/single-page.js"></script>
