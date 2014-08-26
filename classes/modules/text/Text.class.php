<?php
/* ---------------------------------------------------------------------------
 * @Project: Alto CMS
 * @Plugin Name: CommentQuote
 * @Author: Klaus
 * @License: GNU GPL v2 & MIT
 *----------------------------------------------------------------------------
 */

class PluginCommentquote_ModuleText extends PluginCommentquote_Inherit_ModuleText {

	public function CallbackBlockquote($sTag, $aParams, $sContent, $sText) {

        $sText = '<blockquote>';
		if (isset($aParams['comment'])) {
			$oComment = $this->Comment_GetCommentById($aParams['comment']);
			$oUser = $oComment->getUser();
			$sText .= "<a href=\"{$oUser->getUserWebPath()}\" class=\"ls-user\">{$oUser->getLogin()}</a> ".$this->Lang_Get('plugin.commentquote.said').": ";
			
			if ($oComment->getTargetType() == 'topic' && Config::Get('module.comment.use_nested')){
				$url = Router::GetPath('comments').$oComment->getId();
			}else{
				$url = $oComment->getTarget()->getUrl().'#comment'.$oComment->getId();
			}
			
			$sText .= "<a href='".$url."'>↑</a>";			
			$sText .= "<br/>"; 
		}
		$sText .= $sContent;
		$sText .= '</blockquote>';
        return $sText;
    }
}

?>