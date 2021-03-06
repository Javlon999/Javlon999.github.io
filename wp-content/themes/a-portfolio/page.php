<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package a-portfolio
 */

get_header();
?>
<!-- Start blog -->
<section id="blog" class="single section page">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-12 col-xs-12">
      		<?php
		if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'page' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

      </div>
      <div class="col-md-4 col-sm-12 col-xs-12">
        <!-- Blog Sidebar -->
        <div class="blog-sidebar">
         	<?php get_sidebar();?>
        </div>
        <!--/ End Blog Sidebar -->
      </div>
    </div>
  </div>
</section>

<?php
get_footer();


