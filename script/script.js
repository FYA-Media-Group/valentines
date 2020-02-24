var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
if (isMobile) {
	var linkish = "whatsapp://send?text=https://bit.ly/2OHoPAQ";
} else {
	var linkish = "whatsapp://send?text=https://bit.ly/2OHoPAQ";
}

function f1(){
	document.getElementById("whatsapp").href = linkish;
}


function lovefunction(){
	if ($.trim($("textarea").val()) != "") {
		var e = document.getElementById("lovesong");
		var strUser = e.options[e.selectedIndex].value;
		alert(strUser);
		if ($.trim(strUser) != "") {
			var message = $("textarea").val();
			var step = "store_info"
			
			$.ajax({
				type: 'POST',
				url: "storage.php",
				data: {
					step:step,
					song:strUser,
					message:message,
				},
				success: function(response) {
					
					var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
					if (isMobile) {
						var linkii = "whatsapp://send?text=https://www.fyagroup.com/valentines-love/valentine.php?love=";
					} else {
						var linkii = "whatsapp://send?text=https://www.fyagroup.com/valentines-love/valentine.php?love=";
					}
					
					alert(response);
					window.location = linkii+response;
				},
				error: function(XMLHttpRequest, textStatus, errorThrown) {
					return false;
				}
			});
		
		}else{
			alert('Please dedicate a love song to your valentine!');
			return false;
		}
	}else{
		alert('Please write a small message for your valentine!');
		return false;
	}
}