// JavaScript Document
function AlertDenied( string){
			
	$.msgbox("<div style='font-family:Verdana; font-size: 18px; padding-top:20px; color: red;'>"+string+"</div>", 
	{type: "error", buttons: [{ type: "submit", value: "Okay"}]});
			
}

function AlertGranted( string){
	
	$.msgbox("<div style='font-family:Verdana; font-size: 18px; padding-top:20px; color: green;'>"+string+"</div>",
	{ type: "info"});
}

function AlertMessage( string){
	$.msgbox("<div style='font-family:Verdana; font-size: 18px; padding-top:20px; color: green;'>"+string+"</div>",
	{ type: "info"});
	
}

function AlertWarning( string){
	$.msgbox("<div style='font-family:Verdana; font-size: 18px; padding-top:20px; color: yellow;'>"+string+"</div>");
	
}

function AlertConfirm( string){
	$.msgbox("Are you sure that you want to permanently delete the selected element?", {type: "confirm",buttons : [{type: "submit", value: "Yes"},{type: "submit", value: "No"},{type: "cancel", value: "Cancel"}]}, function(result) { document.change_pass_form.new_password.value= result; });
}