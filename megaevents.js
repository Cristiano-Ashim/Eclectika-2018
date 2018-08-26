$(document).ready(function(){
	var token = $("#token").text();
	var tk = "token=" + token;
	$.post("http://eclectika.org/scripts/api/GetAllEvents", tk, function(data){
		console.log("data was fetched");

	var box_number = 0;
		var boxes = ["a", "b", "c", "d", "e", "f", "g", "h", "i"];
		var events = JSON.parse(data);
		console.log("parsed");
		var cat_id = $("#cat_id").text();
		events.forEach(function(event){
			if (event.category_id == cat_id){
				console.log("matched_id");
				var box_id = "#" + boxes[box_number];
				box_number = box_number + 1;
				var button_holder = box_id + " .button-container .register";
				var idholder = box_id + " .hidden p";
				var titleholder = box_id + " .title h2";
				var introholder = box_id + " .introduction h4";
				var desholder = box_id + " .inner .innermost p";
				var contactholder = box_id + " .contact p";
				$(idholder).text(event.Eventid);
				$(box_id).fadeIn("slow");
				$(box_id).css("display","flex");
				$(introholder).text(event.description);
				$(titleholder).text(event.name);
				$(desholder).text(event.rules);
				$(contactholder).text(event.contacts);
				if(event.Registered){
					$(button_holder).css("display", "none");
				}

			}
		});
		
		});

	/*
	var box_number = 0;
	var boxes = ["a", "b", "c", "d", "e", "f", "g", "h", "i"];
	var events = JSON.parse(data);
	console.log("parsed");
	var cat_id = $("#cat_id").text();
	events.forEach(function(event){
		if (event.category_id == cat_id){
			var box_id = "#" + boxes[box_number];
			box_number = box_number + 1;
			var button_holder = id + " .button-container .register";
			var idholder = id + " .hidden p";
			var titleholder = id + " .title h2";
			var introholder = id + " .introduction h4";
			var desholder = id + " .inner .innermost p";
			var contactholder = id + " .contact p";
			$(idholder).text(event.Eventid);
			$(box_id).fadeIn("slow");
			$(box_id).css("display","flex");
			$(titleholder).text(event.name);
			$(desholder).text(event.description);
			$(contactholder).text(event.contacts);
			if(event.Registered){
				$(button_holder).hide();
			}

		}
	}); */


	/*for (var i = 0; i < order; i++) {
		var box = boxes[i];
		console.log(box);
		var id = "#"+box;
		console.log(id);
		var idholder = id + " .hidden";
		var titleholder = id + " .title h2";
		var introholder = id + " .introduction h4";
		var desholder = id + " .inner .innermost p";
		var contactholder = id + " .contact p";
		$(idholder).text(box);
		$(id).fadeIn("slow");
		
		$(id).css("display","flex");
		$(titleholder).text("Title");
		$(introholder).text("The introduction goes here, this willbe mostly two lines or so depending on the event and the shit that i write here, but mostly its going to be pure shit and stuff.");
		$(desholder).text("thhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh");
		$(contactholder).text("Number one : 98989989899898  Number two : 63636363636");

	}	*/

	$(".des").click(function(){
		var parent_id = $(this).parent().parent().attr("id");
		var elem = "#" +parent_id + " .inner";
		$(elem).slideToggle("slow");
	});

	$(".register").click(function(){
		var eventid = $(this).parent().siblings(".hidden").children("p").text();
		var cat_id = $("#cat_id").text();

		var reg_req = "token=" + token + "&Eventid=" + eventid + "&category=" + cat_id;
		$.post("http://eclectika.org/scripts/api/EventRegister", reg_req, function(data){
			alert("Registration request recieved");
			
		});
	});

});




















