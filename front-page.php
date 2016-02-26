<?php get_header(); ?>

		<main role="main">
			<section>
				<div class="main-gallery">
					<div class="gallery-cell">
						<img src="https://d13yacurqjgara.cloudfront.net/users/373338/screenshots/1968797/gambit_dribbble.png" alt="" />
					</div>
					<div class="gallery-cell">
						<img src="https://d13yacurqjgara.cloudfront.net/users/373338/screenshots/1922720/jubilee_dribbble.png" alt="" />
					</div>
					<div class="gallery-cell">
						<img src="https://d13yacurqjgara.cloudfront.net/users/373338/screenshots/1903948/cyclops_dribbble.png" alt="" />
					</div>
					<div class="gallery-cell">
						<img src="https://d13yacurqjgara.cloudfront.net/users/373338/screenshots/1903948/cyclops_dribbble.png" alt="" />
					</div>
					<div c;ass="galler-cell">
						<img src="https://d13yacurqjgara.cloudfront.net/users/373338/screenshots/1891255/weaponx_dribbble.png" alt="" />
					</div>
  				</div>
			</section>

			<section>
				<div class="container">
				<div class="chocolat-parent" data-chocolat-title="set title">
				    <a class="chocolat-image" href="https://d13yacurqjgara.cloudfront.net/users/373338/screenshots/1968797/gambit_dribbble.png" title="caption image 1">
				        <img width="100" src="https://d13yacurqjgara.cloudfront.net/users/373338/screenshots/1968797/gambit_dribbble.png" />
				    </a>
				    <a class="chocolat-image" href="https://d13yacurqjgara.cloudfront.net/users/373338/screenshots/1922720/jubilee_dribbble.png" title="caption image 2">
				        <img width="100" src="https://d13yacurqjgara.cloudfront.net/users/373338/screenshots/1922720/jubilee_dribbble.png" />
				    </a>
				    <a class="chocolat-image" href="https://d13yacurqjgara.cloudfront.net/users/373338/screenshots/1903948/cyclops_dribbble.png" title="caption image 3">
				        <img width="100" src="https://d13yacurqjgara.cloudfront.net/users/373338/screenshots/1903948/cyclops_dribbble.png"/>
				    </a>
				</div>    
				</div>
			</section>
			
			<section>
				<div class="container">
					<div class="row">
				          <div class="col-md-4">
				          	<div class="well"> 
				              <h2 class="text-center"><span class="label label-danger">Snippets</span></h2>
				              <h1 class="text-center">311</h1>
				          	</div>
				          </div>
				      	  <div class="col-md-4">
				          	<div class="well"> 
				              <h2 class="text-center"><span class="label label-danger">Downloads</span></h2>
				              <h1 class="text-center">982</h1>
				          	</div>
				          </div>
				          <div class="col-md-4">
				          	<div class="well"> 
				              <h2 class="text-center"><span class="label label-danger">Sales</span></h2>
				              <h1 class="text-center">112</h1>
				          	</div>
				          </div>
				    </div><!--/row-->
				</div><!--container-->
			</section>

			<section>
				<div class="container">
					<h1><?php the_title(); ?></h1>

					<?php if (have_posts()): while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<?php the_content(); ?>
						<?php edit_post_link(); ?>
					</article>
					
					<?php endwhile; ?>
					
					<?php else: ?>
					
					<article>
						<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
					</article>

					<?php endif; ?>
				
				</div>
			</section>
		</main>

<?php /*get_sidebar();*/ ?>

<?php get_footer(); ?>
