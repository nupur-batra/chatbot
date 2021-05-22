// CHAT BOOT MESSENGER////////////////////////


$(document).ready(function(){
    $(".chat_on").click(function(){
        $(".Layout").toggle();
		$(".chat_on").hide(300);
		$("#inputtext").focus();
		$("#fis-policies-div").hide();
		$('#med-insurance-reply').hide();

		$("#fis-policies").click(function(){
			$("#fis-policies-div").show();
			$("#password-reset").hide();
			$("#help-desk").hide();
		});

		$("#med-insurance").click(function(){
			$('#med-insurance-reply').show();	
			// $(".Messages_list").append("$('.lastline').before(<p class='left'> <span > FIS provides medical insurance of 5lakh to secure your and your's family well-being.  </span></p>)");
		});

    });
    
       $(".chat_close_icon").click(function(){
        $(".Layout").hide();
           $(".chat_on").show(300);
    });
	
});

$('#chatform').submit(function(e){
    e.preventDefault();
	var query=$('#inputtext').val();
	$("#inputtext").focus();
	$('#inputtext').val('');
	if(query!=''){
		$("#chatform input").prop("disabled", true);
	    $("#chatform button").prop("disabled", true);
		$('.lastline').before('<p class="right"> <span >'+ query +'</span></p>');	
		$('.Messages').scrollTop($('.Messages')[0].scrollHeight);		
		var settings = {
		 // "async": false,
		  "crossDomain": true,
		  "url": "reply.php",
		  "method": "POST",
		  "data": { query:query }
		}
		$.ajax(settings).done(function (response) {
			$('.lastline').before('<p class="left"> <span >'+ response +'</span></p>');
			
			$("#chatform input").prop("disabled", false);
			$("#chatform button").prop("disabled", false);
			$('.Messages').scrollTop($('.Messages')[0].scrollHeight);
			$("#inputtext").focus();
		});
	}
});


