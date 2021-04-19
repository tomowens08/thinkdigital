function myFunction(x) {
    x.classList.toggle("change");
    
}
function openNav() {
document.getElementById("xbtn").setAttribute("onclick", "myFunction(this);closeNav();");
    document.getElementById("mySidenav").style.width = "17em";
    document.getElementById("main").style.marginRight = "17em";
    document.body.style.backgroundColor = "rgba(255,255,255,0)";

}

function closeNav() {
document.getElementById("xbtn").setAttribute("onclick", "myFunction(this);openNav();");
    	document.getElementById("mySidenav").style.width = "0";
    	document.getElementById("main").style.marginRight= "0";
    	document.body.style.backgroundColor = "white";
    
}