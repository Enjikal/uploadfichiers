<?php
    //var_dump($_FILES);

    if(!empty($_FILES)) {
        $file_name = $_FILES['fichier']['name'];
        $file_extension = strrchr($file_name, ".");
        
        $file_tmp_name = $_FILES['fichier']['tmp_name'];
        $file_dest = 'upload/'.$_file_name;
        
        $extensions_autorisees = array('.JPG','.jpeg','.png','.gif','.txt','.doc','.pdf');
        echo 'Nom: '.$file_name. '<br/>';

        if(in_array($file_extension, $extensions_autorisees)){
            if(move_uploaded_file($file_tmp_name, $file_dest)) {
                echo 'Fichier envoyé';
            }else{
            echo 'Format du contenu incorrect';
        }
    }else{
        echo 'Les fichiers doivent être au format .JPG, .jpeg, .png, .gif, .txt, .doc, .pdf';
    }
}  
?>

