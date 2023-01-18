if(document.getElementById("change-image")){
    let changeImageBtn = document.getElementById("change-image");
    changeImageBtn.addEventListener("click",e=>{
        document.getElementById("new-image").click();
    })

    document.getElementById("new-image").addEventListener("change",e=>{
        e.preventDefault();
        const data = new FormData();
        data.append("file",document.getElementById("new-image").files[0]);
        fetch("/app/change-image.php",{
            method: "POST",
            body:data
        }).then(response=>response.json()).then(response=>{
            if(response.status==="1"){
                window.location.reload();
            }
        })
    });
}

if(document.getElementById("profile-new-password-form")){
    const profileNewPassForm = document.getElementById("profile-new-password-form");
    profileNewPassForm.addEventListener("submit",e=>{
        e.preventDefault();
        const data = new FormData();
        for(const p of new FormData(profileNewPassForm)){
            data.append(p[0],p[1]);
        }
        fetch("/app/change-pass.php",{
            method:"POST",
            body:data
        }).then(response=>response.json()).then(response=>{
            if(response.status==='1'){
                document.getElementById("password-success").style.display="block";
                document.getElementById("login-error").style.display="none";
            }
            else{
                document.getElementById("password-success").style.display="none";
                document.getElementById("login-error").style.display="block";
            }
        })
    })

}