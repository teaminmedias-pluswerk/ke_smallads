<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "ke_smallads".
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
    'title' => 'Smallads',
    'description' => 'Submit, display and admin smallads (Classified advertisements, Announcements). FE Users can edit and delete ads they have submitted. Picture upload is possible. Easy to install.',
    'category' => 'plugin',
    'version' => '1.4.0',
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearcacheonload' => true,
    'author' => 'Christian Buelter (kennziffer.com)',
    'author_email' => 'buelter@kennziffer.com',
    'author_company' => 'www.kennziffer.com GmbH',
    'constraints' => 
    array (
        'depends' => 
        array (
            'php' => '5.5.0-0.0.0',
            'typo3' => '6.2.0-8.99.99',
            'tslib_fetce' => '0.4.0-0.9.0',
            'div2007' => '1.10.10-0.0.0',
        ),
        'conflicts' => 
        array (
        ),
        'suggests' => 
        array (
        ),
    ),
);

