<?php get_header(); ?>

	<?php if (is_home() && !is_paged()) : ?>
		<div class="about-me">
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
					<p>
						<?php $cat_id = 6; //the certain category ID
						$query = new WP_Query('page_id=105');
						if( $query->have_posts() ) : $query->the_post();  ?>
							<p class="post-text"><?php
							the_excerpt();
							?></p>
						<a class="" href="<?php the_permalink(); ?>">SABER MÁS</a>

						<?php endif; ?>					
					</p>
				</div>
			</div>
			<div class="highlights">
				<div class="monthly-challenge">
					<h4>Reto del mes</h4>
						<?php $cat_id = 2; //the certain category ID
						$latest_cat_post = new WP_Query( array('posts_per_page' => 1, 'category__in' => array($cat_id)));
						if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post();  ?>
							<?php the_post_thumbnail() ?>
							<a class="highlights-link" href="<?php the_permalink(); ?>"></a>
						<?php endwhile; endif; ?>	
				</div>
				<div class="programs">
					<?php $cat_id = 3; //the certain category ID
					$latest_cat_post = new WP_Query( array('posts_per_page' => 3, 'category__in' => array($cat_id)));
					if( $latest_cat_post->have_posts() ) : while( $latest_cat_post->have_posts() ) : $latest_cat_post->the_post();  ?>
						<div class="program">
							<h4>Programa</h4>
							<?php the_post_thumbnail() ?>
							<a class="highlights-link" href="<?php the_permalink(); ?>"></a>
						</div>
					<?php endwhile; endif; ?>	
					<div class="program products">
						<img src="<?php bloginfo('template_url'); ?>/images/green-superfood.jpg">
						<div class="image-overlay"></div>
						<h2>Productos</h2>
						<a class="highlights-link" href="productos"></a>
					</div>
					<div class="program infographics">
						<img src="<?php bloginfo('template_url'); ?>/images/infographic.jpeg">
						<div class="image-overlay"></div>
						<h2>Infografías</h2>
							<a class="highlights-link" href="infografías"></a>
					</div>
				</div>
				<form action="https://formspree.io/your@email.com"
				      method="POST">
					<div class="overlay"></div>
					<div><h2>Contáctame</h2>
						<p>Mis datos de contacto son. Puedes agendar una cita conmigo en el correo  nutgir@outlook.com, al número ####-####-#### o puedes dejarme tu nombre y correo, y yo me pondré en contacto.</p></div>
				    <input type="text" name="name" placeholder="Nombre" required>
				    <input type="email" name="_replyto" placeholder="Correo" required>
				    <input type="submit" value="ENVIAR">
				</form>
			</div>
		<?php endif; ?>
			<div class="blog-posts">
				<?php if (is_home() && !is_paged()) : ?>
					<h1>Lo más reciente</h1>
				<?php else: ?>
					<h1>Posts</h1>
				<?php endif; ?>
				<div class="posts">
					<?php global $query_string; // required
					$posts = query_posts($query_string.'&cat=-2,-3,-4,-5,-6'); // exclude categories ?>
						<?php if ( have_posts() ) : ?>
							<?php while ( have_posts() ) : ?>
								<?php if ( the_post() ); ?>
									<?php get_template_part( 'content', get_post_format() ); ?>
									<?php get_post(); ?>
							<?php endwhile; ?>
							<?php pagination_nav(); ?>
						<?php endif; ?>					

					<?php wp_reset_query(); // reset the query ?>

				</div>
			</div>

	<?php get_sidebar(); ?>

<?php get_footer(); ?>
