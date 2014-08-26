jQuery(document).ready(function($){
	
	ls.comments.quote = function(idComment, targetType, targetId) {
        this.options.replyForm.find('[name=comment_id]').val(idComment);

        if (this.toggleCommentForm(idComment)) {
            var $that = this;
            var env = {
                context: this,
                success: function(result) {
                    $that.formCommentText("<blockquote comment=\""+idComment+"\">"+result.sText+"</blockquote>");
                }
            };
            this.loadComment(idComment, targetType, targetId, env);
        }
    };

});