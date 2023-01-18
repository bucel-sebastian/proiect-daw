<?php
    $pageTitle = 'Contul meu';
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
                <div style="width:max-content;">
                    <img  style="width:100%;max-width:200px;max-height:200px;border-radius:1000px" src="<?php if($_SESSION['user-data']->image!==null){
                        echo '/resources/assets/user-assets/'.$_SESSION['user-data']->image;}
                        else{
                            echo '/resources/assets/img/default-image.jpg';
                        }?>" alt="" id="change-image">
                        <input type="file" name="new-image" id="new-image" hidden>
                    <h2 style="text-align:center;"><?php echo $_SESSION['user-data']->username?></h2>
                </div>
                <div>
                    <h3>Schimba parola</h3>
                    
                    <div style="max-width:400px;">
                    <div id="login-error" style="color:#ff5555;display:none"><p style="text-align:center;">Parolele introduse sunt diferite!</p></div>
                    <form action="" id="profile-new-password-form" class="login-register-form">
                
                <div class="input-container-col">
                    <label for="new-password-1">Parola noua</label>
                    <input type="password" name="new-password-1" required>
                </div>
                <div class="input-container-col">
                    <label for="new-password-2">Confirmare parola noua</label>
                    <input type="password" name="new-password-2" required>
                </div>
                <div id="password-success" style="display:none;">
                    <span style="color:#6baa41;">Parola a fost schimbata cu success</spanm>
                </div>
                <div class="button-container">
                    <button type="submit">Trimite</button>
                </div>
                
                
            </form>
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


