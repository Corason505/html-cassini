<?php
   $q1=$_POST['figy'];
   $q2=$_POST['karrier'];
   $q3=$_POST['allat'];
   
   $points=$q1+$q2+$q3;
   
   if($points<=4) {
	$result="Szükséged van segítségre";
   }
   else if($points<=6){
   $result="u good but please work";
   }else $result="u good, contact us";
   
   echo file_get_contents("index.html");