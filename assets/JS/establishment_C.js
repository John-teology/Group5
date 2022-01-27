document.addEventListener("DOMContentLoaded", () => {
	loc();
});

function loc() {
	const url = document.getElementById("url").value;
	fetch(url)
		.then((response) => response.json())
		.then((data) => {
			var availableTags = [];
			var availableTagsCode = [];
			data.forEach((dat) => {
				availableTags.push(dat.location);
				$("#tags").autocomplete({
					source: availableTags,
					select: function (e, ui) {
						$("#tags_code").val(
							availableTagsCode[availableTags.indexOf(ui.item.value)]
						);
					},
				});
			});
		});
}
