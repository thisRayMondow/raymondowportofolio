document.getElementById("berandaBody").style.display = "none"
document.getElementById("kontakBody").style.display = "none"
document.getElementById("infoBody").style.display = "none"
function getParameter () {
    addr = window.location.search
    parameter =  new URLSearchParams(addr)            
    nav = parameter.get("submit")
    if (!nav) {
        nav = "beranda"
    }
    var menu =  document.getElementById(nav)
    var body =  document.getElementById(nav+"Body")
    menu.className = "active"
    body.style.display = "block"
}


document.getElementById('sidenav').style.display ="block"
document.getElementById('content').style.width = "80%"
function openNav() {
    let nav = document.getElementById('sidenav')
    let content = document.getElementById('content')
    if (nav.style.display == "none") {
        nav.style.display = "block"
        content.style.width = "80%"
    }else{
        nav.style.display = "none"
        content.style.width = "100%"
    }
}