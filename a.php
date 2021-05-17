<html>
  <head>
    <title>Cómo abrir una nueva pestaña con Java Script</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  </head>
  <body>
    <button id="open">Abrir</button>
    <script>
      function abrirNuevoTab(url) {
        // Abrir nuevo tab
        var win = window.open(url, '_blank');
        // Cambiar el foco al nuevo tab (punto opcional)
        win.focus();
      }
      $('#open').click(function(){
        abrirNuevoTab('https://www.youtube.com/')
      })
    </script>
  </body>
</html>