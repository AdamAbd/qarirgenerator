const nav = document.getElementById("navbar")

const logoBlack = document.getElementById("logo-black")
const logoWhite = document.getElementById("logo-white")

const mobileLogoBlack = document.getElementById("mobile-logo-black")
const mobileLogoWhite = document.getElementById("mobile-logo-white")

const globeWhite = document.getElementById("globe-white");
const globeBlack = document.getElementById("globe-black");

const drowdownWhite = document.getElementById("drowdown-white");
const drowdownBlack = document.getElementById("drowdown-black");

const pipeNavbar = document.getElementById("pipe-navbar")

function isMobileScreen() {
    return window.innerWidth <= 600;
}
mobileLogoBlack.classList.toggle("hidden", window.scrollY == 0);
mobileLogoWhite.classList.toggle("hidden", window.scrollY > 0);


window.addEventListener("scroll", function () {

    if(isMobileScreen()){
        mobileLogoBlack.classList.toggle("hidden", window.scrollY == 0);
        mobileLogoWhite.classList.toggle("hidden", window.scrollY > 0);
    } else {
        logoBlack.classList.toggle("hidden", window.scrollY == 0);
        logoWhite.classList.toggle("hidden", window.scrollY > 0);
    }
    
    nav.classList.toggle("bg-white", window.scrollY > 0);
    nav.classList.toggle("text-black", window.scrollY > 0);
    pipeNavbar.classList.toggle("bg-black", window.scrollY > 0);
    globeWhite.classList.toggle("hidden", window.scrollY > 0);
    drowdownWhite.classList.toggle("hidden", window.scrollY > 0);
    
    nav.classList.toggle("bg-transparant", window.scrollY == 0);
    nav.classList.toggle("text-white", window.scrollY == 0);
    pipeNavbar.classList.toggle("bg-white", window.scrollY == 0);
    globeBlack.classList.toggle("hidden", window.scrollY == 0);
    drowdownBlack.classList.toggle("hidden", window.scrollY == 0);
});