document.addEventListener("DOMContentLoaded", () => {
	window.onscroll = () => {
		if (window.innerHeight + window.scrollY >= document.body.offsetHeight) {
			add();	
		}
	};
});

function add() {
	const cat = document.getElementById("addnew");
	const dog = document.getElementById("estab").innerHTML;
	const view = document.createElement("div");
	view.innerHTML = dog;
	cat.append(view);
}
