<?php
    $pageTitle = 'Acasa';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    

    <?php
        include DOCUMENT_ROOT . '/resources/modules/beforeHead.module.php';
    ?>

</head>
<body>
    <?php
        include DOCUMENT_ROOT . '/config.php';
        include DOCUMENT_ROOT . '/resources/modules/header.module.php';
    ?>
    <div id="page-body">
        <div id="menu-wrap" class="menu-inactive">
        <?php
            include DOCUMENT_ROOT . '/resources/modules/menu.module.php';
        ?>
        </div>
        

        <div id="page-wrap" class="">
            <h1>Salut <?php echo $_SESSION['user-data']->username?>!</h1>
            <br>
            <div id="page-container">
                <div class="notes-container">
                    <h2>Notițe evidențiate</h2>
                    <div class="notes-list">
                        <?php
                            $featured_notes = $database->get('notes',array('user_id'=>$_SESSION['user-data']->user_id,'featured'=>1),5,array("last_edit_date"));

                            if(sizeof($featured_notes)>0){
                                
                                foreach ($featured_notes as $key => $value) {
                                    echo '<a class="note-link" href="/note/?id=' . $value['note_id'] . '"><div class="note-container"><h4>' . $value['title'] . '</h4><span> Ultima modificare - ' . $value['last_edit_date'] . '</span><div class="note-link-content">' . substr($value['content'],0,200) . '</div></div></a>';
                                }
                            }
                            else{
                                echo '<h4>Momentan nu exista notite evidentiate...</h4>';
                            }
                            
                        ?>
                    </div>
                </div>
                <div class="notes-container">
                    <h2>Ultimele notițe</h2>
                    <div class="notes-list">
                        <?php
                            $latest_notes = $database->get('notes',array('user_id'=>$_SESSION['user-data']->user_id),5,array("last_edit_date"),"DESC");
                            if(sizeof($latest_notes)>0){
                                foreach ($latest_notes as $key => $value) {
                                    echo '<a class="note-link" href="/note/?id=' . $value['note_id'] . '"><div class="note-container"><h4>' . $value['title'] . '</h4><span> Ultima modificare - ' . $value['last_edit_date'] . '</span><div class="note-link-content">' . substr($value['content'],0,200) . '</div></div></a>';
                                }
                            }
                            else{
                                echo '<h4>Momentan nu exista notite...</h4>';
                            }

                        ?>
                    </div>
                </div>
                
                
            </div>
        </div>


        
    </div>

    <?php
        include DOCUMENT_ROOT . '/resources/modules/footer.module.php';
        include DOCUMENT_ROOT . '/resources/modules/beforeBody.module.php';
    ?>
</body>
</html>


