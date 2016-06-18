<?php

function ac_defer_app_script() {
?>
  <script type="text/javascript">
    function jsEnqueueScript($scriptPath) {
      var element = document.createElement("script");
      element.src = $scriptPath;
      document.body.appendChild(element);
    }

    function downloadJSAtOnload() {
      jsEnqueueScript('<?php echo get_asset_url( 'app.js') ?>');
    }

    if (window.addEventListener) {
      window.addEventListener("load", downloadJSAtOnload, false);
    } else if (window.attachEvent) {
      window.attachEvent("onload", downloadJSAtOnload);
    } else {
      window.onload = downloadJSAtOnload;
    }
  </script>
<?php
}
