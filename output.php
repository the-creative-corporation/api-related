<div class="container">
	<?php
	global $post;
	$api_base = get_bloginfo('wpurl') . '/cc';
	//var_dump($t, $this, $field, $post); ?>	
	<iframe class="relationships-iframe" src="<?php echo $this->settings['dir'] ?>app/app/index.html" data-key="<?php echo $field['key']; ?>"></iframe>
	<script type="text/javascript">
		window.<?php echo $field['key'] ?> = {
			post : <?php echo json_encode($post) ?>,
			api : "<?php echo $api_base ?>"
		}
	</script>

</div>
