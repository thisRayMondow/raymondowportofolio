document.getElementById("berandaBody").style.display = "none"
document.getElementById("kontakBody").style.display = "none"

document.getElementById("berandaModal").style.display = "none"
document.getElementById("kontakModal").style.display = "none"


document.getElementById("add").style.display = "none"
document.getElementById("addcontact").style.display = "none"

function getParameter () {
    addr = window.location.search
    parameter =  new URLSearchParams(addr)            
    nav = parameter.get("submit")
    if (!nav) {
        nav = "kontak"
    }
    var menu =  document.getElementById(nav)
    var body =  document.getElementById(nav+"Body")
    var modal =  document.getElementById(nav+"Modal")

    if (nav == "kontak") {
        document.getElementById("myModalLabel").innerHTML = "Tambah Kontak"
    } else {
        document.getElementById("myModalLabel").innerHTML = "Tambah Artikel"
    }
    menu.className = "act"
    body.style.display = "block"
    modal.style.display = "block"

}

function getPost() {
    if(this.nav == "beranda"){
        let titlePost = document.getElementById("title")
        let articlePost = document.getElementById("isi")
        let tagPost = document.getElementById("tag")
        let authPost = document.getElementById("penulis")

        document.getElementById("add").style.display = "block"
        document.getElementById("titlePost").innerHTML = titlePost.value
        document.getElementById("authorPost").innerHTML = authPost.value
        document.getElementById("dataPost").innerHTML = articlePost.value
        document.getElementById("tagPost").innerHTML = tagPost.value

        window.alert("Berhasil Menambahkan")
    }else{
        if (this.nav == "kontak") {
            let auth = document.getElementById("auth")
            let email = document.getElementById("email")
            let phone = document.getElementById("phone")
            let gender = document.getElementById("gender")

            document.getElementById("addcontact").style.display = "contents"
            document.getElementById("authcontact").innerHTML = auth.value
            document.getElementById("emailcontact").innerHTML = email.value
            document.getElementById("phonecontact").innerHTML = phone.value
            document.getElementById("gendercontact").innerHTML = gender.value
        } else {
            window.alert("no data was input")
        }
    }
}