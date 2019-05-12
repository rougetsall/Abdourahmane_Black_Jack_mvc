<?php
/**
 * 
 */

session_start();

function initialistion($joueur)
{
    unset($_SESSION[$joueur]);
    unset($_SESSION["croupier"]);
    unset($_SESSION[$joueur]["point"]);
   
    
}

function distrubition_carte($cartes,$joueur)
{
	
   $carte=array_rand($cartes);
   $_SESSION[$joueur]["cartes"][]=$carte;
   if($carte=="as"){
      $_SESSION[$joueur]["point"]=test_as($_SESSION[$joueur]["point"]);
   }else{
      $_SESSION[$joueur]["point"]+=$cartes[$carte];
   }
   
}

function ajourteJoueur($jouer){
   $_SESSION['nbjour']= $_SESSION['nbjour'].','.$jouer;
}
?>