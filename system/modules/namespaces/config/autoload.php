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
 * Register class mapping
 */
ClassLoader::addClassMappings(array
(
	'Runtime\Namespaces\Content\NamespaceContent' => 'Namespaces\Content\NamespaceContent',
	'Runtime\Namespaces\Hook\Page'                => 'Namespaces\Hook\Page',
	'Runtime\Namespaces\Module\NamespaceModule'   => 'Namespaces\Module\NamespaceModule',
	'Runtime\Namespaces\NamespaceClass'           => 'Namespaces\NamespaceClass',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Content
	'Namespaces\Content\NamespaceContent' => 'system/modules/namespaces/classes/Namespaces/Content/NamespaceContent.php',

	// Hook
	'Namespaces\Hook\Page'                => 'system/modules/namespaces/classes/Namespaces/Hook/Page.php',

	// Module
	'Namespaces\Module\NamespaceModule'   => 'system/modules/namespaces/classes/Namespaces/Module/NamespaceModule.php',

	// Namespaces
	'Namespaces\NamespaceClass'           => 'system/modules/namespaces/classes/Namespaces/NamespaceClass.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_namespace_module'  => 'system/modules/namespaces/templates',
	'mod_namespace_module' => 'system/modules/namespaces/templates',
));
