if(document.getElementById("new-note")){
    
    let noteFeaturedButton = document.getElementById("note-button-feature");
    noteFeaturedButton.addEventListener("click",e=>{
        e.preventDefault();
        if(document.getElementById("note-button-feature-active").style.display==="block"){
            document.getElementById("note-button-feature-active").style.display="none";
            document.getElementById("note-button-feature-inactive").style.display="block";
        }
        else{
            document.getElementById("note-button-feature-active").style.display="block";
            document.getElementById("note-button-feature-inactive").style.display="none";
        }
    })

    let deleteNoteButton = document.getElementById("note-button-delete");
    deleteNoteButton.addEventListener("click",e=>{
        e.preventDefault();
        if(confirm("Sigur doresti sa stergi aceasta nota?")){
            window.location.href="/";
        }
    });

    let saveNoteButton = document.getElementById("note-button-save");
    saveNoteButton.addEventListener("click",e=>{
        e.preventDefault();
        const data = new FormData();
        data.append("title",document.getElementById("note-title").innerHTML);
        data.append("content",document.getElementById("note-content").innerHTML);
        if(document.getElementById("note-button-feature-active").style.display==="block"){
            data.append("featured","1");
        }
        else{
            data.append("featured","0");
        }

        fetch("/app/new-note.php",{
            method:"POST",
            body:data
        }).then(response=>response.json()).then(response=>{
            if(response.status==="1"){
                window.location.href="/note?id=" + response.newNoteId;
            }
        });
        
    });
}

if(document.getElementById("view-note")){
    let noteFeaturedButton = document.getElementById("note-button-feature");
    noteFeaturedButton.addEventListener("click",e=>{
        e.preventDefault();
        
        if(document.getElementById("note-button-feature-active").style.display==="block"){
            document.getElementById("note-button-feature-active").style.display="none";
            document.getElementById("note-button-feature-inactive").style.display="block";

            fetch("/app/edit-note.php?callback=setFeature&featured=0&note_id="+document.getElementById("note_id").innerHTML).then(response=>response.json()).then(response=>{
                if(response.status==="1"){
                    console.log("success");
                }
            });
        }
        else{
            document.getElementById("note-button-feature-active").style.display="block";
            document.getElementById("note-button-feature-inactive").style.display="none";
            fetch("/app/edit-note.php?callback=setFeature&featured=1&note_id="+document.getElementById("note_id").innerHTML).then(response=>response.json()).then(response=>{
                if(response.status==="1"){
                    console.log("success");
                }
            });
        }
    })

    let noteTitle = document.getElementById("note-title");
    noteTitle.addEventListener("input",e=>{
        fetch("/app/edit-note.php?callback=setTitle&title="+noteTitle.innerHTML+"&note_id="+document.getElementById("note_id").innerHTML).then(response=>response.json()).then(response=>{
            if(response.status==="1"){
                console.log("success");
                document.getElementById("note-last-update").innerHTML="Ultima modificare - "+response.newDate;
            }
        });
    })


    let noteContent = document.getElementById("note-content");
    noteContent.addEventListener("input",e=>{
        const data = new FormData();
        data.append("callback","setContent");
        data.append("note_id",document.getElementById("note_id").innerHTML);
        data.append("content",noteContent.innerHTML);
        fetch("/app/edit-note.php",{
            method: "POST",
            body:data
        }).then(response=>response.json()).then(response=>{
            if(response.status==="1"){
                console.log("success");
                document.getElementById("note-last-update").innerHTML="Ultima modificare - "+response.newDate;
            }
        });
    });

    let deleteNoteButton = document.getElementById("note-button-delete");
    deleteNoteButton.addEventListener("click",e=>{
        e.preventDefault();
        if(confirm("Sigur doresti sa stergi aceasta nota?")){
            fetch("/app/delete-note.php?note_id="+document.getElementById("note_id").innerHTML).then(response=>response.json()).then(response=>{
                if(response.status==="1"){
                    window.location.href="/";
                };
            })
        }
        
    })

    
}




