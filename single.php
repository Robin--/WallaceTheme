
<?php
	$wal_app_state = Wallace::get_initial_state('post', get_the_ID());
	get_header();
?>
	<title><?php echo the_title(); ?></title>
    </head>
    <body>
    	<wallace>

			<?php 
				echo $wal_twig->render('post.html', array(
				'post' => $wal_app_state['posts'][0], 
				'siteData' => $wal_app_state['site_data'])); 
			?>
    	</wallace>

    	<script>
			var walInitialState = <?php echo json_encode($wal_app_state); ?>;
			console.log(walInitialState);
			walInitialState.selectedPostId = <?php echo get_the_ID(); ?>;
			walInitialState.selectedPageId = -1;
		</script>

<?php get_footer(); ?>


	