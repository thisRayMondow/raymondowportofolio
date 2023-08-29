        function openNav(){
            let sidebar = document.getElementById("sidebar")
            let main = document.getElementById("main")
            let menu = document.getElementById("navMenu")
            if (sidebar.style.display == "none") {
                sidebar.style.display = "block"
                main.style.width = "80%"
                menu.classList.add("btn-info")
            }else{
                sidebar.style.display = "none"
                main.style.width = "100%"                
                menu.classList.remove("btn-info") 
            }
        }