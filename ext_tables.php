<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_kesmallads_smallads');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToInsertRecords('tx_kesmallads_smallads');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(KE_SMALLADS_EXT, 'pi1/static/', 'Smallads');


if (TYPO3_MODE=='BE')	{
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addModule('web', 'txkesmalladsM1', '', \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath(KE_SMALLADS_EXT) . 'mod1/');
}


