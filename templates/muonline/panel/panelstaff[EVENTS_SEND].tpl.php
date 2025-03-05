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
          <h1><i class="fa fa-send"></i> Enviar Eventos</h1>
          <ul>
           <li><a href="?panel=panelstaff"><i class="fa fa-home"></i> Início</a> /</li>
           <li><a href="#"> Ferramentas</a> /</li>
           <li><a href="#"> Enviar Eventos</a></li>
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
    {#RespostWrite}
      <form action='?panel=panelstaff&amp;option=EVENTS_SEND&amp;Write=true' method="post">

      <strong>Preencha todos os campos abaixo para abrir o pedido!</strong>

        <table>
          <tr>
            <td style="width: 50%;">
              <div class="input-field">
                <select name="character" required>
                  <option value="" disabled selected>Selecionar Staff</option>
                  {#CHARACTER_LIST_TAG_OPTION}
                </select>
              </div>
              <div class="input-field">
                <input id="input-name2" name="subject" type="text" value="">
                <label for="input-name2">Evento</label>
              </div>
              <div class="input-field">
                <input id="input-name3" name="event" type="text" value="">
                <label for="input-name3">Link das Fotos</label>
              </div>
            </td>
            <td>
              <div class="input-field">
                <textarea id="description" class="materialize-textarea" name="description" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-validation-threshold="10" data-parsley-minlength-message="Descrição" style="height: 123px;" required></textarea>
                <label  for="description">Descrição</label>
              </div>
            </td>
          </tr>
        </table>
        <font color="red">Não use os caracteres: " (aspas) ' (apostofro) ; (ponto e virgula)</font>
        <br /><br /><input type='Submit' class='btn' value='Enviar' />
      </form>   
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