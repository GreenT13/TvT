<?php _e('<h1>Archief</h1>'); ?>
     <ul>
	 <?php $args = array(
	'type'            => 'monthly',
	'limit'           => '5',
	'format'          => 'html', 
	'before'          => '',
	'after'           => '',
	'show_post_count' => false,
	'echo'            => 1,
	'order'           => 'DESC'
); ?>

<?php wp_get_archives($args); ?> </ul><a class="clink" href="http://www.talentvoortaal.nl/Wordpress/#Enthousiaste_evaluaties">Meer</a>

