/** Versi Post */
// function login(){
//     var name = document.getElementById('name').value;
//     var pass = document.getElementById('pass').value;

//     if (name === "admin") {
//         if (pass === "admin") {
//             window.alert("Berhasil Login")
//             window.location.href = "/public/Native/Login Validasi/"
//         } else {
//             window.alert("Kata Sandi Salah")
//             window.location.href = "/public/Native/Login Validasi/"            
//         }
//     }else{
//         window.alert("Nama Pengguna Salah")
//         window.location.href = "/public/Native/Login Validasi/"
//     }
// }

/** Versi Get */
function login(){
    getUrl = window.location.search
    parameter = new URLSearchParams(getUrl)

    if (parameter != "") {
        nama = parameter.get("name")
        pass = parameter.get("pass")

        if (nama === "admin") {
            if (pass === "admin") {
                window.alert("Berhasil Login")
                window.location.href = "/public/Native/Login Validasi/beranda.html"
            } else {
                window.alert("Kata Sandi Salah")
                window.location.href = "/public/Native/Login Validasi/"           
            }
        }else{
            window.alert("Nama Pengguna Salah")
            window.location.href = "/public/Native/Login Validasi/"
        }
    }
}
