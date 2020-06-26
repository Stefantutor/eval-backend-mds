<?php
//URL du tuto formulaire : https://www.notre-planete.info/PHP/cours_8.php?fbclid=IwAR3f9UAdiYAVxFGygAcjdzjt0_A-VxAw6iljDHd5Btb2lXrfxaJTyQQ_1OE
    echo 'Votre nom est : '.$_GET['slbnom'].'<br>'; // On récupère la donnée mise dans "slbnom" et on l'écho
    echo 'Votre ville est : '.$_GET['slbville'].'<br>';
    echo 'Votre téléphone est : '.$_GET['slbtel'].'<br>';
    echo 'Votre adresse e-mail est : '.$_GET['slbmail'].'<br>';
    echo 'Votre type de projet est : '.$_GET['slbproj'].'<br>';
    echo 'Votre ville est : '.$_GET['slbchoice'].'<br>';
    
?>