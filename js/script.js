var mousex;
var mousey;
var move = false;
var ldivx = 1100;
var ldivy = 300;
window.onload = init;
function init() {
var d = document.getElementById('dragme');
d.onmousedown = mousedown;
d.onmouseup = mouseup;
d.onmousemove = mousemove;
d.style.left = ldivx +'px';
d.style.top = ldivy +'px';
d.style.display = 'block';
}
function mousedown(e) {
document.getElementById('dragme').style.color = 'red';
move = true;
mousex = e.clientX; 
mousey = e.clientY;
}
function mouseup(e) {
document.getElementById('dragme').style.color = 'black';
move = false;
}
function mousemove(e) {
if(move){
ldivx = ldivx + e.clientX - mousex;
ldivy = ldivy + e.clientY - mousey;
mousex = e.clientX;
mousey = e.clientY;
var d = document.getElementById('dragme');
d.style.left = ldivx +'px';
d.style.top = ldivy +'px';
}
}
function show_hide() 
	 {
		 dv = document.getElementById("collapse");
		 ele = document.getElementById("ele_show_hide");
		 if (dv.style.display ==  '')
		 { dv.style.display = 'none'; 
			ele.innerHTML = "<img src='image/down.jpg' width='58' height='54'/> "+"Complaint Registration";
		 }
		 else
		 {
			dv.style.display = ''; 
			ele.innerHTML ="<img src='image/down.jpg' width='58' height='54'/>";
		 }
	 }
