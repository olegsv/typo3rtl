<?php
namespace OLSSOFT\Typo3rtl\Hooks\Backend;

/*
 *  Support RTL languages for Typo3 backend.
 *  
 *  Created by Oleg Sverdlov <oleg@ols.co.il>
 *
 *  This script is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 *
 *  This script is free software distributed under terms of MIT license.
 *
 */

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/**
 * Hook class
 */
class PreHeaderRender {
    /**
     * Returns true if the language is right to left.
     * 
     * @param string $l ISO-639 language code lowercase
     * @return boolean 
     * @todo static_language_ext if possible
     */
    protected function isRightToLeft( $l ) {
        return ( $l==='he' || $l==='ar' || $l==='fa' || $l==='ur' );
    }

    /**
     * Add style
     * @param array $params
     * @param \TYPO3\CMS\Backend\Template\DocumentTemplate $documentTemplate
     */
    public function addStyles(&$params, &$documentTemplate){ 
        
        if( isset( $GLOBALS['BE_USER'] ) && 
            $this->isRightToLeft( $GLOBALS['BE_USER']->user['lang'] ) ) {
            $backendCssPath = ExtensionManagementUtility::extRelPath('typo3rtl') . 'Resources/Public/Css/Backend/';

            $params['pageRenderer']->addCssFile($backendCssPath . 'rtl.css' );
            $params['pageRenderer']->addCssFile($backendCssPath . 'element_tceforms.css' );
            $params['pageRenderer']->addCssFile($backendCssPath . 'module_web_new_element.css' );
            $params['pageRenderer']->addCssFile($backendCssPath . 'htmlarea.css' );

            error_log("added");
        }
    }

    /**
     *
     * @param type $params
     * @param \TYPO3\CMS\Core\Page\PageRenderer $documentTemplate
     *
     */
    public function preStartPage(&$params, &$documentTemplate) {
        error_log("typo3rtl: render-preProcess hook");
        if( isset( $GLOBALS['BE_USER'] ) && $this->isRightToLeft( $GLOBALS['BE_USER']->uc['lang'] ) ) {

            $resourcesPath = ExtensionManagementUtility::extRelPath('typo3rtl') . 'Resources/Public/';

            $documentTemplate->addCssFile($resourcesPath . 'Css/Backend/rtl.css');
            $documentTemplate->addCssFile($resourcesPath . 'Css/Backend/element_tceforms.css');
            $documentTemplate->addCssFile($resourcesPath . 'Css/Backend/module_web_new_element.css');
            $documentTemplate->addCssFile($resourcesPath . 'Css/Backend/htmlarea.css');
            $documentTemplate->addCssFile($resourcesPath . 'Css/7.6/backend.css');

            error_log("Added render-preProcess");
        }
    }


    public function preStartPage2(&$params, &$documentTemplate) {
        error_log("typo3rtl: render-postTransform");
        if( isset( $GLOBALS['BE_USER'] ) && $this->isRightToLeft( $GLOBALS['BE_USER']->uc['lang'] ) ) {

            $resourcesPath = ExtensionManagementUtility::extRelPath('typo3rtl') . 'Resources/Public/';

            $backendCssPath = $resourcesPath . 'Css/Backend/';

            $documentTemplate->addCssFile($backendCssPath . 'htmlarea2.css');

            error_log("Added");
        }
    }


    public function preStartPage3(&$params, &$documentTemplate) {
        error_log("typo3rtl: render-postProcess");
        if( isset( $GLOBALS['BE_USER'] ) && $this->isRightToLeft( $GLOBALS['BE_USER']->uc['lang'] ) ) {

            $resourcesPath = ExtensionManagementUtility::extRelPath('typo3rtl') . 'Resources/Public/';

            $backendCssPath = $resourcesPath . 'Css/Backend/';

            $documentTemplate->addCssFile($backendCssPath . 'htmlarea3.css');

            $extraPath = $resourcesPath . 'extjs_rtl/';
            $documentTemplate->addCssFile($extraPath . 'css/extjs_rtl.css');
            $documentTemplate->addJsFooterFile($extraPath . 'extjs_rtl.js');

            error_log("Added");
        }
    }
}
