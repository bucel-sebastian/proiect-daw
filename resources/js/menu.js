
if(document.getElementById("menu-button")){
    const menuButton = document.getElementById("menu-button");
    if(sessionStorage.getItem("menu-status")){
        menuButton.style.transition="none";
        document.getElementById("menu-wrap").style.transition="none";
        if(sessionStorage.getItem("menu-status") === "0"){
            menuButton.classList.add("menu-inactive");
            menuButton.classList.remove("menu-active");
            document.getElementById("menu-wrap").classList.add("menu-inactive");
            document.getElementById("menu-wrap").classList.remove("menu-active");
        }
        else if(sessionStorage.getItem("menu-status") === "1"){
            menuButton.classList.remove("menu-inactive");
            menuButton.classList.add("menu-active");
            document.getElementById("menu-wrap").classList.remove("menu-inactive");
            document.getElementById("menu-wrap").classList.add("menu-active");
        }
        
    }
    else{
        sessionStorage.setItem("menu-status","0");
    }
    
    menuButton.addEventListener("click",e=>{
        e.preventDefault();
        menuButton.style.transition="0.2s ease";
        document.getElementById("menu-wrap").style.transition="0.3s ease";
        if(menuButton.classList.contains("menu-inactive")){
            menuButton.classList.remove("menu-inactive");
            menuButton.classList.add("menu-active");
            document.getElementById("menu-wrap").classList.remove("menu-inactive");
            document.getElementById("menu-wrap").classList.add("menu-active");
            sessionStorage.setItem("menu-status","1");
        }
        else{
            menuButton.classList.add("menu-inactive");
            menuButton.classList.remove("menu-active");
            document.getElementById("menu-wrap").classList.add("menu-inactive");
            document.getElementById("menu-wrap").classList.remove("menu-active");
            sessionStorage.setItem("menu-status","0");
        }
    })
}