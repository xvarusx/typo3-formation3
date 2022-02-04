<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "dce".
 *
 * Auto generated 19-01-2022 15:09
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Dynamic Content Elements (DCE)',
  'description' => 'Best flexform based content elements since 2012. With TCA mapping feature, simple backend view and much more features which makes it super easy to create own content element types.',
  'category' => 'Backend',
  'version' => '2.8.0',
  'state' => 'stable',
  'uploadfolder' => true,
  'clearcacheonload' => true,
  'author' => 'Armin Vieweg',
  'author_email' => 'armin@v.ieweg.de',
  'author_company' => '',
  'constraints' => 
  array (
    'depends' => 
    array (
      'php' => '7.3.0-7.4.99',
      'typo3' => '9.5.0-11.99.99',
    ),
    'conflicts' => 
    array (
    ),
    'suggests' => 
    array (
    ),
  ),
  'autoload' => 
  array (
    'psr-4' => 
    array (
      'T3\\Dce\\' => 'Classes',
    ),
    'classmap' => 
    array (
      0 => 'Classes/Compatibility.php',
    ),
  ),
);

