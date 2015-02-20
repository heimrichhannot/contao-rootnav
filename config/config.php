<?php

/**
 * Front end modules
 */
$GLOBALS['FE_MOD']['navigationMenu']['rootnav'] = 'HeimrichHannot\Rootnav\ModuleRootnav';

/**
 * Javascript
 */
if (TL_MODE == 'FE') {
	$GLOBALS['TL_JAVASCRIPT']['rootnav'] = '/system/modules/rootnav/assets/js/rootnav.js|static';
}