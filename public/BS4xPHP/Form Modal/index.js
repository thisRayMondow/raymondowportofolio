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

        function delNotice(){
            window.alert("Anda yakin ingin menghapus artikel ini ?")
        }

        function updateArticle(num){
            let title = document.getElementById("title"+num)
            let auth = document.getElementById("author"+num)
            let body = document.getElementById("body"+num)
            let tag = document.getElementById('tag'+num)

            document.getElementById("titleU").value = title.innerHTML
            document.getElementById("authU").value = auth.innerHTML
            document.getElementById("bodyU").value = body.innerHTML
            document.getElementById("tagsU").value = tag.innerHTML

        }

        function setData(){
            let num = 4
            let title =  document.getElementById("title").value
            let auth =  document.getElementById("auth").value
            let body = document.getElementById("body").value
            let tag =  document.getElementById("tags").value

            document.getElementById("title"+num).innerHTML = title
            document.getElementById("author"+num).innerHTML = auth
            document.getElementById("body"+num).innerHTML = body
            document.getElementById('tag'+num).innerHTML = tag
            document.getElementById("4").style.display = "block"
        }