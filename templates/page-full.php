<?php
/*
Template Name: Full Width
*/
get_header(); ?>
<div class="row">
	<div class="medium-12 columns" role="main">

	<?php /* Start loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<header>
				<h1 class="entry-title"><?php the_title(); ?></h1>
			</header>
			<div class="entry-content">
				<?php the_content(); ?>


			<!--FAQ Section-->
			<div class="row">
				<div class="medium-10 medium-centered columns">
					<?php
					if( have_rows('faq') ): ?>
						<?php while ( have_rows('faq') ) : the_row(); ?>
							<a href="#"><?php the_sub_field('question'); ?></a>
							<div><?php the_sub_field('answer'); ?></div>
					<?php endwhile; ?>

			<?php endif; 
			?>
				</div>
			</div>


			<!--Sponsor Section-->
			<div class="row">
				<div class="medium-12 columns">
					<?php
					if( get_field('sponsor') ): ?>

						<?php while( has_sub_field('sponsor') ): ?>

								<img class="sponsor" src="<?php the_sub_field('sponsor-img'); ?>" alt="" />		    

						<?php endwhile; ?>

					<?php endif; 
					?>
				</div>
			</div>



			<!--Donor Section-->
			<section>
			<?php
			if( get_field('donor') ): ?>

				<?php while( has_sub_field('donor') ): ?>

						<img class="donor" src="<?php the_sub_field('donor-img'); ?>" alt="" />		    

				<?php endwhile; ?>

			<?php endif; 
			?>
			</section>



			<!--Staff Section-->
			<section>
			<?php
			if( get_field('staff') ): ?>

				<?php while( has_sub_field('staff') ): ?>

						<img class="staff" src="<?php the_sub_field('staff-img'); ?>" alt="" />		    

				<?php endwhile; ?>

			<?php endif; 
			?>
			</section>


			<!--Testimonials Section-->
			<section>
			<?php
			if( get_field('testimonials') ): ?>

				<?php while( has_sub_field('testimonials') ): ?>

						<img class="testimonial" src="<?php the_sub_field('testimonial-img'); ?>" alt="" />
						<?php the_sub_field('testimonial'); ?>

				<?php endwhile; ?>

			<?php endif; 
			?>
			</section>




			</div>
			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php comments_template(); ?>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
</div>

<?php get_footer(); ?>
