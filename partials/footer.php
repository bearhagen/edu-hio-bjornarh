  <footer id="footer">
    <p>
      <a href="mailto:bjornarh@hiof.no">bjornarh@hiof.no</a>
    </p>
    <p>Bjørnar Hagen - <?= date("Y"); ?></p>
  </footer>
  <link href="https://fonts.googleapis.com/css?family=Lato:300:400:700" rel="stylesheet">
  <link href="https://cdn.datahjelpen.no/fonts/butler/butler-700.css" rel="stylesheet">
  <script type="text/javascript">
    function padForNav(element) {
      if (element == null) {
        element = document.querySelector('main');
      }

      var nav = document.querySelector('#nav-main');
      element.style.paddingTop = nav.scrollHeight + 'px';
    };
  </script>
</body>
</html>
