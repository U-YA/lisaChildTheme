<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Artday
 */

?>

<?php
if ( is_active_sidebar( 'footer_1st_col'  )
    || is_active_sidebar( 'footer_2nd_col' )
    || is_active_sidebar( 'footer_3rd_col'  )
    || is_active_sidebar( 'footer_4th_col' )
) :  ?>

    <!-- Footer Start -->
    <footer class="ws-footer">
        <div class="container">
            <div class="row">

				<?php
				/* If none of the sidebars have widgets.*/
			    if ( ! is_active_sidebar( 'footer_1st_col'  )
			        && ! is_active_sidebar( 'footer_2nd_col' )
			        && ! is_active_sidebar( 'footer_3rd_col'  )
			        && ! is_active_sidebar( 'footer_4th_col' )
			    ) :
				endif;

				/* If all of the sidebars have widgets.*/
			    if  (  is_active_sidebar( 'footer_1st_col'  )
			        && is_active_sidebar( 'footer_2nd_col' )
			        && is_active_sidebar( 'footer_3rd_col'  )
			        && is_active_sidebar( 'footer_4th_col' )
			    ) : ?>

					<!-- About -->
					<div class="col-sm-6 ws-footer-col">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer_1st_col") ) : ?>
						<?php endif; ?>
					</div>

					<!-- Support Links -->
					<div class="col-sm-2 ws-footer-col">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer_2nd_col") ) : ?>
						<?php endif; ?>
					</div>

					<!-- Social Links -->
					<div class="col-sm-2 ws-footer-col">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer_3rd_col") ) : ?>
						<?php endif; ?>
					</div>

					<!-- Shop -->
					<div class="col-sm-2 ws-footer-col">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer_4th_col") ) : ?>
						<?php endif; ?>
					</div>

				<?php endif;

				if  (  is_active_sidebar( 'footer_1st_col'  )
			        && is_active_sidebar( 'footer_2nd_col' )
			        && is_active_sidebar( 'footer_3rd_col'  )
			        && ! is_active_sidebar( 'footer_4th_col' )
			    ) : ?>

					<div class="col-sm-4">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer_1st_col") ) : ?>
						<?php endif; ?>
					</div>

					<div class="col-sm-4">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer_2nd_col") ) : ?>
						<?php endif; ?>
					</div>

					<div class="col-sm-4">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer_3rd_col") ) : ?>
						<?php endif; ?>
					</div>

				<?php
				endif;

				if  (  is_active_sidebar( 'footer_1st_col'  )
			    && is_active_sidebar( 'footer_2nd_col' )
			    && ! is_active_sidebar( 'footer_3rd_col'  )
			    && ! is_active_sidebar( 'footer_4th_col' )
			    ) : ?>

					<div class="col-sm-6">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer_1st_col") ) : ?>
						<?php endif; ?>
					</div>

					<div class="col-sm-6">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer_2nd_col") ) : ?>
						<?php endif; ?>
					</div>

				<?php
				endif;

			    if  (  is_active_sidebar( 'footer_1st_col'  )
			    && ! is_active_sidebar( 'footer_2nd_col' )
			    && ! is_active_sidebar( 'footer_3rd_col'  )
			    && ! is_active_sidebar( 'footer_4th_col' )
			    ) : ?>

					<div class="col-sm-12">
						<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("footer_1st_col") ) : ?>
						<?php endif; ?>
					</div>

				<?php
				endif;
				?>

            </div>
        </div>
    </footer>
    <!-- Footer End -->
<?php endif; ?>

    <!-- Footer Bar Start -->
    <div class="ws-footer-bar">
        <div class="container">

			<!-- Copyright -->
			<?php $footer_text=woss_theme_data('footer_text'); ?>
            <div class="pull-left">
                <?php if($footer_text != '') {
					echo '<p>'.wp_kses_post($footer_text).'</p>';
				} else { ?>
					<p>Lisa Hemeon Art © 2018 All rights reserved. Website created by <a href="https://filmartist.ca/" target="_blank">FILMARTIST</a></p>
				<?php } ?>
            </div>

            <!-- Payments -->
        </div>
    </div>
    <!-- Footer Bar End -->

<?php wp_footer(); ?>

</body>
<script>
jQuery(document).ready(function(){
jQuery(document).on("mouseenter", '.pswp img', function(){
jQuery(this).after('<div id="bg-modal"><h2 id="title-modal"> <?php the_title(); ?> - </h2><div id="size-modal"><?php echo str_replace(PHP_EOL, '', apply_filters( "woocommerce_short_description", $post->post_excerpt )); ?></div></div>');
//console.log("entered");
});
jQuery(document).on("mouseleave", '.pswp img', function(){
jQuery("#bg-modal").remove();
//console.log("left");
});
});
</script>
<style>
#bg-modal{
	position: relative;
	width: 100%;
	background-color: rgba(0,0,0,0.2);
	height: 45px;
}
#size-modal,#title-modal{
	position: relative;
	display: inline-block;
	padding: 4px 10px 0 0;
	color: #FFF;
}
#size-modal{
	top: -3px;
}
#title-modal{
	padding-left: 20px;
}
</style>
</html>
