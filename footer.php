	<div class="clear"></div>

	<div class="footer">

		<div class="wrap outer">

			<div class="left">

				&copy; 2016 DigitalPress. Laeva 2, 10110, Tallinn, Estonia.

			</div>

			<div class="right">

				<?php wp_nav_menu(['theme_location' => 'secondary', 'container' => '']); ?>

			</div>

		</div>

		<div class="clear"></div>

	</div>

	<script>var is_logged_in = <?php if(is_user_logged_in()): ?>true<?php else: ?>false<?php endif; ?>;</script>
	
	<?php wp_footer(); ?>

</body>
</html>