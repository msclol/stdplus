<?php
  session_start(); 
  $_SESSION['id']=1;

?>


<?php

    require 'html/header.html';

    $jeu=['mario','les sims','Zelda','Rayman','Street Fighters'];

    $jeuCount= count($jeu);

    for($i=0; $i <= $jeuCount; $i++)
      {
        echo $jeu[$i].'<br/>';
      }


  
?>