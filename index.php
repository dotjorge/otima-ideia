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
					<div class="arrows">
					<div class="left"><</div>
					<div class="right">></div>
					</div>
					<div class="right">
						<div style="width:100%;height:100%;display:flex;align-items:center">
						<img width="100%" height="auto" src="
						<?php echo get_template_directory_uri() . "/kia-ux-course.png"?>">
						</div>
					</div>

				</div>

			</section>

			<section class="sections about-us content-width" style="margin-top:25px;">
				<div class="grid">
					<div class="product-factory">
						<?php echo file_get_contents(get_template_directory_uri() . "/logo.svg")?>
					</div>
					<div class="about-us">
						<h3 class="title-effect" data-text-behind="About">About us</h3>
						<div class="socials">
							<?php echo file_get_contents(get_template_directory_uri() . "/icons/socials/instagram-brands.svg")?>
							<?php echo file_get_contents(get_template_directory_uri() . "/icons/socials/twitter-brands.svg")?>
							<?php echo file_get_contents(get_template_directory_uri() . "/icons/socials/facebook-square-brands.svg")?>
						</div>
					</div>
				</div>
				<p>
				Today, given the economic and labor market conditions, the best and least risky way to invest is to invest in personal assets and skills. UI / UX Product Design Course covers all aspects of product design from product thinking and design to user-centric research and product research and business vision and digital marketing to product designers and creators, designing the end-user experience and interface of the product and how to deliver it. Includes.
				</p>
			</section>



			<section class="sections course-experience content-width" style="margin-top:25px;">
				<div style="text-align:center;">
					<h3 class="title-effect" data-text-behind="Experience">Course Experience</h3>
				</div>
				<div class="time-line">
					<div>After attending the course</div>
					<div>During the period</div>
					<div class="selected">Before attending the course</div>
				</div>
				<div class="grid">
					<?php echo file_get_contents(get_template_directory_uri() . "/figures/course-experience.svg")?>
					<p>
					This course has been attempted by zero people who are eager to learn product design, especially user experience and user interface, so it is not a prerequisite, but due to the limited capacity of the priority course with early enrolled people, others can participate in future courses. .  Obviously, the ability to use tools like Adobe Photoshop and Adobe Illustrator as well as Microsoft Word, Excel tools, and of course a lot of enthusiasm and energy.
					</p>
				</div>
			</section>


			<section class="sections course-experience content-width" style="margin-top:25px;">
				<div style="text-align:center;">
					<h3 class="title-effect" data-text-behind="Sessions">Sessions</h3>
				</div>
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
