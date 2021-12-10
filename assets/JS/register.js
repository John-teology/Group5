document.addEventListener("DOMContentLoaded", () => {
	const element = document.querySelector(".error");
	if (element) {
		var all = document.getElementsByClassName("div2");
		for (var i = 0; i < all.length; i++) {
			all[i].style.marginBottom = "50px";
		}
	}
});
