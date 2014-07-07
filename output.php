<div class="container">
	<?php
	global $post;
	//var_dump($field);
	//var_dump($t, $this, $field, $post); 
	$url = $field['url'] . '/_related/' . $post->post_type . '/' . $post->ID;
  /*
  $api = curl_init();
  curl_setopt_array($api, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => get_bloginfo('url') . '/cc/'
  ));
  $result = json_decode(curl_exec($api));
  curl_close($api);
   */
  $post_types = get_post_types();
  var_dump($post_types);
  foreach($post_types as $type){ ?>
    <a class="button" href="<?php echo get_bloginfo('url') . '/wp-admin/post-new.php?post_type=' . $type ?>">
      <?php echo $type ?>
    </a>
    
  <?php }
	?>	
	<iframe class="relationships-iframe" src="<?php echo $url ?>" data-key="<?php echo $field['key']; ?>"></iframe>
	

</div>
