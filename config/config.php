<?php
/* ---------------------------------------------------------------------------
 * @Project: Alto CMS
 * @Plugin Name: CommentQuote
 * @Author: Klaus
 * @License: GNU GPL v2 & MIT
 *----------------------------------------------------------------------------
 */


$config = array();

$cfgSetTagCallbackFull = Config::Get('jevix.default.cfgSetTagCallbackFull');
$cfgAllowTagParams = Config::Get('jevix.default.cfgAllowTagParams');

$cfgSetTagCallbackFull[] = array('blockquote', array('_this_','CallbackBlockquote'));
$cfgAllowTagParams[] = array('blockquote', array('comment'=>'#int'));

Config::Set('jevix.default.cfgSetTagCallbackFull', $cfgSetTagCallbackFull);
Config::Set('jevix.default.cfgAllowTagParams', $cfgAllowTagParams);

return $config;

?>