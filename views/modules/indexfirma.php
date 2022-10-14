<?php
  session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Firma de Usuario</title>
  
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="stylesheet" href="views/css/signature-pad.css">
      <script type="text/javascript">
        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-39365077-1']);
        _gaq.push(['_trackPageview']);

        (function() {
          var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
          ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();
      </script>
  </head>
  <body onselectstart="return false">
    <a id="github" style="position: absolute; top: 0; right: 0; border: 0" href="https://github.com/szimek/signature_pad"></a>
    <div id="signature-pad" class="signature-pad">
      <div class="signature-pad--body">
        <canvas></canvas>
      </div>
      <div class="signature-pad--footer bg-dark p-3">
        <div class="signature-pad--actions">
          <div>
            <button type="button" class="btn btn-danger px-3 mx-3" data-action="clear">Borrar</button>
            <button type="button" class="btn btn-warning px-3" data-action="undo">Retroceder</button>
          </div>
          <div>
            <button type="button" class="btn btn-success px-3" data-action="save-png">Salvar Como PNG</button>
            <a onclick="window.close();" class="btn btn-danger px-3 mx-3" role="button" aria-pressed="true">Cerrar</a>
          </div>
        </div>
      </div>
    </div>
    <script src="views/js/signature_pad.umd.js"></script>
    <script src="views/js/app.js"></script>
  </body>
</html>
