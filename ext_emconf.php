<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Environment Toolbar',
	'description' => 'Add the current TYPO3 context to the toolbar to avoid confusing live with development instances.',
	'category' => 'plugin',
	'author' => 'Simon Fischer',
	'author_email' => 'simon.fischer@werkraum.net',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => '0',
	'createDirs' => '',
	'clearCacheOnLoad' => 0,
	'version' => '1.0',
	'constraints' => array(
		'depends' => array(
			'typo3' => '8.6.0-9.99.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
);
