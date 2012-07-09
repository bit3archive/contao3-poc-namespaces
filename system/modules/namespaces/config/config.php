<?php

/**
 * Content elements
 */
$GLOBALS['TL_CTE']['namespaces']['namespaces'] = 'Namespaces\\Content\\NamespaceContent';

/**
 * Front end modules
 */
$GLOBALS['FE_MOD']['namespaces']['namespaces'] = 'Namespaces\\Module\\NamespaceModule';

/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['generatePage'][] = array('Namespaces\\Hook\\Page', 'myGeneratePage');
