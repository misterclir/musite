<!DOCTYPE html>
<html lang="pt-br">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Berlan Barbalho">
  <link rel="icon" href="https://lh5.googleusercontent.com/-pR8BtlW0P0Y/AAAAAAAAAAI/AAAAAAAAABY/SIy3mW-yFaM/photo.jpg">
  <title>{#TITLE_SITE}</title>
  {#INCLUDE:panel/css}
</head>
<body>
  {#INCLUDE:panel/navbar-top}
  {#INCLUDE:panel/navbar-yay}
  <!-- Main Content -->
  <section class="content-wrap">

   <!-- Breadcrumb -->
   <div class="page-title">
    <div class="row">
     <div class="col s12 m9 l10">
      <h1><i class="fa fa-dashboard"></i> Painel de Controle</h1>
      <ul>
       <li><a href="#"><i class="fa fa-home"></i> Início</a> /</li>
       <li><a href="?page=paneladmin">Painel de Controle</a></li>
     </ul>
   </div>
   <div class="col s12 m3 l2 right-align"><a href="#" class="btn grey lighten-3 grey-text z-depth-0"><i class="fa fa-comments"></i></a></div>
 </div>
</div>
<!-- /Breadcrumb -->

<!-- Stats Panels -->
<div class="row sortable">
  <div class="col l3 m6 s12">
   <a href="#" class="card-panel stats-card red lighten-2 red-text text-lighten-5">
    <i class="fa fa-users"></i> <span class="count">{#TOTAL_ACCOUNTS}</span>
    <div class="name">Total de Contas</div>
  </a>
</div>
<div class="col l3 m6 s12">
 <a href="#" class="card-panel stats-card blue lighten-2 blue-text text-lighten-5">
  <i class="fa fa-child"></i> <span class="count">{#TOTAL_CHARATERS}</span>
  <div class="name">Total de Chars</div>
</a>
</div>
<div class="col l3 m6 s12">
 <a href="#" class="card-panel stats-card amber lighten-2 amber-text text-lighten-5">
  <i class="fa fa-spinner"></i> <span class="count">{#RECORD_ONLINE}</span>
  <div class="name">Recorde Online</div>
</a>
</div>
<div class="col l3 m6 s12">
 <div class="card-panel stats-card green lighten-2 green-text text-lighten-5">
  <i class="ion-radio-waves"></i> <span class="count">{#TOTAL_ACCOUNTS_ONLINES}</span>
  <div class="name">Total Online</div>
</div>
</div>
</div>
<!-- /Stats Panels -->
<div class="row sortable">
  <!-- Weather -->
  <div class="col l4 s12">
   <div class="card-panel weather-card blue-grey lighten-2 white-text">
    <p class="center"><i class="fa fa-spinner fa-pulse"></i> Weather</p>
  </div>
</div>
<!-- /Weather -->
<!-- Chart with Visits -->
<div class="col l8 s12">
 <div class="card-panel" id="chart1" style="height: 191px"></div>
</div>
<!-- /Chart with Visits -->
</div>

<!-- /Stats Panels -->
<div class="row sortable">
  <!-- Pie Chart -->
  <div class="col s12 l4">
   <div class="card">
    <div class="title">
     <h5>Vips / Associados</h5>
     <a class="close" href="#"><i class="mdi-content-clear"></i></a> <a class="minimize" href="#"><i class="mdi-navigation-expand-less"></i></a>
   </div>
   <div class="content">
    <div id="flotPieChart" style="height: 188px"></div>
  </div>
</div>
</div>
<!-- /Pie Chart -->
<!-- Orders Card -->
<div class="col l4 s12">
 <div class="card">
  <div class="title">
   <h5>Ordens</h5>
   <a class="close" href="#"><i class="mdi-content-clear"></i></a> <a class="minimize" href="#"><i class="mdi-navigation-expand-less"></i></a>
 </div>
 <div class="content orders-card">
   <h4>Em Breve</h4>
   <div class="row">
    <div class="col s6"><small>Total Ordens</small></div>
    <div class="col s6 right-align">100% <i class="fa fa-level-down red-text"></i></div>
  </div>
  <div class="progress small">
    <div class="determinate" style="width: 100%"></div>
  </div>
  <h4>Em Breve</h4>
  <div class="row">
    <div class="col s6"><small>Total Income</small></div>
    <div class="col s6 right-align">100% <i class="fa fa-level-up green-text"></i></div>
  </div>
  <div class="progress small">
    <div class="determinate" style="width: 100%"></div>
  </div>
  <h4>Em Breve</h4>
  <div class="row">
    <div class="col s6"><small>Total Refunds</small></div>
    <div class="col s6 right-align">100%</div>
  </div>
  <div class="progress small">
    <div class="determinate" style="width: 100%"></div>
  </div>
</div>
</div>
</div>
<!-- /Orders Card -->
<!-- Mail Card -->
<div class="col l4 s12">
 <div class="card">
  <div class="title">
   <h5>Mail</h5>
   <a class="close" href="#"><i class="mdi-content-clear"></i></a> <a class="minimize" href="#"><i class="mdi-navigation-expand-less"></i></a>
 </div>
 <div class="content mail-card">
   <div class="row">
    <div class="col s8"><a href="#"><strong>Berlan Barbalho</strong></a></div>
    <div class="col s4 right-align"><small>0:00 AM</small></div>
  </div>
  <div class="row">
    <div class="col"><a href="#">Lorem ipsum auctor elit sed risus vehicula, in euismod sem viverra. In non quam cursus, scelerisque lorem interdum, lacinia neque.</a></div>
  </div>
  <hr>
  <div class="row">
    <div class="col s8"><a href="#"><strong>Berlan Barbalho</strong></a></div>
    <div class="col s4 right-align"><small>0:00 AM</small></div>
  </div>
  <div class="row">
    <div class="col"><a href="#">Lorem ipsum auctor elit sed risus vehicula, in euismod sem viverra. In non quam cursus, scelerisque lorem interdum, lacinia neque.</a></div>
  </div>
</div>
</div>
</div>
<!-- /Mail Card -->
</div>

</section>
<!-- /Main Content -->
{#INCLUDE:panel/search-bar}
{#INCLUDE:panel/chat-bar}
<footer>
  &copy; 2017 - Painel Desenvolvido Por: <strong>Berlan Barbalho</strong>. Todos Direitos Reservados.
</footer>
{#INCLUDE:panel/js}
</body>
</html>