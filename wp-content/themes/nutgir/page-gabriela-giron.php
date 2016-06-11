<?php get_header(); ?>

<div class="about-me big">
		<h1>Sobre Mi</h1>
		<div class="profile-image">
			<?php
			$query = new WP_Query('page_id=105');
			if( $query->have_posts() ) : $query->the_post();  ?>
				<?php the_post_thumbnail(); ?>

			<?php endif; ?>		
		</div>
		<div class="bio">
			<label>Especialista en nutrición</label>
			<h1><span>Gabriela</span>&nbsp;<span>Girón</span></h1>
			<div>
				<?php $cat_id = 6; //the certain category ID
				$query = new WP_Query('page_id=105');
				if( $query->have_posts() ) : $query->the_post();  ?>
					<p class="post-text"><?php
					the_content();
					?></p>
				<?php endif; ?>					
			</div>
		</div>
	</div>

<?php get_footer(); ?>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/scripts/single-page.js"></script>
