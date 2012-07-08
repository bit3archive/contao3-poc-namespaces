<?php

/**
 * Content elements
 */
$GLOBALS['TL_CTE']['namespaces']['namespaces'] = 'Contao\\Extension\\Namespaces\\Content\\NamespaceContent';

/**
 * Front end modules
 */
$GLOBALS['FE_MOD']['namespaces']['namespaces'] = 'Contao\\Extension\\Namespaces\\Module\\NamespaceModule';

/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['generatePage'][] = array('Contao\\Extension\\Namespaces\\Hook\\Page', 'myGeneratePage');
