<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
  <meta charset="utf-8"/>
  <title>Official</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <meta content="" name="description"/>
  <meta content="" name="author"/>

  <link rel="stylesheet" href="{{ asset("assets/stylesheets/styles.css") }}" />
  <!-- Global Site Tag (gtag.js) - Google Analytics -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-105848006-1', 'auto');
	ga('require', 'displayfeatures');
    ga('send', 'pageview');

  </script>
</head>
<body>
  @yield('body')
  <script src="{{ asset("assets/scripts/frontend.js") }}" type="text/javascript"></script>
  @yield('script')
</body>
</html>