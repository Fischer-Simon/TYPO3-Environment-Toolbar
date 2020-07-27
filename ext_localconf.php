<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

call_user_func(function () {
    $GLOBALS['TYPO3_CONF_VARS']['BE']['toolbarItems'][] = \Werkraum\EnvironmentToolbar\EnvironmentToolbarItem::class;
});
