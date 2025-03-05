{#INCLUDE:header}

<!-- Main Content -->
<section class="content-wrap">

<!-- Banner -->
<div class="youplay-banner banner-top youplay-banner-parallax small">
    <div class="image" style="background-image: url('templates/{#TEMPLATE_DIR}/assets/images/banner-blog-bg.jpg')">
    </div>
    <div class="info">
        <div>
            <div class="container">
                <h1>Ranking</h1>
            </div>
        </div>
    </div>
</div>
 
<div class="container youplay-news">

    <!-- News List -->
    <div class="col-md-9 col-md-push-3">

        <div role="tabpanel">

            <h2 class="mt-0 mb-30 ml-20">Top Horas Online</h2>

            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active"><a href="#all" aria-controls="all" role="tab" data-toggle="tab">Geral</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="all">
                    <table class="table table-striped mt-20">
    <thead>
    <tr>
        <th>#</th>
        <th width="30%">Personagem</th>
        <th>Classe</th>
        <th>Guild</th>
        <th>Resets</th>
        <th>Horas</th>
            </tr>
    </thead>
    <tbody>
					        <?
include("modules/settings.php");
$query=mssql_query("select TOP 50 Name,".COLUMN_RESETS." as rrs,AccountID,Class,".COLUMN_HOUR_RANKING." as hour from ".DATABASE_ACCOUNTS.".dbo.Character Where ctlcode !='32' and ctlcode !='8' order by ".COLUMN_HOUR_RANKING." desc, ".COLUMN_RESETS." desc, cLevel desc");
while($row=mssql_fetch_assoc($query)){
$namez=$row['Name'];$horas=floor($row['hour'] / 60);
$minutos=floor($row['hour'] - ($horas * 60));
$hours="".$horas."h e ".$minutos."min";
$rst[2]=$row['rrs'];
$LoginChar=$row['AccountID'];
$query2=mssql_query("select TOP 1 * from ".DATABASE_ACCOUNTS.".dbo.GuildMember Where Name ='".$namez."'");
$row2=mssql_fetch_assoc($query2);
$query3=mssql_query("select TOP 1 * from ".DATABASE_ACCOUNTS.".dbo.MEMB_INFO Where memb___id ='".$LoginChar."'");
$row3=mssql_fetch_assoc($query3);
if(mssql_num_rows($query2) != 1){
$guildname="Sem Guild";
} else {
$guildname=$row2['G_Name'];
}
if($row['Class'] == 0){$classe="Dark Wizard";}
elseif($row['Class'] == 1){$classe="Soul Master";}
elseif($row['Class'] == 2){$classe="Grand Master";}
elseif($row['Class'] == 3){$classe="Grand Master";}
elseif($row['Class'] == 16){$classe="Dark Knight";}
elseif($row['Class'] == 17){$classe="Blade Knight";}
elseif($row['Class'] == 18){$classe="Blade Master";}
elseif($row['Class'] == 19){$classe="Blade Master";}
elseif($row['Class'] == 32){$classe="Fairy Elf";}
elseif($row['Class'] == 33){$classe="Muse Elf";}
elseif($row['Class'] == 34){$classe="High Elf";}
elseif($row['Class'] == 35){$classe="High Elf";}
elseif($row['Class'] == 48){$classe="Magic Gladiator";}
elseif($row['Class'] == 49){$classe="Duel Master";}
elseif($row['Class'] == 50){$classe="Duel Master";}
elseif($row['Class'] == 64){$classe="Dark Lord";}
elseif($row['Class'] == 65){$classe="Lord Emperor";}
elseif($row['Class'] == 66){$classe="Lord Emperor";}
elseif($row['Class'] == 80){$classe="Summoner";}
elseif($row['Class'] == 81){$classe="Blood Summoner";}
elseif($row['Class'] == 82){$classe="Dimension Master";}
elseif($row['Class'] == 83){$classe="Dimension Master";}
elseif($row['Class'] == 96){$classe="Rage Fighter";}
elseif($row['Class'] == 97){$classe="First Master";}
elseif($row['Class'] == 98){$classe="First Master";}

$query4=mssql_query("select ".$TABLES_CONFIGS['WEBVIPS']['columnType']." as TypeVip from ".$TABLES_CONFIGS['WEBVIPS']['database'].".dbo.".$TABLES_CONFIGS['WEBVIPS']['table']." WHERE ".$TABLES_CONFIGS['WEBVIPS']['columnUsername']."='".$LoginChar."'");
$row4=mssql_fetch_assoc($query4);

if($row4['TypeVip']==0){$vip="";}
elseif($row4['TypeVip']==1){$vip="<span style='background-color: #235782;' class='badge badge-float'>{#VIP_NAME_1}</span>";}
elseif($row4['TypeVip']==2){$vip="<span style='background-color: #235782;' class='badge badge-float'>{#VIP_NAME_2}</span>";}
elseif($row4['TypeVip']==3){$vip="<span style='background-color: #235782;' class='badge badge-float'>{#VIP_NAME_3}</span>";}
elseif($row4['TypeVip']==4){$vip="<span style='background-color: #235782;' class='badge badge-float'>{#VIP_NAME_4}</span>";}
elseif($row4['TypeVip']==5){$vip="<span style='background-color: #235782;' class='badge badge-float'>{#VIP_NAME_5}</span>";}
?>
            <tr>
            <th scope="row"><?=++$count1;?></th>
            <td>
                <?=$namez;?><?=$vip?>            </td>
            <td><?=$classe?></td>
            <td><?=$guildname?></td>
            <td><?=$rst[2];?></td>
            <td><?=$hours;?></td>
                    </tr>
      <?

}
?>
        </tbody>
</table>                </div>
            </div>

        </div>

    </div>
    <!-- /News List -->


 <!-- Left Side -->
    <div class="col-md-3 col-md-pull-9">

        <!-- Side Popular News -->
        <div class="side-block">
            <h4 class="block-title">Categorias</h4>
            <div class="block-content p-0 col-md-12 submenu-col">
                                <a href="?page=rankreset" class="rankingLink" data-link="?page=rankreset">
                    <div class="item angled-bg " id="rr">
                        <div class="row">
                            <div class="col-md-4 col-xs-2 ">
                                <div class="angled-img">
                                    <div class="img">
                                        <img src="templates/{#TEMPLATE_DIR}/assets/images/game-the-witcher-500x375.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-xs-8">
                                <div class="row mt-5">
                                    <h5>Resets</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                                <a href="?page=rankguild" class="rankingLink" data-link="?page=rankguild">
                    <div class="item angled-bg " id="guild">
                        <div class="row">
                            <div class="col-md-4 col-xs-2 ">
                                <div class="angled-img">
                                    <div class="img">
                                        <img src="templates/{#TEMPLATE_DIR}/assets/images/battle-500x375.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-xs-8">
                                <div class="row mt-5">
                                    <h5>Guild</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                                <a href="?page=rankduel" class="rankingLink" data-link="?page=rankduel">
                    <div class="item angled-bg ">
                        <div class="row">
                            <div class="col-md-4 col-xs-2 ">
                                <div class="angled-img">
                                    <div class="img">
                                        <img src="templates/{#TEMPLATE_DIR}/assets/images/game-kingdoms-of-amalur-reckoning-500x375.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-xs-8">
                                <div class="row mt-5">
                                    <h5>Duelos</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                                <a href="?page=rankhour" class="rankingLink" data-link="?page=rankhour">
                    <div class="item angled-bg active">
                        <div class="row">
                            <div class="col-md-4 col-xs-2 ">
                                <div class="angled-img">
                                    <div class="img">
                                        <img src="templates/{#TEMPLATE_DIR}/assets/images/soldier-500x375.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-xs-8">
                                <div class="row mt-5">
                                    <h5>Horas Online</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                                <a href="?page=rankpk" class="rankingLink" data-link="?page=rankpk">
                    <div class="item angled-bg ">
                        <div class="row">
                            <div class="col-md-4 col-xs-2 ">
                                <div class="angled-img">
                                    <div class="img">
                                        <img src="templates/{#TEMPLATE_DIR}/assets/images/game-kingdoms-of-amalur-reckoning-3-500x375.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-xs-8">
                                <div class="row mt-5">
                                    <h5>Assassino</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                                <a href="?page=rankbc" class="rankingLink" data-link="?page=rankbc">
                    <div class="item angled-bg ">
                        <div class="row">
                            <div class="col-md-4 col-xs-2 ">
                                <div class="angled-img">
                                    <div class="img">
                                        <img src="templates/{#TEMPLATE_DIR}/assets/images/game-bloodborne-3-500x375.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-xs-8">
                                <div class="row mt-5">
                                    <h5>Blood Castle</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                                <a href="?page=rankcc" class="rankingLink" data-link="?page=rankcc">
                    <div class="item angled-bg ">
                        <div class="row">
                            <div class="col-md-4 col-xs-2 ">
                                <div class="angled-img">
                                    <div class="img">
                                        <img src="templates/{#TEMPLATE_DIR}/assets/images/chaoscastle-500x375.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-xs-8">
                                <div class="row mt-5">
                                    <h5>Chaos Castle</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                                <a href="?page=rankds" class="rankingLink" data-link="?page=rankds">
                    <div class="item angled-bg ">
                        <div class="row">
                            <div class="col-md-4 col-xs-2 ">
                                <div class="angled-img">
                                    <div class="img">
                                        <img src="templates/{#TEMPLATE_DIR}/assets/images/game-soul-sacrifice-500x375.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-xs-8">
                                <div class="row mt-5">
                                    <h5>Devil Square</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                                <a href="?page=rankit" class="rankingLink" data-link="?page=rankit">
                    <div class="item angled-bg ">
                        <div class="row">
                            <div class="col-md-4 col-xs-2 ">
                                <div class="angled-img">
                                    <div class="img">
                                        <img src="templates/{#TEMPLATE_DIR}/assets/images/IllusionTemple-500x375.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-xs-8">
                                <div class="row mt-5">
                                    <h5>Illusion Temple</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
                                <!-- /Single News Block -->
            </div>
        </div>
        <!-- /Side Popular News -->

    </div>
    <!-- /Left Side -->

</div>
    

{#INCLUDE:footer}