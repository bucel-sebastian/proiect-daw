<?php
    $pageTitle = 'Notita noua';
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
            <div>
                <div id="new-note" hidden>new note</div>
                    <div class="note-header">
                        <div style="width:75%;display: flex;align-content: center;align-items: center;justify-content: flex-start;flex-wrap: nowrap;flex-direction: row;">
                                <div id="note-button-feature">
                            <i class="fa-solid fa-star" id="note-button-feature-active" style="display:none;"></i>
                                <i class="fa-regular fa-star" id="note-button-feature-inactive" style="display:block;"></i>
                        </div>
                        <div style="width:100%">
                            <label>Denumire nota</label>
                            <h2 id="note-title" style="border:1px solid #fafafa;border-radius:5px" contenteditable="true" placeholder="Denumire notita"></h2>
                        </div>
                        
                    </div>
                    
                    <div id="note-buttons">

                        <button id="note-button-save">Salveaza</button>
                        <button id="note-button-delete"><i class="fa-solid fa-trash"></i></button>
                    </div>
                </div>
                <label>Continut nota</label>
                <div id="note-content" style="border:1px solid #fafafa;border-radius:5px" contenteditable="true">
                    
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


