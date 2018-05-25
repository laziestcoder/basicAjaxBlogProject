$(document).ready(function(){ 

	//check user availability 

	$('#username').blur(function(){
		var username = $(this).val();
		$.ajax({
			url:"check/checkuser.php",
			method:"POST",
			data: {username:username},
			dataType: "text",

			success: function (data){
				$('#userstatus').html(data);
			}
		});
	}); 


	// Autocomple Textbox
	$('#skill').keyup(function(){
		var skill = $(this).val();
		if(skill!= ''){
			$.ajax({
				url:"check/checkskill.php",
				method:"POST",
				data: {skill:skill},

				success: function (data){
					$('#skillstatus').fadeIn();
					$('#skillstatus').html(data);
				}
			});
		}
	}); 

	$(document).on('click', 'li', function(){
		$("#skill").val($(this).text());
		$('#skillstatus').fadeOut();
	});


	//show password button

	$("#showpass").on('click', function(){
		var pass = $("#password");
		var fieldtype = pass.attr('type');
		if(fieldtype=="password"){
			pass.attr('type','text');
			$(this).text("Hide Password");

		}else{
			pass.attr('type','password');
			$(this).text("Show Password");
		}
	});


	//Auto refresh Div Content
	$('#autosubmit').click(function(){
		var content = $("#body").val();
		if($.trim(content)!= ''){
			$.ajax({
				url:"check/checkrefresh.php",
				method:"POST",
				data: {body:content},
				dataType: "text",
				success: function (data){
					$("#body").val("");
				}
			});
			return false;
		}
	}); 

	setInterval(function(){
		$("#refreshstatus").load('check/getrefresh.php').fadeIn("slow");


	},0);// 1000 or 0 is refresh rate or interval in mili second


	//Live Data Search
	$('#liveSearch').keyup(function(){
		var searchData = $(this).val();
		if(searchData != ''){
			$.ajax({
				url:'check/checkSearch.php',
				method:"POST",
				data:{searchLive:searchData},
				dataType:"text",
				success: function(data){
					$('#searchStatus').html(data);

				}
			});
		}else{
			$('#searchStatus').html("");

		}

	});

	//Auto Data Save
		
	$('#content').keyup( function(){
		var content =  $("#content").val();
		var contentid =  $("#contentid").val();

		if(content != ''){
			$.ajax({
				url:'check/checkAutoSave.php',
				method:"POST",
				data:{contentName:content, contentId:contentid},
				dataType:"text",
				success: function(data){
					if(data){
						$("#contentid").val(data);
					}
					
					$('#contentStatus').text("Data Save Automatically...");
					setInterval(function(){
						$('#contentStatus').text("");
					},2000);		
				}
			});
		}
	}); 

	//$('#content').keyup( autoSave());


});  