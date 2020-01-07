var currentPlaylist = [];
var audioElement;


function updateEmail(emailClass) {
	var emailValue = $("." + emailClass).val();

	$.post("includes/handlers/ajax/updateEmail.php", { email: emailValue, username: userLoggedIn})
	.done(function(response) {
		$("." + emailClass).nextAll(".message").text(response);
	})


}

function updatePassword(oldPasswordClass, newPasswordClass1, newPasswordClass2) {
	var oldPassword = $("." + oldPasswordClass).val();
	var newPassword1 = $("." + newPasswordClass1).val();
	var newPassword2 = $("." + newPasswordClass2).val();

	$.post("includes/handlers/ajax/updatePassword.php", 
		{ oldPassword: oldPassword,
			newPassword1: newPassword1,
			newPassword2: newPassword2, 
			username: userLoggedIn})

	.done(function(response) {
		$("." + oldPasswordClass).nextAll(".message").text(response);
	})


}

function logout(){
	$.post("includes/handlers/ajax/logout.php", function(){
		location.reload();
	});
}

function Audio() {

	this.currentlyPlaying;
	this.audio = document.createElement('audio');

	this.setTrack = function(src) {
		
		this.audio.src = src;
	}

	this.play = function() {
		this.audio.play();
	}

	this.pause = function() {
		this.audio.pause();
	}

}