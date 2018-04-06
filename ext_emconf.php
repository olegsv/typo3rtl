<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "typo3rtl"
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'RTL backend',
	'description' => 'Right-to-left backend modifications.',
	'category' => 'be',
	'author' => 'Oleg Sverdlov',
	'author_email' => 'oleg@ols.co.il',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'clearCacheOnLoad' => true,
	'version' => '1.0.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '7.6.0-7.6.99',
		),
		'conflicts' => array(
		),
		'suggests' => array('static_info_tables'=>'*')
	),
);
