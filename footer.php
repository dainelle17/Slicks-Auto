<!-- BEGIN FOOTER -->
	<footer class="row">
		<div class="four columns">
			<?php //dynamic_sidebar('footer-left'); ?>
		</div>
		<div class="four columns">
			<?php //dynamic_sidebar('footer-middle'); ?>
		</div>
		<div class="four columns">
			<?php //dynamic_sidebar('footer-right'); ?>
		</div>
	</footer>
</div>

<?php 
	wp_footer(); 
?>
	<script src="https://code.jquery.com/jquery-2.2.3.min.js"   integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="   crossorigin="anonymous"></script>
	<script src="<?php bloginfo('url'); echo '/js/main.js'?>"></script>
</body>
</html>
