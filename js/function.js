var count = 3;
$(document).on("click","#add_position",function(){
	count = count + 1;
	var html = "<div class='form-group'><label for='position"+count+"'>Position "+count+"</label><input type='text' class='form-control' id='position"+count+"' placeholder=''></div>",
		ele = $("#more_positions");

	ele.append(html);
});

$(document).on("click","#stks",function(){
	$("#profile").find(".fc-button-agendaWeek").click();
});

$(document).on("click","#otov",function(){
	$("#messages").find(".fc-button-agendaWeek").click();
});

// $(document).on("click","#logo",function(){
// 	var i = parseInt($(this).data('count'));

// 	i = i+1;
// 	if(i > 3)
// 		i = 1;
// 	$(this).data('count',i);
// 	$(this).attr('src','images/Logo_'+i+'.png')
// });