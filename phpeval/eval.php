<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eval php</title>
</head>
<body>

<form name="formulaire" method="get" action="traitement.php">
Nom du prospect<input type="text" name="slbnom"/><br>
Ville<input type="text" name="slbville"/><br>
Téléphone<input type="text" name="slbtel"/><br>
Mail<input type="text" name="slbmail"/><br>
<label for="slbproj">Type de projet</label>
<select name="slbproj" >
  <option value="Wordpress">Wordpress</option>
  <option value="Vue.js">Vue.js</option>
</select><br>
<label for="slbchoice">Options du projet : </label><br>
<INPUT type="checkbox" name="slbchoice[]" value="Formulaire de contact avancé"> Formulaire de contact avancé<br>
<INPUT type="checkbox" name="slbchoice[]" value="Adaptations mobile spécifiques"> Adaptations mobile spécifiques<br>
<INPUT type="checkbox" name="slbchoice[]" value="Design personnalisé"> Design personnalisé<br>
<br>

<input type="submit" name="slbvalider" value="send"/>
</form>
    

</body>
</html>