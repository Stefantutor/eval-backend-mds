<?php
//URL du tuto formulaire : https://www.notre-planete.info/PHP/cours_8.php?fbclid=IwAR3f9UAdiYAVxFGygAcjdzjt0_A-VxAw6iljDHd5Btb2lXrfxaJTyQQ_1OE
    echo 'Votre nom est : '.$_GET['slbnom'].'<br>'; // On récupère la donnée mise dans "slbnom" et on l'écho
    echo 'Votre ville est : '.$_GET['slbville'].'<br>';
    echo 'Votre téléphone est : '.$_GET['slbtel'].'<br>';
    echo 'Votre adresse e-mail est : '.$_GET['slbmail'].'<br>';
    echo 'Votre type de projet est : '.$_GET['slbproj'].'<br>';
   // https://stackoverflow.com/questions/18131044/echo-checked-if-checkbox-is-checked
    echo "Options : "; //Ayant créer un tableau juste avant dans l'html, je lui fais un for qui passe dans chaque case checké et l'affiche si elle l'est
    foreach($_GET['slbchoice'] as $choice){
        echo '<li>'.$choice.'</li>';
    }

    if ($choice=='Formulaire de contact avancé')
        echo "30€";
    elseif ($choice=='Adaptations mobile spécifiques')
        echo "20€";
    elseif ($choice=='Design personnalisé')
        echo "10€";
    elseif ($choice=='Formulaire de contact avancé' && 'Adaptations mobile spécifiques')
        echo "50€";
    elseif ($choice=='Formulaire de contact avancé' && 'Design personnalisé')
        echo "40€";
    elseif ($choice=='Adaptations mobile spécifiques' && 'Design personnalisé')
        echo "30€";
    elseif ($choice=='Adaptations mobile spécifiques' && 'Design personnalisé' && 'Formulaire de contact avancé')
        echo "54€ (réduction de 10% comprise)"; //Ne prends pas en compte quand il y en a plusieurs cochés, je ne sais pas pourquoi https://stackoverflow.com/questions/4554758/how-to-read-if-a-checkbox-is-checked-in-php

   /* $choice = array(1,2,3);
for($i=0;$i<sizeof($choice);$i++){

echo"<input type='checkbox' name='slbchoice[]' value='".$choice[$i]."'>".$choice[$i]."<br>";
}*/
    
?>