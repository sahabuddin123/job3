<?php
/**
 * The main template file
 *
 * @package City_Desk
 */

get_header();
?>

<main id="main-content" class="site-main-content" role="main">
	<div class="site-container">

		<?php if ( is_singular() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class( is_page() ? 'page-container' : 'single-article-container' ); ?>>
					<header class="entry-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>
						<?php if ( ! is_page() ) : ?>
							<div class="entry-meta">
								<span class="posted-on"><?php echo esc_html( get_the_date() ); ?></span>
								<span class="meta-sep">•</span>
								<span class="category-links"><?php the_category( ', ' ); ?></span>
							</div>
						<?php endif; ?>
					</header>

					<?php if ( has_post_thumbnail() && ! is_page() ) : ?>
						<div class="entry-featured-media">
							<?php the_post_thumbnail( 'large' ); ?>
						</div>
					<?php endif; ?>

					<div class="entry-content">
						<?php the_content(); ?>
					</div>

					<?php if ( is_page( 'about' ) || is_page( 'About' ) ) : ?>
						<!-- Contact Form for About Page -->
						<section id="contact-form" class="contact-form-card" aria-labelledby="contact-heading">
							<h2 id="contact-heading" class="contact-form-title">Contact City Desk</h2>
							<p class="contact-form-subtitle">Send feedback, news tips, or inquiries directly to our local newsroom desk.</p>

							<?php if ( isset( $_GET['contact_sent'] ) && '1' === $_GET['contact_sent'] ) : ?>
								<div class="form-alert form-alert-success" role="alert">
									<strong>Thank you!</strong> Your message has been sent successfully to the Daily City Desk news team.
								</div>
							<?php endif; ?>

							<form action="<?php echo esc_url( home_url( '/about/' ) ); ?>" method="post" class="contact-form">
								<?php wp_nonce_field( 'city_desk_contact_action', 'city_desk_contact_nonce' ); ?>
								
								<div class="form-group">
									<label for="contact_name" class="form-label">Name <span aria-hidden="true">*</span></label>
									<input type="text" id="contact_name" name="contact_name" class="form-control" required placeholder="Your full name">
								</div>

								<div class="form-group">
									<label for="contact_email" class="form-label">Email <span aria-hidden="true">*</span></label>
									<input type="email" id="contact_email" name="contact_email" class="form-control" required placeholder="your.email@example.com">
								</div>

								<div class="form-group">
									<label for="contact_message" class="form-label">Message <span aria-hidden="true">*</span></label>
									<textarea id="contact_message" name="contact_message" class="form-control" rows="5" required placeholder="Write your news tip or inquiry here..."></textarea>
								</div>

								<button type="submit" name="city_desk_contact_submit" value="1" class="btn-submit">Submit Message</button>
							</form>
						</section>
					<?php endif; ?>
				</article>
			<?php endwhile; ?>

		<?php else : ?>

			<!-- News Archive / Latest Posts Section -->
			<div class="section-header">
				<?php if ( is_category() ) : ?>
					<h1 class="section-title"><?php single_cat_title( 'Category: ' ); ?></h1>
					<span class="section-subtitle">Showing all verified stories under this category</span>
				<?php else : ?>
					<h2 class="section-title">Latest News Reports</h2>
					<span class="section-subtitle">Real-time local coverage and municipal dispatches</span>
				<?php endif; ?>
			</div>

			<?php if ( have_posts() ) : ?>
				<div class="news-posts-grid">
					<?php
					while ( have_posts() ) : the_post();
					?>
						<article id="post-<?php the_ID(); ?>" <?php post_class( 'news-card' ); ?>>
							<?php if ( has_post_thumbnail() ) : ?>
								<div class="news-card-media">
									<a href="<?php the_permalink(); ?>">
										<?php the_post_thumbnail( 'medium_large' ); ?>
									</a>
									<span class="news-card-category-badge">
										<?php
										$cats = get_the_category();
										if ( ! empty( $cats ) ) {
											echo esc_html( $cats[0]->name );
										}
										?>
									</span>
								</div>
							<?php endif; ?>

							<div class="news-card-body">
								<div class="news-card-meta">
									<span class="meta-date"><?php echo esc_html( get_the_date() ); ?></span>
									<span class="meta-sep">•</span>
									<span class="meta-category"><?php the_category( ', ' ); ?></span>
								</div>

								<h3 class="news-card-title">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								</h3>

								<div class="news-card-excerpt">
									<?php the_content(); ?>
								</div>

								<div class="news-card-footer">
									<a href="<?php the_permalink(); ?>" class="read-more-link">
										Read Full Report &rarr;
									</a>
								</div>
							</div>
						</article>
					<?php endwhile; ?>
				</div>

				<?php the_posts_pagination(); ?>

			<?php else : ?>
				<div class="no-posts-found">
					<p>No news stories published in this section yet.</p>
				</div>
			<?php endif; ?>

		<?php endif; ?>

	</div>
</main>

<?php
get_footer();
