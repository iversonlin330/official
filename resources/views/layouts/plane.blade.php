<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<head>
  <meta charset="utf-8"/>
  <link rel="icon" type="image/x-icon" href="/icon.jpg" />
  <meta name="title" content ="棋夢元">
  <meta name="keywords" content="棋夢元, 象棋, 台灣, 中華民國, 排名賽, 等級分, Elo, Glicko, SEO">
  <title>棋夢元</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="專為台灣棋賽作記錄，方便棋手查詢勝敗、排名、儲存棋譜和棋藝學習的集中地。">
  <meta name="author" content="uylin40@gmail.com">
  
  <meta http-equiv="Content-Type" content="text/html" charset=utf-8">
  <meta property="fb:app_id" content="1946376638913233" />
  <meta property="fb:admins" content="1193482045"/>
  
  <meta property="og:title" content="棋夢元" >
  <meta property="og:url" content="cchess.nctu.me">
  <meta property="og:image" content="cchess.nctu.me/icon.jpg">
  <meta property="og:description" content="專為台灣棋賽作記錄，方便棋手查詢勝敗、排名、儲存棋譜和棋藝學習的集中地。" >
  <meta property="og:locale" content="zh_TW">
  <meta property="og:type" content="website">
  
  
  <link rel="stylesheet" href="{{ asset("assets/stylesheets/styles.css") }}" />
  <!-- Global Site Tag (gtag.js) - Google Analytics -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css" type="text/css"/>
	<link rel="stylesheet" href="//fonts.googleapis.com/earlyaccess/notosanstc.css" type="text/css"/>
	@yield('head')
	<style>
		body{
			font-family: 'Noto Sans TC', sans-serif;
		}
	</style>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-105848006-1', 'auto');
	ga('require', 'displayfeatures');
    ga('send', 'pageview');

  </script>
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5add9c6630be5311"></script>
</head>
<body>
  @yield('body')
  <script src="{{ asset("assets/scripts/frontend.js") }}" type="text/javascript"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.min.js"></script>
  @yield('script')
</body>
</html>