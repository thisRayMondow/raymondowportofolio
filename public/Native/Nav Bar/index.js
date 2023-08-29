/**Versi 1 */
// document.getElementById("berandaNav").className = "active"
// document.getElementById("kontakNav").classList.remove('active')
// document.getElementById("beranda").style.display = "block"
// document.getElementById("kontak").style.display = "none"
// function active(target){
//     if (target == "beranda") {
//         document.getElementById("berandaNav").className = "active"
//         document.getElementById("kontakNav").classList.remove('active')
//         document.getElementById("beranda").style.display = "block"
//         document.getElementById("kontak").style.display = "none"
//     }else{
//         document.getElementById("berandaNav").classList.remove('active')
//         document.getElementById("kontakNav").className = "active"
//         document.getElementById("beranda").style.display = "none"
//         document.getElementById("kontak").style.display = "block" 
        
//     }
// }

/**Versi 2 */
document.getElementById("berandaBody").style.display = "none"
document.getElementById("kontakBody").style.display = "none"

function getParameter() {
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