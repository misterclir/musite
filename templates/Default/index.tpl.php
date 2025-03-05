{#INCLUDE:header}
<script>
    var eventsTime = [["Chaos Castle",["01:00","03:00","05:00","07:00","09:00","11:00","13:00","15:00","17:00","19:00","21:00","23:00"]],["Devil Square",["00:30","04:30","08:30","12:30","16:30","20:30"]],["Blood Castle",["00:00","03:00","06:00","09:00","12:00","15:00","18:00","21:00"]],["Castle Deep",["04:00","12:00","20:00"]],["Skeleton King",["00:05","04:05","08:05","12:05","16:05","20:05"]],["Red Dragon",["00:15","04:15","08:15","12:15","16:15","20:15"]],["White Wizard",["00:50","04:50","08:50","12:50","16:50","20:50"]],["Lorencia Drop",["00:15","04:15","08:15","12:15","16:15","20:15"]]];

    function toSeconds(h,m,s){
        return h*3600+m*60+s;
    }

    function updateEventsTime()
    {
        var d = new Date();
        var time = toSeconds(d.getHours(), d.getMinutes(), d.getSeconds());

        var html = '';
        for (i in eventsTime) {
            var j;
            for (j=0; j<eventsTime[i][1].length; j++) {
                var t = eventsTime[i][1][j].split(':');
                t = toSeconds(t[0],t[1],0);
                if(t > time) break;
            }

            j = j%eventsTime[i][1].length;
            var t = eventsTime[i][1][j].split(':');

            var diff = toSeconds(t[0],t[1],0) - time;
            if(diff < 0) diff += 3600*24;

            var c = "label-default";
            if(diff < 15*60) c = "label-success";

            var h = parseInt(diff/3600);
            diff -= 3600*h;
            var m = parseInt(diff/60);
            var s = diff - m*60;

            var countdown = h+':'+("0" + m).slice(-2)+':'+("0" + s).slice(-2);

            html += '<div class="block-content"  style="font-size: 12px;">'+eventsTime[i][1][j]+' - '+eventsTime[i][0]+'<span class="pull-right label '+c+'"  style="font-size: 13px;">'+countdown+'</span></div>';
			//html += '<div class="block-content"  style="font-size: 12px;">00:00 - '+eventsTime[i][0]+'<span class="pull-right label"  style="font-size: 13px;">00:00</span></div>';

        }
        $('.events').html(html);
    }

    onReady.push(function(){ setInterval(updateEventsTime, 1000) });

</script>

  <!-- Main Content -->
  <section class="content-wrap">

    <!-- Banner -->
    <section class="youplay-banner banner-top youplay-banner-parallax">
      <div class="image" style="background-image: url('templates/{#TEMPLATE_DIR}/assets/images/banner-blog-bg.jpg')">
      </div>

    <div class="info">
        <div>
            <div class="container">
			<?php
			$text = array("e a jornada começa!", "o inicio da caçada", "derrote seus maiores medos", "a era dos desafios");
			$rand = rand(0, 3);
			?>
                <h1><?=$text[$rand]?></h1>
                <br>
                <em>Confira todas as novidades, sempre o melhor para você!</em>
                <br>
                <br>
                <a class="btn btn-lg" href="?page=info">Informações</a>
                <a class="btn btn-lg" href="?page=register">Cadastro</a>
                <a class="btn btn-lg" href="?page=downloads">Download</a>
            </div>
        </div>
    </div>
	
    </section>
    <!-- /Banner -->

<!-- Popular -->
{#INCLUDE:rollers}
<h2 class="container h1">Os melhores <a href="?page=rankreset" class="btn pull-right">Veja Mais</a></h2>
{#INCLUDE:tophome}
<div class="h2"></div>
<section class="youplay-banner youplay-banner-parallax small">
    <div class="image" style="background-image: url('templates/{#TEMPLATE_DIR}/assets/images/banner-witcher-3.jpg');">
</div>
<div class="info container align-center">
<div>
<h2>Inauguração em</h2>
 
<div class="countdown  style-1" id="youplay_countdown_id_1" data-end="2017-06-16 14:00" data-timezone="America/Sao_Paulo"></div>
      <script type="text/javascript">
        jQuery(function() {
          jQuery("#youplay_countdown_id_1").each(function() {
              var tz = jQuery(this).attr('data-timezone');
              var end = jQuery(this).attr('data-end');
                  end = moment.tz(end, tz).toDate();
              jQuery(this).countdown(end, function(event) {
                
        jQuery(this).html(
          event.strftime([
            '<div class="countdown-item">',
                '<span>Dias</span>',
                '<span><span>%D</span></span>',
            '</div>',
            '<div class="countdown-item">',
                '<span>Horas</span>',
                '<span><span>%H</span></span>',
            '</div>',
            '<div class="countdown-item">',
                '<span>Minutos</span>',
                '<span><span>%M</span></span>',
            '</div>',
            '<div class="countdown-item">',
                '<span>Segundos</span>',
                '<span><span>%S</span></span>',
            '</div>'
          ].join(''))
        );
              });
          })
        })
      </script>

<br>
<br>
<a class="btn btn-lg" href="?page=downloads">Baixe agora mesmo seu cliente e esteja preparado!</a>
</div>
</div>
</section>

<div class="container youplay-news">
    <div class="col-md-9">
        <h2>Últimas Notícias</h2>
<!-- Single News Block -->
{#LAST_NOTICES_HOME}
<!-- /Single News Block -->
    </div>
    <div class="col-md-3">
        <div class="side-block">
    <h4 class="block-title">Server Status</h4>
        <div class="block-content">
        <div class="row">
            <div class="col col-md-5">
Server PvP
            </div>
<?php
$MaximoOnline = 100;
global $ldMssql;
$db = $ldMssql->query("SELECT COUNT(memb___id) FROM MuOnline.dbo.MEMB_STAT WHERE ConnectStat = '1'");

$data = mssql_fetch_row($db);

$Onlinez = mssql_num_rows($db);
$Onlines = $data[0]*3;

$TotalOnline = number_format($data[0]*1,0,"",".");

$Percent = ($data[0]*1 / $MaximoOnline);

$Barra = (int) (330 * $Percent);
?>
            <div class="col col-md-7">
                <div class="progress" style="margin-bottom: 0px;">
                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="305" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $Barra; ?>%">
                        <span class="sr-only"></span>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col col-md-5">
            </div>
            <div class="col col-md-7" style="text-align: center">
            <small><?php echo $Onlines; ?> Onlines</small>
            </div>
        </div>
    </div>
        <div class="block-content">
        Versão <span class="pull-right label label-default" style="font-size: 15px;">{#SERVER_VERSION}</span>
    </div>
    <div class="block-content">
        Experiência <span class="pull-right label label-default" style="font-size: 15px;">x1000 &nbsp <span class="badge bg-default  badge-float">x500 ML</span> &nbsp &nbsp &nbsp &nbsp  </span>
    </div>
    <div class="block-content">
        Exp Vip Premium <span class="pull-right label label-default" style="font-size: 15px;">x1500 &nbsp <span class="badge bg-default  badge-float">x800 ML</span> &nbsp &nbsp &nbsp &nbsp  </span>
    </div>
    <div class="block-content" style="height: 30px">
        <a href="?page=info" style="width: 100%; margin: auto" class="btn btn-primary btn-xs">Veja Mais</a>
    </div>
</div>

<div class="side-block">
    <h4 class="block-title">Eventos</h4>
    <div class="events"></div>
</div>

<div class="side-block">
    <h4 class="block-title">Equipe</h4>
			<?php 
			global $ldMssql;
			$findMembersQ = $ldMssql->query("Use ".DATABASE_CHARACTERS."; SELECT Character.Name, MEMB_STAT.ConnectStat FROM ".DATABASE_CHARACTERS.".dbo.Character JOIN ".DATABASE_ACCOUNTS.".dbo.MEMB_STAT ON (Character.AccountID = MEMB_STAT.memb___id) WHERE Character.CtlCode = 8 OR Character.CtlCode = 32");
            while($findMembers = mssql_fetch_object($findMembersQ))
			{
				echo "<div class=\"block-content\" style=\"font-size: 12px;\">". $findMembers->Name ."<span class=\"pull-right label label-default\" style=\"font-size: 13px;\">". ($findMembers->ConnectStat == 0 ? "Offline":"<span style=\"color:green;\">Online</span>") ."</span></div>";
			}
			?>
</div>
<div class="side-block">
    <h4 class="block-title">Destaques</h4>
    <div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/MHC9hD_xs3I?ecver=2" width="250" height="210" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe></div>
</div>


    </div>
</div>
    

	{#INCLUDE:footer}