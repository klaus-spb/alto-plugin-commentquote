{strip}
	{if $oComment->getTargetType() == 'topic'}
		<li class="comment-edit">
			<a href="#"
			   class="link-dotted"
			   onclick="ls.comments.quote('{$oComment->getId()}', '{$oComment->getTargetType()}', '{$oComment->getTargetId()}'); return false;">
				{$aLang.plugin.commentquote.quote}    
			</a>
		</li>
	{/if} 
{/strip}