$(document).ready(function(){
    $(".checkBtn").on({
        mouseenter: function(){
            $(this).addClass('bg-success');
        },
        mouseleave: function(){
            $(this).removeClass('bg-success');
        },
        click: function (){
            $(this).addClass('btn-success disabled');
            let taskId = $(this).attr('id').replace("checkBtn", "");
            $("#taskTitle"+taskId).addClass('text-decoration-line-through text-secondary');
            $("#taskDescription"+taskId).addClass('text-decoration-line-through text-secondary');
            $("#taskDeadline"+taskId).addClass('text-decoration-line-through text-secondary');
        }
    })
});