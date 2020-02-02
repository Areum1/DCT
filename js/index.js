function onMouseOver(b){
	let a = document.getElementsByClassName("img "+"item"+b);
	for(var i=0; i<a.length; i++)
		a[i].style.visibility="visible";
}