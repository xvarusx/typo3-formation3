<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "pvh".
 *
 * Auto generated 17-01-2022 11:26
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'PVH: Pizpalue View Helpers',
  'description' => 'A collection of view helpers used by pizpalue. Contains copies from vhs view helpers by Claus Due.',
  'category' => 'misc',
  'version' => '1.0.0',
  'state' => 'stable',
  'author' => 'Roman Büchler',
  'author_email' => 'rb@buechler.pro',
  'constraints' => 
  array (
    'depends' => 
    array (
      'php' => '7.3.0-8.0.99',
      'typo3' => '10.4.0 - 11.5.99',
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
      'Buepro\\Pvh\\' => 'Classes/',
    ),
  ),
  'uploadfolder' => false,
  'clearcacheonload' => false,
  'author_company' => NULL,
);

