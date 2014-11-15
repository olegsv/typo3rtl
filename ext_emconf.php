<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "typo3rtl"
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'typo3rtl',
	'description' => 'Right-to-left backend for typo3.',
	'category' => 'be',
	'author' => 'Oleg Sverdlov',
	'author_email' => 'oleg@ols.co.il',
	'state' => 'alpha',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'clearCacheOnLoad' => true,
	'version' => '0.1',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.2',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);
