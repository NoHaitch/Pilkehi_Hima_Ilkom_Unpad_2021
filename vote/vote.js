function pilih(x) {
	document.getElementById(x).click();
	switch (x) {
		case 1:
			document.getElementById("wrapperSatu").className = "my-5 col-lg-3 mx-5 d-flex flex-column align-items-center border-bottom pb-2 border-3 border-success dipilih";
			document.getElementById("wrapperDua").className = "my-5 col-lg-3 mx-5 d-flex flex-column align-items-center border-bottom pb-2 border-3 border-secondary";
			document.getElementById("wrapperTiga").className = "my-5 col-lg-3 mx-5 d-flex flex-column align-items-center border-bottom pb-2 border-3 border-secondary";
			break;
		case 2:
			document.getElementById("wrapperSatu").className = "my-5 col-lg-3 mx-5 d-flex flex-column align-items-center border-bottom pb-2 border-3 border-secondary";
			document.getElementById("wrapperDua").className = "my-5 col-lg-3 mx-5 d-flex flex-column align-items-center border-bottom pb-2 border-3 border-success dipilih";
			document.getElementById("wrapperTiga").className = "my-5 col-lg-3 mx-5 d-flex flex-column align-items-center border-bottom pb-2 border-3 border-secondary";
			break;
		case 3:
			document.getElementById("wrapperSatu").className = "my-5 col-lg-3 mx-5 d-flex flex-column align-items-center border-bottom pb-2 border-3 border-secondary";
			document.getElementById("wrapperDua").className = "my-5 col-lg-3 mx-5 d-flex flex-column align-items-center border-bottom pb-2 border-3 border-secondary";
			document.getElementById("wrapperTiga").className = "my-5 col-lg-3 mx-5 d-flex flex-column align-items-center border-bottom pb-2 border-3 border-success dipilih";
			break;
		default:
			console.log("apa?");
			break;
	}
}

function kirim() {
	document.getElementById("submit").click();
}

function logout() {
	document.getElementById("logout").click();
}
