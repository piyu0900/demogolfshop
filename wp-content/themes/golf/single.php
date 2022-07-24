<?php
/**
 * Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
		
		
		
		<div class="cp-inner-banner" id="cp-inner-blog">
			<div class="container">
				<div class="cp-inner-banner-outer">
					<h2>
						Post Detail				</h2>
					
					<ul class="breadcrumb"><li class=""><a href="<?php echo get_home_url(); ?>">Home</a> </li> <li><a href="<?php echo get_home_url(); ?>/blog/">Blog</a>  </li><li class="current"><?php the_title(); ?></li></ul>				
				</div>
			</div>
		</div>
		
		
		
		
		<div class = "cp-main-content"> 
			
			<section class="cp-blog-section cp-blog-detail-section pd-t100">
				
				<div class="container">
			
					<div class="row">
					
						<div id="post-583" class="col-md-9 Image">
						<?php
						/*
						 * Run the loop to output the post.
						 * If you want to overload this in a child theme then include a file
						 * called loop-single.php and that will be used instead.
						 */
						get_template_part( 'loop', 'single' );
						?>

						</div>

						<?php get_sidebar(); ?>
					</div>
				</div>
			</section>
		</div>
	
<div class="clear"></div>
<?php get_footer(); ?>
