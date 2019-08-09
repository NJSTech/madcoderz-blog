// Author: Nawjesh Soyeb
// Title:Comment reply
// create at:26/07/2019
$(document).ready(function(){
    $(".show-reply-input").click(function(event){
        event.preventDefault();
        var reply = $(this).parent();
        reply.children(".comment-box.of-reply").fadeIn();
    })
})