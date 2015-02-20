<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>CMS Mediappeal 1.0.1 (beta) - NO CAMBUI</title>
		<meta name="description" content="This is page-header (.page-header &gt; h1)" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!--basic styles-->

		<link href="<?= $_URL ;?>bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?= $_URL ;?>bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?= $_URL ;?>themes/font-awesome/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="<?= $_URL ;?>themes/font-awesome/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!--page specific plugin styles-->

		<link rel="stylesheet" href="<?= $_URL ;?>themes/css/prettify.css" />
		<link rel="stylesheet" href="<?= $_URL ;?>css/style.css" />
		<!--fonts-->

		<link rel="stylesheet" href="<?= $_URL ;?>http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

		<!--ace styles-->

		<link rel="stylesheet" href="<?= $_URL ;?>themes/css/w8.min.css" />
		<link rel="stylesheet" href="<?= $_URL ;?>themes/css/w8-responsive.min.css" />
		<link rel="stylesheet" href="<?= $_URL ;?>themes/css/w8-skins.min.css" />
		

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="<?= $_URL ;?>themes/css/ace-ie.min.css" />
		<![endif]-->

		<!--inline styles if any-->
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript">
			window.jQuery || document.write("<script src='themes/js/jquery-1.9.1.min.js'>"+"<"+"/script>");
		</script>
	</head>

	<body>
		
	<div class=" main-login" >
		


		<div class="container-fluid main-login" id="main-container">


			<div id="main-content" class="clearfix">

				
				<?= $this->fetch('content'); ?>
				
				
			</div><!--/#main-content-->
			
		</div><!--/.fluid-container#main-container-->

<br class="cl">

		</div><!--/.fluid-container#main-container-->
	</body>
</html>
