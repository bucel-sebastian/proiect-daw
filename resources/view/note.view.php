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
            <div id="page-container">
                <div id="view-note">
                    <?php
                        if(isset($_GET['id'])){
                            echo '<div id="note_id" hidden>' . $_GET['id'] . '</div>';
                            $actual_note = $database->get('notes',array('note_id'=>$_GET['id'],'user_id'=>$_SESSION['user-data']->user_id));
                            $actual_note = $actual_note[0];
                            
                            if($actual_note['featured']==="1"){
                                $featured_status = '<i class="fa-solid fa-star" id="note-button-feature-active" style="display:block;"></i>
                                <i class="fa-regular fa-star" id="note-button-feature-inactive" style="display:none;"></i>';
                            }
                            else{
                                $featured_status = '<i class="fa-solid fa-star" id="note-button-feature-active" style="display:none;"></i>
                                <i class="fa-regular fa-star" id="note-button-feature-inactive" style="display:block;"></i>';
                            }

                            echo '
                            <div class="note-header">
                            <div style="width:75%;display: flex;align-content: center;align-items: center;justify-content: flex-start;flex-wrap: nowrap;flex-direction: row;">
                                <div id="note-button-feature">
                                    ' . $featured_status . '
                                </div>
                                <h2 id="note-title" contenteditable="true">' . $actual_note['title'] . '</h2>
                            </div>
                            
                            <div id="note-buttons">
                                
                                <button id="note-button-delete"><i class="fa-solid fa-trash"></i></button>
                            </div>
                        </div>
                        <div style="border-bottom:1px dashed #aaaaaa;">
                            <span id="note-last-update">Ultima modificare - ' . $actual_note['last_edit_date'] . '</span>
                        </div>
                        <div id="note-content" contenteditable="true">
                            ' . $actual_note['content'] . '
                        </div>';
                        }
                        else{
                            header("Location: /");
                        }
                        
                    ?>
                </div>

                <!-- <div class="note-header">
                    <div style="width:75%">
                        <div id="note-button-feature">
                            ' . $featured_status . '
                        </div>
                        <h2 id="note-title" contenteditable="true">' . $actual_note['title'] . '</h2>
                    </div>
                    
                    <div>
                        <button id="note-button-add-friend">Adauga participanti</button>
                        <button id="note-button-save">Salveaza</button>
                        <button id="note-button-delete"><i class="fa-solid fa-trash"></i></button>
                    </div>
                </div>
                <div>
                    <span>Ultima modificare - ' . $actual_note['last_edit_date'] . '</span>
                </div>
                <div id="note-content" contenteditable="true">
                    ' . $actual_note['content'] . '
                </div> -->
                
            </div>
        </div>


        
    </div>

    
    <?php
        include DOCUMENT_ROOT . '/resources/modules/footer.module.php';
        include DOCUMENT_ROOT . '/resources/modules/beforeBody.module.php';
    ?>
</body>
</html>


