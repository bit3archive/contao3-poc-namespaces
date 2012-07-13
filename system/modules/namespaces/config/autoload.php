<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package Namespaces_extension
 * @link    http://www.contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register class mapping
 */
ClassLoader::addClassMappings(array
(
	'Runtime\Namespaces\NamespaceClass' => 'Namespaces\Extension\NamespaceClass',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'Namespaces\Extension\NamespaceClass' => 'system/modules/namespaces_extension/classes/Namespaces/Extension/NamespaceClass.php',
));
