<?php
/**
 * The main template file
 */
get_header();
?>

		<main id="content-area" class="full-width">
			<section class="sections top content-width padding">
				<div class="grid">
					<div class="left">
						<h1>Product Design Course</h1>
						<h2>Product Factory</h2>
						<p>Learn how design thinking, user research, business vision and marketing, and finally designing and creating real digital products for real users.</p>
						<a href="#" class="button">Start Register</a>
					</div>
					<div class="right">
						<div style="width:100%;height:100%;background:brown;display:flex;align-items:center">
						<img width="100%" height="auto" src="
						<?php echo get_template_directory_uri() . "/kia-ux-course.png"?>">
						</div>
					</div>

					<div class="arrow left"><</div>
					<div class="arrow right">></div>
				</div>

			</section>

			<section class="sections about-us content-width" style="margin-top:100px;">
				<div class="grid">
					<div class="product-factory">
					Product Factory
					</div>
					<div class="about-us">
						<h3 class="title-effect" data-text="About us">About us</h3>
						<div class="socials">
							<?php echo file_get_contents(get_template_directory_uri() . "/icons/social/instagram-brands.svg")?>
						</div>
					</div>
				</div>
				<p>
				Today, given the economic and labor market conditions, the best and least risky way to invest is to invest in personal assets and skills. UI / UX Product Design Course covers all aspects of product design from product thinking and design to user-centric research and product research and business vision and digital marketing to product designers and creators, designing the end-user experience and interface of the product and how to deliver it. Includes.
				</p>
			</section>

			<?php
			if ( have_posts() ) {

				// Load posts loop.
				while ( have_posts() ) {
					the_post();
				}


			} else {
				// If no content, include the "No posts found" template
				?>
				<i>No posts</i>
			<?php }
			?>
		</main><!-- .site-main -->

<?php
get_footer();
