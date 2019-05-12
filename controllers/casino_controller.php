<?php 
session_start();
include("../models/joueur.php");
include("../models/cartes.php");

$listesJoeurs = explode(',', $_SESSION['nbjour']);
if(isset($_POST['new'])|| isset($_POST['new_play'])){
   
foreach($listesJoeurs as $value){
   initialistion($value);
   } 
    
}

if(isset($_POST['carte']))
{
   foreach($listesJoeurs as $value){
   distrubition_carte($cartes,$value);
   }
}
foreach($listesJoeurs as $value){
   if($_SESSION[$value]["cartes"]==""){
      $carte=array_rand($cartes);
      if ($_SESSION["croupier"]["cartes"]==null) {
         $_SESSION["croupier"]["cartes"][]=$carte;
         $_SESSION["croupier"]["point"]+=$cartes[$carte];
      }
      
      $carte=array_rand($cartes);
      $_SESSION[$value]["cartes"][]=$carte;
      $_SESSION[$value]["point"]+=$cartes[$carte];
   }
}

if(isset($_POST["reste"])){
   while($_SESSION["croupier"]["point"]<17){
      $carte=array_rand($cartes);
      $_SESSION["croupier"]["cartes"][]=$carte;
      if($carte=='as'){
         $_SESSION["croupier"]["point"]=test_as($_SESSION["croupier"]["point"]);
      }else{
         $_SESSION["croupier"]["point"]+=$cartes[$carte];
      }
     
      
   }
}
if(isset($_POST['ajouter'])){
  $new=$_POST['new_jouer'];
}
ajourteJoueur($new);
if(isset($_POST['new_part'])){
   $_SESSION['nbjour']="";
 }
 if(isset($_POST['quitte'])){ 
   foreach($listesJoeurs as $value){
      initialistion($value);
      } 
      unset($_SESSION['nbjour']);


 }