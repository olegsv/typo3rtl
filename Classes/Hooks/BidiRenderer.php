<?php
namespace OLSSOFT\Typo3rtl\Hooks;

/*
 *
 *  (c) 2014 Oleg Sverdlov <oleg@ols.co.il>
 *
 *  This script is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 *
 *  This script is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or (at your option) any later version.
 *
 *  The GNU General Public License can be found at  http://www.gnu.org/copyleft/gpl.html . A copy of GPL is distributed along with Typo3: typo3_src/LICENSE.txt
 */

class BidiRenderer {
    
    /**
     * Returns true if the language is right to left.
     * 
     * @param string $l language code
     * @return boolean
     * @todo static_language_ext if possible
     */
    protected function isRightToLeft( $l ) {
        return ( $l==='he' || $l==='ar' || $l==='fa' );
    }
    
    /**
     * @param $hookParameters
     * @param $documentTemplateInstance
     */
    public function preHeaderRenderHook($hookParameters, $documentTemplateInstance) {

        if( isset( $GLOBALS['BE_USER'] ) && 
            $this->isRightToLeft( $GLOBALS['BE_USER']->user['lang'] ) ) {

            $hookParameters['pageRenderer']->addCssFile(
                    '../typo3conf/ext/typo3rtl/Resources/Public/Css/rtl.css'
            );
        }
    }

}