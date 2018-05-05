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
 *  This script is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or (at your option) any later version.
 *
 *  The GNU General Public License can be found at  http://www.gnu.org/copyleft/gpl.html . A copy of GPL is distributed along with Typo3: typo3_src/LICENSE.txt
 */

/***************************************************************
 *
 *  The MIT License (MIT)
 *
 *  Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 *
 *  The above copyright notice and this permission notice shall be included in
 *  all copies or substantial portions of the Software.
 *
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 *  THE SOFTWARE.
 *
 ***************************************************************/

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

/**
 * Hook class for left menu and work area, inactive
 */
class RenderPreProcess {
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
	 * @param array $params
	 * @param \TYPO3\CMS\Backend\Controller\BackendController $backendController
	 */
	public function addStyles(&$params, &$backendController) {

        if( isset( $GLOBALS['BE_USER'] ) &&
            $this->isRightToLeft( $GLOBALS['BE_USER']->uc['lang'] ) ) {

            $backendCssPath = ExtensionManagementUtility::extRelPath('typo3rtl') . 'Resources/Public/Css/Backend/';
            //$backendController->addCssFile('rte-new', $backendCssPath . 'rte-new.css' );

            //\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:typo3rtl/Configuration/PageTS/RTE.ts">');
        }
    }
    
}