document.addEventListener("DOMContentLoaded", () => {
	post();
	window.onscroll = () => {
		if (window.innerHeight + window.scrollY >= document.body.offsetHeight) {
			post();
		}
	};
});

// function add() {
// 	const dog = document.getElementById("estab").innerHTML;
// 	const view = document.createElement("div");
// 	view.innerHTML = dog;
// 	cat.append(view);
// }

function post() {
	// fix this url haha
	const link = document.getElementById("api").value;
	const specific = document.getElementById("estab_link").value;
	fetch(`${link}`)
		.then((response) => response.json())
		.then((data) => {
			console.log(data);
			data.forEach((estab) => {
				const cat = document.getElementById("addnew");
				const recipient = document.createElement("div");
				recipient.className = "estab";
				recipient.innerHTML = `
				    <div class="container-xxl">
                <a class="anchor" href="${specific}/${estab.id}">
                <div class="row">
                
                    <div class="col">
                        <i id="usersnum" class="fa fa-users" style="font-size:35px"></i>
                        ${estab.No_customer}
                    </div>
                    <div class="col">
                    <!-- <i class="fa fa-building-o" style="font-size:36px"></i> -->
                         <i id="building"class="fa fa-building-o" style="font-size:36px"></i>
                            <strong>${estab.name}</strong>
                    </div>

                    <div class="col">
                        <i id="globe" class="fa fa-globe" style="font-size:35px"></i>
                       ${estab.location}
                    </div> 
                </div>
                </a>

            </div>
				`;
				cat.append(recipient);
			});
		});
}
