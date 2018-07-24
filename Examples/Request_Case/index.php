<?php

//_____________________________________________________________________________________________
/**********************************************************************************************

	example of basic marker usage
	
	@Author: Alexander Bassov
	@Email: blackxes@gmx.de
	@Github: https://www.github.com/Blackxes

/*********************************************************************************************/

require_once ( "../../Templax/Templax.php" );

//_____________________________________________________________________________________________

	// load template
	\Templax\Templax::define(
		array(
			"base" => __DIR__ . "/index.html"
		)
	);

	$markup = array(
		"page-title" => "Request Case",
		"image" => array(
			"source" => "http://via.placeholder.com/120x120",
		),
		"firstname" => "Alexander",
		"lastname" => false
	);

	$content = \Templax\Templax::parse("base", $markup);
	echo $content;

//_____________________________________________________________________________________________
//