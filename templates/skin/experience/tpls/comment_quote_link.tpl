{strip}
	{if $oComment->getTargetType() == 'topic'}
			<a href="#"
			   class="link-dotted"
			   onclick="ls.comments.quote('{$oComment->getId()}', '{$oComment->getTargetType()}', '{$oComment->getTargetId()}'); return false;">
				{$aLang.plugin.commentquote.quote}    
			</a>
	{/if} 
{/strip}