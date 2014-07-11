<?php

/**
 * The config file of custom image class
 */
return array(
		//upload directory
		'upload_dir'=>'uploads',
		//upload path
		'upload_path'=>public_path().'/uploads/',
		'quality'=>85,
		//上传的时候需要的缩放参数,这个是针对用户头像的两种缩放尺寸
		'dimensions'=>array(
			array(60,60,true),
			array(38,33,true)
		),
		//新闻图片的缩放格式:大中小三种图片
		'dimensions2'=>array(
			array(400,300,true),	
			array(160,120,true),
			array(110,86,true)	
		)
	);