	<footer class="site-footer" role="contentinfo">
		<div class="site-container">
			<div class="footer-grid">
				<div class="footer-brand">
					<h3>Daily City Desk</h3>
					<p>Dedicated to delivering accurate, unbiased community news, municipal developments, and local sporting achievements with editorial integrity.</p>
				</div>
				<div class="footer-col">
					<h4>News Sections</h4>
					<ul>
						<li><a href="<?php echo esc_url( home_url( '/category/national/' ) ); ?>">National</a></li>
						<li><a href="<?php echo esc_url( home_url( '/category/sports/' ) ); ?>">Sports</a></li>
					</ul>
				</div>
				<div class="footer-col">
					<h4>Quick Links</h4>
					<ul>
						<li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About Us</a></li>
						<li><a href="<?php echo esc_url( home_url( '/media/' ) ); ?>">Media Library</a></li>
					</ul>
				</div>
			</div>
			<div class="footer-bottom">
				<p>&copy; <?php echo esc_html( date( 'Y' ) ); ?> Daily City Desk. All rights reserved. Original demo news portal.</p>
				<p>Level-4 Web Design and Development Specification Practice</p>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
