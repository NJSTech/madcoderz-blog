$(document).ready(function(){
    $(".show-reply-input").click(function(event){
        event.preventDefault();
        var reply = $(this).parent();
        reply.children(".comment-box.of-reply").fadeIn();
    })
})