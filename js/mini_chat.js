setInterval(function(){
    $.get('../includes/flow-msg.php', function(htmlMessages){
        $('.flow-msg').html(htmlMessages);
        $('.flow-msg')[0].scrollTop = 9999;
    });
    
},2000);

$('.flow-msg')[0].scrollTop = 9999;