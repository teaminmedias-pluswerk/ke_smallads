<?php
defined('TYPO3_MODE') or die('Access denied.');

if (!defined ('KE_SMALLADS_EXT')) {
    define('KE_SMALLADS_EXT', 'ke_smallads');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('
    options.saveDocNew.tx_kesmallads_smallads=1
');

## Extending TypoScript from static template uid=43 to set up userdefined tag:
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(KE_SMALLADS_EXT, 'editorcfg', '
    tt_content.CSS_editor.ch.tx_kesmallads_pi1 = < plugin.tx_kesmallads_pi1.CSS_editor
', 43);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43(KE_SMALLADS_EXT, 'pi1/class.tx_kesmallads_pi1.php', '_pi1', 'list_type', 0);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(KE_SMALLADS_EXT, 'setup', '
    tt_content.shortcut.20.0.conf.tx_kesmallads_smallads = < plugin.' . \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getCN(KE_SMALLADS_EXT) . '_pi1
    tt_content.shortcut.20.0.conf.tx_kesmallads_smallads.CMD = singleView
', 43);
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('

    # ***************************************************************************************
    # CONFIGURATION of RTE in table "tx_kesmallads_smallads", field "content"
    # ***************************************************************************************
RTE.config.tx_kesmallads_smallads.content {
proc.exitHTMLparser_db=1
proc.exitHTMLparser_db {
    keepNonMatchedTags=1
    tags.font.allowedAttribs= color
    tags.font.rmTagIfNoAttrib = 1
    tags.font.nesting = global
}
showButtons = bold,italic,unorderedlist,orderedlistlink,formatblock,link,textstyle
hideButtons = image,table,blockstylelabel,blockstyle,textstylelabel,fontstyle,fontsize,formatblock,unterline,strikethrough,subscript,superscript,lefttoright,textcolor,bgcolor,emoticon,textindicator,insertcharacter,line,link,
hidePStyleItems = address,div,pre,h3,h4,h5,h6
showTagFreeClasses = 1
ignoreMainStyleOverride = 1
}
');
