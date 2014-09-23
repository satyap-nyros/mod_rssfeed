<?php
/**
 * @copyright	@copyright	Copyright (c) 2014 RSS. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

// include the syndicate functions only once
require_once dirname(__FILE__) . '/helper.php';
$feeds = modRSSfeedHelper::getFeeds($params->get('feedurl'));
$class_sfx = htmlspecialchars($params->get('class_sfx'));
require(JModuleHelper::getLayoutPath('mod_rssfeed', $params->get('layout', 'default')));
