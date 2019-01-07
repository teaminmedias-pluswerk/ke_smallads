<?php
defined('TYPO3_MODE') or die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_kesmallads_smallads');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToInsertRecords('tx_kesmallads_smallads');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(KE_SMALLADS_EXT, 'Configuration/TypoScript/PluginSetup/', 'Smallads');

if (TYPO3_MODE=='BE')	{
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule('web', 'txkesmalladsM1', '', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath(KE_SMALLADS_EXT) . 'mod1/');
}


