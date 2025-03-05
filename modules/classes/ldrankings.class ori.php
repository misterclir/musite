<?php            
$PageRequest = strtolower(basename( $_SERVER['REQUEST_URI'] ));
$PageName = strtolower(basename( __FILE__ ));
if($PageRequest == $PageName) exit("<strong> Erro: N&atilde;o &eacute; permitido acessar o arquivo diretamente. </strong>");

if ( class_exists( "ldRankings" ) == false ) {                                              
    new ldLanguage( str_replace(".class.", ".lang.", basename(__FILE__)), false );
    class ldRankings extends ldMssql { 
		private $returnRanking;
		public function __construct($request = false)
		{
            if($request == true) return $this->commandManager();
			global $ldTpl;
			switch($_GET['type'])
			{
				case 1:
					$this->gerateRankingResets();
					break;
				case 2:
					$this->gerateRankingLevel();
					break;
                case 3:
                    $this->gerateRankingGuilds();
                    break; 
                case 4:
                    $this->gerateRankingPks();
                    break;
                case 5:
                    $this->gerateRankingMasterResets();
                    break;
                case 6:
                    $this->geratePerfilCharacter();
                    break;
                case 7:
                    $this->geratePerfilGuild();
                    break;
                case 8: case 9:
                    $this->gerateRankingGens();
                    break;
                case 10:
                    $this->gerateRankingHeros();
                    break;
                case 11:
                    $this->gerateRankingHour();
                    break;
                case 12:
                    $this->gerateRankingHonra();
                    break;
			}
			$ldTpl->set("ResultRankings", $this->returnRanking);
		}    
        private function geratePerfilCharacter()
        {    
            global $TABLES_CONFIGS, $PANELUSER_MODULE, $RANKING_CONFIGS;
            $this->name = $_GET['name'];     
            $findDetailsQ = $this->query("Select AccountId, image,Class,cLevel,".COLUMN_PK_RANKING." as pkranking,".COLUMN_PK_RANKING_DAY." as pkrankingday,".COLUMN_PK_RANKING_WEEK." as pkrankingwek,".COLUMN_PK_RANKING_MONTH." as pkrankingmon,CtlCode,".COLUMN_RESETS." as resets,".COLUMN_RESETS_DAY." as resetsday,".COLUMN_RESETS_WEEK." as resetswek,".COLUMN_RESETS_MONTH." as resetsmon,".COLUMN_MASTER_RESETS." as mresets,".COLUMN_MASTER_RESETS_DAY." as mresetsday,".COLUMN_MASTER_RESETS_WEEK." as mresetswek,".COLUMN_MASTER_RESETS_MONTH." as mresetsmon,".COLUMN_HERO_RANKING." as hero,".COLUMN_HERO_RANKING_DAY." as heroday,".COLUMN_HERO_RANKING_WEEK." as herowek,".COLUMN_HERO_RANKING_MONTH." as heromon,".COLUMN_HOUR_RANKING." as hour,".COLUMN_HOUR_RANKING_DAY." as hourday,".COLUMN_HOUR_RANKING_WEEK." as hourwek,".COLUMN_HOUR_RANKING_MONTH." as hourmon, LevelUpPoint, MapNumber, MapPosX, MapPosY, Money, Strength, Dexterity, Vitality, Energy, Leadership from ".DATABASE_CHARACTERS.".dbo.Character where Name='{$this->name}'");
            if(mssql_num_rows($findDetailsQ) > 0)
            {
                $findDetails = mssql_fetch_object($findDetailsQ);
                if(empty($findDetails->image) == true) $this->photo = "modules/uploads/photos/nophoto.jpg"; else $this->photo = "modules/uploads/photos/".$findDetails->image;
                
                $checkMemberVipQ = $this->query("SELECT ".$TABLES_CONFIGS['WEBVIPS']['columnType']." as type FROM ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']."='".$findDetails->AccountId."'");
                $checkMemberVip = mssql_fetch_object($checkMemberVipQ);
                
                $findEventosQ = $this->query("SELECT quiz,mtmt,pgpg,sobre,escesc,tradew,bbb,pegagm,ocorajoso,oveloz FROM Character WHERE Name='{$this->name}'");
                $findEventos = mssql_fetch_object($findEventosQ);
                
                $findMedalQ = $this->query("SELECT medal_mreset_ouro,medal_reset_ouro,medal_pk_ouro,medal_hero_ouro,medal_hora_ouro,medal_total_ouro,medal_mreset_prata,medal_reset_prata,medal_pk_prata,medal_hero_prata,medal_hora_prata,medal_total_prata,medal_mreset_bronze,medal_reset_bronze,medal_pk_bronze,medal_hero_bronze,medal_hora_bronze,medal_total_bronze FROM webRankingMedalAndTrofeu WHERE Name='{$this->name}'");
                $findMedal = mssql_fetch_object($findMedalQ);
                
                $findTrofeuQ = $this->query("SELECT trofeu_mreset_ouro,trofeu_reset_ouro,trofeu_pk_ouro,trofeu_hero_ouro,trofeu_hora_ouro,trofeu_total_ouro,trofeu_mreset_prata,trofeu_reset_prata,trofeu_pk_prata,trofeu_hero_prata,trofeu_hora_prata,trofeu_total_prata,trofeu_mreset_bronze,trofeu_reset_bronze,trofeu_pk_bronze,trofeu_hero_bronze,trofeu_hora_bronze,trofeu_total_bronze FROM webRankingMedalAndTrofeu WHERE Name='{$this->name}'");
                $findTrofeu = mssql_fetch_object($findTrofeuQ);

                $findGuildMemberQ = $this->query("SELECT G_Name FROM ".DATABASE_CHARACTERS.".dbo.GuildMember WHERE Name='{$this->name}'");
                $findGuildMember = mssql_fetch_object($findGuildMemberQ);

                $findGuildQ = $this->query("SELECT G_Mark FROM ".DATABASE_CHARACTERS.".dbo.Guild WHERE G_Name='".$findGuildMember->G_Name."'");
                $findGuild = mssql_fetch_object($findGuildQ);
                
                foreach($PANELUSER_MODULE['MOVE_CHARACTER']['MAPS'] as $Map)
                    if($Map[0] == $findDetails->MapNumber) $findDetails->MapName = $Map[1];

                if($findDetails->Class == 0 || $findDetails->Class == 1 || $findDetails->Class == 2){
                    $imagem_class = "SM";
                }
                elseif($findDetails->Class == 16 || $findDetails->Class == 17 || $findDetails->Class == 18){
                    $imagem_class = "BK";
                }
                elseif($findDetails->Class == 32 || $findDetails->Class == 33 || $findDetails->Class == 34){
                    $imagem_class = "ME";
                }
                elseif($findDetails->Class == 48 || $findDetails->Class == 50){
                    $imagem_class = "MG";
                }
                elseif($findDetails->Class == 64 || $findDetails->Class == 66){
                    $imagem_class = "BK";
                }

                $ResetCount = $findDetails->resets;
                $Name = $this->name;
                $Classe = $findDetails->Class;

                  if($ResetCount >= 0 AND $ResetCount <= 99){
                      if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "0.jpg";
                      $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
                  }
                  elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 0 AND $Classe == 1 AND $Classe == 2){
                      if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Mago.jpg";
                      $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
                  }
                  elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 16 AND $Classe == 17 AND $Classe == 18){
                      if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Cavaleiro.jpg";
                      $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
                  }         
                  elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 32 AND $Classe == 33 AND $Classe == 34){
                      if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Guerreira.jpg";
                      $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
                  }         
                  elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 48){
                      if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Flamejante.jpg";
                      $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
                  }         
                  elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 64){
                      if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Cacador.jpg";
                      $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
                  }         
                  elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 1){
                      if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Sabio.jpg";
                      $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
                  }         
                  elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 17){
                      if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Furioso.jpg";
                      $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
                  }         
                  elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 33){
                      if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Julgamento.jpg";
                      $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
                  }         
                  elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 48){
                      if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Nobre.jpg";
                      $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
                  }         
                  elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 64){
                      if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Profeta.jpg";
                      $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
                  }         
                  elseif($ResetCount >= 700 AND $Classe == 3){
                      if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Beginner.jpg";
                      $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
                  }         
                  elseif($ResetCount >= 700 AND $Classe == 18){
                      if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Warrior.jpg";
                      $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
                  }       
                  elseif($ResetCount >= 700 AND $Classe == 34){
                      if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Archer.jpg";
                      $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
                  }       
                  elseif($ResetCount >= 700 AND $Classe == 50){
                      if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Templar.jpg";
                      $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
                  }       
                  elseif($ResetCount >= 700 AND $Classe == 66){
                      if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Squire.jpg";
                      $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
                  }

                  if($ResetCount <= 50){
                        $Honra = 'Noob';
                  }
                  elseif($ResetCount <= 100){
                      $Honra = 'Trainee';
                  }
                  elseif($ResetCount <= 150){
                      $Honra = 'Hunter';
                  }
                  elseif($ResetCount <= 200){
                      $Honra = 'Ranger I';
                  }
                  elseif($ResetCount <= 250){
                      $Honra = 'Ranger II';
                  }
                  elseif($ResetCount <= 300){
                      $Honra = 'Ranger III';
                  }
                  elseif($ResetCount <= 350){
                      $Honra = 'Knight I';
                  }
                  elseif($ResetCount <= 400){
                      $Honra = 'Knight II';
                  }
                  elseif($ResetCount <= 450){
                      $Honra = 'Knight III';
                  }
                  elseif($ResetCount <= 500){
                      $Honra = 'Warrior I';
                  }
                  elseif($ResetCount <= 550){
                      $Honra = 'Warrior II';
                  }
                  elseif($ResetCount <= 600){
                      $Honra = 'Warrior III';
                  }
                  elseif($ResetCount <= 650){
                      $Honra = 'Templar I';
                  }
                  elseif($ResetCount <= 700){
                      $Honra = 'Templar II';
                  }
                  elseif($ResetCount <= 750){
                      $Honra = 'Templar III';
                  }
                  elseif($ResetCount <= 800){
                      $Honra = 'General I';
                  }
                  elseif($ResetCount <= 850){
                      $Honra = 'General II';
                  }
                  elseif($ResetCount <= 900){
                      $Honra = 'General III';
                  }
                  elseif($ResetCount <= 950){
                      $Honra = 'Specialist I';
                  }
                  elseif($ResetCount <= 1000){
                      $Honra = 'Specialist II';
                  }
                  elseif($ResetCount > 1000){
                      $Honra = 'Specialist III';
                  }
                
                if ($checkMemberVip->type > 0) {
                    $show_vip = "<img src=\"templates/".TEMPLATE_DIR."/img/profile/vip.png\" style=\"pointer-events: none;\">";
                }

                $tmpLogo = urlencode(bin2hex($findGuild->G_Mark)); 

                $this->returnRanking .= "<link href=\"templates/".TEMPLATE_DIR."/css/profile.css?1\" media=\"all\" rel=\"stylesheet\" type=\"text/css\" />

                    <img src=\"templates/".TEMPLATE_DIR."/img/profile/classes/".$imagem_class.".jpg\" style=\"pointer-events: none; border:none; margin-left:-10px; margin-top:28px;\">
                    
                    <img src=\"templates/".TEMPLATE_DIR."/img/profile/middle.jpg\" style=\"pointer-events: none; border:none; margin-left:-5px;\">
                    
                    <div id=\"qvip\">
                        ".$show_vip."
                    </div>                  
                    <div id=\"qonoff\">   
                        <img src=\"templates/".TEMPLATE_DIR."/img/profile/". ((int) ldPanelUser::checkOnlineAccount($findDetails->AccountId) == 1 ? "on" : "off") .".png\" style=\"pointer-events: none;\">
                    </div>
                    
              
                                        
                    <div id=\"qfback\">           
                        <div id=\"femperor\">".$imagem."</div>
                    </div>

                    <div id=\"qemperor\">
                        <div id=\"nemperor\"><span>{$this->name}</span></div>
                        <div id=\"breakline\"></div>
                        <div id=\"remperor\"></div>
                        <div id=\"npemperor\"><span>".$Honra."</span></div>
                        <div id=\"ppemperor\"></div>
                        <div id=\"breakline\"></div>
                        <div id=\"eemperor\"><span>{$findDetails->resets}</span></div>   
                    </div>

                    <div id=\"qfpback\">          
                        <div id=\"fpemperor\"><img src=\"templates/".TEMPLATE_DIR."/img/profile/honra/".$Honra.".png\" style=\"pointer-events: none;\"></div>
                    </div>
                    
                                  
                    <div id=\"tranking\">
                        <a href=\"javascript:void(0);\" id=\"diario\" name=\"changerank\" style=\"color:#EAB45F;\">Di&aacute;rio</a>
                        <a href=\"javascript:void(0);\" id=\"semanal\" name=\"changerank\" >Semanal</a>
                        <a href=\"javascript:void(0);\" id=\"mensal\" name=\"changerank\" >Mensal</a>
                        <a href=\"javascript:void(0);\" id=\"total\" name=\"changerank\" >Total</a>
                        
                        <div id=\"breakline\"></div>
                     
                        <div class=\"qranking\" id=\"qdiario\">
                            <table width=\"263\">
                                <tbody><tr height=\"25\">
                                    <td width=\"145\"><strong>M. Resets:</strong> {$findDetails->mresetsday}</td> 
                                    <td><strong>Resets:</strong> {$findDetails->resetsday}</td>
                                </tr>
                                <tr height=\"25\">
                                    <td width=\"145\"><strong>Online:</strong> {$findDetails->hourday}</td> 
                                    <td><strong>Kills:</strong> <span style=\"color:#ff7070;\">{$findDetails->pkrankingday}</span>/<span style=\"color:#45c5ff;\">{$findDetails->heroday}</span></td>
                                </tr>
                            </tbody></table>
                        </div>
                         
                        <div class=\"qranking\" id=\"qsemanal\" style=\"display:none;\">
                            <table width=\"263\">
                                <tbody><tr height=\"25\">
                                    <td width=\"145\"><strong>M. Resets:</strong> {$findDetails->mresetswek}</td> 
                                    <td><strong>Resets:</strong> {$findDetails->resetswek}</td>
                                </tr>
                                <tr height=\"25\">
                                    <td width=\"145\"><strong>Online:</strong> {$findDetails->hourwek}</td> 
                                    <td><strong>Kills:</strong> <span style=\"color:#ff7070;\">{$findDetails->pkrankingwek}</span>/<span style=\"color:#45c5ff;\">{$findDetails->hourwek}</span></td>
                                </tr>
                            </tbody></table>
                        </div>
                         
                        <div class=\"qranking\" id=\"qmensal\" style=\"display:none;\">
                            <table width=\"263\">
                                <tbody><tr height=\"25\">
                                    <td width=\"145\"><strong>M. Resets:</strong> {$findDetails->mresetsmon}</td> 
                                    <td><strong>Resets:</strong> {$findDetails->resetsmon}</td>
                                </tr>
                                <tr height=\"25\">
                                    <td width=\"145\"><strong>Online:</strong> {$findDetails->hourmon}</td> 
                                    <td><strong>Kills:</strong> <span style=\"color:#ff7070;\">{$findDetails->pkrankingmon}</span>/<span style=\"color:#45c5ff;\">{$findDetails->heromon}</span></td>
                                </tr>
                            </tbody></table>
                        </div>
                         
                        <div class=\"qranking\" id=\"qtotal\" style=\"display:none;\">
                            <table width=\"263\">
                                <tbody><tr height=\"25\">
                                    <td width=\"145\"><strong>M. Resets:</strong> {$findDetails->mresets}</td> 
                                    <td><strong>Resets:</strong> {$findDetails->resets}</td>
                                </tr>
                                <tr height=\"25\">
                                    <td width=\"145\"><strong>Online:</strong> {$findDetails->hour}</td> 
                                    <td><strong>Kills:</strong> <span style=\"color:#ff7070;\">{$findDetails->pkranking}</span>/<span style=\"color:#45c5ff;\">{$findDetails->hero}</span></td>
                                </tr>
                            </tbody></table>
                        </div>
                    </div>

                    <div id=\"qguild\">                   
                        <div id=\"nguild\"><span>". ( empty($findGuildMember->G_Name) == true ? RANKING_GUILD_EMPTY : "<a href=\"?page=rankings&type=7&name={$findGuildMember->G_Name}\">".$findGuildMember->G_Name."</a>" ) ."</span></div>
                        <div id=\"lguild\">
                        ". ( empty($findGuildMember->G_Name) == true ? "" : "<img width=\"50\" height=\"50\" src=\"modules/classes/logoGuildDecode.php?decode={$tmpLogo}\">" ) ."</div>
                    </div>
                    
                    <div class=\"qmedal\" id=\"qmedal\">
                        <table width=\"366\">
                            <tbody><tr height=\"34\">
                                <td>{$findMedal->medal_mreset_ouro}</td> 
                                <td>{$findMedal->medal_reset_ouro}</td>
                                <td>{$findMedal->medal_hora_ouro}</td>
                                <td>{$findMedal->medal_pk_ouro}</td> 
                                <td>{$findMedal->medal_hero_ouro}</td>
                                <td style=\"color:#b9945a;\">{$findMedal->medal_total_ouro}</td>
                            </tr>
                            <tr height=\"34\">
                                <td>{$findMedal->medal_mreset_prata}</td> 
                                <td>{$findMedal->medal_reset_prata}</td>
                                <td>{$findMedal->medal_hora_prata}</td>
                                <td>{$findMedal->medal_pk_prata}</td> 
                                <td>{$findMedal->medal_hero_prata}</td>
                                <td style=\"color:#b9945a;\">{$findMedal->medal_total_prata}</td>
                            </tr>
                            <tr height=\"34\">
                                <td>{$findMedal->medal_mreset_bronze}</td> 
                                <td>{$findMedal->medal_reset_bronze}</td>
                                <td>{$findMedal->medal_hora_bronze}</td>
                                <td>{$findMedal->medal_pk_bronze}</td> 
                                <td>{$findMedal->medal_hero_bronze}</td>
                                <td style=\"color:#b9945a;\">{$findMedal->medal_total_bronze}</td>
                            </tr>
                        </tbody></table>
                    </div>
                    
                    
                    <div class=\"qtroph\" id=\"qtroph\">
                        <table width=\"366\">
                            <tbody><tr height=\"34\">
                                <td>{$findTrofeu->trofeu_mreset_ouro}</td> 
                                <td>{$findTrofeu->trofeu_reset_ouro}</td>
                                <td>{$findTrofeu->trofeu_hora_ouro}</td>
                                <td>{$findTrofeu->trofeu_pk_ouro}</td> 
                                <td>{$findTrofeu->trofeu_hero_ouro}</td>
                                <td style=\"color:#b9945a;\">{$findTrofeu->trofeu_total_ouro}</td>
                            </tr>
                            <tr height=\"34\">
                                <td>{$findTrofeu->trofeu_mreset_prata}</td> 
                                <td>{$findTrofeu->trofeu_reset_prata}</td>
                                <td>{$findTrofeu->trofeu_hora_prata}</td>
                                <td>{$findTrofeu->trofeu_pk_prata}</td> 
                                <td>{$findTrofeu->trofeu_hero_prata}</td>
                                <td style=\"color:#b9945a;\">{$findTrofeu->trofeu_total_prata}</td>
                            </tr>
                            <tr height=\"34\">
                                <td>{$findTrofeu->trofeu_mreset_bronze}</td> 
                                <td>{$findTrofeu->trofeu_reset_bronze}</td>
                                <td>{$findTrofeu->trofeu_hora_bronze}</td>
                                <td>{$findTrofeu->trofeu_pk_bronze}</td> 
                                <td>{$findTrofeu->trofeu_hero_bronze}</td>
                                <td style=\"color:#b9945a;\">{$findTrofeu->trofeu_total_bronze}</td>
                            </tr>
                        </tbody></table>
                    </div>
                    
                    <div style=\"margin-top:5; text-align:center;\">
                    
                        <img src=\"templates/".TEMPLATE_DIR."/img/profile/evento_titulo.png\" style=\"pointer-events: none;\">
                    
                    </div>
                    
                    <div style=\"padding-left:20px; padding-right:20px;\">
                    
                        <div id=\"vevents\" style=\"display:inline-block; margin-bottom:5px; border:none;\">
                            <div id=\"ename\"><span>QUIZ</span></div>
                            <div id=\"epoints\"><span>{$findEventos->quiz}</span></div>
                        </div>
                        
                        <div id=\"vevents\" style=\"display:inline-block; margin-bottom:5px; border:none;\">
                            <div id=\"ename\"><span>MATA-MATA</span></div>
                            <div id=\"epoints\"><span>{$findEventos->mtmt}</span></div>
                        </div>
                        
                        <div id=\"vevents\" style=\"display:inline-block; margin-bottom:5px; border:none;\">
                            <div id=\"ename\"><span>PEGA-PEGA</span></div>
                            <div id=\"epoints\"><span>{$findEventos->pgpg}</span></div>
                        </div>
                        
                        <div id=\"vevents\" style=\"display:inline-block; margin-bottom:5px; border:none;\">
                            <div id=\"ename\"><span>SOBREVIVENCIA</span></div>
                            <div id=\"epoints\"><span>{$findEventos->sobre}</span></div>
                        </div>
                        
                        <div id=\"vevents\" style=\"display:inline-block; margin-bottom:5px; border:none;\">
                            <div id=\"ename\"><span>PEGA-PEGA</span></div>
                            <div id=\"epoints\"><span>{$findEventos->pgpg}</span></div>
                        </div>
                        
                        <div id=\"vevents\" style=\"display:inline-block; margin-bottom:5px; border:none;\">
                            <div id=\"ename\"><span>ESCONDE-ESCONDE</span></div>
                            <div id=\"epoints\"><span>{$findEventos->escesc}</span></div>
                        </div>
                        
                        <div id=\"vevents\" style=\"display:inline-block; margin-bottom:5px; border:none;\">
                            <div id=\"ename\"><span>TRADE WINS</span></div>
                            <div id=\"epoints\"><span>{$findEventos->tradew}</span></div>
                        </div>
                        
                        <div id=\"vevents\" style=\"display:inline-block; margin-bottom:5px; border:none;\">
                            <div id=\"ename\"><span>BBB</span></div>
                            <div id=\"epoints\"><span>{$findEventos->bbb}</span></div>
                        </div>
                        
                        <div id=\"vevents\" style=\"display:inline-block; margin-bottom:5px; border:none;\">
                            <div id=\"ename\"><span>PEGA GM</span></div>
                            <div id=\"epoints\"><span>{$findEventos->pegagm}</span></div>
                        </div>
                        
                        <div id=\"vevents\" style=\"display:inline-block; margin-bottom:5px; border:none;\">
                            <div id=\"ename\"><span>O CORAJOSO</span></div>
                            <div id=\"epoints\"><span>{$findEventos->ocorajoso}</span></div>
                        </div>
                        
                        <div id=\"vevents\" style=\"display:inline-block; margin-bottom:5px; border:none;\">
                            <div id=\"ename\"><span>O VELOZ</span></div>
                            <div id=\"epoints\"><span>{$findEventos->oveloz}</span></div>
                        </div>
                    </div>
                                        
                    <script>
                    $(document).ready(function() {
                        $(\"a[name=changerank]\").click(function() {
                            $(\".qranking\").hide();
                            $(\"a[name=changerank]\").css(\"color\", \"#d1c2a9\");
                            $(this).css(\"color\", \"#EAB45F\");
                            $(\"#q\"+$(this).attr('id')+\"\").show();       
                        });
                    });
                    </script>";
            }
            else
            {   
                $this->returnRanking .= "<h1>Resultado de {$this->name}</h1>
                                        <div class='quadros'>
                                        <table width='100%' border='0'>
                                        <tr><td>".RANKING_CHARACTER_NOT_FOUND."</td></tr>
                                        </table>
                                        </div>"; 
            }
        }  
        private function geratePerfilGuild()
        {    
            global $TABLES_CONFIGS, $PANELUSER_MODULE;
            $this->name = $_GET['name'];     
            $findDetailsQ = $this->query("SELECT G_Mark,G_Score,G_Master FROM ".DATABASE_CHARACTERS.".dbo.Guild WHERE G_Name='".$this->name."'");
            if(mssql_num_rows($findDetailsQ) > 0)
            {
                $findDetails = mssql_fetch_object($findDetailsQ);
                $tmpLogo = urlencode(bin2hex($findDetails->G_Mark)); 
                
                $countMembers = $this->query("SELECT count(1) as total FROM ".DATABASE_CHARACTERS.".dbo.Guildmember WHERE G_Name='".$this->name."'"); 
                $countMembers = mssql_fetch_object($countMembers);
                
                $findMembersQ = $this->query("SELECT Name, G_Level, G_Status FROM ".DATABASE_CHARACTERS.".dbo.Guildmember WHERE G_Name='".$this->name."'");
                while($findMembers = mssql_fetch_object($findMembersQ))
                {
                    switch( $findMembers->G_Status )
                    {
                        case 32: $pos = "<strong>".RANKING_GUILD_BM."</strong>"; break;   
                        case 64: $pos = "<strong>".RANKING_GUILD_ASSISTANT."</strong>"; break;   
                        case 128: $pos = "<strong>".RANKING_GUILD_GM."</strong>"; break;   
                        default: if($findMembers->G_Level == 1) $pos = "<strong>".RANKING_GUILD_GM."</strong>"; else $pos = RANKING_GUILD_MEMBBER; break;   
                    }
                    $findCharInfoQ = $this->query("SELECT Class, ".COLUMN_RESETS." as Resets FROM ".DATABASE_CHARACTERS.".dbo.Character WHERE Name='{$findMembers->Name}'");
                    $findCharInfo = mssql_fetch_object($findCharInfoQ);
                    $listTmp .= "<tr><td><a href=\"?page=rankings&type=6&name={$findMembers->Name}\">{$findMembers->Name}</a></td><td>". ldPanelUser::classNameDefine($findCharInfo->Class) ."</td><td>{$findCharInfo->Resets}</td><td>". $pos ."</td></tr>";    
                }
                
                $this->returnRanking .= "<h1>".RANKING_RESULT_OF." {$this->name}</h1>
                                        <div class='quadros'>
                                        <table width='100%' border='0'>
                                        <tr>
                                            <td width='25%' align='center' valign='middle' style='padding-top: 2px;'>
                                            <p><img src='modules/classes/logoGuildDecode.php?decode={$tmpLogo}' alt='' width='100' height='100' style='border: 2px solid #222222;' /></p>
                                            </td>
                                            <td width='75%'> 
                                                <strong>".RANKING_GUILD_SCORE."</strong>: {$findDetails->G_Score} <br /> 
                                                <strong>".RANKING_GUILD_GM."</strong>: <a href=\"?page=rankings&type=6&name={$findDetails->G_Master}\">{$findDetails->G_Master}</a> <br />    
                                                <strong>".RANKING_TOTAL_MEMBERS."</strong>: ". (int)$countMembers->total ." <br />
                                                <table width='100%' border='0' style='text-align: center;'>
                                                    <tr>
                                                        <th width='26%' align='center' style='background: #171512; padding: 1px 5px;'><strong>".RANKING_CHARACTER."</strong></th>
                                                        <th width='25%' align='center' style='background: #171512; padding: 1px 5px;'><strong>".RANKING_CLASS."</strong></th>     
                                                        <th width='23%' align='center' style='background: #171512; padding: 1px 5px;'><strong>".RANKING_RESETS."</strong></th>
                                                        <th width='26%' align='center' style='background: #171512; padding: 1px 5px;'><strong>".RANKING_POSITION."</strong></th>
                                                    </tr>
                                                    {$listTmp}
                                                </table>
                                            </td> 
                                        </tr>
                                        </table>
                                        </div>";
            }
            else
            {   
                $this->returnRanking .= "<h1>".RANKING_RESULT_OF." {$this->name}</h1>
                                        <div class='quadros'>
                                        <table width='100%' border='0'>
                                        <tr><td>".RANKING_GUILD_NOT_FOUND."</td></tr>
                                        </table>
                                        </div>"; 
            }
        }        
        private function gerateRankingResets()
        {
            
            global $TABLES_CONFIGS, $PANELUSER_MODULE;
            if(isset($_GET['top']) == false || empty($_GET['top'])) $top = 10;
            if($_GET['top'] == 10) $ex_top = 10;
            elseif($_GET['top'] == 50) $ex_top = 50;
            elseif($_GET['top'] == 100) $ex_top = 100;
            elseif($_GET['top'] == 200) $ex_top = 200;
            else $ex_top = 10;                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
             $busca_dados_q = $this->query("USE MuOnline
             Select TOP $ex_top AccountID, Name, Class, clevel, ".COLUMN_PK_RANKING.", ".COLUMN_RESETS.", ".COLUMN_RESETS_DAY.", ".COLUMN_RESETS_WEEK.", ".COLUMN_RESETS_MONTH.",image from dbo.Character ". 
                ($_GET['period'] == 0 ? "".COLUMN_RESETS."" : 
                ($_GET['period'] == 1 ? "".COLUMN_RESETS_WEEK."" : 
                ($_GET['period'] == 2 ? "".COLUMN_RESETS_MONTH."" : 
                    "".COLUMN_RESETS.""))) ." order by ". 
                ($_GET['period'] == 0 ? "".COLUMN_RESETS." desc" : 
                    ($_GET['period'] == 1 ? "".COLUMN_RESETS_WEEK." desc, ".COLUMN_RESETS." desc" : 
                        ($_GET['period'] == 2 ? "".COLUMN_RESETS_MONTH." desc, ".COLUMN_RESETS." desc" :
                            ($_GET['period'] == 3 ? "".COLUMN_RESETS_DAY." desc, ".COLUMN_RESETS." desc" : "".COLUMN_RESETS." desc"))))." , cLevel desc");
             if($_GET['period'] == 0){
                $name_period = "REAL";
             }
             elseif($_GET['period'] == 1){
                $name_period = "SEMANAL";
             }
             elseif($_GET['period'] == 2){
                $name_period = "MENSAL";
             }
             elseif($_GET['period'] == 3){
                $name_period = "DIARIO";
             }
             elseif (empty($_GET['period'])) {
                 $name_period = "";
             }
             $this->returnRanking .= "<div id=\"mtoporanking\"><div id=\"mtoponome\"><span>TOP RESETS ".$name_period."</span></div></div>";
             $posicao = 1;
             while($busca_dados = mssql_fetch_array($busca_dados_q)) {
              $checkMemberVipQ = $this->query("SELECT ".$TABLES_CONFIGS['WEBVIPS']['columnType']." as type FROM ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']."='".$busca_dados['AccountID']."'");
              $checkMemberVip = mssql_fetch_object($checkMemberVipQ);
              $ResetCount = $busca_dados[''.COLUMN_RESETS.''];
              $Classe = $busca_dados['Class'];
              $Name = $busca_dados['Name'];
              $img = $busca_dados['image'];
              if($ResetCount >= 0 AND $ResetCount <= 99){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "0.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }
              elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 0 AND $Classe == 1 AND $Classe == 2){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Mago.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }
              elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 16 AND $Classe == 17 AND $Classe == 18){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Cavaleiro.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 32 AND $Classe == 33 AND $Classe == 34){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Guerreira.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 48){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Flamejante.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 64){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Cacador.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 1){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Sabio.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 17){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Furioso.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 33){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Julgamento.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 48){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Nobre.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 64){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Profeta.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 700 AND $Classe == 3){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Beginner.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 700 AND $Classe == 18){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Warrior.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }       
              elseif($ResetCount >= 700 AND $Classe == 34){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Archer.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }       
              elseif($ResetCount >= 700 AND $Classe == 50){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Templar.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }       
              elseif($ResetCount >= 700 AND $Classe == 66){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Squire.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }

              if($ResetCount <= 50){
                    $Honra = 'Noob';
              }
              elseif($ResetCount <= 100){
                  $Honra = 'Trainee';
              }
              elseif($ResetCount <= 150){
                  $Honra = 'Hunter';
              }
              elseif($ResetCount <= 200){
                  $Honra = 'Ranger I';
              }
              elseif($ResetCount <= 250){
                  $Honra = 'Ranger II';
              }
              elseif($ResetCount <= 300){
                  $Honra = 'Ranger III';
              }
              elseif($ResetCount <= 350){
                  $Honra = 'Knight I';
              }
              elseif($ResetCount <= 400){
                  $Honra = 'Knight II';
              }
              elseif($ResetCount <= 450){
                  $Honra = 'Knight III';
              }
              elseif($ResetCount <= 500){
                  $Honra = 'Warrior I';
              }
              elseif($ResetCount <= 550){
                  $Honra = 'Warrior II';
              }
              elseif($ResetCount <= 600){
                  $Honra = 'Warrior III';
              }
              elseif($ResetCount <= 650){
                  $Honra = 'Templar I';
              }
              elseif($ResetCount <= 700){
                  $Honra = 'Templar II';
              }
              elseif($ResetCount <= 750){
                  $Honra = 'Templar III';
              }
              elseif($ResetCount <= 800){
                  $Honra = 'General I';
              }
              elseif($ResetCount <= 850){
                  $Honra = 'General II';
              }
              elseif($ResetCount <= 900){
                  $Honra = 'General III';
              }
              elseif($ResetCount <= 950){
                  $Honra = 'Specialist I';
              }
              elseif($ResetCount <= 1000){
                  $Honra = 'Specialist II';
              }
              elseif($ResetCount > 1000){
                  $Honra = 'Specialist III';
              }
               if($busca_dados[''.COLUMN_PK_RANKING.''] < 0) $pk_class = COLUMN_HERO_RANKING;
               else $pk_class = $busca_dados[''.COLUMN_PK_RANKING.''];
               $this->returnRanking .= "<div id=\"qmembers\">
                      <div id=\"mrank\"><span>".$posicao++."</span></div>
                      <div id=\"mfoto\"><a href=\"?page=rankings&type=6&name={$busca_dados['Name']}\">".$imagem."</a></div>
                      <div id=\"mnome\"><span><a href=\"?page=rankings&type=6&name={$busca_dados['Name']}\">".$busca_dados['Name']."</a></span></div>
                      <div id=\"mpatente\"><img src=\"templates/".TEMPLATE_DIR."/img/profile/honra/".$Honra.".png\" style=\"pointer-events: none;\"></div>
                      <div id=\"mnpatente\"><span>".$Honra."</span></div>
                      <div id=\"mmr\"><span>". $busca_dados[($_GET['period'] == 0 ? "".COLUMN_RESETS."" : ($_GET['period'] == 1 ? "".COLUMN_RESETS_WEEK."" : ($_GET['period'] == 2 ? "".COLUMN_RESETS_MONTH."" : ($_GET['period'] == 2 ? "".COLUMN_RESETS_DAY."" : "".COLUMN_RESETS.""))))] ."</span></div>
                     </div>";
             }
        }        
        private function gerateRankingHonra()
        {
            
            global $TABLES_CONFIGS, $PANELUSER_MODULE;
            if(isset($_GET['top']) == false || empty($_GET['top'])) $top = 10;
            if($_GET['top'] == 10) $ex_top = 10;
            elseif($_GET['top'] == 50) $ex_top = 50;
            elseif($_GET['top'] == 100) $ex_top = 100;
            elseif($_GET['top'] == 200) $ex_top = 200;
            else $ex_top = 10;                                                                                                                                                                                                                                                                                                                                                                                                                                                                  
             $busca_dados_q = $this->query("USE MuOnline
             Select TOP $ex_top AccountID, Name, Class, clevel, ".COLUMN_PK_RANKING.", ".COLUMN_RESETS.", ".COLUMN_RESETS_DAY.", ".COLUMN_RESETS_WEEK.", ".COLUMN_RESETS_MONTH.",image from dbo.Character ". 
                ($_GET['period'] == 0 ? "".COLUMN_RESETS."" : 
                ($_GET['period'] == 1 ? "".COLUMN_RESETS_WEEK."" : 
                ($_GET['period'] == 2 ? "".COLUMN_RESETS_MONTH."" : 
                    "".COLUMN_RESETS.""))) ." order by ". 
                ($_GET['period'] == 0 ? "".COLUMN_RESETS." desc" : 
                    ($_GET['period'] == 1 ? "".COLUMN_RESETS_WEEK." desc, ".COLUMN_RESETS." desc" : 
                        ($_GET['period'] == 2 ? "".COLUMN_RESETS_MONTH." desc, ".COLUMN_RESETS." desc" :
                            ($_GET['period'] == 3 ? "".COLUMN_RESETS_DAY." desc, ".COLUMN_RESETS." desc" : "".COLUMN_RESETS." desc"))))." , cLevel desc");
             if($_GET['period'] == 0){
                $name_period = "REAL";
             }
             elseif($_GET['period'] == 1){
                $name_period = "SEMANAL";
             }
             elseif($_GET['period'] == 2){
                $name_period = "MENSAL";
             }
             elseif($_GET['period'] == 3){
                $name_period = "DIARIO";
             }
             elseif (empty($_GET['period'])) {
                 $name_period = "";
             }
             $this->returnRanking .= "<div id=\"mtoporanking\"><div id=\"mtoponome\"><span>TOP HONRA</span></div></div>";
             $posicao = 1;
             while($busca_dados = mssql_fetch_array($busca_dados_q)) {
              $checkMemberVipQ = $this->query("SELECT ".$TABLES_CONFIGS['WEBVIPS']['columnType']." as type FROM ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']."='".$busca_dados['AccountID']."'");
              $checkMemberVip = mssql_fetch_object($checkMemberVipQ);
              $ResetCount = $busca_dados[''.COLUMN_RESETS.''];
              $Classe = $busca_dados['Class'];
              $Name = $busca_dados['Name'];
              $img = $busca_dados['image'];
              if($ResetCount >= 0 AND $ResetCount <= 99){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "0.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }
              elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 0 AND $Classe == 1 AND $Classe == 2){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Mago.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }
              elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 16 AND $Classe == 17 AND $Classe == 18){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Cavaleiro.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 32 AND $Classe == 33 AND $Classe == 34){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Guerreira.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 48){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Flamejante.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 64){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Cacador.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 1){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Sabio.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 17){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Furioso.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 33){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Julgamento.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 48){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Nobre.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 64){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Profeta.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 700 AND $Classe == 3){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Beginner.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 700 AND $Classe == 18){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Warrior.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }       
              elseif($ResetCount >= 700 AND $Classe == 34){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Archer.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }       
              elseif($ResetCount >= 700 AND $Classe == 50){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Templar.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }       
              elseif($ResetCount >= 700 AND $Classe == 66){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Squire.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }

              if($ResetCount <= 50){
                    $Honra = 'Noob';
              }
              elseif($ResetCount <= 100){
                  $Honra = 'Trainee';
              }
              elseif($ResetCount <= 150){
                  $Honra = 'Hunter';
              }
              elseif($ResetCount <= 200){
                  $Honra = 'Ranger I';
              }
              elseif($ResetCount <= 250){
                  $Honra = 'Ranger II';
              }
              elseif($ResetCount <= 300){
                  $Honra = 'Ranger III';
              }
              elseif($ResetCount <= 350){
                  $Honra = 'Knight I';
              }
              elseif($ResetCount <= 400){
                  $Honra = 'Knight II';
              }
              elseif($ResetCount <= 450){
                  $Honra = 'Knight III';
              }
              elseif($ResetCount <= 500){
                  $Honra = 'Warrior I';
              }
              elseif($ResetCount <= 550){
                  $Honra = 'Warrior II';
              }
              elseif($ResetCount <= 600){
                  $Honra = 'Warrior III';
              }
              elseif($ResetCount <= 650){
                  $Honra = 'Templar I';
              }
              elseif($ResetCount <= 700){
                  $Honra = 'Templar II';
              }
              elseif($ResetCount <= 750){
                  $Honra = 'Templar III';
              }
              elseif($ResetCount <= 800){
                  $Honra = 'General I';
              }
              elseif($ResetCount <= 850){
                  $Honra = 'General II';
              }
              elseif($ResetCount <= 900){
                  $Honra = 'General III';
              }
              elseif($ResetCount <= 950){
                  $Honra = 'Specialist I';
              }
              elseif($ResetCount <= 1000){
                  $Honra = 'Specialist II';
              }
              elseif($ResetCount > 1000){
                  $Honra = 'Specialist III';
              }
               if($busca_dados[''.COLUMN_PK_RANKING.''] < 0) $pk_class = COLUMN_HERO_RANKING;
               else $pk_class = $busca_dados[''.COLUMN_PK_RANKING.''];
               $this->returnRanking .= "<div id=\"qmembers\">
                      <div id=\"mrank\"><span>".$posicao++."</span></div>
                      <div id=\"mfoto\"><a href=\"?page=rankings&type=6&name={$busca_dados['Name']}\">".$imagem."</a></div>
                      <div id=\"mnome\"><span><a href=\"?page=rankings&type=6&name={$busca_dados['Name']}\">".$busca_dados['Name']."</a></span></div>
                      <div id=\"mpatente\"><img src=\"templates/".TEMPLATE_DIR."/img/profile/honra/".$Honra.".png\" style=\"pointer-events: none;\"></div>
                      <div id=\"mnpatente\"><span>".$Honra."</span></div>
                      <div id=\"mmr\"><span>". $busca_dados[($_GET['period'] == 0 ? "".COLUMN_RESETS."" : ($_GET['period'] == 1 ? "".COLUMN_RESETS_WEEK."" : ($_GET['period'] == 2 ? "".COLUMN_RESETS_MONTH."" : ($_GET['period'] == 3 ? "".COLUMN_RESETS_DAY."" : "".COLUMN_RESETS.""))))] ."</span></div>
                     </div>";
             }
        }
        private function gerateRankingMasterResets()
        {
            global $TABLES_CONFIGS, $PANELUSER_MODULE;
            if(isset($_GET['top']) == false || empty($_GET['top'])) $top = 10;
            if($_GET['top'] == 10) $ex_top = 10;
            elseif($_GET['top'] == 50) $ex_top = 50;
            elseif($_GET['top'] == 100) $ex_top = 100;
            elseif($_GET['top'] == 200) $ex_top = 200;
            else $ex_top = 10;
             $busca_dados_q = $this->query("USE MuOnline
             Select TOP $ex_top AccountID, Name, Class, clevel,".COLUMN_RESETS.",".COLUMN_PK_RANKING.", ".COLUMN_MASTER_RESETS.", ".COLUMN_MASTER_RESETS_DAY.", ".COLUMN_MASTER_RESETS_WEEK.", ".COLUMN_MASTER_RESETS_MONTH.",image from dbo.Character ". ($_GET['period'] == 0 ? "".COLUMN_MASTER_RESETS."" : ($_GET['period'] == 1 ? "".COLUMN_MASTER_RESETS_WEEK."" : ($_GET['period'] == 2 ? "".COLUMN_MASTER_RESETS_MONTH."" : "".COLUMN_MASTER_RESETS.""))) ." order by ". ($_GET['period'] == 0 ? "".COLUMN_MASTER_RESETS." desc" : ($_GET['period'] == 1 ? "".COLUMN_MASTER_RESETS_WEEK." desc, ".COLUMN_MASTER_RESETS." desc" : ($_GET['period'] == 2 ? "".COLUMN_MASTER_RESETS_MONTH." desc, ".COLUMN_MASTER_RESETS." desc"  : ($_GET['period'] == 3 ? "".COLUMN_MASTER_RESETS_DAY." desc, ".COLUMN_MASTER_RESETS." desc" : "".COLUMN_MASTER_RESETS." desc"))))." , cLevel desc");
             if($_GET['period'] == 0){
                $name_period = "REAL";
             }
             elseif($_GET['period'] == 1){
                $name_period = "SEMANAL";
             }
             elseif($_GET['period'] == 2){
                $name_period = "MENSAL";
             }
             elseif($_GET['period'] == 3){
                $name_period = "DIARIO";
             }
             elseif (empty($_GET['period'])) {
                 $name_period = "";
             }
             $this->returnRanking .= "<div id=\"mtoporanking\"><div id=\"mtoponome\"><span>TOP MASTER RESETS ".$name_period."</span></div></div>";
             $posicao = 1;
             while($busca_dados = mssql_fetch_array($busca_dados_q)) {
              $checkMemberVipQ = $this->query("SELECT ".$TABLES_CONFIGS['WEBVIPS']['columnType']." as type FROM ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']."='".$busca_dados['AccountID']."'");
              $checkMemberVip = mssql_fetch_object($checkMemberVipQ);
               if($busca_dados[''.COLUMN_PK_RANKING.''] < 0) $pk_class = COLUMN_HERO_RANKING;
               else $pk_class = $busca_dados[''.COLUMN_PK_RANKING.''];
               $ResetCount = $busca_dados[''.COLUMN_RESETS.''];
              $Classe = $busca_dados['Class'];
              $Name = $busca_dados['Name'];
              $img = $busca_dados['image'];
              if($ResetCount >= 0 AND $ResetCount <= 99){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "0.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }
              elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 0 AND $Classe == 1 AND $Classe == 2){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Mago.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }
              elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 16 AND $Classe == 17 AND $Classe == 18){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Cavaleiro.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 32 AND $Classe == 33 AND $Classe == 34){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Guerreira.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 48){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Flamejante.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 64){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Cacador.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 1){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Sabio.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 17){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Furioso.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 33){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Julgamento.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 48){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Nobre.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 64){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Profeta.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 700 AND $Classe == 3){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Beginner.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 700 AND $Classe == 18){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Warrior.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }       
              elseif($ResetCount >= 700 AND $Classe == 34){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Archer.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }       
              elseif($ResetCount >= 700 AND $Classe == 50){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Templar.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }       
              elseif($ResetCount >= 700 AND $Classe == 66){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Squire.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }

              if($ResetCount <= 50){
                    $Honra = 'Noob';
              }
              elseif($ResetCount <= 100){
                  $Honra = 'Trainee';
              }
              elseif($ResetCount <= 150){
                  $Honra = 'Hunter';
              }
              elseif($ResetCount <= 200){
                  $Honra = 'Ranger I';
              }
              elseif($ResetCount <= 250){
                  $Honra = 'Ranger II';
              }
              elseif($ResetCount <= 300){
                  $Honra = 'Ranger III';
              }
              elseif($ResetCount <= 350){
                  $Honra = 'Knight I';
              }
              elseif($ResetCount <= 400){
                  $Honra = 'Knight II';
              }
              elseif($ResetCount <= 450){
                  $Honra = 'Knight III';
              }
              elseif($ResetCount <= 500){
                  $Honra = 'Warrior I';
              }
              elseif($ResetCount <= 550){
                  $Honra = 'Warrior II';
              }
              elseif($ResetCount <= 600){
                  $Honra = 'Warrior III';
              }
              elseif($ResetCount <= 650){
                  $Honra = 'Templar I';
              }
              elseif($ResetCount <= 700){
                  $Honra = 'Templar II';
              }
              elseif($ResetCount <= 750){
                  $Honra = 'Templar III';
              }
              elseif($ResetCount <= 800){
                  $Honra = 'General I';
              }
              elseif($ResetCount <= 850){
                  $Honra = 'General II';
              }
              elseif($ResetCount <= 900){
                  $Honra = 'General III';
              }
              elseif($ResetCount <= 950){
                  $Honra = 'Specialist I';
              }
              elseif($ResetCount <= 1000){
                  $Honra = 'Specialist II';
              }
              elseif($ResetCount > 1000){
                  $Honra = 'Specialist III';
              }
               if($busca_dados[''.COLUMN_PK_RANKING.''] < 0) $pk_class = COLUMN_HERO_RANKING;
               else $pk_class = $busca_dados[''.COLUMN_PK_RANKING.''];
               $this->returnRanking .= "<div id=\"qmembers\">
                      <div id=\"mrank\"><span>".$posicao++."</span></div>
                      <div id=\"mfoto\"><a href=\"?page=rankings&type=6&name={$busca_dados['Name']}\">".$imagem."</a></div>
                      <div id=\"mnome\"><span><a href=\"?page=rankings&type=6&name={$busca_dados['Name']}\">".$busca_dados['Name']."</a></span></div>
                      <div id=\"mpatente\"><img src=\"templates/".TEMPLATE_DIR."/img/profile/honra/".$Honra.".png\" style=\"pointer-events: none;\"></div>
                      <div id=\"mnpatente\"><span>".$Honra."</span></div>
                      <div id=\"mmr\"><span>". $busca_dados[($_GET['period'] == 0 ? "".COLUMN_MASTER_RESETS."" : ($_GET['period'] == 1 ? "".COLUMN_MASTER_RESETS_WEEK."" : ($_GET['period'] == 2 ? "".COLUMN_MASTER_RESETS_MONTH."" : ($_GET['period'] == 3 ? "".COLUMN_MASTER_RESETS_DAY."" : "".COLUMN_MASTER_RESETS.""))))] ."</span></div>
                     </div>";
             }
        }
        private function gerateRankingPks()
        {
            global $TABLES_CONFIGS, $PANELUSER_MODULE;
            if(isset($_GET['top']) == false || empty($_GET['top'])) $top = 10;
            if($_GET['top'] == 10) $ex_top = 10;
            elseif($_GET['top'] == 50) $ex_top = 50;
            elseif($_GET['top'] == 100) $ex_top = 100;
            elseif($_GET['top'] == 200) $ex_top = 200;
            else $ex_top = 10;
             $busca_dados_q = $this->query("USE MuOnline
             Select TOP $ex_top AccountID, Name, Class, clevel,".COLUMN_RESETS.", ".COLUMN_PK_RANKING.",".COLUMN_PK_RANKING_DAY.", ".COLUMN_PK_RANKING_WEEK.", ".COLUMN_PK_RANKING_MONTH.",image from dbo.Character ". ($_GET['period'] == 0 ? "".COLUMN_PK_RANKING."" : ($_GET['period'] == 1 ? "".COLUMN_PK_RANKING_WEEK."" : ($_GET['period'] == 2 ? "".COLUMN_PK_RANKING_MONTH."" : "".COLUMN_PK_RANKING.""))) ." order by ". ($_GET['period'] == 0 ? "".COLUMN_PK_RANKING." desc" : ($_GET['period'] == 1 ? "".COLUMN_PK_RANKING_WEEK." desc, ".COLUMN_PK_RANKING." desc" : ($_GET['period'] == 2 ? "".COLUMN_PK_RANKING_MONTH." desc, ".COLUMN_PK_RANKING." desc"  : ($_GET['period'] == 3 ? "".COLUMN_PK_RANKING_DAY." desc, ".COLUMN_PK_RANKING." desc" : "".COLUMN_PK_RANKING." desc"))))." , cLevel desc");
             if($_GET['period'] == 0){
                $name_period = "REAL";
             }
             elseif($_GET['period'] == 1){
                $name_period = "SEMANAL";
             }
             elseif($_GET['period'] == 2){
                $name_period = "MENSAL";
             }
             elseif($_GET['period'] == 3){
                $name_period = "DIARIO";
             }
             elseif (empty($_GET['period'])) {
                 $name_period = "";
             }
             $this->returnRanking .= "<div id=\"mtoporanking\"><div id=\"mtoponome\"><span>TOP PK ".$name_period."</span></div></div>";
             $posicao = 1;
             while($busca_dados = mssql_fetch_array($busca_dados_q)) {
              $checkMemberVipQ = $this->query("SELECT ".$TABLES_CONFIGS['WEBVIPS']['columnType']." as type FROM ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']."='".$busca_dados['AccountID']."'");
              $checkMemberVip = mssql_fetch_object($checkMemberVipQ);
               if($busca_dados[''.COLUMN_PK_RANKING.''] < 0) $pk_class = COLUMN_HERO_RANKING;
               else $pk_class = $busca_dados[''.COLUMN_PK_RANKING.''];
               $ResetCount = $busca_dados[''.COLUMN_RESETS.''];
              $Classe = $busca_dados['Class'];
              $Name = $busca_dados['Name'];
              $img = $busca_dados['image'];
              if($ResetCount >= 0 AND $ResetCount <= 99){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "0.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }
              elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 0 AND $Classe == 1 AND $Classe == 2){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Mago.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }
              elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 16 AND $Classe == 17 AND $Classe == 18){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Cavaleiro.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 32 AND $Classe == 33 AND $Classe == 34){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Guerreira.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 48){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Flamejante.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 64){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Cacador.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 1){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Sabio.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 17){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Furioso.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 33){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Julgamento.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 48){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Nobre.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 64){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Profeta.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 700 AND $Classe == 3){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Beginner.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 700 AND $Classe == 18){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Warrior.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }       
              elseif($ResetCount >= 700 AND $Classe == 34){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Archer.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }       
              elseif($ResetCount >= 700 AND $Classe == 50){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Templar.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }       
              elseif($ResetCount >= 700 AND $Classe == 66){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Squire.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }

              if($ResetCount <= 50){
                    $Honra = 'Noob';
              }
              elseif($ResetCount <= 100){
                  $Honra = 'Trainee';
              }
              elseif($ResetCount <= 150){
                  $Honra = 'Hunter';
              }
              elseif($ResetCount <= 200){
                  $Honra = 'Ranger I';
              }
              elseif($ResetCount <= 250){
                  $Honra = 'Ranger II';
              }
              elseif($ResetCount <= 300){
                  $Honra = 'Ranger III';
              }
              elseif($ResetCount <= 350){
                  $Honra = 'Knight I';
              }
              elseif($ResetCount <= 400){
                  $Honra = 'Knight II';
              }
              elseif($ResetCount <= 450){
                  $Honra = 'Knight III';
              }
              elseif($ResetCount <= 500){
                  $Honra = 'Warrior I';
              }
              elseif($ResetCount <= 550){
                  $Honra = 'Warrior II';
              }
              elseif($ResetCount <= 600){
                  $Honra = 'Warrior III';
              }
              elseif($ResetCount <= 650){
                  $Honra = 'Templar I';
              }
              elseif($ResetCount <= 700){
                  $Honra = 'Templar II';
              }
              elseif($ResetCount <= 750){
                  $Honra = 'Templar III';
              }
              elseif($ResetCount <= 800){
                  $Honra = 'General I';
              }
              elseif($ResetCount <= 850){
                  $Honra = 'General II';
              }
              elseif($ResetCount <= 900){
                  $Honra = 'General III';
              }
              elseif($ResetCount <= 950){
                  $Honra = 'Specialist I';
              }
              elseif($ResetCount <= 1000){
                  $Honra = 'Specialist II';
              }
              elseif($ResetCount > 1000){
                  $Honra = 'Specialist III';
              }
               if($busca_dados[''.COLUMN_PK_RANKING.''] < 0) $pk_class = COLUMN_HERO_RANKING;
               else $pk_class = $busca_dados[''.COLUMN_PK_RANKING.''];
               $this->returnRanking .= "<div id=\"qmembers\">
                      <div id=\"mrank\"><span>".$posicao++."</span></div>
                      <div id=\"mfoto\"><a href=\"?page=rankings&type=6&name={$busca_dados['Name']}\">".$imagem."</a></div>
                      <div id=\"mnome\"><span><a href=\"?page=rankings&type=6&name={$busca_dados['Name']}\">".$busca_dados['Name']."</a></span></div>
                      <div id=\"mpatente\"><img src=\"templates/".TEMPLATE_DIR."/img/profile/honra/".$Honra.".png\" style=\"pointer-events: none;\"></div>
                      <div id=\"mnpatente\"><span>".$Honra."</span></div>
                      <div id=\"mmr\"><span>". $busca_dados[($_GET['period'] == 0 ? "".COLUMN_PK_RANKING."" : ($_GET['period'] == 1 ? "".COLUMN_PK_RANKING_WEEK."" : ($_GET['period'] == 2 ? "".COLUMN_PK_RANKING_MONTH."" : ($_GET['period'] == 3 ? "".COLUMN_PK_RANKING_DAY."": "".COLUMN_PK_RANKING.""))))] ."</span></div>
                     </div>";
             }
        }
        private function gerateRankingLevel()
        {
            global $TABLES_CONFIGS, $PANELUSER_MODULE;
            if(isset($_GET['top']) == false || empty($_GET['top'])) $top = 10;
            if($_GET['top'] == 10) $ex_top = 10;
            elseif($_GET['top'] == 50) $ex_top = 50;
            elseif($_GET['top'] == 100) $ex_top = 100;
            elseif($_GET['top'] == 200) $ex_top = 200;
            else $ex_top = 10;
             $busca_dados_q = $this->query("Select TOP $ex_top AccountID, Name, class, clevel, ".COLUMN_PK_RANKING.", ".COLUMN_RESETS." from dbo.Character order by ".COLUMN_PK_RANKING." desc, ".COLUMN_RESETS." desc");
             $busca_dados_q = $this->query("USE MuOnline
             Select TOP $ex_top AccountID, Name, Class, clevel, ".COLUMN_PK_RANKING.", ".COLUMN_MASTER_RESETS.", ".COLUMN_MASTER_RESETS_WEEK.", ".COLUMN_MASTER_RESETS_MONTH.",image from dbo.Character ". ($_GET['period'] == 0 ? "".COLUMN_MASTER_RESETS."" : ($_GET['period'] == 1 ? "".COLUMN_MASTER_RESETS_WEEK."" : ($_GET['period'] == 2 ? "".COLUMN_RESETS_MONTH."" : "".COLUMN_MASTER_RESETS.""))) ." order by ". ($_GET['period'] == 0 ? "".COLUMN_MASTER_RESETS." desc" : ($_GET['period'] == 1 ? "".COLUMN_RESETS_WEEK." desc, ".COLUMN_MASTER_RESETS." desc" : ($_GET['period'] == 2 ? "".COLUMN_MASTER_RESETS_MONTH." desc, ".COLUMN_MASTER_RESETS." desc" : ($_GET['period'] == 3 ? "".COLUMN_MASTER_RESETS_DAY." desc, ".COLUMN_MASTER_RESETS." desc" : "".COLUMN_MASTER_RESETS." desc"))))." , cLevel desc");
             if($_GET['period'] == 0){
                $name_period = "REAL";
             }
             elseif($_GET['period'] == 1){
                $name_period = "SEMANAL";
             }
             elseif($_GET['period'] == 2){
                $name_period = "MENSAL";
             }
             elseif($_GET['period'] == 3){
                $name_period = "DIARIO";
             }
             elseif (empty($_GET['period'])) {
                 $name_period = "";
             }
             $this->returnRanking .= "<div id=\"mtoporanking\"><div id=\"mtoponome\"><span>TOP RESETS ".$name_period."</span></div></div>";
             $posicao = 1;
             while($busca_dados = mssql_fetch_array($busca_dados_q)) {
              $checkMemberVipQ = $this->query("SELECT ".$TABLES_CONFIGS['WEBVIPS']['columnType']." as type FROM ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']."='".$busca_dados['AccountID']."'");
              $checkMemberVip = mssql_fetch_object($checkMemberVipQ);
               if($busca_dados[''.COLUMN_PK_RANKING.''] < 0) $pk_class = COLUMN_HERO_RANKING;
               else $pk_class = $busca_dados[''.COLUMN_PK_RANKING.''];
               $ResetCount = $busca_dados[''.COLUMN_RESETS.''];
              $Classe = $busca_dados['Class'];
              $Name = $busca_dados['Name'];
              $img = $busca_dados['image'];
              if($ResetCount >= 0 AND $ResetCount <= 99){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "0.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }
              elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 0 AND $Classe == 1 AND $Classe == 2){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Mago.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }
              elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 16 AND $Classe == 17 AND $Classe == 18){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Cavaleiro.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 32 AND $Classe == 33 AND $Classe == 34){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Guerreira.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 48){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Flamejante.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 64){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Cacador.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 1){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Sabio.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 17){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Furioso.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 33){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Julgamento.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 48){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Nobre.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 64){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Profeta.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 700 AND $Classe == 3){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Beginner.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 700 AND $Classe == 18){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Warrior.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }       
              elseif($ResetCount >= 700 AND $Classe == 34){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Archer.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }       
              elseif($ResetCount >= 700 AND $Classe == 50){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Templar.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }       
              elseif($ResetCount >= 700 AND $Classe == 66){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Squire.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }

              if($ResetCount <= 50){
                    $Honra = 'Noob';
              }
              elseif($ResetCount <= 100){
                  $Honra = 'Trainee';
              }
              elseif($ResetCount <= 150){
                  $Honra = 'Hunter';
              }
              elseif($ResetCount <= 200){
                  $Honra = 'Ranger I';
              }
              elseif($ResetCount <= 250){
                  $Honra = 'Ranger II';
              }
              elseif($ResetCount <= 300){
                  $Honra = 'Ranger III';
              }
              elseif($ResetCount <= 350){
                  $Honra = 'Knight I';
              }
              elseif($ResetCount <= 400){
                  $Honra = 'Knight II';
              }
              elseif($ResetCount <= 450){
                  $Honra = 'Knight III';
              }
              elseif($ResetCount <= 500){
                  $Honra = 'Warrior I';
              }
              elseif($ResetCount <= 550){
                  $Honra = 'Warrior II';
              }
              elseif($ResetCount <= 600){
                  $Honra = 'Warrior III';
              }
              elseif($ResetCount <= 650){
                  $Honra = 'Templar I';
              }
              elseif($ResetCount <= 700){
                  $Honra = 'Templar II';
              }
              elseif($ResetCount <= 750){
                  $Honra = 'Templar III';
              }
              elseif($ResetCount <= 800){
                  $Honra = 'General I';
              }
              elseif($ResetCount <= 850){
                  $Honra = 'General II';
              }
              elseif($ResetCount <= 900){
                  $Honra = 'General III';
              }
              elseif($ResetCount <= 950){
                  $Honra = 'Specialist I';
              }
              elseif($ResetCount <= 1000){
                  $Honra = 'Specialist II';
              }
              elseif($ResetCount > 1000){
                  $Honra = 'Specialist III';
              }
               if($busca_dados[''.COLUMN_PK_RANKING.''] < 0) $pk_class = COLUMN_HERO_RANKING;
               else $pk_class = $busca_dados[''.COLUMN_PK_RANKING.''];
               $this->returnRanking .= "<div id=\"qmembers\">
                      <div id=\"mrank\"><span>".$posicao++."</span></div>
                      <div id=\"mfoto\"><a href=\"?page=rankings&type=6&name={$busca_dados['Name']}\">".$imagem."</a></div>
                      <div id=\"mnome\"><span><a href=\"?page=rankings&type=6&name={$busca_dados['Name']}\">".$busca_dados['Name']."</a></span></div>
                      <div id=\"mpatente\"><img src=\"templates/".TEMPLATE_DIR."/img/profile/honra/".$Honra.".png\" style=\"pointer-events: none;\"></div>
                      <div id=\"mnpatente\"><span>".$Honra."</span></div>
                      <div id=\"mmr\"><span>". $busca_dados[($_GET['period'] == 0 ? "".COLUMN_HERO_RANKING."" : ($_GET['period'] == 1 ? "".COLUMN_HERO_RANKING_WEEK."" : ($_GET['period'] == 2 ? "".COLUMN_HERO_RANKING_MONTH."" : ($_GET['period'] == 3 ? "".COLUMN_HERO_RANKING_DAY."" : "".COLUMN_HERO_RANKING.""))))] ."</span></div>
                     </div>";
             }
        }
        private function gerateRankingGuilds()
        {
            if(isset($_GET['top']) == false || empty($_GET['top'])) $top = 10;
            if($_GET['top'] == 10) $ex_top = 10;
            elseif($_GET['top'] == 50) $ex_top = 50;
            elseif($_GET['top'] == 100) $ex_top = 100;
            elseif($_GET['top'] == 200) $ex_top = 200;
            else $ex_top = 10;      
             $busca_dados_q = $this->query("SELECT TOP $ex_top G_Name,G_Master,G_Score,G_Mark,G_Union from ".DATABASE_CHARACTERS.".dbo.Guild order by G_Score desc");
             $this->returnRanking .= "<div id=\"mtoporanking\"><div id=\"mtoponome\"><span>TOP GUILD SCORE</span></div></div>";
             $posicao = 1;
             while($busca_dados = mssql_fetch_array($busca_dados_q)) {
               
               $busca_assistente_q = $this->query("Select Name from ".DATABASE_CHARACTERS.".dbo.GuildMember where G_Name='".$busca_dados['G_Name']."' and G_Status='64'");
               $assistente = mssql_fetch_array($busca_assistente_q);
               $busca_batlemaster_q = $this->query("Select Name from ".DATABASE_CHARACTERS.".dbo.GuildMember where G_Name='".$busca_dados['G_Name']."' and G_Status='32'");
               $batlemaster = mssql_fetch_array($busca_batlemaster_q);
               
               $busca_guild_alience_q = $this->query("Select G_Name,G_Union from ".DATABASE_CHARACTERS.".dbo.Guild where G_Union='".$busca_dados['G_Union']."'");
               $verifica_union = mssql_fetch_array($busca_guild_alience_q);
               if($verifica_union[1] > 0) {
                   while($busca_guild_alience = mssql_fetch_array($busca_guild_alience_q)) { 
                     if($busca_guild_alience[0] != $busca_dados['G_Name']) $aliance .= "$busca_guild_alience[0]<br />"; 
                   }
               }
               $tmpLogo = urlencode(bin2hex($busca_dados->G_Mark)); 
               $this->returnRanking .= "<div id=\"qmembers\">
                    <div id=\"mrank\"><span>".$posicao++."</span></div>
                    <div id=\"mfoto\"><a href=\"?page=rankings&type=7&name={$busca_dados['G_Name']}\"><img src=\"modules/classes/logoGuildDecode.php?decode={$tmpLogo}\" style=\"pointer-events: none;\"></a></div>
                    <div id=\"mnome\"><span><a href=\"?page=rankings&type=7&name={$busca_dados['G_Name']}\">".$busca_dados['G_Name']."</a></span></div>
                    <div id=\"mgGM\"><span>Master</span></div>
                    <div id=\"mnpatente\"><span><a href=\"?page=rankings&type=6&name={$busca_dados['G_Master']}\">".$busca_dados['G_Master']."</a></span></div>
                    <div id=\"mmr\"><span>".$busca_dados['G_Score']."</span></div>

                </div>";
                unset($aliance);
             }
        }
        private function gerateRankingHeros()
        {
            global $TABLES_CONFIGS, $PANELUSER_MODULE;
            if(isset($_GET['top']) == false || empty($_GET['top'])) $top = 10;
            if($_GET['top'] == 10) $ex_top = 10;
            elseif($_GET['top'] == 50) $ex_top = 50;
            elseif($_GET['top'] == 100) $ex_top = 100;
            elseif($_GET['top'] == 200) $ex_top = 200;
            else $ex_top = 10;
             $busca_dados_q = $this->query("USE MuOnline
             Select TOP $ex_top AccountID, Name, Class, clevel,".COLUMN_RESETS.", ".COLUMN_HERO_RANKING.", ".COLUMN_HERO_RANKING_DAY.", ".COLUMN_HERO_RANKING_WEEK.", ".COLUMN_HERO_RANKING_MONTH.",image from dbo.Character ". ($_GET['period'] == 0 ? "".COLUMN_HERO_RANKING."" : ($_GET['period'] == 1 ? "".COLUMN_HERO_RANKING_WEEK."" : ($_GET['period'] == 2 ? "".COLUMN_HERO_RANKING_MONTH."" : "".COLUMN_HERO_RANKING.""))) ." order by ". ($_GET['period'] == 0 ? "".COLUMN_HERO_RANKING." desc" : ($_GET['period'] == 1 ? "".COLUMN_HERO_RANKING_WEEK." desc, ".COLUMN_HERO_RANKING." desc" : ($_GET['period'] == 2 ? "".COLUMN_HERO_RANKING_MONTH." desc, ".COLUMN_HERO_RANKING." desc"  : ($_GET['period'] == 3 ? "".COLUMN_HERO_RANKING_DAY." desc, ".COLUMN_HERO_RANKING." desc" : "".COLUMN_HERO_RANKING." desc"))))." , cLevel desc");
             if($_GET['period'] == 0){
                $name_period = "REAL";
             }
             elseif($_GET['period'] == 1){
                $name_period = "SEMANAL";
             }
             elseif($_GET['period'] == 2){
                $name_period = "MENSAL";
             }
             elseif($_GET['period'] == 3){
                $name_period = "DIARIO";
             }
             elseif (empty($_GET['period'])) {
                 $name_period = "";
             }
             $this->returnRanking .= "<div id=\"mtoporanking\"><div id=\"mtoponome\"><span>TOP HERO ".$name_period."</span></div></div>";
             $posicao = 1;
             while($busca_dados = mssql_fetch_array($busca_dados_q)) {
              $checkMemberVipQ = $this->query("SELECT ".$TABLES_CONFIGS['WEBVIPS']['columnType']." as type FROM ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']."='".$busca_dados['AccountID']."'");
              $checkMemberVip = mssql_fetch_object($checkMemberVipQ);
               if($busca_dados[''.COLUMN_PK_RANKING.''] < 0) $pk_class = COLUMN_HERO_RANKING;
               else $pk_class = $busca_dados[''.COLUMN_PK_RANKING.''];
               $ResetCount = $busca_dados[''.COLUMN_RESETS.''];
              $Classe = $busca_dados['Class'];
              $Name = $busca_dados['Name'];
              $img = $busca_dados['image'];
              if($ResetCount >= 0 AND $ResetCount <= 99){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "0.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }
              elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 0 AND $Classe == 1 AND $Classe == 2){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Mago.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }
              elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 16 AND $Classe == 17 AND $Classe == 18){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Cavaleiro.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 32 AND $Classe == 33 AND $Classe == 34){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Guerreira.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 48){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Flamejante.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 64){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Cacador.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 1){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Sabio.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 17){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Furioso.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 33){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Julgamento.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 48){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Nobre.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 64){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Profeta.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 700 AND $Classe == 3){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Beginner.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 700 AND $Classe == 18){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Warrior.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }       
              elseif($ResetCount >= 700 AND $Classe == 34){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Archer.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }       
              elseif($ResetCount >= 700 AND $Classe == 50){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Templar.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }       
              elseif($ResetCount >= 700 AND $Classe == 66){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Squire.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }

              if($ResetCount <= 50){
                    $Honra = 'Noob';
              }
              elseif($ResetCount <= 100){
                  $Honra = 'Trainee';
              }
              elseif($ResetCount <= 150){
                  $Honra = 'Hunter';
              }
              elseif($ResetCount <= 200){
                  $Honra = 'Ranger I';
              }
              elseif($ResetCount <= 250){
                  $Honra = 'Ranger II';
              }
              elseif($ResetCount <= 300){
                  $Honra = 'Ranger III';
              }
              elseif($ResetCount <= 350){
                  $Honra = 'Knight I';
              }
              elseif($ResetCount <= 400){
                  $Honra = 'Knight II';
              }
              elseif($ResetCount <= 450){
                  $Honra = 'Knight III';
              }
              elseif($ResetCount <= 500){
                  $Honra = 'Warrior I';
              }
              elseif($ResetCount <= 550){
                  $Honra = 'Warrior II';
              }
              elseif($ResetCount <= 600){
                  $Honra = 'Warrior III';
              }
              elseif($ResetCount <= 650){
                  $Honra = 'Templar I';
              }
              elseif($ResetCount <= 700){
                  $Honra = 'Templar II';
              }
              elseif($ResetCount <= 750){
                  $Honra = 'Templar III';
              }
              elseif($ResetCount <= 800){
                  $Honra = 'General I';
              }
              elseif($ResetCount <= 850){
                  $Honra = 'General II';
              }
              elseif($ResetCount <= 900){
                  $Honra = 'General III';
              }
              elseif($ResetCount <= 950){
                  $Honra = 'Specialist I';
              }
              elseif($ResetCount <= 1000){
                  $Honra = 'Specialist II';
              }
              elseif($ResetCount > 1000){
                  $Honra = 'Specialist III';
              }
               if($busca_dados[''.COLUMN_PK_RANKING.''] < 0) $pk_class = COLUMN_HERO_RANKING;
               else $pk_class = $busca_dados[''.COLUMN_PK_RANKING.''];
               $this->returnRanking .= "<div id=\"qmembers\">
                      <div id=\"mrank\"><span>".$posicao++."</span></div>
                      <div id=\"mfoto\"><a href=\"?page=rankings&type=6&name={$busca_dados['Name']}\">".$imagem."</a></div>
                      <div id=\"mnome\"><span><a href=\"?page=rankings&type=6&name={$busca_dados['Name']}\">".$busca_dados['Name']."</a></span></div>
                      <div id=\"mpatente\"><img src=\"templates/".TEMPLATE_DIR."/img/profile/honra/".$Honra.".png\" style=\"pointer-events: none;\"></div>
                      <div id=\"mnpatente\"><span>".$Honra."</span></div>
                      <div id=\"mmr\"><span>". $busca_dados[($_GET['period'] == 0 ? "".COLUMN_HERO_RANKING."" : ($_GET['period'] == 1 ? "".COLUMN_HERO_RANKING_WEEK."" : ($_GET['period'] == 2 ? "".COLUMN_HERO_RANKING_MONTH."" : ($_GET['period'] == 3 ? "".COLUMN_HERO_RANKING_DAY."" : "".COLUMN_HERO_RANKING.""))))] ."</span></div>
                     </div>";
             }
        }
        private function gerateRankingHour()
        {
            global $TABLES_CONFIGS, $PANELUSER_MODULE;
            if(isset($_GET['top']) == false || empty($_GET['top'])) $top = 10;
            if($_GET['top'] == 10) $ex_top = 10;
            elseif($_GET['top'] == 50) $ex_top = 50;
            elseif($_GET['top'] == 100) $ex_top = 100;
            elseif($_GET['top'] == 200) $ex_top = 200;
            else $ex_top = 10;
             $busca_dados_q = $this->query("USE MuOnline
             Select TOP $ex_top AccountID, Name, Class, clevel,".COLUMN_RESETS.", ".COLUMN_HOUR_RANKING.", ".COLUMN_HOUR_RANKING_DAY.", ".COLUMN_HOUR_RANKING_WEEK.", ".COLUMN_HOUR_RANKING_MONTH.",image from dbo.Character ". ($_GET['period'] == 0 ? "".COLUMN_HOUR_RANKING."" : ($_GET['period'] == 1 ? "".COLUMN_HOUR_RANKING_WEEK."" : ($_GET['period'] == 2 ? "".COLUMN_HOUR_RANKING_MONTH."" : "".COLUMN_HOUR_RANKING.""))) ." order by ". ($_GET['period'] == 0 ? "".COLUMN_HOUR_RANKING." desc" : ($_GET['period'] == 1 ? "".COLUMN_HOUR_RANKING_WEEK." desc, ".COLUMN_HOUR_RANKING." desc" : ($_GET['period'] == 2 ? "".COLUMN_HOUR_RANKING_MONTH." desc, ".COLUMN_HOUR_RANKING." desc"  : ($_GET['period'] == 3 ? "".COLUMN_HOUR_RANKING_DAY." desc, ".COLUMN_HOUR_RANKING." desc" : "".COLUMN_HOUR_RANKING." desc"))))." , cLevel desc");
             if($_GET['period'] == 0){
                $name_period = "REAL";
             }
             elseif($_GET['period'] == 1){
                $name_period = "SEMANAL";
             }
             elseif($_GET['period'] == 2){
                $name_period = "MENSAL";
             }
             elseif($_GET['period'] == 3){
                $name_period = "DIARIO";
             }
             elseif (empty($_GET['period'])) {
                 $name_period = "";
             }
             $this->returnRanking .= "<div id=\"mtoporanking\"><div id=\"mtoponome\"><span>TOP HORAS ".$name_period."</span></div></div>";
             $posicao = 1;
             while($busca_dados = mssql_fetch_array($busca_dados_q)) {
              $checkMemberVipQ = $this->query("SELECT ".$TABLES_CONFIGS['WEBVIPS']['columnType']." as type FROM ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']."='".$busca_dados['AccountID']."'");
              $checkMemberVip = mssql_fetch_object($checkMemberVipQ);
               if($busca_dados[''.COLUMN_PK_RANKING.''] < 0) $pk_class = COLUMN_HERO_RANKING;
               else $pk_class = $busca_dados[''.COLUMN_PK_RANKING.''];
               $ResetCount = $busca_dados[''.COLUMN_RESETS.''];
              $Classe = $busca_dados['Class'];
              $Name = $busca_dados['Name'];
              $img = $busca_dados['image'];
              if($ResetCount >= 0 AND $ResetCount <= 99){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "0.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }
              elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 0 AND $Classe == 1 AND $Classe == 2){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Mago.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }
              elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 16 AND $Classe == 17 AND $Classe == 18){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Cavaleiro.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 32 AND $Classe == 33 AND $Classe == 34){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Guerreira.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 48){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Flamejante.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 100 || $ResetCount < 300 AND $Classe == 64){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Cacador.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 1){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Sabio.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 17){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Furioso.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 33){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Julgamento.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 48){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Nobre.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 300 || $ResetCount < 700 AND $Classe == 64){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Profeta.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 700 AND $Classe == 3){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Beginner.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }         
              elseif($ResetCount >= 700 AND $Classe == 18){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Warrior.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }       
              elseif($ResetCount >= 700 AND $Classe == 34){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Archer.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }       
              elseif($ResetCount >= 700 AND $Classe == 50){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Templar.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }       
              elseif($ResetCount >= 700 AND $Classe == 66){
                  if(file_exists("modules/uploads/photos".$img) == false || empty($img) == true) $img = "Squire.jpg";
                  $imagem = '<img src="modules/uploads/photos/'.$img.'" alt="'.$Name.'" />';
              }

              if($ResetCount <= 50){
                    $Honra = 'Noob';
              }
              elseif($ResetCount <= 100){
                  $Honra = 'Trainee';
              }
              elseif($ResetCount <= 150){
                  $Honra = 'Hunter';
              }
              elseif($ResetCount <= 200){
                  $Honra = 'Ranger I';
              }
              elseif($ResetCount <= 250){
                  $Honra = 'Ranger II';
              }
              elseif($ResetCount <= 300){
                  $Honra = 'Ranger III';
              }
              elseif($ResetCount <= 350){
                  $Honra = 'Knight I';
              }
              elseif($ResetCount <= 400){
                  $Honra = 'Knight II';
              }
              elseif($ResetCount <= 450){
                  $Honra = 'Knight III';
              }
              elseif($ResetCount <= 500){
                  $Honra = 'Warrior I';
              }
              elseif($ResetCount <= 550){
                  $Honra = 'Warrior II';
              }
              elseif($ResetCount <= 600){
                  $Honra = 'Warrior III';
              }
              elseif($ResetCount <= 650){
                  $Honra = 'Templar I';
              }
              elseif($ResetCount <= 700){
                  $Honra = 'Templar II';
              }
              elseif($ResetCount <= 750){
                  $Honra = 'Templar III';
              }
              elseif($ResetCount <= 800){
                  $Honra = 'General I';
              }
              elseif($ResetCount <= 850){
                  $Honra = 'General II';
              }
              elseif($ResetCount <= 900){
                  $Honra = 'General III';
              }
              elseif($ResetCount <= 950){
                  $Honra = 'Specialist I';
              }
              elseif($ResetCount <= 1000){
                  $Honra = 'Specialist II';
              }
              elseif($ResetCount > 1000){
                  $Honra = 'Specialist III';
              }
               if($busca_dados[''.COLUMN_PK_RANKING.''] < 0) $pk_class = COLUMN_HERO_RANKING;
               else $pk_class = $busca_dados[''.COLUMN_PK_RANKING.''];
               $this->returnRanking .= "<div id=\"qmembers\">
                      <div id=\"mrank\"><span>".$posicao++."</span></div>
                      <div id=\"mfoto\"><a href=\"?page=rankings&type=6&name={$busca_dados['Name']}\">".$imagem."</a></div>
                      <div id=\"mnome\"><span><a href=\"?page=rankings&type=6&name={$busca_dados['Name']}\">".$busca_dados['Name']."</a></span></div>
                      <div id=\"mpatente\"><img src=\"templates/".TEMPLATE_DIR."/img/profile/honra/".$Honra.".png\" style=\"pointer-events: none;\"></div>
                      <div id=\"mnpatente\"><span>".$Honra."</span></div>
                      <div id=\"mmr\"><span>". $busca_dados[($_GET['period'] == 0 ? "".COLUMN_HOUR_RANKING."" : ($_GET['period'] == 1 ? "".COLUMN_HOUR_RANKING_WEEK."" : ($_GET['period'] == 2 ? "".COLUMN_HOUR_RANKING_MONTH."" : ($_GET['period'] == 3 ? "".COLUMN_HOUR_RANKING_DAY."" : "".COLUMN_HOUR_RANKING.""))))] ."</span></div>
                     </div>";
             }
        }
        private function gerateRankingGens()
        {
            global $TABLES_CONFIGS, $PANELUSER_MODULE, $RANKING_CONFIGS;;
            if(isset($_GET['top']) == false || empty($_GET['top'])) $top = 10;
            if($_GET['top'] == 10) $ex_top = 10;
            elseif($_GET['top'] == 50) $ex_top = 50;
            elseif($_GET['top'] == 100) $ex_top = 100;
            elseif($_GET['top'] == 200) $ex_top = 200;
            else $ex_top = 10;
            
            if($_GET['type'] == 8) { $family = 1; $familyPath = "duprian"; }
            elseif($_GET['type'] == 9){ $family = 2; $familyPath = "vanert"; }
            else { $family = 1; $familyPath = "duprian"; }  
            
            if($RANKING_CONFIGS['GENS_MANUFACTURER'] == 0)
            {
             $busca_dados_q = $this->query("SELECT TOP {$ex_top} [CHAR_NAME] 
                                                  ,[GRADUATION]
                                                  ,[FAMILY] 
                                                  ,[RANKING] 
                                                  ,[CONTRIBUITION] 
                                              FROM [".constant("DATABASE_CHARACTERS")."].[dbo].[T_GensSystem]
                                              WHERE [FAMILY] = {$family}
                                              ORDER BY [CONTRIBUITION] DESC");
            }
            elseif($RANKING_CONFIGS['GENS_MANUFACTURER'] == 1)
            {                                                                   
             /*$busca_dados_q = $this->query("SELECT TOP {$ex_top} Row_Number() OVER (ORDER BY Contribution DESC, Name ASC) AS [RANKING], 
                                                 Name [CHAR_NAME], 
                                                 Family [FAMILY], 
                                                 Contribution [CONTRIBUITION]
                                            FROM [".constant("DATABASE_CHARACTERS")."].[dbo].[Gens_Rank]
                                            WHERE Family = {$family}
                                            ORDER BY Contribution DESC, Name ASC");*/
             $busca_dados_q = $this->query("SELECT TOP {$ex_top} Name [CHAR_NAME], 
                                                 Family [FAMILY], 
                                                 Contribution [CONTRIBUITION]
                                            FROM [".constant("DATABASE_CHARACTERS")."].[dbo].[Gens_Rank]
                                            WHERE Family = {$family}
                                            ORDER BY Contribution DESC, Name ASC");
            }
            else
            {
                exit("\$RANKING_CONFIGS['GENS_MANUFACTURER'] inv�lido! Configure corretamente o setting.php");
            }
             $this->returnRanking .= "<div class='quadros'>
                    <table border='0' width='100%'>
                     <tr>
                      <td bgcolor='#CFB988' align='center'><strong>".RANKING_PLACE."</strong></td>
                      <td bgcolor='#CFB988' align='center'><strong>".RANKING_CHARACTER_SHORT."</strong></td>
                      <td bgcolor='#CFB988' align='center'><strong>".RANKING_GENS_CONTRIBUITION."</strong></td>
                      <td bgcolor='#CFB988' align='center'><strong>".RANKING_GENS_FAMILY."</strong></td> 
                      <td bgcolor='#CFB988' align='center'><strong>".RANKING_GENS_PATENT_LOGO."</strong></td>
                      <td bgcolor='#CFB988' align='center'><strong>".RANKING_GENS_PATENT_NAME."</strong></td>
                     </tr>";
             $posicao = 1;
             while($busca_dados = mssql_fetch_array($busca_dados_q)) {
              $checkMemberVipQ = $this->query("SELECT ".$TABLES_CONFIGS['WEBVIPS']['columnType']." as type FROM ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']."='".$busca_dados['account']."'");
              $checkMemberVip = mssql_fetch_object($checkMemberVipQ);
               if($busca_dados[''.COLUMN_PK_RANKING.''] < 0) $pk_class = COLUMN_HERO_RANKING;
               else $pk_class = $busca_dados[''.COLUMN_PK_RANKING.'']; 
               if($RANKING_CONFIGS['GENS_MANUFACTURER'] == 1)
               {
               
                    if($busca_dados['CONTRIBUITION'] >= 0 && $busca_dados['CONTRIBUITION'] <= 999)
                    {
                        $busca_dados['GRADUATION'] = 14;
                    }
                    elseif($busca_dados['CONTRIBUITION'] >= 1000 && $busca_dados['CONTRIBUITION'] <= 4999)
                    {
                        $busca_dados['GRADUATION'] = 13;
                    }
                    elseif($busca_dados['CONTRIBUITION'] >= 5000 && $busca_dados['CONTRIBUITION'] <= 14999)
                    {
                        $busca_dados['GRADUATION'] = 12;
                    }
                    elseif($busca_dados['CONTRIBUITION'] >= 15000 && $busca_dados['CONTRIBUITION'] <= 49999)
                    {
                        $busca_dados['GRADUATION'] = 11;
                    }
                    elseif($busca_dados['CONTRIBUITION'] >= 50000 && $busca_dados['CONTRIBUITION'] <= 99999)
                    {
                        $busca_dados['GRADUATION'] = 10;
                    }
                    else
                    {
                        $busca_dados['GRADUATION'] = 9;
                    }

                    if($busca_dados['CONTRIBUITION'] > 100000)
                    {
                        if($posicao == 1)
                        {
                            $busca_dados['GRADUATION'] = 1;
                        }
                        elseif($posicao >= 2 && $posicao <= 5)
                        {
                            $busca_dados['GRADUATION'] = 2;
                        }
                        elseif($posicao >= 6 && $posicao <= 10)
                        {
                            $busca_dados['GRADUATION'] = 3;
                        }
                        elseif($posicao >= 11 && $posicao <= 30)
                        {
                            $busca_dados['GRADUATION'] = 4;
                        }
                        elseif($posicao >= 31 && $posicao <= 50)
                        {
                            $busca_dados['GRADUATION'] = 5;
                        }
                        elseif($posicao >= 51 && $posicao <= 100)
                        {
                            $busca_dados['GRADUATION'] = 6;
                        }
                        elseif($posicao >= 101 && $posicao <= 200)
                        {
                            $busca_dados['GRADUATION'] = 7;
                        }
                        elseif($posicao >= 201 && $posicao <= 300)
                        {
                            $busca_dados['GRADUATION'] = 8;
                        }
                        elseif($posicao >= 301)
                        {
                            $busca_dados['GRADUATION'] = 9;
                        }
                    }                             
               }
               switch($busca_dados['GRADUATION'])
               {    
                   case 1: $graduationName = RANKING_GENS_GRADUATION_GRAND_DUKE; break;   
                    case 2: $graduationName = RANKING_GENS_GRADUATION_DUKE; break;   
                    case 3: $graduationName = RANKING_GENS_GRADUATION_MARQUIS; break;   
                    case 4: $graduationName = RANKING_GENS_GRADUATION_COUNT; break;   
                    case 5: $graduationName = RANKING_GENS_GRADUATION_VISCOUNT; break;   
                    case 6: $graduationName = RANKING_GENS_GRADUATION_BARON; break;   
                    case 7: $graduationName = RANKING_GENS_GRADUATION_KNIGHT_COMMANDER; break;   
                    case 8: $graduationName = RANKING_GENS_GRADUATION_SUPERIOR_KNIGHT; break;   
                    case 9: $graduationName = RANKING_GENS_GRADUATION_KNIGHT; break;   
                    case 10: $graduationName = RANKING_GENS_GRADUATION_GUARD_PREFECT; break;   
                    case 11: $graduationName = RANKING_GENS_GRADUATION_OFFICER; break;   
                    case 12: $graduationName = RANKING_GENS_GRADUATION_LIEUTENANT; break;   
                    case 13: $graduationName = RANKING_GENS_GRADUATION_SERGEANT; break;   
                    case 14: $graduationName = RANKING_GENS_GRADUATION_PRIVATE; break; 
               }
                
               $this->returnRanking .= "<tr>
                      <td bgcolor='#171512' align='center'><strong>".$posicao++."</strong></td>
                      <td align='center'><a href=\"?page=rankings&type=6&name={$busca_dados['CHAR_NAME']}\">".$busca_dados['CHAR_NAME']."</a></td>
                      <td align='center'>".$busca_dados['CONTRIBUITION']."</td>
                      <td align='center'><img src=\"templates/".constant("TEMPLATE_DIR")."/images/gens/{$familyPath}/14.jpg\" /></td> 
                      <td align='center'><img src=\"templates/".constant("TEMPLATE_DIR")."/images/gens/{$familyPath}/{$busca_dados['GRADUATION']}.jpg\" /></td>
                      <td align='center'>{$graduationName}</td>
                     </tr>";
             }
             $this->returnRanking .= "</table></div>";
        }
	}   	
}

?>