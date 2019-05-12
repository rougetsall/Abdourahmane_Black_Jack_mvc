<div 
>
<?php 
 if (strlen($_SESSION['nbjour'])>=2) {
   # code...
 
  $listesJoeurs = explode(',', $_SESSION['nbjour']);
   
  foreach($listesJoeurs as $values){
  echo '<h1>'.$values.'</h1>';
   if (strlen($values)>=3) {
    echo 'votre cartes : <br>';
    foreach($_SESSION[$values]["cartes"] as $value){
      echo $value." , ";}
      echo "<br>vos points : ".$_SESSION[$values]['point'];
      if($_SESSION[$values]["point"]>21)
      echo "<br/>".$_SESSION[$values]["point"]." points, tu as perdu !!!!!<br/>";
   }
  
  }
  } ?> 


</div>


<form method="post" action="">
<br>
<h1>le croupier</h1>
<?php
foreach($_SESSION["croupier"]["cartes"] as $value){
  echo $value." , ";
}
echo "<br/>";
echo "point du croupier :".$_SESSION["croupier"]['point'];
echo "<br/>";
if($_SESSION["croupier"]['point']>21){
  echo "<br/>".$_SESSION["croupier"]["point"]." points, le croupier a perdu<br/>";
}


?>
<br>

<input type="submit" name="carte" value= "carte" />
<input type="submit" name="reste" value= "reste" />
<input type="submit" name="new" value= "nouvelle partie" />
</form>
<form method="post" action="/?">
  
<input type="submit" name="quitte" value= "quitte" />
</form>
