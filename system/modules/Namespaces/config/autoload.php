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
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Hook
	'Namespaces\Hook\Page'                => 'system/modules/Namespaces/Hook/Page.php',

	// Module
	'Namespaces\Module\NamespaceModule'   => 'system/modules/Namespaces/Module/NamespaceModule.php',

	// Content
	'Namespaces\Content\NamespaceContent' => 'system/modules/Namespaces/Content/NamespaceContent.php',

	// 
	'Namespaces\NamespaceClass'           => 'system/modules/Namespaces/NamespaceClass.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_namespace_module'  => 'system/modules/Namespaces/templates',
	'mod_namespace_module' => 'system/modules/Namespaces/templates',
));
