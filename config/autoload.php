<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package Rootnav
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'HeimrichHannot',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Models
	'HeimrichHannot\Rootnav\PageModelRootnav' => 'system/modules/rootnav/models/PageModelRootnav.php',

	// Modules
	'HeimrichHannot\Rootnav\ModuleRootnav'    => 'system/modules/rootnav/modules/ModuleRootnav.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'nav_navbar_root' => 'system/modules/rootnav/templates/nav',
));
