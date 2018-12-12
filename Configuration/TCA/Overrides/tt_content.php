<?php
defined('TYPO3_MODE') or die('Access denied.');

$listType = KE_SMALLADS_EXT.'_pi1';

// Show FlexForm field in plugin configuration
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$listType] = 'pi_flexform';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$listType] = 'layout,select_key';

// Configure FlexForm field
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($listType, 'FILE:EXT:' . KE_SMALLADS_EXT . '/flexform_ds.xml');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    Array(
        'LLL:EXT:' . KE_SMALLADS_EXT . '/locallang_db.xlf:tt_content.list_type_pi1',
        $listType,
        'EXT:' . KE_SMALLADS_EXT . '/ext_icon.gif'
    ),
    'list_type',
    KE_SMALLADS_EXT
);


