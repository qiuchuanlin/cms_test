<?php

/**
 * The config file of custom image class
 */
return array(
		//upload directory
		'uploadDir'=>'uploads/',
		'quality'=>85,
		//define resize mode when upload, could be more than one
		'dimensions'=>array(
			array(60,60,true)
		)
	);