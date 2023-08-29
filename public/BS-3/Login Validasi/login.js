document.getElementById("usermsg").style.display = "none"        
document.getElementById("passmsg").style.display = "none"

function login() {
    var name =  document.getElementById('name')
    var pass =  document.getElementById('pass')

    if (name.value == 'admin') {
         if (pass.value == 'admin') {
             window.alert('Berhasil Login')
             window.location.href = "/public/BS-3/Login Validasi/beranda.html"
         }else{
             document.getElementById("usermsg").style.display = "none"
             name.style.borderColor = "blue"                    
             document.getElementById("passmsg").style.display = "inline"
             pass.style.borderColor = "red"
             pass.value = ''                  
         }
    }else{                
     document.getElementById("usermsg").style.display = "inline"
     name.style.borderColor = "red"
     name.value = ''
    }
 }