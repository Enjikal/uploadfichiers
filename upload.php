<?php
    //var_dump($_FILES);

    if(!empty($_FILES)) {
        $file_name = $_FILES['fichier']['name'];
        $file_extension = strrchr($file_name, ".");
        
        $extensions_autorisees = array('.JPG','.jpeg','.png','.gif','.txt','.doc','.pdf');
        echo 'Nom: '.$file_name. '<br/>';

        if(in_array($file_extension, $extensions_autorisees)){

        }else{
            echo 'Format du contenu incorrect';
        }
    }
?>

