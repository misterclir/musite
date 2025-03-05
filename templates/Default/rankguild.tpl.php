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

            <h2 class="mt-0 mb-30 ml-20">Top Guilds</h2>

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
        <th width="40%">Guild</th>
        <th>Guild Master</th>
        <th>Membros</th>
        <th>Score</th>
        <th>Logo</th>
            </tr>
    </thead>
    <tbody>
					        <?
include("modules/settings.php");
$query=mssql_query("select TOP 50 * from ".DATABASE_ACCOUNTS.".dbo.Guild order by G_Score desc");
while($row=mssql_fetch_assoc($query)){
$namez=$row['G_Name'];
$rst[1]=$row['G_Master'];
$rst[2]=$row['G_Score'];
$LoginChar=$row['AccountID'];
$query2=mssql_query("select * from ".DATABASE_ACCOUNTS.".dbo.GuildMember Where G_Name ='".$namez."'");
$row2=mssql_fetch_assoc($query2);
$guildmembers=mssql_num_rows($query2);
$guildmark = urlencode(bin2hex($row['G_Mark']));
?>
            <tr>
            <th scope="row"><?=++$count1;?></th>
            <td><?=$namez;?></td>
            <td><?=$rst[1];?></td>
            <td><?=$guildmembers?></td>
            <td><?=$rst[2];?></td>
            <td><img width="30" height="30" style="margin-top:-5px;" src="modules/classes/logoGuildDecode.php?decode=<?php echo $guildmark; ?>"/></td>
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
                    <div class="item angled-bg active" id="guild">
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
                    <div class="item angled-bg ">
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