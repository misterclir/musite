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
          <h1><i class="mdi-content-add"></i> Adicionar Notícia</h1>
          <ul>
           <li><a href="?panel=panelstaff"><i class="fa fa-home"></i> Início</a> /</li>
           <li><a href="#"> Ferramentas</a> /</li>
           <li><a href="#"> Adicionar Notícia</a></li>
         </ul>
       </div>
       <div class="col s12 m3 l2 right-align">
        <a href="#!" class="btn grey lighten-3 grey-text z-depth-0 chat-toggle"><i class="fa fa-comments"></i></a>
      </div>
    </div>
  </div>
  <!-- /Breadcrumb -->
  <br />

  <script>
              /* Base64 conversion methods.
             * Copyright (c) 2006 by Ali Farhadi.
             * released under the terms of the Gnu Public License.
             * see the GPL for details.
             *
             * Email: ali[at]farhadi[dot]ir
             * Website: http://farhadi.ir/
             */

            //Encodes data to Base64 format
            function base64Encode(data){
              if (typeof(btoa) == 'function') return btoa(data);//use internal base64 functions if available (gecko only)
              var b64_map = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';
              var byte1, byte2, byte3;
              var ch1, ch2, ch3, ch4;
              var result = new Array(); //array is used instead of string because in most of browsers working with large arrays is faster than working with large strings
              var j=0;
              for (var i=0; i<data.length; i+=3) {
                byte1 = data.charCodeAt(i);
                byte2 = data.charCodeAt(i+1);
                byte3 = data.charCodeAt(i+2);
                ch1 = byte1 >> 2;
                ch2 = ((byte1 & 3) << 4) | (byte2 >> 4);
                ch3 = ((byte2 & 15) << 2) | (byte3 >> 6);
                ch4 = byte3 & 63;
                
                if (isNaN(byte2)) {
                  ch3 = ch4 = 64;
                } else if (isNaN(byte3)) {
                  ch4 = 64;
                }

                result[j++] = b64_map.charAt(ch1)+b64_map.charAt(ch2)+b64_map.charAt(ch3)+b64_map.charAt(ch4);
              }

              return result.join('');
            }
            
            //Decodes Base64 formated data
            function base64Decode(data){
              data = data.replace(/[^a-z0-9\+\/=]/ig, '');// strip none base64 characters
              if (typeof(atob) == 'function') return atob(data);//use internal base64 functions if available (gecko only)
              var b64_map = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';
              var byte1, byte2, byte3;
              var ch1, ch2, ch3, ch4;
              var result = new Array(); //array is used instead of string because in most of browsers working with large arrays is faster than working with large strings
              var j=0;
              while ((data.length%4) != 0) {
                data += '=';
              }
              
              for (var i=0; i<data.length; i+=4) {
                ch1 = b64_map.indexOf(data.charAt(i));
                ch2 = b64_map.indexOf(data.charAt(i+1));
                ch3 = b64_map.indexOf(data.charAt(i+2));
                ch4 = b64_map.indexOf(data.charAt(i+3));

                byte1 = (ch1 << 2) | (ch2 >> 4);
                byte2 = ((ch2 & 15) << 4) | (ch3 >> 2);
                byte3 = ((ch3 & 3) << 6) | ch4;

                result[j++] = String.fromCharCode(byte1);
                if (ch3 != 64) result[j++] = String.fromCharCode(byte2);
                if (ch4 != 64) result[j++] = String.fromCharCode(byte3);  
              }

              return result.join('');
            }
          </script>
          <form action="?panel=panelstaff&amp;option=ADD_NOTICE&amp;Write=true" method="post" name="noticeFrom">
            <div class="input-field">
              <input id="input-name" name="subject" type="text" value="" maxlength="50" required>
              <label for="input-name">Titulo</label>
            </div>
            <div class="input-field">
              <textarea id="content" class="materialize-textarea" name="content" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-validation-threshold="10" data-parsley-minlength-message="Aceita codigos HTML" required></textarea>
              <label  for="content">Aceita codigos HTML</label>
            </div>
            <br />
            <input type="submit" value="Adicionar" class="btn" onclick="noticeFrom.content.value = base64Encode(noticeFrom.content.value);" />
          </form>

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