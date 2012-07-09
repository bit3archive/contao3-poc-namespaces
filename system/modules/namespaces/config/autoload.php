<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package Namespaces
 * @link    http://www.contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaceMappings(array
(
	'Namespaces' => 'Namespaces\_vendor_',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Content
	'Namespaces\_vendor_\Content\NamespaceContent' => 'system/modules/namespaces/classes/Namespaces/_vendor_/Content/NamespaceContent.php',

	// Hook
	'Namespaces\_vendor_\Hook\Page'                => 'system/modules/namespaces/classes/Namespaces/_vendor_/Hook/Page.php',

	// Module
	'Namespaces\_vendor_\Module\NamespaceModule'   => 'system/modules/namespaces/classes/Namespaces/_vendor_/Module/NamespaceModule.php',

	// _vendor_
	'Namespaces\_vendor_\NamespaceClass'           => 'system/modules/namespaces/classes/Namespaces/_vendor_/NamespaceClass.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_namespace_module'  => 'system/modules/namespaces/templates',
	'mod_namespace_module' => 'system/modules/namespaces/templates',
));
