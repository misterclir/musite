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
          <h1><i class="ion-android-open"></i> Tickets Abertos</h1>
          <ul>
           <li><a href="?panel=panelstaff"><i class="fa fa-home"></i> Início</a> /</li>
           <li><a href="#"> Ferramentas</a> /</li>
           <li><a href="#"> Tickets Abertos</a></li>
         </ul>
       </div>
       <div class="col s12 m3 l2 right-align">
        <a href="#!" class="btn grey lighten-3 grey-text z-depth-0 chat-toggle"><i class="fa fa-comments"></i></a>
      </div>
    </div>
  </div>
  <!-- /Breadcrumb -->
  <br />

  <div style="margin-top: 10px;" id="logs_">
    {#RESULTTPL}
  </div>

</section>
<!-- /Main Content -->
{#INCLUDE:panel/search-bar}
{#INCLUDE:panel/chat-bar}
<footer>
  &copy; 2017 <strong>Berlan Barbalho</strong>. Todos Direitos Reservados.
</footer>
{#INCLUDE:panel/js}
</body>
</html>