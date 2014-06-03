<div class="container">
	<?php
	global $post;
	//var_dump($field);
	//var_dump($t, $this, $field, $post); 
	$url = $field['url'] . '/_related/' . $post->post_type . '/' . $post->ID;
	?>	
	<iframe class="relationships-iframe" src="<?php echo $url ?>" data-key="<?php echo $field['key']; ?>"></iframe>

</div>
