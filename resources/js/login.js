if(document.getElementById("login-form")){
    const loginForm = document.getElementById("login-form");
    loginForm.addEventListener("submit",e=>{
        e.preventDefault();
        const data = new FormData();
        
        for(const p of new FormData(loginForm)){
            data.append(p[0],p[1]);
        }

        fetch('/app/login.php',{
            method:"POST",
            body: data
        }).then(response=>response.json()).then(response=>{
            if(response.status==="1"){
                window.location.href='/';
            }
            else{
                document.getElementById("login-error").style.display="block";
            }
        })
    })
}

// if(document.getElementById("register-form")){
//     const registerForm = document.getElementById("register-form");
//     registerForm.addEventListener("submit",e=>{
//         e.preventDefault();
//         const data = new FormData();
        
//         for(const p of new FormData(registerForm)){
//             data.append(p[0],p[1]);
//         }

//         fetch('/app/register.php',{
//             method:"POST",
//             body: data
//         }).then(response=>response.json()).then(response=>{
//             if(response.status==="1"){
//                 window.location.href='/';
//             }
//             else{
//                 document.getElementById("login-error").style.display="block";
//             }
//         })
//     })
// }

if(document.getElementById("forgot-password-form")){
    const forgotPasswordForm = document.getElementById("forgot-password-form");
    forgotPasswordForm.addEventListener("submit",e=>{
        e.preventDefault();
        const data = new FormData();
        
        for(const p of new FormData(forgotPasswordForm)){
            data.append(p[0],p[1]);
        }

        fetch('/app/forgot-password.php',{
            method:"POST",
            body: data
        }).then(response=>response.json()).then(response=>{
            if(response.status==="1"){
                window.location.href='/forget-password/new/';
            }
            else{
                document.getElementById("login-error").style.display="block";
            }
        })
    })
}
if(document.getElementById("new-password-form")){
    const newPasswordForm = document.getElementById("new-password-form");
    newPasswordForm.addEventListener("submit",e=>{
        e.preventDefault();
        const data = new FormData();
        
        for(const p of new FormData(newPasswordForm)){
            data.append(p[0],p[1]);
        }

        fetch('/app/set-new-password.php',{
            method:"POST",
            body: data
        }).then(response=>response.json()).then(response=>{
            if(response.status==="1"){
                window.location.href='/forget-password/success/';
            }
            else{
                document.getElementById("login-error").style.display="block";
            }
        })
    })
}

if(document.getElementById("register-form")){
    const registerForm = document.getElementById("register-form");
    registerForm.addEventListener("submit",e=>{
        e.preventDefault();

        const data = new FormData();
        for(const p of new FormData(registerForm)){
            data.append(p[0],p[1]);
        }

        fetch("/app/register.php",{
            method:"POST",
            body:data
        }).then(response=>response.json()).then(response=>{
            console.log(response)
            if(response.status==="1"){
                fetch('/app/login.php',{
                    method:"POST",
                    body: data
                }).then(response=>response.json()).then(response=>{
                    if(response.status==="1"){
                        window.location.href="/";
                    }
                    
                })
            }
            else{
                document.getElementById("login-error").style.display="block";
            }
        })
    })
}