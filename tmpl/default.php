<?php
/**
 * @copyright	Copyright (c) 2014 RSS. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
for($i=0;$i<$params->get('numitems');$i++)
{
//echo "<pre>";
//print_r($feeds[$i]);exit;
echo '<h3><a href="http://community.joomla.org/blogs/community/1824-j-and-beyond-2014-a-joomla-marketing.html">'.$feeds[$i]->title.'</a></h3><br /><br />';
echo $feeds[$i]->content.'<br /><hr />';

}


?>
