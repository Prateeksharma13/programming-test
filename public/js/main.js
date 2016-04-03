$('.document').ready(function(){
  $("#form").submit(function(e) {
	$(".spin" ).addClass( "loader" );
	$('.wait').css('display', 'block');
	$("#submit_btn").attr("disabled", true);

 $.ajax({
       type: "POST",
       url: 'data',
       data: {first_name : $("#first_name").val(), last_name: $("#last_name").val(), email: $("#email").val()}, // serializes the form's elements.
       success: function(data)
       {
       	if(data == 'success') {
		$( ".spin" ).removeClass( "loader" );
		$('.wait').css('display', 'none');
       		$("#message_success").css('display', 'block');
       		$('#form').trigger("reset");
       		$("#submit_btn").attr("disabled", false);
       	}
       	else {
       		alert('There were errors in the form, please try again sometime later');
       	}
       }
     });

    e.preventDefault(); 
  });
});