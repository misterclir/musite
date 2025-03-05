<div class="youplay-carousel" data-autoplay="4000">

        <a class="angled-img" href="?page=rankreset">
        <div class="img">
            <img src="templates/{#TEMPLATE_DIR}/assets/images/game-the-witcher-500x375.jpg" alt="">
        </div>
        <div class="over-info">
            <div>
                <div>
                    <h4><span class="label label-default">Top Resets </span><span class="label label-custom">Geral</span></h4>
                    <div class="rating">
					        <?
include("modules/settings.php");
$query=mssql_query("SELECT TOP 3 Name,ResetCount FROM Character WHERE ctlcode !='32' AND ctlcode !='8' ORDER BY ResetCount DESC, cLevel DESC");
while($row=mssql_fetch_assoc($query)){
$namez=$row['Name'];
$rst[1]=$row['ResetCount'];

?>
          <?=++$count1;?>º - <?=$namez;?> (<?=$rst[1];?>)</br>
<?
}
?>
						</div>
                </div>
            </div>
        </div>
    </a>
        <a class="angled-img" href="?page=rankguild">
        <div class="img">
            <img src="templates/{#TEMPLATE_DIR}/assets/images/battle-500x375.jpg" alt="">
        </div>
        <div class="over-info">
            <div>
                <div>
                    <h4><span class="label label-default">Top Guild </span><span class="label label-custom">Geral</span></h4>
                    <div class="rating">
															        <?
include("modules/settings.php");
$query=mssql_query("SELECT TOP 3 * from Guild ORDER BY G_Score DESC");
while($row=mssql_fetch_assoc($query)){
$namez=$row['G_Name'];
$rst[2]=$row['G_Score'];

?>
          <?=++$count2;?>º - <?=$namez;?> (<?=$rst[2];?>)</br>
      <?

}
?>
                    </div>
                </div>
            </div>
        </div>
    </a>
        <a class="angled-img" href="?page=rankduel">
        <div class="img">
            <img src="templates/{#TEMPLATE_DIR}/assets/images/game-kingdoms-of-amalur-reckoning-500x375.jpg" alt="">
        </div>
        <div class="over-info">
            <div>
                <div>
                    <h4><span class="label label-default">Top Duelos </span><span class="label label-custom">Geral</span></h4>
                    <div class="rating">
					        <?
include("modules/settings.php");
$query=mssql_query("SELECT TOP 3 Name,WinScore FROM RankingDuel ORDER BY WinScore DESC, LoseScore ASC");
while($row=mssql_fetch_assoc($query)){
$namez=$row['Name'];
$rst[3]=$row['WinScore'];

?>
          <?=++$count3;?>º - <?=$namez;?> (<?=$rst[3];?>)</br>
      <?

}
?>
                    </div>
                </div>
            </div>
        </div>
    </a>
        <a class="angled-img" href="?page=rankreset">
        <div class="img">
            <img src="templates/{#TEMPLATE_DIR}/assets/images/game-kingdoms-of-amalur-reckoning-2-500x375.jpg" alt="">
        </div>
        <div class="over-info">
            <div>
                <div>
                    <h4><span class="label label-default">Top Reset </span><span class="label label-custom">Diário</span></h4>
                    <div class="rating">
					        <?
include("modules/settings.php");
$query=mssql_query("SELECT TOP 3 Name,ResetCountDay  FROM Character WHERE ctlcode !='32' AND ctlcode !='8' ORDER BY ResetCountDay DESC, ResetCount DESC");
while($row=mssql_fetch_assoc($query)){
$namez=$row['Name'];
$rst[4]=$row['ResetCountDay'];

?>
          <?=++$count4;?>º - <?=$namez;?> (<?=$rst[4];?>)</br>
      <?

}
?>
                    </div>
                </div>
            </div>
        </div>
    </a>
        <a class="angled-img" href="?page=rankhour">
        <div class="img">
            <img src="templates/{#TEMPLATE_DIR}/assets/images/soldier-500x375.jpg" alt="">
        </div>
        <div class="over-info">
            <div>
                <div>
                    <h4><span class="label label-default">Top Horas Online </span><span class="label label-custom">Geral</span></h4>
                    <div class="rating">
					        <?
