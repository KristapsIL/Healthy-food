const html = document.getElementById("html");
function toggleMode() {
    if (html.dataset.togl === "light") {
        html.dataset.togl = "dark";
    } else {
        html.dataset.togl = "light";
    }
}
// Get a reference to the .mobile-nav element


function hamburger() {
    let mobilenav = document.getElementById("mobile-nav");
    let authbutton = document.getElementById("auth-but");
    let mediaQuery = window.matchMedia("(min-width: 768px)");

    mediaQuery.addListener(function(e) {
        if (e.matches) {
            mobilenav.style.display = "";
        }
    });
    if (mobilenav.style.display == "none") {
        mobilenav.style.display = "flex";
    } else {
        mobilenav.style.display = "none";
    }
    if(authbutton){
        if(authbutton.style.display == "none"){
            authbutton.style.display = "block";
        }else{
            authbutton.style.display = "none";
        }
    }

}
window.onload = function() {
    if (localStorage.getItem('scrollPosition')) {
        window.scrollTo(0, localStorage.getItem('scrollPosition'));
    }
}

window.onbeforeunload = function() {
    localStorage.setItem('scrollPosition', window.scrollY);
}