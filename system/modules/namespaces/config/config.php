<?php

/**
 * Content elements
 */
$GLOBALS['TL_CTE']['namespaces']['namespaces'] = 'Runtime\\Namespaces\\Content\\NamespaceContent';

/**
 * Front end modules
 */
$GLOBALS['FE_MOD']['namespaces']['namespaces'] = 'Runtime\\Namespaces\\Module\\NamespaceModule';

/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['generatePage'][] = array('Runtime\\Namespaces\\Hook\\Page', 'myGeneratePage');
