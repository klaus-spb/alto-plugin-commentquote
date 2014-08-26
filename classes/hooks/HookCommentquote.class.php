<?php
/* ---------------------------------------------------------------------------
 * @Project: Alto CMS
 * @Plugin Name: CommentQuote
 * @Author: Klaus
 * @License: GNU GPL v2 & MIT
 *----------------------------------------------------------------------------
 */

class PluginCommentquote_HookCommentquote extends Hook {

    public function RegisterHook() {
        $this->AddHook('template_comment_action', 'link');
    }

    public function link($aVars) {
		if(!Config::Get('view.wysiwyg')) {
			$this->Viewer_Assign('oComment',$aVars['comment']);
			return $this->Viewer_Fetch(Plugin::GetTemplateDir(__CLASS__) . 'tpls/comment_quote_link.tpl');
		}
    }

}

?>
