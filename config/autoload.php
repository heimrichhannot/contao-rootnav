<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2016 Leo Feyer
 *
 * @license LGPL-3.0+
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

	// Classes
	'HeimrichHannot\Rootnav\Backend\Module'   => 'system/modules/rootnav/classes/Backend/Module.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'nav_navbar_root' => 'system/modules/rootnav/templates/nav',
));
