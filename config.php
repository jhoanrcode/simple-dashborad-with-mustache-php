<?php
	require 'lib/Mustache/Autoloader.php';

	Mustache_Autoloader::register();
	$output = new Mustache_Engine(
		array(
			'loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/templates'),
			'partials_loader' => new Mustache_Loader_FilesystemLoader(dirname(__FILE__) . '/templates/partials')
		)

	);

?>
		