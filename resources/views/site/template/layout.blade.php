<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
  <head>
    <!-- Site Title-->
    <title>Noticias | 90total.com</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta charset="utf-8">
    <meta name="google-site-verification" content="LOIazz4KVfNACQDqBxFc03rQm0PHjOG9iHi99x3gtlc" />
    <link rel="icon" href="{{url('assets/images/favicon90.ico?v=2')}}" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,700%7CRoboto:300,400italic,400,500">
	{!! HTML::style('assets/css/style.css') !!}
	{!! HTML::style('assets/css/custom.css') !!}
		<!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
		<![endif]-->
  </head>
  <body>
    <!-- Page-->
    <div class="page">
		<!-- Page Header-->
		<header class="page-head undefined">
			@include('site.template.header')
		</header>
		<!-- Page Content-->
	    <main class="page-content">
			@yield('content-page')
	    </main>
		<!-- Page Footer-->
		<footer class="page-foot section-top-38">
			@include('site.template.footer')			
		</footer>
	    las mejores noticias sobre deportes
	    <a rel="nofollow" href="#" target="_blank">
	    	90total.com
	    </a>
    </div>
    <!-- Java script-->
    {!! HTML::script('assets/js/core.min.js',
	    array('type' => 'text/javascript')) 
	!!}
	{!! HTML::script('assets/js/script.js',
	    array('type' => 'text/javascript')) 
	!!}
  </body>
</html>