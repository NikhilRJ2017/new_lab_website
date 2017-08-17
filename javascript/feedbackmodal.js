
var feed_modal = document.getElementById("feedbackmodal");
var feedbtn = document.getElementById("feedBack");


//when user clicks feedback button,open feedback moadal
	feedbtn.onclick = function{
		feed_modal.style.display = "block";
	}

//when user clicks anywhere outside the modal close it
	window.onclick = function(event){
		if(event.target == feedbackmodal){
			feedbackmodal.style.display = "none";
		}
	


