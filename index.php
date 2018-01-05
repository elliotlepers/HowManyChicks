<?php
$site_domain =      "http://howmanychicks.com";
$site_title =       "How many chicks ?";
$site_description =  "Easily count how many chicks and how many dudes are in your list";
$fb_app_id =        "1470937482981086";
$share_img_url =    "http://howmanychicks.com/images/share.png";
$ga_tracker =       "UA-56245046-20";
$tweet_text =       rawurlencode("Wondering how many chicks and dudes are on your list? Try this!");
?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $site_title;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo $site_description;?>"/>

	<meta property="fb:app_id" content="<?php echo $fb_app_id;?>"/>
	<meta property="og:title" content="<?php echo $site_title;?>"/>
	<meta property="og:type" content="website"/>
	<meta property="og:description" content="<?php echo $site_description;?>"/>
	<meta property="og:image" content="<?php echo $share_img_url;?>"/>
	<meta property="og:url" content="<?php echo $site_domain;?>" />
	<meta property="og:site_name" content="<?php echo $site_title;?>"/>
	<meta name="twitter:title" content="<?php echo $site_title;?>" />
	<meta name="twitter:image" content="<?php echo $share_img_url;?>" />
	<meta name="twitter:description" content="<?php echo $site_description;?>" />
	<meta name="twitter:url" content="<?php echo $site_domain;?>" />
	<meta name="twitter:card" content="summary_large_image" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="images/favicon.png">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/style.css?v=1.0.1">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', '<?php echo $ga_tracker;?>', 'auto');
		ga('send', 'pageview');
	</script>

	</head>
	<body class="">


        <div class="viewport">
            <div class="positioner">
                <header role="banner">

                    <div class="brand">
                        <h1><?php echo str_replace(" ?", "&nbsp;?", $site_title);?></h1>
                    </div>

                    <blockquote>
                    </blockquote>

										<form class="form">
		                    Paste in a list of first names. We'll tell you how many chicks and dudes you have in it.<br/>
		                    Please, one name per line.
		                    <div class="clearfix"></div>
		                    <textarea name="names" class="names" placeholder=""></textarea>

		                    <button type="submit" name="submit" class="submit" data-loading-text="<i class='spinner sm-spin'></i> Calculating">
		                        Tell me how many chicks and dudes
		                    </button>

		                </form>

                </header>

								<div class="confirm">
								</div>

            </div><!--positioner-->



        </div><!--viewport-->

        <footer class="footer">

            <a class="share" data-network="Facebook" onclick="window.open('http://www.facebook.com/sharer.php?u=<?php echo $site_domain;?>', 'Partager sur Facebook', 'width=600, height=350'); return false;">
                <i class="icon-2-facebook-square"></i> Share
            </a>

            <a class="share" data-network="Facebook" onclick="window.open('https://twitter.com/intent/tweet?text=<?php echo $tweet_text;?>&url=<?php echo $site_domain;?>', 'Partager sur Twitter', 'width=600, height=350'); return false;">
                <i class="icon-2-twitter"></i> Tweet
            </a>

            <span><a href="http://pole.paris" target="_blank">Powered by Pole</a></span>

            <span>This website uses cookies</span>

            <a href="/mentions-legales/" target="_blank">Legal stuffs</a>
            <div class="clearfix"></div>
        </footer>


		<!-- jQuery -->
		<script src="//code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
		<!-- jQuery Easing -->
		<script src="js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Main JS -->
		<script src="js/main.js"></script>

	</body>
</html>
