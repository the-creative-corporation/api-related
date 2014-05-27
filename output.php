<div class="container">
	hi.
	Pass post to iframe.
	iframe fetches things!
	<?php
	global $post;
	$t = get_option('json_api_base');
	var_dump($t, $this, $field, $post); ?>	
	<iframe class="relationships-iframe" src="<?php echo $this->settings['dir'] ?>app/app/index.html" data-key="<?php echo $field['key']; ?>"></iframe>
	<script type="text/javascript">
		window.<?php echo $field['key'] ?> = {
			post : <?php echo json_encode($post) ?>
		}
	</script>

</div>
