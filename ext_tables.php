<?php
/**
 * ext_tables.php for typo3rtl
 * 
 */
if (!defined('TYPO3_MODE')) {
        die('Access denied.');
}

if (TYPO3_MODE == 'BE' || (TYPO3_MODE == 'FE' && isset($GLOBALS['BE_USER']))) {

//	$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects']['TYPO3\\CMS\\Backend\\Controller\\BackendController'] = array(
//		'className' => 'OLSSOFT\\Typo3rtl\\Controller\\BackendController'
//	);
//
//    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['typo3/template.php']['preHeaderRenderHook'][] =
//        'OLSSOFT\\Typo3rtl\\Hooks\\Backend\\PreHeaderRender->addStyles';

    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-preProcess'][] =
        'OLSSOFT\\Typo3rtl\\Hooks\\Backend\\PreHeaderRender->preStartPage';

    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-postTransform'][] =
        'OLSSOFT\\Typo3rtl\\Hooks\\Backend\\PreHeaderRender->preStartPage2';

    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-postProcess'][] =
        'OLSSOFT\\Typo3rtl\\Hooks\\Backend\\PreHeaderRender->preStartPage3';

        
}
