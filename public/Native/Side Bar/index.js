document.getElementById("berandaBody").style.display = "none"
document.getElementById("kontakBody").style.display = "none"
document.getElementById("infoBody").style.display = "none"
document.getElementById("SideBar").style.display = "none"

function openNav() {
    let sidebar = document.getElementById("SideBar")
    let main = document.getElementById("main")
    let footer = document.getElementById("footer")
    
    if (sidebar.style.display == "none") {
        sidebar.style.display = "block"
        main.style.marginLeft = "95px"
        footer.style.marginLeft = "95px"
    }else{
        sidebar.style.display = "none"
        main.style.marginLeft = "0px"
        footer.style.marginLeft = "0px"
    }
}

function getParams() {
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