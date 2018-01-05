<?php
$site_domain =      "http://howmanychicks.com";
$site_title =       "How many chicks ?";
$site_description =  "Easily count how many chicks and how many dudes are in your list";
$fb_app_id =        "1470937482981086";
$share_img_url =    "http://howmanychicks.com/images/share.png";
$ga_tracker =       "UA-56245046-20";
$tweet_text =       rawurlencode("Wandering how many chicks and dudes are on your list ? Try this !");
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
	<link rel="shortcut icon" href="../images/favicon.png">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="../css/animate.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="../css/bootstrap.css">

	<link rel="stylesheet" href="../css/style.css">
		
	<!-- Modernizr JS -->
	<script src="../js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="../js/respond.min.js"></script>
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

        
        
        <div class="page">
            
            <header role="banner">

                <a class="brand" href="/">
                    <h1><?php echo $site_title;?></h1>
                </a>

            </header>
            
            <h2>Mentions légales</h2>
            
            <h3>Editeur</h3>
            <p>Ce site est édité par Pole, 22 bis rue des Taillandiers 75011 Paris, hi@pole.paris</p>
            <h3>Directeur de la publication</h3>
            <p>Elliot Lepers</p>
            <h3>Hébergement</h3>
            <p>Ce site est hébergé par Gandi SAS 63-65 Boulevard Masséna 75013 Paris</p>
            <h3>Donnés nominatives</h3>
            <p>L’utilisateur est informé que, lors de sa navigation sur le site howmanychicks.com, des données à caractère personnel peuvent être collectées, via le formulaire d’inscription.</p>
            <p>En application des articles 38 et suivants de la loi du 6 janvier 1978, vous bénéficiez des droits d’accès, de rectification, de suppression et d’opposition aux informations vous concernant. Vous pouvez exercer ces droits en nous écrivant à l’adresse hi@pole.paris.</p>
            <p>En application de la <a href="https://www.cnil.fr/fr/dispense/di-007-fichiers-de-communication-non-commerciale" target="_blank" rel="noopener noreferrer">dispense DI-007</a> pour les fichiers de communication non commerciale, le présent fichier est dispensé de déclaration à la CNIL.</p>
            <h3>Utilisation de cookies</h3>
            <p>Nous vous informons de la présence de cookies de session. Ces cookies nous permettent d’affiner l’analyse de la fréquentation de notre site. Tous les résultats obtenus sont compilés et totalement anonymes. Dans tous les cas, vous avez le contrôle de ces cookies. Vous avez la possibilité de les lire, de les filtrer, de les refuser et de les détruire dans la configuration de votre navigateur interne comme suit :</p>
            <p>Sous Internet Explorer : Menu « Outils &gt; Options Internet ». Cliquez sur « Confidentialité » et choisissez « Bloquer tous les cookies ». Validez sur « OK »</p>
            <p>Sous Firefox : Menu « Outils &gt; Options ». Cliquez sur l’option « Vie privée » puis désactivez les cookies dans la rubrique « Cookies »</p>
            <p>Sous Chrome : Menu « Outils ». Cliquez sur « Effacer les données de navigation » et choisissez « Supprimer les cookies et autres données de site et de plug-in ». Validez sur « Effacer les données de navigation ».</p>

        </div><!--page-->
				
        
	


		<!-- jQuery -->
		<script src="//code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
		<!-- jQuery Easing -->
		<script src="../js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="../js/bootstrap.min.js"></script>
		<!-- Main JS -->
		<script src="../js/main.js"></script>

	</body>
</html>
