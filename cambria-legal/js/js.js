// Sticky Header
$(window).scroll(function() {

    if ($(window).scrollTop() > 100) {
        $('.main_h').addClass('sticky');
    } else {
        $('.main_h').removeClass('sticky');
    }
});



// navigation scroll lijepo radi materem
$('nav a').click(function(event) {
    var id = $(this).attr("href");
    var offset = 70;
    var target = $(id).offset().top - offset;
    $('html, body').animate({
        scrollTop: target
    }, 500);
    event.preventDefault();
});


  
  

function openTag(){
    document.getElementById("tooltiptag").style.opacity = "100%";
	document.getElementById("tooltiptag").style.visibility = "visible";	
}
function closeTag(){
    document.getElementById("tooltiptag").style.opacity = "0";   
	document.getElementById("tooltiptag").style.visibility = "hidden";
}
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