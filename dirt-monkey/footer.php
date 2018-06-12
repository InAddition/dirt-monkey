
				
		<footer>
			<div class="footer-tour-date-container">
				<div class="footer-tour-date-title">
					next up
				</div>
				<div class="footer-tour-date-info" id="sk-footer">
					<div class="footer-tour-date">
						<h3>
							<span>June</span>
							15
						</h3>
					</div>
					<div class="footer-tour-date-event">
						<h2>
							<span>East Nashville, TN</span>
							The Basement East
						</h2>
					</div>
				</div>
			</div>
			<ul class="nav-social">
				<li>
					<a href="https://www.facebook.com/dirtmonkeymusic/" target="_blank">
						<?php include 'images/icon-socialMedia--facebook.svg' ?>
					</a>
				</li>
				<li>
					<a href="https://twitter.com/dirtmonkeymusic" target="_blank">
						<?php include 'images/icon-socialMedia--twitter.svg' ?>
					</a>
				</li>
				<li>
					<a href="https://www.instagram.com/dirtmonkeymusic/" target="_blank">
						<?php include 'images/icon-socialMedia--instagram.svg' ?>
					</a>
				</li>
				<li>
					<a href="https://soundcloud.com/dirtmonkey" target="_blank">
						<?php include 'images/icon-soundcloud.svg' ?>
					</a>
				</li>
				<!--<li>
					<a href="" target="_blank">
						<?php include 'images/icon-socialMedia--youtube.svg' ?>
					</a>
				</li> -->
			</ul>
			<div class="footer-spotify">
				<?php 
					$spotify = get_field('sml_spotify', 27);
				?>
				<?php echo $spotify ?>
			</div>
		</footer>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<?php global $asset_v; ?>
		<script src="<?php bloginfo('template_url'); ?>/js/main.min.js?v=<?php echo $asset_v; ?>"></script>
		<?php wp_footer(); ?>
	</body>
</html>