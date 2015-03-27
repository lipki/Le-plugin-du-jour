<?php
# -- BEGIN LICENSE BLOCK ----------------------------------
# This file is part of lePluginDuJour, a plugin for Dotclear 2.
# 
# Copyright (c) 2010-2015 lipki and contributors
# kevin@lepeltier.info
# 
# Licensed under the GPL version 2.0 license.
# A copy of this license is available in LICENSE file or at
# http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
# -- END LICENSE BLOCK ------------------------------------

if (!defined('DC_RC_PATH')) { return; }

$this->registerModule(
	/* Name */			"lePLuginDuJour",
	/* Description*/	"To discover a new plugin per day. A switch in Settings blog. Add in your widgets, for the benefit of your visitors.",
	/* Author */		"kévin Lepeltier [lipki]",
	/* Version */		"1.1",
	/* Properties */
	array(
		'permissions' => 'usage,contentadmin,admin',
		'type' => 'plugin',
		'dc_min' => '2.7',
		'support' => 'https://github.com/lipki/Le-plugin-du-jour/issues',
		'details' => 'http://plugins.dotaddict.org/dc2/details/lePluginDuJour'
		)
);