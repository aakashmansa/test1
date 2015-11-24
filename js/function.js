var count = 3;
$(document).on("click","#add_position",function(){
	count = count + 1;
	var html = "<div class='form-group'><label for='position"+count+"'>Position "+count+"</label><input type='text' class='form-control' id='position"+count+"' placeholder=''></div>",
		ele = $("#more_positions");

	ele.append(html);
});