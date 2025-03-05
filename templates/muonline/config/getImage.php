<?php 
          $img = trim($findImage->Image);
          if($ResetCount >= 0 AND $ResetCount <= 250){
              if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "0.jpg";
              echo('<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />');
          }
          elseif($ResetCount >= 999 || $ResetCount < 999 AND $Classe == 0 AND $Classe == 1 AND $Classe == 2 AND $Classe == 3){
              if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Mago.jpg";
              echo('<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />');
          }
          elseif($ResetCount >= 999 || $ResetCount < 200 AND $Classe == 16 AND $Classe == 17 AND $Classe == 18 AND $Classe == 19){
              if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Cavaleiro.jpg";
              echo('<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />');
          }         
          elseif($ResetCount >= 999 || $ResetCount < 200 AND $Classe == 32 AND $Classe == 33 AND $Classe == 34 AND $Classe == 35){
              if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Guerreira.jpg";
              echo('<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />');
          }         
          elseif($ResetCount >= 999 || $ResetCount < 200 AND $Classe == 48 AND $Classe == 50 AND $Classe == 51){
              if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Flamejante.jpg";
              echo('<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />');
          }         
          elseif($ResetCount >= 999 || $ResetCount < 200 AND $Classe == 64 AND $Classe == 66 AND $Classe == 67){
              if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Cacador.jpg";
              echo('<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />');
          }         
          elseif($ResetCount >= 999 || $ResetCount < 200 AND $Classe == 80 AND $Classe == 81 AND $Classe == 82 AND $Classe == 83){
              if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Sabio.jpg";
              echo('<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />');
          }         
          elseif($ResetCount >= 999 || $ResetCount < 200 AND $Classe == 96 AND $Classe == 97 AND $Classe == 98){
              if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Furioso.jpg";
              echo('<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />');
          }         
          elseif($ResetCount >= 999 || $ResetCount < 200 AND $Classe == 112 AND $Classe == 114 AND $Classe == 115){
              if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Julgamento.jpg";
              echo('<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />');
          }         
          elseif($ResetCount >= 999 || $ResetCount < 200 AND $Classe == 48){
              if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Nobre.jpg";
              echo('<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />');
          }         
          elseif($ResetCount >= 999 || $ResetCount < 700 AND $Classe == 64){
              if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Profeta.jpg";
              echo('<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />');
          }         
          elseif($ResetCount >= 999 AND $Classe == 3){
              if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Beginner.jpg";
              echo('<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />');
          }         
          elseif($ResetCount >= 999 AND $Classe == 18){
              if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Warrior.jpg";
              echo('<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />');
          }       
          elseif($ResetCount >= 999 AND $Classe == 34){
              if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Archer.jpg";
              echo('<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />');
          }       
          elseif($ResetCount >= 999 AND $Classe == 50){
              if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Templar.jpg";
              echo('<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />');
          }       
          elseif($ResetCount >= 999 AND $Classe == 66){
              if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Squire.jpg";
              echo('<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />');
          }
		  else{
              if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "0.jpg";
              echo('<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />');
          }
 ?>