include("modules/settings.php");
$query=mssql_query("SELECT TOP 3 Name,OnlineHour FROM Character WHERE ctlcode !='32' AND ctlcode !='8' ORDER BY OnlineHour DESC, ResetCount DESC");
while($row=mssql_fetch_assoc($query)){
$namez=$row['Name'];
$rst[5]=$row['OnlineHour'];

?>
          <?=++$count5;?>º - <?=$namez;?> (<?=$rst[5];?>)</br>
      <?

}
?>
					</div>
                </div>
            </div>
        </div>
    </a>
        <a class="angled-img" href="?page=rankpk">
        <div class="img">
            <img src="templates/{#TEMPLATE_DIR}/assets/images/game-kingdoms-of-amalur-reckoning-3-500x375.jpg" alt="">
        </div>
        <div class="over-info">
            <div>
                <div>
                    <h4><span class="label label-default">Top Assassino </span><span class="label label-custom">Geral</span></h4>
                    <div class="rating">
					        <?
include("modules/settings.php");
$query=mssql_query("SELECT TOP 3 Name,PkCount FROM Character WHERE ctlcode !='32' AND ctlcode !='8' ORDER BY PkCount DESC, ResetCount DESC");
while($row=mssql_fetch_assoc($query)){
$namez=$row['Name'];
$rst[6]=$row['PkCount'];

?>
          <?=++$count6;?>º - <?=$namez;?> (<?=$rst[6];?>)</br>
      <?

}
?>
 					</div>
                </div>
            </div>
        </div>
    </a>
        <a class="angled-img" href="?page=rankbc">
        <div class="img">
            <img src="templates/{#TEMPLATE_DIR}/assets/images/game-bloodborne-3-500x375.jpg" alt="">
        </div>
        <div class="over-info">
            <div>
                <div>
                    <h4><span class="label label-default">Top Blood Castle </span><span class="label label-custom">Geral</span></h4>
                    <div class="rating">
					        <?
include("modules/settings.php");
$query=mssql_query("SELECT TOP 3 Name, Score FROM RankingBloodCastle ORDER BY Score DESC");
while($row=mssql_fetch_assoc($query)){
$namez=$row['Name'];
$rst[7]=$row['Score'];

?>
          <?=++$count7;?>º - <?=$namez;?> (<?=$rst[7];?>)</br>
      <?

}
?>
                    </div>
                </div>
            </div>
        </div>
    </a>
        <a class="angled-img" href="?page=rankcc">
        <div class="img">
            <img src="templates/{#TEMPLATE_DIR}/assets/images/chaoscastle-500x375.jpg" alt="">
        </div>
        <div class="over-info">
            <div>
                <div>
                    <h4><span class="label label-default">Top Chaos Castle </span><span class="label label-custom">Geral</span></h4>
                    <div class="rating">
<?
include("modules/settings.php");
$query=mssql_query("SELECT TOP 3 Name , Score FROM RankingChaosCastle ORDER BY Score DESC");
while($row=mssql_fetch_assoc($query)){
$namez=$row['Name'];
$rst[8]=$row['Score'];

?>
          <?=++$count8;?>º - <?=$namez;?> (<?=$rst[8];?>)</br>
      <?

}
?>
                    </div>
                </div>
            </div>
        </div>
    </a>
        <a class="angled-img" href="?page=rankds">
        <div class="img">
            <img src="templates/{#TEMPLATE_DIR}/assets/images/game-soul-sacrifice-500x375.jpg" alt="">
        </div>
        <div class="over-info">
            <div>
                <div>
                    <h4><span class="label label-default">Top Devil Square </span><span class="label label-custom">Geral</span></h4>
                    <div class="rating">
<?
include("modules/settings.php");
$query=mssql_query("SELECT TOP 3 Name, Score FROM RankingDevilSquare ORDER BY Score DESC");
while($row=mssql_fetch_assoc($query)){
$namez=$row['Name'];
$rst[9]=$row['Score'];

?>
          <?=++$count9;?>º - <?=$namez;?> (<?=$rst[9];?>)</br>
      <?

}
?>
                    </div>
                </div>
            </div>
        </div>
    </a>
        <a class="angled-img" href="?page=rankit">
        <div class="img">
            <img src="templates/{#TEMPLATE_DIR}/assets/images/IllusionTemple-500x375.jpg" alt="">
        </div>
        <div class="over-info">
            <div>
                <div>
                    <h4><span class="label label-default">Top Illusion Temple </span><span class="label label-custom">Geral</span></h4>
                    <div class="rating">
										        <?
include("modules/settings.php");
$query=mssql_query("SELECT TOP 3 Name , Score FROM RankingIllusionTemple ORDER BY Score DESC");
while($row=mssql_fetch_assoc($query)){
$namez=$row['Name'];
$rst[10]=$row['Score'];

?>
          <?=++$count10;?>º - <?=$namez;?> (<?=$rst[10];?>)</br>
      <?

}
?>
                    </div>
                </div>
            </div>
        </div>
    </a>
    
</div>