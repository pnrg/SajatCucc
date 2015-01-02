<?php
/**
 * @copyright	Copyright © 2014 - All rights reserved.
 * @license		Copyrighted Commercial Software
 * @generator	hhp://xdsoft/joomla-module-generator/
 */
defined('_JEXEC') or die;
require_once( dirname(__FILE__) . '/helper.php' );


$maxpost = modForumHelper::getMax_post($params);
$ossztema = modForumHelper::getOsszes_tema($params);
$osszmegtekintes = modForumHelper::getOsszes_megtekintes($params);
require( JModuleHelper::getLayoutPath('mod_forum'));

?>
