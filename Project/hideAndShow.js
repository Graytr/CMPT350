function showNew() {
	document.getElementById("hideNew").style.display = "block";
	document.getElementById("hideUpdate").style.display = "none";
	document.getElementById("hideDelete").style.display = "none";
}

function showUpdate() {
	document.getElementById("hideNew").style.display = "none";
	document.getElementById("hideUpdate").style.display = "block";
	document.getElementById("hideDelete").style.display = "none";
}

function showDelete() {
	document.getElementById("hideNew").style.display = "none";
	document.getElementById("hideUpdate").style.display = "none";
	document.getElementById("hideDelete").style.display = "block";
}