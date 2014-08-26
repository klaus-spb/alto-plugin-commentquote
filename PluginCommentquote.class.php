<?php
/* ---------------------------------------------------------------------------
 * @Project: Alto CMS
 * @Plugin Name: CommentQuote
 * @Author: Klaus
 * @License: GNU GPL v2 & MIT
 *----------------------------------------------------------------------------
 */

if (!class_exists('Plugin')) {
  die('Hacking attemp!');
}

class PluginCommentquote extends Plugin {

	protected $aInherits=array(
	   'module'=>array('ModuleText'),
    );

	public function Init() {
		$this->Viewer_AppendScript(Plugin::GetTemplateDir(__CLASS__) . 'assets/js/comment.js');
        return true;
	}

	public function Activate() {
		return true;
	}

	public function Deactivate() {
		return true;
	}
}
