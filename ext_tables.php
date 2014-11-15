<?php
/**
 * ext_tables.php for typo3rtl
 * 
 */
if (!defined('TYPO3_MODE')) {
        die('Access denied.');
}

if (TYPO3_MODE == 'BE' || TYPO3_MODE == 'FE' && isset($GLOBALS['BE_USER'])) {

//	$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Backend\\Controller\\BackendController'] = array(
//		'className' => 'OLSSOFT\\Typo3rtl\\Controller\\BackendController'
//	);

	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/template.php']['preHeaderRenderHook']['OLSSOFT\\Typo3rtl\\Hooks\\BidiRenderer'] =
		'OLSSOFT\\Typo3rtl\\Hooks\\BidiRenderer->preHeaderRenderHook';

}
