	<div class="post">
		<div class="post-image">
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="post-structure">
			<h4 class="post-title"><?php the_title(); ?></h4>
			<label class="post-meta"><?php the_date(); ?> por <?php the_author(); ?></label>
			<p class="post-text"><?php
			  $myExcerpt = get_the_excerpt();
			  $tags = array("<p>", "</p>");
			  $myExcerpt = str_replace($tags, "", $myExcerpt);
			  echo $myExcerpt;
			  ?></p>
			  <a href="<?php the_permalink(); ?>" class="post-link">Ver Más</a>
		</div>
	</div>
