<!DOCTYPE html>
<html>
  <head>
    <title>Better GUID : Pseudo Random GUID Generator</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="http://yui.yahooapis.com/combo?3.0.0/build/cssreset/reset-min.css&3.0.0/build/cssfonts/fonts-min.css&3.0.0/build/cssbase/base-context-min.css" />
    <link rel="stylesheet" href="/stylesheets/screen.css">
  </head>
  <body>
    <h1>Better GUID</h1>
    <h2>a pseudo random guid generator with no options</h2>
    <?
      function generate($length) {
        return strtoupper(substr(md5(mt_rand()), 0, $length));
      }
    ?>
    <div id="password">
      <dl>
        <dt><? echo generate(8) ?>-<? echo generate(4) ?>-<? echo generate(4) ?>-<? echo generate(4) ?>-<? echo generate(12) ?></dt>
      </dl>
    </div>
    <div id="creator"><a href="http://nickchapman.me/">by nick chapman</a></div>
    <script type="text/javascript">
      var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
      document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
      </script>
      <script type="text/javascript">
      try {
      var pageTracker = _gat._getTracker("UA-15810736-1");
      pageTracker._trackPageview();
      } catch(err) {}
    </script>
  </body>
</html>