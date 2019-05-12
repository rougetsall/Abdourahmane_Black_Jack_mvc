
<h1>Black Jack !</h1>
<form method="post" action="/?controller=play">
  
  <input type="submit" name="new_play" value= "Playe" />
</form>

<h2>Liste des joueur</h2>
<?php $listesJoeurs = explode(',', $_SESSION['nbjour']);
foreach($listesJoeurs as $value){
  echo '<h1>'.$value.'</h1>'; } ?> 


<h2>Ajoute un Joeur</h2>
<form method="post" action="">
  <input type="text" name="new_jouer">
  <input type="submit" name="ajouter" value= "ajouter" />
  <input type="submit" name="new_part" value= "new_part" />
</form>
