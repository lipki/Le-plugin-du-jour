<?php
# -- BEGIN LICENSE BLOCK ----------------------------------
# This file is part of lePluginDuJour, a plugin for Dotclear 2.
# 
# Copyright (c) 2010 lipki and contributors
# kevin@lepeltier.info
# 
# Licensed under the GPL version 2.0 license.
# A copy of this license is available in LICENSE file or at
# http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
# -- END LICENSE BLOCK ------------------------------------

if (!defined('DC_RC_PATH')) { return; }

$this->registerModule(
	/* Name */			"lePLuginDuJour",
	/* Description*/	__("To discover a new plugin per day. A switch in Settings blog. Add in your widgets, for the benefit of your visitors."),
	/* Author */		"kévin Lepeltier [lipki]",
	/* Version */		"1",
	/* Permissions */	null
);
