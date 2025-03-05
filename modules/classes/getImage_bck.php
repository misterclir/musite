<?php 
          $Name = $_GET['image'];
          $findCharactersQ = $this->query("SELECT image,".COLUMN_RESETS.",Class FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE Name='". $Name ."'");
          $findCharacters = mssql_fetch_object($findCharactersQ);
          $ResetCount = $findCharacters[''.COLUMN_RESETS.''];
          $Classe = $findCharacters['Class'];
          if($ResetCount >= 0 AND $ResetCount <= 250){
              if(empty($findCharacters->image) == true) $this->photo = "modules/uploads/photos/0.jpg"; else $this->photo = "modules/uploads/photos/".$findCharacters->image;
          }
          if($ResetCount >= 999 || $ResetCount < 200 AND $Classe == 0 AND $Classe == 1 AND $Classe == 2 AND $Classe == 3){
              if(empty($findCharacters->image) == true) $this->photo = "modules/uploads/photos/Mago.jpg"; else $this->photo = "modules/uploads/photos/".$findCharacters->image;
          }
          if($ResetCount == 100 AND $Classe == 16){
              if(empty($findCharacters->image) == true) $this->photo = "modules/uploads/photos/Cavaleiro.jpg"; else $this->photo = "modules/uploads/photos/".$findCharacters->image;
          }         
          if($ResetCount == 100 AND $Classe == 32){
              if(empty($findCharacters->image) == true) $this->photo = "modules/uploads/photos/Guerreira.jpg"; else $this->photo = "modules/uploads/photos/".$findCharacters->image;
          }         
          if($ResetCount == 100 AND $Classe == 48){
              if(empty($findCharacters->image) == true) $this->photo = "modules/uploads/photos/Flamejante.jpg"; else $this->photo = "modules/uploads/photos/".$findCharacters->image;
          }         
          if($ResetCount == 100 AND $Classe == 64){
              if(empty($findCharacters->image) == true) $this->photo = "modules/uploads/photos/Cacador.jpg"; else $this->photo = "modules/uploads/photos/".$findCharacters->image;
          }         
          if($ResetCount == 300 AND $Classe == 1){
              if(empty($findCharacters->image) == true) $this->photo = "modules/uploads/photos/Sabio.jpg"; else $this->photo = "modules/uploads/photos/".$findCharacters->image;
          }         
          if($ResetCount == 300 AND $Classe == 17){
              if(empty($findCharacters->image) == true) $this->photo = "modules/uploads/photos/Furioso.jpg"; else $this->photo = "modules/uploads/photos/".$findCharacters->image;
          }         
          if($ResetCount == 300 AND $Classe == 33){
              if(empty($findCharacters->image) == true) $this->photo = "modules/uploads/photos/Julgamento.jpg"; else $this->photo = "modules/uploads/photos/".$findCharacters->image;
          }         
          if($ResetCount == 300 AND $Classe == 48){
              if(empty($findCharacters->image) == true) $this->photo = "modules/uploads/photos/Nobre.jpg"; else $this->photo = "modules/uploads/photos/".$findCharacters->image;
          }         
          if($ResetCount == 300 AND $Classe == 64){
              if(empty($findCharacters->image) == true) $this->photo = "modules/uploads/photos/Profeta.jpg"; else $this->photo = "modules/uploads/photos/".$findCharacters->image;
          }         
          if($ResetCount == 700 AND $Classe == 3){
              if(empty($findCharacters->image) == true) $this->photo = "modules/uploads/photos/Beginner.jpg"; else $this->photo = "modules/uploads/photos/".$findCharacters->image;
          }         
          if($ResetCount == 700 AND $Classe == 18){
              if(empty($findCharacters->image) == true) $this->photo = "modules/uploads/photos/Warrior.jpg"; else $this->photo = "modules/uploads/photos/".$findCharacters->image;
          }       
          if($ResetCount == 700 AND $Classe == 34){
              if(empty($findCharacters->image) == true) $this->photo = "modules/uploads/photos/Archer.jpg"; else $this->photo = "modules/uploads/photos/".$findCharacters->image;
          }       
          if($ResetCount == 700 AND $Classe == 50){
              if(empty($findCharacters->image) == true) $this->photo = "modules/uploads/photos/Templar.jpg"; else $this->photo = "modules/uploads/photos/".$findCharacters->image;
          }       
          if($ResetCount == 700 AND $Classe == 66){
              if(empty($findCharacters->image) == true) $this->photo = "modules/uploads/photos/Squire.jpg"; else $this->photo = "modules/uploads/photos/".$findCharacters->image;
          }
 ?>