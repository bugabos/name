

document.addEventListener('DOMContentLoaded', function() {
	const form = document.getElementById('form');
	form.addEventListener('submit', formSend);

	async function formSend(e) {
		let formData = new FormData(form);
		let response = await fetch('sendmail.php', {method: 'POST',body: formData});
		if (response.ok) {
			let result = await response.json();
			alert(result.massage);
			form.reset();
		} else{
			alert("Error");
		}
	}	
})
