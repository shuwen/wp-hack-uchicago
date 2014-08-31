</section><!-- Container End -->

<div id="root_footer"></div>

</div> <!-- /root -->

<footer id="footer" role="contentinfo">
<div class="row">
	<div class="small-12 large-12 columns">
		<?php dynamic_sidebar("Footer"); ?>
	</div>
</div>
</footer>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<?php wp_footer(); ?>

<script>
	$(document).ready(function() {

		$('.site-title').bigtext();

		$(document).foundation();

		$(".contain-to-grid").headroom({
			offset: $('header').height()+45,
			tolerance: {
				up: 0,
				down: 10
			} // Topbar height
		});
	});
</script>
	
</body>
</html>